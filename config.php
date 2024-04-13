<?php
include 'server.php';
if (isset($_POST['register'])) {
    $username  = $_POST["username"];
    $cin = $_POST["cin"];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $state = $_POST['state'];
    $adress = $_POST['adress'];
    $birth =  $_POST['birth'];
    $in = "INSERT INTO users (username, cin, password, email, phone, state, adress, birth) VALUES ('$username', '$cin', '$password', '$email', '$phone', '$state', '$adress', '$birth')";
    if (mysqli_query($conn, $in)) {
        $affected_rows = mysqli_affected_rows($conn);
        if ($affected_rows > 0) {
            $last_inserted_cin = mysqli_insert_id($conn);
            echo '<div style="text-align: center; margin-top: 20px; font-size: 18px; color: green;">';
            echo 'Account created successfully! Cin: ' . $last_inserted_cin;
            echo '<br>';
            echo '<a href="user.php" style="text-decoration: none; color: #007BFF;">Go to your account</a>';
            echo '</div>';
        } else {
            echo '<div style="text-align: center; margin-top: 20px; font-size: 18px; color: red;">';
            echo 'Oops! Something went wrong. No rows were affected.';
            echo '</div>';
        }
    } else {
        echo '<div style="text-align: center; margin-top: 20px; font-size: 18px; color: red;">';
        echo 'Error: ' . mysqli_error($conn);
        echo '</div>';
    }
}


session_start();

if (isset($_POST['login'])) {
    $cin = $_POST['cin'];
    $password = $_POST['password'];
    $sel = "SELECT cin, username FROM users WHERE cin = ? AND password = ?";
    $stmt = mysqli_prepare($conn, $sel);
    mysqli_stmt_bind_param($stmt, "ss", $cin, $password);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    if (mysqli_stmt_num_rows($stmt) > 0) {
        mysqli_stmt_bind_result($stmt, $resultCin, $resultUsername);
        mysqli_stmt_fetch($stmt);
        $_SESSION['cin'] = $resultCin;
        $_SESSION['username'] = $resultUsername;
        header("Location: user.php");
        exit();
    } else {
        echo "Invalid credentials. Please try again.";
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}


?>
