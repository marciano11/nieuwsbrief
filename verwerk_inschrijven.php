<?php

// POST-ARRAY UITLEZEN
$voornaam = $_POST ['voornaam'];
$tussenvoegsel = $_POST ['tussenvoegsel'];
$achternaam = $_POST ['achternaam'];
$mailadres = $_POST ['mailadres'];

// DATA IN DATABASE STOPPEN
//1. VERBINDING MAKEN MET DATABASE
$dbc = mysqli_connect('localhost', '22320_username', '22320_password', '22320_db') or die ('Verbinding mislukt.');
//2. OPDRACHT (QUERY) SCHRIJVEN VOOR DE DATABASE
$query = "INSERT INTO nieuwsbrief VALUES (0,'$voornaam','$tussenvoegsel','$achternaam','$mailadres')";
//3. QUERY UITVOEREN
$result = mysqli_query($dbc,$query) or die ('Querying mislukt.');
//4. VERBINDING VERBREKEN
mysqli_close($dbc);
// BEVESTIGEN DAT DATA IN DATABASE STAAT
if ($result) {
    echo 'De volgende gegevens zijn toegevoegd aan de database: <br>';
    echo $voornaam . '<br>';
    echo $tussenvoegsel . '<br>';
    echo $achternaam . '<br>';
    echo $mailadres . '<br>';
} else {
    echo 'Er is iets fout gegaan. Probeer het nog een keer.';
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<a href="index.php"><button class="button1">Home pagina</button></a><br><br>
<a href="inschrijven.php"><button class="button1">Vorige pagina</button></a><br><br>


</body>
</html>
