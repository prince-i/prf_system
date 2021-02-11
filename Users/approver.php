<?php
    include "../php/session.php";
    
    if($level >= 2 && $level <= 3){
        // DO NOTHING
    }else{
        // RESTRICT THE USER IF NOT LEVEL 2 and 3
        session_unset();
        session_destroy();
        header('location: ../index.php');
    }
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
        table{
            font-size:12px;
        }
    </style>
</head>
<body style="display:none;">
    <!-- INCLUDED FILES -->
<?php 
include 'Modals/request_mp_modal.php';
include 'Modals/preview_request.php';
include 'Modals/declineCheckModal.php';
include 'Modals/declineNoteModal.php';
?>
<nav class="nav-extended #01579b light-blue darken-4 z-depth-5">
    <div class="nav-wrapper">
    <a href="#" class="brand-logo center"><img src="../Img/logo.png" alt="" class="responsive-img" style="width:50px;"></a>
      <a href="#">Approver Dashboard</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><span style="font-size:20px;font-weight:bold;">&plus;</span></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="requestor.php" id="createPRF">Create PRF Request</a></li>
        <li><a href="#" data-target="acct_option" class="dropdown-trigger"><?=ucwords($name);?>-<?=ucwords($position);?></a></li>
      </ul>
    </div>
    <div class="nav-content">
      <?php
        if($level == 2){
            echo '<ul class="tabs tabs-transparent">';
            echo '<li class="tab"><a href="#request" onclick="load_for_approval()" >For Approval Check</a></li>';
            // echo '<li class="tab"><a href="#note" onclick="load_for_approval_note()">For Approval Note</a></li>';
            echo '<li class="tab"><a href="#approved" onclick="load_approve_req()">Approved Request</a></li>';
            echo '<li class="tab"><a href="#verified" onclick="verifiedView()">Verified Request</a></li>';
            echo '<li class="tab"><a href="#cancelled" onclick="cancelView()">Cancelled Request</a></li>';
            echo '</ul>';
        }else{
            echo '<ul class="tabs tabs-transparent">';
            // echo '<li class="tab"><a href="#request" onclick="load_for_approval()" >For Approval Check</a></li>';
            echo '<li class="tab"><a href="#note" onclick="load_for_approval_note()">For Approval Note</a></li>';
            echo '<li class="tab"><a href="#approved" onclick="load_approve_req()">Approved Request</a></li>';
            echo '<li class="tab"><a href="#verified" onclick="verifiedView()">Verified Request</a></li>';
            echo '<li class="tab"><a href="#cancelled" onclick="cancelView()">Cancelled Request</a></li>';
            echo '</ul>';
        }
      ?>
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
<div id="verified"><?php include 'approver_page/verified_request.php';?></div>
<div id="cancelled"><?php include 'approver_page/cancel_request.php';?></div>


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
    load_for_approval();
    defineLevel();
});

function defineLevel(){
    var level = '<?=$level;?>';
    if(level == 3){
        $('#createPRF').css('display','none');
        $('#request').css('display','none');
        $('#approvalTab').css('display','none');
    }
    if(level == 2){
        $('#note').css('display','none');
        $('#noteTab').css('display','none');
    }
}

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
        }
    });
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
    window.open('../Forms/preview_prf.php?id='+id,"Preview","width=1000,height=600,left=150");
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
                sendmail();
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
        // console.log('no');
    }
}

