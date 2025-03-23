<?php
function isPassing($grade) {
    return $grade >= 4.0;
}

$result = isPassing(4.5606060606061);

if ($result) {
    echo "Passing<br>";
} else {
    echo "Failing<br>";
}
