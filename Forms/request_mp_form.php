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
            <p><label><input type="checkbox" name="" id="re_org" class="filled-in"><span>Reorganization</span></label></p>
            <p><label><input type="checkbox" name="" id="promotion" class="filled-in"><span>Promotion</span></label></p>
            <p><label><input type="checkbox" name="" id="retire" class="filled-in"><span>Retirement</span></label></p>
            <p><label><input type="checkbox" name="" id="replace" class="filled-in"><span>Replacement</span></label></p>
            <!-- INPUT FOR REPLACEMENT-->
            <div class="input-field col s12 l6 m6">
                <input type="text" id="replaceName">
            </div>
            <div class="input-field col s12 l6 m6">
              <input type="text" id="replacePosition">
            </div>
            <p><label><input type="checkbox" name="" id="other" class="filled-in"><span>Others(Justify)</span></label></p>
            <!-- INPUT FOR OTHERS -->
            <div class="input-field col s12 l6 m6">
              <input type="text" id="othersTxt">
            </div>
        </div>

    </div>
</div>