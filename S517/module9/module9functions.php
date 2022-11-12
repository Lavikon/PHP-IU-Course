<?php
//  the <head>
include('header9.html');
//  the navbar
include('../shared/navbar.html');
?>

<!-- The actual <header> -->
<header>
    <h1>PHP Module 9 Assignment</h1>
</header>

<main>
    <!-- form, name optional -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <fieldset>
            <legend>Name</legend>
            <p><label for="first">Given name:</label><input id="first" type="text" Name="first" 
            value="<?php if (isset($_POST['first'])) {
                echo htmlentities($_POST['first']); 
                } ?>">
            </p>
        </fieldset>
    <!-- PHP doesn't seem to like these data types
        <fieldset>
            <legend>Date and Time in format</legend>
            <p><label for="date">Date:</label><input id="date" type="date" Name="date" 
            value="<?php if (isset($_POST['date'])) {
                echo htmlentities($_POST['date']); 
                } ?>" required>
            </p>
            <p><label for="time">Time:</label><input id="time" type="time" Name="time" 
            value="<?php if (isset($_POST['time'])) {
                echo htmlentities($_POST['time']); 
                } ?>">
            </p>
        </fieldset> 
        commented out 
    -->
        <fieldset>
            <legend>Date as number</legend>
            <p>
                <label for="day">DD:</label><input id="day" type="number" Name="day" 
                    value="<?php if (isset($_POST['day'])) {
                    echo htmlentities($_POST['day']); 
                    } ?>" size="2" required>
                <label for="month">MM:</label><input id="month" type="number" Name="month" 
                    value="<?php if (isset($_POST['month'])) {
                    echo htmlentities($_POST['month']); 
                    } ?>" size="2" required>
                <label for="year">MM:</label><input id="year" type="number" Name="year" 
                    value="<?php if (isset($_POST['year'])) {
                    echo htmlentities($_POST['year']); 
                    } ?>" size="4" required>
            </p>
        </fieldset>
        <input type="submit" value="Send" id="submit" name="submit">

        <?php 
        // Function 1: Taking a note from Jasmin's sanitisation functions
        function xss($input) {
            // If an array
            if (gettype($input) == 'array') {
                // new output array
                $array = array();
                // go through each value, clean and output back into the new array
                foreach ($input as $in) {
                    $clean = trim(htmlspecialchars(strip_tags($in)));
                    array_push($array,$clean);
                }
                return $array;
            } 
            // else treat it as a string
            $clean = trim(htmlspecialchars(strip_tags($input)));
            return $clean;
        }

        if (isset($_POST['submit'])) {
            // declarations and XSS cleaning
            $first = xss($_POST["first"]);
            $date = $_POST["date"];
            $time = $_POST["time"];
            $day = xss($_POST["day"]);
            $month = xss($_POST["month"]);
            $year = xss($_POST["year"]);

            // error for empty
            if (empty($_POST['first'])) {
                echo "Please enter a given name<br>";
            } else {
                echo "<p>Hello $first! </p>";
            }
            // check name for html entities, empty space
            if ($_POST["first"] != $first) {
                echo "<p> That's an unusual name you got there...</p>";
            }
            // Create a date from number inputs with 3 date functions
            $date1 = $year."-".$month."-".$day;
            echo "<p>Your appointment is set on ".$date1." (string)</p>";
            $date2 = date_create("$date1");
            echo "<p>Your appointment is set on ".date_format($date2,"Y/m/d")." (format)</p>";
            echo "<p>And in Unix time it is ".date_timestamp_get($date2)."</p>";
        }
        ?>
    </form>
</main>
<?php
include('../shared/footer.html');
?>