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
        echo '<option value="'.$x['position'].'">'.$x['position'].'</option>';
        }
    }
?>