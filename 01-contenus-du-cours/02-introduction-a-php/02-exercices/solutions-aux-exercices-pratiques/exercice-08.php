<?php
$hasABachelorDegree = true;
$hasFinishedHeigVd = true;

if ($hasABachelorDegree && $hasFinishedHeigVd) {
    echo "You have finished the HEIG-VD, congratulations!";
} elseif ($hasABachelorDegree) {
    echo "You have another Bachelor's degree.";
} else {
    echo "You are still a student.";
}
