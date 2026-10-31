<?php
// Get method using http protocol


if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $name = isset($_GET['name']) ? $_GET['name'] : 'Guest';
    $city = isset($_GET['city']) ? $_GET['city'] : 'Unknown';
    echo "Hello, $name from $city! and server is ' ".$_SERVER['QUERY_STRING']. " '";
}

?>
<?php include('footer.php'); ?>