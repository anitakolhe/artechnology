<?php
	//start session
	 session_start();
    $servername = "localhost";
    $username = "ladiesin_b1";
    $password = "b1@2019";
    $dbname = "ladiesin_batch1";

 $conn=new mysqli($servername,$username,$password,$dbname);
 if($db->connect_error)
 {
   die("connection failed:".$db);
 }
 /*else
 {
 	echo"connected successfully";
 }
*/

if(isset($_POST['comment']))
		{
             $title= $_POST['title'];
              $comment=$_POST['comment'];
              $email=$_POST['email'];
              
				
               $image=$_FILES['image']['tmp_name'];

                  if(!empty($image)){
                 	$image=fread(fopen($image,"r"),filesize($image));
                    $picture=base64_encode($image);
                     }

				 $query="INSERT INTO trupti_publish (title,comment,email,image)VALUES('$title','$comment','$email','$picture')";
				   
				   mysqli_query($db,$query);

				  header('location:index.php'); 
             
		         header('location:show.php');
			
			/*$results = mysqli_query($db,$query);
			//$_SESSION['msg']="Post Done sucessfully";
			header('location:index.php');

		
		
		//}*/
}

?>