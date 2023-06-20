<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page </title>
</head>
 
<body>
        <?php

        //connects from index
        
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "scarlet");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $CatID =  $_REQUEST['CatID'];
        $product_ID =  $_REQUEST['pid'];
        $product_Description =  $_REQUEST['pdesc'];
        $product_Name =  $_REQUEST['pname'];
        $product_Price =  $_REQUEST['price'];
        // Performing insert query execution
        // here our table name is college

        //database
        $sql = "INSERT INTO product VALUES ($product_ID, '$product_Name','$Product_Description', $product_Price, NOW(), $CatID)";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 

        } else{
           echo "ERROR:  Sorry please try again$sql. "
                . mysqli_error($conn);

        }
         

        
        // Close connection
        mysqli_close($conn);
       
       
        header("Location: product.php");
        die();
        ?>
</body>
</html>