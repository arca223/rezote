<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Max TOMPOUCE
 * Date: 31/07/15
 * Time: 10:00
 * To change this template use File | Settings | File Templates.
 */

require("libs/smarty.class.php");
include ("class/Cart.php");

if(!isset($_SESSION)){
    session_start();
}

$smarty = new Smarty();
var_dump($_SESSION);
if (isset($_POST["product"]) && isset($_POST["qt"])) {
    $product=$_POST["product"];
    $quantity=$_POST["qt"];

    foreach($product as $key => $p){
        if ($quantity[$key] != "") {
            $arrayCart[$p]=$quantity[$key];
        }
    }

    $cart = new Cart();
    $cart->submitCart($arrayCart);

} elseif (isset($_SESSION)) {
} else {
    echo "no items in cart";
}

$arrayCart = array();
//Add the product as key and quantity as item

var_dump($_SESSION);
$smarty->assign("cart",$arrayCart);


$smarty->display("cart.html");