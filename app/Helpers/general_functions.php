<?php

function convertDate($date) 
{
    $date = explode("-",$date);
    $monthNum = (int) $date[1];
    $monthName = date("F", mktime(0, 0, 0, $monthNum, 10));
    $result = $monthName . " " . $date[2] . ", " . $date[0];
    return $result;
}