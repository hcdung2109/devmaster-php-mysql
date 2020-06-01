<?php
function run()
{
    echo 'chao ban';
}
run();

function phepchia($x) {
    if (!$x) { // có tồn tại, khác  0 , khác false
        throw new Exception('So nhap vao la 0');
    }
    return 1/$x;
}

// phepchia(0);
echo  '<br>';
try {

    echo phepchia(5) . "\n";
    echo phepchia(0) . "\n";

} catch (Exception $e) {
    // echo 'Caught exception: ',  $e->getMessage(), "\n";
}

echo 'xuong duoi';