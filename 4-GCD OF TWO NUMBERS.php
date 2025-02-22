<!DOCTYPE html>
<html>
<head>
    <title>GCD Finder</title>
</head>
<body>
    <form method="post">
        Enter First Number: <input type="number" name="num1" required><br>
        Enter Second Number: <input type="number" name="num2" required><br>
        <input type="submit" value="Find GCD">
    </form>

    <?php
    function findGCD($a, $b) {
        while ($b != 0) {
            $temp = $b;
            $b = $a % $b;
            $a = $temp;
        }
        return $a;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $gcd = findGCD($num1, $num2);
        echo "<h3>GCD of $num1 and $num2 is: $gcd</h3>";
    }
    ?>
</body>
</html>
