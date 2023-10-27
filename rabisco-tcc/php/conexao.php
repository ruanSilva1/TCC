<?php
$dsn = 'mysql:dbname=rabisco_TCC;host=localhost;port=3333';
$user = '$atelier';
$password = 'rabisco';

try{
    $dsn = new PDO($dsn, $user, $password);
}catch(PDOException $e){
    echo 'Conexão não estabelecida!';
}
?>