<div class="modal" id="hrOption" style="width:330px;">
<div class="modal-footer"><button class="btn-flat modal-close">&times;</button></div>
<div class="modal-content">
<div class="row">
    <center>APPROVAL CONFIRMATION</center>
    <div class="col s12">
        <div class="input-field col s12">
            <select name="" id="nextApprover" class="browser-default z-depth-5">
                <option value="" selected disabled>--SET NEXT APPROVER--</option>
                <?php
                    $query = "SELECT acct_level,name FROM prf_account WHERE acct_level >= 6 AND acct_level <=  7 AND role='verifier'";
                    $stmt=$conn->prepare($query);
                    $stmt->execute();
                    foreach($stmt->fetchALL() as $x){
                        echo '<option value="'.$x['acct_level'].'">'.$x['name'].'</option>';
                    }
                ?>
            </select>
        </div>
    </div>
    <!-- BUTTON -->
    <div class="col s12">
        <div class="input-field">
            <button class="btn blue col s12 waves-effect" onclick="approve()" id="proceed">Proceed</button>
        </div>
    </div>
</div>
</div>
</div>
