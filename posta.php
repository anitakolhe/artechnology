<?php
    include_once'post_details.php';
 ?>

<!DOCTYPE html>
<html>
<head>
		    <title>POST</title>
		    <!--<meta name="viewport" content="width=device-width, initial-scale=1">
		    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
		    <link href=".css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div class="signup__box">
		<div class="header">
        	 <div class="col-sm-12">	
                <h2>Manage Publication | </h2>	
				<a href="logout.php">LOGOUT</a>
         </div>
                <form  method="post" action="post_details.php" enctype="multipart/form-data">

         </div>

         <div class="input-group">
		             <p>Title</p>
		             <input type="text" name="title" class="bt" placeholder="Enter title" >
         </div>  
         <div class="input-group">          
                    <p>Comment</p>

                    <input type="text" name="comment"  placeholder="Enter-Comment">
         </div>
            
            <!-- <div class="input-group">
                <p>Imagelink</p>
                <input type="link" name="imagelink"  placeholder="imagelink" ><br><br>
            </div> -->

         <div class="input-group">
                    <input type="file" name="image" id="fileSelect" ><br><br>
         </div>
            
          <div class="input-group">          
                    <p>Email</p>

                    <input type="text" name="email"  placeholder="youremail">
          </div>

         <div class="input-group">
        
                <!--<input  type="submit" name="cancel" value="Cancel">-->
                <input type="submit" class="bt4" name="submit">
         </div>
         <div class="row">
        <input type="Edit" class="bt" value="Edit" name="Edit"> 
        <input type="Delete" class="bt" value="Delete" name="Delete"> 
      </div>
     </form>
</body>
</html>