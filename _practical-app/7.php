<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>


<section class="content">

	<aside class="col-xs-4">

		<?php Navigation(); ?>


	</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">
		<?php
		/*  
		Step 1 - Create a database in PHPmyadmin
		Step 2 - Create a table like the one from the lecture
		Step 3 - Insert some Data
		Step 4 - Connect to Database and read data
		*/
		?>

		<?php
		$connection = mysqli_connect('localhost', 'root', '', 'mydb');
		if (!$connection) {
			die("Database connection failed") . mysqli_error($connection);
		} else {
			echo "We are connected" . "<br>";
		}

		$query = "SELECT * FROM practice";
		$result = mysqli_query($connection, $query);
		
		if (!$result){
			die("Query failed.");
		} else {
			while($row = mysqli_fetch_assoc($result)){
				print_r($row);
			}
		}
		?>




	</article><!--MAIN CONTENT-->

	<?php include "includes/footer.php"; ?>