<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

<fieldset>
    <legend>Search the top 250 movies</legend>
    <!-- Radio button select which movies to list -->
    <p> 
        Please select if you want to include:<br>
        <input type="radio" id="all" value="All" name="seen" checked>
        <label for="all">All</label>
        <input type="radio" id="unwatched" value="Unwatched" name="seen">
        <label for="unwatched">Unwatched</label>
        <input type="radio" id="watched" value="Watched" name="seen">
        <label for="watched">Watched</label>
    </p>
    <!-- Tickboxes for optional info 
    <p> 
        Please select any addional information you want to see:<br>
        <input type="checkbox" id="director" value="Director" name="info[]">
        <label for="director">Director</label>
        <input type="checkbox" id="rating" value="Rating" name="info[]">
        <label for="rating">Rating</label>
        <input type="checkbox" id="stars" value="Stars" name="info[]">
        <label for="stars">Stars</label>
    </p> NOT IMPLEMENTED -->
    <!-- Optional search value -->
    <p><label for="find">Optional value to be searched:</label>
                                <input id="find" type="text" name="search_value" 
                                value="<?php if (isset($_POST['search_value'])) {
                                echo strip_tags($_POST['search_value']);
                                } ?>">
                        </p>
    <!-- Dropdown for max search size -->
    <p> 
        <label for="max">Maximum results: </label><select id="max" name="max">
            <option value="50" selected>50</option>
            <option value="100">100</option>
            <option value="150">150</option>
            <option value="200">200</option>
            <option value="250">250</option>
        </select>
    </p>
</fieldset>

<p> <!-- Submit and reset buttons -->
    <input type="submit" value="Proceed" id="submit" name="submit">
    <input type="reset" value="Clear" id="reset" name="reset">
</p>
</form>

<?php
// Collect valueas as variables
$seen = $_POST["seen"];
$max = $_POST["max"];
echo "<p>You chose $seen movies up to $max entries.</p>";
    // selected tables
/*     if (isset($_POST["info"]) and is_array($_POST["info"])) {
        foreach ($_POST["info"] as $info) {
            echo "- $info <br>";
        }
    }; */