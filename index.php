<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.8/lottie.min.js"></script>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 400px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

       

        h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        
        p {
            font-size: 25px;
            margin-top: 10px;
        }

        a {
            color: #3498db;
            text-decoration: none;
        }

        header {
            min-height: 80vh;
            max-width: 1200px;
            margin: auto;
            text-align: center;
            margin-top: 50px;
        } 
        .about{
            max-width: 1200px;
            margin: auto;
        }
        .lottie-container2{
            width: 30%;
            margin-top: 60px;
            margin: 50px;
        }
        .aboutcontent{
            display: flex;
            justify-content: space-around;
            text-align: center;
        }
        .abcontent h3{
            font-size: 100px;
        }
        .abcontent{
            margin: auto;
        }
        form{
            border: solid 1px blue;
            padding: 30px;
            border-radius: 10px;
            background-color: tomato;
        }
        input{
            margin: 10px;
            padding: 10px;
            width: 400px;
            outline: none;
            border-radius: 5px;
        }
        textarea{
            margin: 10px;
        }
        form h1{
            font-size: 50px;
            text-align: center;
        }

        
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var lottieContainer = document.querySelector(".lottie-container");

            if (lottieContainer) {
                var animation = bodymovin.loadAnimation({
                    container: lottieContainer,
                    renderer: 'svg',
                    loop: true,
                    autoplay: true,
                    path: 'json/Animation - 1701267018222.json'
                });
            }
        });

        document.addEventListener("DOMContentLoaded", function () {
            var lottieContainer = document.querySelector(".lottie-container2");

            if (lottieContainer) {
                var animation = bodymovin.loadAnimation({
                    container: lottieContainer,
                    renderer: 'svg',
                    loop: true,
                    autoplay: true,
                    path: 'json/Animation - 1701268351971.json'
                });
            }
        });

        document.addEventListener("DOMContentLoaded", function () {
            var lottieContainer = document.querySelector(".lottie-container3");

            if (lottieContainer) {
                var animation = bodymovin.loadAnimation({
                    container: lottieContainer,
                    renderer: 'svg',
                    loop: true,
                    autoplay: true,
                    path: 'json/contact1.json'
                });
            }
        });
    </script>
</head>

<body>
    <?php include './includes/nav.php'; ?>
    <header style="display: flex; margin: auto; max-width: 1800px;">
        
        <div class="headercon" style=" margin: auto;width:  1200px; padding-left: 90px; text-align: left; float: left;">
        <h1 style="color:#3498db; font-size: 100px;">
            Doctor<span style="color: tomato;">.</span>
        </h1>
            <h2 style="font-size: 25px;">Doctors will have more lives to answer for in the next world than even we generals.</h2>
            <div class="buttons"><a href="login.php" style="padding: 15px; min-width: 400px; text-decoration: none; background-color: #3498db; border: none; color: #fff;">join</a></div>
        </div> 
        <div  class="lottie-container" style="font-size: 100px; margin-top: 40px; margin-left: 80px; text-align: right;"></div>
    </header>
    <hr style="color: grey; max-width: 1200px; margin: auto;">
    <div class="about" id="about">
        <div class="aboutcontent">
       <div class="lottie-container2"></div>
        <div class="abcontent">
            <H3>About<span style="color: tomato;">.</span></H3>
            <p style="text-align: left; width: 600px;">Welcome to [Doctor's Name] Healthcare, where expertise meets compassion. Dr. [Last Name] offers personalized care for [specializations]</p>
        </div>
        </div>
    </div>
    <div class="imgatt" style="background-image: url(./images/back.jpg);
    background-attachment: fixed ;
    background-size: cover;
    min-height: 70vh;
    ">
    </div>

    <div class="contact"  id="contact" style="min-height: 80vh; display: flex; max-width: 1200px; margin: auto;">
    <div class="lottie-container3" style="width: 600px; margin: 29px;"></div>
    <div class="contactform" style="margin: auto;">
        <form action="" method="post">
            <h1>contact us <span style="color: red;">.</span></h1>
            <input type="text" name="username" id="username" placeholder="username"><br>
            <input type="email" name="email" placeholder="email" id="email"><br>
            <textarea name="textarea" id="" cols="30" rows="10" placeholder="whats your quation ? "></textarea><br>
            <input type="submit" value="submit" name="sumbit"><br>
        </form>
    </div>
    </div>
  
    <div class="map" style="max-width: 100%;text-align: center; margin-top: 70px;">
        <h1 style="font-size: 50px; margin: 20px;">Our Place <span style="color: red;">.</span></h1>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d199.70254235908047!2d10.085693469842251!3d36.78877946206428!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd3372f8281683%3A0xa3ef4e92ba1163f7!2sAina%20%3F!5e0!3m2!1sen!2stn!4v1705777627204!5m2!1sen!2stn"  width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>


   
</body>

</html>
