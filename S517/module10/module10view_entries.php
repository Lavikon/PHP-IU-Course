<?php
//  the <head>
include('header10.html');
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
                print "<table><tr>
                <th>Employee Number</th>
                <th>Surname</th>
                <th>Given Name</th> 
                <th>Title</th>
                <th>Extension</th>
                <th>Email</th>
                </tr>";

                // code uses westerns standards as it is in the database
                while ($row = mysqli_fetch_array($result)) {
                        print "<tr>
                        <td>{$row['employeeNumber']}</td>
                        <td>{$row['lastName']}</td>
                        <td>{$row['firstName']}</td>
                        <td>{$row['jobTitle']}</td>
                        <td>{$row['extension']}</td>
                        <td>{$row['email']}</td>
                        </tr>";
                }
                print "</table>";
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