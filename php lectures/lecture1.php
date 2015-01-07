<?php

class Bird{
	//class body
	//class body
	//class body
}

class Airplane{
	//class body
	//class body
	//class body
}

class BillyBob{
	//class body
	//class body
	//class body
}


$rabbit1 = new Rabbit();
$rabbit2 = new Rabbit();

$phoenix1 = new Phoenix();
$phoenix2 = new Phoenix();

$snail1 = new Snail();
$snail2 = new Snail();


class Granny{
	protected $name = "Abigail";
	protected $age = "67";
	protected $occupation = "DayCare Owner";
	protected $area = "United States";
}

class Child{
	private $name = "Gabriel";
	private $age = "4";
	private $pastimes = "annoy the living hell out of people";
	private $favoriteToy = "rubber hammer";
}

class Mario{
	public $name = "Mario";
	public $ethnicity = "Italian";
	public $occupation = "plumber";
	public $enemy = "Bowser";
}


$pig1 = new Pig();
print $pig1­>name;
// default name

$horse1 = new Horse();
print $horse->name;
// default name

$cow1 = new Cow();
print $cow->name;
// default name


class Human {
	public $firstName = “default name”;
	public $lastName = “default last name”;
	public $gender = “male”;
	public $age = 0;

	function getName() {
	return “{$this->firstName}” .
	“{$this->lastName}”;
	}
}

$human1 = new Human();
$dog1->firstName = “Billy”;
$dog1->lastName = “Bob”;

print “This human’s name is {$human1->getName()}.”;

//The human’s name is Billy Bob.

class Bird {
	public $firstName = “default name”;
	public $lastName = “default last name”;
	public $gender = “male”;
	public $price = 0;

	function getName() {
	return “{$this->firstName}” .
	“{$this->lastName}”;
	}
}

$bird1 = new Bird();
$bird1->firstName = “Talon”;
$bird1->lastName = “Flame”;

print “This bird’s name is {$bird1->getName()}.”;

//The bird’s name is Talon Flame.

class Rabbit {
	public $firstName = “default name”;
	public $lastName = “default last name”;
	public $gender = “male”;
	public $price = 0;

	function getName() {
	return “{$this->firstName}” .
	“{$this->lastName}”;
	}
}

$rabbit1 = new Rabbit();
$rabbit1->firstName = “Oliver”;
$rabbit1->lastName = “Nguyen”;

print “The rabbit’s name is {$dog1->getName()}.”;

//The rabbit’s name is Oliver Nguyen.