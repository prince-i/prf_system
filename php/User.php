<?php
    include 'Database.php';
    session_start();
    if(isset($_POST['loginBtn'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $role = $_POST['role'];
        $query = "SELECT *FROM prf_account WHERE username ='$username' AND password = '$password' AND account_verification = 'approved' LIMIT 1";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        // $stmt->fetchAll();
        if($stmt->rowCount() > 0){
            foreach($stmt->fetchALL() as $x){
                echo $role = $x['role'];
                echo $user_level = $x['acct_level'];
            }
            // REQUESTOR
                if($role == 'requestor' && $user_level =='1'){
                    $_SESSION['username'] = $username;
                    $_SESSION['role'] = $role;
                    header('location: Users/requestor.php');
                }
            // APPROVE CHECKER
                elseif($role == 'approver' && $user_level == '2'){
                    $_SESSION['username'] = $username;
                    $_SESSION['role'] = $role;
                    header('location: Users/approver.php');
                }
            // APPROVE NOTE
                elseif($role == 'approver' && $user_level == '3'){
                    $_SESSION['username'] = $username;
                    $_SESSION['role'] = $role;
                    header('location: Users/approver.php');
                }
            // RT ASSISTANT MANAGER 
                elseif($role == 'verifier' && $user_level == '4'){
                    $_SESSION['username'] = $username;
                    $_SESSION['role'] = $role;
                    header('location: Users/rt_assistant_dashboard.php');
                }
            // HRD MANAGER
                elseif($role == 'verifier' && $user_level == '5'){
                    $_SESSION['username'] = $username;
                    $_SESSION['role'] = $role;
                    header('location: Users/hrd_manager.php');
                }
            // HRD DIV MANAGER
            elseif($role == 'verifier' && $user_level == '6'){
                $_SESSION['username'] = $username;
                $_SESSION['role'] = $role;
                header('location: Users/hrd_division.php');
            }
            // PRESIDENT
            elseif($role == 'verifier' && $user_level == '7'){
                $_SESSION['username'] = $username;
                $_SESSION['role'] = $role;
                header('location: Users/president.php');
            }
            // SYSTEM ADMIN
            elseif($role == 'admin' && $user_level == '8'){
                $_SESSION['username'] = $username;
                $_SESSION['role'] = $role;
                header('location: Users/system.php');
            }else{
                echo "<script>alert('Invalid Username or Password')</script>";
            }
        //     if($role === 'administrator'){
        //         $_SESSION['username'] = $username;
        //         $_SESSION['role'] = $role;
        //         header('location: ../Users/admin.php');
        //     }
        //     elseif($role === 'requestor'){
        //         $_SESSION['username'] = $username;
        //         $_SESSION['role'] = $role;
        //         header('location: Users/requestor.php');
        //     }
        //     elseif($role ==='approver'){
        //         $_SESSION['username'] = $username;
        //         $_SESSION['role'] = $role;
        //         header('location: Users/approver.php');
        //     }
        // }else{
        //     echo "<script>alert('Invalid Username or Password')</script>";
        // }
    }
}
    if(isset($_POST['logout'])){
        session_unset();
        session_destroy();
        header('../index.php');
    }
?>