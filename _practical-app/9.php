<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>
<?php
session_start();

$_SESSION['message'] = "Hi!";

$expiration = time() + (60 * 60 * 24 * 7);
$value = 'random something';
setcookie('testcookie', $value, time() + 3600); /* expire in 1 hour */
?>


<section class="content">

	<aside class="col-xs-4">

		<?php Navigation(); ?>


	</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">

		<?php
		/*  
		Step 1: Create a link saying Click Here, and set the link href to pass some parameters and use the GET super global to see it
		Step 2: Set a cookie that expires in one week
		Step 3: Start a session and set it to value, any value you want.
		*/
		if (isset($_GET['data'])) {
			echo $_GET['data'];
			echo "<br>";
		}
		?>

		<a href="9.php?data=14">Click here</a>
		<br>

		<?php
		if (isset($_COOKIE['testcookie'])) {
			echo $_COOKIE['testcookie'] . "<br>";
		}

		if (isset($_SESSION['message'])) {
			echo $_SESSION['message'] . "<br>";
		}
		?>






	</article><!--MAIN CONTENT-->
	<?php include "includes/footer.php"; ?>