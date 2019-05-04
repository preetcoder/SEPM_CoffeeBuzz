<?php

//print_r ($_POST);
$db = include_once 'db.php';
$product_name = $_POST['productName'];
$price = $_POST['price'];
$username = $_POST['customerName'];
$qty = $_POST['qty'];
$size = $_POST['size'];


$sql = "INSERT INTO orders(ProductName,Price,username,qty,".'status'.",size) 
VALUES('$product_name',$price,'$username','$qty','1','$size')";

if(mysqli_query($db,$sql)){
	echo "Order created";
}else{
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Success</title>
</head>
<body>
	<div class="body">
    <h1 text-align="center">Thank You</h1>
  </div>
</body>
</html>
