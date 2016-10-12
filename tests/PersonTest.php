<?php

use \Hello\Person;

class PersonTest extends PHPUnit_Framework_TestCase
{
	function setup(){
		$this->latt = new Person();
	}

	function testFirstname() {
		
		$this->latt->setFirstName('lattaporn');
		$exect = 'Lattaporn';
		$actual = $this->latt->getFirstName();
		$this->assertEquals($exect, $actual);
	}

	function testFirstWithAchar() {

		$this->latt->setFirstName('lAttaporn');
		$exect = 'Lattaporn';
		$actual = $this->latt->getFirstName();
		$this->assertEquals($exect, $actual);
	}

	function testLastName () {
		$this->latt->setLastName('yodsuwan');
		$exect = 'Yodsuwan';
		$actual = $this->latt->getLastName();
		$this->assertEquals($exect ,$actual);	
	}

	function testFullName () {
		$this->latt->setFirstName('lattaporn');
		$this->latt->setLastName('yodsuwan');
		$exect = 'Lattaporn Yodsuwan';
		$actual = $this->latt->getFullName();
		$this->assertEquals($exect ,$actual);
	}
}
