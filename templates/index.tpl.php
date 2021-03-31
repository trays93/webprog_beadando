<?php

session_start();
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $weboldalCim['cim'] ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link href="./styles/styles.css" rel="stylesheet" type="text/css">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a href="#" class="navbar-brand"><?= $weboldalCim['cim'] ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navbarCollapse" class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <?php foreach ($oldalak as $url => $oldal) : ?>
                    <li class="nav-item">
                        <a class="nav-link<?= $oldal == $keres ? ' active' : '' ?>" href="<?= ($url == '/') ? '.' : ('?oldal=' . $url) ?>">
                            <?= $oldal['nev'] ?>
                        </a>
                    </li>
                <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </nav>

    <main>
    <?php include("./templates/pages/{$keres['fajl']}.tpl.php"); ?>
    </main>

    <footer>
        <p><?= $lablec['copyright'] ?> - <?= $lablec['nev'] ?></p>
    </footer>
</body>
</html>