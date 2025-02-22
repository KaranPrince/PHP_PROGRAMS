<!DOCTYPE html>
<html>
<head>
    <title>Page View Counter</title>
</head>
<body>
    <?php
    session_start(); // Start the session

    if (!isset($_SESSION["views"])) {
        $_SESSION["views"] = 1; // Initialize counter if not set
    } else {
        $_SESSION["views"]++; // Increment counter
    }

    echo "<h3>Page Views: " . $_SESSION["views"] . "</h3>";
    ?>
</body>
</html>
