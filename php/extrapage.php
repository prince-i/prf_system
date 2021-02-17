<?php
include 'Database.php';
$method = $_POST['method'];
if($method == 'page_two'){
    $id = $_POST['id'];
    // CHECK THE PRF NUMBER
    $checkPRF = "SELECT prf_req_id,prf_number FROM hired_list_key WHERE prf_req_id = '$id' ORDER BY id DESC LIMIT 1";
    $stmt = $conn->prepare($checkPRF);
    $stmt->execute();
    foreach($stmt->fetchALL() as $x){
        // RETURN THE PRF NUMBER OF SELECTED ID
        echo $prf_number = $x['prf_number'];
    }
}

if($method == 'get_prf'){
    $id = $_POST['id'];
    $sql ="SELECT prf_number FROM hired_list_key WHERE prf_req_id = '$id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    foreach($stmt->fetchALL() as $x){
        echo $x['prf_number'];
    }
}

// if($method == 'fetch_prf_num'){
//     $id = $_POST['id'];
//     $sql ="SELECT prf_number FROM hired_list_key WHERE prf_req_id = '$id'";
//     $stmt = $conn->prepare($sql);
//     $stmt->execute();
//     foreach($stmt->fetchALL() as $x){
//         echo $x['prf_number'];
//     }
// }

$conn=null;
?>