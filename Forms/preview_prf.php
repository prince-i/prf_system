<?php
    require_once '../php/Database.php';
    $id = $_GET['id'];
    //DETECT IF ID WAS DELETED, DOESNT FETCHED OR REMOVE THE PRF PREVIEW WILL CLOSED
    if(empty($id)){
        echo '<script>window.close()</script>';
    }else{
        $query = "SELECT *FROM tb_request_mp WHERE id = '$id'";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        foreach($stmt->fetchALL() as $x){
            $requestor = $x['requestor'];
            $position = $x['requesting_position'];
            $mp_male_required = $x['male_num_mp'];
            $mp_female_required = $x['female_num_mp'];
            $both_gender = $x['both'];
            $totalMP = $x['total_mp'];
            $dept_section = $x['assigned_dept'];
            $contract_stat = $x['contract_status'];
            $educ = $x['education'];
            $work_exp = $x['work_exp'];
            $license = $x['required_license'];
            $other_quali = $x['other_qualification'];
            $duty = $x['job_duties'];
            $interview_req = $x['interview_need'];
            $interviewers = $x['interviewers'];
            $availability_interview = $x['availability_for_interview'];
            $request_date = $x['request_date'];
            $budget_source = $x['budget_source'];
            $budget_status = $x['budget_status'];
            $actual_dept = $x['actual_mp_dept'];
            $actual_section = $x['actual_mp_section'];
            $plan_mp_dept = $x['plan_mp_dept'];
            $plan_mp_section = $x['plan_mp_section'];
            $additional_mp = $x['additional_mp'];
            $mp_plan = $x['mp_plan'];
            $reorganization = $x['reorganization'];
            $promotion = $x['promotion'];
            $retirement = $x['retirement'];
            $replacement = $x['replacement'];
            $replacement_name = $x['replacement_mp_name'];
            $other_reason = $x['others'];
            if($other_reason == ''){
                $other_reason = 'N/A';
            }
            $checker = $x['approve_check_by'];
            $apprNote = $x['approve_noted_by'];
            $verify_check = $x['verify_check_by'];
            $verify_manager = $x['verify_verifier_manager'];
            $verify_div_mgr = $x['verify_verifier_div_mgr'];
            $step = $x['step'];
            // if(!empty($checker)){
            //     $checker_sig = 'APPROVED';
            // }
            $president = $x['president_verify'];
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRF Document REQ-<?=$id;?></title>
    <link rel="stylesheet" href="../node_modules/materialize-css/dist/css/materialize.min.css">
    <style>
        body{
            font-family:arial;
            font-size:11px;
        }
        body[size="A4"] {
            width: 21cm;
            height: 29.7cm;
        }
        td{
            font-size:10px;
        }
        u{
            font-weight:bold;
            
        }
        #form{
            display: none;
        }
    </style>
</head>
<body>
    <img src="../Img/CANCEL STAMP.png" alt="" id="watermark" style="position:absolute;opacity:0.15;width:100%;margin-top:20%;display:none;">
    <img src="../Img/PENDING STAMP.png" alt="" id="pending" style="position:absolute;opacity:0.15;width:90%;margin-top:30%;display:none;">
    <!--  PRF FORM -->
    <div class="row container" id="form">
        <br>
    <!-- TITLE ROW -->
        <div class="col s12">
            <!-- COLUMN 1 -->
            <div class="col s5">
            <img src="../Img/FAS.png" alt="FAS logo" width="250" height="50">
                <p><b>PERSONAL REQUISITION FORM</b></p>
                <b>Instructions/Hiring Information</b>
                <p>Use this form to initiate the recruitment provess for new and existing employee/s. Please complete all applicable sections of this form.</p>
            </div>
            <!-- COLUMN 2 -->
            <div class="col s7">
                <table class="centered" style="border:1.5px solid black;" cellpadding="0" height=""> 
                    <tr style="border:1.5px solid black;" class="#bdbdbd grey lighten-1">
                        <td colspan="3" style="font-weight:bold;font-size:10px;">Approval of Requesting Department</td>
                    </tr>
                    <tr style="border:1.5px solid black;font-size:12px;" class="#bdbdbd grey lighten-1">
                        <td style="border:1.5px solid black;font-weight:bold;">Requested By:</td>
                        <td style="border:1.5px solid black;font-weight:bold;">Checked By:</td>
                        <td style="border:1.5px solid black;font-weight:bold;">Noted By:</td>
                    </tr>
                    <tr>
                        <td style="border:1.5px solid black;"><?=$requestor;?></td>
                        <td style="border:1.5px solid black;"><?=$checker;?></td>
                        <td style="border:1.5px solid black;"><?=$apprNote;?></td>
                    </tr>
                    <!-- POSITIONS -->
                    <tr style="font-size:10px;">
                        <td style="border:1.5px solid black;">Jr. Staff~Above</td>
                        <td style="border:1.5px solid black;">Asst. Mngr./Section Mngr.</td>
                        <td style="border:1.5px solid black;">Dept. Mngr./Div Mngr.</td>
                    </tr>
                </table>
                <p>DATE OF REQUEST: <u><?=$request_date;?></u></p>
            </div>
        </div>
        <!-- HORIZONTAL LINE -->
        <div class="col s12" style="margin-top:-2%;">
            <!-- <div class="divider"></div> -->
            <hr style="border:1px solid black;">
        </div>
  
        <div class="col s12">
            <b>Position Requested</b>
        </div>
        <!-- POSITION REQUEST -->
        <div class="col s12">
            <!-- COLUMN 1 -->
            <div class="col s6">
                <p>Rank/Position: <u><?=$position;?></u></p>
                <p style="margin-top:-2%;">Gender:</p>
            </div>

            <!-- COLUMN 2 -->
            <div class="col s6">
                <p>Assigned Department/Section: <u><?=$dept_section;?></u></p>
                <?php
                    // MALE RETURN
                    if($mp_male_required == 0){
                        
                    }else{
                        echo '<p style="margin-top:-2%;"><b>&#x2611; Male</b> &nbsp;&nbsp;&nbsp;No. of Manpower required: <u>'.$mp_male_required.'</u> MP</p>';
                    }
                    // FEMALE RETURN
                    if($mp_female_required == 0){
                        
                    }else{
                        echo '<p style="margin-top:-2%;"><b>&#x2611; Female</b> &nbsp;&nbsp;&nbsp;No. of Manpower required: <u>'.$mp_female_required.'</u> MP</p>';
                    }
                    // EITHER MALE OR FEMALE
                    if($both_gender == 0){
                        
                    }else{
                        echo '<p style="margin-top:-2%;"><b>&#x2611; Male/Female</b> &nbsp;&nbsp;&nbsp;No. of Manpower required: <u>'.$both_gender.'</u> MP</p>';
                    }
                ?>
                <p style="margin-top:-2%;">Total Manpower required: <u><?=$totalMP;?></u> MP</p>
            </div>
        </div> 
        <!-- REASON FOR HIRING -->
        <div class="col s12"><b>Reason for Hiring:</b></div>
        <div class="col s12">
            <!-- REASON FOR HIRING VALUES-->
            <?php
                if($additional_mp == 1){
                    echo '<div class="col s4">&#x2611; Additional Manpower</div>';
                }
                if($mp_plan == 1){
                    echo '<div class="col s4">&#x2611; Manpower Plan</div>';
                }
                if($reorganization == 1){
                    echo '<div class="col s4">&#x2611; Reorganization</div>';
                }
                if($promotion == 1){
                    echo '<div class="col s4">&#x2611; Promotion</div>';
                }
                if($retirement == 1){
                    echo '<div class="col s4">&#x2611; Retirement</div>';
                }
                if($replacement == 1){
                    echo '<div class="row">';
                    echo '<div class="col s12">';
                    echo '<div class="col s4">&#x2611; Replacement</div>';
                    echo '<div class="col s8"><u>'.$replacement_name.'</u></div>';
                    echo '</div>';
                    echo '</div>';
                }
            ?>
            <div class="row">
            <div class="col s12">
                <div class="col s4">&bullet;Others (Justify)</div>
                <div class="col s8"><u><?=$other_reason;?></u></div>
            </div>
            </div>
        </div>

        <!-- CONTRACT STATUS -->
        <div class="row">
            <div class="col s12"><b>Contract Status</b></div>
            <div class="col s6">
                &nbsp;&nbsp;&nbsp;<u><?=$contract_stat?></u>
            </div>
            <div class="col s6">
                <b>Date Start:</b> 0000-00-00 <b> &nbsp; Date End:</b> 0000-00-00
            </div>
        </div>

        <!-- QUALIFICATION REQUIRED -->
        <div class="row">
            <div class="col s12"><b>Qualifications Required</b></div>
        <!--  -->
        <div class="col s12">
           <div class="col s6">Educational Attainment:</div>
           <div class="col s6"><u><?=$educ;?></u></div>
        </div>
        <!--  -->
        <div class="col s12">
           <div class="col s6">Work Experience:</div>
           <div class="col s6"><u><?=$work_exp; ?></u></div>
        </div>
        <!--  -->
        <div class="col s12">
           <div class="col s6">Required License/Certifications:</div>
           <div class="col s6"><u><?=$license;?></u></div>
        </div>
        <!--  -->
        <div class="col s12">
           <div class="col s6">Others:</div>
           <div class="col s6"><u><?=$other_quali;?></u></div>
        </div>
        <!--  -->
        <div class="col s12">
           <div class="col s6">Brief description of duties:</div>
           <div class="col s6"><u><?=$duty;?></u></div>
        </div>
    </div>

    <!-- INTERVIEW/Validation -->
        <div class="row">
            <div class="col s12"><b>Interview/Validation</b></div>
        <!-- REQUIRED -->
        <div class="col s12">
           <div class="col s6">Required for interview/validation:</div>
           <div class="col s6"><u><?=ucwords($interview_req);?></u></div>
        </div>
        <!-- INTERVIEWERS -->
        <div class="col s12">
           <div class="col s6">Interviewer/s:</div>
           <div class="col s6"><u><?=ucwords($interviewers);?></u></div>
        </div>
        <!-- AVAILABILITY -->
        <div class="col s12">
           <div class="col s6">Day/Time available for interview/validation:</div>
           <div class="col s6"><u><?=$availability_interview;?></u></div>
        </div>
        </div>


    <!--  BUDGET INFORMATION  -->
    <div class="row #bdbdbd grey lighten-1">
        <div class="col s12"><b>Budget Information</b></div>
        <!-- BUDGET SOURCE -->
        <div class="col s12">
           <div class="col s6">Budget Source:</div>
           <div class="col s6"><u><?=$budget_source;?></u></div>
        </div>
        <!-- BUDGET -->
        
        <div class="col s12">
           <div class="col s6">Budget:</div>
           <div class="col s6"><u><?=$budget_status;?></u></div>
        </div>
        <!-- MP HEADCOUNT -->
        <div class="col s12">
           <div class="col s6">Manpower Headcount:</div>
           <div class="col s6">--</div>
        </div>
        <!-- COUNT DEPT-->
        <div class="col s12">
            <div class="col s2"></div>
            <div class="col s3">Department:</div>
            <div class="col s3">Actual = <u><?=$actual_dept;?> MP</u></div>
            <div class="col s4">Plan = <u><?=$plan_mp_dept;?> MP</u></div>
        </div>
        <!-- SECTION -->
        <div class="col s12">
            <div class="col s2"></div>
            <div class="col s3">Section:</div>
            <div class="col s3">Actual = <u><?=$actual_section;?> MP</u></div>
            <div class="col s4">Plan = <u><?=$plan_mp_section;?> MP</u></div>
        </div>
    </div>
    
    <!-- SIGNATORIES -->
    <div class="row">
        <div class="co s12">
            <div class="col s5 center">
              
            </div>
            <div class="col s7">
                <table class="centered" style="border:1px solid black;" cellpadding="0" cellspacing="0">
                    <tr class="#bdbdbd grey lighten-1">
                        <td colspan="4" style="border:1px solid black;font-weight:bold;">Verification of Request</td>
                    </tr>
                    <tr class="#bdbdbd grey lighten-1">
                        <td style="border:1px solid black;font-weight:bold;">Checked By:</td>
                        <td colspan="2" style="border:1px solid black;font-weight:bold;">Verified By:</td>
                        <td style="border:1px solid black;font-weight:bold;">Approved By:</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid black;"><?=ucwords($verify_check);?></td>
                        <td style="border:1px solid black;"><?=ucwords($verify_manager);?></td>
                        <td style="border:1px solid black;"><?=ucwords($verify_div_mgr);?></td>
                        <td style="border:1px solid black;"><?=ucwords($president);?></td>
                    </tr>
                    <tr>
                        <td style="border:1px solid black;font-weight:bold;font-size:9px;">Recruitment Asst. Mngr</td>
                        <td style="border:1px solid black;font-weight:bold;font-size:9px;">HRD Manager</td>
                        <td style="border:1px solid black;font-weight:bold;font-size:9px;">HRD Div. Mngr</td>
                        <td style="border:1px solid black;font-weight:bold;font-size:9px;">President</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <br>
    <button class="btn-small blue z-depth-5" id="print_btn" onclick="print_docs()" style="border-radius:30px;">Print/Save</button>
    </div>

    <script src="../jquery/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#form').fadeIn(500);
        });
        function print_docs(){
            var printButton = document.querySelector('#print_btn');
            printButton.style.display = 'none';
            window.print();
            printButton.style.display = 'block';
        }
        detectCancellation();
        function detectCancellation(){
            var status = '<?=$step?>';
            if(status == '0'){
               document.getElementById('watermark').style.display = "block";
            }else{
                document.getElementById('watermark').style.display = "none";
            }
        }

        detectPending();
        function detectPending(){
            var status = '<?=$step;?>';
            if(status >= 1 && status <=6){
                document.getElementById('pending').style.display = "block";
            }else{
                document.getElementById('pending').style.display = "none";
            }
        }
    </script>
</body>
</html>
