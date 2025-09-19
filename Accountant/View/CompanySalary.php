<!DOCTYPE html>
<html>
    <head>
        <title>Company Salary</title>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="../JS/CompanySalary.js"></script>
        <link rel="stylesheet" href="../CSS/CompanySalary.css">

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
                <table id="SalaryTable">
                    <h1>Company Salary</h1>
                    <tr>
                        <th>Employee ID</th>
                        <th>Employee Name</th>
                        <th>Employee Department</th>
                        <th>Employee Base Salary</th>
                        <th>Employee Increment Percentage</th>
                        <th>Employee Incremented Salary</th>
                        <th>Employee PayDate</th></th>
                        <th>Employee_Performence</th></th>
                        
                    </tr>

                </table>
                <?php include '../PHP/SalaryTableShow.php'; ?>
            </div>

                <div class="frm">
                    <form  action="../PHP/SalaryUpdate.php" method="POST">
                        <h2>Update Salary</h2>
                        <input type="text" id="empId" name="empId" placeholder="Employee ID" required>
                        <input type="number" id="increment" name="increment" placeholder="Increment" required>
                        <input type="submit" value="Update">
                    </form>
                </div>

                <div class="frm">
                    <form  action="../PHP/PaySalary.php" method="POST">
                        <h2>Pay Salary</h2>
                        <input type="text" id="PempId" name="PempId" placeholder="Employee ID" required>
                        <input type="submit" value="Update">
                    </form>
                </div>
        </div>

    </body>
</html>