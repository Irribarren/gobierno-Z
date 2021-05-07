<?php
$dsn = "mysql:host=localhost;dbname=gobiernoz";
$usuario= "root";
$pass="";
try {
    $conexion= new PDO($dsn, $usuario, $pass);

} catch (PDOException $e){
    echo "hubo un error: ". $e->getMessage();
}
