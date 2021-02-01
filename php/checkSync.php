<?php
include 'Database.php';
$method = $_POST['method'];
if($method == 'check_sync'){
    $query = "SELECT id,sync_status,request_date,assigned_dept,requesting_position,contract_status,female_num_mp,male_num_mp,approve_date FROM tb_request_mp WHERE step ='7' AND sync_status =''";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    foreach($stmt->fetchall() as $x){
        // echo $x['id'];
        // echo $x['sync_status'];
        if($x['sync_status'] == ''){
            $x['sync_status'] = 'Syncing...';
        }
        echo '<tr id="sync_data" onclick="sync_data(&quot;'.$x['id'].'~!~'.$x['request_date'].'~!~'.$x['assigned_dept'].'~!~'.$x['requesting_position'].'~!~'.$x['contract_status'].'~!~'.$x['female_num_mp'].'~!~'.$x['male_num_mp'].'~!~'.$x['approve_date'].'&quot;)">';
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











// include 'rms_conn.php';
// $method = $_POST['method'];
// if($method == 'transfer'){
//     $idTransfer = $_POST['id'];
//     // SELECT DATA OF THE GIVEN ID ABOVE FOR TRANSFER
//     $collect = "SELECT request_date,assigned_dept,requesting_position,contract_status,male_num_mp,female_num_mp FROM tb_request_mp WHERE id = '$idTransfer'";
//     $stmt = $conn->prepare($collect);
//     $stmt->execute();
//     foreach($stmt->fetchall() as $x){
//         // ?PUBLIC
//         $requestDate = $x['request_date'];
//         $dept = $x['assigned_dept'];
//         $position = $x['requesting_position'];
//         $contract_status = $x['contract_status'];
//         $male = $x['male_num_mp'];
//         $female = $x['female_num_mp'];
//     }
//     // CONNECTION TO RMS
//     try{
//         $rms = new PDO ("mysql:host=localhost;rms_db",'root','');
//         // echo 'yamete';
//     }catch(PDOException $e){
//         echo "NO CONNECTION" .$e->getMessage();
//     }
    

// }
$conn=null;
?>