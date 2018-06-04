<?php
$dbc = mysqli_connect('localhost', '22320_username', '22320_password', '22320_db') or die ('Error connect.');
$voornaam = 'test';
$tussenvoegsel = 'de';
$achternaam = 'database';
$mailadres = '22320@ma-web.nl';

for ($i = 0 ; $i < 10 ; $i++) {
    $result = mysqli_query($dbc,$query) or die ('Error querying.');
}