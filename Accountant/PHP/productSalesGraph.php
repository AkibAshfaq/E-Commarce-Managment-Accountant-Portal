<?php
include 'ServerStart.php';


$sql = "SELECT DISTINCT Product_Category FROM product_table";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $category = $row['Product_Category'];

        $sql1 = "SELECT Product_Name, Product_Stocked - Product_Available AS Total_Sales 
                 FROM product_table 
                 WHERE Product_Category = '$category'";
        $result1 = $conn->query($sql1);

        if ($result1->num_rows > 0) {

            $typesJS = "[";
            $salesJS = "[";

            while ($row1 = $result1->fetch_assoc()) {
                $typesJS .= "'" . addslashes($row1['Product_Name']) . "',";
                $salesJS .= (int)$row1['Total_Sales'] . ",";
            }

            $typesJS = rtrim($typesJS, ",") . "]";
            $salesJS = rtrim($salesJS, ",") . "]";

            $divId = str_replace(' ', '_', $category);

            echo "
                <div id='$divId' class='chartDiv'>
                </div>
                <script>
                    drawChart($typesJS, $salesJS, '$divId');
                </script>
            ";
        }
    }
} else {
    echo "<p>No product categories found.</p>";
}

$conn->close();
?>
