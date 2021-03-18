<?php define('title','Recruiment Login |PRF')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo title; ?></title>
    <link rel="stylesheet" href="node_modules/materialize-css/dist/css/materialize.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="row center container" style="width:50%;">
        <div class="col s12">
            <form action="" method="POST">
                <div class="input-field col s12">
                    <h5>RECRUITMENT LOGIN</h5>
                </div>
                <!-- USERNAME -->
                <div class="input-field col s12">
                    <input type="text" id="username" name="rec_username" autocomplete="off"><label for="">Username</label>
                </div>
                <!-- PASSWORD -->
                <div class="input-field col s12">
                    <input type="password" name="rec_password" id="password"><label for="">Password</label>
                </div>
                <!-- LOGIN -->
                <div class="input-field col s12">
                    <input type="submit" value="login" name="recruitment_login" class="btn blue col s12">
                </div>
            </form>
        </div>
        <div class="row col s12">
            <center><?php require 'php/recruitment_server.php'?></center>
        </div>
    </div>



<!-- JAVASCRIPT -->
    <script src="jquery/jquery.min.js"></script>
    <script src="node_modules/materialize-css/dist/js/materialize.min.js"></script>
    <script src="node_modules/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>