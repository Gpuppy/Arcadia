<?php

//use \Arcadia\Entity\User;
//include('DB/arcadia.php');
//include('index.php');

/*
if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = stripslashes($username);
    $password = stripslashes($password);

    $username = mysqli_connect($conn, $username);
    $password = mysqli_connect($conn, $password);*/

/*if(!empty($_POST["login"])){
    session_start();
    $username = filter_var($_POST["username"], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST["password"], FILTER_SANITIZE_STRING);
    //require_once (__DIR__ . "./../Entity/User.php");

    $getdata = $pdo->prepare("SELECT username FROM user WHERE username=? and password = ? " );
    $getdata->execute(array($_POST['username'], $_POST['password']));


    $rows = $getdata->rowCount();

    if($rows==true){

    }else{
        $error="username ou mot de passe inconnue";
    }else{
        $error="veuillez saisir votre mot de passe";
    }else{
        $error="veuillez saisir un email valide";
    }else{
        $error="veuillez saisir un username";
    }

    $user = new User();
    $isLoggedIn = $user->processLogin($username, $password);
    if(! $isLoggedIn) {
        $_SESSION["errorMessage"] = "Vos données sont erronées " ;

    }
    header("Location: ./index.php");
    exit();

}*/


// Include necessary files
//include('DB/arcadia.php');
//include('index.php');

/*if (isset($_POST['submit'])) {
    session_start();  // Start session

    // Sanitize input
    $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

    // Check if both username and password are provided
    if (empty($username)) {
        $error = "Veuillez saisir un username";
    } elseif (empty($password)) {
        $error = "Veuillez saisir votre mot de passe";
    } else {
        // Prepare SQL statement to prevent SQL injection
        $stmt = $this->pdo->prepare("SELECT username FROM user WHERE username = ? AND password = ?");
        $stmt->execute([$username, $password]);

        // Check if user exists
        if ($stmt->rowCount() > 0) {
            // Handle successful login
            $_SESSION["username"] = $username; // Store username in session
            header("Location: ./admin.php");
            exit();
        } else {
            $error = "Nom d'utilisateur ou mot de passe incorrect";
        }
    }

    // If there are errors, store error message in session
    if (!empty($error)) {
        $_SESSION["errorMessage"] = $error;
        header("Location: ./login.php");  // Redirect back to login page
        exit();
    }
}*/


session_start();
// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'arcadia';
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
    // If there is an error with the connection, stop the script and display the error.
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}



// Now we check if the data from the login form was submitted, isset() will check if the data exists.
if ( !isset($_POST['username'], $_POST['password']) ) {
    // Could not get the data that should have been sent.
    exit('Please fill both the username and password fields!');
}

// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
if ($stmt = $con->prepare('SELECT password FROM user WHERE username = ?')) {
    // Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    // Store the result so we can check if the account exists in the database.
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id,$username, $password);
        $stmt->fetch();
        // Account exists, now we verify the password.
        // Note: remember to use password_hash in your registration file to store the hashed passwords.
        if (password_verify($_POST['password'], $password)) {
            // Verification success! User has logged-in!
            // Create sessions, so we know the user is logged in, they basically act like cookies but remember the data on the server.
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;
            echo 'Welcome back, ' . htmlspecialchars($_SESSION['name'], ENT_QUOTES) . '!';
        } else {
            // Incorrect password
            echo 'mauvais username ou mot de passe!';
        }
    } else {
        // Incorrect username
        echo 'mauvais username ou mot de passe!';
    }


    $stmt->close();
}


?>



