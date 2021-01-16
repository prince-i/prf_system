<ul id='acct_option' class='dropdown-content'>
    <li><a href="#">Change Password&nbsp;<img src="../Img/reset_pass.png" alt="" class="responsive-img" style="width:15px;"></a></li>
    <li><a href="#" class="modal-trigger" data-target="logout_form">Signout&nbsp;<img src="../Img/signout.png" alt="" class="responsive-img" style="width:12px;"></a></li>
  </ul>

  <div class="modal" id="logout_form" style="border-radius:30px;">
    <div class="modal-content">
        <h6 class="center grey-text">CONFIRM SIGNOUT...</h6>
        <div class="divider"></div>
        <form action="" method="post" style="text-align:center;">
            <div class="row">
                <div class="col s12">
                    <div class="input-field col s12">
                        <input type="submit" value="Signout" name="logout" class="btn-large red z-depth-5 col s12">
                    </div>
                </div>
            </div>
        </form>
        <div class="row">
            <div class="col s12">
                <div class="input-field col s12">
                    <button class="btn-large white grey-text col s12 z-depth-5 modal-close">Cancel</button>
                </div>
            </div>
        </div>
    </div>
  </div>