<?php

session_start();

#to ensure only form create for website is accepted by serveer
$hidden 	= 	$_POST["test"];
$formID 	=   "a7fcdc6d1d3ec4671a352b64e319909d";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $hidden === $formID) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email = htmlentities($email);
    $password = htmlentities($password);

    #Connect to database and compare username and password (to replace 'adminproject2.com' and 'password' line 7)
    if ($email =='adminproject2.com' && $password=='password123'){
        
        $_SESSION['email'] = $email;
        #get autoincremented id from user and store in session so that it can be use across multiple pages
        #$_SESSION['userid'] = $userid;

        include_once 'dashboard.php';
    } 
    else{
        #message that email or password is incorrect should be included
        header('Location: http://localhost/info2180-finalproject/login.html');
        session_unset();
        session_destroy();
    }
}
else{
    #message that email or password is incorrect should be included
    header('Location: http://localhost/info2180-finalproject/login.html');
    session_unset();
    session_destroy();
}
