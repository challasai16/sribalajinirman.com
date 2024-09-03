<?php

  if(isset($_POST['c-submit'])){

          $name = $_POST['Name'];
          $mobile = $_POST['MobileNumber'];
          $email = $_POST['Email'];
          $comment = $_POST['Message'];
          $message = "From: $name \n Mobile No: $mobile \n Email Id: $email \n Message: $comment";


            $to = 'info@sribalajinirman.com';
            $subject = 'Lead From SBN Website';
            $headers = "From: $email \r\n";
            
            if (mail($to, $subject, $message, $headers)) {
                    echo "Message has been sent $name $mobile  $email";
                    header("Location: ./thank-you");
                } else {
                    echo 'Message could not be sent';
                }
                

  }
?>
