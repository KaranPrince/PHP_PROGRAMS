<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
    <form method="post">
        <input type="number" name="num1" required placeholder="Enter first number">
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="num2" required placeholder="Enter second number">
        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operator = $_POST["operator"];
        $result = 0;

        switch ($operator) {
            case "+": $result = $num1 + $num2; break;
            case "-": $result = $num1 - $num2; break;
            case "*": $result = $num1 * $num2; break;
            case "/": $result = ($num2 != 0) ? $num1 / $num2 : "Cannot divide by zero"; break;
        }

        echo "<h3>Result: $result</h3>";
    }
    ?>
</body>
</html>
