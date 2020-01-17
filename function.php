<?php

# FUNCTION - Block of code that can be repeatedly called

/*

Camel Case - myFunction()   Used for functions, variables , symphony framework
Lower Case - my_function()   ' '    ,   codeignitor framework
Pascal Case - MyFunction()  Used for classes

 */

# Create simple function
function simpleFunction()
{
    echo 'Hello World';
}

# Run simple function
// simpleFunction();

# Function With Param
function sayHello($name = 'World')
{
    echo "Hello $name<br>";
}

// sayHello('Jatin');
// sayHello('Nitin');
// sayHello('Tim');

#Return Value
function addNumbers($num1, $num2)
{
    return $num1 + $num2;
}

// echo addNumbers(2, 3);

# By reference

$myNum = 10;

function addFive($num)
{
    $num += 5;
}

function addTen(&$num)
{
    $num += 10;
}

addFive($myNum);

echo "Value: $myNum<br>";

addTen($myNum);

echo "Value: $myNum<br>";
echo $myNum;
echo $myNum;
