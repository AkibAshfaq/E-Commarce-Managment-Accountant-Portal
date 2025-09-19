<?php

include 'ServerStart.php';

$sql = "SELECT Order_ID, Customer_ID, Order_Date, Order_Price FROM Customer_Order_Table";
$result = $conn->query($sql);
if($result === false) echo "Error: ". $sql ."<br>". $conn->error;
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<script>ordertableview('".$row["Order_ID"]."','".$row["Customer_ID"]."','".$row["Order_Date"]."','".$row["Order_Price"]."');</script>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

?>