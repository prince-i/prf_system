<?php
include '../php/Database.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// AUTOLOAD PHPMAILER LIBRARIES
require 'vendor/autoload.php';
$mail = new PHPMailer(true);
$level = $_POST['level'];
$dept = $_POST['dept'];
// CLASSIFY APPROVERS BASED FROM REQUESTOR LEVEL AND DEPT
if($level == 1){
    // FETCH APPROVER TO EMAIL
    $recipient = $level + 1;
    $fetchUser = "SELECT username FROM prf_account WHERE acct_level = '$recipient' AND department LIKE '$dept%' LIMIT 1";
    $stmt = $conn->prepare($fetchUser);
    $stmt->execute();
    foreach($stmt->fetchALL() as $x){
        $user = $x['username'];
        $name = $x['name'];
    }
    
}

// ----------------------------------------------------------------------------


if($level == 2){
    // FETCH APPROVER TO EMAIL
    $recipient = $level + 1;
    $fetchUser = "SELECT username FROM prf_account WHERE acct_level = '$recipient' AND department LIKE '$dept%' LIMIT 1";
    $stmt = $conn->prepare($fetchUser);
    $stmt->execute();
    foreach($stmt->fetchALL() as $x){
        $user = $x['username'];
        $name = $x['name'];
    }
}

if($level == 3){
    // FETCH APPROVER TO EMAIL
    $recipient = $level + 1;
    $fetchUser = "SELECT username FROM prf_account WHERE acct_level = '$recipient' LIMIT 1";
    $stmt = $conn->prepare($fetchUser);
    $stmt->execute();
    foreach($stmt->fetchALL() as $x){
        $user = $x['username'];
        $name = $x['name'];
    }
}

if($level == 4){
    $recipient = $level + 1;
    $fetchUser = "SELECT username FROM prf_account WHERE acct_level = '$recipient' LIMIT 1";
    $stmt = $conn->prepare($fetchUser);
    $stmt->execute();
    foreach($stmt->fetchALL() as $x){
        $user = $x['username'];
        $name = $x['name'];
    }
}

if($level == 5){
    $recipient = $level + 1;
    $fetchUser = "SELECT username FROM prf_account WHERE acct_level = '$recipient' LIMIT 1";
    $stmt = $conn->prepare($fetchUser);
    $stmt->execute();
    foreach($stmt->fetchALL() as $x){
        $user = $x['username'];
        $name = $x['name'];
    }
}

if($level == 6){
    $recipient = $level + 1;
    $fetchUser = "SELECT username FROM prf_account WHERE acct_level = '$recipient' LIMIT 1";
    $stmt = $conn->prepare($fetchUser);
    $stmt->execute();
    foreach($stmt->fetchALL() as $x){
        $user = $x['username'];
        $name = $x['name'];
    }
}


// EMAIL PROCESS
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
    $mail->addAddress($user, $name);    
    $mail->addReplyTo('noreply@example.com', 'No-Reply');
 
    // Content
    $mail->isHTML(true);     
    $mail->Subject = 'PRF Approval Notice';
    $mail->Body    = 
                    '
                     Safety First!<br>     
                    <br>You have PRF document to approve. Please log in to the PRF System to view.
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