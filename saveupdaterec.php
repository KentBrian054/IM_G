<?php
//saving data to database
     //$conn = mysqli_connect("localhost", "root", "", "im_store");
     include_once 'config.php';
         
     // Check connection
     if($conn === false){
         die("ERROR: Could not connect. "
             . mysqli_connect_error());
     }
      
     $bid =  $_REQUEST['pid'];
     $bname = $_REQUEST['pname'];
     $email = $_REQUEST['price'];
     $address =  $_REQUEST['desc'];
//database
$sql = "UPDATE product SET prod_id=$bid, prod_name='$bname', prod_price='$email',prod_desc='$address'  WHERE prod_id=$bid";
  
if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
header("Location:product.php");
?>