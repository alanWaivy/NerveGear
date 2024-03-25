<?php

if(isset('login')){
    $email = $_POST['email'];
    $password = password_hash($_POST['password']);
}

if(isset('register')){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password']);
}

?>