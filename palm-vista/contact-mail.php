<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

if (isset($_POST['c-submit'])) {
    $customerName = $_POST['customer_name'];
    $mobileNumber = $_POST['mobile_number'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    try {
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'sribalajinirman.com'; 
        $mail->Port = 465;
        $mail->SMTPAuth = true; 
        $mail->Username = 'leads@sribalajinirman.com'; 
        $mail->Password = '*{CV@;}@K.eO'; 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; 
        // $mail->Timeout = 10; 

        $mail->setFrom('info@sribalajinirman.com', 'Lead From Palm Vista Website');
        $mail->addAddress('info@sribalajinirman.com', 'Lead From Palm Vista Website');
        $mail->addAddress('leads@madworks.in', 'Lead From Palm Vista Website');
        $mail->addReplyTo($email, 'Lead From Palm Vista Website');

        $mail->isHTML(true);
        $mail->Subject = "Lead From Palm Vista Website";
        $mail->Body = "Name: $customerName <br> Mobile No: $mobileNumber <br> Email Id: $email <br> Message: $message";

       
        $mail->SMTPDebug = 2; 
        $mail->Debugoutput = 'html';

        if ($mail->send()) {
            echo "Email sent successfully.";
            header('Location: ./thank-you.php'); 
            exit();
        } else {
            echo "Email not sent. Error: " . $mail->ErrorInfo;
        }
    } catch (Exception $e) {
        echo '<span>Form not submitted. Mailer Error: ' . $e->getMessage() . '</span>';
    }
}
?>
