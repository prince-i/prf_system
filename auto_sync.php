<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="Img/logo.jpg" type="image/jpg" sizes="16x16">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRF Auto-Sync</title>
    <link rel="stylesheet" href="node_modules/materialize-css/dist/css/materialize.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
    .spinner {
    margin: 100px auto 0;
    width: 70px;
    text-align: center;
    }

    .spinner > div {
    width: 18px;
    height: 18px;
    background-color: #333;

    border-radius: 100%;
    display: inline-block;
    -webkit-animation: sk-bouncedelay 1.4s infinite ease-in-out both;
    animation: sk-bouncedelay 1.4s infinite ease-in-out both;
    }

    .spinner .bounce1 {
    -webkit-animation-delay: -0.32s;
    animation-delay: -0.32s;
    }

    .spinner .bounce2 {
    -webkit-animation-delay: -0.16s;
    animation-delay: -0.16s;
    }

    @-webkit-keyframes sk-bouncedelay {
    0%, 80%, 100% { -webkit-transform: scale(0) }
    40% { -webkit-transform: scale(1.0) }
    }

    @keyframes sk-bouncedelay {
    0%, 80%, 100% { 
        -webkit-transform: scale(0);
        transform: scale(0);
    } 40% { 
        -webkit-transform: scale(1.0);
        transform: scale(1.0);
    }
    }
</style>
</head>
<body>
    <div class="row container">
        <h5 class="header center">PRF Auto-Sync </h5>
        <div class="" id="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
        <table class="responsive-table centered">
            <thead>
                <th>REQ#</th>
                <th>Sync Status</th>
            </thead>
            <tbody id="for_sync"></tbody>
        </table>
    </div>


    <!-- JS -->
    <script src="jquery/jquery.min.js"></script>
    <script src="node_modules/materialize-css/dist/js/materialize.min.js"></script>
    <script src="node_modules/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        setTimeout(() => {
            forSync();
            
        }, 1000);
        function forSync(){
            $('#spinner').addClass('spinner');
            $.ajax({
                url:'php/checkSync.php',
                type: 'POST',
                cache:false,
                data:{
                    method: 'check_sync',
                },success:function(response){
                    // console.log(response);
                    // setTimeout(forSync,5000);
                    document.getElementById('for_sync').innerHTML = response;
                    var row = document.getElementById('for_sync').rows.length;
                    console.log(row);
                    if(row > 0){
                        $('#sync_data').click();
                    }else{
                        setTimeout(forSync,10000);
                    }
                }
            });
        }

        function sync_data(param){
            var str = param.split("~!~");
            var id = str[0];
            var request_date = str[1];
            var splitDate = request_date.split(" ");
            var reqDate = splitDate[0];
            var dept = str[2];
            var position = str[3];
            var contract_status = str[4];
            var female = str[5];
            var male = str[6];
            var approve_date = str[7];
            var both_mp = str[8];
            // AJAX
            $.ajax({
                url: 'php/syncTransfer.php',
                type: 'POST',
                cache: false,
                data:{
                    id:id,
                    reqDate:reqDate,
                    dept:dept,
                    position:position,
                    contract_status:contract_status,
                    female:female,
                    male:male,
                    approve_date:approve_date,
                    both_mp:both_mp
                },success:function(response){
                    // console.log(response);
                    if(response == 'done'){
                        set_sync(id);
                    }
                }
            });
        }

        function set_sync(id){
            console.log(id);
            $.ajax({
                url: 'php/checkSync.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'update_synced',
                    id:id
                },success:function(response){
                    // console.log(response);
                    if(response == 'success'){
                        setTimeout(forSync,3000);
                    }else{
                        console.log('error');
                    }
                }
            });
        }
    </script>
</body>
</html>