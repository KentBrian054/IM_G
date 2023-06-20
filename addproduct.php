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
    <a class="lbutton" href="product.php">Products</a>



    
      <form action="insertrec.php" method="post">
      <input type="text" name="pid" id="pid" placeholder="Product ID">
      <input type="text" name="pdesc" id="pdesc" placeholder="Product Description">
      <!-- <label name="pid" id="pid" class="viewme">Product ID</label> -->
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
 $sql = "SELECT * FROM category";
 $result = $conn->query($sql);
 
 if ($result->num_rows > 0) {
   // output data of each row
   echo "<select name='CatID' id='CatID' onchange='idnasab(this.value)'>
   <option hidden>Select Category</option>";
   while($row = $result->fetch_assoc()) {
     echo "<option value=".$row["Cat_ID"]." class='choose'>".$row["Cat_Desc"]."</option>";
    }
 } else {
   echo "<a class='lbutton' href='category.php'>Create a Category First</a>";
 }


?>
        
        <input type="text" name="pname" id="pname" placeholder="Product Name" required>
        <input type="text" name="price" id="price" placeholder="Product Price" required>
          
        <input type="submit" value="Add Record">
      </form>
         
   </body>
   <script src="js/jsScript.js"></script>
</html>