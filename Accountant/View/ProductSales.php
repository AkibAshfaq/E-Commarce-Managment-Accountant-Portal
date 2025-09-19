<!DOCTYPE html>
<html>
    <head>
        <title>Product Sales</title>
        <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
        <script src="../JS/ProductSales.js"></script>
        <link rel="stylesheet" href="../CSS/ProductSales.css">

    </head>
    <body>
        <div class= "Sidebar">

            <a href="Profile.php"><img src="../Assets/Image/AccountantDashBoardLogo.png" alt="Accountant" style="width:50%; height:auto;"></a>
            <h2>Accountant Dashboard</h2>
            <a href="AccountantDashBoard.php" class="active">Dashboard</a>
            <a href="ProductSales.php">Product Sales</a>
            <a href="OrdersReport.php">Orders</a>
            <a href="Invoice.php">Invoice</a>
            <a href="CompanyExpense.php">Expenses</a>
            <a href="CompanySalary.php">Company Salary</a>
            <a href="../PHP/EndSession.php">Logout</a>

        </div>

        <div class="pagecontainer" id="chartsContainer">
            <?php include '../PHP/ProductSalesGraph.php'; ?>
        </div>
    </body>
</html>