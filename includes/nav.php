<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern and Responsive Style</title>
    <style>
        html{
            scroll-behavior: smooth;
        }
        body {
            
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        nav{
            display: flex;
            justify-content: space-between;
            background-color: tomato;
        }
        ul{
            margin: 30px;

        }
        ul a{
            color: white;
            font-size: 18px;
            margin-left: 15px;
            margin-right: 15px;
            text-decoration: none;
        }
        #login{
            border: solid white;
            background-color: white;
            color: tomato;
            padding: 10px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
   

    <nav >
        
        <div class="logo">
            <img src="images/pngegg.png" style="margin: 10px; margin-left: 50px;" width="40px" alt="">
           
        </div>
        <ul>
                <a href="./index.php">Accueil</a>
                <a href="#about">About</a>
                <a href="#contact">Contact</a>
                <a href="./login.php" id="login">Login</a>
            </ul>
    </nav>
    </div>

</body>
</html>
