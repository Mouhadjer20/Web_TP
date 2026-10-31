<?php
// Display Host, User-Agent, Accept, Content-Type and Referer exist in '$_SERVER'\
// Also add response headers 'Content-Type: text/html; charset=UTF-8 and X-Lab-HTTP:initiation
header('Content-Type: text/html; charset=UTF-8');
header('X-Lab-HTTP:initiation');


foreach (['HTTP_HOST', 'HTTP_USER_AGENT', 'HTTP_ACCEPT', 'HTTP_CONTENT_TYPE', 'HTTP_REFERER'] as $header) {
    if (isset($_SERVER[$header])) {
        echo $header.': '.$_SERVER[$header]."<br>";
    }
}

?>
<?php include('footer.php'); ?>