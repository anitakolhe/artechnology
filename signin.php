	<?php
	include_once'signcon.php';

	?>

	<!DOCTYPE html>
	<html>
	<head>
		<title>signin</title>
		<link rel="stylesheet" type="text/css" href="sign.css">

	</head>
	<body>
     <div class="container">
	       <h1 class="title">Sign In </h1>
	<div class="signin">
	      	<?php if(isset($_SESSION['msg'])):?>
	      		<div class="sign">
	      		<?php
	      		echo $_SESSION['msg'];
	      		?>
	      	</div>
	     <?php endif ?>
	</div>
	<form method="post" action="signcon.php">

		 <div class="signin">
		 	<input type="text" class="bt1" name="Username" placeholder="Username">
		 </div>

		 <div class="signin">
			<input type="Password" class="bt2" name="ConfirmPassword" placeholder="ConfirmPassword">
		 </div>	

		 <input type="Submit" name="Login" class="bt3">
	
         <button type="Back" class="bt4" name="Back">Back</button> 
   
    </form>
    </div>
	</body>
	</html>