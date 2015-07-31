<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Max TOMPOUCE
 * Date: 31/07/15
 * Time: 09:29
 * To change this template use File | Settings | File Templates.
 */

class Cart {


    function submitCart() {
        $name = $_POST["name"];
        var_dump($name);
        if (isset($_SESSION["cart"][$name])){
            $_SESSION["cart"][$name]++;
        } else {
            $_SESSION["cart"][$name]=1;
        }
        var_dump($_SESSION["cart"][$name]);
    }
}