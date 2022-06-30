<?php
$dbhost = "localhost";
$dbname = "php";
$dbuser = "root";
$dbpass = "";

try {
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser,$dbpass);
} catch (PDOException $e) {
    echo "Connection failed !";
}