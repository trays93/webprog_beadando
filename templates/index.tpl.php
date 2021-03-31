<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $weboldalCim['cim'] ?></title>
</head>
<body>
    <header>
        <h1><?= $fejlec['cim'] ?></h1>
        <nav>
            <ul>
            <?php foreach ($oldalak as $url => $oldal) : ?>
                <li>
                    <a href="<?= ($url == '/') ? '.' : ('?oldal=' . $url) ?>">
                        <?= $oldal['nev'] ?>
                    </a>
                </li>
            <?php endforeach; ?>
            </ul>
        </nav>
    </header>

    <main>
    <?php include("./templates/pages/{$keres['fajl']}.tpl.php"); ?>
    </main>

    <footer>
        <p><?= $lablec['copyright'] ?> - <?= $lablec['nev'] ?></p>
    </footer>
</body>
</html>