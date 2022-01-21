<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index4</title>
</head>
<body>
<a href="index4.php?langage=PHP&serveur=LAMP">Index4</a>
</body>
</html>
<?php

if (isset($_GET['langage']) && isset($_GET['serveur'])) {
    echo "Tous les paramètres sont là !";
}
else {
    echo "Il y a un problème !";
}
?>
