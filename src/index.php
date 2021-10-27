<html>

<head>
    <title>Vulnerable PHP</title>
</head>

<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input name="user" type="submit" />
        <label for="user">Name</label>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user = $_POST['user'];
    }
    echo "<h1>Hello, PHP!</h1>\n";
    ?>
</body>

</html>