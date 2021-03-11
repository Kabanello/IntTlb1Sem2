<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8" />
        <title>Прокат машин</title>
        <h2 align = "center">Результаты запросов из задания</h2>
    </head>
    <body>
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
    ?>
<hr>
        <p>
        <form action="action1.php" id = "1" method = "post">
             1. Полученный доход с проката по состоянию на выбранную дату 
             <input placeholder="Введите дату" name="data1" id= "date1"> 
             <input id="button1" type="submit" value="Отправить"> 
        </form>

        <form action="action2.php" id = "2" method = "post">
             2. Автомобили выбранного производителя 
             <input placeholder="Введите Имя производителя" name="seller2" id = "id2"> 
             <input id="button2" type="submit" value="Отправить"> 
        </form>

        <form action="action3.php" id = "3" method = "post"> 
             3. Свободные автомобили на выбранную дату 
             <input placeholder="Введите дату" name="data3" id = "date3"> 
             <input id="button3" type="submit" value="Отправить"> 
        </form>
        </p>
<hr>
        <form action="action4.php" id = "4" method = "post"> 
              Добавить информацию об аренде автомобиля 
             <input placeholder="Введите id автомобиля" name="id4" id = "id4"> 
            <p>
            <input placeholder="Дата начала" name="info1" id = "info1"> 
            <input placeholder="Время начала" name="info2" id = "info2"> 
            <input placeholder="Дата окончания" name="info3" id = "info"> 
            <input placeholder="Время окончания" name="info4" id = "info4"> 
            <input placeholder="Цена" name="info5" id = "info5"> 
            </p>
             <input id="button4" type="submit" value="Добавить"> 
        </form>
<hr>
        <form action="action5.php" id = "5" method = "post"> 
              <p>Изменить пробег выбранного автомобиля </p>
              <p>
              <input placeholder="Введите id автомобиля" name="id5" id = "id5"> 
              <input placeholder="Введите новый пробег" name="data5" id = "data5"> 
              </p>
             <input id="button5" type="submit" value="Изменить"> 
        </form>

    </body>
</html>