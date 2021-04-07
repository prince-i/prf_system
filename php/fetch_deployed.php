<?php
include 'rms_conn.php';
$method = $_POST['method'];
if($method == 'load_page'){
    $prfNo = $_POST['prf_number'];
    if(empty($prfNo)){
        // DO NOTHING
    }else{
    // QUERY
    $sql = "SELECT DISTINCT names,date_deployed,batch_no,remarks FROM tbl_deployedlist WHERE control_number = '$prfNo' ORDER BY list_id ASC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    if($stmt->rowCount() > 0){
        foreach($stmt->fetchALL() as $x){
            echo '<tr class="deployed">';
            echo '<td>'.$x['names'].'</td>';
            echo '<td>'.$x['date_deployed'].'</td>';
            echo '<td>'.$x['batch_no'].'</td>';
            echo '<td>'.$x['remarks'].'</td>';
            echo '</tr>';
        }
    }
}
}
if($method == 'target_deploy_date'){
   $prf_num = $_POST['prfid'];
    // DETECT TARGET DATE
    $sql = "SELECT request_date_of_deployment FROM tbl_manpowerrequest WHERE control_number = '$prf_num'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    foreach($stmt->fetchALL() as $x){
        echo $x['request_date_of_deployment'];
        // $date =  date_create($x['request_date_of_deployment']);
        // echo date_format($date,"F j, Y");
    }
}



$conn = null;
?>