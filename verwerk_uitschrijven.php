<?php

//FORMULIER UITLEZEN (DATA BINNENHALEN)
$mailadres = $_POST['mailadres'];
// CONNECTIE MAKEN MET DE DATABASE
$dbc = mysqli_connect('localhost', '22320_username', '22320_password', '22320_db') or die ('Verbinding mislukt.');
// QUERY ZOEKEN VOOR DATA
$query = "SELECT * FROM nieuwsbrief WHERE mailadres = '$mailadres'";
// QUERY UITVOEREN
$result = mysqli_query($dbc,$query) or die ('Mislukt (SELECT).');
// TELLEN HOEVEEL REGELS WE NU HEBBEN
$number_of_rows = mysqli_num_rows($result);
// TESTEN OF ER REGELS ZIJN EN DAAR CONCLUSIE AAN VERBINDEN
if($number_of_rows == 0) {
    echo 'Het volgende mailadres ' . $mailadres . ' staat niet in de database.<br>';
    echo'<a href="uitschrijven.php"><button class="button1">probeer het hier nog een keer</button></a><br><br>';
    exit();
} else {
    echo ' Het volgende mailadres. ' . $mailadres . ' staat in de database ';
}
// QUERY VOOR VERWIJDEREN
$query = "DELETE FROM nieuwsbrief WHERE mailadres = '$mailadres'";
// QUERY UITVOEREN
$result = mysqli_query($dbc,$query) or die ('Mislukt (DELETE).');
//CONNECTIE VERBREKEN
mysqli_close($dbc);
// VERSLAG DOEN VAN HET RESULTAAT
echo '<br>Het volgende mailadres ' . $mailadres . ' is verwijderd uit de database.';
?>
<br>
<a href="index.php"><button class="button1">Home Pagina</button></a><br><br>