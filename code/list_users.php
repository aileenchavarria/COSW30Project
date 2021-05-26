<!DOCTYPE html>
<html>
<head>
<title>List Users</title>
<link href="stylestyle.css" rel="stylesheet" type="text/css" />

<style>
td {
width: 100px;
}
thead {
font-weight: bold;
}
.center {
text-align:center;
}

</style>
</head>
<body>
<?php 
require('mysqli_connect.php'); // use require because we want to force this to exist before running our queries

echo "<h1>List of Website Users</h1>";
//And now to perform a simple query to make sure it's working
$query = "SELECT * FROM USER";
$result = mysqli_query($connection, $query);


echo "<center><table><thead><td>ID</td><td>Username</td><td>First Name</td><td>Age</td><td>Location</td><td>Email Address</td><td>Actions</td></thead>"; // open table and include table headings

while ($row = mysqli_fetch_assoc($result)) {
echo "<center><tr><td>" . $row['user_id'] . "</td><td>" . $row['username'] . "</td><td>" .$row['first_name'] . "</td><td>" .$row['age'] . "</td><td>" .$row['area'] . "</td><td>" . $row['email_address'] . "</td><td><a href='profile.php?id=" .$row['user_id'] ."'>View</a></td></tr>";
}
echo "</table>"; // close table

echo "<br>";



?>
</body>
</html>
