<?php

class Champion{
	public $firstName;
	public $lastName;
	public $gender;

	function __construct($firstName, $lastName, $gender) {
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->gender = $gender;
	}

	function autographSigning() {
		return "{$this->firstName}" .
		"{$this->lastName}";
	}

}

$Champion = new Champion("Blake", "Dayman", "Male");
print "Champion: {$Champion->autographSigning()}";