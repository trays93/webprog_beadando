<?php

class Uzenet
{
    public $nev;
    public $email;
    public $targy;
    public $uzenet;
}

function filterInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    foreach ($_POST as $key => $value) {
        $_POST[$key] = filterInput($value);
    }

    // TODO: validálni az adatokat!

    // sikeres validáció esetén:
    $uzenet = new Uzenet();
    $uzenet->nev = $_POST['nev'];
    $uzenet->email = $_POST['email'];
    $uzenet->targy = $_POST['targy'];
    $uzenet->uzenet = $_POST['uzenet'];
    // TODO: adatbázisba menteni az üzenetet!
    // átirányítani az üzenet oldalra
    $keres = $oldalak['uzenet'];

    // ha nem volt sikeres a validáció
    // akkor vissza az üzenet oldalra

    // $url = $_SERVER['PHP_SELF'] . '?oldal=uzenet';
    // header("Location: {$url}");
}
