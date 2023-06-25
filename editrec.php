<!-- <!DOCTYPE html>
<html lang="en">
<head>
      <title>Basura Location</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css/tStyle.css">
   </head>   

   <body>


   <div class="topnav">
      <a class="op" href="index.php">Sales</a>
      <a href="#product.php" class="active">Product</a>
      <a href="category.php" class="op">Category</a>
      <a href="transaction.php" class="op">Transactions</a>
      <a class="WebTitle">Scarlets Pet Shop Products</a>
    </div>
    <a class="lbutton" href="product.php">Products</a>
         <h1>Updating Data in Database</h1>
         <form action="saveupdaterec.php" method="post">
               <label for="Userid">Product ID:</label></td><td>
               <label class="viewme" for="Userid"><?php echo $_REQUEST["Prod_ID"];  ?></label></td><td>
               <label for="dname">Product Name:</label></td><td>
               <input type="text" name="pname" id="pname" placeholder="Product Name" value='<?php  echo $_REQUEST["Prod_Name"];  ?>'>
               <label for="email">Product Price:</label></td><td>
               <input type="text" name="price" id="price" placeholder="Product Price" value=<?php echo $_REQUEST["Prod_Price"];  ?>>
               <label for="addres">Product Description:</label></td><td>
               <input type="text" name="desc" id="desc" placeholder="Product Description" value=<?php echo $_REQUEST["email"];  ?>>
            <input type="submit" value="Submit">
         </form>
 <?php



?>
   </body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
      <title>Basura Location</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/tStyle.css">
   </head>   

   <body>
         <h1>Storing Form data in Database</h1>
         <table>
         <form action="saveupdaterec.php" method="post">

         <tr><td>
               <label for="Userid">Id:</label></td><td>
               <input type="text" name="Prod_ID" id="Prod_ID" value=<?php echo $_REQUEST["Prod_ID"];  ?> readonly>
               </td></tr>      
             
            <tr><td>
               <label for="Prod_Name">Name:</label></td><td>
               <input type="text" name="Prod_Name" id="Prod_Name" value='<?php  echo $_REQUEST["Prod_Name"];  ?>'>
               </td></tr>

        
             
            <tr><td>
               <label for="Prod_Price">Email Address:</label></td><td>
               <input type="text" name="Prod_Price" id="Prod_Price" value=<?php echo $_REQUEST["Prod_Price"];  ?>>
               </td></tr>

               <tr><td>
                  <input type="hidden" name="cre" id="cre" value ='<?php echo $_REQUEST["credate"];  ?>'>
            <input type="submit" value="Submit">
            </td></tr>
         </form>
 <?php



?>
</table>
   </body>
</html>
