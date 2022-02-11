

<?php

if (isset($_POST['submit']))
{
	$name.$_POST['name'];
	$email.$_POST['email'];
	$phone.$_POST['phone'];
	$msg.$_POST['msg'];
	
	$to='luxaryhostels2019@gmail.com';
	$subject='form submission';
	$message="name:".$name."\n"."phone:".$phone."\n"."wrote the following"."\n\n".$msg;
	$headers="from".$email;
	
	if(mail($to,$subject,$message,$header))
	
	{
		echo"<h1>sent successfully! thank you"." ".$name.", we will contact you sortly!</h1>";
		
	}
		else
		{
			echo"something went wrong";
		}
  }
?>
<html>
<head>

 <title>book hostels:bnd residency</title>
		 <link rel="stylesheet"href="css/bnd2.css">
		 		 <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
 <link rel="stylesheet"href="res/resbnd.css">

<meta name="viewport" content="width=device-width,initial-scale=1 user-scalable=no">
</head>
<body>
<div id="top">
<div class="contact">
<font>CALL US: 91+ 8533998500, 91+7300553155</font>
</div>
</div>
<div id="header">
<a href="index.php"> <img style="float:left;margin-top:10px;" src="image/logo.jpg"/></a>
 
 <center><p>world luxery hostels</p></center>



</div>
<div class="togglearea">
<label for="toggle">
<span></span>
<span></span>
<span></span>

</label>
</div>
 <input type="checkbox" id="toggle">

<div class="navbar">
  <a href="index.php">Home</a>
 <div class="dropdown">
    <button class="dropbtn">Services 
    </button>
    <div class="dropdown-content">
      <a href="boys.php">Hostel For Boys</a>
      <a href="#">PG For Boys</a>
      <a href="girl.php">Hostel for Girls</a>
	       <a href="#">PG for Girls</a>
		        <a href="#">Flats</a>
    </div>
  </div>

   <a href="#news">BookNow</a>
<div class="dropdown">
    <button class="dropbtn">Cities 
     
    </button>
    <div class="dropdown-content">
      <a href="#">Aligarh</a>
      <a href="#">Greater Noida</a>
      <a href="#">Noida</a>
	       <a href="#">Delhi</a>
    </div>
  </div>

		     <a href="#">Contact</a>
			

</div>
<div class="img1">
  <img style="height:100%;width:100%;"src="image/bnd1.jpg">
    <div class="centered"><h1>BND RESIDENCY</h1></div>
  </div>


  <div class="post_body">
 <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="image/bnd1.jpg" style="width:100%;height:300px;">
  <div class="text"><h1>Bnd Hostel</h1></div>
</div>

<div class="mySlides fade" >
  <div class="numbertext">2 / 3</div>
  <img src="image/slide2.jpg" style="width:100%;height:300px;">
  <div class="text"><h1>Bnd hostel</h1></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="image/slide3.jpg" style="width:100%;height:300px;">
  <div class="text"><h1>Bnd hostels<h1></div>
</div>

</div> 
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<div class="hosteldetails">
<font> <center><h2>Fee Structure<h2></center></font>
<table>
  <tr>
    <th>Categories </th>
    <th>Non AC</th>
    <th>AC</th>
  </tr>
  <tr>
    <td><div class="icon"><i class="fa fa-bed" aria-hidden="true"></i></div><div class="icon"><i class="fa fa-bed" aria-hidden="true"></i></div><div class="icon"><i class="fa fa-bed" aria-hidden="true"></i></div></td>
    <td>85000$</td>
    <td>95000$</td>
  </tr>
  <tr>
    <td><div class="icon"><i class="fa fa-bed" aria-hidden="true"></i></div><div class="icon"><i class="fa fa-bed" aria-hidden="true"></i></div></td>
    <td>110000$</td>
    <td>100000$</td>
  </tr>
  <tr>
    <td><div class="icon"><i class="fa fa-bed" aria-hidden="true"></i></div></td>
    <td>Not available</td>
    <td>Not available</td>
  </tr>
  </table>
</div>
<div class="ouroffer">
<font> <center><h2>Our Offer<h2></center></font>
<table>
  <tr>
    <th>Categories </th>
    <th>Non AC</th>
    <th>AC</th>
  </tr>
  </table>
  <font> <center><h2>Currently not available</h2></center></font>
