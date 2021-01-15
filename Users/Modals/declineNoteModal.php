<div class="modal modal-fixed-footer" id="declineNoteModal">
    <div class="modal-content">
    <h5 class="center">CANCEL REQUEST</h5>
        <div class="row">
            <div class="col s12">
                <div class="input-field col s12">
                    <input type="hidden" id="ref_id_note">
                </div>
                <div class="input-field col s12">
                    <input type="text" id="cancel_remarks_note" autocomplete="off"><label for="">Cancel Remarks</label>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button class="btn red waves-effect" onclick="decline_note()">confirm decline</button>
        <button class="btn-flat modal-close waves-effect">close</button>
    </div>
</div>