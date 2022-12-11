<?php
//  the <head>
include('header14.html');
//  the navbar
include('../shared/navbar.html');
?>
<header id="top">
        <h1>Uploading Databases</h1>
</header>
<main>

    <?php
    //  A form based on module 7
    include('module14form.php');
    ?>

    <?php
    // Call login info
    require_once('../dbconnection.php');

    // Connect to DB
    $dbc = mysqli_connect($localhost, $username, $password, $database);

    // Ensure accents do not corrupt
    mysqli_set_charset($dbc, "utf8");

    // Include SQL
    include('Movies.php');
    include('Users.php');
    include('Watched.php');

    // Run the queries:
    if (!empty($_POST['submit']) and $ok==1) {
        // Loop for each table
        foreach ($_POST["tables"] as $tables) {
            // Choose the right table
            if ($tables=='Movies') {
                $drop = $dropm;
                $create = $createm;
                // Check size
                if ($size=='100') {
                    $data = $datam1;
                } else if ($size=='250') {
                    $data = $datam2;
                } else {
                    $data = $datam;
                }
            } else if ($tables=='Users') {
                $drop = $dropu;
                $create = $createu;
                $data = $datau;
            } else if ($tables=='Watched') {
                $drop = $dropw;
                $create = $createw;
                $data = $dataw;
            }
            // Loop for each action
            foreach ($_POST["actions"] as $actions) {
                // clear table
                if (mysqli_query($dbc, $drop) and $actions=='Drop') {
                    echo '<h2>Table ' . $tables . ' has been purged!</h2>';
                } else 
                // create table
                if (mysqli_query($dbc, $create) and $actions=='Create') {
                    echo '<h2>Table ' . $tables . ' has been created!</h2>';
                } else 
                // fill the table
                if (mysqli_query($dbc, $data) and $actions=='Fill') {
                    echo '<h2>Table ' . $tables . ' has been filled!</h2>';
                } else {
                    echo '<p style="color: red;">Something went wrong with data input: ' . mysqli_error($dbc) . '</p>';
                }
            }
        }
    }

    // Close the connection.        
    mysqli_close($dbc);
    ?>
</main>

<?php
include('../shared/footer.html');
?>