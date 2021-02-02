<?php

function connectBDD() {
    $host = 'mysql-sqirl.alwaysdata.net';
    $port = '3306';
    $db = 'sqirl_g348h';
    $login = 'sqirl';
    $password = 'spaqssiworrdl';

    try {
        $pdo = new PDO('mysql:host='.$host.';port='.$port. ';dbname='.$db, $login, $password);
        $pdo->exec("set names utf8");
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        var_dump($e->getMessage());
    }
    return $pdo;
};

function finalfunction() {
    return "bonjour3";
}