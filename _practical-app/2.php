<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">

	<aside class="col-xs-4">

		<?php Navigation(); ?>


	</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">
		<?php
		/* Step 1: Make 2 variables called number1 and number2 and set 1 to value 10 and the other 20:
		  Step 2: Add the two variables and display the sum with echo:
		  Step3: Make 2 Arrays with the same values, one regular and the other associative 
		*/
		$number1 = 10;
		$number2 = 20;
		echo $number1 + $number2;
		echo "<br>";
		$array1 = array(1, 2, 3, 4);
		$array2 = array("n1" => 1, "n2" => 2, "n3" => 3, "n4" => 4);
		echo "regular array first value: " . $array1[0];
		echo "<br>";
		echo "associative array first value: " . $array2["n1"];
		?>
	</article><!--MAIN CONTENT-->

	<?php include "includes/footer.php"; ?>