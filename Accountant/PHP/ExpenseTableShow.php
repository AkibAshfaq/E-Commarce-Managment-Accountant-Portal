<?php

include 'ServerStart.php';

$sql = "SELECT Expense_ID, Expense_Name, Expense_Ammount, Expense_Department_Name, Expense_Reason, Expense_Approved_Date, Expense_Approved_By, Expense_Received_Date, Expense_Received_By FROM company_expense";
$result = $conn->query($sql);

// if($result === false) echo "Error: ". $sql ."<br>". $conn->error;

if($result->num_rows>0) {
    while($row = $result->fetch_assoc()) {
        echo "<script>
            tableview(
                '".$row["Expense_ID"]."',
                '".$row["Expense_Name"]."',
                '".$row["Expense_Ammount"]."',
                '".$row["Expense_Department_Name"]."',
                '".$row["Expense_Reason"]."',
                '".$row["Expense_Approved_Date"]."',
                '".$row["Expense_Approved_By"]."',
                '".$row["Expense_Received_Date"]."',
                '".$row["Expense_Received_By"]."'
            );
        </script>";
        

    }
}else{
    echo "0 results";
}

?>