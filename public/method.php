<?php
// send 405 and Allow: GET for request of POST

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo "GET";
    exit;
}   

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    http_response_code(405);
    header('Allow: GET');
    exit;
}   

?>
<?php include('footer.php'); ?>