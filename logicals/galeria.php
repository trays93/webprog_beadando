<?php
// Application logic:
$messages = [];   
// Form checkings:
if (isset($_POST['send'])) {
    foreach($_FILES as $file) {
        if ($file['error'] == 4);   // There was no file uploaded
        elseif (!in_array($file['type'], $MEDIATYPES))
            $messages[] = " The type is not correct: " . $file['name'];
        elseif ($file['error'] == 1   // The file size exceeds the limit allowed in php.ini
                || $file['error'] == 2   // The file size exceeds the limit allowed in HTML Form
                || $file['size'] > $MAXSIZE) 
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
