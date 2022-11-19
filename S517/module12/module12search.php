<?php
//  the <head>
include('header12.html');
//  the navbar
include('../shared/navbar.html');
?>
<header id="top">
        <h1>Search</h1>
</header>
<main>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <fieldset>
                        <legend>Search Parameters</legend>
                        <p><label for="find">Value to be searched:</label>
                                <input id="find" type="text" name="search_value" 
                                value="<?php if (isset($_POST['search_value'])) {
                                echo strip_tags($_POST['search_value']);
                                } ?>">
                        </p>
                        <input type="submit" value="Search" id="submit" name="submit">
                </fieldset>
        </form>

        <?php
        // Call login info
        require_once('../dbconnection.php');

        // Connect to DB
        $dbc = mysqli_connect($localhost, $username, $password, $database);

        // Ensure accents do not corrupt
        mysqli_set_charset($dbc, "utf8");

        // Declare output variable
        $result_display = "";

        // Run the query:
        if (!empty($_POST['submit']) && !empty($_POST['search_value'])) {

                $input = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['search_value']))); //security added
                $query = "SELECT customers.customerName, orders.orderNumber, orders.shippedDate 
                FROM customers 
                INNER JOIN orders
                ON customers.customerNumber = orders.customerNumber 
                WHERE customerName LIKE '$input%' ";
                $results = mysqli_query($dbc, $query);

                // No results:
                if (mysqli_num_rows($results) < 1) {
                        $result_display .= "<p>Your search of <b>$input</b> returned no results.</p>";
                } else
                        // Results found:
                        if (mysqli_num_rows($results) > 0) {

                                //Assign the number of rows returned to the $total variable
                                $total = mysqli_num_rows($results);

                                //Assign some text to $result_display and output the values of $input and $total
                                $result_display .= "<p>Your search of <b>$input</b> returned <b>$total</b> rows.</p>";
                                $result_display .= '
                                <table class="table custom-table" title="Datatable" id="datatable">
                                <thead><tr>
                                <th scope="col">Customer name</th>
                                <th scope="col">Order Number</th>
                                <th scope="col">Shipped Date</th>
                                </tr></thead>
                                <tbody>';

                                //Add then add even more to $result_display: the above message and the results from the while loop
                                while ($row = mysqli_fetch_array($results)) {
                                        $result_display .= "
                                        <tr scope='row'>
                                        <td><a href='#'>{$row['customerName']}</a></td>
                                        <td>{$row['orderNumber']}</td>
                                        <td>{$row['shippedDate']}</td>
                                        </tr>";
                                }
                                $result_display .= "
                                </tbody>
                                </table>";
                        }
        }

        // Close the connection.        
        mysqli_close($dbc);
        ?>
        <?php // Display output
        echo $result_display;
        ?>
</main>

<?php
include('../shared/footer.html');
?>