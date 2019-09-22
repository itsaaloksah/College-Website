<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
header("location: form.php"); // Redirecting To Login Page
}
?>

<!DOCTYPE html>
<html>
<head>
<title>East West College of Engineering</title>
<link rel="stylesheet" type="text/css" href="indexstyle.css">
</head>
<body>
<meta name="viewport" content="width=device-width, initial-scale=1">
<div class="div1">
<img src="photos/logo.png">
</div>

<div style="padding:20px;margin-top:30px;background-color:white;">

<div id="profile">
  <b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
  <b id="logout"><a href="logout.php">Log Out</a></b>
 </div>
 </div>

 <div style="padding:20px;margin-top:30px;background-color:white;">
 <div class="navbar">
  <a href="index.php"><b>HOME</b></a>
  
  <div class="dropdown">
    <button class="dropbtn"><b>SERVICES AND FACILITIES</b></button>
    <div class="dropdown-content">
      <a href="library.html"><b>LIBRARY</b></a>
	  <a href="transportation.html"><b>TRANSPORTATION</b></a>
	  <a href="cafeteria.html"><b>CAFETERIA</b></a>
	  <a href="hostel.html"><b>HOSTEL</b></a>
	  </div>
	  </div>
  
  <a href="gallery.html" target="_blank"><b>GALLERY</b></a>
  <div class="dropdown">
    <button class="dropbtn"><b>FACULTY</b></button>
    <div class="dropdown-content">
      <a href="facultycs.html"><b>COMPUTER SCIENCE & ENGINEERING</b></a>
      <a href="facultyae.html"><b>AERONAUTICAL ENGINEERING</b></a>
      <a href="facultycv.html"><b>CIVIL ENGINEERING</b></a>
	  <a href="facultyme.html"><b>MECHANICAL ENGINEERING</b></a>
	  <a href="facultyec.html"><b>ELECTRONICS & COMMUNICATION ENGINEERING</b></a>
	  <a href="facultybs.html"><b>BASIC SCIENCE</b></a>
    </div>
  </div> 
   <div class="dropdown">
    <button class="dropbtn"><b>ACADEMICS</b></button>
    <div class="dropdown-content">
      <a href="principal.html"><b>PRINCIPAL'S MESSAGE</b></a>
	  <a href="assesment.html"><b>ASSESMENTS</b></a>
	  </div>
	  </div>
	  
	  <div class="dropdown">
    <button class="dropbtn"><b>RESULT</b></button>
    <div class="dropdown-content">
      <a href="resultsample.html" target="_blank"><b>VTU JUN/JULY 2018 RESULT</b></a>
    </div>
  </div> 

<div class="dropdown">
    <button class="dropbtn"><b>STUDY MATERIALS</b></button>
    <div class="dropdown-content">
    	<a href="even.html"><b>COMPUTER SCIENCE & ENGINEERING</b></a>
    	<a href="#"><b>AERONAUTICAL ENGINEERING</b></a>
      	<a href="#"><b>CIVIL ENGINEERING</b></a>
	  	<a href="#"><b>MECHANICAL ENGINEERING</b></a>
	  	<a href="#"><b>ELECTRONICS & COMMUNICATION ENGINEERING</b></a>
	  	<a href="#"><b>BASIC SCIENCE</b></a>
    </div>
  </div> 

<a href="contact.html" target="_blank"><b>CONTACT US</b></a>
<a href="about.html" target="_blank"><b>ABOUT</b></a>
</div>
</div>

<marquee behavior="scroll" scrolldelay=100 direction="left" onmouseover="this.stop();" onmouseout="this.start();">PG Inaugural &amp; Orientation Program.  
Admission Open For the Year 2018-19 - B.E (COMPUTER SCIENCE &amp; ENGG, INFORMATION SCIENCE &amp; ENGG, CIVIL ENGG,MECHANICAL ENGG,ELECTRICAL &amp; 
ELECTRONICS ENGG, ELECTRONICS &amp; COMMUNICATION ENGG) and B.Arch.
</marquee>

<div style="padding:20px;margin-top:30px;background-color:white;">

<div style="line-height: 22px;"><img alt="" class="welcome-img-home" src="photos/college1.jpg" style="float:left; margin-bottom:10px; margin-right:15px; position:relative; top:-6px; width:511px"></div>

		<p><b><font color="black" size="6">WELCOME TO</b></font> 

		<font color="red" size="6"><b>EWCE</b></font></p>

<p>EWCE heartily welcomes all our prospective students &amp; their families to be the part of a vibrant learning community which is well-known for its high quality education &amp; 
	its excellent student-support activities in Bangalore.<br>
	<p>While talking about EWCE, it is one of the leading educational institutions in Bangalore for B.Tech/B.Arch education. Students from Karnataka, 
	throughout country &amp; from across the globe come to EWCE to apply for their admission in B.Tech/B.Arch level. EWCE has been the choice of toppers &amp; 
	bright students from the beginning. EWCE has quite more impressive VTU board result during recent years. Similarly, placement of our students in the 
	national &amp; international colleges &amp; Universities is outstanding. The college has received 6 times higher number of student&#39;s 
	admission application for Engineering than the seats available &amp; good number of students in Diploma as well. It is our pleasure to invite you to visit the 
	college &amp; have interaction with our teachers, counselors, students for getting to know more about the college. We will be happy to see you at the college.</p></section>