</div>
<font color="brown"> <center><h2>Amenities</h2></center></font>
<div class="amenities">
<div class="iconte">
<div class="cont">
<div class="fa fa-wifi" aria-hidden="true"></div>
</div>
<font><center>WiFi</center></font>
</div>
<div class="iconte">
<div class="cont">
<div  class="fa fa-cutlery" aria-hidden="true"></div>
</div>
<font><center>Food</center></font>
</div>
<div class="iconte">
<div class="cont">
<div class="fa fa-power-off" aria-hidden="true"></div>
</div>
<font><center>Power backup</center></font>
</div>
<div class="iconte">
<div class="cont">
<div class="fa fa-bus" aria-hidden="true"></div>
</div>
<font><center>Transport</center></font>
</div>
</div>
<div class="amenities">
<div class="iconte">
<div class="cont">
<div ><img src="image/gym.jpg" style="width:60px;height:60px;"></div>
</div>
<font><center>Gym</center></font>
</div>
<div class="iconte">
<div class="cont">
<div> <img src="image/security.png" style="width:60px;height:60px;"></div>
</div>
<font><center>Security</center></font>
</div>
<div class="iconte">
<div class="cont">
<div><img src="image/lift.png" style="width:60px;height:60px;"></div>
</div>
<font><center>Lift</center></font>
</div>
<div class="iconte">
<div class="cont">
<div><img src="image/gyser.png" style="width:60px;height:60px;"></div>
</div>
<font><center>Gyser</center></font>
</div>
</div>
<font color="brown"> <center><h2>Description</h2></center></font>
<div class="description">
<font color="grey">Bnd hostel is a largest chain running hostel in Greater Noida, started functioning since academic year 2011. Its vision lies in imparting not just housing facilities but, a homely stay, keeping all the safety and security measures intact. This hostel is the best place for working and studying for boys to live and get the essence of a homely atmosphere. The philosophy of this hostel is to take care of students and make their stay fruitful in terms of safety, security and luxury.</font>
</div>
<font color="brown"> <center><h2>Additional details</h2></center></font>
<div class="aditiondetails">
TRANSPORT-FACILITY
</div>
<div class="aditiondetails2">
Included in Fees
</div>
<div class="aditiondetails">
LAUNDARY
</div>
<div class="aditiondetails2">
Included in Fees

</div>
<div class="aditiondetails">
GYM
</div>
<div class="aditiondetails2">
Included in Fees
</div>
<div class="aditiondetails">
CLOTH IRONING
</div>
<div class="aditiondetails2">
Included in Fees
</div>
<div class="aditiondetails">
CANTEEN
</div>
<div class="aditiondetails2">
In the Hostel
</div>
<button id="myBtn">Contact Us</button>
<form method="post" action="bnd.php">


<div id="myModal" class="modal">

  
  <div class="modal-content">
    <span class="close">&times;</span>
      <p>CONTACT TO OWNER</p>
	<p>NAME:</P>
	<input type="text" class="textsize" placeholder=" Your Name:" required><br>
	<P>COLLEGE NAME:</P>
<input type="text"class="textsize" placeholder=" Your College name:" required><br>
<P>CONTACT NO:</P>
<input type="text"class="textsize" placeholder="Your phone no:" required><br>
<button  type="submit" class="sendb1"><b>Send</b></button>
  </div>

</div>
</form>

</div>
<div class="sidebar">

<div class="getbox">

<font size="6" color="white";><center>Schedule for visit</center></font>
<h1 class="textsuccess"><?=$result;?></h1>
<form method="post" action="bnd.php">
<input type="text" name="name" class="textsize" placeholder="enter your Name" required><br>

<input type="email" name="email" class="textsize" placeholder="enter your E-mail" required><br>
<input type="text"  name="mobile" class="textsize" placeholder="enter Mobile Number" required><br>
<input type="text" name="date"class="textsize" placeholder="enter Date of Visit / Today's Time"required><br>
<input type="text" name="college" class="textsize" placeholder="enter College Name" required>

<br>
<button  type="submit" name="submit" value="send" class="sendb"><b>Send</b></button>
<button id="myBtn1">Contact Us</button>
</form>

<form method="post" action="bnd.php">
<div id="myModal1" class="modal1">

  
  <div class="modal-content1">
    <span class="close1">&times;</span>
    <p>CONTACT TO OWNER</p>
	<p>NAME:</P>
	<input type="text"class="textsize" name="name"placeholder=" Your Name:" required><br>
	<P>COLLEGE NAME:</P>
<input type="text"class="textsize" name="clg"placeholder=" Your College name:" required><br>
<P>CONTACT NO:</P>
<input type="text"class="textsize" name="number" placeholder="Your phone no:" required><br>
<button  type="submit" value="send"class="sendb1"><b>Send</b></button>


  </div>

</div>
</form>
</div>
<div class="map">
<h1><center>BND RESIDENCY MAP</center></h1>
</div>
<p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3507.325063744876!2d77.49347061455587!3d28.46975559818133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cea74f6cb7407%3A0x73cd460c414f0c05!2sBND+Residency!5e0!3m2!1sen!2sin!4v1551258887150" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe></P>

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
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

var modal1 = document.getElementById('myModal1');

// Get the button that opens the modal
var btn1 = document.getElementById("myBtn1");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close1")[0];

// When the user clicks on the button, open the modal 
btn1.onclick = function() {
  modal1.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal1.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal1) {
    modal1.style.display = "none";
  }
}




</script>
<div class="foot">
<div class="aboutus">
<div class="aboutus2">

<font size="6">About Us</font>
</div>
<br>
<font>Looking for "Best hostels in Greater Noida"? You are in the right place. with daily updating reviews and truth pics of all hostel.</font>
<br>
<br>
<i class="fa fa-phone" aria-hidden="true"></i>
<font>91+ 8533998500 , 91+ 7300553155</font>
</div>

<div class="aboutus">
<div class="aboutus2">
<font size="6">Quick links</font>
</div>

</div>
<div class="aboutus">
<div class="aboutus2">

<font size="6">Stay in touch</font>
</div>
<br>
<font>We are Social connect with us to get latest news and details of all hostels at PAN-INDIA Basis.</font>

<ul>
<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
</ul>


</div>
</div>

</body>
</html>
