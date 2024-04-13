<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website Title</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .boxs {
            text-align: center;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .content {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }

        .box {
            flex: 1;
            min-width: 250px;
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: background-color 0.3s ease-in-out;
        }

        .box:hover {
            background-color: #ff6b6b;
        }

        h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 10px;
        }

        p {
            font-size: 16px;
            color: #666;
        } 
    </style>
</head>
<body>
    <?php
    include './includes/navuser.php';
    ?>
    <div class="boxs">
        <div class="all-boxes">
            <div class="content">
                <div class="box">
                    <h1>البيانات</h1>
                    <p>This is the data section content.</p>
                </div>
                
                <div class="box">
    <?php
    include "server.php";
    $query = "SELECT * FROM users";
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_array($result)) {
        $userId = $row['id'];
        echo "<a href='certif.php?id=$userId' style='text-decoration: none; color: black;'>";
        echo "<h1>أستخراج جواز التلقيح</h1>";
        echo "<p>This is the vaccination passport extraction section content.</p>";
        echo "</a>";
    }
    ?>
</div>

               
            </div>
           
            <div class="content">
            <a href="data.php">
                <div class="box">
                    <h1>حجز موعد</h1>
                    <p>This is the appointment booking section content.</p>
                    </a>
                </div>
          
                <div class="box">
                    <h1>أرشادات</h1>
                    <p>This is the guidelines section content.</p>
                </div>
                      <a href="cons.php">        <div class="box">
                    <h1>أرشادات</h1>
                    <p>consulting</p>
                </div></a>  
            </div>
        </div>
    </div>
</body>
</html>
