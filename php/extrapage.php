<?php
include 'Database.php';
$method = $_POST['method'];
if($method == 'page_two'){
    $id = $_POST['id'];
    // CHECK THE PRF NUMBER
    $checkPRF = "SELECT prf_req_id,prf_number FROM hired_list_key WHERE prf_req_id = '$id'";
    $stmt = $conn->prepare($checkPRF);
    $stmt->execute();
    foreach($stmt->fetchALL() as $x){
        // RETURN THE PRF NUMBER OF SELECTED ID
        echo $prf_number = $x['prf_number'];
    }
}



?>