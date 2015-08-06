<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Max TOMPOUCE
 * Date: 31/07/15
 * Time: 09:29
 * To change this template use File | Settings | File Templates.
 */

class Cart {

    private $ref;
    private $user;


    public function __construct() {

    }

    //add the cart to session. if it exits, increment the quantity or add the new products
    function submitCart($cart) {
        if (isset($_SESSION["cart"])){
            foreach ($cart as $product=>$qt) {
                if (isset($_SESSION["cart"][$product])) {
                    $_SESSION["cart"][$product]+=$qt;
                } else {
                    $_SESSION["cart"][$product]=$qt;
                }
            }
        } else {
            $_SESSION["cart"]=$cart;
        }
    }
}