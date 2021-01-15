<div class="modal modal-fixed-footer" id="declineCheckModal" style="border-radius:30px;width:400px;">
    <div class="modal-content">
    <h5 class="center">CANCEL REQUEST</h5>
        <div class="row">
            <div class="col s12">
                <div class="input-field col s12">
                    <input type="hidden" id="ref_id_check">
                </div>
                <div class="input-field col s12">
                    <input type="text" id="cancel_remarks_check" autocomplete="off"><label for="">Cancel Remarks</label>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button class="btn red waves-effect" onclick="decline_checker()">confirm decline</button>
        <button class="btn-flat modal-close waves-effect">close</button>
    </div>
</div>