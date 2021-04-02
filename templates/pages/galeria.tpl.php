<h2>Képgaléria</h2>
<?php
     $images = array();
     $reader = opendir($FOLDER);
     while (($file = readdir($reader)) !== false) {
         if (is_file($FOLDER.$file)) {
             $end = strtolower(substr($file, strlen($file)-4));
             if (in_array($end, $TYPES)) {
                 $images[$file] = filemtime($FOLDER.$file);
             }
         }
     }
     closedir($reader);
     arsort($images);
    
?>

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-12">
            <?php
            arsort($images);
            foreach($images as $file => $date)
            {
            ?>
                <div class=class="col-sm-6">
                    <a href="<?php echo $FOLDER.$file ?>">
                        <img src="<?php echo $FOLDER.$file ?>">
                    </a>            
                    <p>Name:  <?php echo $file; ?></p>
                    <p>Date:  <?php echo date($DATEFORMAT, $date); ?></p>
                </div>
            <?php
            }
        ?>
    </div>
  </div>
</div> 