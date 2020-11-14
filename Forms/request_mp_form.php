<?php include '../php/Database.php';?>
<div class="row">
    <h5 class="header">Position Requested</h5>
    <!-- POSITION -->
    <div class="col s12">
        <div class="input-field col s12 l4 m4">
            <input type="text" list="positionList" id="position" onfocus="loadPosition()"><label for="">Rank/Position</label>
            <datalist id="positionList"></datalist>
        </div>
        <!-- DEPT -->
        <div class="input-field col s12 l4 m4">
            <select name="" id="assigned_dept" class="browser-default">
                <option value="" selected disabled>-- Select Assigned Department/Section --</option>
                <?php
                    $query = "SELECT *FROM tb_department";
                    $stmt = $conn->prepare($query);
                    $stmt->execute();
                    foreach($stmt->fetchALL() as $x){
                        echo '<option value="'.$x['deptCode'].'">'.$x['deptDesc'].'</option>';
                    }
                ?>
            </select>
        </div>
        <!-- GENDER -->
        <div class="input-field col s6 l2 m2">
            <input type="number" name="" id="female_mp_count" class=""><label for="">Female Required</label>
        </div>
        <div class="input-field col s6 l2 m2">
            <input type="number" name="" id="male_mp_count" class=""><label for="">Male Required</label>
        </div>
    </div>

    <!-- REASON FOR HIRING -->
    <h5 class="header">Reason for Hiring</h5>
    <div class="row col s12">
        <div class="input-field">
            <p><label><input type="checkbox" name="" id="additional_mp" class="filled-in" onclick="validate_add_mp()"><span>Additional Manpower</span></label></p>
            <p><label><input type="checkbox" name="" id="mp_plan" class="filled-in" onclick="validate_mp_plan()"><span>Manpower Plan</span></label></p>
            <p><label><input type="checkbox" name="" id="re_org" class="filled-in" onclick="validate_re_org()"><span>Reorganization</span></label></p>
            <p><label><input type="checkbox" name="" id="promotion" class="filled-in" onclick="validate_promotion()"><span>Promotion</span></label></p>
            <p><label><input type="checkbox" name="" id="retire" class="filled-in" onclick="validate_retire()"><span>Retirement</span></label></p>
            <p><label><input type="checkbox" name="" id="replace" class="filled-in" onclick="validate_replace()"><span>Replacement</span></label></p>
            <!-- INPUT FOR REPLACEMENT-->
            <div class="row" style="display:none;" id="txt_replace">
            <div class="input-field col s12 l6 m6" >
                <input type="text" id="replaceName">
            </div>
            <div class="input-field col s12 l6 m6">
              <input type="text" id="replacePosition" >
            </div>
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
            <select name="" id="contract_status_val" class="browser-default">
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
            <input type="text" id="educationAttaintment" list="educAtt" onfocus="loadEduc()">
            <label for="">Educational Attainment</label>
            <datalist id="educAtt"></datalist>
        </div>
        <div class="input-field col l6 m6 s12">
            <input type="text" id="require_license_cert" list="certList" onfocus="load_cert()">
            <label for="">Required License/Certification</label>
            <datalist id="certList"></datalist>
        </div>
        <div class="input-field col l6 m6 s12">
            <input type="text" id="other_quali_val">
            <label for="">Others</label>
        </div>
        <div class="input-field col l6 m6 s12">
            <input type="text" id="job_duties_val">
            <label for="">Brief description of duties</label>
        </div>
    </div>
    <!-- INTERVIEW VALIDATION -->
    <h5 class="header">Interview/Validation</h5>
    <div class="row">
        <div class="input-field col l6 m6 s12">
            <b>Required for interview/validation:</b>
            <select name="" id="" class="browser-default">
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
            <input type="text" id="budget_source_val" list="bugdet_source">
            <label for="">Budget Source</label>
            <datalist id="budget_source"></datalist>
        </div>
    </div>
</div>