<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arcadia</title>
</head>

<body>
<header>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</header>
<?php
require "./header.php";
require "vendor/autoload.php";
require "User.php";
//var_dump($_SERVER);
session_start();

/*$user = 'roots';
$pass = '';
$db = new PDO ('mysql:host=localhost;dbname=arcadia',$user, $pass);*/

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/');
$dotenv -> load();

$dbhost = $_ENV['DB_HOST'];
$dbname = $_ENV['DB_NAME'];
$dbuser = $_ENV['DB_USER'];
$dbpassword = $_ENV['DB_PASSWORD'];

try {
    $pdo = new PDO("mysql:$dbhost;dbname:$dbname", $dbuser, $dbpassword);
    echo " Connexion à la base de données";
}
catch (PDOException $e) {
    echo "erreur de connection" .$e->getMessage();
}
?>

<main>
    <h3 class="text-center">Bienvenue au Zoo Arcadia</h3>

    <div class="container text-center">
    <div class="row align-items-start">
    <div class="col">
    <img="">
    </div>

        <div class="col">
            <img="">
        </div>

        <div class="col">
            <img="">
        </div>
        </div>
    </div>


</main>
<footer>
    <?php
    require "./footer.php";
    ?>
</footer>

</body>


</html>