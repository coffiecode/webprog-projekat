<?php include_once 'header.php' ?>

      <div class="homepage-container">
        <section class="index-intro">
        <?php
              if(isset($_SESSION["useruid"])){
               echo "<p>Hello there ". $_SESSION["useruid"] ."</p>";
               echo " <a href='pwdchange.php' class='pwd-change'>Forgot password? Change here.</a>";
              }
            ?>
          <h1>This is an introduction</h1>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ipsum veniam quod, impedit minima libero praesentium aspernatur culpa quaerat atque maiores asperiores fugit, nesciunt optio. Iure impedit accusamus quo consequatur dolores. In, quibusdam quasi? Alias ipsum recusandae doloribus consequatur cumque?
          </p>
        </section>
        <section class="index-categories">
          <h2>Some basic categories</h2>
          <div class="index-categories-list">
            <div>
              <h3>Fun stuff</h3>
            </div>
            <div>
              <h3>Boring stuff</h3>
            </div>
            <div>
              <h3>Exciting stuff</h3>
            </div>
            <div>
              <h3>Mysterious stuff</h3>
            </div>
            <div>
              <h3>Strange stuff</h3>
            </div>
            <div>
              <h3>Sad stuff</h3>
            </div>
          </div>
        </section>
      </div>

<?php include_once 'footer.php'; ?>
