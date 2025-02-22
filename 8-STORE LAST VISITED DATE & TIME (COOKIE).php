<!DOCTYPE html>
<html>
<head>
    <title>Last Visit Tracker</title>
</head>
<body>
    <?php
    $cookie_name = "last_visit";
    $current_time = date("Y-m-d H:i:s");

    if (isset($_COOKIE[$cookie_name])) {
        echo "<h3>Last Visited: " . $_COOKIE[$cookie_name] . "</h3>";
    } else {
        echo "<h3>Welcome! This is your first visit.</h3>";
    }

    // Update the cookie with the current time (expires in 30 days)
    setcookie($cookie_name, $current_time, time() + (30 * 24 * 60 * 60));
    ?>
</body>
</html>
