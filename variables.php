<?php
// Single line comment
#   Single line comment

/*
    Multiline
    comment 
*/

    // print 'Hello world';  //print return 1
    // echo 'Hello world';     //echo faster than print 

#VARIABLES
/*

    - Prefix $
    - Start with a letter or an underscore
    - Only letters, numbers and underscore

*/

#DATATYPES
/*

    String
    Integers
    floats
    Booleans
    Arrays
    Objects
    NULL
    Resource

*/


    $output = 'Hello world';
    $num1 = 4;
    $num2 = 10;

    $sum = $num1 + $num2;

    $string1 = 'Hello';
    $string2 = 'World';
    $greeting = $string1 .' '. $string2 .'!';
    $greeting2 = "$string1 $string2";

    // $string3 = 'They\'re here';      escape sequence
    $string3 = "They're here";

    $float1 = 4.4;
    $bool = true;

    // define('GREETING', 'Hello Everyone');   //constant,used for name like of server as it's not going to change 

    define('GREETING', 'Hello Everyone', true);  //Not Case sensitive

    echo GREeting;


?>