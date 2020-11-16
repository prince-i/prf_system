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
        <li class="tab"><a href="#notif">Notification</a></li>
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



  <div id="notif" class="col s12">Test 2</div>


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

    // --------------------------------------------------------------------------------------------------------------------------
    const validate_add_mp =()=>{
        if(additional_mp.checked == 1){
            document.getElementById('additional_mp').value = '1';
        }else{
           document.getElementById('additional_mp').value = '0';
        }
    }
    const validate_mp_plan =()=>{
        if(mp_plan.checked == 1){
            document.getElementById('mp_plan').value = '1';
        }else{
            document.getElementById('mp_plan').value = '0';
        }
    }
    const validate_re_org =()=>{
        if(re_org.checked == 1){
            document.getElementById('re_org').value = '1';
        }else{
            document.getElementById('re_org').value = '0';
        }
    }
    const validate_promotion =()=>{
        if(promotion.checked == 1){
            document.getElementById('promotion').value = '1';
        }else{
            document.getElementById('promotion').value = '0';
        }
    }
    const validate_retire =()=>{
        if(retire.checked == 1){
            document.getElementById('retire').value = '1';
        }else{
            document.getElementById('retire').value = '0';
        }
    }
    const validate_replace =()=>{
        if(replace.checked ==1){
            document.getElementById('replace').value = '1';
            document.getElementById('txt_replace').style.display = "block";
        }else{
            document.getElementById('replace').value = '0';
            document.getElementById('txt_replace').style.display = "none";
        }
    }
    const validate_others =()=>{
        if(other.checked == 1){
            document.getElementById('other').value = '1';
            document.getElementById('txt_others').style.display = "block";
        }else{
            document.getElementById('other').value = '0';
            document.getElementById('txt_others').style.display = "none";
        }
    }
    // -------------------------------------------------------------------------------------------------------------
    const loadEduc =()=>{
        $.ajax({
            url: '../php/requestorController.php',
            type: 'POST',
            cache: false,
            data:{
                method:'load_educAtt'
            },success:function(response){
                document.getElementById('educAtt').innerHTML = response;
            }
        });
    }
    const load_cert =()=>{
        $.ajax({
            url: '../php/requestorController.php',
            type: 'POST',
            cache: false,
            data:{
                method:'load_certification'
            },success:function(response){
                document.getElementById('certList').innerHTML = response;
            }
        });
    }
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
    const load_budget_source =()=>{
        $.ajax({
            url:'../php/requestorController.php',
            type: 'POST',
            cache: false,
            data:{
                method: 'load_dept'
            },success:function(response){
                document.getElementById('budget_source').innerHTML = response;
            }
        });
    }
    const submit_prf =()=>{
        // POSITION
        var position = document.getElementById('position').value;
        var assign_dept = document.getElementById('assigned_dept').value;
        var female_mp_count = document.getElementById('female_mp_count').value;
        var male_mp_count = document.getElementById('male_mp_count').value;
        // REASON OF HIRING
        var additional_mp_val = document.getElementById('additional_mp').value;
        var mp_plan_val = document.getElementById('mp_plan').value;
        var re_org_val = document.getElementById('re_org').value;
        var promotion_val = document.getElementById('promotion').value;
        var retire_val = document.getElementById('retire').value;
        var replace_val = document.getElementById('replace').value;
        var other_val = document.getElementById('other').value;
        // txt val
        var replaceName = document.getElementById('replaceName').value;
        var replacePosition = document.getElementById('replacePosition').value;
        var other_text = document.getElementById('othersTxt').value;
        // CONTRACT STATUS
        var contract_status = document.getElementById('contract_status_val').value;
        var date_start = document.getElementById('date_start').value;
        var date_end = document.getElementById('date_end').value;
        // qualification
        var educational_attainment = document.getElementById('educationAttainment').value;
        var certification = document.getElementById('require_license_cert').value;
        var other_quali = document.getElementById('other_quali_val').value;
        var job_duties = document.getElementById('job_duties_val').value;
        // interview/validation
        var interview_need_stats = document.getElementById('interview_status').value;
        var interviewer = document.getElementById('interviewers').value;
        var date_interview_set = document.getElementById('date_interview').value;
        var time_interview_set = document.getElementById('time_interview').value;
        // budget info
        var budget_source = document.getElementById('budget_source_val').value;
        var budget_status = document.getElementById('budget_status').value;
        // mp headcount
        var actual_mp_dept = document.getElementById('actual_mp_count_dept').value;
        var plan_mp_dept = document.getElementById('plan_mp_count_dept').value;
        var actual_mp_section = document.getElementById('actual_mp_count_section').value;
        var plan_mp_section = document.getElementById('plan_mp_count_section').value;
        $.ajax({
            url:'../php/requestorController.php',
            type:'POST',
            cache: false,
            data:{
                method:'submit_prf',
                position:position,
                assign_dept:assign_dept,
                female_mp_count:female_mp_count,
                male_mp_count:male_mp_count,
                additional_mp_val:additional_mp_val,
                mp_plan_val:mp_plan_val,
                re_org_val:re_org_val,
                promotion_val:promotion_val,
                retire_val:retire_val,
                replace_val:replace_val,
                other_val:other_val,
                replaceName:replaceName,
                replacePosition:replacePosition,
                other_text:other_text,
                contract_status:contract_status,
                date_start:date_start,
                date_end:date_end,
                educational_attainment:educational_attainment,
                certification:certification,
                other_quali:other_quali,
                job_duties:job_duties,
                interview_need_stats:interview_need_stats,
                interviewer:interviewer,
                date_interview_set:date_interview_set,
                time_interview_set:time_interview_set,
                budget_source:budget_source,
                budget_status:budget_source,
                actual_mp_dept:actual_mp_dept,
                plan_mp_dept:plan_mp_dept,
                actual_mp_section:actual_mp_section,
                plan_mp_section:plan_mp_section
            },success:function(response){
                console.log(response);
            }
        });
    }
</script>
</body>
</html>