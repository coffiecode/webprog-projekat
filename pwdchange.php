<?php 
  include_once "header.php";
?>

    <div class="pwdchange-container">
        <section class="signup-form">
          <h2 id='login-header'>Change password</h2>
            <form action="includes/pwdchange.inc.php" method="post">
            <div class="form-elem">
                <label for="oldPwd">Old password</label>
                <input type="password" name="oldPwd">
              </div>
              <div class="form-elem">
                <label for="pwd">New password</label>
                <input type="password" name="newPwd">
              </div>
              <div class="form-elem">
                <label for="pwd">Repeat new password</label>
                <input type="password" name="repeatNewPwd">
              </div>
                <button type='submit' name='submit'>Change password</button>
                
            </form>
        </section>
    </div>

<?php
  include_once "footer.php";
?>