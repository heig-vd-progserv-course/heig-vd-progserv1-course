<?php
$day = "Monday";

switch ($day) {
    case "Monday":
    case "Tuesday":
    case "Wednesday":
    case "Thursday":
    case "Friday":
        echo "Weekday";
        break;
    case "Saturday":
    case "Sunday":
        echo "Weekend";
        break;
    default:
        echo "Unknown day";
}
