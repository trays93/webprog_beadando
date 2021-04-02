<h2>Üzenj nekünk</h2>
<p>Írj nekünk üzenetet bátran, válaszolunk amint lehetséges!</p>

<form action="#" method="post" class="row">
    <div class="col-md-6">
        <label for="nev" class="form-label">Név</label>
        <input type="text" name="nev" id="nev" class="form-control is-valid" required>
        <div class="valid-feedback">
            Helyes
        </div>
    </div>
    <div class="col-md-6">
        <label for="email" class="form-label">E-mail</label>
        <input type="email" name="email" id="email" class="form-control" required>
    </div>
    <div class="col-12">
        <label for="targy" class="form-label">Tárgy</label>
        <input type="text" name="targy" id="targy" class="form-control" required>
    </div>
    <div class="col-12">
        <label for="uzenet" class="form-label">Üzenet</label>
        <textarea name="uzenet" id="uzenet" class="form-control is-invalid" rows="3" aria-describedby="hibasUzenet" required></textarea>
        <div id="hibasUzenet" class="invalid-feedback">
            Az üzenet nem lehet üres!
        </div>
    </div>
    <div class="col-12">
        <button class="btn btn-primary" type="submit">Üzenet küldése</button>
    </div>
</form>