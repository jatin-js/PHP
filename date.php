<?php
// echo date('D'); // Day
// echo date('M'); // Month
// echo date('Y'); //Year
// echo date('l'); //Day of the week

// echo date('Y/M/D');
// echo date('d-m-y');

// echo date('h'); //Hour
// echo date('i'); //Min
// echo date('s'); //second
// echo date('a'); //AM or PM

//Set Time Zone
date_default_timezone_set('Asia/Kolkata');

// echo date('h:i:sa');

/*
Unix timestap is a long integer containing the number of
seconds between the Unix Epoch (January 1 1970 00:00:00
GMT) and the time specified.
 */

$timestamp = mktime(10, 14, 54, 13, 10, 1981); // (hr,min,sec,mon,date,year);       //Month 13 give month as 1 and year get inc by one.

// echo $timestamp;

// echo date('m/d/Y h:i:sa', $timestamp); //Convert it into a readable date

$timestamp2 = strtotime('7:00pm March 22 2016');
$timestamp3 = strtotime('tomorrow');
$timestamp4 = strtotime('next Sunday');
$timestamp5 = strtotime('+2 Months');
$timestamp6 = strtotime('+2 Days');
$timestamp7 = strtotime('+2 Months');

# For more go to "php.net/manual/en/function.date.php"

// echo $timestamp2;

echo date('m/d/y h:i:sa', $timestamp7);
