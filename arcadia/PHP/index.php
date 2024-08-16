<?php
$pdo = new PDO("mysql:dbname=arcadia;host=localhost;charset=utf8", "root","root");
$stmt = $pdo->query("SELECT * FROM animal");
$animals = $stmt->fetchAll(PDO::FETCH_ASSOC);
$stmt->closeCursor();
print_r($animals);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" href="%PUBLIC_URL%/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <meta
        name="description"
        content="Web site created using create-react-app"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="apple-touch-icon" href="%PUBLIC_URL%/logo192.png" />
    <link rel="manifest" href="%PUBLIC_URL%/manifest.json" />
    <title></title>
</head>
<body>
<?= $infos; ?>
<script src="src/components/Animals.js"></script>
</body>
</html>

