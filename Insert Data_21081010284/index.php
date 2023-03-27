<?php
    $conn = mysqli_connect("localhost", "root", "", "classicmodels");
    $customer = mysqli_query($conn,"SELECT * FROM customers");
    $products_data = "SELECT * FROM products;";
    $product = mysqli_query($conn,$products_data);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
</head>

<body>
    <h1><center>Product Table</center></h1>
    <table border= "1">
        <tr align="center">
            <td>
                Product Code
                </td>
            <td>
                Product Name
                </td>
            <td>
                Product Line
                </td>
            <td>
                Product Scale
                </td>
            <td>
                Product Vendor
                </td>
            <td>
                Product Description
                </td>
            <td>
                Quantity In Stock
                </td>
            <td>
                Buy Price
                </td>
            <td>
                MSRP
                </td>
        </tr>

       

        <?php
            if ($customer->num_rows > 0) {
                while ($row = $product->fetch_array()) { ?>
        <tr>
            <td>
                <?= $row["productCode"] ?>
            </td>
            <td>
                <?= $row["productName"] ?>
            </td>
            <td>
                <?= $row["productLine"] ?>
            </td>
            <td>
                <?= $row["productScale"] ?>
            </td>
            <td>
                <?= $row["productVendor"] ?>
            </td>
            <td>
                <?= $row["productDescription"] ?>
            </td>
            <td>
                <?= $row["quantityInStock"] ?>
            </td>
            <td>
                <?= $row["buyPrice"] ?>
            </td>
            <td>
                <?= $row["MSRP"] ?>
            </td>
        </tr>
       

        <?php }} else { echo "No Results"; } ?>
    </table>

<h3><a href="insertproduct.php">Insert New Product</a></h3>

    <h1><center>Customer Table</center></h1>
    <table border="1">
        <tr align="center">
            <td>
                Customer Number
                </td>
            <td>
                Customer Name
                </td>
            <td>
                Customer Last Name
                </td>
            <td>
                Customer First Name
                </td>
            <td>
                Phone
                </td>
            <td>
                Address Line 1
                </td>
            <td>
                Address Line 2
                </td>
            <td>
                City
                </td>
            <td>
                State
                </td>
            <td>
                Postal Code
                </td>
            <td>
                Country
                </td>
            <td>
                Sales Rep Employee Number
                </td>
            <td>
                CreditLimit
                </td>
        </tr>
        <?php
        if ($customer->num_rows > 0) {
            while ($row = $customer->fetch_array()) {
        ?>
        <tr>
            <td>
               <center><?= $row['customerNumber'] ?> </center>
            </td>
            <td>
                <?= $row['customerName'] ?>
            </td> 
            <td>
                <?= $row['contactLastName'] ?>
            </td> 
            <td>
                <?= $row['contactFirstName'] ?>
            </td>
            <td>
                <?= $row['phone'] ?>
            </td> 
            <td>
                <?= $row['addressLine1'] ?>
            </td>
            <td>
                <?= $row['addressLine2'] ?>
            </td>
            <td>
                <?= $row['city'] ?>
            </td>
            <td>
                <?= $row['state'] ?>
            </td>
            <td>
                <?= $row['postalCode'] ?>
            </td>
            <td>
                <?= $row['country'] ?>
            </td>
            <td>
                <?= $row['salesRepEmployeeNumber'] ?>
            </td>
            <td>
                <?= $row['creditLimit'] ?>
            </td>
        </tr>

        <?php }} else { echo "No Results";} ?>
    </table>
<h3><a href="insertcustomers.php">Insert New Customer</a></h3>
</body>

</html>