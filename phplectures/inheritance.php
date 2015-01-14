<?php

/* ~~~~~ Example 1 ~~~~~ */

class Human {
	public $firstName;
	public $lastName;
	public $gender;
	public $eatsMeat;
	public $eatsVegetables;

	function __construct($firstName, $lastName, $gender, $eatsMeat, $eatsVegetables) {
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->gender = $gender;
		$this->eatsMeat = $eatsMeat;
		$this->eatsVegetables = $eatsVegetables;
	}

	function getName() {
		return $this->firstName . " $this->lastName";
	}

}

class Carnivore extends Human {
	function greet() {
		return $this->eatsMeat;
	}
}

class Herbivore extends Human {
	function hello() {
		return $this->eatsVegetables;
	}
}

class Omnivore extends Human {
	function welcome() {
		return $this->eatsMeat . $this->eatsVegetables;
	}
}

$human = new Human("Brandon", "Nguyen" ,"male" ,"yes", "yes");
echo "Human numero uno is " . $human->getName();

echo "<br>";


/* ~~~~~ Example 2 ~~~~~ */

class ssbmPlayer {
	public $firstName;
	public $lastName;
	public $rekt;
	public $fourStocked;
	public $epicString;

	function __construct($firstName, $lastName, $rekt, $fourStocked, $epicString) {
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->rekt = $rekt;
		$this->fourStocked = $fourStocked;
		$this->epicString = $epicString;
	}

	function getName() {
		return $this->firstName . " $this->lastName";
	}

}

class ssbmPro extends ssbmPlayer {
	function greet() {
		return $this->epicString;
	}
}

class ssbmN00b extends ssbmPlayer {
	function hello() {
		return $this->fourStocked . $this->rekt;
	}
}


$player = new ssbmPlayer("C9", "MaNg0" ,"no" ,"no", "yes");
echo "New Super Smash Bros Melee Player " . $player->getName() . " is destroying everyone!";

echo "<br>";

/* ~~~~~ Example 3 ~~~~~ */

class Criminal {
	public $firstName;
	public $lastName;
	public $prisonSentence;
	public $crime;
	public $bail;

	function __construct($firstName, $lastName, $prisonSentence, $crime, $bail) {
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->prisonSentence = $prisonSentence;
		$this->crime = $crime;
		$this->bail = $bail;
	}

	function getName() {
		return $this->firstName . " $this->lastName";
	}

}

class GradeA extends Criminal {
	function greet() {
		return $this->crime . $this->prisonSentence;
	}
}

class GradeF extends Criminal {
	function hello() {
		return $this->crime . $this->prisonSentence;
	}
}


$criminal = new Criminal("Diego", "Sanchez" ,"life sentence" ,"murder", "$100,00");
echo "Criminal " . $criminal->getName() . " murdered Phillip!";

echo "<br>";