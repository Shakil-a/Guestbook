<?php
    // Display validation errors, if any
    if (!empty($errors)) {
        echo "<div style='color: red;'>Error(s):<ul>";
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul></div>";
    }
    ?>