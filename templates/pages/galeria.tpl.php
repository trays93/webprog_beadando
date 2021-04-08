<h2>Képgaléria</h2>
<div class="container" style="margin-top:30px">
  <div class="row">
  <?php foreach($images as $file => $date) :?>
      <div class="col-sm-6">
          <a href="<?= $FOLDER.$file ?>">
              <img src="<?= $FOLDER.$file ?>" class="img-fluid img-thumbnail">
          </a>            
          <p>Name:  <?= $file; ?></p>
          <p>Date:  <?= date($DATEFORMAT, $date); ?></p>
      </div>
  <?php endforeach;?>
  </div>
</div> 
<h1>Képfeltöltés:</h1>
<?php if (!empty($messages)) : ?>
    <ul>
    <?php foreach($messages as $m) : ?>
        <li><?= $m ?></li>
    <?php endforeach; ?>
    </ul>
<?php endif ;?>
<form method="post"
            enctype="multipart/form-data">
    <label><input type="file" class="btn btn-primary"  name="first" required></label>
    <br><br>
    <input class="btn btn-primary" type="submit"  name="send">
</form>
