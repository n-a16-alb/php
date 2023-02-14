<?php
    $login = $_GET['login'];
    $pass = $_GET['pass'];
    //echo "login: ".$login."<br>Pass: ".$pass;
    if ($login == "admin" and $pass == 123){
            echo "success";
    } else {
        echo "error";
    }