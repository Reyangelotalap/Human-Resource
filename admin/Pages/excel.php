<?php 

    $host = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "human_resource 1";
    $dsn = "mysql:host={$host};dbname={$databaseName}";  // Data Source Name

    try {

        $option = [
            
            PDO::ATTR_ERRMODE   =>  PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE  =>  PDO::FETCH_ASSOC

        ];

        $pdo = new PDO($dsn, $username, $password, $option);


    } catch(PDOException $e){
        die("ERROR:".$e->getMessage());
    }


?>