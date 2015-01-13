<?php

class Champion{
	public $firstName;
	public $lastName;
	public $awards;

	function __construct($firstName, $lastName, $awards) {
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->awards = $awards;
	}

	function description() {
		return "The reigning champion 'Bulacke' also known as {$this->firstName}" . " is currently 21 years old. He has won {$this->awards} amount of trophies and currently ranked 1 in North America.";
	}

	function autographSigning() {
		return " {$this->firstName}" . " loves you as a diehard fan. Remember your savior's last name, " .
		"{$this->lastName}!";
	}

}

$Champion = new Champion("Blake", "Dayman", "42");
echo $Champion->description();
echo $Champion->autographSigning();