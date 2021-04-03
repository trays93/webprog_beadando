<div class="row">
   <div class="col-md-6">
        <h2>Belépés</h2>
        <form method="POST">
            <input type="hidden" name="belep" value="belep">
            <label for="login" class="form-label">Login név:</label>
            <input type="text" name="login" id="login" class="form-control is-valid" required>
            <label for="passw" class="form-label">Jelszó:</label>
            <input type="password" name="passw" id="passw" class="form-control is-valid" required>
            <br>
            <button class="btn btn-primary" type="submit">Belépés</button>
       </form>
   </div>
   <div class="col-md-6">
        <h2>Regisztráció</h2> 
        <form method="POST">
        <?php if (isset($sikeresRegisztracio)) : ?>
            <div class="alert alert-success" role="alert">
                <?= $sikeresRegisztracio ?>
            </div>
        <?php endif; ?>
            <input type="hidden" name="regisztral" value="regisztral">
            
            <label for="veznev" class="form-label">Vezeték név</label>
            <input type="text"
                name="veznev"
                id="veznev"
                class="form-control <?= isset($validationErrors['veznev']) ? 'is-invalid' : (isset($_POST['veznev']) ? 'is-valid' : '') ?>"
                <?= isset($_POST['veznev']) ? ' value="' . $_POST['veznev'] . '"' : '' ?>
                aria-describedby="hibasNev"
                required>
            <?php if (isset($validationErrors['veznev'])) : ?>
            <div id="hibasUzenet" class="invalid-feedback">
                <?= $validationErrors['veznev'] ?>
            </div>
            <?php else : ?>
            <div class="valid-feedback">
                Helyes
            </div>
            <?php endif; ?>
            


            <label for="kernev" class="form-label">Kereszt név:</label>
            <input type="text"
                name="kernev"
                id="kernev"
                class="form-control <?= isset($validationErrors['kernev']) ? 'is-invalid' : (isset($_POST['kernev']) ? 'is-valid' : '') ?>"
                <?= isset($_POST['kernev']) ? ' value="' . $_POST['kernev'] . '"' : '' ?>
                aria-describedby="hibasNev"
                required>
            <?php if (isset($validationErrors['kernev'])) : ?>
            <div id="hibasUzenet" class="invalid-feedback">
                <?= $validationErrors['kernev'] ?>
            </div>
            <?php else : ?>
            <div class="valid-feedback">
                Helyes
            </div>
            <?php endif; ?>
            
            <label for="login" class="form-label">Login név:</label>
            <input type="text"
                name="login"
                id="login"
                class="form-control <?= isset($validationErrors['login']) ? 'is-invalid' : (isset($_POST['login']) ? 'is-valid' : '') ?>"
                <?= isset($_POST['login']) ? ' value="' . $_POST['login'] . '"' : '' ?>
                aria-describedby="hibasNev"
                required>
            <?php if (isset($validationErrors['login'])) : ?>
            <div id="hibasUzenet" class="invalid-feedback">
                <?= $validationErrors['login'] ?>
            </div>
            <?php else : ?>
            <div class="valid-feedback">
                Helyes
            </div>
            <?php endif; ?>



            <label for="email" class="form-label">E-mail cím:</label>
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

             </div>
             <?php endif; ?>

            <label for="passw" class="form-label">Jelszó:</label>
            <input type="password"
                name="passw"
                id="passw"
                class="form-control <?= isset($validationErrors['passw']) ? 'is-invalid' : (isset($_POST['passw']) ? 'is-valid' : '') ?>"
                <?= isset($_POST['passw']) ? ' value="' . $_POST['passw'] . '"' : '' ?>
                aria-describedby="hibasNev"
                required>
            <?php if (isset($validationErrors['passw'])) : ?>
            <div id="hibasUzenet" class="invalid-feedback">
                <?= $validationErrors['passw'] ?>
            </div>
            <?php else : ?>
            <div class="valid-feedback">
                Helyes
            </div>
            <?php endif; ?> 

            <input type="checkbox" name="aszf" value="0" required>
            <label class="form-label">Az általános szerződési feltételekt elfogadom.</label>
            <br>
            <button class="btn btn-primary" type="submit">Regisztráció</button>
        </form>

   </div>
</div>