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

$array = array("arr","arrrr","arrrrrrrrr");
$smarty->assign(array("array"=>$array));
var_dump($_SESSION);
$smarty->display("index.html");