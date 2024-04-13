<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beautiful Navigation and Login</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

       
        .container {
            max-width: 400px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            text-align: right;
        }

        h1 {
            font-size: 25px;
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            cursor: pointer;
        }

        p {
            font-size: 14px;
            color: #555;
            margin-top: 10px;
        }

        a {
            color: #3498db;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <?php
    include "includes/nav.php"
    ?>
    <div class="container">
        <form action="config.php" method="post">
            <h1>الدخول</h1>
            <input type="text" name="cin" id="cin" placeholder="رقم بطاقة التعريف الوطنية">
            <input type="password" name="password" id="password" placeholder="كلمة السر">
            <input type="submit" name="login" value="تسجيل الدخول">
            <p>ليس لديك حساب؟ <a href="register.php">تسجيل</a></p>
        </form>
    </div>
</body>
</html>
