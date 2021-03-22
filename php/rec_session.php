<?php
    require 'recruitment_server.php';
    $username = $_SESSION['username'];
    $qry = "SELECT *FROM recruitment_account WHERE username = '$username' LIMIT 1";
    $stmt = $conn->prepare($qry);
    $stmt->execute();
    $res = $stmt->fetchALL();
    if($stmt->rowCount() > 0){
        foreach($res as $x){
            $name = $x['name'];
            $email = $x['email'];
            $role = $x['user_role'];
        }
    }else{
        session_unset();
        session_destroy();
        header('location:../recruitment-login.php');
    }
?>