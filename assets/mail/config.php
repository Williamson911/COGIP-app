<?php
// Informations d'identification
define('DB_SERVER', 'remotemysql.com');
define('DB_USERNAME', 'S4vXv3ajmJ');
define('DB_PASSWORD', 'FtisxeAHPI');
define('DB_NAME', 'S4vXv3ajmJ');

// Connexion à la base de données MySQL
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Vérifier la connexion
if($conn === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}
?>