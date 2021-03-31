<?php

include('./includes/config.inc.php');

$keres = $oldalak['/'];

if (isset($_GET['oldal'])) {
    $oldal = $oldalak[$_GET['oldal']];
    if (isset($oldal) && file_exists("./templates/pages/{$oldal['fajl']}.tpl.php")) {
        $keres = $oldal;
    } else {
        $keres = $hibaOldal;
    }
}

include('./templates/index.tpl.php');
