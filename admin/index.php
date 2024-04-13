<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $expectedAdmin = "admin";
    $expectedPassword = "password";
    $enteredAdmin = $_POST["admin"];
    $enteredPassword = $_POST["password"];
    if ($enteredAdmin == $expectedAdmin && $enteredPassword == $expectedPassword) {
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Invalid admin name or password. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assest/index.css">
    <title>admin</title>
</head>
<body>
    <div class="all-box">
        <div class="box">
            <form action="index.php" method="post">
                <h1>admin</h1>
                <input type="text" placeholder="admin name" required name="admin"><br>
                <input type="password" placeholder="password" name="password"><br>
                <input type="submit" value="login_admin" name="login_admin">
            </form>
        </div>
    </div>
    
</body>
</html>
