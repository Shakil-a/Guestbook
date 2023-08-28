<?php 

// Sanitize user input to prevent cross-site scripting (XSS)
    function sanitizeInput($input) {
        return htmlspecialchars(trim($input));
    }


    // Check if the form has been submitted
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Sanitize and validate inputs
        $name = sanitizeInput($_POST['name']);
        $email = sanitizeInput($_POST['email']);
        $comment = sanitizeInput($_POST['comment']);

        // Validate inputs
        if (empty($name)) {
            $errors[] = "Name is required.";
        }

        if (empty($email)) {
            $errors[] = "Email is required.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Invalid email format.";
        }

        if (empty($comment)) {
            $errors[] = "Comment is required.";
        }

           //database connection and query
        require('db.php');
    }

    // If form submitted and no validation errors
    if ($_SERVER["REQUEST_METHOD"] === "POST" && empty($errors)) {
        // Process the data (e.g., save to database, send emails, etc.)
        echo "Your form has been submitted";
    

        
        // Redirect user to welcome.php
        header("Location: welcome.php");
        exit();
    }
    ?>