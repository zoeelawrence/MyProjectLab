<?php

define('DB_SERVER', 'servername');
define('DB_USERNAME', 'username');
define('DB_PASSWORD', 'password');
define('DB_DATABASE', 'database');

$db =  mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if($db-> connect_errno){
    die('Connect failed['.$db->connect_error.']');
}
/**
 * Created by PhpStorm.
 * User: 1406425
 * Date: 10/10/2016
 * Time: 15:27
 */