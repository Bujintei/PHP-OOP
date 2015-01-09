<?php

// ~~~~~~~~~~~~~~~~~~~Example Uno~~~~~~~~~~~~~~~~~~~~~~~

$dead = false;
$age = 0;

if (is_bool($dead) === true) {
	echo "Yup, you found a boolean";
}

echo "<br>";

if (is_bool($age) === false) {
	echo "This is not a boolean";
}

echo "<br>";

// ~~~~~~~~~~~~~~~~~~~Example Dos~~~~~~~~~~~~~~~~~~~~~~~

$sure = array('this', 'is', 'an array');

echo is_array($sure) ? 'Array' : 'not an Array';
echo "\n";

echo "<br>";

$notEvenCloseBaby = 'this is a string';

echo is_array($notEvenCloseBaby) ? 'Array' : 'not an Array';

echo "<br>";

// ~~~~~~~~~~~~~~~~~~~Example Tres~~~~~~~~~~~~~~~~~~~~~~~

class Poop{

}

$poop = new Poop;

if(is_object($poop)) {
	echo "object it is";
}
else {
	echo "object it is not";
}
