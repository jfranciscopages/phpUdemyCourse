<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
		
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php  
	/*
	Step 1: Define a function and make it return a calculation of 2 numbers
	Step 2: Make a function that passes parameters and call it using parameter values
 	*/

	function c(){
		$n1 = 10;
		$n2 = 20;
		$sum = $n1 + $n2;
		return $sum;
	}
	echo c() . "<br>";

	function inputOutput($parameter){
		echo $parameter;
	};
	echo inputOutput("that's great!");

?>





</article><!--MAIN CONTENT-->


<?php include "includes/footer.php"; ?>