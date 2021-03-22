<!-- DASHBOARD -->
<?php 
require '../php/rec_session.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="../Img/logo.jpg" type="image/jpg" sizes="16x16">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recruitment</title>
    <link rel="stylesheet" href="../node_modules/materialize-css/dist/css/materialize.min.css">
</head>
<body>
    <div class="row">
        <div class="col l2 m3 s12 hide-on-med-and-down">
            <div class="collection with-header" style="min-height:90vh;">
                <div class="collection-header"><h5><?=$name;?></h5></div>
                <a href="javascript:void(0)" class="collection-item" onclick="pending_prf_page()">PENDING PRF</a>
                <a href="javascript:void(0)" class="collection-item" onclick="verified_prf_page()">VERIFIED PRF</a>
                <a href="javascript:void(0)" class="collection-item">USER ACCOUNT</a>
                <a href="javascript:void(0)" class="collection-item">RECRUITMENT ACCOUNT</a>
                <a href="javascript:void(0)" class="collection-item">LOGOUT</a>
            </div>
        </div>
        <div class="col l10 m9 s12">
        <!-- CONTENT -->
            <div class="row">
                <div class="collection col s12" style="min-height:90vh;">
                    <div class="row" id="renderer"></div>
                </div>
            </div>
        </div>
    </div>

<script src="../jquery/jquery.min.js"></script>
<script src="../node_modules/materialize-css/dist/js/materialize.min.js"></script>
<script src="../node_modules/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $(document).ready(function(){
        $('#renderer').load('recruitment_page/pending_prf.php');
    });

    function pending_prf_page(){
        $('#renderer').load('recruitment_page/pending_prf.php');
    }

    function verified_prf_page(){
        $('#renderer').load('recruitment_page/verified_prf.php');
    }

    //FUNCTION


</script>
</body>
</html>