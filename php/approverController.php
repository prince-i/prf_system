<?php
    include 'Database.php';
    $method = $_POST['method'];
    if($method == 'load_for_approval'){
        $department = $_POST['department'];
            $query = "SELECT id,requestor,requesting_position,assigned_dept,contract_status,requestor_email,approval_status,verification_status,request_date FROM tb_request_mp WHERE approval_status = 'pending' AND step ='1' AND verification_status = 'pending' AND assigned_dept LIKE '$department%' ORDER BY request_date ASC";
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
?>