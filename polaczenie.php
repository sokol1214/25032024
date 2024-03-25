<?php
    $host = "localhost";    
    $user = "root";
    $pass = "";
    $dbname = "baza25032024";

    try {
        $baza = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    } 
    catch (PDOException $event) {
         echo 'Error: '. $event;
         die();
    }
?>