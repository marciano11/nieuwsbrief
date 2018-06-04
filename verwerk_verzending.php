<?php
//0. Uitlezen van de POST-array
$subject = $_POST['subject'];
$message = $_POST['message'];

echo $subject . ' ' . $message;
//1. connectie maken met de DB
$dbc = mysqli_connect('localhost', '22320_username', '22320_password', '22320_db') or die ('Error connect.');

//2. kijken in de database en alle mailadressen tevoorschijn halen
$query = "SELECT mailadres FROM nieuwsbrief";
$result = mysqli_query($dbc,$query) or die ('Error querying.');

//3. loopje waarin een bericht wordt verzonden naar alle mailadressen
while ($row = mysqli_fetch_array($result)) {
    echo 'Mail verzonden naar: ' . $row ['mailadres'] . '<br>';
    // Variabelen voor mailen
    $to = $row['mailadres'];
    $headers = 'From: 22320@ma-web.nl';
    // Mail verzenden
    mail($to,$subject,$message,$headers);
}

echo 'Klaar met verzenden.';