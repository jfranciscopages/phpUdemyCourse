<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">

	<aside class="col-xs-4">

		<?php Navigation(); ?>

	</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">
		<?php
		/* 
		Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP
		Step 2: Make a forloop  that displays 10 numbers
		Step 3 : Make a switch Statement that test againts one condition with 5 cases
		*/
		// if statement
		if (10 <= 0) {
			echo "hi";
		} elseif (8 <= 0) {
			echo "this is not going to show";
		} else {
			echo "I love PHP" . "<br>";
		};

		// for loop
		for ($i = 0; $i <= 10; $i++) {
			echo $i . "<br>";
		}

		// switch statement with emojis
		$x = 5;
		switch($x){
			case 1:
				echo ":)";
				break;
			case 2:
				echo ":P";
				break;
			case 3:
				echo ":$";
				break;
			case 4:
				echo ":/";
				break;
			case 5:
				echo ":D";
				break;
		}

		?>

	</article><!--MAIN CONTENT-->

	<?php include "includes/footer.php"; ?>