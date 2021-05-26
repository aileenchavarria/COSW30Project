<?php // Script 8.9 - register.php
/* This page lets people register for the site (in theory). */

// Print some introductory text:
print '<h2>Welcome!</h2><br>';
	
	
// Check if the form has been submitted:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$problem = false; // No problems so far.
	
	// Check for each value...
	if (empty($_POST['username'])) {
		$problem = true;
		print '<center><p class="text--error">Please enter your username!</p><center>';
	}
	
	if (empty($_POST['first_name'])) {
		$problem = true;
		print '<center><p class="text--error">Please enter your first name!</p></center>';
	}

	if (empty($_POST['email'])) {
		$problem = true;
		print '<center><p class="text--error">Please enter your email address!</p></center>';
	}


	if (empty($_POST['age'])) {
		$problem = true;
		print '<center><p class="text--error">Please enter your age!</p></center>';
	}

	if (empty($_POST['location'])) {
		$problem = true;
		print '<center><p class="text--error">Please enter your location!</p></center>';
	}

	if (empty($_POST['password1'])) {
		$problem = true;
		print '<center><p class="text--error">Please enter a password!</p></center>';
	}

	if ($_POST['password1'] != $_POST['password2']) {
		$problem = true;
		print '<center><p class="text--error">Your password did not match your confirmed password!</p></center>';
	} 
	
	if (!$problem) { // If there weren't any problems...

		// Print a message:
		print '<center><p class="text--success"><center>Congratulations! You are now registered! ❤</p></center><br>';

		// Clear the posted values:
		$_POST = [];
	
	} else { // Forgot a field.
	
		print '<center><p class="text--error">Please try again!</p></center><br>';
		
	}

} // End of handle form IF.

// Create the form:
?>
<center><form action="insert.php" method="post" class="form--inline">

	<p>
  <i class="fas fa-user-alt"></i>
  <label for="username">Username:</label>
  <input type="text" name="username" size="20" 
  value="<?php if (isset($_POST['username'])) { print htmlspecialchars($_POST['username']); } ?>">
  </p>

	<p>
  <i class="fas fa-signature"></i>
  <label for="first_name">First Name:</label><input type="text" name="first_name" size="20" value="<?php if (isset($_POST['first_name'])) { print htmlspecialchars($_POST['first_name']); } ?>"></p>

	<p>
  <i class="fas fa-envelope"></i>
  <label for="email">Email Address:</label><input type="email" name="email" size="20" value="<?php if (isset($_POST['email'])) { print htmlspecialchars($_POST['email']); } ?>"></p>

	<p>
<i class="fas fa-birthday-cake"></i>
  <label for="age">Age:</label><input type="text" name="age" size="2" value="<?php if (isset($_POST['age'])) { print htmlspecialchars($_POST['age']); } ?>"></p>

  <p>
<i class="fas fa-compass"></i>
  <label for="area">Location:</label><input type="text" name="area" size="20" value="<?php if (isset($_POST['area'])) { print htmlspecialchars($_POST['area']); } ?>"></p>

	<p>
<i class="fas fa-lock"></i>
  <label for="password1">Password:</label><input type="password" name="password1" size="20" value="<?php if (isset($_POST['password1'])) { print htmlspecialchars($_POST['password1']); } ?>"></p>


	<p>
  <i class="fas fa-key"></i>
  <label for="password2">Confirm Password:</label><input type="password" name="password2" size="20" value="<?php if (isset($_POST['password2'])) { print htmlspecialchars($_POST['password2']); } ?>"></p></center>

<br>  
<button type="submit" name="submit" class="fadebutton2">Register</button></p></center>

<br>

</form>

