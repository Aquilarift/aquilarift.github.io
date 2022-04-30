TEST
<?php

$targetPath = "uploads/" . "1.jpg";
move_uploaded_file($_FILES["inpFile"]["tmp_name"], $targetPath);

$command = escapeshellcmd('python net.py');
$output = shell_exec($command);
echo $output;
?>
