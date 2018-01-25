<?php
function fib($n){
    static $step = 0;
    $step ++;
    var_dump($step);
    if ($n < 3){
        return 1;
    }
    else {
        return fib($n-1) + fib($n -2);
    }
}
for ($n = 0; $n <= 15; $n ++){
    echo (fib($n) . ',');
}
echo fib($n);
?>

