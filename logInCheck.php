<?php
/**
 * Created by PhpStorm.
 * User: 1109847
 * Date: 02/11/2015
 * Time: 14:34
 */


$nameCheck = "Craig";
$passwordCheck = "Password";
$name = $_POST["name"];
$password = $_POST["pass"];

If($name = $nameCheck & $password = $passwordCheck) {

    setcookie("Name", $name,time() + (86400 * 30), "/");
    setcookie("access_level", "standarduser", time() + (86400 * 30), "/");
    header("location: http://homepage.php");


}



?>