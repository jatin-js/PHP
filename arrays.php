<?php
#Array - Variable that hold multiple variables

/*
- Indexed
- Associative
- Multi-dimensional
 */

# Indexed
$people = array('Jatin', 'Pappu', 'John');
$ids = array(23, 33, 44);
$cars = ['Honda', 'Toyota', 'Ford']; //Same as first
$cars[3] = 'Chevy';
$cars[] = 'BMW'; //If don't know last index

// echo count($cars);
// print_r($cars);      Can be Used for debugging
// var_dump($cars);          "   "
// var_dump($ids);

// echo $people[1];
// echo $ids[2];
// echo $cars[4];

# Associative arrays
$people = array('Jatin' => 19, 'Pappu' => 20, 'Kakku' => 21);
$ids = [22 => 'Jatin', 24 => 'Json', 23 => 'JS'];

// echo $people['Jatin'];
// echo $ids[22];
$people['Joker'] = 21;
// echo $people['Joker'];
// print_r($people);
// var_dump($people);

# Muti - Dimensional
$cars = array(
    array('Honda', 20, 10),
    array('Toyota', 30, 20),
    array('Ford', 23, 12),
);

echo $cars[1][2];
