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
            cursor: pointer;
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
      <a href="#">Approver Dashboard</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><span style="font-size:20px;font-weight:bold;">&plus;</span></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#" data-target="acct_option" class="dropdown-trigger"><?=ucwords($name);?>-<?=ucwords($position);?></a></li>
      </ul>
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent">
        <li class="tab"><a href="#request" onclick="load_for_approval()">For Approval Check<span class="new badge #64b5f6 blue lighten-2" id="pending"></a></span></li>
        <li class="tab"><a href="#note" onclick="load_for_approval_note()">For Approval Note<span class="new badge #64b5f6 blue lighten-2" id="pending_note"></a></span></li>
        <li class="tab"><a href="#approved" onclick="load_approve_req()">Approved Request<span class="new badge #64b5f6 blue lighten-2" id="approved_notif"></span></a></li>
        <li class="tab"><a href="#verified" onclick="">Verified Request<span class="new badge #64b5f6 blue lighten-2" id="verified_notif"></span></a></li>
        <li class="tab"><a href="#cancelled" onclick="">Cancelled Request<span class="new badge #64b5f6 blue lighten-2" id="cancel_notif"></span></a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="#" class="modal-trigger" data-target="logout_form"><?=ucwords($name);?></a></li>
  </ul>
<!-- ACCT MENU -->
<?php include 'Modals/account_menu.php';?>
<?php include 'Modals/approver_preview_request.php';?>
<!-- TAB CONTENTS -->
<div id="request"><?php include 'approver_page/for_approval.php';?></div>
<div id="note"><?php include 'approver_page/for_approval_note.php';?></div>
<div id="approved"><?php include 'approver_page/approved_request.php';?></div>
<div id="verified"></div>
<div id="cancelled"></div>


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
    load_for_approval();
    count_for_note();
    count_approve_prf();
});

const load_for_approval =()=>{
    department = '<?=$department;?>';
    $.ajax({
        url: '../php/approverController.php',
        type: 'POST',
        cache: false,
        data:{
            method: 'load_for_approval',
            department: department
        },success:function(response){
            document.getElementById('for_approval_data').innerHTML = response;
            count_for_approval();
        }
    });
}
const count_for_approval =()=>{
    var rowCount = $('#for_approval_data tr').length;
    var count = parseInt(rowCount);
    document.getElementById('pending').innerHTML = count;
}
const preview_approver_summary =(id)=>{
    $('#prf_ID').val(id);
    $.ajax({
        url: '../php/approverController.php',
        type: 'POST',
        cache: false,
        data:{
            method: 'preview_summary',
            id:id
        },success:function(response){
            $('#prf_preview_form').html(response);
        }
    });

}

const preview_approver_note =(id)=>{
    $('#prf_ID').val(id);
    $.ajax({
        url: '../php/approverController.php',
        type: 'POST',
        cache: false,
        data:{
            method: 'preview_note',
            id:id
        },success:function(response){
            $('#prf_preview_form').html(response);
        }
    });
}


function preview(){
    var id = document.getElementById('prf_ID').value;
    window.open('../Forms/preview_prf.php?id='+id);
}

const load_for_approval_note =()=>{
    department = '<?=$department;?>';
    $.ajax({
        url: '../php/approverController.php',
        type: 'POST',
        cache: false,
        data:{
            method: 'load_for_approval_note',
            department: department
        },success:function(response){
            document.getElementById('for_approval_note_data').innerHTML = response;
        }
    });
}
// COUNT FOR APPROVAL NOTE
const count_for_note =()=>{
    department = '<?=$department;?>';
    $.ajax({
        url: '../php/approverController.php',
        type: 'POST',
        cache: false,
        data:{
            method: 'count_for_approval_note',
            department: department
        },success:function(response){
            $('#pending_note').html(response);
        }
    });
}
// CHECK REQUEST
const check_request =()=>{
    var id = document.querySelector('#prf_ID').value;
    var name = '<?=$name;?>';
    var signatoryLevel = '<?=$level;?>';
    var x = confirm('You are going to approve this request, click OK to proceed!');
    // ENTER APPROVING TO STEP 2 PROCESS
    if(x == true){
        $.ajax({
        url:'../php/approverController.php',
        type: 'POST',
        cache: false,
        data:{
            method:'approval_check_func',
            id:id,
            name:name,
            level:signatoryLevel
        },success:function(response){
            console.log(response);
            if(response == 'true'){
                load_for_approval();
                M.toast({html:'Approved successfully!',classes:'rounded'});
                $('.modal').modal('close','#preview_summary');
            }else if(response == 'false'){
                M.toast({html:'Error!',classes:'rounded'});
            }
            else{
                M.toast({html:'Unauthorized person!',classes:'rounded'});
            }
        }
    });
    }else{
        // DECLINE
        console.log('no');
    }
}
// NOTE REQUEST
const note_request =()=>{
    var id = document.querySelector('#prf_ID').value;
    var name = '<?=$name;?>';
    var signatoryLevel = '<?=$level;?>';
    var x = confirm('You are going to approve this request, click OK to proceed!');
    // ENTER APPROVING TO STEP 2 PROCESS
    if(x == true){
        $.ajax({
        url:'../php/approverController.php',
        type: 'POST',
        cache: false,
        data:{
            method:'approval_note_func',
            id:id,
            name:name,
            level:signatoryLevel
        },success:function(response){
            console.log(response);
            if(response == 'true'){
                load_for_approval();
                M.toast({html:'Approved successfully!',classes:'rounded'});
                $('.modal').modal('close','#preview_summary');
                load_for_approval_note();
            }else if(response == 'false'){
                M.toast({html:'Error!',classes:'rounded'});
            }
            else{
                M.toast({html:'Unauthorized person!',classes:'rounded'});
            }
        }
    });
    }else{
        // DECLINE
        console.log('no');
    }
}
// LOAD APPROVED REQ
const load_approve_req=()=>{
    var department = '<?=$department;?>';
    $.ajax({
        url: '../php/approverController.php',
        type: 'POST',
        cache: false,
        data:{
            method: 'load_approved',
            department: department
        },success:function(response){
            document.getElementById('approved_data').innerHTML = response;
        }
    });
}
// PREVIEW APPROVED
const preview_approved_req =(id)=>{
    $('#prf_ID').val(id);
    $.ajax({
        url: '../php/approverController.php',
        type: 'POST',
        cache: false,
        data:{
            method: 'preview_approved',
            id:id
        },success:function(response){
            $('#prf_preview_form').html(response);
        }
    });
}
// COUNT APPROVED 
const count_approve_prf =()=>{
    department = '<?=$department;?>';
    $.ajax({
        url: '../php/approverController.php',
        type: 'POST',
        cache: false,
        data:{
            method: 'count_approved_prf',
            department: department
        },success:function(response){
            $('#approved_notif').html(response);
        }
    });
}
</script>
</body>
</html>