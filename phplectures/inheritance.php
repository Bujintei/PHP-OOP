<?php

/* ~~~~~ Example 1 ~~~~~ */

class Human {
	public $firstName;
	public $lastName;
	public $gender;

	function __construct($firstName, $lastName, $gender) {
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->gender = $gender;
	}

	function getName() {
		return $this->firstName . " $this->lastName";
	}

}

class Carnivore extends Human {
	function __construct($firstName, $lastName, $gender, $eatsMeat) {
		parent::__construct($firstName, $lastName, $gender);
		$this->eatsMeat = $eatsMeat;
	}
	function greet() {
		return $this->eatsMeat;
	}
}

class Herbivore extends Human {
	function __construct($firstName, $lastName, $gender, $eatsVegetables) {
		parent::__construct($firstName, $lastName, $gender);
		$this->eatsVegetables = $eatsVegetables;
	}
	function hello() {
		return $this->eatsVegetables;
	}
}

$Carnivore = new Carnivore("Brandon", "Nguyen" ,"male", "yes");
echo $Carnivore->getName() . " is a Carnivore";

echo "<br>";


/* ~~~~~ Example 2 ~~~~~ */

class ssbmPlayer {
	public $firstName;
	public $lastName;
	public $rekt;

	function __construct($firstName, $lastName, $rekt) {
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->rekt = $rekt;
	}

	function getName() {
		return $this->firstName . " $this->lastName";
	}

}

class ssbmPro extends ssbmPlayer {
	function __construct($firstName, $lastName, $rekt, $flashyPlay) {
		parent::__construct($firstName, $lastName, $rekt);
		$this->flashyPlay = $flashyPlay;
	}
	function greet() {
		return $this->flashyPlay;
	}
}

class ssbmN00b extends ssbmPlayer {
	function __construct($firstName, $lastName, $rekt, $fourStocked) {
		parent::__construct($firstName, $lastName, $rekt);
		$this->fourStocked = $fourStocked;
	}
	function hello() {
		return $this->fourStocked . $this->rekt;
	}
}


$ssbmPro = new ssbmPro("C9", "MaNg0" ,"no", "yes");
echo "Super Smash Bros Melee Pro " . $ssbmPro->getName() . " is destroying everyone!";

echo "<br>";

/* ~~~~~ Example 3 ~~~~~ */

class Criminal {
	public $firstName;
	public $lastName;
	public $prisonSentence;

	function __construct($firstName, $lastName, $prisonSentence) {
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->prisonSentence = $prisonSentence;
	}

	function getName() {
		return $this->firstName . " $this->lastName";
	}

}

class GradeA extends Criminal {
	function __construct($firstName, $lastName, $prisonSentence, $crime) {
		parent::__construct($firstName, $lastName, $prisonSentence);
		$this->crime = $crime;
	}
	function greet() {
		return $this->crime;
	}
}

class GradeF extends Criminal {
	function __construct($firstName, $lastName, $prisonSentence, $bail) {
		parent::__construct($firstName, $lastName, $prisonSentence);
		$this->bail = $bail;
	}
	function hello() {
		return $this->bail;
	}
}


$GradeA = new GradeA("Diego", "Sanchez" ,"life sentence" ,"murder");
echo "Grade A Criminal " . $GradeA->getName() . " murdered Phillip!";

echo "<br>";