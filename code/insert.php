<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("aileenc.sgedu.site", "u7modcjsxnhci", "61yw229g8c", "dbcflyoiwc1v2y");
 

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$username = mysqli_real_escape_string($link, $_REQUEST['username']);
$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
$email_address = mysqli_real_escape_string($link, $_REQUEST['email']);
$age = mysqli_real_escape_string($link, $_REQUEST['age']);
$area = mysqli_real_escape_string($link, $_REQUEST['area']);
$password1 = mysqli_real_escape_string($link, $_REQUEST['password1']);
 
// Attempt insert query execution
$sql = "INSERT INTO USER (username, first_name, email_address, age, area, password1) VALUES ('$username', '$first_name', '$email_address', '$age', '$area', '$password1')";
if(mysqli_query($link, $sql)){
  echo '<td>';
include('welcome.php');
echo '</td>'; 
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
