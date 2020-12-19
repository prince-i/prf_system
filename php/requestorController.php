<?php
    include 'Database.php';
    $method = $_POST['method'];
    if($method == 'load_position'){
        $query = "SELECT position FROM tb_position";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        foreach($stmt->fetchAll() as $x){
            echo '<option value="'.$x['position'].'">';
        }
    }
    if($method == 'load_educAtt'){
        $query = "SELECT educDesc FROM tb_education";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        foreach($stmt->fetchALL() as $x){
            echo '<option value="'.$x['educDesc'].'">';
        }
    }
    if($method == 'load_certification'){
        $query = "SELECT certDesc FROM tb_certification";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        foreach($stmt->fetchALL() as $x){
            echo '<option value="'.$x['certDesc'].'">';
        }
    }
    if($method == 'load_dept'){
        $query = "SELECT *FROM tb_department";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        foreach($stmt->fetchALL() as $x){
            echo '<option value="'.$x['deptCode'].'">'.$x['deptDesc'];
        }
    }
    if($method == 'submit_prf'){
        $id = 0;
        // ---------------------------------------------------------------
        $requestor = ucwords($_POST['requestor']);
        $position = $_POST['position'];
        $assign_dept =  $_POST['assign_dept'];
        $female_mp_count = $_POST['female_mp_count'];
        $male_mp_count = $_POST['male_mp_count'];
        $email = $_POST['email'];
        if(empty($female_mp_count)){
            $female_mp_count = 0;
        }
        if(empty($male_mp_count)){
            $male_mp_count = 0;
        }
        $total = $female_mp_count + $male_mp_count;
        // REASON OF HIRING
        $add_mp_val = $_POST['additional_mp_val'];
        $mp_plan_val = $_POST['mp_plan_val'];
        $re_org_val = $_POST['re_org_val'];
        $promotion = $_POST['promotion_val'];
        $retirement = $_POST['retire_val'];
        $replace_val = $_POST['replace_val'];
        $other_val = $_POST['other_val'];
        $replaceName = $_POST['replaceName'];
        $other_text = $_POST['other_text'];
        // contract
        $contractStatus = $_POST['contract_status'];
        $dateStart = $_POST['date_start'];
        $dateEnd = $_POST['date_end'];
        $educ = $_POST['educational_attainment'];
        $cert = $_POST['certification'];
        $work_exp = $_POST['work_exp'];
        $other_quali = $_POST['other_quali'];
        $job_duties = $_POST['job_duties'];
        $interview_stat = $_POST['interview_need_stats'];
        $interviewer = $_POST['interviewer'];
        $interview_date = $_POST['date_interview_set'];
        $interview_time = $_POST['time_interview_set'];
        $interview_date_time = $interview_date." ".$interview_time;
        // BUDGET
        $budget_source = $_POST['budget_source'];
        $budget_status = $_POST['budget_status'];
        $actual_mp_dept = $_POST['actual_mp_dept'];
        $plan_mp_dept = $_POST['plan_mp_dept'];
        $actual_mp_section = $_POST['actual_mp_section'];
        $plan_mp_section = $_POST['plan_mp_section'];
        // DATE
        // $date_now = date("Y-m-d H:i:s");
        // $time_now = date("H:i:s");
        $save_req = "INSERT INTO tb_request_mp (`id`,`requestor`,`requestor_email`,`requesting_position`,`assigned_dept`,`female_num_mp`,
        `male_num_mp`,`total_mp`,`contract_status`,`date_start`,`date_end`,`education`,`required_license`,`work_exp`,`other_qualification`,
        `job_duties`,`interview_need`,`interviewers`,`availability_for_interview`,`additional_mp`,
        `mp_plan`,`reorganization`,`promotion`,`retirement`,`replacement`,`replacement_mp_name`,`others`,
        `budget_source`,`budget_status`,`actual_mp_dept`,`actual_mp_section`,`plan_mp_dept`,`plan_mp_section`,`request_date`,`approval_status`,`verification_status`)
         VALUES ('$id','$requestor','$email','$position','$assign_dept','$female_mp_count','$male_mp_count','$total','$contractStatus','$dateStart','$dateEnd','$educ','$cert','$work_exp','$other_quali',
        '$job_duties','$interview_stat','$interviewer','$interview_date_time','$add_mp_val','$mp_plan_val','$re_org_val','$promotion','$retirement','$replace_val','$replaceName',
        '$other_text','$budget_source','$budget_status','$actual_mp_dept','$actual_mp_section','$plan_mp_dept','$plan_mp_section','$server_date_time','pending','pending')";
        $stmt = $conn->prepare($save_req);
        if($stmt->execute()){
            echo "Success!";
        }else{
            echo "Failed!";
        }
    }
    // PENDING VIEW
    elseif($method == 'requestor_view'){
        $email = $_POST['email'];
        $from = $_POST['from'];
        $to = $_POST['to'];
        if(empty($from) && empty($to)){
            $query = "SELECT *FROM tb_request_mp WHERE approval_status = 'pending' AND verification_status = 'pending' AND requestor_email LIKE '$email%'";
            $stmt = $conn->prepare($query);
            $stmt->execute();
            foreach($stmt->fetchALL() as $x){
                echo '<tr onclick="view_summary(&quot;'.$x['id'].'&quot;)" style="cursor:pointer;" class="modal-trigger" data-target="preview_request">';
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
            $query = "SELECT *FROM tb_request_mp WHERE request_date >= '$from 00:00:00' AND request_date <= '$to 23:59:59' AND approval_status = 'pending' AND verification_status = 'pending' AND requestor_email LIKE '$email%'";
            $stmt = $conn->prepare($query);
            $stmt->execute();
            foreach($stmt->fetchALL() as $x){
                echo '<tr onclick="view_summary(&quot;'.$x['id'].'&quot;)" style="cursor:pointer;" class="modal-trigger" data-target="preview_request">';
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
    // COUNT PENDING REQUEST BACKEND
    elseif($method == 'count_pending_request'){
        $email = $_POST['email'];
        $query = "SELECT COUNT(id) as total_pending FROM tb_request_mp WHERE approval_status = 'pending' AND  verification_status = 'pending' AND requestor_email LIKE '$email%'";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        foreach($stmt->fetchALL() as $x){
            echo $x['total_pending'];
        }
    }
// LOADING APPROVED PRF REQUESTOR VIEW
    elseif($method == 'fetch_approve_request_requestor'){
        $mail = $_POST['email'];
        $query = "SELECT id,requesting_position,assigned_dept,contract_status,requestor_email,approval_status,verification_status,request_date FROM tb_request_mp WHERE approval_status = 'approved' AND verification_status = 'pending' ORDER BY request_date ASC";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        foreach($stmt->fetchall() as $x){
            echo '<tr onclick="view_summary(&quot;'.$x['id'].'&quot;)" style="cursor:pointer;" class="modal-trigger" data-target="preview_request">';
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
// COUNT APPROVE REQUEST
elseif($method == 'count_approved_request'){
    $email = $_POST['email'];
    $query = "SELECT COUNT(id) as total_approved FROM tb_request_mp WHERE approval_status = 'approved' AND  verification_status = 'pending' AND requestor_email LIKE '$email%'";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    foreach($stmt->fetchALL() as $x){
        echo $x['total_approved'];
    }
}
// VIEWING  SUMMARY
elseif($method == 'summary_prf_view'){
    $id = $_POST['id']; 
    $sql = "SELECT requestor,requesting_position,assigned_dept,female_num_mp,male_num_mp,contract_status,education,required_license,work_exp,job_duties,request_date FROM tb_request_mp WHERE id = '$id'";;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    foreach($stmt->fetchALL() as $x){
        echo '<table>';
        // ---------------
        echo '<tr>';
        echo '<td>Requested By:</td>';
        echo '<td>'.$x['requestor'].'</td>';
        echo '</tr>';
        // ----------------
        echo '<tr>';
        echo '<td>Position:</td>';
        echo '<td>'.$x['requesting_position'].'</td>';
        echo '</tr>';
        // ----------------
        echo '<tr>';
        echo '<td>Requesting Department:</td>';
        echo '<td>'.$x['assigned_dept'].'</td>';
        echo '</tr>';
        // ----------------
        echo '<tr>';
        echo '<td>No. of MP Need (Male):</td>';
        echo '<td>'.$x['male_num_mp'].'</td>';
        echo '</tr>';
        // ----------------
        echo '<tr>';
        echo '<td>No. of MP Need (Female):</td>';
        echo '<td>'.$x['female_num_mp'].'</td>';
        echo '</tr>';
        // ----------------
        echo '<tr>';
        echo '<td>Contract Status:</td>';
        echo '<td>'.$x['contract_status'].'</td>';
        echo '</tr>';
        // ----------------
        echo '<tr>';
        echo '<td>Education Attainment:</td>';
        echo '<td>'.$x['education'].'</td>';
        echo '</tr>';
        // ----------------
        echo '<tr>';
        echo '<td>Required License/Certification:</td>';
        echo '<td>'.$x['required_license'].'</td>';
        echo '</tr>';
        // ---------------- 
        echo '<tr>';
        echo '<td>Work Experience:</td>';
        echo '<td>'.$x['work_exp'].'</td>';
        echo '</tr>';
        // ---------------- 
        echo '<tr>';
        echo '<td>Requested Date:</td>';
        echo '<td>'.$x['request_date'].'</td>';
        echo '</tr>';
        // ---------------- 
        echo '</table>';
        echo '<br>';

        echo '<div class="row">';
        echo '<div class="col s12 center">';
        echo '<button class="btn z-depth-5 #1976d2 blue darken-2" style="border-radius:20px;">preview</button>';
        echo '</div>';
        echo '</div>';
    }
}
?>
