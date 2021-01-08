<!DOCTYPE html>
<?php define('title','PRF System');?>
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
            <div class="input-field">
                <select  id="role"  name="role" class="browser-default z-depth-5">
                    <option value="">-- Select Role --</option>
                    <option value="requestor">Requestor (Requesting Department)</option>
                    <option value="approver">Approver (Requesting Department)</option>
                    <option value="verifier">Verifier(HR)</option>
                    <option value="administrator">System Administrator (IT)</option>
                </select>
            </div>
           <div class="input-field">
               <input type="submit" class="btn" name="loginBtn" value="login">
           </div>
           <div class="row">
               <?php include 'php/User.php';?>
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
        });
        const submit_prf =()=>{
            
        }
    </script>
</body>
</html>