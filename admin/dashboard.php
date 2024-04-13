<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/9815dffb49.js" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        body {
            padding: 0;
            margin: 0;
            font-family: 'Arial', sans-serif;
        }

        nav {
            background-color: red;
            padding: 5px;
            text-align: center;
        }

        nav img {
            width: 40px;
        }
        a{
            text-decoration : none;
            color : black ;
        }
        .boxes {
            display: grid;
            place-items: center;
        }

        .all {
            display: flex;
            justify-content: center;
            text-align: center;
            margin: 10px;
            max-width: 1800px;
            margin: auto;
        }

        .box {
            margin: 20px;
            padding: 40px;
            border-radius: 10px;
            width: 40vh; 
        }

        .cherch {
            margin: 20px;
            text-align: center;
        }

        input[type="search"] {
            padding: 10px;
            width: 60%;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-right: 10px;
        }

        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            max-width: 1000px;
            margin: auto;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        @media screen and (max-width: 600px) {
            input[type="search"] {
                width: 100%;
                margin-right: 0;
                margin-bottom: 10px;
            }
        }
    </style>
</head>
<body>
    <nav>
        <img src="images/pngegg.png" alt="Logo">
    </nav>
    <div class="boxes">
        <div class="all">
             <a style="text-decoration: none; color: black;" href="allusers.php"><div class="box" style="background-color: gainsboro;">
                <i class="fa-solid fa-user" style="font-size: 80px;"></i>
                <?php
                    include "../server.php";
                    $res = "SELECT * FROM rendezvous";
                    $ql = mysqli_query($conn, $res);
                    if ($num = mysqli_num_rows($ql)) {
                        echo "<h2>$num</h2>";
                    }
                    ?>
                <h1>total enregistré</h1>
            </div></a>
           <a href="complete.php"> <div class="box" style="background-color: green;">
                <i class="fa-solid fa-person-circle-check" style="font-size: 80px;"></i>
                <?php
                    include "../server.php";
                    $res = "SELECT * FROM rendezvous WHERE situation Like 'complete'";
                    $ql = mysqli_query($conn, $res);
                    if ($num = mysqli_num_rows($ql)) {
                        echo "<h2>$num</h2>";
                    }
                    ?>
                <h1>complet</h1>
            </div>
            </a>
            <a href="waitlist.php"><div class="box" style="background-color: tomato;">
                <i class="fa-solid fa-user-xmark" style="font-size: 80px;"></i>
                <?php
                    include "../server.php";
                    $res = "SELECT * FROM rendezvous WHERE situation LIKE 'incomplete'";
                    $ql = mysqli_query($conn, $res);
                    if ($num = mysqli_num_rows($ql)) {
                        echo "<h2>$num</h2>";
                    }
                    ?>
                <h1>en attente</h1>
            </div>
            </a> 
        </div>
    </div>
    <hr style="max-width: 1800px; margin: auto;">
    <div class="cherch">
        <input type="search" id="searchInput" placeholder="Search..." />
        <button type="button" onclick="searchTable()">Search</button>
    </div>
    <table id="dataTable">
        <?php
        include "../server.php";

        $sel = "SELECT * FROM users";
        $res = mysqli_query($conn , $sel);
       
        while ($row = mysqli_fetch_array($res)){
            echo "
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>phone</th>
                <th>cin</th>
                <th>place</th>
                <th>birthdate</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{$row['id']}</td>
                <td>{$row['username']}</td>
                <td>{$row['email']}</td>
                <td>{$row['phone']}</td>
                <td>{$row['cin']}</td>
                <td>{$row['state']}</td>
                <td>{$row['birth']}</td>
            </tr>
           
        </tbody>
    </table>
            ";
        }
        ?>
    <script>
        function searchTable() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("dataTable");
            tr = table.getElementsByTagName("tr");

            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1]; // Change index based on the column you want to search
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
</body>
</html>
