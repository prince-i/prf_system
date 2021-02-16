<?php
include 'Database.php';
$method = $_POST['method'];
if($method == 'check_sync'){
    $query = "SELECT id,sync_status,request_date,assigned_dept,date_start,requesting_position,contract_status,female_num_mp,male_num_mp,approve_date,both_mp FROM tb_request_mp WHERE step ='7' AND sync_status =''";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    foreach($stmt->fetchall() as $x){
        // echo $x['id'];
        // echo $x['sync_status'];
        if($x['sync_status'] == ''){
            $x['sync_status'] = 'Syncing...';
        }
        echo '<tr id="sync_data" onclick="sync_data(&quot;'.$x['id'].'~!~'.$x['request_date'].'~!~'.$x['assigned_dept'].'~!~'.$x['requesting_position'].'~!~'.$x['contract_status'].'~!~'.$x['female_num_mp'].'~!~'.$x['male_num_mp'].'~!~'.$x['approve_date'].'~!~'.$x['both_mp'].'~!~'.$x['date_start'].'&quot;)">';
        echo '<td>'.$x['id'].'</td>';
        echo '<td>'.$x['sync_status'].'</td>';
        echo '</tr>';
    }

}
if($method == 'update_synced'){
    $id = $_POST['id'];
    $updateQL = "UPDATE tb_request_mp SET sync_status = 'ok' WHERE id = '$id'";
    $stmt =$conn->prepare($updateQL);
    if($stmt->execute()){
        echo 'success';
    }else{
        echo 'fail';
    }
}

$conn=null;
?>