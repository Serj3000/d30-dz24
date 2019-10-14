<?php

require_once 'vendor/autoload.php';

use Hillel\Model\UserModelInterface;
use Hillel\Model\UserModel;
use Hillel\Repository\UserRepositoryInterface;

//____________________Start PDO____________________________________
/* Подключение к базе данных MySQL с помощью вызова драйвера */
$dsn = 'mysql:host=localhost;port=3306; dbname=d30test_dz24; chaset=utf8';
$login_db = 'root';
$password_db = '';

try {
    $dbh = new PDO($dsn, $login_db, $password_db);

} catch (PDOException $e) {
    echo 'Подключение не удалось: ' . $e->getMessage();
}

/* new PDO() означает создание экземпляра класса PDO */

$pdo= new PDO($dsn, $login_db, $password_db);

//_____________________End PDO____________________________________

echo "index.php";

// $repository= new \Hillel\Repository\PdoUserRepository($pdo);

// $user=$repository->find(1);

$user=new \Hillel\Model\UserModel(
    null,
    'some@gfr.com',
    password_hash('123456789',1),
    new DateTime()
);

$repository->create($user);
