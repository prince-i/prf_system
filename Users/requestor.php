<?php
    include_once "../php/session.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../Img/logo.jpg" type="image/jpg" sizes="16x16">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Requestor Dashboard</title>
    <link rel="stylesheet" href="../node_modules/materialize-css/dist/css/materialize.min.css">
    <link rel="stylesheet" href="../style.css">
    <style>
        .btn-large{
            border-radius:30px;
        }
        #table_requests tbody tr:hover{
            background-color:skyblue;
        }
    </style>
</head>
<body>
    <!-- INCLUDED FILES -->
<?php 
include 'Modals/request_mp_modal.php';
include 'Modals/prf_request_menu.php';
include 'Modals/preview_request.php';
?>
<nav class="nav-extended #01579b light-blue darken-4 z-depth-5">
    <div class="nav-wrapper">
      <a href="#">Requestor Dashboard</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><span style="font-size:20px;font-weight:bold;">&plus;</span></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#"><?=ucwords($name);?></a></li>
      </ul>
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent">
        <li class="tab"><a href="#request" onclick="reload_pending()">Pending Requests<span class="new badge" id="pending"></a></span></li>
        <li class="tab"><a href="#approved" onclick="load_approved_list()">Approved Request<span class="new badge" id="approved_notif"></span></a></li>
        <li class="tab"><a href="#verified">Verified Request<span class="new badge" id=""></span></a></li>
        <li class="tab"><a href="#cancelled">Cancelled Request<span class="new badge" id=""></span></a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="#"><?=ucwords($name);?></a></li>
  </ul>

<!-- MY_REQUEST ----------------------------------------------->
  <div id="request" class="row col s12">
<!-- CONTENT -------------------------------------------------->
   <div class="col s12 hide-on-med-and-down">
        <div class="input-field col l2 m2 s12">
        <a href="#" class="btn-large #0d47a1 blue darken-4 modal-trigger col s12" data-target="request_mp_modal" onclick="load_request_form()">&plus; Request New PRF</a>
        </div>
        <!-- dateFrom -->
        <div class="input-field col l3 m3 s12">
            <input type="text" class="datepicker" id="requestDateFrom" autocomplete=off><label for="">Requested Date From:</label>
        </div>
        <!-- date to -->
        <div class="input-field col l3 m3 s12">
            <input type="text" class="datepicker" id="requestDateTo" autocomplete=off><label for="">To:</label>
        </div>
        <!-- search -->
        <div class="input-field col l2 m2 s12">
            <button class="btn-large  #1e88e5 blue darken-1 col s12 z-depth-3" id="searchReqBtn" onclick="load_request_list()">search</button>
        </div>
        <!-- print btn -->
        <div class="input-field col l2 m2 s12">
            <button class="btn-large #64b5f6 blue lighten-2 col s12 z-depth-3 " id="printBtn">print</button>
        </div>
   </div>
<!-- ---------------------------------------------------- -->
        <div class="col s12">
            <table class="centered z-depth-5 responsive-table" id="table_requests">
                <thead>
                    <th>Request ID</th>
                    <th>Requesting Position</th>
                    <th>Requesting Department</th>
                    <th>Contract Status</th>
                    <th>Requested By</th>
                    <th>Requestor Email</th>
                    <th>Approval Status</th>
                    <th>Verification Status</th>
                    <th>Request Date</th>
                </thead>
                <tbody id="request_data"></tbody>
            </table>
    </div>
<!-- </CONTENT> ---------------------------------------------->
  </div>

  <!-- </MY_REQUEST> ------------------------------------------>

  <div id="approved">
    <?php include 'requestor_page/approve_request_page.php';?>
  </div>
  <div id="verified">verified</div>
  <div id="cancelled">cancelled</div>

<!-- JS -------------------------------------------------------->
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
        load_request_list();
        count_approved();
    });
// LOAD MODAL CONTENT
    const load_request_form =()=>{
        if($('#request_mp_form').load('../Forms/request_mp_form.php')){

        }else{
           $('#request_mp_form').html('loading')
        }
    }
