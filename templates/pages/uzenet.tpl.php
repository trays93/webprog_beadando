<h2>Elküldött üzenet</h2>
<?php if (isset($uzenet)) : ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Név</th>
                <th scope="col">E-mail</th>
                <th scope="col">Tárgy</th>
                <th scope="col">Üzenet</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $uzenet->nev ?></td>
                <td><?= $uzenet->email ?></td>
                <td><?= $uzenet->targy ?></td>
                <td><?= $uzenet->uzenet ?></td>
            </tr>
        </tbody>
    </table>
<?php endif; ?>
