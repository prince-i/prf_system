<?php
    require 'Database.php';
    $method = $_POST['method'];

    if($method == 'load_pending'){
        $dept = $_POST['filter_pending'];
        if(empty($dept)){
            $sql = "SELECT id,requestor,requestor_email,requesting_position,assigned_dept,approval_status,verification_status,typeHiring,request_date FROM tb_request_mp WHERE step > 0 AND step < 7 ORDER BY id ASC";
            $stmt=$conn->prepare($sql);
            $stmt->execute();
            foreach($stmt->fetchALL() as $x){
                echo '<tr style="cursor:pointer;" class="modal-trigger" data-target="recruitment_pending_modal" onclick="pending_preview('.$x['id'].')">';
                echo '<td>'.$x['requestor'].'</td>';
                echo '<td>'.$x['requestor_email'].'</td>';
                echo '<td>'.$x['requesting_position'].'</td>';
                echo '<td>'.$x['assigned_dept'].'</td>';
                echo '<td>'.$x['approval_status'].'</td>';
                echo '<td>'.$x['verification_status'].'</td>';
                echo '<td>'.$x['typeHiring'].'</td>';
                echo '<td>'.$x['request_date'].'</td>';
                echo '</tr>';
            }
        }else{
            $sql = "SELECT id,requestor,requestor_email,requesting_position,assigned_dept,approval_status,verification_status,typeHiring,request_date FROM tb_request_mp WHERE step > 0 AND step < 7 AND assigned_dept LIKE '$dept%' ORDER BY id ASC";
            $stmt=$conn->prepare($sql);
            $stmt->execute();
            foreach($stmt->fetchALL() as $x){
                echo '<tr style="cursor:pointer;" class="modal-trigger" data-target="recruitment_pending_modal" onclick="pending_preview('.$x['id'].')">';
                echo '<td>'.$x['requestor'].'</td>';
                echo '<td>'.$x['requestor_email'].'</td>';
                echo '<td>'.$x['requesting_position'].'</td>';
                echo '<td>'.$x['assigned_dept'].'</td>';
                echo '<td>'.$x['approval_status'].'</td>';
                echo '<td>'.$x['verification_status'].'</td>';
                echo '<td>'.$x['typeHiring'].'</td>';
                echo '<td>'.$x['request_date'].'</td>';
                echo '</tr>';
            }
        }
    }

    if($method == 'load_verified'){
        $dept = $_POST['filter_verified'];
        if(empty($dept)){
            $sql = "SELECT prf_req_id,step,prf_number,requestor,requestor_email,requesting_position,assigned_dept,approval_status,verification_status,typeHiring,request_date FROM tb_request_mp LEFT JOIN hired_list_key ON tb_request_mp.id = hired_list_key.prf_req_id WHERE step = 7 AND sync_status = 'ok'";
            $stmt=$conn->prepare($sql);
            $stmt->execute();
            foreach($stmt->fetchALL() as $x){
                echo '<tr onclick="verified_preview('.$x['prf_req_id'].')" class="modal-trigger" data-target="recruitment_verified_modal" style="cursor:pointer">>';
                echo '<td>'.$x['prf_number'].'</td>';
                echo '<td>'.$x['requestor'].'</td>';
                echo '<td>'.$x['requestor_email'].'</td>';
                echo '<td>'.$x['requesting_position'].'</td>';
                echo '<td>'.$x['assigned_dept'].'</td>';
                echo '<td>'.$x['approval_status'].'</td>';
                echo '<td>'.$x['verification_status'].'</td>';
                echo '<td>'.$x['typeHiring'].'</td>';
                echo '<td>'.$x['request_date'].'</td>';
                echo '</tr>';
            }
        }else{
            $sql = "SELECT prf_req_id,step,prf_number,requestor,requestor_email,requesting_position,assigned_dept,approval_status,verification_status,typeHiring,request_date FROM tb_request_mp LEFT JOIN hired_list_key ON tb_request_mp.id = hired_list_key.prf_req_id WHERE step = 7 AND assigned_dept LIKE '$dept%' AND sync_status = 'ok'";
            $stmt=$conn->prepare($sql);
            $stmt->execute();
            foreach($stmt->fetchALL() as $x){
                echo '<tr onclick="verified_preview('.$x['prf_req_id'].')"  class="modal-trigger" data-target="recruitment_verified_modal" style="cursor:pointer">';
                echo '<td>'.$x['prf_number'].'</td>';
                echo '<td>'.$x['requestor'].'</td>';
                echo '<td>'.$x['requestor_email'].'</td>';
                echo '<td>'.$x['requesting_position'].'</td>';
                echo '<td>'.$x['assigned_dept'].'</td>';
                echo '<td>'.$x['approval_status'].'</td>';
                echo '<td>'.$x['verification_status'].'</td>';
                echo '<td>'.$x['typeHiring'].'</td>';
                echo '<td>'.$x['request_date'].'</td>';
                echo '</tr>';
            }
        }
    }

    if($method == 'load_cancel_prf'){
        $dept = $_POST['filter_cancel'];
        if(empty($dept)){
            $sql = "SELECT id,requestor,requestor_email,requesting_position,assigned_dept,approval_status,verification_status,typeHiring,request_date FROM tb_request_mp WHERE step = 0 ORDER BY id ASC";
            $stmt=$conn->prepare($sql);
            $stmt->execute();
            foreach($stmt->fetchALL() as $x){
                echo '<tr style="cursor:pointer;" class="modal-trigger" data-target="recruitment_pending_modal" onclick="pending_preview('.$x['id'].')">';
                echo '<td>'.$x['requestor'].'</td>';
                echo '<td>'.$x['requestor_email'].'</td>';
                echo '<td>'.$x['requesting_position'].'</td>';
                echo '<td>'.$x['assigned_dept'].'</td>';
                echo '<td>'.$x['approval_status'].'</td>';
                echo '<td>'.$x['verification_status'].'</td>';
                echo '<td>'.$x['typeHiring'].'</td>';
                echo '<td>'.$x['request_date'].'</td>';
                echo '</tr>';
            }
        }else{
            $sql = "SELECT id,requestor,requestor_email,requesting_position,assigned_dept,approval_status,verification_status,typeHiring,request_date FROM tb_request_mp WHERE step = 0 AND assigned_dept LIKE '$dept%' ORDER BY id ASC";
            $stmt=$conn->prepare($sql);
            $stmt->execute();
            foreach($stmt->fetchALL() as $x){
                echo '<tr style="cursor:pointer;" <tr style="cursor:pointer;" class="modal-trigger" data-target="recruitment_pending_modal" onclick="pending_preview('.$x['id'].')">';
                echo '<td>'.$x['requestor'].'</td>';
                echo '<td>'.$x['requestor_email'].'</td>';
                echo '<td>'.$x['requesting_position'].'</td>';
                echo '<td>'.$x['assigned_dept'].'</td>';
                echo '<td>'.$x['approval_status'].'</td>';
                echo '<td>'.$x['verification_status'].'</td>';
                echo '<td>'.$x['typeHiring'].'</td>';
                echo '<td>'.$x['request_date'].'</td>';
                echo '</tr>';
            }
        }
    }



    if($method == 'load_prf_user'){
        $dept = $_POST['filter_user'];
        if(empty($dept)){
            $query = "SELECT id,username,email,password,role,position,name,department,acct_level FROM prf_account";
            $stmt = $conn->prepare($query);
            $stmt->execute();
            foreach($stmt->fetchALL() as $x){
                echo '<tr onclick="fetch_id_prf_user(&quot;'.$x['id'].'~!~'.$x['username'].'~!~'.$x['email'].'~!~'.$x['password'].'~!~'.$x['role'].'~!~'.$x['position'].'~!~'.$x['name'].'~!~'.$x['department'].'~!~'.$x['acct_level'].'&quot;)" class="modal-trigger" data-target="prf_user_menu" style="cursor:pointer">';
                echo '<td>'.$x['username'].'</td>';
                echo '<td>'.$x['email'].'</td>';
                echo '<td>'.$x['password'].'</td>';
                echo '<td>'.$x['role'].'</td>';
                echo '<td>'.$x['position'].'</td>';
                echo '<td>'.$x['name'].'</td>';
                echo '<td>'.$x['department'].'</td>';
                echo '<td>'.$x['acct_level'].'</td>';
                echo '</tr>';
            }
        }else{
            $query = "SELECT id,username,email,password,role,position,name,department,acct_level FROM prf_account WHERE department LIKE '$dept%'";
            $stmt = $conn->prepare($query);
            $stmt->execute();
            foreach($stmt->fetchALL() as $x){
                echo '<tr onclick="fetch_id_prf_user(&quot;'.$x['id'].'~!~'.$x['username'].'~!~'.$x['email'].'~!~'.$x['password'].'~!~'.$x['role'].'~!~'.$x['position'].'~!~'.$x['name'].'~!~'.$x['department'].'~!~'.$x['acct_level'].'&quot;)" class="modal-trigger" data-target="prf_user_menu" style="cursor:pointer">';
                echo '<td>'.$x['username'].'</td>';
                echo '<td>'.$x['email'].'</td>';
                echo '<td>'.$x['password'].'</td>';
                echo '<td>'.$x['role'].'</td>';
                echo '<td>'.$x['position'].'</td>';
                echo '<td>'.$x['name'].'</td>';
                echo '<td>'.$x['department'].'</td>';
                echo '<td>'.$x['acct_level'].'</td>';
                echo '</tr>';
            }
        }
    }

    if($method == 'delete_prf_user'){
        $id = $_POST['id'];
        $sql = "DELETE FROM prf_account WHERE id = '$id'";
        $stmt = $conn->prepare($sql);
        if($stmt->execute()){
            echo 'deleted';
        }else{
            echo 'fail';
        }
    }

    if($method == 'preview_pending'){
    $id = $_POST['id'];
    $sql = "SELECT id,requestor,requesting_position,assigned_dept,female_num_mp,male_num_mp,both_mp,contract_status,education,required_license,work_exp,job_duties,request_date,approve_check_remarks,approve_noted_remarks,verify_check_remarks,verify_verifier_manager_remarks,verify_verifier_div_mgr_remarks,cancel_remarks FROM tb_request_mp WHERE id = '$id'";;
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
        echo '<div class="col s6">No. of MP (Male/Female):</div>';
        echo '<div class="col s6">'.$x['both_mp'].'</div>';
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
        // ------------------
        echo '</div>';
        echo '<br>';

        echo '<div class="row">';
        echo '<div class="col s12 center">';
        echo '<button class="btn z-depth-5 #1976d2 blue darken-2" style="border-radius:20px;" onclick="preview_pending_prf('.$x['id'].')">preview</button>';
        echo '</div>';
        echo '</div>';
        }
    }

    if($method == 'preview_verified'){
        $id = $_POST['id'];
    $sql = "SELECT id,requestor,requesting_position,assigned_dept,female_num_mp,male_num_mp,both_mp,contract_status,education,required_license,work_exp,job_duties,request_date,approve_check_remarks,approve_noted_remarks,verify_check_remarks,verify_verifier_manager_remarks,verify_verifier_div_mgr_remarks,cancel_remarks FROM tb_request_mp WHERE id = '$id'";;
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
        echo '<div class="col s6">No. of MP (Male/Female):</div>';
        echo '<div class="col s6">'.$x['both_mp'].'</div>';
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
        // ------------------
        echo '</div>';
        echo '<br>';

        echo '<div class="row">';
        echo '<div class="col s12 center">';
        echo '<button class="btn z-depth-5 #1976d2 blue darken-2" style="border-radius:20px;" onclick="preview_pending_prf('.$x['id'].')">preview</button>';
        echo '</div>';
        echo '</div>';
        }
    }

