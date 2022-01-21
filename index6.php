<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index6</title>
</head>
<body>
<a href="index6.php?batiment=12&salle=101">Index5</a>
</body>
</html>
<?php

if (isset($_GET['batiment']) && isset($_GET['salle'])) {
    echo "Le paramètres est là !";
}
else {
    echo "Il y a un problème !";
}
?>
