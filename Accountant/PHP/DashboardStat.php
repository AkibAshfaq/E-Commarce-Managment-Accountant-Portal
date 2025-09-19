<?php
include 'ServerStart.php';

// Fetch distinct product categories and sum of sales
$sql = "SELECT Product_Category, SUM(Product_Stocked - Product_Available) AS Total_Sales 
        FROM product_table 
        GROUP BY Product_Category";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $categories = [];
    $sales = [];

    while ($row = $result->fetch_assoc()) {
        $categories[] = "'" . $row['Product_Category'] . "'"; // wrap in quotes for JS
        $sales[] = (int)$row['Total_Sales'];
    }

    // Convert PHP arrays to JS arrays using implode
    $categoriesJS = "[" . implode(",", $categories) . "]";
    $salesJS = "[" . implode(",", $sales) . "]";

    echo "
        <script>
            drawChart($categoriesJS, $salesJS, 'CategorySalesChart');
            drawLineChart($categoriesJS, $salesJS);
        </script>
    ";
} else {
    echo "<p>No product categories found.</p>";
}

$conn->close();
?>
