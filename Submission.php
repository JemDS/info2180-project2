<?php

require_once 'Submission.php';

try {
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $password = $_POST['password'];
        $emai= $_POST['emai'];
        $insertdata= "INSERT INTO Users (firstname. lastname, password, emai)
                    VALUES($firstname, $lastname, $password, $emai)";
                    $stmt = $connect->query($insertdata);
                    $stmt = $connect->query("SELECT * FROM User);
				    $results = $stmt ->fetchALL(PDO ::FETCH_ASSOC);
} catch (PDOException $pe) {
    die($pe->getMessage());
}


