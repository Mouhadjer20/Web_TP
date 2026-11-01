<?php
// Configuration du cookie de session AVANT session_start()
ini_set("session.use_strict_mode", "1");

session_set_cookie_params([
    "lifetime" => 0,
    "path" => "/",
    "secure" => false, // HTTP uniquement pour notre TP local
    "httponly" => true,
    "samesite" => "Lax"
]);

session_start();

$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = $_POST["username"] ?? "";
    $password = $_POST["password"] ?? "";

    if ($username === "etudiant" && $password === "tp2026") {

        // Renouveler l'identifiant de session après connexion
        session_regenerate_id(true);

        $_SESSION["user"] = $username;

        header("Location: profile.php");
        exit;

    } else {
        $error = "Identifiant ou mot de passe incorrect.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion - TP02</title>
</head>
<body>

    <h1>Connexion</h1>

    <?php if ($error !== ""): ?>
        <p style="color:red;">
            <?= htmlspecialchars($error) ?>
        </p>
    <?php endif; ?>

    <form method="POST">
        <label>Identifiant :</label>
        <input type="text" name="username" required>

        <br><br>

        <label>Mot de passe :</label>
        <input type="password" name="password" required>

        <br><br>

        <button type="submit">Se connecter</button>
    </form>

</body>
</html>
