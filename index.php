<?php
	session_start();

	if(isset($_SESSION['LOGGEDIN']))
	{
		session_destroy();
		session_unset();
		echo "
				<script>
					document.getElementById('login').reset();
				</script>
		";
	}
	if(isset($_SESSION['INVALID']))
	{
		session_destroy();
		session_unset();
		echo "
				<script>
					alert('Invalid Id');
				</script>
		";
		//echo
	}

  ?>

<!DOCTYPE html>
<html>
<head>
	<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/index.js"></script>
	<link rel="stylesheet" type="text/css" href="css/newindex.css">
	<link rel="stylesheet" type="text/css" href="css/registration.css">
	<link rel="stylesheet" type="text/css" href="css/events.css">
	<script src="js/time.js"></script>
	<script src="js/register.js"></script> 
	<script src="js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
 $(document).bind("contextmenu",function(e){
   return false;
 });
});
	</script>	
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <meta charset="utf-8">
  <title>Technophile UGI</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="css/swiper.min.css">
  <style>
    body {
      background: #fff;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color:#e4be03;
      margin: 0;
      padding: 0;
    }
    #sec6
    {
      width:100%;
      height: 100vh;
      float: left;
      background-color: #046546;
    }
    .swiper-container {
      width: 60%;
      padding-top: 50px;
      padding-bottom: 50px;
      align-content: center;
    }
    .swiper-slide {
      background-position: center;
      background-size: cover;
      width: 270px;
      height: 380px;
      position: relative;
      background:#000;
      overflow: hidden;
      border-radius: 10px;
      transition: 1s;

    }

.img-box
{
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  transition: 0.5s;
}

.swiper-slide:hover .img-box
{
  opacity:.5;
}

.swiper-slide .img-box img
{
  width: 100%;
}
.swiper-slide:hover .content
{
  bottom: 0;
}
.swiper-slide .content
{
  position: absolute;
  width: 100%;
  height: 60%;
  bottom: -100%;
  padding: 20px;
  box-sizing: border-box;
  text-align: center;
  transition: 0.5s;
}


