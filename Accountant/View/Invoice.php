<!DOCTYPE html>
<html>

    <head>

        <title>Invoice</title>
        <script src="../JS/Invoice.js"></script>
        <link rel="Stylesheet" href="../CSS/Invoice.css">

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
                    <h4>Refunds</h4>
                    <div class="Line"></div>
                    <h1 id="refund">N\A</h1>
                </div>

                <div class="totalammount">
                    <h4>Refund Pending</h4>
                    <div class="Line"></div>
                    <h1 id="totalpending">N\A</h1>
                </div>

                <div class="totalammount">
                    <h4>Refund Approved</h4>
                    <div class="Line"></div>
                    <h1 id="totalApproved">N\A</h1>
                </div>

                <div class="totalammount">
                    <h4>Refunded</h4>
                    <div class="Line"></div>
                    <h1 id="totalrefunded">N\A</h1>
                </div>

                <div class="totalammount">
                    <h4>Refunded Ammount</h4>
                    <div class="Line"></div>
                    <h1 id="totalrefundedammount">N\A</h1>
                </div>

                <div class="totalammount">
                    <h4>Damaged Refund</h4>
                    <div class="Line"></div>
                    <h1 id="dmgrefund">N\A</h1>
                </div>

                <div class="totalammount">
                    <h4>Wrong Delivery</h4>
                    <div class="Line"></div>
                    <h1 id="wrongdelevery">N\A</h1>
                </div>

                <div class="totalammount">
                    <h4>Late Delivery</h4>
                    <div class="Line"></div>
                    <h1 id="late">N\A</h1>
                </div>
                

                <?php include '../PHP/RefundDashboard.php'; ?>

                <div class="tablecss">
                    <table id ="refundtable">
                        <tr>
                            <th>Refund ID</th>
                            <th>Order ID</th>
                            <th>Customer ID</th>
                            <th>Product ID</th>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Refund Amount</th>
                            <th>Refund Reason</th>
                            <th>Refund Status</th>
                            <th>Refund Date</th>
                        </tr>
                    </table> 
                </div>
                <?php include '../PHP/RefundTableShow.php'; ?>

                <div class="valueinput" >
                    <form action="../PHP/AddRefund.php" method="POST">
                        <h4>Add Refund Form</h4>
                        <input type="text" name="Orderid" placeholder="Enter Order ID" required>
                        <input type="text" name="productid" placeholder="Enter Product ID" required>
                        <input type="text" name="qunatity" placeholder="Enter Quantity" required>
                        <select name="reason" required>
                            <option value="" disabled selected>Select Reason</option>
                            <option value="Damaged Product">Damaged Product</option>
                            <option value="Wrong Product">Wrong Product</option>
                            <option value="Late Delivery">Late Delivery</option>
                            <option value="Other">Other</option>
                        </select> 
                        <input type="submit" Value="Add">
                    </form>
                </div>

                <div class="valueinput">
                    <form action="../PHP/RefundUpdate.php" method="POST">
                        <h4>Update Refund Form</h4>
                        <input type="text" name="refundid" id="refundid" placeholder="Enter Refund ID" required>
                        <select name="status" required>
                            <option value="" disabled selected>Change Status</option>
                            <option value="Pending">Pending</option>
                            <option value="Approved">Approved</option>
                            <option value="Refunded">Refunded</option>
                        </select>
                        <input type="submit" Value="Update">
                    </form>
                </div>

        </div>
        
    </body>
</html>