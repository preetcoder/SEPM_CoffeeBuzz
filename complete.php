<?php
  $db = include_once 'db.php';
  $id = $_POST['orderId'];
  

  $sql = "UPDATE orders SET status='0' WHERE orderId='$id'";
  
  if(mysqli_query($db,$sql)){
    echo "Order completed";
  }else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
  mysqli_close($conn);
  
  header('Location: /index.php');


?>