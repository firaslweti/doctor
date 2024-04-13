<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
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
        .bar {
            margin: 20px 0;
            text-align: center;
        }

        #search-bar {
            padding: 10px;
            width: 80%;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .mar {
            margin: 40px;
        }
        td.status {
            text-align: center;
        }

        .complete {
            color: green;
        }

        .incomplete {
            color: red;
        }

        @media only screen and (max-width: 600px) {
            #search-bar {
                width: 100%;
            }

            table {
                overflow-x: auto;
            }
        }
    </style>
</head>

<body>
    <nav>
        <img src="images/pngegg.png" alt="Logo">
    </nav>

    <div class="bar">
        <input type="search" id="search-bar" placeholder="Search...">
    </div>

    <div class="mar">
        <table>
            <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Date</th>
                    <th>CIN</th>
                    <th>Place</th>
                    <th>Birthdate</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
            <?php
include "../server.php";

$aina = "SELECT * FROM rendezvous where situation LIKE 'complete'";
$result = mysqli_query($conn, $aina);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $statusClass = ($row['situation'] == 'complete') ? 'complete' : 'incomplete';

        echo "
            <tr>
                <td>{$row['username']}</td>
                <td>{$row['email']}</td>
                <td>{$row['phone']}</td>
                <td>{$row['date']}</td>
                <td>{$row['cin']}</td>
                <td>{$row['place']}</td>
                <td>{$row['birthdate']}</td>
                <td class='status $statusClass'>{$row['situation']}</td>
            </tr>
        ";
    }
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

            </tbody>
        </table>
    </div>

</body>
</html>
