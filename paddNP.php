<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Scarlets Pet Shop</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css/style.css">
   </head>
   <body>
   <div class="topnav">
      <a href="product.php" class="active">Product</a>
      <a href="category.php" class="op">Category</a>
      <a href="index.php" class="op">Transactions</a>
      <a class="WebTitle">Scarlets Pet Shop Products</a>
    </div>
    <!-- <a class="lbutton" href="product.php">Products</a> -->
      <form action="paddNPproduct.php" method="post">
        <?php
 include_once 'config.php';
 if($conn === false){
     die("ERROR: Could not connect. "
         . mysqli_connect_error());
 }
 $sql = "SELECT * FROM category";
 $result = $conn->query($sql);
 
 if ($result->num_rows > 0) {
   echo "<select name='CatID' id='CatID' onchange='idnasab(this.value)'>
   <option hidden>Select Category</option>";
   while($row = $result->fetch_assoc()) {
     echo "<option value=".$row["Cat_ID"]." class='choose'>".$row["Cat_Desc"]."</option>";
    }
 } else {
   echo "<a class='lbutton' href='category.php'>Create a Category First</a>";
 }
?>
        <input type="text" name="pid" id="pid" placeholder="Select a Category for Product ID First" readonly>
        <input type="text" name="pname" id="pname" placeholder="Product Name" required>
        <input type="text" name="price" id="price" placeholder="Product Price" required>
        <input type="date" id="Prod_Exp" name="Prod_Exp" min="0000-00-00">
          
        <input type="submit" value="Add Record">
      </form>  
   </body>
   <script src="js/Pscript.js"></script>
</html>