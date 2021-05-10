<!DOCTYPE html>
<html>
<head>
<title>Edit User</title>
<link href="othercss.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php require("mysqli_connect.php"); ?>


<?php
//if this form has been submitted, do the update process
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    //print_r($_POST);

    $user_id = $_POST['user_id'];
    $email_address = $_POST['email_address'];
    $password = $_POST['password'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $status = $POST['status'];

    $update_query =
        "UPDATE USER
        SET email_address = '$email_address',
        password = '$password',
        first_name = '$first_name',
        last_name = '$last_name'
        WHERE user_id = $user_id";

        //echo $update_query;

        $update_result = mysqli_query($connection, $update_query);
        if ($update_result) {
            //success
            echo "<center>Record Updated Sucessfully!</center>";
        }
        else {
            echo "Update failed.";
        }

}


    else {
     $user_id = $_GET['id'];
    $query = "SELECT * FROM USER WHERE user_id = 
        $user_id";



$result = mysqli_query($connection, $query);
$row = mysqli_fetch_array($result);
}

include 'header.php';
include 'footer.php';
?>

<center><h1>Update User</h1>
<center><form action="edit_user.php" method="post" class="form--inline">
 <p>User ID: <input type="text" name="user_id" readonly value="<?php echo $row['user_id']; ?>"></p>
 <p>First Name: <input type="text" name="first_name" value="<?php echo $row['first_name']; ?>" 
 required></p>
 <p>Last Name: <input type="text" name="last_name" value="<?php echo $row['last_name']; ?>" 
 required></p>
 <p>Email Address: <input type="text" name="email_address" value="<?php echo $row['email_address']; ?>"
 required></p>
<label for="status">Status:</label>
<select name="status" value="<?php echo $row['status']; ?>"
 required>
	<option>A
	<option>I
</select>
<p>
<button type="submit" class="inline" name="submit">Update</button>
<input type="button" onclick="window.location.href = 'http://aileenc.sgedu.site/userlist.php';" value="See List"/>
 </form>
</div>
 </body>
</html>
