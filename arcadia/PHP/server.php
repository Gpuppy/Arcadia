<?php

header('Access-Control-Allow-Origin: https://localhost:3000');
$user = $_POST('name');
echo("hello from server: $user");



