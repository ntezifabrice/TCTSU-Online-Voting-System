<?php
$qwerty="_TUMBA COLLEGE";
echo ((   substr($qwerty, 0, strpos($qwerty, '_'))   ).(strpos($qwerty, '_')==0)?(substr($qwerty, (strpos($qwerty, '_')+1))):'ALL').' OF TECHNOLOGY';
?>