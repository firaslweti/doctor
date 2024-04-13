<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vaccination Passport</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
        }

        .main {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .passport {
            border: 2px solid #333;
            width: 600px; /* Adjusted width to resemble a standard paper page */
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            margin: auto;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo img {
            width: 50px;
            height: 50px;
        }

        table {
            width: 100%;
            text-align: right;
        }

        th, td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #333;
            color: white;
            border: none;
            border-radius: 5px;
        }

        .qr-code {
            text-align: center;
            margin-top: 20px;
        }

        .qr-code img {
            max-width: 100%;
            height: auto;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .print-button {
            text-align: center;
            margin-top: 20px;
        }

        button {
            padding: 10px 20px;
            background-color: #333;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <?php
    include "includes/navuser.php";
    ?>
    <div class="a" style="margin: 20px;" >
<?php
include "server.php";

// Check if the 'id' parameter is present in the URL
if(isset($_GET['id'])) {
    $userId = $_GET['id'];

    // Fetch other rows associated with the user ID
    $query = "SELECT * FROM users WHERE id = $userId";
    $result = mysqli_query($conn, $query);

    // Display user details
    while ($row = mysqli_fetch_array($result)) {
        echo ' <div class="main">
        <div class="passport">
            <div class="header">
                <div class="logo">
                    <img src="./images/pngegg.png" alt="">
                </div>
                <h2>Vaccination Passport</h2>
            </div>
            <div class="informations">
                <table>
                    <tr><th colspan="2">معلومات اللقاح</th></tr>
                    <tr><td>' . $row['username'] . '</td><td><label for="">: الاسم</label></td></tr>
                    
                    <tr><td>'. $row['cin'] .'</td><td><label for="">: رقم بطاقة التعريف الوطنية</label></td></tr>
                    <tr><td>'. $row['state'] .'</td><td><label for="">: الولاية</label></td></tr>
                    <tr><td>'. $row['adress'] .'</td><td><label for="">:العنوان/label></td></tr>
                    <tr><td>'. $row['birth'] .'</td><td><label for="">: تاريخ الميلاد</label></td></tr>
                    <tr><td>2023-01-15</td><td><label for="">: تاريخ اللقاح</label></td></tr>
                    <tr><td>التوقيع:</td><td><label for="">__________________</label></td></tr>
                </table>
            </div>
            <div class="qr-code">
                <!-- Placeholder for QR Code (replace with actual QR Code image or generator) -->
                <img src="images/OIP.jfif" alt="QR Code">
            </div>
            <div class="print-button">
                <button onclick="printPage()">Print</button>
            </div>
        </div>
    </div>';


       
    }
} else {
    echo "User ID not provided.";
}
?>
</div>
   

    <script>
        function printPage() {
            window.print();
        }
    </script>
</body>
</html>
