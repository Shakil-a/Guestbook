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

    // Prepare the SQL statement
    $sql = "SELECT name FROM entries";
    $stmt = $pdo->prepare($sql);

    // Execute the statement
    $stmt->execute();


} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Close the connection
$pdo = null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Welcome </h2>
    <?php
    foreach($stmt as $row) {
        echo $row['name'] . '<br>';
    }
    ?>
    
</body>
</html>