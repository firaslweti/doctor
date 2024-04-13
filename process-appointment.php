<?php
include 'server.php';

if (isset($_POST["regapp"])) {
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
    $date = mysqli_real_escape_string($conn, $_POST["date"]);
    $cin = mysqli_real_escape_string($conn, $_POST["cin"]);
    $place = mysqli_real_escape_string($conn, $_POST["place"]);
    $birthdate = mysqli_real_escape_string($conn, $_POST["birthdate"]);
    $situation = mysqli_real_escape_string($conn, $_POST["situation"]);

    $in = "INSERT INTO rendezvous(username, email, phone, date, cin, place, birthdate , situation) 
    VALUES ('$username', '$email', '$phone', '$date', '$cin', '$place', '$birthdate' , '$situation')";

    if (mysqli_query($conn, $in)) {
        echo 'Rendez-vous créé avec succès <3';
    } else {
        echo 'Erreur: ' . mysqli_error($conn);
    }
}
?>
