<!-- DASHBOARD -->
<?php 
require '../php/rec_session.php';
include 'Modals/account_menu.php';
include 'Modals/prf_user_acct_menu.php';
include 'Modals/recruitment_pending_modal.php';
include 'Modals/recruitment_verified_modal.php';
include 'Modals/signup.php';

if($role != 'recruitment'){
    session_unset();
    session_destroy();
    header('location:../recruitment-login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="../Img/logo.jpg" type="image/jpg" sizes="16x16">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recruitment</title>
    <link rel="stylesheet" href="../node_modules/materialize-css/dist/css/materialize.min.css">
</head>
<body>
<nav class="nav-extended #212121 grey darken-4 z-depth-5">
    <div class="nav-wrapper">
    <a href="#" class="brand-logo center"><img src="../Img/logo.png" alt="" class="responsive-img" style="width:50px;"></a>
      <a href="#">Recruitment Dashboard</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><span style="font-size:20px;font-weight:bold;">&plus;</span></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#" data-target="acct_option" class="dropdown-trigger"><?=ucwords($name);?></a></li>
      </ul>
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent">
        <li class="tab"><a href="#pendingPRF" onclick="load_pending_list()">Pending PRF</a></li>
        <li class="tab"><a href="#verifiedPRF" onclick="load_verified_prf()">Verified PRF</a></li>
        <li class="tab"><a href="#cancelledPRF" onclick="load_cancel_prf()">Cancelled PRF</a></li>
        <li class="tab"><a href="#user_accounts" onclick="load_prf_account()">User Accounts</a></li>
        <li class="tab"><a href="#recruitment_acct" onclick="">Recruitment Accounts</a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="#" class="modal-trigger" data-target="logout_form"><?=ucwords($name);?></a></li>
  </ul>


<div id="pendingPRF"><?php include 'recruitment_page/pending_prf.php';?></div>
<div id="verifiedPRF"><?php include 'recruitment_page/verified_prf.php';?></div>
<div id="cancelledPRF"><?php include 'recruitment_page/cancelled_prf.php';?></div>
<div id="user_accounts"><?php include 'recruitment_page/user_accounts.php';?></div>
<div id="recruitment_acct"><?php include 'recruitment_page/recruitment_acct.php';?></div>

</body>

<script src="../jquery/jquery.min.js"></script>
<script src="../node_modules/materialize-css/dist/js/materialize.min.js"></script>
<script src="../node_modules/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $(document).ready(function(){
        $('.tabs').tabs();
        $('.sidenav').sidenav({
        preventScrolling: true,
        draggable: true,
        inDuration: 500
        });
        $('.modal').modal();
        $('.dropdown-trigger').dropdown({
        constrainWidth: false
        });
        load_pending_list();
        load_dept(); 
        load_position();
    });

 

    //FUNCTION
    function load_pending_list(){
        var filter_pending = $('#filter_pending').val();
        $.ajax({
            url: '../php/recruitment_process.php',
            type: 'POST',
            cache: false,
            data:{
                method: 'load_pending',
                filter_pending:filter_pending
            },success:function(response){
                $('#pending_prf_view').html(response);
            }
        });
    }

    function load_verified_prf(){
      var filter_verified = $('#verified_filter').val();
        $.ajax({
            url: '../php/recruitment_process.php',
            type: 'POST',
            cache: false,
            data:{
                method: 'load_verified',
                filter_verified:filter_verified
            },success:function(response){
                $('#verified_prf_view').html(response);
            }
        });
    }

    // LOAD USER ACCOUNTS
    function load_prf_account(){
      var filter_user = document.getElementById('filter_user').value;
      $.ajax({
        url: '../php/recruitment_process.php',
        type: 'POST',
        cache: false,
        data:{
          method: 'load_prf_user',
          filter_user:filter_user
        },success:function(response){
          $('#users_data').html(response);
        }
      });
    }

    // LOAD CANCEL PRF
    function load_cancel_prf(){
      var filter_cancel = document.getElementById('filter_cancelled').value;
      $.ajax({
        url: '../php/recruitment_process.php',
        type: 'POST',
        cache: false,
        data:{
          method: 'load_cancel_prf',
          filter_cancel:filter_cancel
        },success:function(response){
          $('#cancel_prf_view').html(response);
        }
      });
    }

    // GET ID OF USER PRF FROM TABLE
    function fetch_id_prf_user(param){
      var text = param.split('~!~');
      var id = text[0];
      var username = text[1];
      var email = text[2];
      var password = text[3];
      var role = text[4];
      var position = text[5];
      var name = text[6];
      var department = text[7];
      var level = text[8];
      $('#user_record_id').val(id);
      $('#userID').val(username);
      $('#email_prf').val(email);
      $('#prf_pass').val(password);
      $('#prf_role').val(role);
      $('#prf_name').val(name);
      $('#prf_level').val(level);
      $('#prf_department').val(department);
      $('#prf_position').val(position);
    }

    function load_level(){
      var prf_role = document.getElementById('role_select').value;
      $.ajax({
        url: '../php/load_dept_section.php',
        type:'POST',
        cache:false,
        data:{
          method:'load_level',
          role:prf_role
        },success:function(response){
          $('#approval_level_select').html(response);
        }
      });
    }

    const load_position =()=>{
        $.ajax({
                url: '../php/load_dept_section.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'load_position'
                },success:function(response){
                    $('#position_select').html(response);
                }
           });
       }
    const load_dept =()=>{
           $.ajax({
                url: '../php/load_dept_section.php',
                type: 'POST',
                cache: false,
                data:{
                    method: 'load_dept'
                },success:function(response){
                    $('#dept_view').html(response);
                }
           });
       }

    // DELETE USER
    function delete_user_prf(){
      var id = document.querySelector('#user_record_id').value;
      var x = confirm('To confirm deletion. Press OK');
      if(x== true){
        // DELETE
        $.ajax({
          url:'../php/recruitment_process.php',
          type: 'POST',
          cache: false,
          data:{
            method:'delete_prf_user',
            id:id
          },success:function(response){
            if(response == 'deleted'){
              M.toast({html:'Successfully deleted!',classes:'green'});
              load_prf_account();
              $('.modal').modal('close','#prf_user_menu');
            }else{
              M.toast({html:'Failed!',classes:'red'});
            }
          }
        });
      }else{
        // DO NOTHING
      }
    }

    function verified_preview(prf_req_id){
      // window.open('../Forms/preview_prf.php?id='+prf_req_id,"Preview","width=1000,height=600,left=150");
      $.ajax({
        url: '../php/recruitment_process.php',
        type:'POST',
        cache:false,
        data:{
          method:'preview_verified',
          id:prf_req_id
        },success:function(response){
          $('#verified_prf_info').html(response);
        }
      });
    }

    function pending_preview(id){
      $.ajax({
        url: '../php/recruitment_process.php',
        type:'POST',
        cache:false,
        data:{
          method:'preview_pending',
          id:id
        },success:function(response){
          $('#pending_prf_info').html(response);
        }
      });
    }

    // PREVIEW PRF PENDING
    function preview_pending_prf(id){
      window.open('../Forms/preview_prf.php?id='+id,"Preview","width=1000,height=600,left=150");
    }
    // UPDATE USER PRF
    function update_user_prf(){
      var user_record = document.getElementById('user_record_id').value;
      var userID = document.getElementById('userID').value;
      var email = document.getElementById('email_prf').value;
      var password = document.getElementById('prf_pass').value;
      var role = document.getElementById('prf_role').value;
      var name = document.getElementById('prf_name').value;
      var level = document.getElementById('prf_level').value;
      var department = document.getElementById('prf_department').value;
      var position = document.getElementById('prf_position').value;

      if(userID == ''){
        swal('Notification','User ID is required','info');
      }else if(email == ''){
        swal('Notification','Email is required','info');
      }else if(password == ''){
        swal('Notification','Password is required','info');
      }else if(role == ''){
        swal('Notification','Role is required','info');
      }else if(name == ''){
        swal('Notification','Name is required','info');
      }else if(level == ''){
        swal('Notification','Level is required','info');
      }else if(department == ''){
        swal('Notification','Department is required','info');
      }else if(position == ''){
        swal('Notification','Position is required','info');
      }else{
        $('#update_btn').attr('disabled',true);
        $.ajax({
          url: '../php/recruitment_process.php',
          type: 'POST',
          cache:false,
          data:{
            method: 'update_user',
            user_record:user_record,
            userID:userID,
            email:email,
            password:password,
            role:role,
            name:name,
            level:level,
            department:department,
            position:position
          },success:function(response){
            if(response == 'success'){
              swal('Notification','Successfully updated!','success');
              load_prf_account();
              $('.modal').modal('close','#prf_user_menu');
            }else if(response == 'already_use'){
              swal('Notification','UserID is already use please choose other userID!','info');
            }else{
              swal('Notification','Update error!','info');
            }
            $('#update_btn').attr('disabled',false);
          }
        });
      }
    }
</script>
</body>
</html>