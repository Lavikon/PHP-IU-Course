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
        // Retrieve database connection info
        require_once('../dbconnection.php');
        // Connect and select:
        $dbc = mysqli_connect($localhost, $username, $password, $database);
        // Define the query:
        $query = 'SELECT * FROM php2022niko_index';

        // Run query:
        if ($results = mysqli_query($dbc, $query)) {
                //Assign the number of rows returned to the $total variable
                $total = mysqli_num_rows($results);

                //Assign some text to $result_display and output the values of $input and $total
                $result_display .= "<p>This course contains <b>$total</b> modules.</p>
                <p>Please note that Modules 1-7 do not cointain the navigation bar!</p>";
                $result_display .= '
                                                <table class="table custom-table" title="Datatable" id="datatable">
                                                <thead><tr>
                                                <th scope="col">Module</th>
                                                <th scope="col">Topic</th>
                                                <th scope="col">Task</th>
                                                </tr></thead>
                                                <tbody>';

                //Add then add even more to $result_display: the above message and the results from the while loop
                while ($row = mysqli_fetch_array($results)) {
                        $result_display .= "
                                                        <tr scope='row'>
                                                        <td>{$row['id']}</td>
                                                        <td><a href='{$row['link']}'>{$row['title']}</a></td>
                                                        <td>{$row['task']}</td>
                                                        </tr>";
                }
                $result_display .= "
                                                </tbody>
                                                </table>";
        } else { // Query didn't run.
                print '<p style="color: red;">Could not retrieve the data because:<br>' . mysqli_error($dbc) . '.</p>
<p>The query being run was: ' . $query . '</p>';
        }

        mysqli_close($dbc); // Close the connection.

        ?>

        <?php // Display output
        echo $result_display;
        // Lazy way to ensure there is a gap between info and footer
        echo "<br><br><br><br><br>";
        ?>
</main>
<?php
include('../shared/footer.html');
?>