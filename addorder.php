<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    //connects from index
    // servername => localhost
    // username => root
    // password => empty
    // database name => staff
    //$conn = mysqli_connect("localhost", "root", "", "im_store");
    include_once 'config.php';
    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. ". mysqli_connect_error());
    }
    // Taking all 5 values from the form data(input)
    $TranID =  $_REQUEST['TranID'];
    $ProdID = $_REQUEST['ProdID'];
    $ProdQTY = $_REQUEST['ItemQTY'];
    //database
    $UPsql = "INSERT INTO Transactions VALUES ($TranID, NOW()) WHERE NOT EXISTS (SELECT TranID FROM Transactions WHERE TranID=$TranID)";
    $sql = "INSERT INTO orders VALUES ($TranID, $ProdID, $ProdQTY)";
    if(mysqli_query($conn, $UPsql)){
        echo "<h3>data stored in a database successfully.". " Please browse your localhost php my admin". " to view the updated data</h3>";
    } else{
        echo "ERROR:  Sorry please try again$sql. ". mysqli_error($conn);
    } 
    if(mysqli_query($conn, $sql)){
        echo "<h3>data stored in a database successfully.". " Please browse your localhost php my admin". " to view the updated data</h3>";
    } else{
        echo "ERROR:  Sorry please try again$sql. ". mysqli_error($conn);
    } 
    // Close connection
    mysqli_close($conn);
    header("Location: index.php");
    die();
    ?>
</body>
</html>