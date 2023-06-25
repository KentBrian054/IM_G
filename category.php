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
      <a href="#category.php" class="active">Category</a>
      <a href="index.php" class="op">Transactions</a>
      <a class="WebTitle">Scarlets Pet Shop Products</a>
    </div>
    <form action="addCat.php" method="POST">
        <input type="text" id="CategoryID" name="CategoryID" placeholder="Category ID"><br>
        <input type="text" id="CategoryDesc" name="CategoryDesc" placeholder="Category Description"><br>
        <input type="submit" value="Save">
    </form>

    <?php
 include_once 'config.php';
 if($conn === false){
     die("ERROR: Could not connect. "
         . mysqli_connect_error());
 }
 $sql = "SELECT * FROM category";
 $result = $conn->query($sql);
 
 if ($result->num_rows > 0) {
   echo "<table id='myTable' border=2>
   <tr>
   <td class='titlet'>Category Id</td>
   <td class='titlet'>Category Description</td>
   </tr>";
   while($row = $result->fetch_assoc()) {
     echo "<tr><td>" . $row["Cat_ID"]. "</td>
     <td>" . $row["Cat_Desc"]. "</td>
     </tr>";
   
    }
 } else {
   echo "<table id='myTable' border=2>
   <tr>
   <td class='titlet'>Category Id</td>
   <td class='titlet'>Category Description</td>
   </tr>
   <tr><td>No Categories Made</td>
     <td>Ass a Category First</td>
     </tr>";
 }
 $conn->close();


?>
</table>
    
</body>
<script src="js/script.js"></script>
</html>