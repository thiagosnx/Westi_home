<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "westi";


try {
    $conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);
} catch (\Throwable $th) {
        echo "erro, sem sucesso"
}