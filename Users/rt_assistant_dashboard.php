<?php
    include_once "../php/session.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../Img/logo.jpg" type="image/jpg" sizes="16x16">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recruitment Assistant Manager Dashboard</title>
    <link rel="stylesheet" href="../node_modules/materialize-css/dist/css/materialize.min.css">
    <link rel="stylesheet" href="../style.css">
    <style>
        .btn-large{
            border-radius:30px;
        }
        tbody tr:hover{
            background-color:skyblue;
            cursor: pointer;
        }
    </style>
</head>
<body>
<!-- MODAL -->
<?php
  include 'Modals/rt_verify_check_modal.php';
?>
<!-- /MODAL -->
<nav class="nav-extended #212121 grey darken-4 z-depth-5">
    <div class="nav-wrapper">
    <a href="#" class="brand-logo center"><img src="../Img/logo.png" alt="" class="responsive-img" style="width:50px;"></a>
      <a href="#">Recruitment Assistant Manager Dashboard</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><span style="font-size:20px;font-weight:bold;">&plus;</span></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#" data-target="acct_option" class="dropdown-trigger"><?=ucwords($name);?>-<?=ucwords($position);?></a></li>
      </ul>
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent">
        <li class="tab"><a href="#request" onclick="load_for_rt_appr()">For Verify Check<span class="new badge #616161 grey darken-2" id="check_notif"></a></span></li>
        <li class="tab"><a href="#pending_above" onclick="load_pending()">Pending<span class="new badge #616161 grey darken-2" id="pending_note"></a></span></li>
        <li class="tab"><a href="#verified" onclick="">Verified Request<span class="new badge #616161 grey darken-2" id="verified_notif"></span></a></li>
        <li class="tab"><a href="#cancelled" onclick="">Cancelled Request<span class="new badge #616161 grey darken-2" id="cancel_notif"></span></a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="#" class="modal-trigger" data-target="logout_form"><?=ucwords($name);?></a></li>
  </ul>
<!-- ACCT MENU -->
<?php include 'Modals/account_menu.php';?>
<!-- TAB CONTENTS -->
<div id="request"><?php include 'rt_page/rtForChecking.php';?></div>
<div id="pending_above"><?php include 'rt_page/rt_pending.php';?></div>
<div id="verified"></div>
<div id="cancelled"></div>

<!-- JS -->
<script src="../jquery/jquery.min.js"></script>
<script src="../node_modules/materialize-css/dist/js/materialize.min.js"></script>
<script src="../node_modules/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $(document).ready(function(){
    $('body').fadeIn(500);
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
    // FUNCTIONS
    load_for_rt_appr();
});

  // AJAX
  const load_for_rt_appr =()=>{
    department = '<?=$department;?>';
    $.ajax({
        url: '../php/rtController.php',
        type: 'POST',
        cache: false,
        data:{
            method: 'load_for_approval_rt',
            department: department
        },success:function(response){
            document.getElementById('for_rt_approval').innerHTML = response;
            count_for_approval();
        }
    });
  }
  
// LOAD PENDING
const load_pending =()=>{
  department = '<?=$department;?>';
    $.ajax({
        url: '../php/rtController.php',
        type: 'POST',
        cache: false,
        data:{
            method: 'pending_view',
            department: department
        },success:function(response){
            document.getElementById('pending_view').innerHTML = response;
        }
    });
}
// COUNT FOR VERIFY CHECK
const count_for_approval =()=>{
    var rowCount = $('#for_rt_approval tr').length;
    var count = parseInt(rowCount);
    document.getElementById('check_notif').innerHTML = count;
}

// PREVIEW RT APPROVAL MODAL
const rt_preview =(id)=>{
  $('#prf_ID').val(id);
  $.ajax({
    url: '../php/rtController.php',
    type: 'POST',
    cache:false,
    data:{
      method: 'preview_verify_check_rt',
      id:id
    },success:function(response){
      document.getElementById('prf_preview_form').innerHTML = response;
    }
  });
}
// PREVIEW PRF
const preview =()=>{
  var id = document.getElementById('prf_ID').value;
  window.open('../Forms/preview_prf.php?id='+id);
}
</script>
</body>
</html>