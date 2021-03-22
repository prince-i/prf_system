<div class="row">
    <div class="col s12">
        <div class="input-field col s4">
            <select name="" id="filter_pending" class="browser-default z-depth-1">
                <option value="" selected disabled>--SELECT DEPARTMENT--</option>
                <?php
                    require '../php/conn.php';
                    $fetchQL = "SELECT deptCode,deptDesc FROM tb_department ORDER BY id ASC";
                    $stmt = $conn->prepare($fetchQL);
                    $stmt->execute();
                    foreach($stmt->fetchALL() as $x){
                        echo '<option value="'.$x['deptCode'].'">'.$x['deptDesc'].'</option>';
                    }
                ?>
            </select>
        </div>
        </div>
        <div class="row col s12" style="height:420px;overflow:auto;">
            <table class="centered">
                <thead>
                    <th>Requestor</th>
                    <th>Requestor Email</th>
                    <th>Requesting Position</th>
                    <th>Requesting Dept</th>
                    <th>Approval Status</th>
                    <th>Verification Status</th>
                    <th>Type of Hiring</th>
                    <th>Date Request</th>
                </thead>
                <tbody id="pending_prf_view">
                    <!--  -->
                </tbody>
            </table>
        </div>
    </div>
</div>