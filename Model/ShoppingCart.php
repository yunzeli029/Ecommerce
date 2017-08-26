<?php
namespace Ecommerce\Model;

class ShoppingCart
{
	private $cart;
    private $user;
    /**
     * This is the constructor for Shopping Cart to initialize a new cart
     * and hava an associated User
     *
     * @param User a user asscociated the cart
     * 
     */
    function __construct(User $user){
        $this->cart = array(); 
        $this->user = $user;
    }

    /**
     * Add a new product into the shopping cart
     * 
     * @param Product
     */
    function add(Product $product){
        array_push($this->cart,$product);
    }

    /**
     * Get the list of products in the shopping cart
     * 
     * @return an array of products
     */
    function getList(){
        return $this->cart;
    }

    /**
     * Remove a target product in the shopping cart
     * 
     * @param  Product
     */
    function remove(Product $product){
        foreach ($this->cart as $key=>$value){
            if($value ==$product){
                unset($this->cart[$key]);  //remove the product
                $this->cart = array_values($this->cart); // reorder the array

                break;
            }
        }
    }
    /**
     * Get the total price in the shopping cart
     * 
     * @return the price
     */
    function total(){
        $totalPrice = 0;
        foreach ($this->cart as $key=>$value){
            $totalPrice += $value->getPrice();
        }
        return $totalPrice;
    }

}




?>