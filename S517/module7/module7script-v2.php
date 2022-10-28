<!DOCTYPE html>
<html lang="en">

<head>
    <!-- technical meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=3">

    <!-- informational meta -->
    <meta name="description" content="PHP Module 7 Assignment">
    <meta name="keywords" content="PHP, Assignment">
    <meta name="author" content="Niko Lavikainen">

    <!-- title and style -->
    <title>PHP Module 7 Assignment</title>
    <link rel="stylesheet" type="text/css" href="module7styles.css">
</head>

<body>
    <header>
        <h1>PHP Module 7 Assignment</h1>
    </header>
    <main>
        <fieldset>
            <legend>Preferred days and seasons</legend>
            <?php

            // error reporting
            ini_set('display_errors', 1);
            error_reporting(E_ALL);

            // declarations
            $first = htmlentities($_POST["firstname"]);

            // output
            print "<p>Welcome to the site, <b>$first</b>. </p>";

            // check name for html entities
            if ($_POST["firstname"] != $first) {
                print "<p> That's an unusual name you got there...</p>";
            };

            // favourite days
            if (isset($_POST["days"]) and is_array($_POST["days"])) {
                print "<p>As your favorite day(s) of the week, you chose: </p>";
                foreach ($_POST["days"] as $days) {
                    echo "- $days <br>";
                }
            } else {
                echo "<p>$first, you need to check at least one favorite day.</p>";
            };

            // favourite seasons
            if (isset($_POST["seasons"]) and is_array($_POST["seasons"])) {
                print "<p>As your favorite season(s), you chose:  </p>";
                foreach ($_POST["seasons"] as $seasons) {
                    echo "- $seasons <br>";
                }
            } else {
                echo "<p>$first, you need to check at least one favorite season.</p>";
            }
            ?>
        </fieldset>

    </main>
</body>

</html>