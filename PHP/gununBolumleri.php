<?php

date_default_timezone_set('Europe/Istanbul');

$clock = date("H");

$midnight= "00";
$morning = "06";
$noon  = "10";
$evening = "17";
$night  = "20";

if($clock > $midnight && $clock < $morning)
{
    echo "Wait til' sun set!";
}

if($clock >= $morning && $clock < $noon)
{
    echo "Good Morning!";
}

if($clock >= $noon && $clock < $evening)
{
    echo "Enjoy your day!";
}

if($clock >= $evening && $clock < $night)
{
    echo "Good Evening!";
}

if($clock >= $night)
{
    echo "Have a nice sleep!";
}
