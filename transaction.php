<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/1Webstyle.css">
</head>
<body>
<div class="topnav">
      <a class="op" href="index.php">Sales</a>
      <a href="product.php" class="op">Product</a>
      <a href="category.php" class="op">Category</a>
      <a href="#transaction.php" class="active">Transactions</a>
      <a class="WebTitle">Scarlets Pet Shop Products</a>
    </div>

    <div class="topnal">
      <a class="tran1" href="#tranInfo.php">New Transaction</a>
      <a href="orders.php" class="tran2">Add Orders</a>
    </div>
    <?php
 // servername => localhost
 // username => root
 // password => empty
 // database name => staff
 //$conn = mysqli_connect("localhost", "root", "", "im_store");
 include_once 'config.php';
  
 // Check connection
 if($conn === false){
     die("ERROR: Could not connect. "
         . mysqli_connect_error());
 }
  //database
 $sql = "SELECT * FROM product WHERE prod_id = 6";
 $result = $conn->query($sql);
 
 
 if ($result->num_rows > 0) {
   // output data of each row
   echo "<table id='myTable' border=2>
   <tr>
   <td>Transaction Id</td>
   <td>Product Id</td>
   <td>Item Quantity</td>
   </tr>";
   while($row = $result->fetch_assoc()) {
     echo "<tr><td>" . $row["prod_id"]. "</td>
     <td>" . $row["prod_id"]. "</td>
     <td>" . $row["prod_name"]. "</td>
     </tr>";
   
    }
 } else {
   echo "No Records Made";
 }


?>
</table>
    
</body>
<script src="js/script.js"></script>
</html>