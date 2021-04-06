<!-- DASHBOARD -->
<?php 
require '../php/rec_session.php';
include 'Modals/account_menu.php';
include 'Modals/prf_user_acct_menu.php';
include 'Modals/recruitment_pending_modal.php';
include 'Modals/recruitment_verified_modal.php';
include 'Modals/signup.php';
include 'Modals/recruitmentAcctView.php';
include 'Modals/add_recruitment.php';

if($role != 'recruitment'){
    session_unset();
    session_destroy();
    header('location:../recruitment-login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../Img/logo.jpg" type="image/jpg" sizes="16x16">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recruitment</title>
    <link rel="stylesheet" href="../node_modules/materialize-css/dist/css/materialize.min.css">
    <style>
      tr:hover td{
        background-color:#e6e2da;
      }
      span{
        color:red;
      }
    </style>
</head>
<body>
<nav class="nav-extended #546e7a blue-grey darken-1 z-depth-5">
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
        <li class="tab"><a href="#recruitment_acct" onclick="load_recruitment()">Recruitment Accounts</a></li>
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


    // REGISTRATION
    function sendRegistration(){
      var prf_name = document.getElementById('name').value;
      var prf_username = document.getElementById('username').value;
      var prf_email = document.getElementById('email_username').value;
      var prf_password = document.getElementById('register_password').value;
      var prf_dept = document.getElementById('dept_view').value;
      var prf_role = document.getElementById('role_select').value;
      var prf_position = document.getElementById('position_select').value;
      var prf_level = document.getElementById('approval_level_select').value;

      if(prf_name == ''){
        swal('Name is required!','','info');
      }else if(prf_username == ''){
        swal('UserID is required!','','info');
      }else if(prf_email == ''){
        swal('Email is required!','','info');
      }else if(prf_password == ''){
        swal('Password is required!','','info');
      }else if(prf_dept == ''){
        swal('Department is required!','','info');
      }else if(prf_role == ''){
        swal('Role is required!','','info');
      }else if(prf_position == ''){
        swal('Position is required!','','info');
      }else if(prf_level == ''){
        swal('Level is required!','','info');
      }else{
        $('#regBtnUser').attr('disabled',true);
        $.ajax({
          url: '../php/recruitment_process.php',
          type: 'POST',
          cache:false,
          data:{
            method: 'register_user',
            prf_name:prf_name,
            prf_username:prf_username,
            prf_email:prf_email,
            prf_password:prf_password,
            prf_dept:prf_dept,
            prf_role:prf_role,
            prf_position:prf_position,
            prf_level:prf_level
          },success:function(response){
            if(response == 'success'){
              swal('Successfully registered!','','success');
              load_prf_account();
              $('.modal').modal('close','#signUp');
              clear_fields();
            }else if(response == 'exists'){
              swal('User ID already exist. Please try another!','','info');
            }else{
              swal('Error!','','error');
            }
            $('#regBtnUser').attr('disabled',false);
          }
        }); 
      }
    }

function clear_fields(){
  document.querySelector('#name').value = '';
  document.querySelector('#username').value = '';
  document.querySelector('#email_username').value = '';
  document.querySelector('#register_password').value = '';
  document.querySelector('#dept_view').selectedIndex = 0;
  document.querySelector('#role_select').selectedIndex = 0;
  document.querySelector('#position_select').selectedIndex = 0;
  document.querySelector('#approval_level_select').selectedIndex = 0;
}

function load_recruitment(){
  var searchWord = document.querySelector('#searchWord').value;
  $.ajax({
    url: '../php/recruitment_process.php',
    type: 'POST',
    cache: false,
    data:{
      method: 'load_recruitment',
      searchWord:searchWord
    },success:function(response){
      document.querySelector('#recruitment_account').innerHTML = response;
    }
  });
}

function get_recruitment_id(param){
  var string = param.split('~!~');
  document.querySelector('#RecruitmentReferenceID').value = string[0];
  document.querySelector('#RecruitmentUserID').value = string[1];
  document.querySelector('#RecruitmentPass').value = string[2];
  document.querySelector('#RecruitmentEmail').value = string[3];
  document.querySelector('#RecruitmentName').value = string[4];
}

function update_recruitment(){
  var id = document.querySelector('#RecruitmentReferenceID').value;
  var userID = document.querySelector('#RecruitmentUserID').value;
  var password = document.querySelector('#RecruitmentPass').value;
  var email = document.querySelector('#RecruitmentEmail').value;
  var name = document.querySelector('#RecruitmentName').value;
  if(userID == ''){
    swal('Please enter username or user ID!','','info');
  }else if(password == ''){
    swal('Please enter password!','','info');
  }else if(email == ''){
    swal('Please enter updated email!','','info');
  }else if(name == ''){
    swal('Please enter the updated name!','','info');
  }else{
    // AJAX FUNCTION
    document.querySelector('#rec_update').disabled = true;
    $.ajax({
      url: '../php/recruitment_process.php',
      type: 'POST',
      cache: false,
      data:{
        method: 'update_recruitment',
        id:id,
        userID:userID,
        password:password,
        email:email,
        name:name
      },success:function(response){
        if(response == 'success'){
          load_recruitment();
          $('.modal').modal('close','#recruitmentAcct');
          swal('Updated successfully!','','success');
        }else{
          swal('Please try again!','','error');
        }
        document.querySelector('#rec_update').disabled = false;
      }
    });
  }
}

function delete_recruitment(){
  var id = document.querySelector('#RecruitmentReferenceID').value;
  var x = confirm('To confirm deletion, click OK');
  if(x == true){
    // DELETE AJAX
    $.ajax({
      url: '../php/recruitment_process.php',
      type: 'POST',
      cache: false,
      data:{
        method: 'delete_recruitment',
        id:id
      },success:function(response){
        if(response == 'delete'){
          load_recruitment();
          swal('Successfully deleted!','','info');
          $('.modal').modal('close','#recruitmentAcct');
        }else{
          swal('Deletion failed!','','info');
        }
      }
    });

  }else{
    console.log('cancel');
  }
}

function load_add_recruitment_form(){
  $('#add_recruitment_render').load('../Forms/form_recruitment.php');
}

function save_recruitment(){
  var userID = document.querySelector('#new_userID').value;
  var password = document.querySelector('#new_password').value;
  var email = document.querySelector('#new_email').value;
  var rec_name = document.querySelector('#new_name').value;
  if(userID == ''){
    swal('Alert!','Please enter User ID !','info');
  }else if(password == ''){
    swal('Alert!','Password is required!','info');
  }else if(email == ''){
    swal('Alert!','Email is required!','info');
  }else if(rec_name == ''){
    swal('Alert!','Please enter name!','info');
  }else{
    // AJAX FUNCTION
    document.querySelector('#add_btn').disabled = true;
    $.ajax({
      url: '../php/recruitment_process.php',
      type: 'POST',
      cache:false,
      data:{
        method: 'save_recruitment',
        userID:userID,
        password:password,
        email:email,
        rec_name:rec_name
      },success:function(response){
        if(response == 'exists'){
          swal('User ID is already used by another user. Please try again.','','info');
        }else if(response == 'success'){
          swal('Successfully registered!','','info');
          load_recruitment();
          $('.modal').modal('close','#add_recruitment');
        }else{
          swal('Error!','','info');
        }
        document.querySelector('#add_btn').disabled = false;
      }
    });
  }
}

$(document).ready(function(){
  $("#searchFilter").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#verified_prf_view tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });

  $("#searchPending").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#pending_prf_view tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});

</script>
</body>
</html>