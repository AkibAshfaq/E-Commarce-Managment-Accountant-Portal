<?php

include 'ServerStart.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $rID = $_POST["refundid"];
    $status = $_POST["status"];

    $sql = "UPDATE refund_table SET Refund_Status='$status' WHERE Refund_ID='$rID'";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
        header("Location: ../View/Invoice.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

?>