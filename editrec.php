<!DOCTYPE html>
<html lang="en">
<head>
      <title>Basura Location</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
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
