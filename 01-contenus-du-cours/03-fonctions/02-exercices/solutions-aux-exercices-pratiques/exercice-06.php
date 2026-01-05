<?php
function maxOfTwo($a, $b) {
    if ($a > $b) {
        return $a;
    } else {
        return $b;
    }
}

$result = maxOfTwo(12, 8);

echo $result;
