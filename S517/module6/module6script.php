<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=3">

    <meta name="description" content="PHP Module 6 Assignment">
    <meta name="keywords" content="PHP, Assignment">
    <meta name="author" content="Niko Lavikainen">

    <title>PHP Module 6 Assignment</title>
    <link rel="stylesheet" type="text/css" href="module6styles.css">
</head>

<body>

    <?php
    // declare
    $first = htmlentities($_POST["firstname"]);
    $last = htmlentities($_POST["lastname"]);
    $age = htmlentities($_POST["age"]);
    $user = htmlentities($_POST["username"]);

    // checks and prints
    if (strlen($user) < 6) {
        print "<p>Sorry, your username needs to be at least 6 characters, $first $last!</p>";
    } elseif ($age > "16") {
        print "<p>Welcome to the site, $first $last. You are $age years old, so you qualify.</p>";
        print "<p>Your username of <span class=\"red\">$user</span> has been registered.</p>";
   } else {
        print "<p>Sorry, you are too young, $first $last!</p>";
   }

    ?> 
    

</body>

</html>