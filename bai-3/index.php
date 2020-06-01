<?php
// Turn off all error reporting
// error_reporting(0);
// khởi động session
session_start();

echo 'bai 3';

echo '<br>';
include 'include.php';
include_once 'include.php';

echo '<br>';
require 'require.php';
require_once 'require.php';

echo '<br>';
echo 'Cookie';
echo time();
//echo date('Y-m-d H:i:s',0);
$arr = [1,2,3];
$json = json_encode($arr);
echo '<br>';
var_dump($json);
echo '<br>';
$json_decode = json_decode($json);
var_dump($json_decode);

setcookie("abc",  'hoang dung', time() + 10);

if(isset($_COOKIE['abc'])) {
    echo "Cookie named '" . $_COOKIE['abc'] . "' is not set!";
}

include_once 'session.php';

include_once 'try_catch.php';
