<?php

include 'ServerStart.php';

$sql = "SELECT Product_ID, Product_Name, Product_Category, Product_Price, Product_available, Product_Stocked  FROM product_table";
$result = $conn->query($sql);

if($result->num_rows>0) {
    while($row = $result->fetch_assoc()) {
        echo "<script>
            producttableview(
                '".$row["Product_ID"]."',
                '".$row["Product_Name"]."',
                '".$row["Product_Category"]."',
                '".$row["Product_Price"]."',
                '".$row["Product_available"]."',
                '".$row["Product_Stocked"]."'
            );
            

        </script>";
    }
}else{
    echo "0 results";
}

$conn->close();
?>