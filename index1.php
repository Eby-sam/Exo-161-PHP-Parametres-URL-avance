<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index1</title>
</head>
<body>
<a href="index1.php?nom=Nemare&prenom=Jean">Index1</a>
</body>
</html>
<?php

$prenom = strip_tags($_GET['prenom']);
$nom = strip_tags($_GET['nom']);
if (isset($_GET['nom']) && isset($_GET['prenom'])) {
    echo "hello $nom $prenom ";
}
else {
    echo "Il y a un problème !";
}
?>
