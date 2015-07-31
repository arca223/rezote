<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Max TOMPOUCE
 * Date: 29/07/15
 * Time: 11:37
 * To change this template use File | Settings | File Templates.
 */

require("/libs/smarty.class.php");

session_start();
$_SESSION["cart"]=null;

$smarty = new Smarty();

$array = array("1"=>"arr","2"=>"arrrr","3"=>"arrrrrrrrr");
$smarty->assign(
    array(
        "var1"=>"ok",
        "var2"=>"ok2",
        "array"=>$array)
);

$smarty->display("mapage.html");