// EMAIL TO APPROVER CHECKER
const sendmail =()=>{
    var level = '<?=$level;?>';
    var dept = '<?=$department;?>';
    $.ajax({
        url: '../phpmailer/for_approval_notif.php',
        type: 'POST',
        cache: false,
        data:{
            level:level,
            dept:dept
        },success:function(response){
            console.log(response);
        }
    });
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
                sendNote();
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
        // console.log('no');
    }
}
// EMAIL NOTE 
const sendNote =()=>{
    var level = '<?=$level;?>';
    var dept = '<?=$department;?>';
    $.ajax({
        url: '../phpmailer/for_approval_notif.php',
        type: 'POST',
        cache: false,
        data:{
            level:level,
            dept:dept
        },success:function(response){
            console.log(response);
        }
    });
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



// LOAD VERIFIED
const verifiedView =()=>{
    department = '<?=$department;?>';
    $.ajax({
        url: '../php/approverController.php',
        type: 'POST',
        cache: false,
        data:{
            method: 'load_verified_view',
            department: department
        },success:function(response){
            document.getElementById('verified_data').innerHTML = response;
           
        }
    });
}
// LOAD CANCEL REQUEST
const cancelView =()=>{
    department = '<?=$department;?>';
    $.ajax({
        url: '../php/approverController.php',
        type: 'POST',
        cache: false,
        data:{
            method: 'cancel_view',
            department: department
        },success:function(response){
            document.getElementById('cancelled_data').innerHTML = response;
      
        }
    });
}
// PREVIEW CANCELLED
const preview_canceled_req =(id)=>{
    $('#prf_ID').val(id);
    $.ajax({
        url: '../php/approverController.php',
        type: 'POST',
        cache: false,
        data:{
            method: 'preview_canceled',
            id:id
        },success:function(response){
            $('#prf_preview_form').html(response);
        }
    });
}
// GET ID TO DECLINE BY CHECKER
const get_id_check_decline =(id)=>{
    // console.log(id);
    document.querySelector('#ref_id_check').value = id;
    $('.modal').modal('close','#preview_request');

}

const get_id_note =(id)=>{
    document.querySelector('#ref_id_note').value = id;
}
// DECLINE CHECKER FUNCTION
const decline_checker =()=>{
    var id = document.querySelector('#ref_id_check').value;
    var remarks = document.querySelector('#cancel_remarks_check').value;
    console.log(id);
    var x = confirm('Are you sure to decline this request? Click OK to proceed.');
    if(x == true){
        if(remarks == ''){
            swal('Notification','Please include your cancel remarks!','info');
        }else{
            $.ajax({
            url: '../php/approverController.php',
            type: 'POST',
            cache: false,
            data:{
                method: 'decline_checker_func',
                id:id,
                level: '<?=$level;?>',
                remarks:remarks
            },success:function(response){
                // console.log(response);
                
                if(response =='unauthorized'){
                    M.toast({html:'Unauthorized personnel!',classes:'rounded'});
                }else{
                    $('.modal').modal('close','#declineCheckModal');
                    load_for_approval();
                    $('#cancel_remarks_check').val('');
                    M.toast({html:'Success!',classes:'rounded'});
                }
            }
        });
        }
    }else{
        console.log('DECLINE NOT SET');
    }

}
// ?DECLINE NOTE
const decline_note =()=>{
    $('.modal').modal('close','#declineNoteModal')
    var id = document.querySelector('#ref_id_note').value;
    var remarks = document.querySelector('#cancel_remarks_note').value;
    console.log(id);
    var x = confirm('Are you sure to decline this request? Click OK to proceed.');
    if(x == true){
        if(remarks == ''){
            swal('Notification','Please include your cancel remarks!','info');
        }else{
            $.ajax({
            url: '../php/approverController.php',
            type: 'POST',
            cache: false,
            data:{
                method: 'decline_note_func',
                id:id,
                level: '<?=$level;?>',
                remarks:remarks
            },success:function(response){
                // console.log(response);
                if(response =='unauthorized'){
                    M.toast({html:'Unauthorized personnel!',classes:'rounded'});
                }else{
                    $('.modal').modal('close','#declineCheckModal');
                    load_for_approval();
                    $('#cancel_remarks_check').val('');
                    M.toast({html:'Success!',classes:'rounded'});
                }
            }
        });
        }
    }else{
        console.log('DECLINE NOT SET');
    }
}

</script>
</body>
</html>