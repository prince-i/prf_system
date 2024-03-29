<div class="row">
    <div class="col s12">
        <div class="input-field col s4">
            <select name="" id="verified_filter" class="browser-default  z-depth-1" onchange="load_verified_prf()">
                <option value="" selected>--SELECT DEPARTMENT--</option>
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
        <div class="input-field col s4">
            <input type="text" name="" id="searchFilter" placeholder="Search">
        </div>
        <div class="row col s12" style="height:420px;overflow:auto;">
            <table class="centered z-depth-2" style="zoom:80%;">
                <thead>
                    <th>PRF #</th>
                    <th>Requestor</th>
                    <th>Requestor Email</th>
                    <th>Requesting Position</th>
                    <th>Requesting Dept</th>
                    <th>Approval Status</th>
                    <th>Verification Status</th>
                    <th>Type of Hiring</th>
                    <th>Date Request</th>
                </thead>
                <tbody id="verified_prf_view">
                    <!--  -->
                </tbody>
            </table>
        </div>
    </div>
</div>