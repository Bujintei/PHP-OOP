<?php

// ~~~~~~~~~~~~~~~~~~~Example Uno~~~~~~~~~~~~~~~~~~~~~~~

$dead = false;
$age = 0;

if (is_bool($dead) === true) {
	echo "Yup, you found a boolean";
}

if (is_bool($age) === false) {
	echo "This is not a boolean";
}

// ~~~~~~~~~~~~~~~~~~~Example Dos~~~~~~~~~~~~~~~~~~~~~~~

$sure = array('this', 'is', 'an array');

echo is_array($sure) ? 'Array' : 'not an Array';
echo "\n";

$notEvenCloseBaby = 'this is a string';

echo is_array($notEvenCloseBaby) ? 'Array' : 'not an Array';

// ~~~~~~~~~~~~~~~~~~~Example Tres~~~~~~~~~~~~~~~~~~~~~~~


