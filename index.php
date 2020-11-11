<!DOCTYPE html>
<?php define('title','PRF System');?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo title;?></title>
    <link rel="stylesheet" href="node_modules/materialize-css/dist/css/materialize.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        body{
            background-image: url('Img/BG.jpg');
            background-size:cover;
            background-repeat: no-repeat;
            background-origin: content-box;
            background-attachment: fixed;
        }
        .container{
            border-radius:8px;
            padding:10px;
            background-color:white;
            width:400px;
            opacity:0.89;
            margin-top:5%;
        }
        input[type=text]{
            font-family: ubuntu;
        }
        select{
            font-family: ubuntu;
        }
        button{
            background: #3C3B3F;  
            background: -webkit-linear-gradient(to right, #605C3C, #3C3B3F); 
            background: linear-gradient(to right, #605C3C, #3C3B3F);
        }
        #clock{
            font-size:100px;
           
        }
    </style>
</head>
<body>
    <!-- INCLUDES -->
    <?php
    include 'Users/Modals/signup.php';
    ?>
    <!-- <INCLUDES/> -->
    <div class="row">
        <div class="container z-depth-5" style="display:none;">
            <h4 class="center">PRF System</h4>
            <div class="input-field">
                <input type="text" id="username" autocomplete="off">
                    <label for="">Username</label>
            </div>
            <div class="input-field">
                <input type="password" id="password">
                    <label for="">Password</label>
            </div>
            <div class="input-field">
                <select name="" id="role" class="browser-default">
                    <option value="">-- Select Role --</option>
                    <option value="requestor">Requestor</option>
                    <option value="verificator">Verificator</option>
                    <option value="administrator">System Administrator</option>
                </select>
            </div>
           <div class="input-field">
               <button class="btn waves-effect" onclick="loginBtn()">login</button>
           </div>
           <!-- SIGN UP -->
           <div class="row">
                <div class="input-field right">
                    <a href="#" data-target="signUp" class="modal-trigger">Create Account</a>
                </div>
           </div>
        </div>
    </div>
    <!-- JAVASCRIPT -->
    <script src="jquery/jquery.min.js"></script>
    <script src="node_modules/materialize-css/dist/js/materialize.min.js"></script>
    <script src="node_modules/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        // FRONTENT------------------------------------------------------------------------------------------------------------------------
        $(document).ready(function(){
            $('.modal').modal();
            $('.container').fadeToggle(1000);
            startTime();
        });
        // BACKEND ------------------------------------------------------------------------------------------------------------------------
            const loginBtn =()=>{
                var username = document.getElementById('username').value;
                var pass = document.getElementById('password').value;
                var role = document.getElementById('role').value;
                if(username == ''){
                    swal('Notification','Please enter your username!','info');
                }else if(pass == ''){
                    swal('Notification','Please enter your password!','info');
                }else if(role == ''){
                    swal('Notification','Please select your role!','info');
                }else{
                    $.ajax({
                        url: 'php/User.php',
                        type: 'POST',
                        cache:false,
                        data:{
                            method:'login',
                            username:username,
                            pass:pass,
                            role:role
                        },success:function(response){
                            console.log(response);
                            let split = response.split("~!~");
                            let status = split[0];
                            let role = split[1];
                            if(status == "locked"){
                                swal('Notification','Access Denied, invalid username or password! Please contact IT Department for account verification.','error');
                            }else{
                                if(role == "administrator"){
                                    location.replace("Users/system_admin.php");
                                }
                                if(role == "verificator"){
                                    location.replace("Users/verificator.php");
                                }
                                if(role == "requestor"){
                                    location.replace("Users/requestor.php");
                                }
                            }
                        }
                    });
                }
            }

    </script>
</body>
</html>