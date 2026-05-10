<?php
function grade(int|float $points, int|float $maxPoints): float {
    return $points / $maxPoints * 5.0 + 1.0;
}

$result = grade(47, 66);

echo $result;
