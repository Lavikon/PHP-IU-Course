<?php
//  the <head>
include('header12.html');
//  the navbar
include('../navbar.html');
?>
<header id="top">
        <h1>View Entries</h1>
</header>
<main>
        <?php

        require_once('../dbconnection.php');

        // Connect and select:
        $dbc = mysqli_connect($localhost, $username, $password, $database);

        // Define the query:
        $query = 'SELECT * FROM employees';

        // Run query:
        if ($result = mysqli_query($dbc, $query)) {
                // Surname and Given name for clarity in case of eastern employees
                print '
                <table class="table custom-table" title="Datatable" id="datatable">
                <thead>
                <tr>
                <th scope="col">Employee Number</th>
                <th scope="col">Name and title</th>
                <th scope="col">Extension</th>
                <th scope="col">Email</th>
                </tr>
                </thead>
                <tbody>';

                // code uses westerns standards as it is in the database
                while ($row = mysqli_fetch_array($result)) {
                        print "
                        <tr scope='row'>
                        <td>{$row['employeeNumber']}</td>
                        <td><a href='#'>{$row['lastName']} {$row['firstName']}</a>
                        <small>{$row['jobTitle']}</small></td>
                        <td>{$row['extension']}</td>
                        <td>{$row['email']}</td>
                        </tr>";
                }
                print "
                </tbody>
                </table>";
        } else { // Query didn't run.
                print '<p style="color: red;">Could not retrieve the data because:<br>' . mysqli_error($dbc) . '.</p>
                <p>The query being run was: ' . $query . '</p>';
        }

        mysqli_close($dbc); // Close the connection.

        ?>
</main>

<?php
include('footer.html');
?>