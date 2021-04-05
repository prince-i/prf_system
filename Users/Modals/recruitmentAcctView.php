<div class="modal modal-fixed-footer" id="recruitmentAcct">
<div class="modal-content" style="font-size:12px;">
<div class="row col s12">
    <input type="hidden" id="RecruitmentReferenceID">
    <div class="input-field col l6 m6 s12">
        <span>Username/UserID</span>
        <input type="text" name="" id="RecruitmentUserID" autocomplete="off">
    </div>

    <!-- PASSWORD -->
    <div class="input-field col l6 m6 s12">
        <span>Password</span>
        <input type="text" id="RecruitmentPass" autocomplete="off">
    </div>

    <!-- EMAIL -->
    <div class="input-field col l6 m6 s12">
        <span>Email</span>
        <input type="text" id="RecruitmentEmail" autocomplete="off">
    </div>

    <!-- NAME -->
    <div class="input-field col l6 m6 s12">
        <span>Name</span>
        <input type="text" id="RecruitmentName" autocomplete="off"> 
    </div>
</div>
</div>
<div class="modal-footer">
    <button class="btn-small blue waves-effect" onclick="update_recruitment()" id="rec_update">Update</button>
    <button class="btn-small red waves-effect" onclick="delete_recruitment()" id="rec_delete">Delete</button>
    <button class="btn-small modal-close #757575 grey darken-1 waves-effect">Cancel</button>
</div>
</div>