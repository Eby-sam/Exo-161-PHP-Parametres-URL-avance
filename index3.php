<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index3</title>
</head>
<body>
<a href="index3.php?dateDebut=2/05/2016&dateFin=27/11/2016">Index3</a>
</body>
</html>
<?php

if (isset($_GET['dateDebut']) && isset($_GET['dateFin'])) {
    echo "Tous les paramètres sont là !";
}
else {
    echo "Il y a un problème !";
}
?>