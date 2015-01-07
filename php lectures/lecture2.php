<?php

<!-- Example 1 : -->

	class Human {
	public $firstName;
	public $lastName;
	public $ethnicity;

		function __construct($title, $firstName, $lastName, $ethnicity) {
			$this->firstName = $firstName;
			$this->lastName = $lastName;
			$this->ethnicity = $ethnicity;
		}

		function getName() {
		return "{$this->firstName}" . 
		"{$this->lastName}";
		}
	}

	class Bird {
	public $firstName;
	public $lastName;
	public $breed;

		function __construct($title, $firstName, $lastName, $breed) {
			$this->firstName = $firstName;
			$this->lastName = $lastName;
			$this->breed = $breed;
		}

		function getName() {
		return "{$this->firstName}" . 
		"{$this->lastName}";
		}
	}

	class Cat {
	public $firstName;
	public $lastName;
	public $breed;

		function __construct($title, $firstName, $lastName, $breed) {
			$this->firstName = $firstName;
			$this->lastName = $lastName;
			$this->breed = $breed;
		}

		function getName() {
		return "{$this->firstName}" . 
		"{$this->lastName}";
		}
	}

<!-- Example 2 : -->

$human1 = new Human(“Billy”, “Bob”, “Caucasian”);
print “Human 1: {$human1­>getName()}\n;

$bird1 = new Bird(“Talon”, “Flame”, “Alexandrine Parakeet”);
print “Bird 1: {$bird1­>getName()}\n;

$cat1 = new Cat(“Kitty”, “Kat”, “Persian Cat”);
print “Cat 1: {$cat1­>getName()}\n;