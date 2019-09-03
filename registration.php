<?php 
    include_once('connection.php');
?>

<!DOCTYPE html>
<html>
<head>
  <title>registration</title>
  <link rel="stylesheet" type="text/css" href="./regi.css">
</head>
<body>
	<div class="container">
		<form  method="post" action="connection.php">
			<div class="row">
				<h1> Registraion Form </h1>
			</div>
      <div class="row">
            <div class="col-25">
              <label for="usr_first_name">FirstName</label>
            </div>
            <div class="col-75">
          <input type="text" name="first_name" placeholder="FirstName" required>
            </div>
      </div><!--first name-->
      <div class="row">
            <div class="col-25">
              <label for="usr_last_name">LastName</label>
            </div>
            <div class="col-75">
          <input type="text" name="last_name" placeholder="LastName"required>
            </div>
      </div><!--last name-->
			<div class="row">
      			<div class="col-25">
        			<label for="usr_name">UserName</label>
      			</div>
      			<div class="col-75">
				  <input type="text" name="user_name" placeholder="UserName" required>
      			</div>
    		</div><!--usr_name-->
			<div class="row">
      			<div class="col-25">
        			<label for="usr_mail">Email</label>
      			</div>
      			<div class="col-75">
				  <input type="email" name="email_id" placeholder="Email" required>
      			</div>
    		</div><!--user_mail-->
			<div class="row">
      			<div class="col-25">
        			<label for="usr_pass">Password</label>
      			</div>
      			<div class="col-75">
				  <input type="Password" name="password" placeholder="Password" id="password">
      			</div>
    		</div><!--password-->
			<div class="row">
      			<div class="col-25">
        			<label for="usr_cnf_pass">ConfirmPassword</label>
      			</div>
      			<div class="col-75">
				  <input type="Password" name="cnfrm_pass" placeholder="Confirm Password" id="cnfrm_pass" >
      			</div>
    		</div><!--confirm password-->
			<div class="row">
				<input type="submit" class="b1" value="Submit" name="submit" onclick="validate()"> 
			</div><!--submit-->
      <div class="row">
        <input type="Back" class="b2"value="Back" name="Back"> 
      </div>
      
		</form>
	</div><!--close container-->
	
	<!--script for cheaking passwor and confirmpassword are same-->
	<script>
        function validate(){

            var a = document.getElementById("password").value;
            var b = document.getElementById("cnfrm_pass").value;
            if (a!=b){
               alert("Passwords do not match");
               return false;
            }
        }
	</script>
	
</body>
</html>

