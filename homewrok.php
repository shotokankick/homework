<?php
function fib($num)
{
    if (in_array($num, 1, 2)) {
        return 1;
    }
    else {
        return fib($num-1) + fib($num -2);
    }
}
echo (fib(5) . ',');
?>

