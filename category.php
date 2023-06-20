<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/tStyle.css">
</head>
<body>
<div class="topnav">
      <a class="op" href="index.php">Sales</a>
      <a href="product.php" class="op">Product</a>
      <a href="#category.php" class="active">Category</a>
      <a href="transaction.php" class="op">Transactions</a>
      <a class="WebTitle">Scarlets Pet Shop Products</a>
    </div>
    <form action="addCat.php" method="POST">
        <input type="text" id="CategoryID" name="CategoryID" placeholder="Category ID"><br>
        <input type="text" id="CategoryDesc" name="CategoryDesc" placeholder="Category Description"><br>
        <input type="submit" value="Save">
    </form>

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
   echo "<table id='myTable' border=2>
   <tr>
   <td>Category Id</td>
   <td>Category Description</td>
   </tr>";
   while($row = $result->fetch_assoc()) {
     echo "<tr><td>" . $row["Cat_ID"]. "</td>
     <td>" . $row["Cat_Desc"]. "</td>
     </tr>";
   
    }
 } else {
   echo "<h1>No Categories Made</h1>";
 }
 $conn->close();


?>
</table>
    
</body>
<script src="js/script.js"></script>
</html>