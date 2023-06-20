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
  
 // Taking all 5 values from the form data(input)


// sql to delete a record
//database
$sql = "DELETE FROM product WHERE prod_id=". $_REQUEST["bid"];

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
header("Location:index.php");
?>
