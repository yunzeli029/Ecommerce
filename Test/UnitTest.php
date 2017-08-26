<?php

namespace Ecommerce\Test;

include("../Model/Product.php");
include("../Model/User.php");

use Ecommerce\Model\Product;
use Ecommerce\Model\User;
use PHPUnit_Framework_TestCase;



class UnitTest extends PHPUnit_Framework_TestCase
{
    private $username = "John Doe";
    private $email = "john.doe@example.com";
    private	$apple ;
	private	$orange ;

    // adds 2 "Apple" Products for $4.95 each and 1 "Orange" Product for $3.99
	function testOne(){
		$this->apple = new Product("Apple",'4.95');
		$this->orange = new Product("Orange",'3.99');

		$user = new User($this->username,$this->email);

		$user->addProduct($this->apple);
		$user->addProduct($this->apple);
		$user->addProduct($this->orange);

		$expected = 13.89;
		$actual = $user->getTotalPrice();
		$this->assertEquals($expected,$actual);
	}
	// adding 3 "Apple" products, then removing 1 "Apple" product
	function testTwo(){
		$this->apple = new Product("Apple",'4.95');
		$this->orange = new Product("Orange",'3.99');
		$user = new User($this->username,$this->email);

		$user->addProduct($this->apple);
		$user->addProduct($this->apple);
		$user->addProduct($this->apple);

		$user->removeProduct($this->apple);

		$expected = 4.95*2;
		$actual = $user->getTotalPrice();
		print $expected;
		print $actual;
		$this->assertEquals($expected,$actual);
	}
}


?>