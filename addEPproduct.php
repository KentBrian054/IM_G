<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page </title>
</head>
 
<body><script id="__bs_script__">//<![CDATA[
    document.write("<script async src='/browser-sync/browser-sync-client.js?v=2.26.7'><\/script>".replace("HOST", location.hostname));
//]]></script>

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
        $product_Name =  $_REQUEST['pname'];
        $product_Price =  $_REQUEST['price'];
        // Performing insert query execution
        // here our table name is college
        $coun = 0;


        $sqlcount = "SELECT MAX(Prod_ID) FROM product WHERE Prod_ID LIKE '($CatID)%'";
        $resultcount = $conn->query($sqlcount);

        // while ($row = $resultcount->fetch_assoc()) {
        //     $coun = $coun + 1;
        // }
        

        //  $product_ID =  "SELECT MAX(Prod_ID) +1 FROM product WHERE Prod_ID LIKE '($CatID)%'";
        // $product_ID =  $_REQUEST['CatID'] + intval($coun) + 1;

        // while ($row = $resultcount->fetch_assoc()) {
        //     // echo"console.log('$resultcount');";
        //     $product_ID =  $row['Prod_ID'] + 1;
        // }
        

        //database
        // $sql = "INSERT INTO product VALUES ($product_ID, '$product_Name', $product_Price, NOW(), $CatID)";

        // $sql = "INSERT INTO product VALUES ($product_ID, '$product_Name', $product_Price, NOW(), $CatID) ON DUPLICATE KEY UPDATE Prod_ID = $product_ID";
        $sqladdnew = "INSERT INTO product SELECT MAX(Prod_ID) + 1, '$product_Name', $product_Price, NOW(), $CatID FROM product WHERE Prod_ID LIKE '($CatID)%'";
        $sqlcomp = "SELECT MAX(Prod_ID) + 1 as Prod_ID FROM product WHERE Prod_ID LIKE '$CatID%'";
        $resulta = $conn->query($sqlcomp);

        if ($resulta->num_rows > 0) {
            while($row = $resulta->fetch_assoc()) {
            //   echo "".$row["Prod_ID"]."";
            echo "".$row["Prod_ID"]."";

            $res = intval($row["Prod_ID"]);
              $sql = "INSERT INTO product VALUES ($res, '$product_Name', $product_Price, NOW(), $CatID)";

             
              if(mysqli_query($conn, $sql)){
                echo "<h3>data stored in a database successfully."
                    . " Please browse your localhost php my admin"
                    . " to view the updated data</h3>";
            } else{
               echo "ERROR:  Sorry please try again$sql. "
                    . mysqli_error($conn);
    
            }
             }
          } else {
          }


        // if($sqlcomp == ""){
        //     if(mysqli_query($conn, $sql)){
        //         echo "<h3>data stored in a database successfully."
        //             . " Please browse your localhost php my admin"
        //             . " to view the updated data</h3>";
        //     } else{
        //        echo "ERROR:  Sorry please try again$sql. "
        //             . mysqli_error($conn);
    
        //     }
        // }elseif(mysqli_query($conn, $sql)){
        //     echo "<h3>data stored in a database successfully."
        //         . " Please browse your localhost php my admin"
        //         . " to view the updated data</h3>";
        // } else{
        //    echo "ERROR:  Sorry please try again$sql. "
        //         . mysqli_error($conn);

        // }
         
        // if(mysqli_query($conn, $sql)){
        //     echo "<h3>data stored in a database successfully."
        //         . " Please browse your localhost php my admin"
        //         . " to view the updated data</h3>";
 

        // }elseif(mysqli_query($conn, $sqladdnew)){
        //     echo "<h3>data stored in a database successfully."
        //         . " Please browse your localhost php my admin"
        //         . " to view the updated data</h3>";
        // } else{
        //    echo "ERROR:  Sorry please try again$sql. "
        //         . mysqli_error($conn);

        // }
         

        
        // Close connection
        mysqli_close($conn);
       
       
        header("Location: product.php");
        die();
        ?>
</body>
</html>