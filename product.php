<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Scarlets Pet Shop</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css/tStyle.css">
   </head>
   <body>
   <div class="topnav">
      <a class="op" href="index.php">Sales</a>
      <a href="#product.php" class="active">Product</a>
      <a href="category.php" class="op">Category</a>
      <a href="transaction.php" class="op">Transactions</a>
      <a class="WebTitle">Scarlets Pet Shop Products</a>
    </div>
    <a class="lbutton" href="paddEP.php">With Existing Category</a><a class="lbutton" href="paddNP.php">With Newly Added Category</a>    
 <?php
 include_once 'config.php';
 if($conn === false){
     die("ERROR: Could not connect. "
         . mysqli_connect_error());
 }
 $sql = "SELECT * FROM product";
 $result = $conn->query($sql);
 if ($result->num_rows > 0) {
   echo "<table id='myTable' border=2>
   <tr>
   <td>Product Id</td>
   <td>Product Name</td>
   <td>Product Price</td>
   <td>Product Expiration</td>
   <td>Action</td>
   </tr>";
   while($row = $result->fetch_assoc()) {
     echo "<tr><td>" . $row["Prod_ID"]. "</td>
     <td>" . $row["Prod_Name"]. "</td>
     <td> " . $row["Prod_Price"].  "</td>
     <td>" . $row["Prod_Exp"] .   "</td>
     <td><a href=deleterec.php?Prod_ID=".$row["Prod_ID"]." class='delete'>Delete </a>
       <a href='editrec.php?bid=".$row["Prod_ID"]."&name=". $row["Prod_Name"]."&address=".$row["Prod_Price"]."&email=".$row["Prod_Exp"]. "' class='button'>Edit </a>    </td>
     </tr>";
    }
 } else {
   echo "No Records Made";
 }
?>
</table>
   </body>
   <script src="js/Pscript.js"></script>
</html>