<?php

include 'ServerStart.php';

$sql = "SELECT * FROM employee_table";
$result = $conn->query($sql);
$employeeCount = $result->num_rows;
echo "<script>document.getElementById('employee').innerHTML = '$employeeCount';</script>";

$sql = "SELECT * FROM customer_table";
$result = $conn->query($sql);
$costomerCount = $result->num_rows;
echo "<script>document.getElementById('customer').innerHTML = '$costomerCount';</script>";

$sql = "SELECT * FROM product_table";
$result = $conn->query($sql);
$productCount = $result->num_rows;
echo "<script>document.getElementById('productvarity').innerHTML = '$productCount';</script>";

$sql = "SELECT COUNT(DISTINCT Product_Category) AS unique_Products FROM product_table;";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$productCatagoryCount = $row['unique_Products'] ?? 0;
echo "<script>document.getElementById('productcatagory').innerHTML = '$productCatagoryCount';</script>";

$sql = "SELECT * FROM refund_Table";
$result = $conn->query($sql);
$refundedProductCount = $result->num_rows;
echo "<script>document.getElementById('refundedproduct').innerHTML = '$refundedProductCount';</script>";

$sql = "SELECT SUM(Product_Price*Product_Available) AS total FROM product_table";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$total = $row['total'] ?? 0;
echo "<script>document.getElementById('availableproductcost').innerHTML = '$total';</script>";

$sql = "SELECT SUM(Product_Price*Product_Stocked) AS total FROM product_table";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$total = $row['total'] ?? 0;
echo "<script>document.getElementById('stockedproductcost').innerHTML = '$total';</script>";


$sql = "SELECT SUM(Expense_Ammount) AS total_expense FROM Company_expense";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$totalExpense = $row['total_expense'] ?? 0;
echo "<script>document.getElementById('expense').innerHTML = '$totalExpense';</script>";


$sql = "SELECT SUM(refund_ammount) AS total_refund FROM refund_table";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$totalRefund = $row['total_refund'] ?? 0;
echo "<script>document.getElementById('refundedammount').innerHTML = '$totalRefund';</script>";

$sql = "SELECT SUM(Order_Price) AS total_profit FROM customer_order_table";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$totalProfit = $row['total_profit'] ?? 0;
echo "<script>document.getElementById('ordercount').innerHTML = '$totalProfit';</script>";

$sql = "SELECT * FROM customer_order_table";
$result = $conn->query($sql);
$orderCount = $result->num_rows;
echo "<script>document.getElementById('orders').innerHTML = '$orderCount';</script>";

$revenue = $totalProfit - $totalRefund - $totalExpense;
echo "<script>document.getElementById('revenue').innerHTML = '$revenue';</script>";

$conn->close();
?>