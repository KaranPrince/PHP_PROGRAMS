<!DOCTYPE html>
<html>
<head>
    <title>Factorial Calculator</title>
</head>
<body>
    <form method="post">
        <input type="number" name="num" required>
        <input type="submit" value="Calculate">
    </form>
    
    <?php 
    function factorial($n) {
        return ($n <= 1) ? 1 : $n * factorial($n - 1);
    }
    
    $num = $_POST["num"] ?? null;
    if ($num !== null) {
        echo "Factorial of $num is: " . factorial($num);
    }
    ?> 
</body>
</html>
