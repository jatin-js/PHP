<?php
// People Array @todo from DB
$people[] = "Steve";
$people[] = "John";
$people[] = "Kathy";
$people[] = "Evan";
$people[] = "Anthony";
$people[] = "Tom";
$people[] = "Rhonda";
$people[] = "Hal";
$people[] = "Ernie";
$people[] = "Johanna";
$people[] = "Farrah";
$people[] = "Linda";
$people[] = "Shawn";
$people[] = "Olivia";
$people[] = "Derek";
$people[] = "Amanda";
$people[] = "Rachel";
$people[] = "Katie";
$people[] = "Jillian";
$people[] = "Jose";
$people[] = "Malcom";
$people[] = "Greg";
$people[] = "Mary";
$people[] = "Brad";
$people[] = "Mike";

// Get Query String
$q = $_REQUEST['q'];
$suggestion = "";

// Get Suggestions
if ($q !== '') {
    $q = strtolower($q);        // Actually no nead because stristr() is case-insensitive
    $len = strlen($q);
    foreach ($people as $person) {
        if (stristr($q, substr($person, 0, $len))) {        //The stristr() function searches for the first occurrence of a string inside another string. case-insensitive. 
            if ($suggestion === '') {
                $suggestion = $person;
            } else {
                $suggestion .= ", $person";
            }
        }
    }
}

echo $suggestion === '' ? "No suggestion" : $suggestion;
