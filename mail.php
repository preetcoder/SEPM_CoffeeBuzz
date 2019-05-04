<?php
    $order = 1;
    $to = "s3692351@student.rmit.edu.au";
    $subject = "Coffee Order " . $order;
    $name = $_POST['fullName'];
    $qty = $_POST['qty'];
    $size = $_POST['size'];
    $product_name = $_POST['productName'];
    $product_price = $_POST['price'];
    
    $message = '
    <html>
    <head>
    <title>Coffee Order</title>
    </head>
    <body>
    <table>
    <tr>
    <th>Name</th>
    <th>Product</th>
    <th>Qty</th>
    <th>Size</th>
    <th>Price</th>
    </tr>
    <tr>
    <td>'.$name.'</td>
    <td>'.$product_name.'</td>
    <td>'.$qty.'</td>
    <td>'.$size.'</td>
    <td>'.$product_price.'</td>
    </tr>
    </table>
    </body>
    </html>
    ';
    
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
    // More headers
    $headers .= 'From: <webmaster@example.com>' . "\r\n";
    // $headers .= 'Cc: myboss@example.com' . "\r\n";
    
    if(mail($to,$subject,$message,$headers)){
        echo "Mail Sent";
        $order++;
    }else{
        echo "Mail failed";
    }

    // $to = 's3692351@student.rmit.edu.au';
    // $firstname = $_POST["fname"];
    // $email= $_POST["email"];
    // $text= $_POST["message"];
    // $phone= $_POST["phone"];
    

    // $headers = 'MIME-Version: 1.0' . "\r\n";
    // $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    // $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    // $message ='<table style="width:100%">
    //     <tr>
    //         <td>'.$firstname.'  '.$laststname.'</td>
    //     </tr>
    //     <tr><td>Email: '.$email.'</td></tr>
    //     <tr><td>phone: '.$phone.'</td></tr>
    //     <tr><td>Text: '.$text.'</td></tr>
        
    // </table>';

    // if (@mail($to, $email, $message, $headers))
    // {
    //     echo 'The message has been sent.';
    // }else{
    //     echo 'failed';
    // }

?>
