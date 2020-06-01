<?php
// Tao mang
// $arr = ['key' => 'value', 'key' => 'value', ....]
$a = array("xin", "chào", "bạn");

$a2 = ["xin", "chào", "bạn"];

echo $a2[0];
echo '<br>';
echo $a2[1];
echo '<br>';
echo $a2[2];

echo '<pre>';
print_r($a2);

$a3 = [2 => "xin", 4 => "chào", 5 => "bạn"];
echo '<pre>';
print_r($a3);

echo $a3[2]. ' '.$a3[4].' '.$a3[5];

$a4 = ['key1' => "xin", 'key2' => "chào", 'key3' => "bạn"];

echo '<pre>';
print_r($a4);

echo $a4['key1'];

echo 'Mang Da Chieu';

$arr5 = [];
$arr6 = array();

if (empty($arr5)) {
    echo 'null';
}

$arr5 = [
  [1,2,3],
  [4,5,6]
];

$arr6 = array(
    array(1,2,3),
    array(4,5,6)
);

echo '<pre>';
print_r($arr5);


echo 'So PT :'.count($arr5); // Ham count : Đếm số ptu
echo '<br>';

for ($i = 0; $i < count($arr5); $i++) {
    for ($j = 0; $j < count($arr5[$i]); $j++) {
        //print_r($arr5[$i][$j]);
        echo $arr5[$i][$j];
    }
} // 123456

echo '<br>';

if (!empty($arr5)) { // kiem mang tồn tại && khác null
    foreach ($arr5 as $key => $val) {
        foreach ($val as $key2 => $item) {
            echo '<br>';
            echo $key2.' : '.$item;
        }
    } // 123456
}

$arr7 = 'fasfasd';

if (!empty($arr7) && is_array($arr7)) { // kiem mang tồn tại && khác null
    foreach ($arr7 as $key => $val) {
        echo '<br>';
        echo $key.' : '.$item;
    }
}

// Sap sếp mảng
$arr8 = [3,2,5,4];
sort($arr8);

foreach ($arr8 as $key => $val) {
    echo $val;
}

$fruits = array("lemon", "orange", "banana", "apple");
sort($fruits);
foreach ($fruits as $key => $val) {
    echo "fruits[" . $key . "] = " . $val . "\n";
}
echo '<br>';

$arr9 = [11,22,33];

if (in_array(222 , $arr9)) {
    echo 'ok';
} else {
    echo 'no';
}

echo '<br>';
echo 'Hàm : array_shift'.'<br>';

$stack = array("orange", "banana", "apple", "raspberry");
array_shift($stack); // xóa phần tử đầu tiên của mảng
print_r($stack);

$stack2 = array("orange", "banana", "apple", "raspberry");
array_pop($stack2); // xóa pt cuôi cùng của mang
print_r($stack2);

echo '<br>';
echo 'Hàm : array_key_exists'.'<br>';

$search_array = array('first' => 1, 'second' => 4);
if (array_key_exists('first', $search_array)) {
    echo "The 'first' element is in the array";
}

echo '<br>';
echo 'Hàm : array_keys'.'<br>';
$array = array(0 => 100, "color" => "red");
print_r(array_keys($array));

echo '<br>';

$a = 5;
$b = 6;
if ($a > $b) {
    echo "a is bigger than b";
} elseif ($a == $b) {
    echo "a is equal to b";
} elseif ($a == 50) {
    echo "50";
} elseif ($b == 60) {
    echo "60";
} else {
    echo "a nho hon b";
}

echo '<br>';

if ($a > 0 && $b > 1) {
    $c = $a + $b;
    if ($c >= 11) {
        $d = $c + $a;
        if ($d > 15) {
            echo 'yes';
            // ......... if ()
        }
    }
}

echo '<br>';
$i = '0';
if ($i == 0) {
    echo "i equals 0";
} elseif ($i == 1) {
    echo "i equals 1";
} elseif ($i == 2) {
    echo "i equals 2";
}

echo '<br>';

switch ($i) {
    case 0:
        echo "i equals 0";
        break;
    case 1:
        echo "i equals 1";
        break;
    case 2:
        echo "i equals 2";
        break;
}

echo '<br>';

$i=1;
while($i < 6) {
    //////
    echo "The number is " . $i . "<br />";
    $i++;
}

echo '<br>';

$arr10 = array('one', 'two', 'three', 'four', 'stop', 'five','six');
foreach ($arr10 as $val) {
    if ($val === 'stop') {
        break;    /* You could also write 'break 1;' here. */
    }
    echo "$val<br />\n";
}

echo '<br>';
for ($i = 0; $i < 5; ++$i) {
    if ($i == 2)
        continue;
    // .....
    print "$i\n";
}
