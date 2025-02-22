<!DOCTYPE html>
<html>
<head>
    <title>File Downloader</title>
</head>
<body>
    <form method="post">
        Enter File URL: <input type="url" name="file_url" required>
        <input type="submit" value="Download">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $URL = $_POST["file_url"];
        $file = basename($URL);
        $success = file_put_contents($file, file_get_contents($URL));

        echo $success ? "File downloaded successfully!" : "File download failed.";
    }
    ?>
</body>
</html>
