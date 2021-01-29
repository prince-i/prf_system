<div class="row">
<div class="col s12">
    <div class="col s6">
        <div class="input-field col 12">
            <select name="" id="deptFilterReq" class="browser-default z-depth-5" onchange="for_approval()">
                <option value="">--All Department--</option>
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
    </div>
</div>
   <div class="col s12">
        <table class="centered z-depth-5">
            <thead>
                <th>Request ID</th>
                <th>Requesting Position</th>
                <th>Requesting Department</th>
                <th>Contract Status</th>
                <th>Requested By</th>
                <th>Requestor Email</th>
                <th>Approval Status</th>
                <th>Verification Status</th>
                <th>Request Date</th>
            </thead>
            <tbody id="req_table"></tbody>
        </table>
   </div>
</div>