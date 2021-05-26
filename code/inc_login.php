<?php // Script 8.9 - login.php
/* This page lets people login to the website (in theory). */

function checkLogin($email, $password) {
  if ($email == "$email" && $password == "$password") {
      echo '<p><center>You are now sucessfully logged in!</center></p><br>';
  }
  else {
      echo '<p><center>That email address and password are not found. Please try again.</center><br>';
  }
}

// Print some introductory text:
print '<h2>Welcome back!</h2><br>';
	
// Check if the form has been submitted:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$problem = false; // No problems so far.
	
	// Check for each value...
	if (empty($_POST['email'])) {
		$problem = true;
		print '<center><p class="text--error">Please enter your email address!</p></center>';
	}

	if (empty($_POST['password'])) {
		$problem = true;
		print '<center><p class="text--error">Please enter a password!</p></center>';
	}

	
	if (!$problem) { // If there weren't any problems...

		
    checkLogin($_POST['email'], $_POST['password']);
    

		// Clear the posted values:
		$_POST = [];
	
	} else { // Forgot a field.
	
		print '<center><p class="text--error">Please try again!</p></center><br>';
		
	}

} // End of handle form IF.

// Create the form:
?>
<center><form action="login.php" method="post" class="form--inline">

	<p>
  <i class="fas fa-envelope"></i>
  <label for="email">Email Address:</label><input type="email" name="email" size="20" value="<?php if (isset($_POST['email'])) { print htmlspecialchars($_POST['email']); } ?>"></p>

	<p>
  <i class="fas fa-lock"></i>
  <label for="password">Password:</label><input type="password" name="password" size="20" value="<?php if (isset($_POST['password'])) { print htmlspecialchars($_POST['password']); } ?>"></p></center>

<br>


<center><p>
<button type="submit" name="submit" class="fadebutton2">Login</button></p></center>

  <p>

</form>

