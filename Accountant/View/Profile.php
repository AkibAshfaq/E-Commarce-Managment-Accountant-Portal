<!DOCTYPE html>
<html>

<head>
    <title>Profile</title>
    <script src ="../JS/Profile.js"></script>
    <link rel="stylesheet" href="../CSS/Profile.css">
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

    <div class="pagecontainer">
        <table>
            <tr>
                <td>
                    Profile Details
                </td>
            </tr>
            <tr>
                <td>ID </td>
                <td><h4 id="id">N\A</h4></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><h4 id="name">N\A</h4></td>
            </tr>
                <td>Number</td>
                <td><h4 id="number">N\A</h4></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><h4 id="email">N\A</h4></td>
            </tr>
            <tr>
                <td>Department</td>
                <td><h4 id="dept">N\A</h4></td>
            </tr>
            <tr>
            <tr>
                <td>Joining Date</td>
                <td><h4 id="joiningdate">N\A</h4></td>
            </tr>
        </table>
        <?php include '../PHP/ProfileView.php'; ?>

        <form action="../PHP/ChangePass.php" method="POST">
            <table>
                <tr>
                    <td>
                        Change Password
                    </td>
                </tr>
                <tr>
                    <td>Old Pass</td>
                    <td><input type="password" name="old_pass"></td>
                </tr>
                <tr>
                    <td>New Pass</td>
                    <td><input type="password" name="new_pass"></td>
                </tr>
                <tr>
                    <td>Confirm Pass</td>
                    <td><input type="password" name="confirm_pass"></td>
                </tr>
            </table>
            <input type="submit" value="Change Password">
        </form>
    </div>
</body>

</html>