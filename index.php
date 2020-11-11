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
        h1{
            text-shadow: 2px 2px gray;
        }
        .container{
            border-radius:8px;
            padding:10px;
            background-color:white;
            width:400px;
            opacity:0.89;
        }
        input[type=text]{
            font-family: ubuntu;
        }
        button{
            background: #3C3B3F;  
            background: -webkit-linear-gradient(to right, #605C3C, #3C3B3F); 
            background: linear-gradient(to right, #605C3C, #3C3B3F);
        }
    </style>
</head>
<body>
    <h1 class="header center white-text">PRF SYSTEM</h1>
    <div class="row">
        <div class="container z-depth-5">
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
                    <option value="">--Select Role--</option>
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
                    <a href="#">Create Account</a>
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
        });
        // BACKEND ------------------------------------------------------------------------------------------------------------------------
            const loginBtn =()=>{
                var username = document.getElementById('username').value;
                var pass = document.getElementById('password').value;
                var role = document.getElementById('role').value;
                if(username == ''){
                    swal('Notification','Please enter your username!','info');
                }
            }
    </script>
</body>
</html>