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

function validateInput($data) {
    $validationErrors = [];

    // Név ellenőrzése
    if (empty($_POST['nev'])) {
        $validationErrors['nev'] = 'A név nem lehet üres!';
    }
    $nameLength = strlen($_POST['nev']);
    if ($nameLength < 5) {
        $validationErrors['nev'] = 'A név nem lehet 5 karakternél rövidebb!';
    }
    if ($nameLength > 30) {
        $validationErrors['nev'] = 'A név nem lehet 30 karakternél hosszabb!';
    }
    if (!preg_match('/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ]+$/', $_POST['nev'])) {
        $validationErrors['nev'] = 'A név csak betűket és szóközt tartalmazhat';
    }

    // E-mail ellenőrzése
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $validationErrors['email'] = 'Hibás e-mail!';
    }

    // Tárgy ellenőrzése
    if (empty($_POST['targy'])) {
        $validationErrors['targy'] = 'A tárgy nem lehet üres!';
    }
    $subjectLength = strlen($_POST['targy']);
    if ($subjectLength < 5) {
        $validationErrors['targy'] = 'A tárgy nem lehet 5 karakternél rövidebb!';
    }
    if ($subjectLength > 30) {
        $validationErrors['targy'] = 'A tárgy nem lehet 30 karakternél hosszabb!';
    }

    // Üzenet ellenőrzése
    if (empty($_POST['uzenet'])) {
        $validationErrors['uzenet'] = 'Az üzenet nem lehet üres!';
    }

    return $validationErrors;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    foreach ($_POST as $key => $value) {
        $_POST[$key] = filterInput($value);
    }
    
    $validationErrors = validateInput($_POST);
    var_dump($validationErrors);

    if (!count($validationErrors)) {
        // sikeres validáció esetén:
        $uzenet = new Uzenet();
        $uzenet->nev = $_POST['nev'];
        $uzenet->email = $_POST['email'];
        $uzenet->targy = $_POST['targy'];
        $uzenet->uzenet = $_POST['uzenet'];
        // TODO: adatbázisba menteni az üzenetet!


        $keres = $oldalak['uzenet'];
    }
    
}