// AUTOVALUE
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
// AUTOVALUE
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
// SUBMIT PRF DETAILS
const submit_prf =()=>{
        var requestor = '<?=$name;?>';
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
        var numberOfCheck = $('input:checkbox:checked').length;
        console.log(numberOfCheck);
// txt val
        var replaceName = document.getElementById('replaceName').value;
// var replacePosition = document.getElementById('replacePosition').value;
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
        var work_exp = document.getElementById('work_experience').value;
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
// VALIDATION --------------------------------------------------------------------------------------------------------------------------------------
        if(position == ''){
            swal('Warning','Hiring position is required.','info');
        }else if(assign_dept == ''){
            swal('Warning','Assigned Department must not empty.','info');
        }else if(numberOfCheck <= 0){
            swal('Warning','Choose atleast 1 (one) reason for hiring.','info');
        }else if(contract_status == ''){
            swal('Warning','Contract status must not empty.','info');
        }else if(educational_attainment == ''){
            swal('Warning','Please enter educational attainment!','info');
        }else if(work_exp == ''){
            swal('Warning','Please enter required work experience!','info'); 
        }else if(certification == ''){
            swal('Warning','Please enter required license or certification!','info'); 
        }else if(job_duties == ''){
            swal('Warning','Please explain the description of duties!','info');
        }else if(interview_need_stats == ''){
            swal('Warning','Please tell us if he/she is required undergo an interview!','info');
        }else if(interviewer == ''){
            swal('Warning','Please enter all the interviewers!','info');
        }else if(date_interview_set == ''){
            swal('Warning','Please set a date for interview!','info');
        }else if(time_interview_set == ''){
            swal('Warning','Please set a time for interview.','info');
        }else if(budget_source == ''){
            swal('Warning','Please specify your budget source information.','info');
        }else if(budget_status == ''){
            swal('Warning','Budget status is required.','info');
        }else if(actual_mp_dept == ''){
            swal('Warning','Actual Manpower count of department is required.','info');
        }else if(plan_mp_dept == ''){
            swal('Warning','Plan manpower count of department is required.','info');
        }else if(actual_mp_section == ''){
            swal('Warning','Actual manpower count of section is required.','info');
        }else if(plan_mp_section == ''){
            swal('Warning','Plan manpower count of your section is required.','info');
        }else{
        document.getElementById('submitPRF').disabled = true;
        $.ajax({
            url:'../php/requestorController.php',
            type:'POST',
            cache: false,
            data:{
                method:'submit_prf',
                requestor:requestor,
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
                other_text:other_text,
                contract_status:contract_status,
                date_start:date_start,
                date_end:date_end,
                educational_attainment:educational_attainment,
                certification:certification,
                work_exp:work_exp,
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
                plan_mp_section:plan_mp_section,
                email:'<?=$username;?>'
            },success:function(response){
                    swal('Notification',response,'success');
                    document.getElementById('submitPRF').disabled = false;
                    $('.modal').modal('close','#request_mp_modal');
                    load_request_list();
            }
        });
    }
}
// RELOAD PENDING
const reload_pending =()=>{
    document.getElementById('requestDateFrom').value = '';
    document.getElementById('requestDateTo').value = '';
    load_request_list();
}
// LOAD LIST PENDING REQUEST ONLY
const load_request_list =()=>{
        var email_requestor = '<?=$username;?>';
        var from = document.getElementById('requestDateFrom').value;
        var to = document.getElementById('requestDateTo').value;
        document.getElementById('searchReqBtn').disabled = true;
        document.getElementById('printBtn').disabled = true;
        $.ajax({
            url: '../php/requestorController.php',
            type: 'POST',
            cache: false,
            data:{
                method: 'requestor_view',
                email:email_requestor,
                from:from,
                to:to
            },success:function(response){
                document.getElementById('searchReqBtn').disabled = false;
                document.getElementById('printBtn').disabled = false;
                document.getElementById('request_data').innerHTML = response;
                count_pending();
            }
        });
}
// LOAD LIST APPROVED REQUEST
const load_approved_list =()=>{
    email = '<?=$username?>';
    $.ajax({
        url: '../php/requestorController.php',
        type: 'POST',
        cache: false,
        data:{
            email:email,
            method: 'fetch_approve_request_requestor'
        },success:function(response){
           $('#approve_data').html(response);
           count_approved();
        }
    })
}
// GET ID
const view_pending =(id)=>{
   
}
// COUNT PENDING
const count_pending =()=>{
    var email = '<?=$username?>';
    $.ajax({
        url: '../php/requestorController.php',
        type: 'POST',
        cache: false,
        data:{
            method: 'count_pending_request',
            email:email
        },success:function(response){
             $('#pending').html(response);
        }
    });
}
// COUNT APPROVE
const count_approved =()=>{
    var email = '<?=$username?>';
    $.ajax({
        url: '../php/requestorController.php',
        type: 'POST',
        cache: false,
        data:{
            method: 'count_approved_request',
            email:email
        },success:function(response){
             $('#approved_notif').html(response);
        }
    });
}

</script>
</body>
</html>
<?php $conn=null;?>