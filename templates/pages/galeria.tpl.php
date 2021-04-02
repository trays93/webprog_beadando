<h2>Képgaléria</h2>
<?php
    // Application logic:
    $messages = array();   

    // Form checkings:
    if (isset($_POST['send'])) {
        foreach($_FILES as $file) {
            if ($file['error'] == 4);   // There was no file uploaded
            elseif (!in_array($file['type'], $MEDIATYPES))
                $messages[] = " The type is not correct: " . $file['name'];
            elseif ($file['error'] == 1   // The file size exceeds the limit allowed in php.ini
                        or $file['error'] == 2   // The file size exceeds the limit allowed in HTML Form
                        or $file['size'] > $MAXSIZE) 
                $messages[] = " Too big file: " . $file['name'];
            else {
                $target_dir = $FOLDER.strtolower($file['name']);
                if (file_exists($target_dir))
                    $messages[] = " Already exist: " . $file['name'];
                else {
                    move_uploaded_file($file['tmp_name'], $target_dir);
                    $messages[] = ' Ok: ' . $file['name'];
                }
            }
        }        
    }
?>

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
    
            <?php
            arsort($images);
            foreach($images as $file => $date)
            {
            ?>
                <div class="col-sm-6">
                    <a href="<?php echo $FOLDER.$file ?>">
                        <img src="<?php echo $FOLDER.$file ?>" class="img-fluid">
                    </a>            
                    <p>Name:  <?php echo $file; ?></p>
                    <p>Date:  <?php echo date($DATEFORMAT, $date); ?></p>
                </div>
            <?php
            }
        ?>
  </div>
</div> 

<html>
<body>
    <h1>Képfeltöltés:</h1>
<?php
    if (!empty($messages))
    {
        echo '<ul>';
        foreach($messages as $m)
            echo "<li>$m</li>";
        echo '</ul>';
    }
?>
    <form method="post"
                enctype="multipart/form-data">
        <label><input type="file" name="first" required></label>
        <br><br>
        <input type="submit" name="send">
    </form>    
</body>
</html>
