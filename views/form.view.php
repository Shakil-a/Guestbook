<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guestbook</title>
</head>
<body>
    <?php
    // Initialize an array to store validation errors
    $errors = array();

    require('validateFields.php')

   ?>


    <!-- Form to gather user input -->
    <form method="post" action="">
        Name: <input type="text" name="name" required><br>
        Email: <input type="text" name="email" required><br>
        Comment: <textarea name="comment" rows="5" cols="40" required></textarea>
        <input type="submit">
    </form>
    <a href="index.php">Go Back to homepage</a>
   <?php require('validationErrors.php')  ?>

</body>
</html>