<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');

// định nghĩa hàm trong php - function
function hi($a) {
    return $a ."<br/>";
}

//echo hi("heLLo");

function hello($a="Hello") {
    return $a;
}
//echo hello();

echo '<br>';

$age = 30; // phạm vi toàn cục
function birthday($age) {
    echo $age; //biến có phạm vi cục bộ
}

birthday($age);

function birthday2() {
    global $age;
//Khai báo truy xuất tới biến toàn cục
    echo $age;
}
birthday2();

echo '<br>';

function helloworld() {
    echo "hello";
}
$test = function_exists("helloworld");
//echo $test; // True


echo date('d-m-Y');
echo '<br>';
echo date('H:i:s');
echo '<br>';
echo date('d-m-Y H:i:s' , 1590413985);
echo '<br>';

echo trim(' dev master ');

echo strtolower('Dev Master');

echo strtoupper('Dev Master');
echo '<br>';
echo ucwords('dev master');
echo '<br>';

$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
echo $pizza;
$pieces = explode(" ", $pizza);
//echo '<pre>';
//print_r($pieces);

$pizza2  = "piece1; piece2; piece3 ;piece4 ;piece5; piece6";
echo $pizza2;
$pieces2 = explode(";", $pizza2);
//echo '<pre>';
//print_r($pieces2);

echo '<br';
$str = 'abcdef';
echo strlen($str); // 6


