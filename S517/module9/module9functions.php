<?php
//  the <head>
include('header9.html');
?>

<!-- The actual <header> -->
<header id="top">
    <h1>PHP Module 9 Assignment</h1>
</header>

<main>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <fieldset>
            <legend>Name</legend>
            <p><label for="first">First name:</label><input id="first" type="text" Name="first" 
            value="<?php if (isset($_POST['first'])) {
                echo htmlspecialchars($_POST['first']); 
                } ?>">
            </p>
            <p><label for="last">last name:</label><input id="last" type="text" Name="last" 
            value="<?php if (isset($_POST['last'])) {
                echo htmlspecialchars($_POST['last']); 
                } ?>">
            </p>
        </fieldset>
                <input type="submit" value="Send" id="submit" name="submit">

        <?php 
        // 3 functions needed

        // taking a note from Jasmin's sanitation functions

        // date() function


        if (isset($_POST['submit'])) {
            // error for empty
            if (empty($_POST['first']) or empty($_POST['last'])) {
                echo "Enter both a first and a last name";
            };
            // declarations
            $first = htmlentities($_POST["first"]);
            $last = htmlentities($_POST["last"]);
            // output (not actually in the specsheet)
            echo "<br>";
            echo "<p>Input registered as $first $last. </p>";
            // check name for html entities
            if ($_POST["first"] != $first or $_POST["last"] != $last) {
                echo "<p> That's an unusual name you got there...</p>";
            };
            // but it is nice to see the thing works as intenced
        }
        ?>
    </form>

</main>

<?php
include('footer.html');
?>