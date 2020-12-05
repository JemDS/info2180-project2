<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    #Connect to database and compare username and password (to replace line 7)
    if ($email =='adminproject2.com' && $password=='password123'){
        include_once 'dashboard.php';
    } 
    else{
        header('Location: http://localhost/info2180-finalproject/login.html');
    }
}
else{
    header('Location: http://localhost/info2180-finalproject/login.html');
}
