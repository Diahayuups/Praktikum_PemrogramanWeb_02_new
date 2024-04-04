<?php
// kofigurasi DB
$host = "localhost";
$dbname = "dbpuskesmas";
$user = "root";
$pass = "";

$dsn = "mysql:host=$host;dbname=$dbname";

// koneksiin (menghubungkan)

$dbh = new PDO($dsn, $user, $pass);

?>