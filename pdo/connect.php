<?php
declare(strict_types=1);

$pdo = null;

try{
    $pdo = new PDO('mysql:host=localhost;dbname=exemplo', 'root', 'root');
} catch (Exception $e) {
    echo $e->getMessage();
    //die();
}
//var_dump($pdo);
return $pdo;
