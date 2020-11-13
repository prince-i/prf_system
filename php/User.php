<?php
    include 'Database.php';
    session_start();
    if(isset($_POST['loginBtn'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $role = $_POST['role'];
        $query = "SELECT *FROM prf_account WHERE username ='$username' AND password = '$password' AND role = '$role' AND account_verification = 'approved' LIMIT 1";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $stmt->fetchAll();
        if($stmt->rowCount() > 0){
            if($role === 'administrator'){
                $_SESSION['username'] = $username;
                $_SESSION['role'] = $role;
                header('location: ../Users/admin.php');
            }
            elseif($role === 'requestor'){
                $_SESSION['username'] = $username;
                $_SESSION['role'] = $role;
                header('location: Users/requestor.php');
            }
        }else{
            echo "<center>Invalid Username or Password</center>";
        }
    }
?>