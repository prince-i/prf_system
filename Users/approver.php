<?php
    include_once "../php/session.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../Img/logo.jpg" type="image/jpg" sizes="16x16">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Approver Dashboard</title>
    <link rel="stylesheet" href="../node_modules/materialize-css/dist/css/materialize.min.css">
    <link rel="stylesheet" href="../style.css">
    <style>
        .btn-large{
            border-radius:30px;
        }
        tbody tr:hover{
            background-color:skyblue;
        }
    </style>
</head>
<body>
    <!-- INCLUDED FILES -->
<?php 
include 'Modals/request_mp_modal.php';
include 'Modals/preview_request.php';
?>
<nav class="nav-extended #01579b light-blue darken-4 z-depth-5">
    <div class="nav-wrapper">
      <a href="#">Requestor Dashboard</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><span style="font-size:20px;font-weight:bold;">&plus;</span></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#" data-target="acct_option" class="dropdown-trigger"><?=ucwords($name);?></a></li>
      </ul>
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent">
        <li class="tab"><a href="#request" onclick="">For Approval<span class="new badge" id="pending"></a></span></li>
        <li class="tab"><a href="#approved" onclick="">Approved Request<span class="new badge" id="approved_notif"></span></a></li>
        <li class="tab"><a href="#verified" onclick="">Verified Request<span class="new badge" id="verified_notif"></span></a></li>
        <li class="tab"><a href="#cancelled" onclick="">Cancelled Request<span class="new badge" id="cancel_notif"></span></a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="#" class="modal-trigger" data-target="logout_form"><?=ucwords($name);?></a></li>
  </ul>
<!-- ACCT MENU -->
<?php include 'Modals/account_menu.php';?>


<!-- JS -->
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
        $('.fixed-action-btn').floatingActionButton();
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
            autoClose: true
        });
        $('.collapsible').collapsible();
        $('.dropdown-trigger').dropdown({
            constrainWidth: false
        });
    });
</script>
</body>
</html>