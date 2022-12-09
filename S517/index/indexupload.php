<?php
//  the <head>
include('header.html');
//  the navbar
include('../shared/navbar.html');
?>
<header id="top">
        <h1>Index of all Modules</h1>
</header>
<main>
<?php

require_once('../dbconnection.php');

// Connect and select:
$dbc = mysqli_connect($localhost, $username, $password, $database);

        // clear table
        $query = "DROP TABLE IF EXISTS php2022niko_index";
        if (mysqli_query($dbc, $query)) {
                echo '<h2>Table has been purged!</h2>';
            } else {
                echo '<p style="color: red;">Something went wrong: ' . mysqli_error($dbc) . '</p>';
            }
        // create table
        $query = "
            CREATE TABLE php2022niko_index (
                id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                title VARCHAR(70) NOT NULL,
                task VARCHAR(70) NOT NULL,
                link VARCHAR(50) NOT NULL
              )";
        if (mysqli_query($dbc, $query)) {
                echo '<h2>Table has been created!</h2>';
            } else {
                echo '<p style="color: red;">Something went wrong: ' . mysqli_error($dbc) . '</p>';
            }

        // fill table
        $query = "
        INSERT INTO php2022niko_index (title, task, link)
        VALUES
        ('Publishing on the Web','Editing and uploading a web page','../module1/module1.html'),
        ('Getting Started With PHP','Using PHP with HTML','../module2/index.html'),
        ('PHP Variables','Declaring and calling variables','../module3/module3.php'),
        ('PHP for HTML forms (1)','Displaying form entries','../module4/feedback2.html'),
        ('PHP for HTML forms (2)','Form accessibility and security','../module5/module5form.html'),
        ('PHP Control Structures','PHP with IF statements','../module6/module6form.html'),
        ('PHP Arrays','Creating and displaying arrays','../module7/module7form.html'),
        ('PHP for HTML Forms (3)','Creating a template','../module8/module8form.php'),
        ('PHP Functions','Functions','../module9/module9functions.php'),
        ('Accessing and Retrieving Data from Databases (1)','Connecting to MySQL and handling errors','../module10/module10view_entries.php'),
        ('Accessing and Retrieving Data from Databases (2)','Feedback and SQL Injection prevention','../module11/module11search.php'),
        ('Accessing and Retrieving Data from Databases (3)','Retrieving data via SQL','../module12/module12search.php'),
        ('Accessing and Retrieving Data from Databases (4)','Exporting and importing data','../module13/module13search.php'),
        ('Formatting Output from Databases Retrievals','Final project progress Discussion','#'),
        ('Completion of Final Project','Completion of final project','../module15/module15search.php');
        ";
        if (mysqli_query($dbc, $query)) {
            echo '<h2>Table has been filled!</h2>';
        } else {
            echo '<p style="color: red;">Something went wrong: ' . mysqli_error($dbc) . '</p>';
        }



mysqli_close($dbc); // Close the connection.

?>

</p>

</main>
<?php
include('../shared/footer.html');
?>