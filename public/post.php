<?php
// Post method using http protocol

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['name']) ? $_POST['name'] : 'Guest';
    $message = isset($_POST['message']) ? $_POST['message'] : 'Unknown';
    echo "Hello, $name from $message! ";
}
?>
<?php include('footer.php'); ?>