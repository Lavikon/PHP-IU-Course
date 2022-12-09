<?php
//  the <head>
include('header13.html');
//  the navbar
include('../shared/navbar.html');
?>
<header id="top">
        <h1>Uploading and displaying a Database</h1>
</header>
<main>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <fieldset>
                        <legend>Search Parameters</legend>
                        <p><label for="find">Value to be searched (does nothing):</label>
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

        // clear table
        $query = "DROP TABLE IF EXISTS php2022niko_M13";
        if (mysqli_query($dbc, $query)) {
                echo '<h2>Table has been purged!</h2>';
            } else {
                echo '<p style="color: red;">Something went wrong: ' . mysqli_error($dbc) . '</p>';
            }
        // create table
        $query = "
        CREATE TABLE php2022niko_M13 (
            id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
            title VARCHAR(255) NOT NULL,
            year INT NOT NULL,
            rating DECIMAL(2,1) NOT NULL,
            director VARCHAR(255) NOT NULL,
            stars TEXT NOT NULL
        )";
        if (mysqli_query($dbc, $query)) {
                echo '<h2>Table has been created!</h2>';
            } else {
                echo '<p style="color: red;">Something went wrong: ' . mysqli_error($dbc) . '</p>';
            }

        // fill table
        $query = "
        INSERT INTO php2022niko_M13 (title, year, rating, director, stars)
        VALUES
            ('The Godfather', 1972, 9.2, 'Francis Ford Coppola', 'Marlon Brando, Al Pacino, James Caan'),
            ('The Shawshank Redemption', 1994, 9.3, 'Frank Darabont', 'Tim Robbins, Morgan Freeman, Bob Gunton'),
            ('Schindler''s List', 1993, 8.9, 'Steven Spielberg', 'Liam Neeson, Ben Kingsley, Ralph Fiennes'),
            ('The Dark Knight', 2008, 9.0, 'Christopher Nolan', 'Christian Bale, Heath Ledger, Aaron Eckhart'),
            ('12 Angry Men', 1957, 8.9, 'Sidney Lumet', 'Henry Fonda, Lee J. Cobb, Martin Balsam'),
            ('The Lord of the Rings: The Return of the King', 2003, 8.9, 'Peter Jackson', 'Elijah Wood, Viggo Mortensen, Ian McKellen'),
            ('Pulp Fiction', 1994, 8.9, 'Quentin Tarantino', 'John Travolta, Uma Thurman, Samuel L. Jackson'),
            ('The Good, the Bad and the Ugly', 1966, 8.9, 'Sergio Leone', 'Clint Eastwood, Lee Van Cleef, Eli Wallach'),
            ('Fight Club', 1999, 8.8, 'David Fincher', 'Brad Pitt, Edward Norton, Helena Bonham Carter'),
            ('The Lord of the Rings: The Fellowship of the Ring', 2001, 8.8, 'Peter Jackson', 'Elijah Wood, Ian McKellen, Viggo Mortensen');
        ";
        if (mysqli_query($dbc, $query)) {
            echo '<h2>Table has been filled!</h2>';
        } else {
            echo '<p style="color: red;">Something went wrong: ' . mysqli_error($dbc) . '</p>';
        }

        // Run the query:
        if (!empty($_POST['submit'])) {
                
        // Define the query:
        $query = 'SELECT * FROM php2022niko_M13';
                $results = mysqli_query($dbc, $query);
                // there are no SEARCH criteria implemented

                // No results:
                if (mysqli_num_rows($results) < 1) {
                        $result_display .= "<p>Your search returned no results.</p>";
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
                                <th scope="col">Rank</th>
                                <th scope="col">Title</th>
                                <th scope="col">Year</th>
                                <th scope="col">Director</th>
                                <th scope="col">Stars</th>
                                </tr></thead>
                                <tbody>';

                                //Add then add even more to $result_display: the above message and the results from the while loop
                                while ($row = mysqli_fetch_array($results)) {
                                        $result_display .= "
                                        <tr scope='row'>
                                        <td>{$row['id']}</td>
                                        <td><a href='#'>{$row['title']}</a></td>
                                        <td>{$row['year']}</td>
                                        <td>{$row['director']}</td>
                                        <td>{$row['stars']}</td>
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