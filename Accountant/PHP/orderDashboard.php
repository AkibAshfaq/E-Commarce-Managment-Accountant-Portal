<?php

include 'ServerStart.php';

$sql1 = "SELECT * FROM Customer_Order_Table";
$result1 = $conn->query($sql1);

$sql2 = "SELECT * FROM Customer_Order_Table WHERE Order_Status = 'Pending'";
$result2 = $conn->query($sql2);

$sql3 = "SELECT * FROM Customer_Order_Table WHERE Order_Status = 'Delivered'";
$result3 = $conn->query($sql3);

$totalorder = $result1->num_rows;
$totalpending = $result2->num_rows;
$totaldelivered = $result3->num_rows;

echo "<script>document.getElementById('totalorder').innerHTML = '$totalorder';</script>";
echo "<script>document.getElementById('totalpending').innerHTML = '$totalpending';</script>";
echo "<script>document.getElementById('totaldelivered').innerHTML = '$totaldelivered';</script>";

$sql4 = "SELECT SUM(Order_Price) AS revenue FROM Customer_Order_Table WHERE Order_Status = 'Delivered'";
$result4 = $conn->query($sql4);
$row4 = $result4->fetch_assoc();
$revenue = $row4['revenue'] ?? 0;
echo "<script>document.getElementById('revenue').innerHTML = '$revenue';</script>";

$conn->close();

?>