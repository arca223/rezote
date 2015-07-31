<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Max TOMPOUCE
 * Date: 30/07/15
 * Time: 09:51
 * To change this template use File | Settings | File Templates.
 */

function addCart() {
    $name = $_POST["name"];
    var_dump($name);
    if (isset($_SESSION["cart"][$name])){
        $_SESSION["cart"][$name]++;
    } else {
        $_SESSION["cart"][$name]=1;
    }
    var_dump($_SESSION["cart"][$name]);
}