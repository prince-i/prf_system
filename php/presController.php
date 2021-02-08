<?php
    include_once 'Database.php';
    $method = $_POST['method'];
    if($method == 'for_approval'){
        $filter = $_POST['filter'];
        if(empty($filter)){
            $qry = "SELECT id,requestor,requesting_position,assigned_dept,contract_status,requestor_email,approval_status,verification_status,request_date FROM tb_request_mp WHERE  step ='6'  ORDER BY id DESC";
            $stmt=$conn->prepare($qry);
            $stmt->execute();
            foreach($stmt->fetchAll() as $x){
                echo '<tr class="modal-trigger" data-target="appr_pres_modal" onclick="appr_preview(&quot;'.$x['id'].'*!*'.$x['requestor_email'].'&quot;)">';
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
            $qry = "SELECT id,requestor,requesting_position,assigned_dept,contract_status,requestor_email,approval_status,verification_status,request_date FROM tb_request_mp WHERE  step ='6' AND assigned_dept LIKE '$filter%' ORDER BY id DESC";
            $stmt = $conn->prepare($qry);
            $stmt->execute();
            foreach($stmt->fetchAll() as $x){
                echo '<tr class="modal-trigger" data-target="appr_pres_modal" onclick="appr_preview(&quot;'.$x['id'].'*!*'.$x['requestor_email'].'&quot;)">';
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
    // VERIFIED REQ
    if($method == 'verified_prf'){
        $filter = $_POST['filter'];
        if(empty($filter)){
            $qry = "SELECT id,requestor,requesting_position,assigned_dept,contract_status,requestor_email,approval_status,verification_status,request_date FROM tb_request_mp WHERE  step ='7'  ORDER BY id DESC";
            $stmt=$conn->prepare($qry);
            $stmt->execute();
            foreach($stmt->fetchAll() as $x){
                echo '<tr class="modal-trigger" data-target="preview_pres" onclick="preview_id(&quot;'.$x['id'].'&quot;)">';
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
            $qry = "SELECT id,requestor,requesting_position,assigned_dept,contract_status,requestor_email,approval_status,verification_status,request_date FROM tb_request_mp WHERE  step ='7' AND assigned_dept LIKE '$filter%' ORDER BY id DESC";
            $stmt = $conn->prepare($qry);
            $stmt->execute();
            foreach($stmt->fetchAll() as $x){
                echo '<tr class="modal-trigger" data-target="preview_pres" onclick="preview_id(&quot;'.$x['id'].'&quot;)">';
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
    // CANCELLED REQ
    if($method == 'cancelled_prf'){
        $filter = $_POST['filter'];
        if(empty($filter)){
            $qry = "SELECT id,requestor,requesting_position,assigned_dept,contract_status,requestor_email,approval_status,verification_status,request_date FROM tb_request_mp WHERE  step ='0'  ORDER BY id DESC";
            $stmt=$conn->prepare($qry);
            $stmt->execute();
            foreach($stmt->fetchAll() as $x){
                echo '<tr class="modal-trigger" data-target="preview_pres" onclick="preview_id(&quot;'.$x['id'].'&quot;)">';
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
            $qry = "SELECT id,requestor,requesting_position,assigned_dept,contract_status,requestor_email,approval_status,verification_status,request_date FROM tb_request_mp WHERE  step ='0' AND assigned_dept LIKE '$filter%' ORDER BY id DESC";
            $stmt = $conn->prepare($qry);
            $stmt->execute();
            foreach($stmt->fetchAll() as $x){
                echo '<tr class="modal-trigger" data-target="preview_pres" onclick="preview_id(&quot;'.$x['id'].'&quot;)">';
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
    // PREVIEW FOR APPROVAL
    if($method == 'preview_approval'){
        $id = $_POST['id'];
        $fetch = "SELECT requestor,requesting_position,assigned_dept,female_num_mp,male_num_mp,contract_status,education,required_license,work_exp,job_duties,request_date FROM tb_request_mp WHERE id = '$id'";
        $stmt = $conn->prepare($fetch);
        $stmt->execute();
        foreach($stmt->fetchALL() as $x){
            echo '<h5 class="center" style="margin-top:-5%;">FOR APPROVAL</h5>';
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
            echo '<button class="btn z-depth-5 green" style="border-radius:20px;" onclick="approve()" id="approveBtn">approve</button>';
            echo '</div>';
            // decline --------------------------------------------------------------------
            echo '<div class="input-field col s4">';
            echo '<button class="btn z-depth-5 red modal-trigger" style="border-radius:20px;" data-target="decline_pres" onclick="get_id_decline(&quot;'.$id.'&quot;)" id="declineBtn">decline</button>';
            echo '</div>';
            // --------------------------------------------------------------------------------------------------------------------------
            echo '</div>';
            echo '</div>';
        }
    }
    // APPROVE BY PRESIDENT
    if($method == 'approve_pres_func'){
        $id=$_POST['id'];
        $level=$_POST['level'];
        $name=$_POST['name'];
        // CHECK LEVEL APPROVAL
        $fetchDoc = "SELECT step FROM tb_request_mp WHERE id = '$id' LIMIT 1";
        $stmt = $conn->prepare($fetchDoc);
        $stmt->execute();
        foreach($stmt->fetchALL() as $x){
            $step = $x['step'];
        }
        $ok = $step + 1;
        if($ok == $level){
            // APPROVAL QUERY
            $approveQL = "UPDATE tb_request_mp SET president_verify = '$name',cancel_remarks = 'APPROVED',verification_status = 'DONE',step = '7',approve_date='$server_date' WHERE id = '$id'";
            $stmt = $conn->prepare($approveQL);
            if($stmt->execute()){
                echo 'success';
            }else{
                echo 'fail';
            }
        }else{
            echo 'invalid';
        }
    }
    // DECLINE REQUEST
    if($method == 'disapprove_president'){
        $id = $_POST['id'];
        $cancel_remarks = $_POST['cancel_remarks'];
        $dec_stmt = "DISAPPROVED(".$cancel_remarks.")";
        $declineQL = "UPDATE tb_request_mp SET cancel_remarks='$dec_stmt',step = '0',verification_status= 'DISAPPROVED' WHERE id = '$id'";;
        $stmt = $conn->prepare($declineQL);
        if($stmt->execute()){
            echo 'ok';
        }else{
            echo 'fail';
        }

    }
    // PREVIEW VERIFIED
    if($method == 'preview_verified'){
        $id = $_POST['id']; 
        $sql = "SELECT requestor,requesting_position,assigned_dept,female_num_mp,male_num_mp,contract_status,education,required_license,work_exp,job_duties,request_date,approve_check_remarks,approve_noted_remarks,verify_check_remarks,verify_verifier_manager_remarks,verify_verifier_div_mgr_remarks,cancel_remarks FROM tb_request_mp WHERE id = '$id'";;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        foreach($stmt->fetchALL() as $x){
            echo '<div class="row card" style="padding:10px;">';
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
            echo '<div class="row card" style="padding:10px;">';
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

$conn = null;
?>