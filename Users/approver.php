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
<nav class="nav-extended #d32f2f red darken-2 z-depth-5">
    <div class="nav-wrapper">
      <a href="#">Approver Dashboard</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><span style="font-size:20px;font-weight:bold;">&plus;</span></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#" data-target="acct_option" class="dropdown-trigger"><?=ucwords($name);?>-<?=ucwords($position);?></a></li>
      </ul>
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent">
        <li class="tab"><a href="#request" onclick="load_for_approval()">For Approval Check<span class="new badge #ef9a9a red lighten-3" id="pending"></a></span></li>
        <li class="tab"><a href="#note" onclick="load_for_approval_note()">For Approval Note<span class="new badge #ef9a9a red lighten-3" id="pending"></a></span></li>
        <li class="tab"><a href="#approved" onclick="">Approved Request<span class="new badge #ef9a9a red lighten-3" id="approved_notif"></span></a></li>
        <li class="tab"><a href="#verified" onclick="">Verified Request<span class="new badge #ef9a9a red lighten-3" id="verified_notif"></span></a></li>
        <li class="tab"><a href="#cancelled" onclick="">Cancelled Request<span class="new badge #ef9a9a red lighten-3" id="cancel_notif"></span></a></li>
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
<div id="approved"></div>
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
            console.log(response);
        }
    });
}
</script>
</body>
</html>