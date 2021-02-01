<?php
    include_once "../php/session.php";
    if($level != 7){
      session_unset();
      session_destroy();
      header('location:../index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../Img/logo.jpg" type="image/jpg" sizes="16x16">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>President Dashboard</title>
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
  include 'Modals/pres_appr.php';
  include 'Modals/decline_pres.php';
  include 'Modals/pres_summary.php';
?>
<!-- /MODAL -->
<nav class="nav-extended #212121 grey darken-4 z-depth-5">
    <div class="nav-wrapper">
    <a href="#" class="brand-logo center"><img src="../Img/logo.png" alt="" class="responsive-img" style="width:50px;"></a>
      <a href="#">President Dashboard</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><span style="font-size:20px;font-weight:bold;">&plus;</span></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#" data-target="acct_option" class="dropdown-trigger"><?=ucwords($name);?>-<?=ucwords($position);?></a></li>
      </ul>
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent">
        <li class="tab"><a href="#request" onclick="for_approval()">For Approval<span class="new badge #616161 grey darken-2" id="check_notif"></a></span></li>
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
<div id="request"><?php include_once 'president_page/for_approval.php';?></div>
<div id="verified"><?php include_once 'president_page/verified_req.php';?></div>
<div id="cancelled"><?php include_once 'president_page/cancelled_req.php';?></div>

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
    for_approval();
});

function for_approval(){
  var filter = document.getElementById('deptFilterReq').value;
  $.ajax({
    url: '../php/presController.php',
    type: 'POST',
    cache: false,
    data:{
      method: 'for_approval',
      filter:filter,
    },success:function(response){
      document.getElementById('req_table').innerHTML = response;
    }
  });
}

// LOAD VERIFIED
function load_verified(){
  var filter = document.getElementById('deptFilterDone').value;
  $.ajax({
    url: '../php/presController.php',
    type: 'POST',
    cache: false,
    data:{
      method: 'verified_prf',
      filter:filter,
    },success:function(response){
      document.getElementById('done_table').innerHTML = response;
    }
  });
}
// CANCEL REQ
function load_cancelled(){
  var filter = document.getElementById('deptFilterCancel').value;
  $.ajax({
    url: '../php/presController.php',
    type: 'POST',
    cache: false,
    data:{
      method: 'cancelled_prf',
      filter:filter,
    },success:function(response){
      document.getElementById('cancel_table').innerHTML = response;
    }
  });
}

// APPROVAL PREVIEW
function appr_preview(id){
  document.getElementById('req_id').value = id;
  $.ajax({
    url: '../php/presController.php',
    type: 'POST',
    cache: false,
    data:{
      method:'preview_approval',
      id:id
    },success:function(response){
      document.getElementById('preview_form').innerHTML = response;
    }
  });
}

function preview(){
  var id = document.getElementById('req_id').value;
  window.open('../Forms/preview_prf.php?id='+id,"Preview","width=1000,height=600,left=150");
}

function preview_only(){
  var id = document.getElementById('prev_id').value;
  window.open('../Forms/preview_prf.php?id='+id,"Preview","width=1000,height=600,left=150");
}

function approve(){
  var id = document.getElementById('req_id').value;
  var level = '<?=$level;?>';
  var name = '<?=ucwords($name);?>';
  var x = confirm('You are going to approve this PRF. Click "OK" to proceed.');
  if(x == true){
    document.getElementById('approveBtn').disabled = true;
    $.ajax({
    url: '../php/presController.php',
    type: 'POST',
    cache: false,
    data:{
      method: 'approve_pres_func',
      id:id,
      level:level,
      name:name
    },success:function(response){
      // console.log(response);
      if(response == 'invalid'){
        M.toast({html:'Unauthorized Personnel!',classes:'rounded'});
      }else if(response == 'fail'){
        M.toast({html:'Error!',classes:'rounded'});
      }else{
        swal('Approved','Successfully approved request!','success');
        for_approval();
        $('.modal').modal('close','#appr_pres_modal');
        // syncToRms();
      }
    }
  });
  }else{
    // DO NOTHING
  }
}
// // SYNC TO RMS
// function syncToRms(){
//   var id = $('#req_id').val();
//   console.log(id);
//   $.ajax({
//     url: '../php/auto_sync.php',
//     type: 'POST',
//     cache:false,
//     data:{
//       method:'transfer',
//       id:id
//     },success:function(response){
//       console.log(response);
//     }
//   });
// }

// DECLINE FUNCTION
function get_id_decline(id){
  // console.log(id);
  document.getElementById('decline_id').value = id;
  $('.modal').modal('close','#appr_pres_modal');
}

function disapproved(){
  var id = document.getElementById('decline_id').value;
  var cancel_remarks = document.getElementById('cancel_remarks').value;
  if(cancel_remarks == ''){
    swal('Incomplete','Please enter your reason for cancelling this request.','info');
  }else{
    document.getElementById('decConfirmBtn').disabled = true;
    $.ajax({
      url:'../php/presController.php',
      type:'POST',
      cache:false,
      data:{
        method: 'disapprove_president',
        id:id,
        cancel_remarks:cancel_remarks
      },success:function(response){
        // console.log(response);
        if(response == 'ok'){
          swal('Done!','Disapproved successfully!','success');
          $('.modal').modal('close','#decline_pres');
          for_approval();
          document.getElementById('decConfirmBtn').disabled = false;
        }else{
          document.getElementById('decConfirmBtn').disabled = false;
          swal('Error!');
        }
      }
    });
  }
}
// GET PREVIEW ID
function preview_id(id){
  console.log(id);
  // THROW ID TO INPUT HIDDEN
  document.getElementById('prev_id').value = id;
  $.ajax({
    url: '../php/presController.php',
    type: 'POST',
    cache: false,
    data:{
      method: 'preview_verified',
      id:id
    },success:function(response){
      // console.log(response);
      document.getElementById('preview_verified_form').innerHTML = response;
    }
  });
}
</script>
</body>
</html>