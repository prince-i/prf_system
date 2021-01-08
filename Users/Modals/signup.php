<div class="modal" id="signUp">
    <div class="modal-content">
        <div class="row">
            <div class="col s12">
                <div class="input-field col s6">
                    <input type="text" name="" id="email_usename"><label for="">Email</label>
                </div>
                <div class="input-field col s6">
                    <input type="text" name="" id="register_password"><label for="">Password</label>
                </div>
            </div>
        </div>
        <!-- Department -->
        <div class="row">
            <div class="col s12">
                <div class="input-field col s6">
                    <select name="" id="dept_view" class="browser-default z-depth-5">
                    </select>
                </div>
                <!-- ROLE -->
                <div class="input-field col s6">
                    <select name="" id="role_select" class="browser-default z-depth-5">
                        <option value="" disabled selected>--Select Role--</option>
                        <option value="requestor">Requestor</option>
                        <option value="approver">Approver</option>
                        <option value="verifier">Verifier</option>
                    </select>
                </div>
                <!-- POSITION -->
                <div class="input-field col s6">
                    <select name="" id="position_select" class="browser-default z-depth-5">
                        <!-- AJAX SUPPLY DATA HERE -->
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>