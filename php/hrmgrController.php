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
            echo '<tr class="modal-trigger" data-target="universal" onclick="get_id(&quot;'.$x['id'].'&quot;)">';
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
            echo '<tr class="modal-trigger" data-target="universal" onclick="get_id(&quot;'.$x['id'].'&quot;)">';
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
    $filter = $_POST['filter'];
    if(empty($filter)){
        $fetch = "SELECT id,requestor,requesting_position,assigned_dept,contract_status,requestor_email,approval_status,verification_status,request_date FROM tb_request_mp WHERE  step > 4 AND step < 7  ORDER BY id ASC";
        $stmt=$conn->prepare($fetch);
        $stmt->execute();
        foreach($stmt->fetchALL() as $x){
            echo '<tr class="modal-trigger" data-target="pendingModal" onclick="preview_pending(&quot;'.$x['id'].'&quot;)">';
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
            echo '<tr class="modal-trigger" data-target="pendingModal" onclick="preview_pending(&quot;'.$x['id'].'&quot;)">';
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
            echo '<tr class="modal-trigger" data-target="pendingModal" onclick="preview_pending(&quot;'.$x['id'].'&quot;)">';
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
            echo '<tr class="modal-trigger" data-target="pendingModal" onclick="preview_pending(&quot;'.$x['id'].'&quot;)">';
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
            echo '<tr class="modal-trigger" data-target="pendingModal" onclick="preview_pending(&quot;'.$x['id'].'&quot;)">';
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
            echo '<tr class="modal-trigger" data-target="pendingModal" onclick="preview_pending(&quot;'.$x['id'].'&quot;)">';
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
// PREVIEW
elseif($method == 'preview_for_approval'){
        $id = $_POST['id']; 
        $sql = "SELECT requestor,requesting_position,assigned_dept,female_num_mp,male_num_mp,contract_status,education,required_license,work_exp,job_duties,request_date FROM tb_request_mp WHERE id = '$id'";;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        foreach($stmt->fetchALL() as $x){
            echo '<div class="row">';
            echo '<div class="col s12">';
            echo '<div class="col s6">Requested By:</div>';
            echo '<div class="col s6">'.$x['requestor'].'</div>';
            echo '</div>';
            // -----------------
            echo '<div class="col s12">';
            echo '<div class="col s6">Position:</div>';
            echo '<div class="col s6">'.$x['requesting_position'].'</div>';
            echo '</div>';
            // ---------------------
            echo '<div class="col s12">';
            echo '<div class="col s6">Requesting Department:</div>';
            echo '<div class="col s6">'.$x['assigned_dept'].'</div>';
            echo '</div>';
            // ------------------
            echo '<div class="col s12">';
            echo '<div class="col s6">Requested By:</div>';
            echo '<div class="col s6">'.$x['requestor'].'</div>';
            echo '</div>';
            // ------------------
            echo '<div class="col s12">';
            echo '<div class="col s6">No. of MP Need(Male):</div>';
            echo '<div class="col s6">'.$x['male_num_mp'].'</div>';
            echo '</div>';
            // ------------------
            echo '<div class="col s12">';
            echo '<div class="col s6">No. of MP Need(Female):</div>';
            echo '<div class="col s6">'.$x['female_num_mp'].'</div>';
            echo '</div>';
            // ------------------
            echo '<div class="col s12">';
            echo '<div class="col s6">Contract Status:</div>';
            echo '<div class="col s6">'.$x['contract_status'].'</div>';
            echo '</div>';
            // ------------------
            echo '<div class="col s12">';
            echo '<div class="col s6">Education Attainment:</div>';
            echo '<div class="col s6">'.$x['education'].'</div>';
            echo '</div>';
            // ------------------
            echo '<div class="col s12">';
            echo '<div class="col s6">Required License/Certification:</div>';
            echo '<div class="col s6">'.$x['required_license'].'</div>';
            echo '</div>';
            // ------------------
            echo '<div class="col s12">';
            echo '<div class="col s6">Work Experience:</div>';
            echo '<div class="col s6">'.$x['work_exp'].'</div>';
            echo '</div>';
            // ------------------
            echo '<div class="col s12">';
            echo '<div class="col s6">Requested Date:</div>';
            echo '<div class="col s6">'.$x['request_date'].'</div>';
            echo '</div>';
            // ------------------
            echo '</div>';
            echo '<br>';
    
            echo '<div class="row">';
            echo '<div class="col s12 center">';
            echo '<div class="input-field col s4">';
            echo '<button class="btn z-depth-5 #1976d2 blue darken-2" style="border-radius:20px;" onclick="preview()">preview</button>';
            echo '</div>';
            echo '<div class="input-field col s4">';
            echo '<button class="btn z-depth-5 green" style="border-radius:20px;" onclick="approve()">approve</button>';
            echo '</div>';
            // decline
            echo '<div class="input-field col s4">';
            echo '<button class="btn z-depth-5 red modal-trigger" style="border-radius:20px;" data-target="declineModalHRD" onclick="get_id_decline(&quot;'.$id.'&quot;)">decline</button>';
            echo '</div>';
            // --------------------------------------------------------------------------------------------------------------------------
            echo '</div>';
            echo '</div>';
        }
}
// DISPLAY PENDING
elseif($method == 'displayPending'){
    $id = $_POST['id'];
    $sql = "SELECT requestor,requesting_position,assigned_dept,female_num_mp,male_num_mp,contract_status,education,required_license,work_exp,job_duties,request_date,approve_check_remarks,approve_noted_remarks,verify_check_remarks,verify_verifier_manager_remarks,verify_verifier_div_mgr_remarks,cancel_remarks FROM tb_request_mp WHERE id = '$id'";;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        foreach($stmt->fetchALL() as $x){
           
            echo '<div class="row">';
            echo '<div class="col s12">';
            echo '<div class="col s6">Requested By:</div>';
            echo '<div class="col s6">'.$x['requestor'].'</div>';
            echo '</div>';
            // -----------------
            echo '<div class="col s12">';
            echo '<div class="col s6">Position:</div>';
            echo '<div class="col s6">'.$x['requesting_position'].'</div>';
            echo '</div>';
            // ---------------------
            echo '<div class="col s12">';
            echo '<div class="col s6">Requesting Department:</div>';
            echo '<div class="col s6">'.$x['assigned_dept'].'</div>';
            echo '</div>';
            // ------------------
            echo '<div class="col s12">';
            echo '<div class="col s6">Requested By:</div>';
            echo '<div class="col s6">'.$x['requestor'].'</div>';
            echo '</div>';
            // ------------------
            echo '<div class="col s12">';
            echo '<div class="col s6">No. of MP Need(Male):</div>';
            echo '<div class="col s6">'.$x['male_num_mp'].'</div>';
            echo '</div>';
            // ------------------
            echo '<div class="col s12">';
            echo '<div class="col s6">No. of MP Need(Female):</div>';
            echo '<div class="col s6">'.$x['female_num_mp'].'</div>';
            echo '</div>';
            // ------------------
            echo '<div class="col s12">';
            echo '<div class="col s6">Contract Status:</div>';
            echo '<div class="col s6">'.$x['contract_status'].'</div>';
            echo '</div>';
            // ------------------
            echo '<div class="col s12">';
            echo '<div class="col s6">Education Attainment:</div>';
            echo '<div class="col s6">'.$x['education'].'</div>';
            echo '</div>';
            // ------------------
            echo '<div class="col s12">';
            echo '<div class="col s6">Required License/Certification:</div>';
            echo '<div class="col s6">'.$x['required_license'].'</div>';
            echo '</div>';
            // ------------------
            echo '<div class="col s12">';
            echo '<div class="col s6">Work Experience:</div>';
            echo '<div class="col s6">'.$x['work_exp'].'</div>';
            echo '</div>';
            // ------------------
            echo '<div class="col s12">';
            echo '<div class="col s6">Requested Date:</div>';
            echo '<div class="col s6">'.$x['request_date'].'</div>';
            echo '</div>';
            // ------------------
            echo '</div>';
            echo '<div class="row">';
            echo '<div class="col s12">';
            echo '<div class="col s6"><b>Asst.Mngr./Section Mngr. Remarks</b></div>';
            echo '<div class="col s6">'.$x['approve_check_remarks'].'</div>';
            echo '</div>';
            // -------------------------
            echo '<div class="col s12">';
            echo '<div class="col s6"><b>Dept.Mngr./Div Mngr. Remarks</b></div>';
            echo '<div class="col s6">'.$x['approve_noted_remarks'].'</div>';
            echo '</div>';
            // -------------------------
            echo '<div class="col s12">';
            echo '<div class="col s6"><b>Recruitment Asst.Mngr. Remarks</b></div>';
            echo '<div class="col s6">'.$x['verify_check_remarks'].'</div>';
            echo '</div>';
            // -------------------------
            echo '<div class="col s12">';
            echo '<div class="col s6"><b>HRD Mngr. Remarks</b></div>';
            echo '<div class="col s6">'.$x['verify_verifier_manager_remarks'].'</div>';
            echo '</div>';
            // -------------------------
            echo '<div class="col s12">';
            echo '<div class="col s6"><b>HRD Division Mngr. Remarks</b></div>';
            echo '<div class="col s6">'.$x['verify_verifier_div_mgr_remarks'].'</div>';
            echo '</div>';
            // -------------------------
            echo '<div class="col s12">';
            echo '<div class="col s6"><b>President Remarks</b></div>';
            echo '<div class="col s6">'.$x['cancel_remarks'].'</div>';
            echo '</div>';
            echo '</div>';
            echo '<br>';
            echo '<div class="row">';
            echo '<div class="col s12 center">';
            echo '<button class="btn z-depth-5 #1976d2 blue darken-2" style="border-radius:20px;" onclick="preview_only()">preview</button>';
            echo '</div>';
            // -------------
            echo '</div>';
            echo '</div>';
        }
}
// APPROVE BY HRD
elseif($method == 'approve_hrd'){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $level = $_POST['signatoryLevel'];
    // CHECK THE REQUEST STEP
    $check = "SELECT step FROM tb_request_mp WHERE id = '$id'";
    $stmt = $conn->prepare($check);
    $stmt->execute();
    foreach($stmt->fetchall() as $x){
        $step = $x['step'];
    }
    $compatible = $step + 1;
    if($compatible == $level){
        // APPROVING QUERY
        $approveQL = "UPDATE tb_request_mp SET verify_verifier_manager = '$name', verify_verifier_manager_remarks = 'APPROVED', verification_status = 'FOR HRD DIV. MNGR. APPROVAL', step = '5' WHERE id = '$id'";
        $stmt = $conn->prepare($approveQL);
        if($stmt->execute()){
            echo 'success';
        }else{
            echo 'fail';
        }
    }
}
// DECLINE PRF BY HRD
elseif($method == 'declineBy_hrd'){
    $prf_id = $_POST['prfID'];
    $remarks = $_POST['remarks'];
    $decline_step = 0;
    $decline_query = "UPDATE tb_request_mp SET verify_verifier_manager_remarks = '$remarks',step = '$decline_step', verification_status = 'DISAPPROVED' WHERE id = '$prf_id'";
    $stmt=$conn->prepare($decline_query);
    if($stmt->execute()){
        echo 'decline';
    }else{
        echo 'fail';
    }
}

$conn=null;
?>