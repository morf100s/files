<?php
// Если включены строгие типы, то есть объявлено (strict_types=1);
$file = file_get_contents('./en_lang.php', true);
// Иначе
$file = file_get_contents('./en_lang.php', FILE_USE_INCLUDE_PATH);
?>
