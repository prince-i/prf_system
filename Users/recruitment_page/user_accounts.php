<div class="row">
    <div class="col s12">
        <div class="input-field col s4">
            <select name="" id="filter_user" class="browser-default z-depth-1" onchange="load_prf_account()">
                <option value="" selected disabled>--SELECT DEPARTMENT--</option>
                <?php
                    $fetchQL = "SELECT deptCode,deptDesc FROM tb_department ORDER BY id ASC";
                    $stmt = $conn->prepare($fetchQL);
                    $stmt->execute();
                    foreach($stmt->fetchALL() as $x){
                        echo '<option value="'.$x['deptCode'].'">'.$x['deptDesc'].'</option>';
                    }
                    
                ?>
            </select>
        </div>
        <div class="input-field col s8">
            <button class="btn blue right">Add User &plus;</button>
        </div>
    </div>
        <div class="row col s12" style="height:420px;overflow:auto;">
            <table class="centered z-depth-2" style="zoom:80%;">
                <thead>
                    <th>UserID</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Role</th>
                    <th>Position</th>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Level</th>
                </thead>
                <tbody id="users_data">
                    <!--  -->
                </tbody>
            </table>
        </div>
    </div>
</div>