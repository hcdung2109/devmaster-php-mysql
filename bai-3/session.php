<?php
echo '<br>';
$arr = [
    ['qty' => 1, 'product' => 'thong tin san'],
    ['qty' => 2, 'product' => 'thong tin san']
];

$_SESSION['cart'] = $arr;

echo '<pre>';
print_r($_SESSION['cart']);

unset($_SESSION['cart']);

$a = 5;
unset($a);

session_destroy();