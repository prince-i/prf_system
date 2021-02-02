<?php
include '../php/Database.php';
$email = $_POST['requestor'];
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
$mail = new PHPMailer(true);
// / EMAIL PROCESS
try {
    //Server settings
    $mail->SMTPDebug = 1;                      
    $mail->isSMTP();                                          
    $mail->Host       = 'smtp.gmail.com';                    
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'falpsystemgroup2019@gmail.com';                    
    $mail->Password   = 'FALPIT-SYS2019';                              
    $mail->SMTPSecure = 'tls';        
    $mail->Port       = 587;     

    //Recipients
    $mail->setFrom('falpsystemgroup2019@gmail.com', 'PRF System');
    $mail->addAddress($email, '');    
    $mail->addReplyTo('noreply@example.com', 'No-Reply');
 
    // Content
    $mail->isHTML(true);     
    $mail->Subject = 'PRF Verified Notice';
    $mail->Body    = 
                    '
                     Safety First!<br>     
                    <br>Your PRF request is already verified as of '.$server_date_time.'.
                    <br><br><b>This is system generated mail. Please do not reply!</b>
                    <p style="font-size:10px;font-family:arial;">Furukawa Automotive System Lima Philippines</p>
                    ';
    $mail->AltBody = 'To view the message, please use an HTML compatible email viewer!';
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>