<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register Page</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .all-form {
            max-width: 1000px;
            margin: auto;
            padding: 20px;
         
        }
        .box {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            color: #333;
        }
        input, select {
            width: 100%;
            padding: 15px;
            margin: 15px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 8px;
        }
        input[type="submit"] {
            background-color: #ff5555; /* Red color */
            color: white;
            cursor: pointer;
            border: none;
            border-radius: 8px;
            padding: 15px;
        }
        input[type="submit"]:hover {
            background-color: #cc0000; /* Darker red on hover */
        }
    </style>
</head>
<body>
    <?php 
        include './includes/nav.php';
    ?>
    <div class="all-form">
        <div class="box">
            <form action="config.php" method="post">
                <h1>التسجيل</h1>
                <input type="text" name="username" id="full_name" placeholder="الاسم الكامل">
                <input type="text" name="cin" id="cin" placeholder="رقم بطاقة التعريف الوطنية">
                <input type="password" name="password" id="password" placeholder="كلمة السر">
                <input type="email" name="email" id="email" placeholder="البريد الإلكتروني">
                <input type="tel" name="phone" id="phone" placeholder="رقم الهاتف">
                <input type="file" name="profile_img" id="profile_img" accept="image/*" placeholder="صورة الملف الشخصي">
                <select name="state" id="state">
                    <option value="" disabled selected>اختر الولاية</option>
                    <option value="Tunis">تونس</option>
                    <option value="Ariana">أريانة</option>
                    <option value="Ben Arous">بن عروس</option>
                    <option value="Manouba">منوبة</option>
                    <option value="Nabeul">نابل</option>
                    <option value="Zaghouan">زغوان</option>
                    <option value="Bizerte">بنزرت</option>
                    <option value="Béja">باجة</option>
                    <option value="Jendouba">جندوبة</option>
                    <option value="Kef">الكاف</option>
                    <option value="Siliana">سليانة</option>
                    <option value="Sousse">سوسة</option>
                    <option value="Monastir">المنستير</option>
                    <option value="Mahdia">المهدية</option>
                    <option value="Sfax">صفاقس</option>
                    <option value="Kairouan">القيروان</option>
                    <option value="Kasserine">القصرين</option>
                    <option value="Sidi Bouzid">سيدي بوزيد</option>
                    <option value="Gabès">قابس</option>
                    <option value="Medenine">مدنين</option>
                    <option value="Tataouine">تطاوين</option>
                    <option value="Gafsa">قفصة</option>
                    <option value="Tozeur">توزر</option>
                    <option value="Kebili">قبلي</option>
                </select>
                <input type="text" name="adress" id="address" placeholder="العنوان">
                <input type="date" name="birth" id="dob" placeholder="تاريخ الميلاد">
                <input type="submit" name="register" value="تسجيل">
            </form>
        </div>
    </div>
</body>
</html>
