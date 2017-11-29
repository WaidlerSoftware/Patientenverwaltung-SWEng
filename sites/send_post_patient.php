<?php
//Connecting to sql db.
$pdo = new PDO('mysql:host=localhost;dbname=patientenverwaltung', 'root', '');
//Sending form data to sql db.
$sql = "SELECT Names, Geburtsdatum, Krankenversicherungsart, Adresse FROM patienten";

$sql = "INSERT INTO `patienten`(`Names`, `Geburtsdatum`, `Krankenversicherungsart`, `Adresse`) VALUES ('$vorname','$geburtsdatum','$krankenversicherung','$adresse')";
?>