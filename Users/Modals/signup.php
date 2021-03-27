<!-- SIGNUP MODAL -->
<div class="modal bottom-sheet" id="signUp" style="min-height:100vh;">
<button class="btn-flat waves-effect modal-close right red-text">Close</button>
    <div class="modal-content">
        <div class="row">
            <div class="col s12">
                <div class="input-field col s6"><input type="text" name="" id="name" autocomplete="off"><label for="">Complete Name</label></div>
                <div class="input-field col s6"><input type="text" name="" id="username" autocomplete="off"><label for="">User ID</label></div>
            </div>
            
            <div class="col s12">
                <div class="input-field col s6">
                    <input type="text" name="" id="email_username" autocomplete="off"><label for="">Email</label>
                </div>
                <div class="input-field col s6">
                    <input type="text" name="" id="register_password" autocomplete="off"><label for="">Password</label>
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
                    <select name="" id="role_select" class="browser-default z-depth-5" onchange="load_level()">
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
                <!-- SIGNATORY LEVEL -->
                <div class="input-field col s6">
                    <select name="" id="approval_level_select" class="browser-default z-depth-5">
                        <option value="" disabled selected>--SELECT APPROVAL LEVEL--</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <div class="input-field col s12">
                    <button class="btn-large blue z-depth-5" style="border-radius:30px;" onclick="sendRegistration()">submit</button>
                </div>
            </div>
        </div>
    </div>

</div>