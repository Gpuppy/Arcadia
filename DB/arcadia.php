<?php

$username = htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8') ;
$password = htmlspecialchars($_POST['password'], ENT_QUOTES, 'UTF-8') ;

//connexion a la base de données

$dsn = "mysql:host=localhost;dbname:arcadia, charset=uf8mb4";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,

];

$pdo = new PDO($dsn, 'username', 'password', $options);

//requete préparé
$pdo_prep = $pdo->prepare("SELECT * from user WHERE username = ? AND password = ?  ");

$pdo_prep->execute([$username, $password]);

$user = $pdo_prep->fetch();

if ($user) {
echo " Bienvenue " .$user['username'] . "!";
}else {
    echo " Nom d'utilisateur ou mot de passe incorrect";

}