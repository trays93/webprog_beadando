<h2>Beérkezett üzenetek</h2>

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
        <?php foreach($uzenetek as $k => $v) : ?>
        <tr>
            <td><?= $v['nev'] ?></td>
            <td><?= $v['email'] ?></td>
            <td><?= $v['targy'] ?></td>
            <td><?= $v['uzenet'] ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
