<?php

include 'ServerStart.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $oID = $_POST["Orderid"];
    $pID = $_POST["productid"];
    $qnty = $_POST["qunatity"];
    $reason = $_POST["reason"];

    $sql = "INSERT INTO refund_table (Order_ID, Customer_ID, Refund_Product_ID, Refund_Product_Name, Refund_Product_Quantity, Refund_Ammount, Refund_Reason, Refund_Status, Refund_Date) 
            VALUES ('$oID', (SELECT Customer_ID FROM Customer_order_table WHERE Order_ID='".$oID."'), 
            '$pID', (SELECT Product_Name FROM Product_table WHERE Product_ID='$pID'), 
            '$qnty', (SELECT Product_Price*'$qnty' FROM Product_table WHERE Product_ID='$pID'), 
            '$reason', 'Pending', CURRENT_DATE())";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location: ../View/Invoice.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>