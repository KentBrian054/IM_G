<!DOCTYPE html>
<html lang="en">
<head>
      <title>Basura Location</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
   </head>   

   <body>
   <div class="topnav">
      <a href="product.php" class="active">Product</a>
      <a href="category.php" class="op">Category</a>
      <a href="index.php" class="op">Transactions</a>
      <a class="WebTitle">Scarlets Pet Shop Products</a>
    </div>
         <table>
         <form action="saveupdaterec.php" method="post">

         <tr><td>
               <label for="Userid">Product ID:</label></td><td>
               <input type="text" name="Prod_ID" id="Prod_ID" value=<?php echo $_REQUEST["Prod_ID"];  ?> readonly>
               </td></tr>      
             
            <tr><td>
               <label for="Prod_Name">Product Name:</label></td><td>
               <input type="text" name="Prod_Name" id="Prod_Name" value='<?php  echo $_REQUEST["Prod_Name"];  ?>'>
               </td></tr>

        
             
            <tr><td>
               <label for="Prod_Price">Price:</label></td><td>
               <input type="text" name="Prod_Price" id="Prod_Price" value=<?php echo $_REQUEST["Prod_Price"];  ?>>
               </td></tr>

               <tr><td>
                  <input type="hidden" name="cre" id="cre" value ='<?php echo $_REQUEST["credate"];  ?>'>
            <input type="submit" value="Update">
            </td></tr>
         </form>
 <?php



?>
</table>
   </body>
</html>
