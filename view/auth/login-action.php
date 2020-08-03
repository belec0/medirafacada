<?php
namespace Phppot;

use \Phppot\Member;
if (! empty($_POST["login"])) {
    $username = filter_var($_POST["user_name"], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST["password"], FILTER_SANITIZE_STRING);
    require_once('../../class/Member.php');
    session_start();
    
    $member = new Member();
    $isLoggedIn = $member->processLogin($username, $password);
    if($isLoggedIn){
        header("Location: ../dashboard.php");
    }else{
        $_SESSION["errorMessage"] = "Login invalido";
        header("Location: ../auth/login-form.php");
    }
    exit();
}