<?php
    include 'ServerStart.php';

    if($_SERVER["REQUEST_METHOD"] == "POST"){  
        $eId = $_POST['PempId'];

        $sql = "UPDATE employee_table SET Last_Paid = CURRENT_DATE() WHERE Employee_ID = $eId";

        if($conn -> query($sql) === TRUE){
            header("Location: ../View/CompanySalary.php");
        }
        else{
            echo "Error: ". $sql . "<br>" . $conn -> error;
        }
    }

    $conn -> close();
?>