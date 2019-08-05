<?php

include 'php/database/db.php';
include 'php/chk/class.php';
// Iniciamos la Clase
$info = new chk();
// Iniciamos la Función
$info->ipchk();
if ($info->true == 'yes') {
// Aquí iria el código si pasó un dia
}
if ($info->false == 'no') {
// Aquí iria el código si no pasó un dia
}