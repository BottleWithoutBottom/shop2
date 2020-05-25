<?php

function connectDB():PDO {
    static $db;

    if ($db === null) {
        $db = new PDO('mysql:host=localhost;dbname=shop', 'root', '', [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }
    return $db;
}

function getQuery($sql, $parameters = []):PDOstatement {
    $db = connectDB();
    $query = $db->prepare($sql);
    $query->execute($parameters);
    dbErrorCatcher($query);
    return $query;
}


function dbErrorCatcher($query):bool {
    $errors = $query->errorInfo();

    if ($errors[0] !== PDO::ERR_NONE) {
        echo $errors[2];
        exit();
    }
    return true;
}