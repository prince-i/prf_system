<?php
    require 'Database.php';
    $method = $_POST['method'];

    if($method == 'load_pending'){
        $dept = $_POST['filter_pending'];
        if(empty($dept)){
            $sql = "SELECT requestor,requestor_email,requesting_position,assigned_dept,approval_status,verification_status,typeHiring,request_date FROM tb_request_mp WHERE step < 7 ORDER BY id ASC";
            $stmt=$conn->prepare($sql);
            $stmt->execute();
            foreach($stmt->fetchALL() as $x){
                echo '<tr>';
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
            $sql = "SELECT requestor,requestor_email,requesting_position,assigned_dept,approval_status,verification_status,typeHiring,request_date FROM tb_request_mp WHERE step < 7 AND assigned_dept LIKE '$dept%' ORDER BY id ASC";
            $stmt=$conn->prepare($sql);
            $stmt->execute();
            foreach($stmt->fetchALL() as $x){
                echo '<tr>';
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
?>