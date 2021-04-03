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
        'nev' => 'Főoldal',
        'visible' => true,
        'login' => [
            1, 1
        ],
    ],
    'malacrol' => [
        'fajl' => 'malacrol',
        'nev' => 'A tengeri malacról',
        'visible' => true,
        'login' => [
            1, 1
        ],
    ],
    'galeria' => [
        'fajl' => 'galeria',
        'nev' => 'Képgaléria',
        'visible' => true,
        'login' => [
            1, 1
        ],
    ],
    'urlap' => [
        'fajl' => 'urlap',
        'nev' => 'Üzenj nekünk',
        'visible' => true,
        'login' => [
            1, 1
        ],
    ],
    'uzenet' => [
        'fajl' => 'uzenet',
        'nev' => 'Elküldött üzenet',
        'visible' => false,
        'login' => [
            1, 1
        ],
    ],
    'uzenetek' => [
        'fajl' => 'uzenetek',
        'nev' => 'Üzenetek',
        'visible' => true,
        'login' => [
            0, 1
        ],
    ],
    'belep' => [
        'fajl' => 'belep',
        'nev' => 'Belépés/Regisztráció',
        'visible' => true,
        'login' => [
            1, 0
        ],
    ]
    ,
    'kilep' => [
        'fajl' => 'kilep',
        'nev' => 'Kilépés',
        'visible' => true,
        'login' => [
            0, 1
        ],
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
$DATEFORMAT = "Y.m.d. H:i";
$MAXSIZE = 2048*2048;

//Adatkapcsolat
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webprog_beadando";
