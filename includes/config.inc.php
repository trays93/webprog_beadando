<?php

$weboldalCim = [
    'cim' => 'Magyar Tengerimalac-védő Egyesület'
];

$fejlec = [
    'cim' => 'Lorem Ipsum Kft.'
];

$lablec = [
    'copyright' => '&copy;' . date('Y'),
    'nev' => 'Magyar Tengerimalac-védő Egyesület.'
];

$oldalak = [
    '/' => [
        'fajl' => 'cimlap',
        'nev' => 'Főoldal'
    ],
    'malacrol' => [
        'fajl' => 'malacrol',
        'nev' => 'A tengeri malacról'
    ],
    'galeria' => [
        'fajl' => 'galeria',
        'nev' => 'Képgaléria'
    ],
    'urlap' => [
        'fajl' => 'urlap',
        'nev' => 'Üzenj nekünk'
    ],
    'uzenet' => [
        'fajl' => 'uzenet',
        'nev' => 'Elküldött üzenet'
    ],
    'uzenetek' => [
        'fajl' => 'uzenetek',
        'nev' => 'Üzenetek'
    ],
    'belep' => [
        'fajl' => 'belep',
        'nev' => 'Belépés'
    ]
    ,
    'kilep' => [
        'fajl' => 'kilep',
        'nev' => 'Kilépés'
    ]
];

$hibaOldal = [
    'fajl' => '404',
    'szoveg' => 'A keresett oldal nem található!',
];
//Galéria
$FOLDER = './galeria/';
$TYPES = array ('.jpg', '.png');
$MEDIATYPES = array('image/jpeg', 'image/png');
$DATEFORMAT = "Y/m/d H:i";
$MAXSIZE = 2048*2048;
//Adatkapcsolat
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webprog_beadando";