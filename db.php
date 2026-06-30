<?php

// Les nouvelles informations fournies par votre hébergeur
$host = getenv('MYSQLHOST') ?: 'strokecheck.howto.rocks'; // Le nom de l'hôte (Host)
$dbname = getenv('MYSQLDATABASE') ?: 'if0_42303762_strokecheck_db'; // Le nom de la DB en ligne
$username = getenv('MYSQLUSER') ?: 'if0_42303762'; // Le nom d'utilisateur fourni
$password = getenv('MYSQLPASSWORD') ?: 'samaxelsky'; // Le mot de passe


$conn = new mysqli($host, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die("La connexion à la base de données a échoué: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");
?>
