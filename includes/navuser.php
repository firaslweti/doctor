<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      
        }

        nav {
            display: flex;
            justify-content: center; /* Center items horizontally */
            align-items: center;
            background-color: #c0392b; /* Slightly darker red for the navigation bar */
            padding: 10px;
            color: white;
            position: relative;
        }

        .logo img {
            width: 40px;
            margin-right: 20px;
        }

        .user-info {
            text-align: right;
        }

        .user-info h3 {
            margin: 5px 0;
            font-size: 16px;
        }

        .user-info p {
            margin: 5px 0;
            font-size: 14px;
            color: #ecf0f1;
        }
    </style>
</head>
<body>
    <?php
    session_start();
    $username = isset($_SESSION['username']) ? $_SESSION['username'] : '';
    $cin = isset($_SESSION['cin']) ? $_SESSION['cin'] : '';
    ?>
    <nav>
        <div class="logo">
            <img src="./images/pngegg.png" alt="">
        </div>
        <div class="user-info">
            <h3>مرحبًا <?php echo $username; ?></h3>
            <p>رقم الهوية: <?php echo $cin; ?></p>
        </div>
    </nav>
</body>
</html>
