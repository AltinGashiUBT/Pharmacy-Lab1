<?php
    include "config.php";
    $emp_id = $_GET['id'];
    $sql1 = "DELETE FROM emplogin WHERE E_ID='$emp_id'";
    $sql2 = "DELETE FROM employee WHERE E_ID='$emp_id'";
    if ($conn->query($sql1) && $conn->query($sql2))
        header("location:employee-view.php");
    else
        echo "error";
?>
