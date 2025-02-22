<!DOCTYPE html>
<html>
<head>
    <title>Max Value Finder</title>
</head>
<body>
    <form method="post">
        <input type="text" name="numbers" placeholder="Enter numbers comma-separated">
        <input type="submit" value="Find Max Value">
    </form>

    <?php 
    function findMax($arr) {
        return max($arr);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = isset($_POST['numbers']) ? $_POST['numbers'] : '';
        $numbers = array_map('intval', explode(',', $input));
        echo "Max Value: " . findMax($numbers);
    }
    ?> 
</body>
</html>