<br>
<hr><br>

<div style="line-height: 22px;"><img alt="" class="welcome-img-home" src="photos/college2.jpg" style="float:right; margin-bottom:10px; margin-right:15px; position:relative; top:-6px; width:411px"></div>
		<p>The College strives to develop technical and professional skills as well as individual values that help to create a foundation for success,
		civic responsibility, and life-long learning by.<br>
		The main focus of the Institution is to empower the students with sound knowledge, wisdom, experience and training both at the academic level of 
		Engineering and in the highly competitive global industrial market. We are fortunate to have a talented, highly committed teaching and support staff, 
		to ensure the learning environment of our students is at the best. To make the engineering education agile, in order to respond instantly to the changes in science and 
		technology, Industry interaction and Industrial visits are taken up regularly. Additionally guest lecturers from various industrial backgrounds and from premier institutes 
		are invited to the institute. During teaching-learning process group discussions, problem posing, problem solving, and experimental learning are involved in the institute. 
		Apart from teaching, the teachers are also the mentors, advisors, guides for the ideas and challenges of the students. Our motto is, <b>"to create better human beings"</b> .
		We can do that, only when we implant in our students the values which are necessary for the life. We aim to provide an overall development that nurtures them towards 
		becoming strong and focused human beings. Soft skills and educational skills is what the institution seeks to provide every student at the campus.</p>
<br><br><br><br><br>
<hr>

<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <img src="photos/slide3.jpeg" style="width:100%">
 
  </div>

  <div class="mySlides fade">
    <img src="photos/slide1.jpeg" style="width:100%">
  </div>

  <div class="mySlides fade">
    <img src="photos/slide4.jpeg" style="width:100%">
  </div>
  
   <div class="mySlides fade">
    <img src="photos/slide5.jpeg" style="width:100%">
  </div>
  
   <div class="mySlides fade">
    <img src="photos/slide2.jpeg" style="width:100%">
  </div>
  
  
  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span>
</div>
	<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
<br>
<br>
<br>
<hr>

<h4 class="footer-title">Google Map</h4>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3886.051853315902!2d77.5868614!3d13.0959003!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae185c777a95e9%3A0xbcb27ce1f9020521!2sEast+West+College+of+Engineering!5e0!3m2!1sen!2sus!4v1554383390787!5m2!1sen!2sus" width="100%px" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
<br><br>
<div class="contact-us">
<div class="location"><strong style="color: #1c3a9a;">Location</strong></div>
<p><a style="color: #333;">East West College of Engineering,<br /></a><span>No, 13, 13th A Main Road,</span> <br /> <span>Sector A, Yelahanka New Town</span>&nbsp; <br /> <span class="mceNonEditable pincode" data-src="city">Bengaluru</span> <span class="mceNonEditable pincode" data-src="postcode"> - 560064</span> <br /> <span class="mceNonEditable" data-src="state">Karnataka</span> <br /> <span class="mceNonEditable" data-src="country">India</span></p>
<p>Mob: +91 9844671611 | +91 7676406107 | +91-1800-123-2656(Toll Free)</p>
<p>Email:<a style="color: #000;" href="mailto:principal.ewce@gmail.com"> ewce2015@gmail.com</a></p><br><hr><br>

						<h2>OUR PARTNERS</h2>
						<div class="row">
						
						<div class="column">
						<img src="photos/kea.jpg" alt="KARNATAKA EXAMINATIONS AUTHORITY" width="100px" height="100px">
						</div>
						
						<div class="column">
						<img src="photos/jas.jpg" alt="JAS-ANZ Affiliation" width="100px" height="100px">
						</div>
						
						<div class="column">
						<img src="photos/ics.jpg" alt="ICS Affiliation" width="100px" height="100px">
						</div>
						
						<div class="column">
						<img src="photos/gok.png" alt="Recognized by Government of Karnataka" width="100px" height="100px">
						</div>
						
						<div class="column">
						<img src="photos/naaac.png" alt="National Assessment and Accreditation Council (NAAC)" width="100px" height="100px">
						</div>
				
						<div class="column">
						<img src="photos/vtu.png" alt="Visvesvaraya Technological University" width="100px" height="100px">
						</div>
						
						<div class="column">
						<img src="photos/aicte.png" alt="All India Council for Technical Education [AICTE]" width="100px" height="100px">
						</div>
						</div><br><hr><br>
						
				<div class="fbuttom">
				<h3>&copy; 2015-2019 East West College of Engineering, All Rights Reserved</h3>
			</div>
		</div>
	</body>
</html>

