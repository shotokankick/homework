<?php
function fib($n){
    if (in_array($n, 1, 2)) {
        return 1;
    }
    else {
        return fib($n-1) + fib($n -2);
    }
}
echo (fib(5) . ',');
?>
