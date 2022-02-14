<?php 
  include_once "header.php";
?>
<div class="signup-container">
  <h2>Create an account</h2>
        <form class="signup-form" id="form" action="includes/signup.inc.php" method="post">
            <div class="form-elem">
              <label for="fullname">Full name</label>
              <input type="text" id="fullname" name="name" placeholder="Jane Doe">
            </div>
            <div class="form-elem">
              <label for="email">Email</label>
              <input type="text" id="email" name="email" placeholder="janedoe@example.com">
            </div>
            <div class="form-elem">
              <label for="uid">Username</label>
              <input type="text" id="uid" name="uid" placeholder="Username">
            </div>
            <div class="form-elem">
              <label for="pwd">Password</label>
              <input type="password" id="pwd" name="pwd" placeholder="Password">
            </div>
            <div class="form-elem">
              <label for="pwdRepeat">Confirm password</label>
              <input type="password" id="pwdRepeat" name="pwdRepeat" placeholder="Confirm password">
            </div>
            <button type='submit' name='submit'>Sign Up</button>
        </form>
<?php
  if(isset($_GET["error"])){
    if($_GET["error"] == "emptyInput"){
      echo "<p class='error'>Fill in all fields!</p>";
    } 
    else if ($_GET["error"] == "invalidUid"){
      echo "<p class='error'>Choose proper username!</p>";
    }
    else if ($_GET["error"] == "invalidEmail"){
      echo "<p class='error'>Enter a valid email address!</p>";
  }
    else if ($_GET["error"] == "passwordsDontMatch"){
      echo "<p class='error'>Passwords need to match!</p>";
  }
    else if ($_GET["error"] == "usernameExists"){
      echo "<p class='error'>Username is already taken!</p>";
  }
    else if ($_GET["error"] == "stmtfailed"){
      echo "<p class='error'>something went wrong!</p>";
}
    else if ($_GET["error"] == "none"){
      echo "<p class='success'>You have signed up successfully!</p>";
  }
    else if ($_GET["error"] == "shortPwd"){
      echo "<p class='error'>Please enter longer, secure password!</p>";
  }
}
?>
</div>

<?php
  include_once "footer.php";
?>