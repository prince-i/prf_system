<?php
include_once 'Database.php';
$method = $_POST['method'];
if($method == 'for_approval'){
    $filter = $_POST['filter'];
    if(empty($filter)){
        $fetch = "SELECT id,requestor,requesting_position,assigned_dept,contract_status,requestor_email,approval_status,verification_status,request_date FROM tb_request_mp WHERE  step ='4'  ORDER BY id ASC";
        $stmt=$conn->prepare($fetch);
        $stmt->execute();
        foreach($stmt->fetchALL() as $x){
            echo '<tr class="modal-trigger" data-target="preview_pending" onclick="rt_preview_pending(&quot;'.$x['id'].'&quot;)">';
            echo '<td>'.$x['id'].'</td>';
            echo '<td>'.$x['requesting_position'].'</td>';
            echo '<td>'.$x['assigned_dept'].'</td>';
            echo '<td>'.$x['contract_status'].'</td>';
            echo '<td>'.$x['requestor'].'</td>';
            echo '<td>'.$x['requestor_email'].'</td>';
            echo '<td>'.$x['approval_status'].'</td>';
            echo '<td>'.$x['verification_status'].'</td>';
            echo '<td>'.$x['request_date'].'</td>';
            echo '</tr>';
        }
    }else{
        $fetch = "SELECT id,requestor,requesting_position,assigned_dept,contract_status,requestor_email,approval_status,verification_status,request_date FROM tb_request_mp WHERE  step ='4' AND assigned_dept LIKE '$filter%' ORDER BY id ASC";
        $stmt=$conn->prepare($fetch);
        $stmt->execute();
        foreach($stmt->fetchALL() as $x){
            echo '<tr class="modal-trigger" data-target="preview_pending" onclick="rt_preview_pending(&quot;'.$x['id'].'&quot;)">';
            echo '<td>'.$x['id'].'</td>';
            echo '<td>'.$x['requesting_position'].'</td>';
            echo '<td>'.$x['assigned_dept'].'</td>';
            echo '<td>'.$x['contract_status'].'</td>';
            echo '<td>'.$x['requestor'].'</td>';
            echo '<td>'.$x['requestor_email'].'</td>';
            echo '<td>'.$x['approval_status'].'</td>';
            echo '<td>'.$x['verification_status'].'</td>';
            echo '<td>'.$x['request_date'].'</td>';
            echo '</tr>';
        }
    }
}
// PENDING
elseif($method == 'pending_view'){
    if(empty($filter)){
        $fetch = "SELECT id,requestor,requesting_position,assigned_dept,contract_status,requestor_email,approval_status,verification_status,request_date FROM tb_request_mp WHERE  step > 4 AND step < 7  ORDER BY id ASC";
        $stmt=$conn->prepare($fetch);
        $stmt->execute();
        foreach($stmt->fetchALL() as $x){
            echo '<tr class="modal-trigger" data-target="preview_pending" onclick="rt_preview_pending(&quot;'.$x['id'].'&quot;)">';
            echo '<td>'.$x['id'].'</td>';
            echo '<td>'.$x['requesting_position'].'</td>';
            echo '<td>'.$x['assigned_dept'].'</td>';
            echo '<td>'.$x['contract_status'].'</td>';
            echo '<td>'.$x['requestor'].'</td>';
            echo '<td>'.$x['requestor_email'].'</td>';
            echo '<td>'.$x['approval_status'].'</td>';
            echo '<td>'.$x['verification_status'].'</td>';
            echo '<td>'.$x['request_date'].'</td>';
            echo '</tr>';
        }
    }else{
        $fetch = "SELECT id,requestor,requesting_position,assigned_dept,contract_status,requestor_email,approval_status,verification_status,request_date FROM tb_request_mp WHERE step > 4 AND step < 7 AND assigned_dept LIKE '$filter%' ORDER BY id ASC";
        $stmt=$conn->prepare($fetch);
        $stmt->execute();
        foreach($stmt->fetchALL() as $x){
            echo '<tr class="modal-trigger" data-target="preview_pending" onclick="rt_preview_pending(&quot;'.$x['id'].'&quot;)">';
            echo '<td>'.$x['id'].'</td>';
            echo '<td>'.$x['requesting_position'].'</td>';
            echo '<td>'.$x['assigned_dept'].'</td>';
            echo '<td>'.$x['contract_status'].'</td>';
            echo '<td>'.$x['requestor'].'</td>';
            echo '<td>'.$x['requestor_email'].'</td>';
            echo '<td>'.$x['approval_status'].'</td>';
            echo '<td>'.$x['verification_status'].'</td>';
            echo '<td>'.$x['request_date'].'</td>';
            echo '</tr>';
        }
    }
}
// VERIFIED VIEW
elseif($method == 'verified_view'){
    $filter = $_POST['filter'];
    if(empty($filter)){
        $fetch = "SELECT id,requestor,requesting_position,assigned_dept,contract_status,requestor_email,approval_status,verification_status,request_date FROM tb_request_mp WHERE  step ='7'  ORDER BY id ASC";
        $stmt=$conn->prepare($fetch);
        $stmt->execute();
        foreach($stmt->fetchALL() as $x){
            echo '<tr class="modal-trigger" data-target="preview_pending" onclick="rt_preview_pending(&quot;'.$x['id'].'&quot;)">';
            echo '<td>'.$x['id'].'</td>';
            echo '<td>'.$x['requesting_position'].'</td>';
            echo '<td>'.$x['assigned_dept'].'</td>';
            echo '<td>'.$x['contract_status'].'</td>';
            echo '<td>'.$x['requestor'].'</td>';
            echo '<td>'.$x['requestor_email'].'</td>';
            echo '<td>'.$x['approval_status'].'</td>';
            echo '<td>'.$x['verification_status'].'</td>';
            echo '<td>'.$x['request_date'].'</td>';
            echo '</tr>';
        }
    }else{
        $fetch = "SELECT id,requestor,requesting_position,assigned_dept,contract_status,requestor_email,approval_status,verification_status,request_date FROM tb_request_mp WHERE  step ='7' AND assigned_dept LIKE '$filter%' ORDER BY id ASC";
        $stmt=$conn->prepare($fetch);
        $stmt->execute();
        foreach($stmt->fetchALL() as $x){
            echo '<tr class="modal-trigger" data-target="preview_pending" onclick="rt_preview_pending(&quot;'.$x['id'].'&quot;)">';
            echo '<td>'.$x['id'].'</td>';
            echo '<td>'.$x['requesting_position'].'</td>';
            echo '<td>'.$x['assigned_dept'].'</td>';
            echo '<td>'.$x['contract_status'].'</td>';
            echo '<td>'.$x['requestor'].'</td>';
            echo '<td>'.$x['requestor_email'].'</td>';
            echo '<td>'.$x['approval_status'].'</td>';
            echo '<td>'.$x['verification_status'].'</td>';
            echo '<td>'.$x['request_date'].'</td>';
            echo '</tr>';
        }
    }
}
// CANCEL VIEW
elseif($method == 'cancel_view'){
    $filter = $_POST['filter'];
    if(empty($filter)){
        $fetch = "SELECT id,requestor,requesting_position,assigned_dept,contract_status,requestor_email,approval_status,verification_status,request_date FROM tb_request_mp WHERE  step ='0'  ORDER BY id ASC";
        $stmt=$conn->prepare($fetch);
        $stmt->execute();
        foreach($stmt->fetchALL() as $x){
            echo '<tr class="modal-trigger" data-target="preview_pending" onclick="rt_preview_pending(&quot;'.$x['id'].'&quot;)">';
            echo '<td>'.$x['id'].'</td>';
            echo '<td>'.$x['requesting_position'].'</td>';
            echo '<td>'.$x['assigned_dept'].'</td>';
            echo '<td>'.$x['contract_status'].'</td>';
            echo '<td>'.$x['requestor'].'</td>';
            echo '<td>'.$x['requestor_email'].'</td>';
            echo '<td>'.$x['approval_status'].'</td>';
            echo '<td>'.$x['verification_status'].'</td>';
            echo '<td>'.$x['request_date'].'</td>';
            echo '</tr>';
        }
    }else{
        $fetch = "SELECT id,requestor,requesting_position,assigned_dept,contract_status,requestor_email,approval_status,verification_status,request_date FROM tb_request_mp WHERE  step ='0' AND assigned_dept LIKE '$filter%' ORDER BY id ASC";
        $stmt=$conn->prepare($fetch);
        $stmt->execute();
        foreach($stmt->fetchALL() as $x){
            echo '<tr class="modal-trigger" data-target="preview_pending" onclick="rt_preview_pending(&quot;'.$x['id'].'&quot;)">';
            echo '<td>'.$x['id'].'</td>';
            echo '<td>'.$x['requesting_position'].'</td>';
            echo '<td>'.$x['assigned_dept'].'</td>';
            echo '<td>'.$x['contract_status'].'</td>';
            echo '<td>'.$x['requestor'].'</td>';
            echo '<td>'.$x['requestor_email'].'</td>';
            echo '<td>'.$x['approval_status'].'</td>';
            echo '<td>'.$x['verification_status'].'</td>';
            echo '<td>'.$x['request_date'].'</td>';
            echo '</tr>';
        }
    }
}
?>