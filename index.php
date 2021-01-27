<!DOCTYPE html>
<?php define('title','PRF System');?>
<?php include 'php/User.php';?>
<html lang="en">
<head>
    <link rel="icon" href="Img/logo.jpg" type="image/jpg" sizes="16x16">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo title;?></title>
    <link rel="stylesheet" href="node_modules/materialize-css/dist/css/materialize.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        body{
            background-image: url('Img/recruitment.jpg');
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
        .btn{
            background: #3C3B3F;  
            background: -webkit-linear-gradient(to right, #605C3C, #3C3B3F); 
            background: linear-gradient(to right, #605C3C, #3C3B3F);
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
            <form action="" method="POST">
            <div class="input-field">
                <input type="text" id="username" name="username" autocomplete="off">
                    <label for="">Email</label>
            </div>
            <div class="input-field">
                <input type="password" id="password" name="password">
                    <label for="">Password</label>
            </div>
            <!-- <div class="input-field">
                <select  id="role"  name="role" class="browser-default z-depth-5">
                    <option value="">-- Select Role --</option>
                    <option value="requestor">Requestor (Requesting Department)</option>
                    <option value="approver">Approver (Requesting Department)</option>
                    <option value="verifier">Verifier(HR)</option>
                    <option value="administrator">System Administrator (IT)</option>
                </select>
            </div> -->
           <div class="input-field">
               <input type="submit" class="btn" name="loginBtn" value="login">
           </div>
           <div class="row">
               
           </div>
            </form>
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
            load_dept();
            load_position();
        });

       const load_dept =()=>{
           $.ajax({
                url: 'php/load_dept_section.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'load_dept'
                },success:function(response){
                    $('#dept_view').html(response);
                }
           });
       }
       const load_position =()=>{
        $.ajax({
                url: 'php/load_dept_section.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'load_position'
                },success:function(response){
                    $('#position_select').html(response);
                }
           });
       }
    //    REGISTRATION
    const sendRegistration =()=>{
        name = $('#name').val();
        email = $('#email_username').val();
        new_password = $('#register_password').val();
        new_dept = $('#dept_view').val();
        role = $('#role_select').val();
        position = $('#position_select').val();
        approval_level = $('#approval_level_select').val();
        if(name == ''){
            M.toast({html:'Please input your complete name!', classes:'rounded'});
        }else if(email == ''){
            M.toast({html:'Please input your email, it will serve as your username!', classes:'rounded'});
        }else if(new_password == ''){
            M.toast({html:'Please input your password!', classes:'rounded'});
        }else if(new_dept == ''){
            M.toast({html:'Please select department/section you have associated!', classes:'rounded'});
        }else if(role == ''){
            M.toast({html:'Please select role!', classes:'rounded'});
        }else if(position == ''){
            M.toast({html:'Please select your position!', classes:'rounded'});
        }else if(approval_level == ''){
            M.toast({html:'Please select your approval level!', classes:'rounded'});
        }else{
            // AJAX
            $.ajax({
                url : 'php/account_mngt.php',
                type:'POST',
                cache: false,
                data:{
                    method: 'register_account',
                    name:name,
                    email:email,
                    new_password:new_password,
                    new_dept:new_dept,
                    role:role,
                    position:position,
                    approval_level:approval_level
                },success:function(response){
                    console.log(response);
                    if(response == 'success'){
                        swal('Nofitication','Successfully registered!','success');
                        $('.modal').modal('close','#signUp');
                    }
                }
            });
        }
    }
    </script>
</body>
</html>