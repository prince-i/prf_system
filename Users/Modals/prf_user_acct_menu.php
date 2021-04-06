<div class="modal modal-fixed-footer" id="prf_user_menu">
    <div class="modal-content">
        <div class="row">
            <div class="col s12">
            <h5 class="center">Previewing PRF User Account</h5>
                <div class="input-field col s12">
                    <input type="hidden" id="user_record_id">
                </div>
                <!-- USERID -->
                <div class="input-field col s6">
                    <span class="red-text">UserID</span>
                    <input type="text" id="userID">
                </div>
                <!-- EMAIL -->
                <div class="input-field col s6">
                    <span class="red-text">Email</span>
                    <input type="text" id="email_prf">
                </div>
                <!-- PASSWORD -->
                <div class="input-field col s6">
                    <span class="red-text">Password</span>
                    <input type="text" id="prf_pass">
                </div>
                <!-- ROLE -->
                <div class="input-field col s6">
                    <span class="red-text">Role</span>
                    <input type="text" name="" id="prf_role" oninput="load_level()">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col s12">
                <!-- NAME -->
                <div class="input-field col s6">
                    <span class="red-text">Name</span>
                    <input type="text" id="prf_name">
                </div>

                <!-- LEVEL -->
                <div class="input-field col s6">
                    <span class="red-text">Level</span>
                    <input type="text" name="" id="prf_level">
                </div>
            </div>
        </div>

        <!-- 4TH ROW -->
        <div class="row">
            <div class="col s12">
                <!-- DEPARTMENT -->
                <div class="input-field col s6">
                    <span class="red-text">Department</span>
                    <input type="text" id="prf_department">
                </div>

                <!-- POSITION -->
                <div class="input-field col s6">
                    <span class="red-text">Position</span>
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