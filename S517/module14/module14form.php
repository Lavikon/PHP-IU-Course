<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

<fieldset>
    <legend>Included tables and actions</legend>
    <p> <!--Tickboxes for tables -->
        Please select the table(s) you want to edit:<br>
        <input type="checkbox" id="movies" value="Movies" name="tables[]">
        <label for="movies">Movies</label>
        <input type="checkbox" id="users" value="Users" name="tables[]">
        <label for="users">Users</label>
        <input type="checkbox" id="watched" value="Watched" name="tables[]">
        <label for="watched">Watched</label>
    </p>

    <p> <!--Tickboxes for actions -->
        Please select action(s) you want to perform:<br>
        <input type="checkbox" id="drop" value="Drop" name="actions[]">
        <label for="drop">Drop</label>
        <input type="checkbox" id="create" value="Create" name="actions[]">
        <label for="create">Create</label>
        <input type="checkbox" id="fill" value="Fill" name="actions[]">
        <label for="fill">Fill</label>
    </p>
<p> <!--Choice for table size -->
    Please select how many Movies you want to include (default 50):
                    <input type="radio" id="small" name="size" value="50" required><label
                        for="small"> 50</label>
                    <input type="radio" id="medium" name="size" value="100"><label for="medium"> 100</label>
                    <input type="radio" id="large" name="size" value="250"><label for="large"> 250</label>
</p>

</fieldset>

<p> <!-- Submit and reset buttons -->
    <input type="submit" value="Proceed" id="submit" name="submit">
    <input type="reset" value="Clear" id="reset" name="reset">
</p>
</form>

<?php
// provide feedback

    // Check for inputs
    $ok = 1;
    $size = $_POST['size'];

    // selected tables
    if (isset($_POST["tables"]) and is_array($_POST["tables"])) {
        print "<p>Tables you chose: </p>";
        foreach ($_POST["tables"] as $tables) {
            echo "- $tables <br>";
            if ($tables=='Movies') {
                echo "    at size of".$size."<br>";
            }
        }
    } else {
        $ok = 0;
        echo "<p>You need to check at least one table.</p>";
    };

    // selected actions
    if (isset($_POST["actions"]) and is_array($_POST["actions"])) {
        print "<p>As actions to perform, you chose:  </p>";
        foreach ($_POST["actions"] as $actions) {
            echo "- $actions <br>";
        }
    } else {
        $ok = 0;
        echo "<p>You need to check at least one action to perform.</p>";
    }