<?php
    include 'Database.php';
    $method = $_POST['method'];
    if($method == 'load_for_approval'){
            $department = $_POST['department'];
            $query = "SELECT id,requestor,requesting_position,assigned_dept,contract_status,requestor_email,approval_status,verification_status,request_date FROM tb_request_mp WHERE  step ='1'  AND assigned_dept LIKE '$department%' ORDER BY id ASC";
            $stmt = $conn->prepare($query);
            $stmt->execute();
            if($stmt->rowCount() > 0){
                foreach($stmt->fetchAll() as $x){
                    echo '<tr class="modal-trigger" data-target="preview_request" onclick="preview_approver_summary(&quot;'.$x['id'].'&quot;)">';
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
    if($method == 'preview_summary'){
        $id = $_POST['id']; 
        $sql = "SELECT requestor,requesting_position,assigned_dept,female_num_mp,male_num_mp,contract_status,education,required_license,work_exp,job_duties,request_date FROM tb_request_mp WHERE id = '$id'";;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        foreach($stmt->fetchALL() as $x){
            echo '<h5 class="center" style="margin-top:-15%;">FOR APPROVAL CHECKING</h5>';
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
            echo '<button class="btn z-depth-5 green" style="border-radius:20px;" onclick="check_request()">approve</button>';
            echo '</div>';
            // decline
            echo '<div class="input-field col s4">';
            echo '<button class="btn z-depth-5 red modal-trigger" style="border-radius:20px;" data-target="declineCheckModal" onclick="get_id_check_decline(&quot;'.$id.'&quot;)">decline</button>';
            echo '</div>';
            // 
            echo '</div>';
            echo '</div>';
        }
    }
    // PREVIEW SUMMARY NOTE
    elseif($method == 'preview_note'){
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
            echo '<button class="btn z-depth-5 green" style="border-radius:20px;" onclick="note_request()">approve</button>';
            echo '</div>';
            // decline
            echo '<div class="input-field col s4">';
            echo '<button class="btn z-depth-5 red modal-trigger" data-target="declineNoteModal" style="border-radius:20px;" onclick="get_id_note(&quot;'.$id.'&quot;)">decline</button>';
            echo '</div>';
            // 
            echo '</div>';
            echo '</div>';
        }
    }
    // LOAD FOR APPROVAL NOTE
    elseif($method == 'load_for_approval_note'){
        $department = $_POST['department'];
        $query = "SELECT id,requestor,requesting_position,assigned_dept,contract_status,requestor_email,approval_status,verification_status,request_date FROM tb_request_mp WHERE step ='2' AND assigned_dept LIKE '$department%' ORDER BY id ASC";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        if($stmt->rowCount() > 0){
            foreach($stmt->fetchAll() as $x){
                echo '<tr class="modal-trigger" data-target="preview_request" onclick="preview_approver_note(&quot;'.$x['id'].'&quot;)">';
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
    // COUNT APPROVAL NOTE
    elseif($method == 'count_for_approval_note'){
        $department = $_POST['department'];
        $query = "SELECT COUNT(id) as total_for_note FROM tb_request_mp WHERE step = '2' AND assigned_dept LIKE '$department%'";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        if($stmt->rowCount()>0){
            foreach($stmt->fetchALL() as $x){
                echo $x['total_for_note'];
            }
        }else{
            echo '0';
        }
    }
    // STEP 2 APPROVAL
    elseif($method == 'approval_check_func'){
        $id = $_POST['id'];
        $name = ucwords($_POST['name']);
        $level = $_POST['level'];
        // CHECK REQUEST LEVEL 
        $check_level_req = "SELECT step FROM tb_request_mp WHERE id = '$id'";
        $stmt =$conn->prepare($check_level_req);
        $stmt->execute();
        foreach($stmt->fetchALL() as $x){
            $step = $x['step'];
        }
            $compatible = $step + 1;
            if($compatible == $level){
                $step_two_appr = "UPDATE tb_request_mp SET step = '2',approve_check_by = '$name',approve_check_remarks = 'APPROVED',approval_status = 'FOR APPROVAL OF DEPT. MNGR./SECTION MNGR.' WHERE id = '$id'";
                $stmt = $conn->prepare($step_two_appr);
                if($stmt->execute()){
                    echo 'true';
                }else{
                    echo 'false';
                }
            }else{
                echo 'unauthorized';
            }
        
    }
    // STEP 3 APPROVAL
elseif($method == 'approval_note_func'){
        $id = $_POST['id'];
        $name = ucwords($_POST['name']);
        $level = $_POST['level'];
        // CHECK REQUEST LEVEL 
        $check_level_req = "SELECT step FROM tb_request_mp WHERE id = '$id'";
        $stmt =$conn->prepare($check_level_req);
        $stmt->execute();
        foreach($stmt->fetchALL() as $x){
            $step = $x['step'];
        }
            $compatible = $step + 1;
            if($compatible == $level){
                $step_two_appr = "UPDATE tb_request_mp SET step = '3',approve_noted_by = '$name',approve_noted_remarks = 'APPROVED',approval_status = 'APPROVED',verification_status = 'FOR APPROVAL OF ASST. RECRUITMENT MANAGER'  WHERE id = '$id'";
                $stmt = $conn->prepare($step_two_appr);
                if($stmt->execute()){
                    echo 'true';
                }else{
                    echo 'false';
                }
            }else{
                echo 'unauthorized';
            }
    }
    elseif($method == 'load_approved'){
        $department = $_POST['department'];
        $query = "SELECT id,requestor,requesting_position,assigned_dept,contract_status,requestor_email,approval_status,verification_status,request_date FROM tb_request_mp WHERE step ='3' AND assigned_dept LIKE '$department%' ORDER BY id ASC";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        if($stmt->rowCount() > 0){
            foreach($stmt->fetchAll() as $x){
                echo '<tr class="modal-trigger" data-target="preview_request" onclick="preview_approved_req(&quot;'.$x['id'].'&quot;)">';
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
    // PREVIEW APPROVED 
    elseif($method == 'preview_approved'){
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
            echo '<button class="btn z-depth-5 #1976d2 blue darken-2" style="border-radius:20px;" onclick="preview()">preview</button>';
            echo '</div>';
            echo '</div>';
        }
    }
// COUNT APPROVED PRF LEVEL 3
elseif($method == 'count_approved_prf'){
    $department = $_POST['department'];
    $query = "SELECT COUNT(id) as approved FROM tb_request_mp WHERE step = '3' AND assigned_dept LIKE '$department%'";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    if($stmt->rowCount()>0){
        foreach($stmt->fetchALL() as $x){
            echo $x['approved'];
        }
    }else{
        echo '0';
    }
}
// COUNT VERIFIED
elseif($method == 'count_verify'){
    $department = $_POST['department'];
    $query = "SELECT COUNT(id) as verify FROM tb_request_mp WHERE step = '7' AND assigned_dept LIKE '$department%'";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    if($stmt->rowCount()>0){
        foreach($stmt->fetchALL() as $x){
            echo $x['verify'];
        }
    }else{
        echo '0';
    }
}
// LOAD VERIFIED VIEW
elseif($method == 'load_verified_view'){
        $department = $_POST['department'];
        $query = "SELECT id,requestor,requesting_position,assigned_dept,contract_status,requestor_email,approval_status,verification_status,request_date FROM tb_request_mp WHERE step ='7' AND assigned_dept LIKE '$department%' ORDER BY id ASC";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        if($stmt->rowCount() > 0){
            foreach($stmt->fetchAll() as $x){
                echo '<tr class="modal-trigger" data-target="preview_request" onclick="preview_approved_req(&quot;'.$x['id'].'&quot;)">';
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
// LOAD CANCELLED PRF
elseif($method == 'cancel_view'){
        $department = $_POST['department'];
        $query = "SELECT id,requestor,requesting_position,assigned_dept,contract_status,requestor_email,approval_status,verification_status,request_date FROM tb_request_mp WHERE step ='0' AND assigned_dept LIKE '$department%' ORDER BY id ASC";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        if($stmt->rowCount() > 0){
            foreach($stmt->fetchAll() as $x){
                echo '<tr class="modal-trigger" data-target="preview_request" onclick="preview_canceled_req(&quot;'.$x['id'].'&quot;)">';
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
// COUNT CANCELLED 
elseif($method == 'count_cancel'){
    $department = $_POST['department'];
    $query = "SELECT COUNT(id) as canceled FROM tb_request_mp WHERE step = '0' AND assigned_dept LIKE '$department%'";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    if($stmt->rowCount()>0){
        foreach($stmt->fetchALL() as $x){
            echo $x['canceled'];
        }
    }else{
        echo '0';
    }
}
// PREVIEW CANCELLED
elseif($method == 'preview_canceled'){
    $id = $_POST['id']; 
        $sql = "SELECT requestor,requesting_position,assigned_dept,female_num_mp,male_num_mp,contract_status,education,required_license,work_exp,job_duties,request_date,approve_check_remarks,approve_noted_remarks,verify_check_remarks,verify_verifier_manager_remarks,verify_verifier_div_mgr_remarks,cancel_remarks FROM tb_request_mp WHERE id = '$id'";;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        foreach($stmt->fetchALL() as $x){
            echo '<h5 class="center" style="margin-top:-30px;">Cancelled PRF</h5>';
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
            echo '</div>';
            // ---------------------------------z
            // ------------------
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
            // -------------------------
            echo '</div>';
            echo '<br>';
            echo '<div class="row">';
            echo '<div class="col s12 center">';
            echo '<button class="btn z-depth-5 #1976d2 blue darken-2" style="border-radius:20px;" onclick="preview()">preview</button>';
            echo '</div>';
            echo '</div>';
        }
}
// DECLINE BY CHECK APPROVER
elseif($method == 'decline_checker_func'){
    $id = $_POST['id'];
    $level = $_POST['level'];
    $remarks = $_POST['remarks'];
    $decline_stmt = "DISAPPROVED (".$remarks.")";
    // CHECK LEVEL
    $check_level_req = "SELECT step FROM tb_request_mp WHERE id = '$id'";
    $stmt =$conn->prepare($check_level_req);
    $stmt->execute();
    foreach($stmt->fetchALL() as $x){
        $step = $x['step'];
    }
        $compatible = $step + 1;
        if($compatible == $level){
            // echo 'authorized';
            $decline_apprCheck = "UPDATE tb_request_mp SET step = '0', approve_check_remarks = '$decline_stmt',approval_status = 'DISAPPROVED', verification_status = 'DISAPPROVED' WHERE id = '$id'";
            $stmt = $conn->prepare($decline_apprCheck);
            $stmt->execute();
            echo 'success';
        }else{
            echo 'unauthorized';
        }

}
// DECLINE NOTE
elseif($method == 'decline_note_func'){
    $id = $_POST['id'];
    $level = $_POST['level'];
    $remarks = $_POST['remarks'];
    $decline_note = "DISAPPROVED (".$remarks.")";
    // CHECK LEVEL
    $check_level_req = "SELECT step FROM tb_request_mp WHERE id = '$id'";
    $stmt =$conn->prepare($check_level_req);
    $stmt->execute();
    foreach($stmt->fetchALL() as $x){
        $step = $x['step'];
    }
        $compatible = $step + 1;
        if($compatible == $level){
            // echo 'authorized';
            $decline_apprNote = "UPDATE tb_request_mp SET step = '0', approve_noted_remarks = '$decline_note',approval_status = 'DISAPPROVED',verification_status = 'DISAPPROVED' WHERE id = '$id'";
            $stmt = $conn->prepare($decline_apprNote);
            $stmt->execute();
            echo 'success';
        }else{
            echo 'unauthorized';
        }
}

$conn=null;
?>