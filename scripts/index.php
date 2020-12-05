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

    #Connect to database and lookup email and password using email from the form (replace 'admin@project2.com' and 'password123' with result)
    $dbemail = 'admin@project2.com';
    $dbpassword = 'password123';
    
    if ($email == $dbemail && $password== $dbpassword){
        
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
