<?php
include 'rms_conn.php';
$id = $_POST['id'];
$reqDate = $_POST['reqDate'];
$dept = $_POST['dept'];
$position = $_POST['position'];
$contract = $_POST['contract_status'];
$female = $_POST['female'];
$male = $_POST['male'];
$approveDate = $_POST['approve_date'];
$both_mp = $_POST['both_mp'];
$date_start_spe = $_POST['date_start'];
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
    }elseif(strlen($newSubCode) == 1){
        $newPRFCode = $yearCode."-00".$newSubCode;
    }
    else{
       $newPRFCode = $yearCode."-".$newSubCode;
    }

    // DEFINE CONTRACT STATUS
    if($contract == 'Probationary'){
        // IF PROBITIONARY SYSTEM WILL INPUT THE DEPLOYMENT DATE 42 DAYS FROM APPROVAL DATE
        // GET THE FUCKING ID OF DEPLOY DATE FROM FALP CALENDAR
        $fetchID = "SELECT (id + 42) as end_ID FROM prf_db.falp_calendar WHERE date_value = '$approveDate'";
        $stmt=$conn->prepare($fetchID);
        $stmt->execute();
        foreach($stmt->fetchALL() as $x){
           $endID =  $x['end_ID'];
        }

        // FETCH DEPLOY DATE 
        $fetchDate = "SELECT date_value FROM prf_db.falp_calendar WHERE id = '$endID'";
        $stmt = $conn->prepare($fetchDate);
        $stmt->execute();
        foreach($stmt->fetchALL() as $y){
           $deployDate  = $y['date_value'];
        }
        
    }
    if($contract == 'Through Manpower Provider'){
        // IF PROBITIONARY SYSTEM WILL INPUT THE DEPLOYMENT DATE 30 DAYS FROM APPROVAL DATE
        $fetchID = "SELECT (id + 30) as end_ID FROM prf_db.falp_calendar WHERE date_value = '$approveDate'";
        $stmt=$conn->prepare($fetchID);
        $stmt->execute();
        foreach($stmt->fetchALL() as $x){
           $endID =  $x['end_ID'];
        }

        // FETCH DEPLOY DATE 
        $fetchDate = "SELECT date_value FROM prf_db.falp_calendar WHERE id = '$endID'";
        $stmt = $conn->prepare($fetchDate);
        $stmt->execute();
        foreach($stmt->fetchALL() as $y){
           $deployDate  = $y['date_value'];
        }
    }
    if($contract == 'Special Project Employee'){
        $deployDate = $date_start_spe;
    }
    if($contract == 'On-the-Job Training'){
        $deployDate = $date_start_spe;
    }

    // // INSERT TO RMS
    $sql = "INSERT INTO tbl_manpowerrequest (`list_Id`,`control_number`,`date_request`,`date_received_by_recruitment`,`requesting_department`,`position`,`contract_status`,`request_date_of_deployment`,`remarks`,`male`,`female`,`both_maleandfemale`) VALUES ('0','$newPRFCode','$reqDate','$approveDate','$dept','$position','$contract','$deployDate','','$male','$female','$both_mp')";
    $stmt = $conn->prepare($sql);
    if($stmt->execute()){
        // AUTOMATIC SEND DATA TO HIRED KEY TO ENABLE VIEWING OF 2ND PAGE OF VERIFIED PRF
        $key = "INSERT INTO prf_db.hired_list_key (`id`,`prf_req_id`,`prf_number`) VALUES ('0','$id','$newPRFCode')";
        $stmt = $conn->prepare($key);
        if($stmt->execute()){
            echo 'done';
        }
    }else{
        echo 'fail';
    }
    $conn=null;
?>