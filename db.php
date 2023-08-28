<?php
// Replace with your actual database credentials
$mysql_host = 'localhost';
$mysql_database = 'guestbook_entries';
$mysql_username = 'root';
$mysql_password = '';

try {
    // Establish a connection to the MySQL database using PDO
    $pdo = new PDO("mysql:host=$mysql_host;dbname=$mysql_database;charset=utf8", $mysql_username, $mysql_password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    // Prepare the SQL statement with placeholders
    $sql = "INSERT INTO entries (name, email, comment) VALUES (:name, :email, :comment)";
    $stmt = $pdo->prepare($sql);

    // Bind parameters using named placeholders
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':comment', $comment, PDO::PARAM_STR);

    // Execute the statement
    $stmt->execute();

    echo "Data inserted successfully.";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Close the connection
$pdo = null;
?>