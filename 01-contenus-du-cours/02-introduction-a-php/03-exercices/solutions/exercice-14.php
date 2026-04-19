<?php
$grade = 5;

switch ($grade) {
    case 6:
        echo "Excellent";
        break;
    case 5:
        echo "Good";
        break;
    case 4:
        echo "Fair";
        break;
    case 3:
        echo "Needs improvement";
        break;
    case 2:
        echo "Poor";
        break;
    case 1:
        echo "Very poor";
        break;
    default:
        echo "Unknown grade";
}
