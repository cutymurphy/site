<?php

session_start();

require('connect.php');

function debug($data) {
    echo '<pre>' . print_r($data, true) . '<pre>';
}

// проверка выполнения запроса к БД
function dbCheckError($query) {
    $errInfo = $query->errorInfo();
    if ($errInfo[0] !== PDO::ERR_NONE) {
        echo $errInfo[2];
        exit();
    }
    return true;
}

// запрос на получение данных с выбранной таблицы
function selectAll($table, $params = []) {
    global $pdo;
    $sql = "SELECT * FROM $table";

    if (!empty($params)) {
        $i = 0;
        foreach ($params as $key => $value) {
            if (!is_numeric($value)) {
                $value = "'".$value."'";
            }
            if ($i === 0) {
                $sql = $sql . " WHERE $key = $value";
            } else {
                $sql = $sql . " AND $key = $value";
            }
            $i++;
        }
    }

    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    return $query->fetchAll();
}

// запрос на получение одной строки с выбранной таблицы
function selectOne($table, $params = []) {
    global $pdo;
    $sql = "SELECT * FROM $table";

    if (!empty($params)) {
        $i = 0;
        foreach ($params as $key => $value) {
            if (!is_numeric($value)) {
                $value = "'".$value."'";
            }
            if ($i === 0) {
                $sql = $sql . " WHERE $key = $value";
            } else {
                $sql = $sql . " AND $key = $value";
            }
            $i++;
        }
    }
//    $sql = $sql . " LIMIT 1";
    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
    return $query->fetch();
}

$params = [
    'admin' => 0,
    'username' => 'Dasha'
];

// Запись в таблицу БД
function insert($table, $params) {
    global $pdo;
    $i = 0;
    $column = '';
    $mask = '';
    foreach ($params as $key => $value) {
        if ($i === 0) {
            $column = $column . "$key";
            $mask = $mask ."'" . "$value" . "'";
        } else {
            $column = $column . ", $key";
            $mask = $mask .", '" . "$value" . "'";
        }
        $i++;
    }

    $sql = "INSERT INTO $table ($column) VALUES ($mask)";

//    debug($sql);
//    exit();

    $query = $pdo->prepare($sql);
    $query->execute($params);
    dbCheckError($query);
    return $pdo->lastInsertId();
}

// Обновление строки в таблице
function update($table, $id, $params) {
    global $pdo;
    $i = 0;
    $str = '';
    foreach ($params as $key => $value) {
        if ($i === 0) {
            $str = $str . $key . " = '" . $value . "'";
        } else {
            $str = $str .", " . $key . " = '" . $value . "'";
        }
        $i++;
    }

    $sql = "UPDATE $table SET $str WHERE id = $id";

//    debug($sql);
//    exit();

    $query = $pdo->prepare($sql);
    $query->execute($params);
    dbCheckError($query);
}

// Обновление строки в таблице
function delete($table, $id) {
    global $pdo;

    $sql = "DELETE FROM $table WHERE id = $id";

//    debug($sql);
//    exit();

    $query = $pdo->prepare($sql);
    $query->execute();
    dbCheckError($query);
}

$arrData = [
    'admin' => '0',
    'username' => 'Alena',
    'email' => 'alena@gmail.com',
    'password' => 'dfsfsede'
];

$arrData1 = [
    'admin' => '1'
];

//debug(selectOne('user'));
//debug(selectAll('user', $params));
//insert('user', $arrData);
//update('user', 4, $arrData1);
//delete('user', 6);