<?php
$fname=$_GET['file'];
$fname=str_replace('../','',$fname);

echo file_get_contents("./".$fname);
?>
