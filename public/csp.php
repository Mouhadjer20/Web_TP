<?php
// Pour le premier test, aucune politique CSP n'est activée.
header(
    // "Content-Security-Policy-Report-Only: " .
    "Content-Security-Policy: " .
    "default-src 'self'; " .
    "script-src 'self'; " .
    "style-src 'self'; " .
    "img-src 'self'"
);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP02 - Test CSP</title>
</head>
<body>

    <h1>TP02 - Content Security Policy</h1>

    <h2>1. JavaScript intégré (Inline)</h2>

    <script>
        alert("Le JavaScript inline fonctionne !");
    </script>

    <h2>2. JavaScript externe (Local)</h2>

    <h2>3. Image externe</h2>

    <img
        src="https://placehold.co/240x140/png"
        alt="Image externe"
    >

    <h2>4. Résultat du script externe</h2>

    <p id="external-result">Le script externe n'a pas encore été exécuté.</p>

    <script src="csp.js"></script>


</body>
</html>
