<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Sign In</title>
</head>

<body>
    <form method="GET">
        <div class="login">
            <h2>Login</h2>
            <input type="text" name="username" size="30" placeholder="username" />
            <input type="password" name="password" size="30" placeholder="password" />
            <input type="submit" value="Sign in" />
        </div>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $username = $_GET["username"];
        $password = $_GET["password"];
        if ($username === "admin" && $password === "admin") {
            echo "<h2>Welcome " . $username . " to website</h2>";
        } else {
            echo "<h2>Login Error</h2>";
        }
    }
    ?>
</body>

</html>