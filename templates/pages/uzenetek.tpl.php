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

<?php
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT nev, targy, email, uzenet FROM uzenet ORDER BY datum DESC");
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  // foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
?>
  <?php foreach($stmt->fetchAll() as $k => $v) : ?>
    <tr>
      <td><?= $v['nev'] ?></td>
      <td><?= $v['email'] ?></td>
      <td><?= $v['targy'] ?></td>
      <td><?= $v['uzenet'] ?></td>
    </tr>
  <?php endforeach; ?>
<?php
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
?>
</tbody>
</table>