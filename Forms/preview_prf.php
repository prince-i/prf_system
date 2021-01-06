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
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRF Document</title>
    <link rel="stylesheet" href="../node_modules/materialize-css/dist/css/materialize.min.css">
    <style>
        body{
            font-family:arial;
            font-size:11px;
        } 
        td{
            font-size:10px;
        }
        u{
            font-weight:bold;
            
        }
    </style>
</head>
<body>
    <div class="row container">
        <br>
    <!-- TITLE ROW -->
        <div class="col s12">
            <!-- COLUMN 1 -->
            <div class="col s6">
            <img src="../Img/FAS.png" alt="FAS logo" width="250" height="50">
                <p><b>PERSONAL REQUISITION FORM</b></p>
                <b>Instructions/Hiring Information</b>
                <p>Use this form to initiate the recruitment provess for new and existing employee/s.</p>
            </div>
            <!-- COLUMN 2 -->
            <div class="col s6">
                <table class="centered" style="border:1.5px solid black;" cellpadding="0"> 
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
                        <td style="border:1.5px solid black;"></td>
                        <td style="border:1.5px solid black;"></td>
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
                <p style="margin-top:-2%;">No. of Manpower required (Male): <u><?=$mp_male_required;?></u></p>
            </div>
            <!-- COLUMN 2 -->
            <div class="col s6">
                <p>Assigned Department/Section: <u><?=$dept_section;?></u></p>
                <p style="margin-top:-2%;">No. of Manpower required (Female): <u><?=$mp_female_required;?></u></p>
                <p style="margin-top:-2%;">Total Manpower required: <u><?=$mp_male_required + $mp_female_required;?></u></p>
            </div>
        </div> 
        <!-- REASON FOR HIRING -->
        <div class="col s12"><b>Reason for Hiring:</b></div>
        <div class="col s12">
            <!-- REASON FOR HIRING VALUES-->
            <?php
                if($additional_mp == 1){
                    echo '<div class="col s4">&check; Additional Manpower</div>';
                }
                if($mp_plan == 1){
                    echo '<div class="col s4">&check; Manpower Plan</div>';
                }
                if($reorganization == 1){
                    echo '<div class="col s4">&check; Reorganization</div>';
                }
                if($promotion == 1){
                    echo '<div class="col s4">&check; Promotion</div>';
                }
                if($retirement == 1){
                    echo '<div class="col s4">&check; Retirement</div>';
                }
                if($replacement == 1){
                    echo '<div class="row">';
                    echo '<div class="col s12">';
                    echo '<div class="col s4">&check; Replacement</div>';
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
           <div class="col s6"><u><?=$interview_req;?></u></div>
        </div>
        <!-- INTERVIEWERS -->
        <div class="col s12">
           <div class="col s6">Interviewer/s:</div>
           <div class="col s6"><u><?=$interviewers;?></u></div>
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
            <div class="col s5"></div>
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
                        <td style="border:1px solid black;">--</td>
                        <td style="border:1px solid black;">--</td>
                        <td style="border:1px solid black;">--</td>
                        <td style="border:1px solid black;">--</td>
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
    <button class="btn-large blue z-depth-5" id="print_btn" onclick="print_docs()" style="border-radius:30px;">Print/Save</button>
    </div>
    <script>
        function print_docs(){
            var printButton = document.querySelector('#print_btn');
            printButton.style.visibility = 'hidden';
            window.print();
            printButton.style.visibility = 'visible';
        }
    </script>
</body>
</html>
