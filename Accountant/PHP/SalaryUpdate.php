<?php
    include 'ServerStart.php';

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {  
        $eId = $_POST['empId'];
        $eInc = $_POST['increment'];

        $sql = "UPDATE employee_table SET Employee_Increment_percent = $eInc ,Last_Paid = CURRENT_DATE() WHERE Employee_ID = $eId";

        if($conn -> query($sql) === TRUE){
            header("Location: ../View/CompanySalary.php");
        }
        else{
            echo "Error: ". $sql . "<br>" . $conn -> error;
        }
    }

    $conn -> close();
?>