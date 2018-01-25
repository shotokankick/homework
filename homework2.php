<?php
function factor($n){
    static $step = 0;
    $step ++;
    var_dump($step);
    if ($n > 2){
        return factor ($n - 1) * ($n);
    }
    else {
        return $n;
            }
}
echo factor (10);

