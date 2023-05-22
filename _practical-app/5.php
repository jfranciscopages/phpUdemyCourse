<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>
<section class="content">

	<aside class="col-xs-4">
		<?php Navigation(); ?>


	</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">


		<?php
		/*  
		Step 1: Use a pre-built math function here and echo it
		Step 2:  Use a pre-built string function here and echo it
		Step 3:  Use a pre-built Array function here and echo it
		*/

		// this should return 1
		echo "cos(0): " . cos(0);
		echo "<br>";

		// this should return 0
		echo "sin(0): " . sin(0);
		echo "<br>";

		// this will look like a Daffy Duck phrase
		$myString = "I love pre-built string functions";
		echo str_replace("s", "zz", $myString) . "<br>";

		// this will show the values of the array
		$myArray = [40, 3, 2, 20, "George"];
		print_r(array_values($myArray));
		?>

	</article><!--MAIN CONTENT-->
	<?php include "includes/footer.php"; ?>