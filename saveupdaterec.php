<?php
     $conn = mysqli_connect("localhost", "root", "", "people");
         
     // Check connection
     if($conn === false){
         die("ERROR: Could not connect. "
             . mysqli_connect_error());
     }
      
     $bid =  $_REQUEST['pid'];
     $bname = $_REQUEST['pname'];
     $email = $_REQUEST['price'];
     $address =  $_REQUEST['desc'];

$sql = "UPDATE product SET prod_id=$bid, prod_name='$bname', prod_price='$address',prod_desc='$email'  WHERE id=$bid";
  
if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
//header("Location:index.php");
?>