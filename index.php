<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="topnav">
      <a href="product.php" class="op">Product</a>
      <a href="category.php" class="op">Category</a>
      <a href="#index.php" class="active">Transactions</a>
      <a class="WebTitle">Scarlets Pet Shop Products</a>
    </div>

    <div class="clickemC">
  <div class="clickemV">
   <a class="clickemA" href="orders.php">Add Orders</a><a class="clickemB" href="tranID.php">New Transaction</a>
  </div>
</div>
<input type="text" id="Search" onkeyup="(myFunction())" placeholder="Search for ID.." title="Type in a name">

<?php
 include_once 'config.php';

 if($conn === false){
     die("ERROR: Could not connect. "
         . mysqli_connect_error());
 }

 $sql = "SELECT * FROM orders";
 $result = $conn->query($sql);
 
 
 if ($result->num_rows > 0) {

   echo "<table id='myTable' border=2>
   <tr>
   <td class='titlet'>Transaction Id</td>
   <td class='titlet'>Product Id</td>
   <td class='titlet'>Item Quantity</td>
   </tr>";
   while($row = $result->fetch_assoc()) {
     echo "<tr><td>" . $row["Tran_ID"]. "</td>
     <td>" . $row["Item_ID"]. "</td>
     <td>" . $row["Item_Qty"]. "</td>
     </tr>";
   
    }
 } else {
   echo "<table id='myTable' border=2>
   <tr>
   <td class='titlet'>Transaction Id</td>
   <td class='titlet'>Product Id</td>
   <td class='titlet'>Item Quantity</td>
   </tr>
   <tr><td>No Records Made</td>
     <td>No Records Made</td>
     <td>No Records Made</td>
     </tr>";
 }


?>
</table>
    
</body>
<script src="js/script.js"></script>
</html>