<?php

var_dump(isset($validationErrors['targy']) ? 'is-invalid' : (isset($_POST['targy']) ? 'is-valid' : ''));

?>


<h2>Üzenj nekünk</h2>
<p>Írj nekünk üzenetet bátran, válaszolunk amint lehetséges!</p>

<form action="#" method="post" class="row">
    <div class="col-md-6">
        <label for="nev" class="form-label">Név</label>
        <input type="text"
            name="nev"
            id="nev"
            class="form-control <?= isset($validationErrors['nev']) ? 'is-invalid' : (isset($_POST['nev']) ? 'is-valid' : '') ?>"
            <?= isset($_POST['nev']) ? ' value="' . $_POST['nev'] . '"' : '' ?>
            aria-describedby="hibasNev"
            required>
        <?php if (isset($validationErrors['nev'])) : ?>
        <div id="hibasUzenet" class="invalid-feedback">
            <?= $validationErrors['nev'] ?>
        </div>
        <?php else : ?>
        <div class="valid-feedback">
            Helyes
        </div>
        <?php endif; ?>
    </div>
    <div class="col-md-6">
        <label for="email" class="form-label">E-mail</label>
        <input type="email"
            name="email"
            id="email"
            class="form-control <?= isset($validationErrors['email']) ? 'is-invalid' : (isset($_POST['email']) ? 'is-valid' : '') ?>"
            <?= isset($_POST['email']) ? ' value="' . $_POST['email'] . '"' : '' ?>
            aria-describedby="hibasEmail"
            required>
        <?php if (isset($validationErrors['email'])) : ?>
        <div id="hibasEmail" class="invalid-feedback">
            <?= $validationErrors['email'] ?>
        </div>
        <?php else : ?>
        <div class="valid-feedback">
            Helyes
        </div>
        <?php endif; ?>
    </div>
    <div class="col-12">
        <label for="targy" class="form-label">Tárgy</label>
        <input type="text"
            name="targy"
            id="targy"
            class="form-control <?= isset($validationErrors['targy']) ? 'is-invalid' : (isset($_POST['targy']) ? 'is-valid' : '') ?>"
            <?= isset($_POST['targy']) ? ' value="' . $_POST['targy'] . '"' : '' ?>
            aria-describedby="hibasTargy"
            required>
        <?php if (isset($validationErrors['targy'])) : ?>
        <div id="hibasEmail" class="invalid-feedback">
            <?= $validationErrors['targy'] ?>
        </div>
        <?php elseif (isset($_POST['uzenet'])) : ?>
        <div class="valid-feedback">
            Helyes
        </div>
        <?php endif; ?>
    </div>
    <div class="col-12">
        <label for="uzenet" class="form-label">Üzenet</label>
        <textarea name="uzenet"
            id="uzenet"
            class="form-control  <?= isset($validationErrors['uzenet']) ? 'is-invalid' : (isset($_POST['uzenet']) ? 'is-valid' : '') ?>"
            rows="3"
            aria-describedby="hibasUzenet"
            required><?= isset($_POST['uzenet']) ?  $_POST['uzenet'] : '' ?></textarea>
        <?php if (isset($validationErrors['uzenet'])) : ?>
        <div id="hibasEmail" class="invalid-feedback">
            <?= $validationErrors['uzenet'] ?>
        </div>
        <?php elseif (isset($_POST['uzenet'])) : ?>
        <div class="valid-feedback">
            Helyes
        </div>
        <?php endif; ?>
    </div>
    <div class="col-12">
        <button class="btn btn-primary" type="submit">Üzenet küldése</button>
    </div>
</form>