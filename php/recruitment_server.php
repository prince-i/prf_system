<?php
    include 'Database.php';
    session_start();
    if(isset($_POST['recruitment_login'])){
        $username = $_POST['rec_username'];
        $password = $_POST['rec_password'];
        // VERIFICATION
        if(empty($username)){
            echo '<p style="color:red;font-weight:bold;">USERNAME IS REQUIRED!</p>';
        }elseif(empty($password)){
            echo '<p style="color:red;font-weight:bold;">PASSWORD IS REQUIRED!</p>';
        }else{
            // SQL QUERY VERIFY USER
            $sql = "SELECT username,password FROM recruitment_account WHERE username = '$username' AND password = '$password' LIMIT 1";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $c = $stmt->rowCount();
            if($c > 0){
                // FETCH DATA FOR SESSION
                foreach($stmt->fetchALL() as $x){

                    $_SESSION['username'] = $username;
                    header('location: Users/recruitment.php');
                }
            }else{
                echo '<p style="color:red;font-weight:bold;">INVALID USER!</p>';
            }
        }
        
    }
    // LOGOUT
    if(isset($_POST['logout'])){
        session_unset();
        session_destroy();
        header('../index.php');
    }
?>