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
<body style="display:none;">
<!-- MODAL -->
<?php
  include 'Modals/rt_verify_check_modal.php';
  include 'Modals/rt_preview_pending.php';
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
        <li class="tab"><a href="#verified" onclick="load_verified()">Verified Request<span class="new badge #616161 grey darken-2" id="verified_notif"></span></a></li>
        <li class="tab"><a href="#cancelled" onclick="load_cancelled()">Cancelled Request<span class="new badge #616161 grey darken-2" id="cancel_notif"></span></a></li>
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
<div id="verified"><?php include 'rt_page/verified_request.php';?></div>
<div id="cancelled"><?php include 'rt_page/cancel_request.php';?></div>

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
    filter = document.querySelector('#deptFilter').value;
    $.ajax({
        url: '../php/rtController.php',
        type: 'POST',
        cache: false,
        data:{
            method: 'load_for_approval_rt',
            department: department,
            filter:filter
        },success:function(response){
            document.getElementById('for_rt_approval').innerHTML = response;
            count_for_approval();
        }
    });
  }
  
// LOAD PENDING
const load_pending =()=>{
  department = '<?=$department;?>';
  filter = document.querySelector('#deptFilterPending').value;
    $.ajax({
        url: '../php/rtController.php',
        type: 'POST',
        cache: false,
        data:{
            method: 'pending_view',
            department: department,
            filter:filter
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
// preview 2nd function
const preview_only =()=>{
  var id = document.getElementById('reference').value;
  window.open('../Forms/preview_prf.php?id='+id);
}
// LOAD VERIFIED
const load_verified =()=>{
  department = '<?=$department;?>';
  filter = document.querySelector('#deptFilterVerified').value;
    $.ajax({
        url: '../php/rtController.php',
        type: 'POST',
        cache: false,
        data:{
            method: 'verified_view',
            department: department,
            filter:filter
        },success:function(response){
            document.getElementById('verified_table').innerHTML = response;
        }
    });
}
// -----------------------------------------
const rt_preview_pending =(id)=>{
  document.querySelector('#reference').value = id;
  $.ajax({
    url: '../php/rtController.php',
    type: 'POST',
    cache: false,
    data:{
      method: 'preview_pending_form',
      id:id
    },success:function(response){
      document.querySelector('#prf_form_rt_pending').innerHTML = response;
    }
  });
}
// LOAD CANCELLED
const load_cancelled =()=>{
  department = '<?=$department;?>';
  filter = document.querySelector('#deptFilterCancel').value;
    $.ajax({
        url: '../php/rtController.php',
        type: 'POST',
        cache: false,
        data:{
            method: 'cancel_view',
            department: department,
            filter:filter
        },success:function(response){
            document.getElementById('cancel_table').innerHTML = response;
        }
    });
}
// APPROVE BY RT
const approve =()=>{
  var id = document.querySelector('#prf_ID').value;
  var name = '<?=$name;?>';
  var signatoryLevel = '<?=$level;?>';
  var x = confirm('You are going to approve this request, click OK to confirm.');
  if(x == true){
    $.ajax({
      url: '../php/rtController.php',
      type: 'POST',
      cache: false,
      data:{
        method: 'approve_rt',
        id:id,
        name:name,
        signatoryLevel:signatoryLevel
      },success:function(response){
        console.log(response);
      }
    });
  }
}
</script>
</body>
</html>