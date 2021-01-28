<?php
    include 'Database.php';
    $method = $_POST['method'];
    if($method == 'load_dept'){
        echo '<option value="" selected disabled>-- Select Assigned Department/Section --</option>';
        $query = "SELECT deptDesc, deptCode,section_name FROM tb_department LEFT JOIN tb_section ON  tb_section.department = tb_department.deptCode";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        foreach($stmt->fetchALL() as $x){
        echo '<option value="'.$x['deptCode'].'">'.$x['deptDesc'].'-'.$x['section_name'].'</option>';
        }
    }
    if($method == 'load_position'){
        echo '<option value="" selected disabled>-- Select Position --</option>';
        $query = "SELECT position FROM tb_position";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        foreach($stmt->fetchALL() as $x){
            if($x['position'] == 'Coordinator' || $x['position'] == 'Associate')continue;
            echo '<option value="'.$x['position'].'">'.$x['position'].'</option>';
        }
    }
    // LOAD LEVEL SIGNUP
    elseif($method == 'load_level'){
        $role = $_POST['role'];
        if($role == 'requestor'){
            echo '<option value="" disabled selected>--SELECT APPROVAL LEVEL--</option>';
            echo '<option value="1">1</option>';
        }
        if($role == 'approver'){
            echo '<option value="" disabled selected>--SELECT APPROVAL LEVEL--</option>';
            echo '<option value="2">2</option>';
            echo '<option value="3">3</option>';
        }
        if($role == 'verifier'){
            echo '<option value="" disabled selected>--SELECT APPROVAL LEVEL--</option>';
            for($x=4;$x<=7;$x++){
                echo '<option value="'.$x.'">'.$x.'</option>';
            }
        }
    }
    $conn=null;
?>