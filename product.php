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
 $sql = "SELECT c.Cat_ID, c.Cat_Desc, p.Prod_ID, p.Prod_Name, p.Prod_Price, p.Prod_Exp FROM product AS p JOIN category AS c ON c.Cat_ID = p.Prod_CatID";
 $result = $conn->query($sql);
 if ($result->num_rows > 0) {
   echo "<table id='myTable' border = 2 >
   <tr>
   <td>Category ID</td>
   <td>Product Id</td>
   <td>Product Name</td>
   <td>Category Description</td>
   <td>Product Price</td>
   <td>Product Expiration</td>
   <td>Action</td>
   </tr>";
   while($row = $result->fetch_assoc()) {
     echo "<tr><td>" . $row["Cat_ID"]. "</td><td>" . $row["Prod_ID"]. "</td>
     <td>" . $row["Prod_Name"]. "</td><td>" . $row["Cat_Desc"]. "</td>
     <td> " . $row["Prod_Price"].  "</td>
     <td>" . $row["Prod_Exp"] .   "</td>
     <td><a href=deleterec.php?Prod_ID=".$row["Prod_ID"]." class='delete'>Delete </a>
       <a href='editrec.php?Prod_ID=".$row["Prod_ID"]."&Prod_Name=". $row["Prod_Name"]."&Prod_Price=".$row["Prod_Price"]."' class='button'>Edit </a>    </td>
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