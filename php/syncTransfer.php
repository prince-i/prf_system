<?php
include 'rms_conn.php';
// $id = $_POST['id'];
$reqDate = $_POST['reqDate'];
$dept = $_POST['dept'];
$position = $_POST['position'];
$contract = $_POST['contract_status'];
$female = $_POST['female'];
$male = $_POST['male'];
$approveDate = $_POST['approve_date'];
// DEFINE THE LAST CONTROL NUMBER FROM RMS DATABASE
$check_ctrl_num = "SELECT MAX(control_number) as last_prf FROM tbl_manpowerrequest";
$stmt=$conn->prepare($check_ctrl_num);
$stmt->execute();
foreach($stmt->fetchALL() as $x){
   $last_prf = $x['last_prf'];
   $array =  explode("-",$last_prf);
   $subCode =  $array[1];
}
    $yearCode = date("y");
    $newSubCode = $subCode + 1;
    if(strlen($newSubCode) == 2){
        // IF THE PRF NUMBER CODE ADD 0 on start
        $newPRFCode = $yearCode."-0".$newSubCode;
    }else{
       $newPRFCode = $yearCode."-".$newSubCode;
    }
    // INSERT TO RMS
    $sql = "INSERT INTO tbl_manpowerrequest (`list_Id`,`control_number`,`date_request`,`date_received_by_recruitment`,`requesting_department`,`position`,`contract_status`,`request_date_of_deployment`,`remarks`,`male`,`female`) VALUES ('0','$newPRFCode','$reqDate','$approveDate','$dept','$position','$contract','0000-00-00','','$male','$female')";
    $stmt = $conn->prepare($sql);
    if($stmt->execute()){
        echo 'done';
    }else{
        echo 'fail';
    }
    $conn=null;
?>