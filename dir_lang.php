<?php
$d = dir("/usr/share/php");
echo "Дескриптор: " . $d->handle . "\n";
echo "Путь: " . $d->path . "\n";
while (false !== ($entry = $d->read())) {
   echo $entry."\n";
}
$d->close();
?>
