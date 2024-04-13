<?php
include "../server.php";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    $updateQuery = "UPDATE rendezvous SET situation = 'complete' WHERE id = $id";
    
    if (mysqli_query($conn, $updateQuery)) {
        echo "Situation updated successfully.";
    } else {
        echo "Error updating situation: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request.";
}
mysqli_close($conn);
?>
