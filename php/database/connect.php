<?php
    $driver = 'mysql';
    $host = 'MySQL-8.0';
    $db_name = 'news';
    $db_user = 'root';
    $db_pass = '';
    $charset = 'utf8mb4';
    $options = [PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
    try{
        $pdo = new PDO(
            "$driver:host=$host;dbname=$db_name;charset=$charset",
            $db_user, $db_pass, $options
        );

    }catch (PDOException $e){
        error_log("Ошибка БД: " . $e->getMessage() . " в " . $e->getFile() . " на строке " . $e->getLine());
        die("Ошибка подключения к базе данных");
    }
?>
