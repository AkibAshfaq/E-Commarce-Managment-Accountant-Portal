<!DOCTYPE html>
<html>
    <head>
        <title>Orders Report</title>
        <script src="../JS/OrdersReport.js "></script>
        <link rel="Stylesheet" href="../CSS/OrdersReport.css">

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

        <div class = "pagecontainer">
            
                <div class="totalammount">
                    <h4>Orders</h4>
                    <div class="Line"></div>
                    <h1 id="totalorder">N\A</h1>
                </div>

                <div class="totalammount">
                    <h4>Order Pending</h4>
                    <div class="Line"></div>
                    <h1 id="totalpending">N\A</h1>
                </div>

                <div class="totalammount">
                    <h4>Orders Delivered</h4>
                    <div class="Line"></div>
                    <h1 id="totaldelivered">N\A</h1>
                </div>

                <div class="totalammount">
                    <h4>Revenue</h4>
                    <div class="Line"></div>
                    <h1 id="revenue">N\A</h1>
                </div>

                <?php include '../PHP/orderDashboard.php'; ?>

                <div class="tablecss">
                    <table id ="ordertable">
                        <tr>
                            <th>Order ID</th>
                            <th>Customer ID</th>
                            <th>Order Date</th>
                            <th>Order Price</th>
                        </tr>
                    </table>
                    <?php include '../PHP/OrderTableShow.php'; ?>
                </div>

                <div class="tablecss">
                    <table id ="Producttable">
                        <tr>
                            <th>Product ID</th>
                            <th>Product Name</th>
                            <th>Product Catagory</th>
                            <th>Product Type</th>
                            <th>Product Available</th>
                            <th>Product Stocked</th>
                        </tr>
                    </table>
                    <?php include '../PHP/ProductShowTable.php'; ?>
                </div>


        </div>
        
    </body>
</html>