// UPDATE USER ACCOUNT
    if($method == 'update_user'){
        $id = $_POST['user_record'];
        $userID = $_POST['userID'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $role = $_POST['role'];
        $name = $_POST['name'];
        $level = $_POST['level'];
        $department = $_POST['department'];
        $position = $_POST['position'];
        // SQL check userID if used 
        $sql = "SELECT username FROM prf_account WHERE username = '$userID'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $stmt->fetchALL();
        if($stmt->rowCount() > 0){
            echo 'already_use';
        }else{
            // UPDATE TABLE
            $update = "UPDATE prf_account SET username = '$userID',email = '$email',password = '$password', role = '$role',position = '$position', name = '$name', department = '$department', acct_level = '$level' WHERE id = '$id'";
            $stmt = $conn->prepare($update);
            if($stmt->execute()){
                echo 'success';
            }else{
                echo 'fail';
            }
        }
    }

// REGISTRATION OF USER
if($method == 'register_user'){
    $prf_name = $_POST['prf_name'];
    $prf_username = $_POST['prf_username'];
    $email = $_POST['prf_email'];
    $password = $_POST['prf_password'];
    $dept = $_POST['prf_dept'];
    $role = $_POST['prf_role'];
    $position = $_POST['prf_position'];
    $level = $_POST['prf_level'];
    // CHECK USERID IF USED
    $check = "SELECT username FROM prf_account WHERE username = '$prf_username'";
    $stmt = $conn->prepare($check);
    $stmt->execute();
    $stmt->fetchALL();
    if($stmt->rowCount() > 0){
        echo 'exists';
    }else{
        // QUERY FOR INSERTING
        $insert = "INSERT INTO prf_account (`id`,`username`,`email`,`password`,`role`,`position`,`name`,`department`,`acct_level`) 
        VALUES ('0','$prf_username','$email','$password','$role','$position','$prf_name','$dept','$level')";
        $stmt = $conn->prepare($insert);
        if($stmt->execute()){
            echo 'success';
        }else{
            echo 'fail';
        }
    }
}
?>