<?php

namespace Ecommerce\Model;

include("ShoppingCart.php");

use Ecommerce\Model\ShoppingCart;



class User
{
    private $uname; //username
    private $email; 
    private $myCart; // the shopping cart associated with the user

    function __construct($name,$email){
        $this->uname = $name;
        $this->email = $email;

        $this->myCart = new ShoppingCart($this); // associated a shopping cart
    }

    function getName(){
        return $this->uname;
    }

    function getEmail(){
    	return $this->email;
    }

    /**
     * Add a product into the shopping cart
     * @param Product
     */
    function addProduct(Product $product){
    	$this->myCart ->add($product);
    }

    /**
     * Remove the product from the shopping cart
     * @param  Product
     */
    function removeProduct(Product $product){
    	$this->myCart->remove($product);
    }

    /**
     * Get the total price in the shopping cart
     * @return Total price
     */
    function getTotalPrice(){
    	return $this->myCart->total();
    }

    /**
     * Get all the products in the shopping cart
     * @return Shopping cart
     */
    function getCart(){
    	return $this->myCart->getList();
    }
}


?>