<?php
	include_once 'header.php';
?>
<section class="signup-form">
  <h2>Sign up</h2>
  <div class="signup-form-form">
    <form  action="includes/signup.inc.php" method="post">
      <input type="text" name="name" value="" placeholder="Full name..."><br>
      <input type="text" name="email" value="" placeholder="Email..."><br>
      <input type="text" name="uid" value="" placeholder="Username..."><br>
      <input type="password" name="pwd" value="" placeholder="Password..."><br>
      <input type="password" name="pwdrepeat" value="" placeholder="Repeat password..."><br>
      <input type="submit" class="btn" name="submit" value="Sign up">
    </form>
  </div>
	<?php
	if (isset($_GET['error'])) {
		if ($_GET['error'] == "emptyinput") {
			echo "<p> Fill in all fields !</p>";
		}
		if ($_GET['error'] == "invaliduid") {
			echo "<p> Choose a proper username !</p>";
		}
		if ($_GET['error'] == "invalidemail") {
			echo "<p> Choose a proper email !</p>";
		}
		if ($_GET['error'] == "passworddontmatch") {
			echo "<p> Password doesn't match !</p>";
		}
		if ($_GET['error'] == "stmtfalied") {
			echo "<p> Something went wrong, Try again! </p>";
		}
		if ($_GET['error'] == "usernametaken") {
			echo "<p> User name taken ! </p>";
		}
		if ($_GET['error'] == "none") {
			echo "<p> You have signed up! </p>";
		}
	}
	 ?>
</section>

<?php
	include_once 'footer.php';
?>
