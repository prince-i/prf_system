<?php
    include 'Database.php';
    $method = $_POST['method'];
    if($method == 'load_for_approval_rt'){
            $filter = $_POST['filter'];
            if($filter == ''){
                $query = "SELECT id,requestor,requesting_position,assigned_dept,contract_status,requestor_email,approval_status,verification_status,request_date FROM tb_request_mp WHERE  step ='3'  ORDER BY id ASC";
                $stmt = $conn->prepare($query);
                $stmt->execute();
                if($stmt->rowCount() > 0){
                    foreach($stmt->fetchAll() as $x){
                        echo '<tr class="modal-trigger" data-target="preview_for_rt" onclick="rt_preview(&quot;'.$x['id'].'&quot;)">';
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
            }else{
                $query = "SELECT id,requestor,requesting_position,assigned_dept,contract_status,requestor_email,approval_status,verification_status,request_date FROM tb_request_mp WHERE  step ='3' AND assigned_dept LIKE '$filter%' ORDER BY id ASC";
                $stmt = $conn->prepare($query);
                $stmt->execute();
                if($stmt->rowCount() > 0){
                    foreach($stmt->fetchAll() as $x){
                        echo '<tr class="modal-trigger" data-target="preview_for_rt" onclick="rt_preview(&quot;'.$x['id'].'&quot;)">';
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
    }
// PENDING VIEW -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    elseif($method == 'pending_view'){
        $filter = $_POST['filter'];
            if($filter == ''){
                $query = "SELECT id,requestor,requesting_position,assigned_dept,contract_status,requestor_email,approval_status,verification_status,request_date FROM tb_request_mp WHERE  step > 3 AND step < 7  ORDER BY id ASC";
                $stmt = $conn->prepare($query);
                $stmt->execute();
                if($stmt->rowCount() > 0){
                    foreach($stmt->fetchAll() as $x){
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
        }else{
            $query = "SELECT id,requestor,requesting_position,assigned_dept,contract_status,requestor_email,approval_status,verification_status,request_date FROM tb_request_mp WHERE  step > 3 AND step < 7 AND assigned_dept LIKE '$filter%' ORDER BY id ASC";
            $stmt = $conn->prepare($query);
            $stmt->execute();
            if($stmt->rowCount() > 0){
                foreach($stmt->fetchAll() as $x){
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
    }
// VERIFIED VIEW
elseif($method == 'verified_view'){
        $department = $_POST['department'];
        $filter = $_POST['filter'];
        if($filter == ''){
            $query = "SELECT id,requestor,requesting_position,assigned_dept,contract_status,requestor_email,approval_status,verification_status,request_date FROM tb_request_mp WHERE  step = 7  ORDER BY id ASC";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        if($stmt->rowCount() > 0){
            foreach($stmt->fetchAll() as $x){
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
    }else{
        $query = "SELECT id,requestor,requesting_position,assigned_dept,contract_status,requestor_email,approval_status,verification_status,request_date FROM tb_request_mp WHERE  step = 7 AND assigned_dept LIKE '$filter%' ORDER BY id ASC";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        if($stmt->rowCount() > 0){
            foreach($stmt->fetchAll() as $x){
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
}
// VIEW MODAL CHECKING 
    elseif($method == 'preview_verify_check_rt'){
        $id = $_POST['id']; 
        $sql = "SELECT requestor,requesting_position,assigned_dept,female_num_mp,male_num_mp,contract_status,education,required_license,work_exp,job_duties,request_date FROM tb_request_mp WHERE id = '$id'";;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        foreach($stmt->fetchALL() as $x){
            echo '<h5 class="center" style="margin-top:-10%;">FOR APPROVAL CHECKING</h5>';
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
            echo '<button class="btn z-depth-5 red modal-trigger" style="border-radius:20px;" data-target="declineCheckModalRT" onclick="get_id_decline(&quot;'.$id.'&quot;)">decline</button>';
            echo '</div>';
            // --------------------------------------------------------------------------------------------------------------------------
            echo '</div>';
            echo '</div>';
        }
    }
// VIEW PENDING
elseif($method == 'preview_pending_form'){
        $id = $_POST['id']; 
        $sql = "SELECT requestor,requesting_position,assigned_dept,female_num_mp,male_num_mp,contract_status,education,required_license,work_exp,job_duties,request_date FROM tb_request_mp WHERE id = '$id'";;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        foreach($stmt->fetchALL() as $x){
            echo '<h5 class="center" style="margin-top:-10%;">PENDING</h5>';
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
            echo '<button class="btn z-depth-5 #1976d2 blue darken-2" style="border-radius:20px;" onclick="preview_only()">preview</button>';
            echo '</div>';
            // -------------
            echo '</div>';
            echo '</div>';
        }
}
// CANCEL PREVIEW SYNTX
elseif($method == 'cancel_view'){
    $department = $_POST['department'];
    $filter = $_POST['filter'];
    if($filter == ''){
        $query = "SELECT id,requestor,requesting_position,assigned_dept,contract_status,requestor_email,approval_status,verification_status,request_date FROM tb_request_mp WHERE  step = 0  ORDER BY id ASC";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        if($stmt->rowCount() > 0){
            foreach($stmt->fetchAll() as $x){
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
        }else{
            $query = "SELECT id,requestor,requesting_position,assigned_dept,contract_status,requestor_email,approval_status,verification_status,request_date FROM tb_request_mp WHERE  step = 0 AND assigned_dept LIKE '$filter%' ORDER BY id ASC";
            $stmt = $conn->prepare($query);
            $stmt->execute();
            if($stmt->rowCount() > 0){
                foreach($stmt->fetchAll() as $x){
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
}
// APPROVE RT PROCEED TO STEP 5
elseif($method=='approve_rt'){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $level = $_POST['signatoryLevel'];
    // CHECK LEVEL APPROVAL
    $fetchDoc = "SELECT step FROM tb_request_mp WHERE id = '$id'";
    $stmt = $conn->prepare($fetchDoc);
    $stmt->execute();
    foreach($stmt->fetchall() as $x){
        $step = $x['step'];
    }
    $compat = $step + 1;
    if($compat == $level){
        // APPROVAL QUERY]
        $approveQL = "UPDATE tb_request_mp SET verify_check_by = '$name', verify_check_remarks = 'APPROVED', verification_status = 'FOR APPROVAL OF HRD MANAGER AND HRD DIVISION MANAGER', step = '4' WHERE id = '$id'";
        $stmt=$conn->prepare($approveQL);
        if($stmt->execute()){
            echo 'success';
        }else{
            echo 'fail';
        }
    }

}
// CANCEL REQ
elseif($method == 'declineByRT'){
    $id = $_POST['prfID'];
    $remarks = $_POST['remarks'];
    $step = 0;
    $declineQL = "UPDATE tb_request_mp SET verify_check_remarks = '$remarks', step ='$step', verification_status = 'DISAPPROVED' WHERE id = '$id'";
    $stmt=$conn->prepare($declineQL);
    if($stmt->execute()){
        echo 'decline';
    }else{
        echo 'fail';
    }
}
?>