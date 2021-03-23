<!-- DASHBOARD -->
<?php 
require '../php/rec_session.php';
include 'Modals/account_menu.php';
if($role != 'recruitment'){
    session_unset();
    session_destroy();
    header('location:../recruitment-login.php');
}
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
<nav class="nav-extended #212121 grey darken-4 z-depth-5">
    <div class="nav-wrapper">
    <a href="#" class="brand-logo center"><img src="../Img/logo.png" alt="" class="responsive-img" style="width:50px;"></a>
      <a href="#">Recruitment Dashboard</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><span style="font-size:20px;font-weight:bold;">&plus;</span></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#" data-target="acct_option" class="dropdown-trigger"><?=ucwords($name);?></a></li>
      </ul>
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent">
        <li class="tab"><a href="#pendingPRF" onclick="load_pending_list()">Pending PRF</a></li>
        <li class="tab"><a href="#verifiedPRF" onclick="load_verified_prf()">Verified PRF</a></li>
        <li class="tab"><a href="#user_accounts" onclick="">User Accounts</a></li>
        <li class="tab"><a href="#recruitment_acct" onclick="">Recruitment Accounts</a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="#" class="modal-trigger" data-target="logout_form"><?=ucwords($name);?></a></li>
  </ul>


<div id="pendingPRF"><?php include 'recruitment_page/pending_prf.php';?></div>
<div id="verifiedPRF"><?php include 'recruitment_page/verified_prf.php';?></div>
<div id="user_accounts"><?php include 'recruitment_page/user_accounts.php';?></div>
<div id="recruitment_acct"><?php include 'recruitment_page/recruitment_acct.php';?></div>

</body>

<script src="../jquery/jquery.min.js"></script>
<script src="../node_modules/materialize-css/dist/js/materialize.min.js"></script>
<script src="../node_modules/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $(document).ready(function(){
        $('.tabs').tabs();
        $('.sidenav').sidenav({
        preventScrolling: true,
        draggable: true,
        inDuration: 500
        });
        $('.modal').modal();
        $('.dropdown-trigger').dropdown({
        constrainWidth: false
        });
        load_pending_list()
    });

 

    //FUNCTION
    function load_pending_list(){
        var filter_pending = $('#filter_pending').val();
        $.ajax({
            url: '../php/recruitment_process.php',
            type: 'POST',
            cache: false,
            data:{
                method: 'load_pending',
                filter_pending:filter_pending
            },success:function(response){
                $('#pending_prf_view').html(response);
            }
        });
    }

    function load_verified_prf(){
      var filter_verified = $('#verified_filter').val();
        $.ajax({
            url: '../php/recruitment_process.php',
            type: 'POST',
            cache: false,
            data:{
                method: 'load_verified',
                filter_verified:filter_verified
            },success:function(response){
                $('#verified_prf_view').html(response);
            }
        });
    }
</script>
</body>
</html>