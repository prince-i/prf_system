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
       echo $educ = $_POST['educational_attainment'];
        $cert = $_POST['certification'];
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
        `male_num_mp`,`total_mp`,`contract_status`,`date_start`,`date_end`,`education`,`required_license`,`other_qualification`,
        `job_duties`,`interview_need`,`interviewers`,`availability_for_interview`,`additional_mp`,
        `mp_plan`,`reorganization`,`promotion`,`retirement`,`replacement`,`replacement_mp_name`,`others`,
        `budget_source`,`budget_status`,`actual_mp_dept`,`actual_mp_section`,`plan_mp_dept`,`plan_mp_section`,`request_date`,`approval_status`,`verification_status`)
         VALUES ('$id','$requestor','$email','$position','$assign_dept','$female_mp_count','$male_mp_count','$total','$contractStatus','$dateStart','$dateEnd','$educ','$cert','$other_quali',
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
            $query = "SELECT *FROM tb_request_mp WHERE approval_status = 'pending' AND verification_status = 'pending'";
            $stmt = $conn->prepare($query);
            $stmt->execute();
            foreach($stmt->fetchALL() as $x){
                echo '<tr onclick="view(&quot;'.$x['id'].'&quot;)">';
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
            $query = "SELECT *FROM tb_request_mp WHERE request_date >= '$from 00:00:00' AND request_date <= '$to 23:59:59' AND approval_status = 'pending' AND verification_status = 'pending'";
            $stmt = $conn->prepare($query);
            $stmt->execute();
            foreach($stmt->fetchALL() as $x){
                echo '<tr onclick="view(&quot;'.$x['id'].'&quot;)">';
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