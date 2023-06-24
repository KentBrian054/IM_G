<?php
//saving data to database
     //$conn = mysqli_connect("localhost", "root", "", "im_store");
     include_once 'config.php';
         
     // Check connection
     if($conn === false){
         die("ERROR: Could not connect. "
             . mysqli_connect_error());
     }
      
     $Prod_ID =  $_REQUEST['Prod_ID'];
     $Prod_Name = $_REQUEST['Prod_Name'];
     $Prod_Price = $_REQUEST['Prod_Price'];
//database
$sql = "UPDATE product SET Prod_ID=$Prod_ID, Prod_Name='$Prod_Name', Prod_Price=$Prod_Price  WHERE Prod_ID=$Prod_ID";
  
if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
header("Location:product.php");
?>