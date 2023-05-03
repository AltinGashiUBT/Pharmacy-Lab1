<?php
include "config.php";

if(isset($_GET['med_id'])) {
    $med_id = $_GET['med_id'];
    $sql = "DELETE FROM meds WHERE med_id='$med_id'";
    if ($conn->query($sql) === TRUE) {
        header('Location: inventory-view.php');
        exit;
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    echo "ERROR: No med_id parameter found in request.";
}

$conn->close();
?>
