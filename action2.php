<?
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


    $name2 = ($_POST['seller2']);
    $n2 = 0;
    $stmt = $pdo->prepare("SELECT ID_Vendors FROM vendors WHERE name = ?");
    $stmt->execute(array($name2));
    $id2 = $stmt->fetch(PDO::FETCH_LAZY);
    $stmt = $pdo->prepare("SELECT name FROM cars WHERE FID_Vendors = ?");
    $stmt->execute(array($id2[0]));
    echo "<br/>Автомобили выбранного производителя: <br/>";
    while ($row = $stmt->fetch(PDO::FETCH_LAZY))
        {
            $n2++;
            echo $n2 . ". " . $row[0] . "<br/>";
        }

    ?>