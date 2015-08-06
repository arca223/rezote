<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Max TOMPOUCE
 * Date: 05/08/15
 * Time: 15:27
 * To change this template use File | Settings | File Templates.
 */
require "res/config.php";
require("libs/smarty.class.php");
require("class/DB.php");


session_start();

//if the user is already logged (session still up), redirect to index
if(isset($_SESSION['login_user'])){
    header("location: index.php");
}

//post check of form
if (isset($_POST['login']) && isset($_POST['pwd'])) {
    $login=$_POST['login'];
    $pwd=$_POST['pwd'];
    $db = new DB();
    $res=$db->login($login,$pwd); //verification of log/pw entry

    if ($res) {
        $_SESSION['login_user']=$login;
        header("location: index.php"); //redirection to index
    } else {
        //need to change, cause script integration in code is bad
        ?>
        <script>alert("<?php echo "Erreur de connexion, mauvais login ou mot de passe"; ?>");</script>
    <?php
    }
}




$smarty = new Smarty();


$smarty->display("login.html");