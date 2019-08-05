<?php
/**
* IP CHK 4-08-2019
* @package    IP CHK 4-08-2019
* @author     Vickom Morozov
* @copyright  2019
* @version    2.0
* Info :  php database
*/
debug_backtrace() || die ("Direct access not permitted.");
$connection = new mysqli('localhost','root','','perra');
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
$connection->set_charset('utf8');
$connection->query('SET NAMES utf8');
$inicio = microtime(true);

?>