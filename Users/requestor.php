<?php
    include_once "../php/session.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Requestor Dashboard</title>
    <link rel="stylesheet" href="../node_modules/materialize-css/dist/css/materialize.min.css">
    <style>
      
    </style>
</head>
<body>
    <!-- INCLUDED FILES -->
<?php 
include 'Modals/request_mp_modal.php';
?>
<nav class="nav-extended blue z-depth-5">
    <div class="nav-wrapper">
      <a href="#">PRF System Requestor Dashboard</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><span style="font-size:20px;font-weight:bold;">&plus;</span></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#"><?=ucwords($name);?></a></li>
      </ul>
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent">
        <li class="tab"><a href="#request">My Requests</a></li>
        <li class="tab"><a href="#approved">Approved</a></li>
        <li class="tab"><a href="#cancel">Cancelled</a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="#"><?=ucwords($name);?></a></li>
  </ul>

  <!-- MY_REQUEST ------------------------------------------------------------------------------------------------------------->
  <div id="request" class="col s12">
    <!-- ACTION BUTTON -->
    <div class="fixed-action-btn">
        <a href="#" class="btn-floating btn-large red modal-trigger" data-target="request_mp_modal" onclick="load_request_form()"><b>&plus;</b></a>
    </div>
  </div>
  <!-- </MY_REQUEST> ---------------------------------------------------------------------------------------------------------->



  <div id="approved" class="col s12">Test 2</div>
  <div id="cancel" class="col s12">Test 3</div>


<!-- JS ----------------------------------------------------------------------------------------------------------------------->
<script src="../jquery/jquery.min.js"></script>
<script src="../node_modules/materialize-css/dist/js/materialize.min.js"></script>
<script src="../node_modules/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $(document).ready(function(){
        $('.tabs').tabs();
        $('.sidenav').sidenav();
        $('.modal').modal();
        $('.fixed-action-btn').floatingActionButton();
    });
    // load modal content -------------------------------------------------------------------------------------------------------
    const load_request_form =()=>{
        $('#request_mp_form').load('../Forms/request_mp_form.php');
    }
    // load position for request form choices -----------------------------------------------------------------------------------
    const loadPosition =()=>{
        $.ajax({
            url:'../php/requestorController.php',
            type: 'POST',
            cache:false,
            data:{
                method: 'load_position'
            },success:function(response){
                $('#positionList').html(response);
            }
        });
    }
    // --------------------------------------------------------------------------------------------------------------------------
    const validate_add_mp =()=>{
        if(additional_mp.checked == 1){
            let additional_mp_val = '1';
        }else{
            let additional_mp_val = '0';
        }
    }
    const validate_mp_plan =()=>{
        if(mp_plan.checked == 1){
            let mp_plan_val = '1';
        }else{
            let mp_plan_val = '0';
        }
    }
</script>
</body>
</html>