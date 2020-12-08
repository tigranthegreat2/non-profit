<?php
    session_start();
 
    if (isset($_SESSION["username"])) {
        include 'C:\xampp\htdocs\Website\Programsloggedin.php';
    }else{
        include 'C:\xampp\htdocs\Website\Programsloggedout.php';
    }

?>