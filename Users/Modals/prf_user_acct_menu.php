<div class="modal modal-fixed-footer" id="prf_user_menu">
    <div class="modal-content">
        <div class="row">
            <div class="col s12">
                <div class="input-field col s12">
                    <input type="hidden" id="user_record_id">
                </div>
                <!-- USERID -->
                <div class="input-field col s6">
                    <b class="red-text">UserID</b>
                    <input type="text" id="userID">
                </div>
                <!-- EMAIL -->
                <div class="input-field col s6">
                    <b class="red-text">Email</b>
                    <input type="text" id="email_prf">
                </div>
                <!-- PASSWORD -->
                <div class="input-field col s6">
                    <b class="red-text">Password</b>
                    <input type="text" id="prf_pass">
                </div>
                <!-- ROLE -->
                <div class="input-field col s6">
                    <b class="red-text">Role</b>
                    <input type="text" name="" id="prf_role" oninput="load_level()">
                    <!-- <select name="" id="prf_role" class="browser-default z-depth-1" onchange="load_level()">
                    <option value="" disabled selected>--Select Role--</option>
                        <option value="requestor">Requestor</option>
                        <option value="approver">Approver</option>
                        <option value="verifier">Verifier</option>
                    </select> -->
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col s12">
                
                <!-- NAME -->
                <div class="input-field col s6">
                    <b class="red-text">Name</b>
                    <input type="text" id="prf_name">
                </div>

                <!-- LEVEL -->
                <div class="input-field col s6">
                    <b class="red-text">Level</b>
                    <input type="text" name="" id="prf_level">
                    <!-- <select name="" id="prf_level" class="browser-default z-depth-1">
                        <option value="" disabled selected>--Select Level--</option>   
                    </select> -->
                </div>
            </div>
        </div>

        <!-- 4TH ROW -->
        <div class="row">
            <div class="col s12">
                <!-- DEPARTMENT -->
                <div class="input-field col s6">
                    <b class="red-text">Department</b>
                    <input type="text" id="prf_department">
                </div>

                <!-- POSITION -->
                <div class="input-field col s6">
                    <b class="red-text">Position</b>
                    <input type="text" id="prf_position">
                </div>
            </div>
        </div>
    </div>

    <div class="modal-footer">
        <button class="btn blue" onclick="update_user_prf()"id="update_btn">update</button>
        <button class="btn red" onclick="delete_user_prf()">delete</button>
        <button class="btn-flat modal-close">close</button>
    </div>
</div>