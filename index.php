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

use Class\Animal\Animal;

//require '../vendor/composer/autoload.php';

session_start();

define("BASE_URL", '/arcadia');

require_once 'Router.php';
require_once 'Controller/HomeController.php';
require "./header.php";
require "./footer.php";
require __DIR__ . "/vendor/autoload.php";
//require "User.php";
require "Animal.php";
require_once "Controller/HomeController.php";
require_once "Controller/UserController.php";
require_once "Controller/LogoutController.php";


$router = new Router();

$router->addRoute('GET', BASE_URL. '/', 'HomeController', 'index');
$router->addRoute('GET', BASE_URL. '/', 'AccomodationController', 'accomodation');
$router->addRoute('GET', BASE_URL. '/', 'LoginController', 'login');
$router->addRoute('GET', BASE_URL. '/', 'LogoutController', 'logout');
$router->addRoute('GET', BASE_URL. '/', 'ServiceController', 'service');
$router->addRoute('GET', BASE_URL. '/', 'ContactController', 'contact');

$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];
$handler = $router->gethandler($method, $uri);

if($handler == null){

    header('HTTP/1.1 404 not found');
    exit();

}
$controller = new $handler['controller']();
$action = $handler['action'];
$controller->$action();

//$animal1 = new Animal();
//$animal1->setName("Joe");

//var_dump($animal1);




/*$user = 'roots';
$pass = '';
$db = new PDO ('mysql:host=localhost;dbname=arcadia',$user, $pass);*/

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/');
$dotenv -> load();

$dbhost = $_ENV['DB_HOST'];
$dbname = $_ENV['DB_NAME'];
$dbuser = $_ENV['DB_USER'];
$dbpassword = $_ENV['DB_PASSWORD'];


//Get Heroku JawsDB connection information
$jawsdb_url = parse_url(getenv("JAWSDB_DATABASE_URL"));
$jawsdb_server = $jawsdb_url["host"];
$jawsdb_username = $jawsdb_url["user"];
$jawsdb_password = $jawsdb_url["pass"];
$jawsdb_db = substr($jawsdb_url["path"], 1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($jawsdb_server, $jawsdb_username, $jawsdb_password, $jawsdb_db);


/*try {
    $pdo = new PDO("mysql:$dbhost;dbname:$dbname", $dbuser, $dbpassword);
    echo " Connexion à la base de données";
}
catch (PDOException $e) {
    echo "erreur de connection" .$e->getMessage();
}*/

/*try {

}
catch(){

}*/

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