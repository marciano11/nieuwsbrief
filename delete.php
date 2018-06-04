<?php
$id = $_GET['id'];
$dbc = mysqli_connect('localhost', '22320_username', '22320_password', '22320_db') or die ('Error connect.');
$query = "DELETE FROM nieuwsbrief WHERE id = '$id'";
$result = mysqli_query($dbc,$query) or die ('Error deleting.');
header("location: beheren.php");