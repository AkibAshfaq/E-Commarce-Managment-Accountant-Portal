<?php

include 'ServerStart.php';

$sql = "SELECT Refund_ID, Order_ID, Customer_ID, Refund_Product_ID, Refund_Product_Name, Refund_Product_Quantity, Refund_Ammount, Refund_Reason, Refund_Status, Refund_Date FROM refund_table";
$result = $conn->query($sql);

if($result->num_rows>0) {
    while($row = $result->fetch_assoc()) {
        echo "<script>
            refundtableview(
                '".$row["Refund_ID"]."',
                '".$row["Order_ID"]."',
                '".$row["Customer_ID"]."',
                '".$row["Refund_Product_ID"]."',
                '".$row["Refund_Product_Name"]."',
                '".$row["Refund_Product_Quantity"]."',
                '".$row["Refund_Ammount"]."',
                '".$row["Refund_Reason"]."',
                '".$row["Refund_Status"]."',
                '".$row["Refund_Date"]."'
            );
        </script>";
    }
}else{
    echo "0 results";
}

$conn->close();
?>