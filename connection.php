<?php

  $servername = "localhost";
  $username = "ladiesin_b1";
  $password = "b1@2019";
  $dbname = "ladiesin_batch1";
 session_start();

 $db=new mysqli($servername,$username,$password,$dbname);
 if($db->connect_error)
 {
   die("connection failed:".$db);
 }
 /*else
 {
 	echo"connected successfully";
 }*/

 if(isset($_POST['submit'])){
 	   $FirstName=$_POST['first_name'];
 	   $LastName=$_POST['last_name'];
 	   $UserName=$_POST['user_name'];
 	   $Email=$_POST['email_id'];
 	   $ConfirmPassword=$_POST['cnfrm_pass'];

 	    $query="INSERT INTO trupti_artable(FirstName,UserName,LastName,Email,ConfirmPassword) VALUES('$FirstName','$LastName','$UserName','$Email','$ConfirmPassword')";
        mysqli_query($db,$query);
        //$_SESSION['msg']="Done sucessfully";
        header('location:signin.php');//rediect to index page after insertion

    }
 	  
 	   if(isset($_POST['submit'])&&($_POST['Password']!=$_POST['ConfirmPassword'])){
        header('location:signup.php');
    }
?> 