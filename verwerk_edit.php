<?php
$id = $_GET['id'];
$voornaam = $_GET['voornaam'];
$tussenvoegsel = $_GET['tussenvoegsel'];
$achternaam = $_GET['achternaam'];
$mailadres = $_GET['mailadres'];

$id = $_GET['id'];
$dbc = mysqli_connect('localhost', '22320_username', '22320_password', '22320_db') or die ('Error connect.');
$query = "UPDATE nieuwsbrief ";
$query .= "SET voornaam = '$voornaam', tussenvoegsel = '$tussenvoegsel', achternaam = '$achternaam', mailadres = '$mailadres' ";
$query .= "WHERE id = '$id'";
$result = mysqli_query($dbc,$query) or die ('Error updating.');
header("location: beheren.php");