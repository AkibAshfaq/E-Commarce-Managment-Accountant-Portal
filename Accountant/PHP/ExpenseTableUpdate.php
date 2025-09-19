<?php

    include 'ServerStart.php';

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {    
        $ename = $_POST['expensename'];
        $eprice = $_POST['expenseammount'];
        $edept = $_POST['department'];
        $ereason = $_POST['expensereason'];
        $eapdate = $_POST['approvedate'];
        $eapby = $_POST['approvedby'];
        $ercdate = $_POST['receiveddate'];
        $ercby = $_POST['receivedby'];

        $sql = "INSERT INTO company_expense  (Expense_Name, Expense_Ammount, Expense_Department_Name, Expense_Reason, Expense_Approved_Date, Expense_Approved_By, Expense_Received_Date, Expense_Received_By) VALUES ('$ename', '$eprice', '$edept', '$ereason', '$eapdate', '$eapby', '$ercdate', '$ercby')";

        if($conn -> query($sql) === TRUE){
            header("Location:../View/CompanyExpense.php");
            include 'ExpenseTableShow.php';
        }
        else{
            echo "Error: ". $sql . "<br>" . $conn -> error;
        }
    }

?>