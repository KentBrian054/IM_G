<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page </title>
</head>
 
<body>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "scarlet");
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
        $CatID =  $_REQUEST['CatID'];
        $product_ID =  $_REQUEST['pid'];
        $product_Name =  $_REQUEST['pname'];
        $product_Price =  $_REQUEST['price'];
        $coun = 0;
        $sqlcount = "SELECT MAX(Prod_ID) FROM product WHERE Prod_ID LIKE '($CatID)%'";
        $resultcount = $conn->query($sqlcount);
        $sqladdnew = "INSERT INTO product SELECT MAX(Prod_ID) + 1, '$product_Name', $product_Price, NOW(), $CatID FROM product WHERE Prod_ID LIKE '($CatID)%'";
        $sqlcomp = "SELECT MAX(Prod_ID) + 1 as Prod_ID FROM product WHERE Prod_ID LIKE '$CatID%'";
        $resulta = $conn->query($sqlcomp);
        if ($resulta->num_rows > 0) {
            while($row = $resulta->fetch_assoc()) {
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
        mysqli_close($conn);
        header("Location: product.php");
        die();
        ?>
</body>
</html>