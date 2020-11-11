<?php
    include 'Database.php';
    $method =  $_POST['method'];
    if($method == 'login'){
        $username = $_POST['username'];
        $password = $_POST['pass'];
        $role = $_POST['role'];
        $query = "SELECT *FROM prf_account WHERE username ='$username' AND password = '$password' AND role = '$role' AND account_verification = 'approved' LIMIT 1";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $stmt->fetchALL();
        if($stmt->rowCount() > 0){
                echo "unlocked~!~".$role;
                session_start();
                $_SESSION['username'] = $username;
                $_SESSION['role'] = $role;
        }else{
            echo "locked";
        }
    }
?>