.swiper-slide .content h2
{
  margin: 0 0 10px;
  padding: 0;
  color: #fff;
  font-size: 20px;
}
.swiper-slide .content span
{
  color: #ffeb3b;
  font-size: 16px;
  margin: 0px;
  padding: 0px;
}
.swiper-slide .content p
{
  margin: 0px;
  padding: 0px;
  color: #fff;
  font-size: 16px;
}
.swiper-slide .content ul
{
  display: flex;
  margin: 20px 0 0;
  padding: 0px;
  align-content: center;
  justify-content: center;
}
.swiper-slide .content ul li
{
  list-style: none;
}
.swiper-slide .content ul li a
{
  color: #fff;
  padding: 0 10px;
  font-size: 18px;
  transition: 0.5s;
}
.time
{
	width:250px;
	height: 50px;
	float: left;
	margin-top: 350px;
	margin-left: 150px;
}
#demo
{
	font-size: 30px;
	margin: 0px;
	padding:0px;
	padding-left: 100px;
	padding-top: 20px;
}
#title
{
	font-size: 40px;
	margin: 0px;
	padding:0px;
	padding-top: 200px;
	padding-left: 100px;
}

 </style>
}
</head>
<body onload="t()">
	<nav>
		<div class="logo">
			<img src="images/techlogo.png">
		</div>
		<ul>
			<li><a href="#sec1">Home</a></li>
			<li><a href="#sec3">Events</a></li>
			<li><a href="#sec5">Registration</a></li>
			<li><a href="#sec6">Contact Us</a></li>
		</ul>
			
	</nav>
	<div id="sec1">
		<p id="title" style="color: blue;">TECHNOPHILE IS BACK !!</p>
		<p id="title" style="color: red;font-size: 20px;padding:0px;padding-left: 100px;">A Society Founded By CS & IT Technocrats</p>
		<p id="demo"></p>
	</div>
	<div id="sec3">	
		<span style="position: relative;left:-44%;top:26%;font-size: 35px;color: #ff4e4e;font-weight: bold;font-family:indexfonts;">EVENTS</span>
		<div class="countainer">
		<div class="shape">
			<p>
				<span style="font-weight: bold;">THE_BHRAM</span><br>
				An Online Coding competition for all those who are hard core Coders.
				There will be a set of problems and time limit.
			</p>
		</div>
	</div>
	<div class="countainer" style="top:72%;left:14%;">
		<div class="shape">
			<p>
				<span style="font-weight: bold;">CODE SORTIE</span><br>
				An Online Coding competition for all those who are hard core Coders.
				There will be a set of problems and time limit.
			</p>
		</div>
	</div>
	<div class="countainer" style="top:72%;left:20%;">
		<div class="shape">
			<p>
				<span style="font-weight: bold;">YIELDOLOGY</span><br>
				An Online Coding competition for all those who are hard core Coders.
				There will be a set of problems and time limit.
			</p>
		</div>
	</div>
	<div class="countainer" style="left:16%;">
		<div class="shape">
			<p>
				<span style="font-weight: bold;">TECHNOLOGIA QUIZ</span><br>
				An Online Coding competition for all those who are hard core Coders.
				There will be a set of problems and time limit.
			</p>
		</div>
	</div>
	</div>
	<div id="sec5">
		<div id="login_chkd">
			<p style="color: #e4be03;margin: 0px;text-align: center;padding-top: 5px;text-decoration: underline;">NOTICE BOARD</p>
			<ul>
				<li style="color: #e4be03;font-size: 18px;padding-top: 10px;">After Registration Print Your Reciept.</li>
				<li style="color: #e4be03;font-size: 18px;padding-top: 10px;">The Registration Fee are as follows:- </li>
				<li style="color: #e4be03;font-size: 18px;padding-top: 10px;"> Rs 30 for 1 Event</li>
				<li style="color: #e4be03;font-size: 18px;padding-top: 10px;">Rs 50 for 2 Event</li>
				<li style="color: #e4be03;font-size: 18px;padding-top: 10px;">Rs 80 for 3 Event</li>
				<li style="color: #e4be03;font-size: 18px;padding-top: 10px;">Rs 100 for 4 Event</li>
			</ul>
			
			<table>
				<tr>
					<td class="tdt">Ashutosh Sharma</td>
					<td class="tdt">President</td>
					<td class="tdt">89320647575</td>
				</tr>
				<tr>
					<td class="tdt">Ashraya Srivastava</td>
					<td class="tdt">Vice President</td>
					<td class="tdt">9580884722</td>
				</tr>
				<tr>
					<td class="tdt">Pranjal Gupta</td>
					<td class="tdt">Manager</td>
					<td class="tdt">9169330961</td>
				</tr>
				<tr>
					<td class="tdt">Kushagra Srivastava</td>
					<td class="tdt">Technical Head</td>
					<td class="tdt">9455319945</td>
				</tr>
			</table>
			<p><a href="print_r.php" style="color: #e4be03;padding-top: 5px;"> Print Recipt</a></p>
		</div>
		<div id="login">
		<form action="register.php" method="post" onsubmit="return checknum()">
			<p class="dtext">Name</p>
			<input type="text" placeholder="Enter Your Name" name="name" class="dbox" required="true" maxlength="20" />

			<p class="dtext" style="">Email Id</p>
			<input type="email" placeholder="Enter Your Email" name="email" class="dbox" required="true" maxlength="30" />


			<p class="dtext" style="">Phone Number</p>
			<input type="number" placeholder="Enter Your Phone Number" name="phnumber" class="dbox" required="true" maxlength="10" id="pnum" />

			<p class="dtext" style="">WhatsApp Number</p>
			<input type="number" placeholder="Enter Your WhatsApp Number" name="whnumber" class="dbox" required="true" maxlength="10" id="wnum" />

			<table>
				<tr>
					<td>
						<p class="dtext" style="">College</p>
			<select name="college" required="true" id="college" class="dbox" style="width: 110px;margin-left: 20px;">
				<option value="" selected>SELECT</option>
				<option value="UCER">UCER</option>
				<option value="UIT">UIT</option>
				<option value="UCEM">UCEM</option>
				<option value="UIM">UIM</option>
				<option value="UIP">UIP</option>
				<option value="UIM_FUGS">UIM ( FUGS )</option>
			</select>
					</td>
					<td>
						<p class="dtext" style="">Branch</p>
			<select name="branch" required="true" id="college" class="dbox" style="width: 110px;margin-left: 10px;">
				<option value="">SELECT</option>
				<option value="CSE">CSE</option>
				<option value="IT">IT</option>
				<option value="EE">EE</option>
				<option value="EC">EC</option>
				<option value="EN">EN</option>
				<option value="CE">CE</option>
				<option value="ME">ME</option>
				<option value="BCA">BCA</option>
				<option value="MCA">MCA</option>
				<option value="BBA">BBA</option>
				<option value="MBA">MBA</option>
				<option value="PHAR">PHAMACY</option>
			</select>
					</td>
					<td>
						<p class="dtext" style="">Year</p>
			<select name="year" required="true" id="college" class="dbox" style="width: 110px;margin-left: 10px;">
				<option value="">SELECT</option>
				<option value="1st">1st Year</option>
				<option value="2nd">2nd Year</option>
				<option value="3rd">3rd Year</option>
				<option value="4th">4th Year</option>
			</select>
					</td>
				</tr>
			</table>

				<p class="dtext">Select Events</p>

			<table >
				<tr>
					<td>
						<span class="etext">The Bhram</span>
					</td>
					<td>
						<input type ="checkbox" id="e1" name="event1" checked="true" value="YES">
					</td>
					<td>
						<span class="etext">Code Sortie</span>
					</td>
					<td>
						<input type ="checkbox" id="e2" name="event2" checked="true" value="YES">
					</td>
				</tr>
				<tr>
					<td>
						<span class="etext">Yeildology</span>
					</td>
					<td>
						<input type ="checkbox" id="e3" name="event3" checked="true" value="YES">
					</td>
					<td>
						<span class="etext">Technology Quiz</span>
					</td>
					<td>
						<input type ="checkbox" id="e4" name="event4" checked="true" value="YES">
					</td>
				</tr>
			</table>
				
			<input type="submit" id="sbtn">
			</form>
		</div>
	</div>
	<div id="sec6">
	<p style="color: yellow;font-size: 30px;text-align: center;font-family: sans-serif;font-weight: bold;margin-top: 120px;">Contact Us</p>
    <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="img-box">
          <img src="images/ashutosh.jpg ">
        </div>
        <div class="content">
          <h2>Ashutosh Sharma
          <br>
          <span>President</span>
          </h2>
          <p>Technophile Society</p>
          <ul>
          <li>
            <a href="https://www.facebook.com/asshutoshsharma" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          </li>
          <li>
            <a href="asshutoshsharma@gmail.com" target="_blank"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
          </li>
          </ul>
        </div>
      </div>
      
      <div class="swiper-slide">
        <div class="img-box">
					<img src="images/aditi.jpg ">
				</div>
				<div class="content">
					<h2>Aditi Agrawal
					<br>
					<span>Vice - President</span>
					</h2>
					<p>Technophile Society</p>
					<ul>
					<li>
						<a href="https://www.facebook.com/aditi.agrawal.5648" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					</li>
					<li>
						<a href="aditiagrawal265@gmail.com" target="_blank"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
					</li>
					</ul>
				</div>
    </div>


    <div class="swiper-slide">
        <div class="img-box">
					<img src="images/ashray.jpg ">
				</div>
				<div class="content">
					<h2>Ashraya Srivastava
					<br>
					<span>Vice - President</span>
					</h2>
					<p>Technophile Society</p>
					<ul>
					<li>
						<a href="https://www.facebook.com/ashraya.srivastava" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					</li>
					<li>
						<a href="ashraysri97@gmail.com" target="_blank"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
					</li>
					</ul>
				</div>
    </div>

    <div class="swiper-slide">
        <div class="img-box">
					<img src="images/dipti.jpg ">
				</div>
				<div class="content">
					<h2>Dipti Gupta
					<br>
					<span>Treauser</span>
					</h2>
					<p>Technophile Society</p>
					<ul>
					<li>
						<a href="https://www.facebook.com/dipti.gupta.33886305" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					</li>
					<li>
						<a href="diptigupta522@gmail.com" target="_blank"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
					</li>
					</ul>
				</div>
    </div>

    <div class="swiper-slide">
        <div class="img-box">
					<img src="images/pranjal.jpg ">
				</div>
				<div class="content">
					<h2>Pranjal Gupta
					<br>
					<span>Manager</span>
					</h2>
					<p>Technophile Society</p>
					<ul>
					<li>
						<a href="https://www.facebook.com/pranjal.gupta.5454" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					</li>
					<li>
						<a href="pranjal3006@gmail.com" target="_blank"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
					</li>
					</ul>
				</div>
    </div>


    <div class="swiper-slide">
        <div class="img-box">
					<img src="images/kushagra.jpg ">
				</div>
				<div class="content">
					<h2>Kushagra Srivastava
					<br>
					<span>Technical Head</span>
					</h2>
					<p>Technophile Society</p>
					<ul>
					<li>
						<a href="https://www.facebook.com/kushagra.srivastava.988" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					</li>
					<li>
						<a href="kushagrasrv@gmail.com" target="_blank"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
					</li>
					</ul>
				</div>
    </div>

    <div class="swiper-slide">
        <div class="img-box">
					<img src="images/satyam.jpg ">
				</div>
				<div class="content">
					<h2>Satyam Verma
					<br>
					<span>Technical Head</span>
					</h2>
					<p>Technophile Society</p>
					<ul>
					<li>
						<a href="https://www.facebook.com/SV2222" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					</li>
					<li>
						<a href="satyamverma285@gmail.com" target="_blank"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
					</li>
					</ul>
				</div>
    </div>

    

    <div class="swiper-slide">
        <div class="img-box">
					<img src="images/rachita.jpg ">
				</div>
				<div class="content">
					<h2>Rachita Keshri
					<br>
					<span>Member</span>
					</h2>
					<p>Technophile Society</p>
					<ul>
					<li>
						<a href="https://www.facebook.com/rachita.keshri.1" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					</li>
					<li>
						<a href="rachii.keshri@gmail.com" target="_blank"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
					</li>
					</ul>
				</div>
    </div>

     <div class="swiper-slide">
        <div class="img-box">
					<img src="images/ak.jpg ">
				</div>
				<div class="content">
					<h2>Abhishek Keserwani
					<br>
					<span>Member</span>
					</h2>
					<p>Technophile Society</p>
					<ul>
					<li>
						<a href="https://www.facebook.com/profile.php?id=100008635050030" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					</li>
					<li>
						<a href="akeserwani588.com" target="_blank"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
					</li>
					</ul>
				</div>
    </div>

    <div class="swiper-slide">
        <div class="img-box">
					<img src="images/vartika.jpg ">
				</div>
				<div class="content">
					<h2>Vartika Agrawal
					<br>
					<span>Member</span>
					</h2>
					<p>Technophile Society</p>
					<ul>
					<li>
						<a href="https://www.facebook.com/vartika.agrawal.374" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					</li>
					<li>
						<a href="varti1998@gmail.com" target="_blank"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
					</li>
					</ul>
				</div>
    </div>

       <div class="swiper-slide">
        <div class="img-box">
					<img src="images/akd.jpg ">
				</div>
				<div class="content">
					<h2>Akash Dubey
					<br>
					<span>Member</span>
					</h2>
					<p>Technophile Society</p>
					<ul>
					<li>
						<a href="https://www.facebook.com/akashvdubey" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					</li>
					<li>
						<a href="siddhant1697@gmail.com" target="_blank"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
					</li>
					</ul>
				</div>
		</div>

    <div class="swiper-slide">
        <div class="img-box">
					<img src="images/sd.jpg ">
				</div>
				<div class="content">
					<h2>Siddhant Bajola
					<br>
					<span>Member</span>
					</h2>
					<p>Technophile Society</p>
					<ul>
					<li>
						<a href="https://www.facebook.com/siddhant.bajola" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					</li>
					<li>
						<a href="siddhant1697@gmail.com" target="_blank"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
					</li>
					</ul>
				</div>
    </div>






    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>

  <!-- Swiper JS -->
  <script src="js/swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 80,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows : true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
  </script>

</body>
</html>
