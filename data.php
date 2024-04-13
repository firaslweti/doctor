<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Booking</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
          
        }

        .all {
         text-align: center;
         
            border: 1px solid #ddd;
           
          
            padding: 20px;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            width: 100%;
            box-sizing: border-box;
        }

        h1 {
            color: #3498db;
            text-align: center;
            margin-bottom: 20px;
        }

        .container {
            margin-top: 20px;
        }

        form {
            text-align: right;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 16px;
            color: #333;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 14px;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease-in-out;
        }

        button:hover {
            background-color: #267bb8;
        }

        .additional-inputs {
            display: flex;
            gap: 10px;
            margin-top: 10px;
        }

        .additional-inputs input {
            flex: 1;
            margin-right: 5px;
        }
    </style>
</head>

<body>
    <?php
    include './includes/navuser.php';
    ?>
    <div class="container" style="
        display: grid;
          place-items: center;
          align-items: center;
    ">
    <div class="all">
        <h1>حجز موعد</h1>
        <div class="container">
            <form action="process-appointment.php" method="post">
                <label for="name">الاسم:</label>
                <input type="text" id="name" name="username" required>

                <label for="email">البريد الإلكتروني:</label>
                <input type="email" id="email" name="email" required>

                <label for="phone">رقم الهاتف:</label>
                <input type="tel" id="phone" name="phone" required>

                <label for="date">تاريخ الحجز المفضل:</label>
                <input type="date" id="date" name="date" required>

                <label for="cin">رقم بطاقة التعريف الوطنية (CIN):</label>
                <input type="text" id="cin" name="cin" required>

                <label for="place">المكان:</label>
                <input type="text" id="place" name="place" required>

                <label for="birthdate">تاريخ الميلاد:</label>
                <input type="date" id="birthdate" name="birthdate" required>

                <div class="additional-inputs">
                    <input type="text" placeholder="Additional Input 1">
                    <input type="text" placeholder="Additional Input 2">
                </div>
                <input type="text" name="situation" value="incomplete" hidden>

                <button type="submit" name="regapp">حجز الموعد</button>
            </form>
        </div>
    </div>
    </div>
</body>

</html>
