<?php
include 'rms_conn.php';
$method = $_POST['method'];
if($method == 'load_page'){
    $prfNo = $_POST['prf_number'];
    // QUERY
    $sql = "SELECT names,date_deployed,batch_no,remarks FROM tbl_deployedlist WHERE control_number = '$prfNo'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    if($stmt->rowCount() > 0){
        foreach($stmt->fetchALL() as $x){
            echo '<tr>';
            echo '<td>'.$x['names'].'</td>';
            echo '<td>'.$x['date_deployed'].'</td>';
            echo '<td>'.$x['batch_no'].'</td>';
            echo '<td>'.$x['remarks'].'</td>';
            echo '</tr>';
        }
    }
}
$conn = null;
?>