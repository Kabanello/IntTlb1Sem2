<?php
       $host = 'localhost';
       $db   = 'iteh2lb1var7';
       $user = 'root';
       $pass = 'root';
       $charset = 'utf8';
   
       $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
       $opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    $pdo = new PDO($dsn, $user, $pass, $opt);


    $date3 = ($_POST['data3']);
        $n3 = 0;
        $stmt = $pdo->prepare("SELECT FID_Car FROM rent WHERE date_end < ?");
        $stmt->execute(array($date3));
        echo "<br/>Свободные автомобили: <br/>";
        while ($row = $stmt->fetch(PDO::FETCH_LAZY))
            {
                $n3++;
                echo $n3 . ". " . $row[0] . "<br/>";
            }
?>