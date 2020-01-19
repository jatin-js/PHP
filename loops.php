<?php

#LOOPS - Execute code set number for times

/*Fo
While
Do..While
Foreach
 */

#For loop
#@params - init, condition, inc

// for ($i = 0; $i <= 10; $i++) {
// // echo $i . '<br>';
//     echo 'Number ' . $i;
//     echo '<br>';
// }

#While loop
# @params - condition

// $i = 0;
// while ($i < 10) {
//     echo $i;
//     echo '<br>';
//     $i++;
// }

#Do...While
# @params - condition

// $i = 0;
// do {
//     echo $i;
//     echo '<br>';
//     $i++;
// } while ($i < 10);

#Foreach loop for arrays
// $people = array('Brad', 'Jose', 'William');

// foreach ($people as $person) {
//     echo $person;
//     echo '<br>';
// }

$people = array('Brad' => 'brad@gmail.com', 'Jose' => 'jose@gmail.com', 'William' => 'william@gmail.com');

foreach ($people as $person => $email) {
    echo $person . ':' . $email;
    echo '<br>';
}
