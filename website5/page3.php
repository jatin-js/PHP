<?php
$user = ['name' => 'Jatin', 'email' => 'text@text.com', 'age' => 19];

$user = serialize($user);       // To convert into string which is accepted in setcookie.

setcookie('user', $user, time() + (86400 * 30));

$user = unserialize($_COOKIE['user']);

print_r($user);
