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

?>
<!DOCTYPE html>
<html>
<head>
	<title>ARtechnology</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body>
<div class="container">
	 <div class="topnav">
		<div class="col-sm-1">
         	<img class="nav__logo" src="log.jpeg">
        </div>
	    <div class="col-sm-8">
				<h1 class="title">It's Way More Than Just Lifting</h1>
		</div>	
			<div class="col-sm-3">
				<img src="icons8-new-post-24.png">truptikolhe@gmail.com
				<img src="icons8-phone-24.png" class="phon">PhoneNo.7875666567
                 
			</div>
	 </div>	
	 
	<div class="nav_links">
	       <div class="col-sm-12">	
				<a href="#">Home</a>
				<a href="signin.php">SignIn</a>
				<a href="registration.php">SignUp</a>
				<a href="posta.php">Publish</a>
		    </div>	
    
   <div class="slideshow-container">

		<div class="mySlides fade">
			<div class="numbertext"></div>
				<img src="index1.jpeg" style="width:100%">
			<div class="text">Caption Text</div>
		</div>

    <div class="mySlides fade">
			  <div class="numbertext"></div>
			  <img src="imm.jpg" style="width:100%">
			  <div class="text">Caption Two</div>
    </div>

       <div class="mySlides fade">
			  <div class="numbertext"></div>
			  <img src="pex.jpeg" style="width:100%">
			  <div class="text">Caption Three</div>
       </div>

 </div>
      <br>

	  <div style="text-align:center">
			  <span class="dot"></span> 
			  <span class="dot"></span> 
			  <span class="dot"></span> 
	  </div>
</div>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 4000); // Change image every 2 seconds
}
</script>

<?php
$sql=mysqli_query($db,"SELECT * FROM trupti_publish");
$num=mysqli_num_rows($sql);
if($num==0){
    echo "no post yet";
}else
{
    while($rows=$sql->fetch_assoc()){
        $id=$rows['id'];
        $title=$rows['title'];
        $comment=$rows['comment'];
        $image=$rows['image'];
        $email=$rows['email'];
  
    


     echo "title:$title";
     echo "<br>";
     echo "comment:$comment";
     echo "<br>";
     echo "Image:$image";
     echo "<br>";
     echo "<img src=data:image/jpg;base64,$image width=20%>";
     echo "<br>";
     echo "email:$email";
     echo "<br>";
    }
}
?>
</body>
</html>
