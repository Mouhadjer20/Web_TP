<?php
session_start();

if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Profil - TP02</title>
</head>
<body>

    <h1>Profil utilisateur</h1>

    <p>
        Bienvenue,
        <strong><?= htmlspecialchars($_SESSION["user"]) ?></strong> !
    </p>

    <p>Vous êtes connecté.</p>

    <a href="logout.php">Se déconnecter</a>

</body>
</html>
