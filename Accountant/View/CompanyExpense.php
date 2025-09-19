<!DOCTYPE html>
<html>
    <head>
        <title>Company Expense</title>
        <script src="../JS/CompanyExpense.js"></script>
        <link rel="stylesheet" href="../CSS/CompanyExpense.css">
        

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
            
            <div class="tablebox">
                <h2 style=" position: sticky; ">Company Expense</h2>
                <table id="expenseTable">
                    <tr >
                        <th>Expense ID</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Department</th>
                        <th>Reason</th>
                        <th>Apperove</th>
                        <th>Approved By</th>
                        <th>Payment Recived date</th>
                        <th>Recived By</th>
                    </tr>
                </table>
                <?php include '../PHP/ExpenseTableShow.php';?>
            </div>
            

            <div class="Inputbox">
                <div class="frm">
                    <h1>Approve Expense</h1>
                    <form onsubmit="return ApproveValid()" method="POST" action="../PHP/ExpenseTableUpdate.php">
                        <input type="text" name ="expensename" id="productname" placeholder="Product Name"/>
                        <input type="number" name="expenseammount" id ="productprice" placeholder="Price"/>
                        <br>
                        <select name="department" id="Depertment">
                            <option value="">Select Department</option>
                            <option value="Accounts">Accounts</option>
                            <option Value="HR">HR</option>
                        </select>
                        <textarea name="expensereason" id="productreason" placeholder="Reason for purchase"></textarea>
                        <br>
                        <label>Approve Date</label><br>
                        <input type="date" name="approvedate" id="ApDate">
                        <input type="text" name="approvedby" id="Approvedby" placeholder="Approved by">
                        <label>Received Date</label><br>
                        <input type="date" name="receiveddate" id="receiveddate">
                        <input type="text" name="receivedby" id="receivedby" placeholder="Received by">
                        <input type="submit" Value=Submit>
                    </form>
                </div>
            </div>
            
        </div>
        

    </body>
</html>