<?php
$names=file('en_lang.php');
// To check the number of lines
echo count($names).'<br>';
foreach($names as $name)
{
   echo $name.'<br>';
}
?>
