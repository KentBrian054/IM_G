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
    <form action="addorder.php" method="POST">
        <input type="text" id="ProdID" name="ProdID" placeholder="Product ID"><br>
        <input type="text" id="TranID" name="TranID" placeholder="Transaction ID"><br>
        <input type="text" id="ItemQTY" name="ItemQTY" placeholder="Item Quantity"><br>
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
 $sql = "SELECT * FROM product";
 $result = $conn->query($sql);
 
 if ($result->num_rows > 0) {
   // output data of each row
   echo "<table id='myTable' border=2>
   <tr>
   <td>Category Id</td>
   <td>Category Description</td>
   </tr>";
   while($row = $result->fetch_assoc()) {
     echo "<tr><td>" . $row["prod_id"]. "</td>
     <td>" . $row["prod_name"]. "</td>
     </tr>";
   
    }
 } else {
   echo "0 results";
 }
 $conn->close();
    
</body>
<script src="js/script.js"></script>
</html>