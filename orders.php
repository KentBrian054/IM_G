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
      <a href="index.php" class="active">Transactions</a>
      <a class="WebTitle">Scarlets Pet Shop Products</a>
    </div>

    <form action="orderAdd.php" method="post">
        <?php
 include_once 'config.php';
 if($conn === false){
     die("ERROR: Could not connect. "
         . mysqli_connect_error());
 }
 $sql = "SELECT * FROM transactions";
 $result = $conn->query($sql);
 
 if ($result->num_rows > 0) {
   echo "<select name='TranID' id='TranID' onchange='idnasab(this.value)'>
   <option hidden>Select Transaction ID</option>";
   while($row = $result->fetch_assoc()) {
     echo "<option value=".$row["Tran_ID"]." class='choose'>".$row["Tran_ID"]."</option>";
    }
 } else {
   echo "<div class='clickemC'>
  <div class='clickemV'>
   <a class='clickemA' href='tranID.php'>Add a Transaction First</a>
  </div>
</div>";
 }
?>
        <input type="text" name="pid" id="null" placeholder="  " value="  " disabled>
        <!-- <label>Product ID</label> -->
        <?php
 include_once 'config.php';
 if($conn === false){
     die("ERROR: Could not connect. "
         . mysqli_connect_error());
 }
 $sql = "SELECT * FROM product";
 $result = $conn->query($sql);
 
 if ($result->num_rows > 0) {
   echo "<select name='Product_ID' id='Product_ID'>
   <option hidden>Product</option>";
   while($row = $result->fetch_assoc()) {
     echo "<option value=".$row["Prod_ID"]." class='choose'>".$row["Prod_Name"]."</option>";
    }
 } else {
  echo "<div class='clickemC'>
  <div class='clickemV'>
   <a class='clickemA' href='product.php'>Add a Product First</a>
  </div>
</div>";
 }
?>
        <input type="text" name="Item_Quantity" id="Item_Quantity" placeholder="Item Quantity" required>
        
          
        <input type="submit" value="Add Order">
      </form>
    
</body>
<script src="js/script.js"></script>
</html>