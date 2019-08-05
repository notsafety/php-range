<?php
/**
* IP CHK 4-08-2019
* @package    IP CHK 4-08-2019
* @author     Vickom Morozov
* @copyright  2019
* @version    2.0
* Info :  php para proteger solo calls ajax
*/
define('IS_AJAX', isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');
/* If not ajax , restrict the newbie */
if(!IS_AJAX):
	/* Log Browser, Ip, cookie  and send email (Coming soon)*/
die('Restricted access');
endif;