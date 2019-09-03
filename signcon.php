<?php

 $servername = "localhost";
  $username = "ladiesin_b1";
  $password = "b1@2019";
  $dbname = "ladiesin_batch1";

 $db=new mysqli($servername,$username,$password,$dbname);
 if($db->connect_error)
 {
   die("connection failed:".$db);
 }
/* else
 {
 	echo"connected successfully";
 }*/

if(isset($_POST['Login'])){
		$UserName=$_POST['Username'];
	    $ConfirmPassword=$_POST['ConfirmPassword'];

        $query=mysqli_query($db,"SELECT UserName,ConfirmPassword id FROM trupti_artable WHERE UserName='$UserName'");
        mysqli_query($db,$query);
        header('Location: index.php');
            //header('location:home_page.php');//rediect to index page after insertion
            
} 
		
        if(isset($_POST['cancel'])){
            header('location: index.php'); //redirect to home page 
        }
?>