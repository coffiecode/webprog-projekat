<?php 
  include_once "header.php";
?>

    <div class="login-container">
      <section class="signup-form">
        <h2 id='login-header'>Log in</h2>
          <form action="includes/login.inc.php" method="post">
            <div class="form-elem">
              <label for="uid">Username</label>
              <input type="text" name="uid" placeholder="Username or Email">
            </div>
            <div class="form-elem">
              <label for="pwd">Password</label>
              <input type="password" name="pwd" placeholder="Password">
            </div>
              <button type='submit' name='submit'>Log In</button>
              <?php
        if(isset($_GET["error"])){
      if($_GET["error"] == "emptyInput"){
        echo "<p class='msg error'>Fill in all fields!</p>";
      }
      else if ($_GET["error"] == "wrongLogin"){
        echo "<p class='msg error'>Incorrect email, username or password!</p>";
      }
        }
      ?>
          </form>
     
      </section>
    </div>

<?php
  include_once "footer.php";
?>