<?php
namespace Ecommerce\Model;

class Product
{
    private $pname; // product name
    private $price; // product price
    function __construct($name,$price){
        $this->pname = $name;
        $this->price = $price;
    }

    /**
     * Get the name of product
     * 
     * @return product name
     */
    function getName(){
        return $this->pname;
    }

    /**
     * Get the price of product
     * 
     * @return product price
     */
    function getPrice(){
    	return $this->price;
    }
}




?>