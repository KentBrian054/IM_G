<!DOCTYPE html>
<html lang="en">
<head>
      <title>Basura Location</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css/style.css">
   </head>   

   <body>
         <h1>Updating Data in Database</h1>
         <form action="saveupdaterec.php" method="post">
               <label for="Userid">Product ID:</label></td><td>
               <input type="text" name="pid" id="pid" placeholder="Product ID" value=<?php echo $_REQUEST["bid"];  ?> >
               <label for="dname">Product Name:</label></td><td>
               <input type="text" name="pname" id="pname" placeholder="Product Name" value='<?php  echo $_REQUEST["name"];  ?>'>
               <label for="email">Product Price:</label></td><td>
               <input type="text" name="price" id="price" placeholder="Product Price" value=<?php echo $_REQUEST["address"];  ?>>
               <label for="addres">Product Description:</label></td><td>
               <input type="text" name="desc" id="desc" placeholder="Product Description" value=<?php echo $_REQUEST["email"];  ?>>
            <input type="submit" value="Submit">
         </form>
 <?php



?>
   </body>
</html>

