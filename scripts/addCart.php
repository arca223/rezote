<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Max TOMPOUCE
 * Date: 30/07/15
 * Time: 09:51
 * To change this template use File | Settings | File Templates.
 */

function addCart() {
    $cart = new Cart();

    $_SESSION["decode"]=json_decode($_POST);
    $_SESSION["test"]="test";

    /*$_SESSION["post"] = $_POST;
    $name = $_POST["name"];
    $cart->submitCart($name);
    var_dump($name);

    if (isset($_SESSION["cart"][$name])){
        $_SESSION["test"]="ok";
    } else {
        $_SESSION["test"]="issefpasok";
    }*/
}