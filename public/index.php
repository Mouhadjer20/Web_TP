<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        <?php 
            // Fallback to a default title if $pageTitle isn't specified
            echo isset($pageTitle) ? $pageTitle : "My Default Website Title"; 
            // Test database connection
            $host = 'db'; // Uses the service name from docker-compose
            $user = 'dev_user';
            $pass = 'dev_password';
            $dbname = 'my_local_db';

            try {
                $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "<p style='color: green;'>✔ Successfully connected to the MySQL Database!</p>";
            } catch(PDOException $e) {
                echo "<p style='color: red;'>❌ Connection failed: " . $e->getMessage() . "</p>";
            }
        ?>
    </title>
</head>
<body>

    <?php
        echo "<h1>Hello from your Docker-powered WAMP environment!</h1>"
        
        ?>
        <a href="headers.php">headers</a>
        <a href="get.php">get</a>
        <a href="post.php">post</a>

        <form action="get.php" method="get">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name">
            <label for="city">City:</label>
            <input type="text" id="city" name="city">
            <input type="submit" value="Submit">
        </form>
        <form action="post.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name">
            <label for="message">message:</label>
            <input type="text" id="message" name="message">
            <input type="submit" value="Submit">
        </form>
        <?php include('footer.php'); ?>
</body>
