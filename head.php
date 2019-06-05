<!DOCTYPE html> 
<html>

<head>
  <title>Lewis Sharpe</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
</head>

<body>
  <div id="main" style="width:942px; margin:auto; background:yellowgreen">
    <header>
	  <div id="welcome">
	    <h2>Lewis Sharpe</h2>
	  </div><!--close welcome-->		  	
	</header>

	<nav>
	  <div id="menubar" style="margin-left:10px">
        <ul id="nav">
          <li<?php if($title=="home") echo ' class="current"'; ?>><a href="index.php">Main Info</a></li>
          <li<?php if($title=="teaching") echo ' class="current"'; ?>><a href="teaching.php">Teaching</a></li>
          <li<?php if($title=="misc") echo ' class="current"'; ?>><a href="misc.php">Events</a></li>  
          <li<?php if($title=="rep") echo ' class="current"'; ?>><a href="rep.php">PGR Rep Stuff</a></li>
          <li<?php if($title=="contact") echo ' class="current"'; ?>><a href="contact.php">Contact</a></li>
    </div><!--close menubar-->	
    </nav>	  
<b><center><span id="datetime"></span></p></b>
<script>
var dt = new Date();
document.getElementById("datetime").innerHTML = " 📅 " + (("0"+dt.getDate()).slice(-2)) +"."+ (("0"+(dt.getMonth()+1)).slice(-2)) +"."+ (dt.getFullYear())
</script> </center>
<script>
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML = " 🕒 " +
    h + ":" + m + ":" + s + " GMT";
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}
</script>
<center>
<body onload="startTime()">
<div id="txt"></div>
</center>
<br>
	<div id="site_content">		
	
     <div class="slideshow">
	    <ul class="slideshow">
          <li class="show"><img style="width:100%;margin-top:-100px;" src="images/lewis2.jpg" alt="&quot;Most Inspiring Student Award Presentation: Excellence Awards '15 from Napier Principal, Andrea Nolan&quot;" /></li>
          <li><img style="width:100%;" src="images/lewis1.jpg" alt="&quot;Master of Engineering in Software Engineering Graduates - Class of 2016 (July 2016) &quot;" /></li>
		    <li><img style="width:100%;" src="images/lewis3.png" alt="&quot;New MACS PhD Student Induction (September 2016)&quot;" /></li>
			  <li><img style="width:100%;" src="images/lewis4.jpg" alt="&quot;Best Student Volunteer Award Presentation: Excellence Awards '16 from ENSA President Rojan&quot;" /></li>
		   </ul>
	  </div><!--close slideshow-->	

	  <div class="sidebar_container">    		
		<div class="sidebar">
          <div class="sidebar_item">
            <h2>Contact Me:</h2>
<br>  
<p><b>✉  Mail: </b>
<br>  Room EM 1.50, <br>
School of Mathematical, Actuarial and Computer Sciences (MACS), <br>
Heriot-Watt University,<br>
Riccarton, Edinburgh,<br>
EH14 4AS, UK.</p>
<br>
<p><b>Email:</b><img src="email.png" alt="email" align="middle"></p>
<br>
<p><b>📱 Social Platforms:</b></p>
<a href="https://uk.linkedin.com/pub/lewis-sharpe/96/102/79b">
      
          <img src="https://static.licdn.com/scds/common/u/img/webpromo/btn_viewmy_160x33.png" width="160" height="33" border="0" alt="View Lewis Sharpe's profile on LinkedIn">
        
    </a>
  
<div>
<a class="github-button" href="https://github.com/LewisSharpe" data-style="mega" data-count-href="/LewisSharpe/followers" data-count-api="/users/LewisSharpe#followers" data-count-aria-label="# followers on GitHub" aria-label="Follow @ntkme on GitHub">Follow @LewisSharpe</a>
<script async defer src="https://buttons.github.io/buttons.js"></script>
</div>  
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
       </div><!--close sidebar_container-->	
	
	  <div id="content">
        <div class="content_item">
