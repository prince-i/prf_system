<?php include '../php/Database.php';?>
<style>
    select{
        border-radius:20px;
    }
</style>
<div class="row">
    <h5 class="header">Position Requested</h5>
    <!-- POSITION -->
    <div class="col s12">
        <div class="input-field col s12 l4 m4">
            <input type="text" list="positionList" id="position" onfocus="loadPosition()" autocomplete="off"><label for="">Rank/Position</label>
            <datalist id="positionList"></datalist>
        </div>
        <!-- DEPT -->
        <div class="input-field col s12 l4 m4">
            <select name="" id="assigned_dept" class="browser-default z-depth-5">
                <option value="" selected disabled>-- Select Assigned Department/Section --</option>
                <?php
                    $query = "SELECT deptDesc, deptCode,section_name FROM tb_department LEFT JOIN tb_section ON  tb_section.department = tb_department.deptCode";
                    $stmt = $conn->prepare($query);
                    $stmt->execute();
                    foreach($stmt->fetchALL() as $x){
                        echo '<option value="'.$x['deptCode'].'">'.$x['deptDesc'].'-'.$x['section_name'].'</option>';
                    }
                ?>
            </select>
        </div>
        <!-- GENDER -->
        <div class="input-field col s6 l2 m2">
            <input type="number" name="" id="female_mp_count" class="" min=0 ><label for="">Female Required</label>
        </div>
        <div class="input-field col s6 l2 m2">
            <input type="number" name="" id="male_mp_count" class="" min=0><label for="">Male Required</label>
        </div>
    </div>

    <!-- REASON FOR HIRING -->
    <h5 class="header">Reason for Hiring</h5>
    <div class="row col s12">
        <div class="input-field">
            <p><label><input type="checkbox" name="" id="additional_mp" class="filled-in" onclick="validate_add_mp()" value="0"><span>Additional Manpower</span></label></p>
            <p><label><input type="checkbox" name="" id="mp_plan" class="filled-in" onclick="validate_mp_plan()" value="0"><span>Manpower Plan</span></label></p>
            <p><label><input type="checkbox" name="" id="re_org" class="filled-in" onclick="validate_re_org()" value="0"><span>Reorganization</span></label></p>
            <p><label><input type="checkbox" name="" id="promotion" class="filled-in" onclick="validate_promotion()" value="0"><span>Promotion</span></label></p>
            <p><label><input type="checkbox" name="" id="retire" class="filled-in" onclick="validate_retire()" value="0"><span>Retirement</span></label></p>
            <p><label><input type="checkbox" name="" id="replace" class="filled-in" onclick="validate_replace()" value="0"><span>Replacement</span></label></p>
            <!-- INPUT FOR REPLACEMENT-->
            <div class="row" style="display:none;" id="txt_replace">
            <div class="input-field col s12 l6 m6" >
                <input type="text" id="replaceName">
            </div>
            <!-- <div class="input-field col s12 l6 m6">
              <input type="text" id="replacePosition" >
            </div> -->
            </div>
           
            <p><label><input type="checkbox" name="" id="other" class="filled-in" onclick="validate_others()"><span>Others(Justify)</span></label></p>
            <!-- INPUT FOR OTHERS -->
            <div class="row input-field col s12 l6 m6" id="txt_others" style="display:none;">
              <input type="text" id="othersTxt">
            </div>
        </div>

    </div>
    <!-- CONTRACT STATUS -->
    <h5 class="header">Contract Status</h5>
    <div class="row">
        <div class="row input-field col l12 m12 s12">
            <select name="" id="contract_status_val" class="browser-default z-depth-5">
                <option value="" selected disabled>-- Select Contract Status --</option>
                <?php
                $query = "SELECT *FROM tb_contract_status";
                $stmt = $conn->prepare($query);
                $stmt->execute();
                foreach($stmt->fetchALL() as $x){
                    echo '<option value="'.$x['contractDesc'].'">'.$x['contractDesc'].'</option>';
                }
                ?>
            </select>
        </div>
        <div class="row">
            <div class="input-field col l6 m6 s6">
                <input type="date" id="date_start"><label for="">Date Start</label>
            </div>
            <div class="input-field col l6 m6 s6">
                <input type="date" id="date_end"><label for="">Date End</label>
            </div>
        </div>
    </div>
    <!-- QUALIFICATION REQUIRED -->
    <h5 class="header">Qualification Required</h5>
    <div class="row">
        <div class="input-field col l6 m6 s12">
            <input type="text" id="educationAttainment" list="educAtt" onfocus="loadEduc()" autocomplete="off">
            <label for="">Educational Attainment</label>
            <datalist id="educAtt"></datalist>
        </div>
        <div class="input-field col l6 m6 s12">
            <input type="text" id="require_license_cert" list="certList" onfocus="load_cert()" autocomplete="off">
            <label for="">Required License/Certification</label>
            <datalist id="certList"></datalist>
        </div>
        <div class="input-field col l6 m6 s12">
            <input type="text" id="work_experience" autocomplete="off">
            <label for="">Work Experience</label>
        </div>
        <div class="input-field col l6 m6 s12">
            <input type="text" id="other_quali_val" autocomplete="off">
            <label for="">Others</label>
        </div>
        <div class="input-field col l6 m6 s12">
            <input type="text" id="job_duties_val" autocomplete="off">
            <label for="">Brief description of duties</label>
        </div>
    </div>
    <!-- INTERVIEW VALIDATION -->
    <h5 class="header">Interview/Validation</h5>
    <div class="row">
        <div class="input-field col l6 m6 s12">
            <b>Required for interview/validation:</b>
            <select name="" id="interview_status" class="browser-default z-depth-5">
                <option value="" selected disabled>--Select--</option>
                <option value="need">Need</option>
                <option value="noneed">No need</option>
            </select>
        </div>
        <div class="input-field col l6 m6 s12">
            <input type="text" id="interviewers"><label for="">Interviewer/s</label>
        </div>
    </div>
    <!-- INTERVIEW INFO -->
    <div class="row">
    <div class="input-field col l6 m6 s12">
        <input type="date" id="date_interview"><label for="">Day available for interview/validation</label>
    </div>
    <div class="input-field col l6 m6 s12">
        <input type="time" id="time_interview"><label for="">Time available for interview/validation</label>
    </div>
    </div>
    <!-- BUGDET INFO -->
    <h5 class="header">Budget Information</h5>
    <div class="row">
        <div class="input-field col l6 m6 s12">
            <input type="text" id="budget_source_val" list="budget_source" onfocus="load_budget_source()" autocomplete="off">
            <label for="">Budget Source</label>
            <datalist id="budget_source"></datalist>
        </div>
        <div class="input-field col l6 m6 s12">
            <select name="" id="budget_status" class="browser-default z-depth-5">
                <option value="">--SELECT BUDGET STATUS--</option>
                <option value="on/within budget">On/within Budget</option>
                <option value="over budget">Over Budget</option>
                <option value="under budget">Under Budget</option>
            </select>
        </div>
    </div>
    <!-- MP HEADCOUNT -->
    <h5 class="header">Manpower Headcount</h5>
    <div class="row">
        <div class="col s12">
            <div class="input-field col l6 m6 s12">
                <input type="number" name="" id="actual_mp_count_dept" min="0"><label for="">Department: Actual MP</label>
            </div>
            <div class="input-field col l6 m6 s12">
                <input type="number" name="" id="plan_mp_count_dept" min="0"><label for="">Department: Plan MP</label>
            </div>
            <!-- SECTION -->
            <div class="input-field col l6 m6 s12">
                <input type="number" name="" id="actual_mp_count_section" min="0"><label for="">Section: Actual MP</label>
            </div>
            <div class="input-field col l6 m6 s12">
                <input type="number" name="" id="plan_mp_count_section" min="0"><label for="">Section: Plan MP</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <button class="btn-large #0d47a1 blue darken-4 z-depth-5" id="submitPRF" onclick="submit_prf()">submit request&rarr;</button>
        </div>
    </div>
</div>