<div class="row">
    <div class="col s12">
        <div class="input-field col s4">
            <input type="text" name="" id="searchWord" onchange="load_recruitment()" placeholder="Search">
        </div>
        <div class="input-field col s8">
            <button class="btn blue right modal-trigger" data-target="add_recruitment" onclick="load_add_recruitment_form()">Add Recruitment &plus;</button>
        </div>
    </div>
        <div class="row col s12" style="height:420px;overflow:auto;">
            <table class="centered z-depth-2" style="zoom:80%;">
                <thead>
                    <th>UserID</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>Name</th>
                </thead>
                <tbody id="recruitment_account">
                    <!-- RECRUITMENT ACCOUNT DATA ACCOUNTS -->
                </tbody>
            </table>
        </div>
    </div>
</div>