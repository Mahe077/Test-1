<?php
	include_once 'header.php';
?>
<section class="signup-form">
  <h2>Log In</h2>
  <div class="signup-form-form">
    <form  action="includes/login.inc.php" method="post">
      <input type="text" name="name" value="" placeholder="Username/Email..."><br>
      <input type="password" name="pwd" value="" placeholder="Password..."><br>
      <input type="submit" class="btn" name="submit" value="Log in">
    </form>
  </div>
  <?php
  if (isset($_GET['error'])) {
    if ($_GET['error'] == "emptyinput") {
      echo "<p> Fill in all fields !</p>";
    }
    if ($_GET['error'] == "wrongloging") {
      echo "<p> Incorrect login !</p>";
    }
  }
   ?>
</section>
<?php
	include_once 'footer.php';
?>
