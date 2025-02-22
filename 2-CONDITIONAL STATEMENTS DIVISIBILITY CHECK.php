<!DOCTYPE html>
<html>
<head>
    <title>Divisibility Check</title>
</head>
<body>
    <form method="post">
        Enter Number (N): <input type="number" name="N" required><br>
        Enter Divisor (M): <input type="number" name="M" required><br>
        <input type="submit" value="Check">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $N = $_POST["N"];
        $M = $_POST["M"];

        if ($M == 0) {
            echo "<h3>Division by zero is not allowed!</h3>";
        } elseif ($N % $M == 0) {
            echo "<h3>$N is divisible by $M</h3>";
        } else {
            echo "<h3>$N is not divisible by $M</h3>";
        }
    }
    ?>
</body>
</html>
