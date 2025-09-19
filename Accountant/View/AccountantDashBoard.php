<?php session_start(); ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Accountant Dashboard</title>
        <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
        <script src="../JS/AccountantDashBoard.js"></script>
        <link rel="stylesheet" href="../CSS/AccountantDashBoard.css">
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
            <!--  -->
        </div>
        
        <div class="pagecontainer">
            
                <div class="totalammount">
                    <h4>Employees Working</h4>
                    <div class="Line"></div>
                    <h1 id="employee">N/A</h1>
                </div>

                <div class="totalammount">
                    <h4>Registered Costomers</h4>
                    <div class="Line"></div>
                    <h1 id="customer">N/A</h1>
                </div>

                <div class="totalammount">
                    <h4>Varity of Product</h4>
                    <div class="Line"></div>
                    <h1 id="productvarity">N/A</h1>
                </div>

                <div class="totalammount">
                    <h4>Product Catagory</h4>
                    <div class="Line"></div>
                    <h1 id="productcatagory">N/A</h1>
                </div>

                <div class="totalammount">
                    <h4>Orders</h4>
                    <div class="Line"></div>
                    <h1 id="orders">N/A</h1>
                </div>

                <div class="totalammount">
                    <h4>Order Ammount</h4>
                    <div class="Line"></div>
                    <h1 id="ordercount">N/A</h1>
                </div>


                <div class="totalammount">
                    <h4>Refunded product</h4>
                    <div class="Line"></div>
                    <h1 id="refundedproduct">N/A</h1>
                </div>

                <div class="totalammount">
                    <h4>Refunded Ammount</h4>
                    <div class="Line"></div>
                    <h1 id="refundedammount">N/A</h1>
                </div>

                <div class="totalammount">
                    <h4>Total Expense</h4>
                    <div class="Line"></div>
                    <h1 id="expense">N/A</h1>
                </div>

                <div class="totalammount">
                    <h4>Stocked Product Worth</h4>
                    <div class="Line"></div>
                    <h1 id="stockedproductcost">N/A</h1>
                </div>

                <div class="totalammount">
                    <h4>Available Product Worth</h4>
                    <div class="Line"></div>
                    <h1 id="availableproductcost">N/A</h1>
                </div>

                <div class="totalammount">
                    <h4>Revenue</h4>
                    <div class="Line"></div>
                    <h1 id="revenue">N/A</h1>
                </div>

                <div id="CategorySalesChart" class="chartDiv"></div>
                <div id="Countryprofit" class="chartDiv"></div>

                <?php 
                    include '../PHP/AccountantDashBoardInfo.php'; 
                    include '../PHP/DashboardStat.php';
                ?>
                
                
        </div>
    </body>

</html>