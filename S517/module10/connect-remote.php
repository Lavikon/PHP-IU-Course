t<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Connect to MySQL</title>
</head>
<body>
<?php // Script 12.2 - mysqli_connect.php #2
/* This script connects to the MySQL database. */
require_once('../dbconnection.php'); // example of external safe location
// Attempt to connect to MySQL and print out messages:
if ($dbc = @mysqli_connect($localhost, $username, $password, $database)) {

print '<p>Successfully connected to the database!</p>';

mysqli_close($dbc); // Close the connection.

} else {
/* By the way, I did not write that inline style that follows! Use a class from a stylesheet instead! */
print '<p style="color: red;">Could not connect to the database:<br>' . mysqli_connect_error() . '.</p>';
}

?>
</body>
</html>
