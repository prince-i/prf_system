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
        $mp_req_ID =  date("Ymd").'-'.mt_rand(1000,1000000).'-'.uniqid();
        $position = $_POST['position'];
        $assign_dept =  $_POST['assign_dept'];
        $female_mp_count = $POST['female_mp_count'];
        $male_mp_count = $_POST['male_mp_count'];
        // REASON OF HIRING
        $add_mp_val = $_POST['additional_mp_val'];
        $mp_plan_val = $_POST['mp_plan_val'];
        $re_org_val = $_POST['re_org_val'];
        $promotion = $_POST['promotion'];
        $retirement = $_POST['retire_val'];
        $replace_val = $_POST['replace_val'];
        $other_val = $_POST['other_val'];
        $replaceName = $_POST['replaceName'];
        $replacePositon = $_POST['replacePosition'];
        $other_text = $_POST['other_text'];
        $contractStatus = $_POST['contract_status'];
        $dateStart = $_POST['date_start'];
        $dateEnd = $_POST['date_end'];
        $educ = $_POST['educational_attainment'];
        $cert = $_POST['certification'];
        $other_quali = $_POST['other_quali'];
        $job_duties = $_POST['job_duties'];
        $interview_stat = $_POST['interview_need_stats'];
        $interviewer = $_POST['interviewer'];
        $interview_date = $_POST['date_interview_set'];
        $interview_time = $_POST['time_interview_set'];
        $budget_source = $_POST['budget_source'];
        $budget_status = $_POST['budget_status'];
        $actual_mp_dept = $_POST['actual_mp_dept'];
        $plan_mp_dept = $_POST['plan_mp_dept'];
        $actual_mp_section = $_POST['actual_mp_section'];
        $plan_mp_section = $_POST['plan_mp_section'];
        //check ID 
        $chckReqID = "SELECT mp_request_ID FROM tb_request_mp WHERE mp_request_ID = '$mp_req_ID'";
        $stmt = $conn->prepare($chckReqID);
        $stmt->execute();
        $stmt->fetchALL();
        if($stmt->rowCount() > 0){
            $mp_req_ID =  date("Ymd").'-'.mt_rand(1000,1000000).'-'.uniqid();
        }else{
            // INSERT TB_REQUEST_MP
            $mp_request = "INSERT INTO tb_request_mp (`id`,`mp_request_ID`,`requestor`,`requesting_position`,`assigned_dept`,`female_num_mp`,`male_num_mp`,`total_mp`,
            `contract_status`,`date_start`,`date_end`,`education`,`required_license`,`other_qualification`,`job_duties`,`interview_need`,`interviewers`,`availability_for_interview`,
            `request_date`,`request_time`) VALUES()";
        }

    }
?>