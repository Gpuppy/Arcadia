<?php
require "./templates/header.php";
require "templates/auth/login.html.twig";
//require "./index.php";  // Assuming this file contains your PDO connection setup

if (isset($_POST['submit'])) {
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
        // SQL query to get user details
        $stmt = $pdo->prepare("SELECT * FROM user WHERE username = ?");
        $stmt->execute([$username]);

        // Fetch the user record
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            // Handle successful login
            $_SESSION["username"] = $username;  // Store username in session
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
}
?>




<!--h3 class="text-center">Se Connecter</h3>
<body class="center">
<form action="templates/admin.php" method="POST" class="center" onSubmit="return validate();">
    <label for="username">Username :</label><span id="username_info"
     class="error-info" style="color:red"></span>

    <input type="text" id="username" name="username">

    <label for="password">Mot de passe :</label><span id="password_info"
     class="error-info" style="color:red"></span>

    <input type="password" id="password" name="password"><br><br>

    <input type="submit" value="Login" class="btn btn-primary">
    <div class="form-nav-row">
        <a href="#" class="form-link">Mot de passe oublié?</a>
    </div-->
    <?php
    if (isset($_SESSION["errorMessage"])) {
        ?>
        <div class="error-message"><?php  echo $_SESSION["errorMessage"]; ?></div>
        <?php
        unset($_SESSION["errorMessage"]);
    }
    ?>

</form>
<script>
    function validate() {
        var $valid = true;
        document.getElementById("username_info").innerHTML = "";
        document.getElementById("password_info").innerHTML = "";

        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;
        if(username === "")
        {
            document.getElementById("username_info").innerHTML = "est obligatoire";
            $valid = false;
        }
        if(password === "")
        {
            document.getElementById("password_info").innerHTML = "est obligatoire";
            $valid = false;
        }
        return $valid;
    }
</script>
</body>

<!--h3 class="text-center">Se Connecter</h3>
<body class="center">
<form action="templates/admin.php" method="post" class="center">
   <div class="login mb-3 w-25">
       <label for="email" class="form-label">Username</label>
       <input type="text" name="username" id="email" class="form-control" placeholder="email">

   </div>

   <div class="mb-3 w-25">
       <label for="password" class="form-label">Mot de passe</label>
       <input type="password" name="password" id="password" class="form-control" placeholder="Mot de passe">

   </div>
   <input type="submit" value="Connexion" class="btn btn-primary">
</form>
</body-->













