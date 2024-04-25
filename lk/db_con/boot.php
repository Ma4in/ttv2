<?php

function pdo(): PDO
{
    static $pdo;

    if (!$pdo) {
        $config = include __DIR__.'/config.php';
        $dsn = 'pgsql:dbname='.$config['db_name'].';host='.$config['db_host'];
        $pdo = new PDO($dsn, $config['db_user'], $config['db_pass']);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    return $pdo;
}


$checkLogin = 'SELECT (password = crypt(:usPass, password)) 
AS password_match
FROM tt.users
WHERE login = :usLogin ;';

$pdo = pdo();
$query = $pdo->prepare($checkLogin);

