<?php
function grade($points, $maxPoints) {
    return $points / $maxPoints * 5.0 + 1.0;
}

$result = grade(47, 66);

echo $result;
