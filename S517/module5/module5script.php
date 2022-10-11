<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=3">

    <meta name="description" content="PHP Module 5 Assignment">
    <meta name="keywords" content="PHP, Assignment">
    <meta name="author" content="Niko Lavikainen">

    <title>PHP Module 5 Assignment</title>
    <link rel="stylesheet" type="text/css" href="module5styles.css">
</head>

<body>

    <p><?php
    $first = htmlentities($_POST["firstname"]);
    $last = htmlentities($_POST["lastname"]);
    $city = htmlentities($_POST["city"]);
    echo "Welcome to the site, $first $last of <b><i>$city</i></b>.";
    ?>
    </p>

    <p><?php
    $email = htmlentities($_POST["email"]);
    echo "Your email of $email has been registered."; 
    ?> 
    </p>

    <p><?php
    $edu = htmlentities($_POST["education"]);
    echo "Your education is: $edu"; 
    ?>
    </p>

</body>

</html>