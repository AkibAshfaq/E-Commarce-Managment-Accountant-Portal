<?php

include 'ServerStart.php';

$sql = "SELECT * FROM refund_table";
$result1 = $conn->query($sql);

$sql2 = "SELECT * FROM refund_table WHERE Refund_Status = 'Pending'";
$result2 = $conn->query($sql2);

$sql3 = "SELECT * FROM refund_table WHERE Refund_Status = 'Approved'";
$result3 = $conn->query($sql3);

$sql4 = "SELECT * FROM refund_table WHERE Refund_Status = 'Refunded'";
$result4 = $conn->query($sql4);

$totalrefund = $result1->num_rows;
$totalpending = $result2->num_rows;
$totalApproved = $result3->num_rows;
$totalrefunded = $result4->num_rows;

$sql5 = "SELECT SUM(Refund_Ammount) AS refunded_amount FROM refund_table WHERE Refund_Status = 'Refunded'";
$result5 = $conn->query($sql5);
$row5 = $result5->fetch_assoc();
$totalrefundedammount = $row5['refunded_amount'] ?? 0;

echo "<script>document.getElementById('refund').innerHTML = '$totalrefund';</script>";
echo "<script>document.getElementById('totalpending').innerHTML = '$totalpending';</script>";
echo "<script>document.getElementById('totalApproved').innerHTML = '$totalApproved';</script>";
echo "<script>document.getElementById('totalrefunded').innerHTML = '$totalrefunded';</script>";
echo "<script>document.getElementById('totalrefundedammount').innerHTML = '$totalrefundedammount';</script>";

$sql6 = "SELECT * FROM refund_table WHERE Refund_Reason = 'Damaged Product'";
$result6 = $conn->query($sql6);
$dmgrefund = $result6->num_rows;
echo "<script>document.getElementById('dmgrefund').innerHTML = '$dmgrefund';</script>";

$sql7 = "SELECT * FROM refund_table WHERE Refund_Reason = 'Wrong Product'";
$result7 = $conn->query($sql7);
$wrongdelevery = $result7->num_rows;
echo "<script>document.getElementById('wrongdelevery').innerHTML = '$wrongdelevery';</script>";

$sql8 = "SELECT * FROM refund_table WHERE Refund_Reason = 'Late Delivery'";
$result8 = $conn->query($sql8);
$late = $result8->num_rows;
echo "<script>document.getElementById('late').innerHTML = '$late';</script>";

$conn->close();
?>