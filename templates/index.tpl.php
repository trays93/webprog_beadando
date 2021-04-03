<?php

session_start();
if (isset($oldal) && file_exists("./logicals/{$oldal['fajl']}.php")) {
    include("./logicals/{$oldal['fajl']}.php");
}

?>
<!DOCTYPE html>
<html lang="hu" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $weboldalCim['cim'] ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link href="./styles/styles.css" rel="stylesheet" type="text/css">
</head>
<body class="d-flex flex-column h-100">
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-secondary">
            <div class="container-fluid">
                <a href="/webprog_beadando/" class="navbar-brand">
                    <img src="./images/logo.svg" class="img-fluid" alt="logo">
                </a>
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
    </header>

    <main class="flex-shrink-0">
        <div class="container">
            <div class="p-5 mt-5 mb-4 bg-light rounded-3">
                <?php include("./templates/pages/{$keres['fajl']}.tpl.php"); ?>
            </div>
        </div>
    </main>

    <footer class="footer mt-auto py-3 bg-light">
        <div class="container">
            <span class="text-muted"><?= $lablec['copyright'] ?> - <?= $lablec['nev'] ?></span>
        </div>
    </footer>
</body>
</html>