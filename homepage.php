<?php
/**
 * Created by PhpStorm.
 * User: 1109847
 * Date: 02/11/2015
 * Time: 13:44
 */
if (isset($_COOKIE["Name"])) {

    echo "Your Name is " . $_COOKIE["Name"];
    echo "Access level is " . $_COOKIE["access_level"];

}
else
?>