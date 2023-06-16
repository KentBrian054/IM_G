<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Scarlets Pet Shop</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css/webStyle.css">
   </head>
   <body>
    <h1>Scarlets Pet Shop Products</h1>
    <table>
      <form action="insertrec.php" method="post">
        <input type="text" name="CatID" id="CatID" placeholder="Product Category ID" required>
        <input type="text" name="desc" id="desc" placeholder="Product Description" required>
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
   echo "<select name='CatID' id='CatID'>
   <option hidden>Select Category</option>";
   while($row = $result->fetch_assoc()) {
     echo "<option value=".$row["Cat_Desc"]." class='choose'>".$row["Cat_ID"]."</option>";
    }
 } else {
   echo "0 results";
 }


?>
        </select>
        <input type="text" name="pid" id="pid" placeholder="Product ID" required>
        <input type="text" name="pname" id="pname" placeholder="Product Name" required>
        <input type="text" name="price" id="price" placeholder="Product Price" required>
          
        <input type="submit" value="Add Record">
        <input type="text" id="Search" onkeyup="(myFunction())" placeholder="Search for names.." title="Type in a name">
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
 $sql = "SELECT * FROM product";
 $result = $conn->query($sql);
 
 if ($result->num_rows > 0) {
   // output data of each row
   echo "<table id='myTable' border=2>
   <tr>
   <td>Product Id</td>
   <td>Product Name</td>
   <td>Product Price</td>
   <td>Product Description</td>
   <td>Action</td>
   </tr>";
   while($row = $result->fetch_assoc()) {
     echo "<tr><td>" . $row["prod_id"]. "</td>
     <td>" . $row["prod_name"]. "</td>
     <td> " . $row["prod_price"].  "</td>
     <td>" . $row["prod_desc"] .   "</td>
     <td><a href=deleterec.php?bid=".$row["prod_id"]." class='delete'>Delete </a>
       <a href='editrec.php?bid=".$row["prod_id"]."&name=". $row["prod_name"]."&address=".$row["prod_price"]."&email=".$row["prod_desc"]. "' class='button'>Edit </a>    </td>
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

