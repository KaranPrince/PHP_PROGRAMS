<!DOCTYPE html>
<html>
<head>
    <title>Age Calculator</title>
</head>
<body>
    <form method="post">
        Enter DOB: <input type="date" name="dob" required>
        <input type="submit" value="Calculate Age">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $dob = new DateTime($_POST["dob"]);
        $today = new DateTime('today');
        $diff = $dob->diff($today);
        echo "<h3>Age is {$diff->y} years, {$diff->m} months, and {$diff->d} days</h3>";
    }
    ?>
</body>
</html>
