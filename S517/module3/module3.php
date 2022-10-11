<!DOCTYPE html>  
<html lang="en">
  
<head>  
<meta charset="utf-8">
<title>Module 3 exercise</title> 

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=3">

<!--Dont think I didn't notice the blank metadata!-->
<meta name="author" content="Niko Lavikainen">
<meta name="description" content="PHP variuable Exercise">
<meta name="keywords" content="Exercise, PHP, SEO nonsense">
<!--style-->
<link rel="stylesheet" type="text/css" href="styles/mystyles.css">

</head> 
 
<body>

<h1>Module 3 exercise</h1> <!--because a page needs a title-->
<h2>the comment overload edition</h2>

<?php //php section

//variables - yea, the naming could be more generic but I like to have some fun XD
$worst_day="Mondays"; 
$cheap_day2fly="Tuesdays"; //thursdays are actually also good for cheap flights though
$thunder_day="Thursdays";
$bad_movie=10000; //I haven't actually seen 10000 BC 

// output - I like the oxford comma
print "I work on $worst_day, $cheap_day2fly, and $thunder_day and earn $bad_movie dollars a <b><i>week</i></b><br>";

/* Note on experimentation for advanced students
I appreciate you acknowledge these are a bit easy, it actually got me to second guess myself for a bit...
Anyway, enough comments, there's an echo here, though I am not sure it really makes a difference*/

echo "<br>My friend works only on " . $thunder_day . " but earns a lot more.";

//but I love the good old double dash <3

?>

</body>  

</html>  