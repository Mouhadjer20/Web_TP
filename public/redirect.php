<?php
// Redirect send Location: index.php with status 302.
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    header('Location: index.php');
    exit;
}   

?>