<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Max TOMPOUCE
 * Date: 06/08/15
 * Time: 10:37
 * To change this template use File | Settings | File Templates.
 */

class DB extends PDO{

    public function __construct() {
        try {
            parent::__construct('mysql:host='.HOST.';dbname='.DB, LOGIN, PWD, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        catch (Exception $e)
        {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public function login($login, $password) {
        $req = $this->prepare('SELECT count(*) FROM `sec_users` WHERE `login`=? and `pswd`=?');
        $req->bindParam(1, $login, PDO::PARAM_STR);
        $req->bindParam(2, $password, PDO::PARAM_STR);
        $req->execute();
        $res = $req->fetch(PDO::FETCH_COLUMN);
        return $res;
    }

}