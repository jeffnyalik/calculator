<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
	body{
		padding-top:20px;
	}
	</style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
</head>
<body>
<div class="container">
	<div class="row">
		<div class="form-group">
			<div class="col-md-4">
			<div class="container">
				<div class="row">
					<h1>Basic Calculator App</h1>
				</div>
			</div>
				<form action="#" method="post">
					<input type="number" class="form-control" name="num1"><br>
					<input type="number" name="num2" class="form-control">
					<div class="form-group">
					<br>
						<div class="col-md-3">
						<input type="submit" name="calculate" value="Calculate" class="btn btn-danger btn-lg">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>
<?php
include_once('functions.php');
 	$Error = "<h3 style ='color:red;'>You must type a number...<h3>";
if(isset($_POST['calculate']))
{
	$numberOne = $_POST['num1'];
	$numberTwo = $_POST['num2'];

	if(empty($numberOne) || empty($numberTwo))
	{
		print $Error;
	}else
	{   
		$calc = new Calculate;
		$calc->add($numberOne, $numberTwo);
		$calc->sub($numberOne, $numberTwo);
		$calc->mult($numberOne, $numberTwo);
		$calc->div($numberOne, $numberTwo);
		
	}
}
?>

