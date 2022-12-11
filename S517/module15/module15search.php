<?php
//  the <head>
include('header15.html');
//  the navbar
include('../shared/navbar.html');
?>
<header id="top">
        <h1>Final Project: Movie Database</h1>
</header>
<main>

        <?php
        //  A form based on module 7
        include('module15form.php');

        // Call login info
        require_once('../dbconnection.php');

        // Connect to DB
        $dbc = mysqli_connect($localhost, $username, $password, $database);

        // Ensure accents do not corrupt
        mysqli_set_charset($dbc, "utf8");

        // Declare output variable
        $result_display = "";

        // Run the query:
        if (!empty($_POST['submit'])) {
                
        // Define the query:
                $input = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['search_value']))); //security added
                // Search for imput value or for all
                $query = "SELECT * FROM php2022niko_movies ";
                if ($seen == 'Watched') {
                $query .= "
                INNER JOIN php2022niko_seen ON php2022niko_movies.id = php2022niko_seen.movieid ";
                } // Making use of join to limit only to seen movies
                if (!empty($input) and $seen == 'Unwatched') {
                        $query .= "
                        WHERE 
                        (php2022niko_movies.id LIKE '%$input%'
                        OR php2022niko_movies.title LIKE '%$input%'
                        OR php2022niko_movies.title LIKE '%$input%'
                        OR php2022niko_movies.director LIKE '%$input%'
                        OR php2022niko_movies.stars LIKE '%$input%')
                        AND php2022niko_movies.id NOT IN 
                        (SELECT movieid FROM php2022niko_seen) ";
                } else if (!empty($input)) {
                        $query .= "
                        WHERE 
                        php2022niko_movies.id LIKE '%$input%'
                        OR php2022niko_movies.title LIKE '%$input%'
                        OR php2022niko_movies.title LIKE '%$input%'
                        OR php2022niko_movies.director LIKE '%$input%'
                        OR php2022niko_movies.stars LIKE '%$input%' ";
                } else if ($seen == 'Unwatched') {
                $query .= "
                WHERE id NOT IN 
                (SELECT movieid FROM php2022niko_seen) ";
                } // Nested Query to limit only to unseen movies

                // Perform the search
                $results = mysqli_query($dbc, $query);

                // No results:
                if (mysqli_num_rows($results) < 1) {
                        $result_display .= "<p>Your search returned no results.</p>";
                } else
                        // Results found:
                        if (mysqli_num_rows($results) > 0) {
                                //Assign the number of rows returned to the $total variable
                                $total = mysqli_num_rows($results);

                                //Assign some text to $result_display and output the value of $total
                                $result_display .= "<p>Your search "; 
                                if (!empty($input)) {
                                        $result_display .= "<p>for $input "; 
                                }
                                $result_display .= "returned <b>$total</b> rows.</p>";

                                // Create the table header row
                                $result_display .= '
                                <table class="table custom-table" title="Datatable" id="datatable">
                                <thead><tr>
                                <th scope="col">Rank</th>
                                <th scope="col">Title</th>
                                <th scope="col">Year</th>
                                <th scope="col">Rating</th>
                                <th scope="col" class="lg">Director</th>
                                <th scope="col" class="lg">Stars</th>
                                </tr></thead>
                                <tbody>';

                                // counter for limiting max results
                                $i = 0;

                                // Add then add even more to $result_display: 
                                // the above message and the results from the while loop
                                // up to a max entries to be displayed
                                while ($row = mysqli_fetch_array($results)) {
                                        $result_display .= "
                                        <tr scope='row'>
                                        <td>{$row['id']}</td>
                                        <td><a href='{$row['link']}'>{$row['title']}</a></td>
                                        <td>{$row['year']}</td>
                                        <td>{$row['rating']}</td>
                                        <td class='lg'>{$row['director']}</td>
                                        <td class='lg'>{$row['stars']}</td>
                                        </tr>";
                                        // check for max results
                                        $i++; // increment and compare
                                        if ($i == $max) {
                                                break;
                                        };
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
        // Lazy way to ensure there is a gap between info and footer
        echo "<br><br><br><br><br>";
        ?>
</main>

<?php
include('../shared/footer.html');
?>