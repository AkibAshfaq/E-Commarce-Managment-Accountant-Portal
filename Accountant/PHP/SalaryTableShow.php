<?php

// include 'ServerStart.php';

// $sql = "SELECT Employee_ID, Employee_Name, Employee_Department, Employee_Base_Salary, Employee_Increment_Percent, Employee_Final_Salary, Last_Paid, Employee_Performance FROM employee_table";
// $result = $conn->query($sql);
// if ($result->num_rows > 0) {
//     while($row = $result->fetch_assoc()) {
//         echo "<script>
//         salarytableview('".$row["Employee_ID"]. "','". $row["Employee_Name"]."' ,
//                                 '". $row["Employee_Department"]."','". $row["Employee_Base_Salary"]."',
//                                 '". $row["Employee_Increment_Percent"]. "','". $row["Employee_Final_Salary"]."','".$row["Last_Paid"]."','".$row["Employee_Performance"]."');
//                                 </script>";
//     }
// } else {
//     echo "0 results";
// }


include 'ServerStart.php';

$sql = "SELECT Employee_ID, Employee_Name, Employee_Department, Employee_Base_Salary, Employee_Increment_Percent, Employee_Final_Salary, Last_Paid , Employee_Performance FROM employee_table";
$result = $conn->query($sql);
if ($result -> num_rows >0) {
    while($row = $result->fetch_assoc()) {
        echo "<script>
        salarytableview('".$row["Employee_ID"]. "','". $row["Employee_Name"]."' ,
                                '". $row["Employee_Department"]."','". $row["Employee_Base_Salary"]."',
                                '". $row["Employee_Increment_Percent"]. "','". $row["Employee_Final_Salary"]."','".$row["Last_Paid"]."','".$row["Employee_Performance"]."');
                                </script>";
    }
} else {
    echo "0 results";
}



?>
