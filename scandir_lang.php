<?php
$directory = '/usr/share/php';
$scanned_directory = array_diff(scandir($directory), array('..', '.'));
?>
