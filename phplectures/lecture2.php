<?php

/* Example 1 : */

	class Human {
	public $firstName;
	public $lastName;
	public $ethnicity;

		function __construct($firstName, $lastName, $ethnicity) {
			$this->firstName = $firstName;
			$this->lastName = $lastName;
			$this->ethnicity = $ethnicity;
		}

		function getName() {
		return $this->firstName . " $this->lastName";
		}
	}

	class Bird {
	public $firstName;
	public $lastName;
	public $breed;

		function __construct($firstName, $lastName, $breed) {
			$this->firstName = $firstName;
			$this->lastName = $lastName;
			$this->breed = $breed;
		}

		function getNam3() {
		return $this->firstName . " $this->lastName";
		}
	}

	class Cat {
	public $firstName;
	public $lastName;
	public $breed;

		function __construct($firstName, $lastName, $breed) {
			$this->firstName = $firstName;
			$this->lastName = $lastName;
			$this->breed = $breed;
		}

		function getN4me() {
		return $this->firstName . " $this->lastName";
		}
	}

/* Example 2 : */

$human1 = new Human("Billy", "Bob", "Caucasian");
echo $human1->getName();

$bird1 = new Bird(" Talon", "Flame", "Alexander Parakeet");
echo $bird1->getNam3();

$cat1 = new Cat(" Kitty", "Kat", "Persian Cat");
echo $cat1->getN4me();