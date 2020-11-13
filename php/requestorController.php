<?php
    include 'Database.php';
    $method = $_POST['method'];
    if($method == 'load_position'){
        $query = "SELECT position FROM tb_position";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        foreach($stmt->fetchAll() as $x){
            echo '<option value="'.$x['position'].'">';
        }
    }
?>