<?php
/**
* IP CHK 4-08-2019
* @package    IP CHK 4-08-2019
* @author     Vickom Morozov
* @copyright  2019
* @version    2.0
* Info :  php class chk :D
*/
// Incluimos la database
Class chk{
public $true,$false;
function ipchk()
{
include 'php/database/db.php';
// En esta clase, iniciaremos la base de datos, comenzaremos las queryes y logearemos la ip, incluso si tiene cloudflare el dominio.
	//Verificamos si es cloudflare
$ip=@$_SERVER["HTTP_CF_CONNECTING_IP"];
      // No es, entonces retomemos la ip original
if (!isset($ip)):
  $ip = $_SERVER['REMOTE_ADDR'];
endif;

//Iniciamos la Query y Seleccionamos la Ip
$zorras = $connection->query("SELECT * FROM ips where ip='$ip' limit 1");
// Si no esta, la ingresamos
if(mysqli_num_rows($zorras) == 0):
// Creamos un puto date :D
$uruk = date('Y-m-d');
// Ingresamos la Query
$connection->query("INSERT INTO ips(ip,horario) VALUES('$ip','$uruk')");
endif;

// Encontramos la Ip en la database, que haremos ? compararla.
while($row = mysqli_fetch_array($zorras)):
// Verificamos si pasó un Día
if (strtotime($row['horario']) < strtotime("-1 day")){
// Retornamos
$this->true = 'yes';
}
else {
	// Retornamos
$this->false = 'no';
}


// Cerramos Clases
endwhile;
}}
