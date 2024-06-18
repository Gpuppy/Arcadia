<?php

require "./header.php";?>

    <h3 class="text-center">Se Connecter</h3>

<form action="" method="post">
    <div class="mb-3">
        <label for="email" class="form-label">email</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="email">
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Mot de passe</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Mot de passe">
    </div>
    <input type="submit" value="Connexion" class="btn btn-primary">
</form>
<?php
require "./footer.php";