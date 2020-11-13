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
      <a href="#" class="brand-logo">PRF System Requestor Dashboard</a>
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
    <li><a href="sass.html">Sass</a></li>
    <li><a href="badges.html">Components</a></li>
    <li><a href="collapsible.html">JavaScript</a></li>
  </ul>

  <div id="request" class="col s12">
    <!-- ACTION BUTTON -->
    <div class="fixed-action-btn">
        <a href="#" class="btn-floating btn-large red modal-trigger" data-target="request_mp_modal" onclick="load_request_form()"><b>&plus;</b></a>
    </div>


  </div>



  <div id="approved" class="col s12">Test 2</div>
  <div id="cancel" class="col s12">Test 3</div>
<!-- JS -->
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
    const load_request_form =()=>{
        $('#request_mp_form').load('../Forms/request_mp_form.php');
    }
</script>
</body>
</html>