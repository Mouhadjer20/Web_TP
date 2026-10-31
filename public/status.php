<?php
// Get method using http protocol accept argument status code accept just 200, 400, 404, 405 else not found
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $code = isset($_GET['code']) ? $_GET['code'] : '200';
    if ($code == '200') {
        http_response_code(200);
    } elseif ($code == '400') {
        http_response_code(400);
    } elseif ($code == '404') {
        http_response_code(404);
    } elseif ($code == '405') {
        http_response_code(405);
    } else {
        http_response_code(404);
    }
    echo "Status code: " . $code;
    
}

?>
<?php include('footer.php'); ?>