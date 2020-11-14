<?php
    require 'User.php';
    $username = $_SESSION['username'];
    $role = $_SESSION['role'];
    $qry = "SELECT *FROM prf_account WHERE username = '$username'";
    $stmt = $conn->prepare($qry);
    $stmt->execute();
    $res = $stmt->fetchALL();
    if($stmt->rowCount() > 0){
        foreach($res as $x){
            $name = $x['name'];
            $position = $x['position'];
            $role = $x['role'];
            $department = $x['department'];
        }
    }else{
        session_unset();
        session_destroy();
        header('location:../index.php');
    }
    
?>