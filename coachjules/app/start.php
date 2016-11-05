<?php
/**
 * Created by PhpStorm.
 * User: Oluwadamilola
 * Date: 9/7/2016
 * Time: 10:37
 */
ini_set('display_error', 'on');

define('APP_ROOT', __DIR__);
define('VIEW_ROOT' , APP_ROOT . '/views');
define('BASE_URL', ' http://localhost/coachjules');

$db_host = 'localhost';
$db_user = 'bean';
$db_pass = 'beanne';
$db_name = 'architecture';


$dbC = mysqli_connect($db_host, $db_user, $db_pass, $db_name)
        or die('Error Connecting to MySQL DataBase');

require '/views/functions.php';