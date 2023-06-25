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
    <form action="tranAdd.php" method="POST">
        <input type="text" id="Tran_ID" name="Tran_ID" placeholder="Transaction ID"><br>
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
 $sql = "SELECT * FROM transactions";
 $result = $conn->query($sql);
 
 
 if ($result->num_rows > 0) {
   // output data of each row
   echo "<table id='myTable' border=2>
   <tr>
   <td class='titlet'>Transaction Id</td>
   <td class='titlet'>Transaction Date</td>
   </tr>";
   while($row = $result->fetch_assoc()) {
     echo "<tr><td>" . $row["Tran_ID"]. "</td>
     <td>" . $row["Tran_Date"]. "</td>
     </tr>";
   
    }
 } else {
   echo "<table id='myTable' border=2>
   <tr>
   <td class='titlet'>Transaction Id</td>
   <td class='titlet'>Transaction Date</td>
   </tr>
   <tr><td>No Transactions Made</td>
     <td>No Transactions Made</td>
     </tr>";
 }


?>
</table>
</body>
<script src="js/script.js"></script>
</html>