<?php

require_once 'Submission2.php';

try {
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $title = $_POST['title'];
        $description = $_POST['description'];
        $assignedTo = $_POST['assignedTo'];
        $type= $_POST['type'];
        $priority= $_POST['priority'];

        $insertdata= "INSERT INTO Issue (title, description, assignedTo, type, priority)
                    VALUES($title, $description, $assignedTo, $type, $priority)";
                    $stmt = $connect->query($insertdata);
                    $stmt = $connect->query("SELECT * FROM Issues);
				    $results = $stmt ->fetchALL(PDO ::FETCH_ASSOC);
} catch (PDOException $pe) {
    die($pe->getMessage());
}


