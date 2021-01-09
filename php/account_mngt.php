<?php
    include 'Database.php';
    $method = $_POST['method'];
    if($method == 'register_account'){
        $id = 0;
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['new_password'];
        $dept = $_POST['new_dept'];
        $role = $_POST['role'];
        $position = $_POST['position'];
        $approval_level = $_POST['approval_level'];
        // CHECK IF USERNAME/EMAIL IS ALREADY EXISTED
        $checkQL = "SELECT id FROM prf_account WHERE username = '$email'";
        $stmt = $conn->prepare($checkQL);
        $stmt->execute();
        // $stmt->fetchALL();
        $row = $stmt->rowCount();
        if($row > 0){
            echo 'exist';
        }else{
            // REGISTRATION QUERY
            $regQL = "INSERT INTO prf_account (`id`,`username`,`password`,`role`,`position`,`name`,`department`,`account_verification`,`acct_level`) 
            VALUES ('$id','$email','$password','$role','$position','$name','$dept','approved','$approval_level')";
            $stmt = $conn->prepare($regQL);
            if($stmt->execute()){
                echo 'success';
            }
        }
    }
?>