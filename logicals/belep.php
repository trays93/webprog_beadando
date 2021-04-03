<?php

class Reg
{
    public $veznev;
    public $kernev;
    public $login;
    public $email;
    public $passw;
}

class Belep
{
    public $login;
    public $passw;
}

function filterInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function validateRegInput($data) {
    $validationErrors = [];

    // Vezeték név ellenőrzése
    if (empty($_POST['veznev'])) {
        $validationErrors['veznev'] = 'A vezeték név nem lehet üres!';
    }
    if (!preg_match('/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ]+$/', $_POST['veznev'])) {
        $validationErrors['veznev'] = 'A vezeték név csak betűket és szóközt tartalmazhat';
    }

    // Kereszt név ellenőrzése
    if (empty($_POST['kernev'])) {
        $validationErrors['kernev'] = 'A kereszt név nem lehet üres!';
    }
    if (!preg_match('/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ]+$/', $_POST['kernev'])) {
        $validationErrors['kernev'] = 'A kereszt név csak betűket és szóközt tartalmazhat';
    }

    // Login név ellenőrzése
    if (empty($_POST['login'])) {
        $validationErrors['login'] = 'A login név nem lehet üres!';
    }
    if (!preg_match('/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð0123456789]+$/', $_POST['login'])) {
        $validationErrors['login'] = 'A login név csak betűket és számokat tartalmazhat';
    }

    // E-mail ellenőrzése
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $validationErrors['email'] = 'Hibás e-mail!';
    }

    // Jelszó név ellenőrzése
    if (empty($_POST['passw'])) {
        $validationErrors['passw'] = 'A jelszó nem lehet üres!';
    }
    if (!preg_match('/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð0123456789]+$/', $_POST['passw'])) {
            $validationErrors['passw'] = 'A jelszó csak betűket és számokat tartalmazhat';
    }

    return $validationErrors;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['belep'])) {
        foreach ($_POST as $key => $value) {
            $_POST[$key] = filterInput($value);
        }

        $uzenet = new Belep();
        $uzenet->login = $_POST['login'];
        $uzenet->passw = sha1($_POST['passw']);
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT login, veznev, kernev  FROM reg_adat where login = :login and passw = :passw");
            // $stmt->bindParam(':login', $uzenet->login);
            // $stmt->bindParam(':passw', $uzenet->passw);
            $stmt->execute([
                ':login' => $uzenet->login,
                ':passw' => $uzenet->passw,
            ]);
            // set the resulting array to associative
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $result = $stmt->fetchAll();
            var_dump($result);
            exit();
            
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        $conn = null;

        $keres = $oldalak['/'];
        $sikeresBelepes = 'Sikeres belépés';
        // $validationErrors = validateRegInput($_POST);
        // var_dump($validationErrors);

        // if (!count($validationErrors)) {
        //     // sikeres validáció esetén:
            
        // }
    }

    if (isset($_POST['regisztral'])) {
        foreach ($_POST as $key => $value) {
            $_POST[$key] = filterInput($value);
        }
        
        $validationErrors = validateRegInput($_POST);
        var_dump($validationErrors);

        if (!count($validationErrors)) {
            // sikeres validáció esetén:
            $uzenet = new Reg();
            $uzenet->veznev = $_POST['veznev'];
            $uzenet->kernev = $_POST['kernev'];
            $uzenet->login = $_POST['login'];
            $uzenet->email = $_POST['email'];
            $uzenet->passw = $_POST['passw'];
            $passwordHash = sha1($uzenet->passw);

            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $conn->prepare("INSERT INTO reg_adat (veznev, kernev, login, email, passw) VALUES (:veznev, :kernev, :login, :email, :passw)");
                $stmt->bindParam(':veznev', $uzenet->veznev);
                $stmt->bindParam(':kernev', $uzenet->kernev);
                $stmt->bindParam(':login', $uzenet->login);
                $stmt->bindParam(':email', $uzenet->email);
                $stmt->bindParam(':passw', $passwordHash);
                $stmt->execute();
            } catch(PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
            $conn = null;

            $keres = $oldalak['belep'];
            $sikeresRegisztracio = 'Sikeres regisztráció!';
        }
    }
    
    
}