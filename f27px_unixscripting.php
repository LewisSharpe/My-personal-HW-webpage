<?php
	$title = "teaching";
	include 'head.php';
?>
 <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="stylesheet" type="text/css" href="css/box.css" />
        <h1>Unix Shell Scripting - Interactive Lab Session</h1>
<h3>F27PX - Praxis (2018/2019)</h3>
<h3>Week 5, October 2018 </h3>
<h3>Instructor: Lewis Sharpe</h3>
<br>
<h3>Total exercise time: 60-90 minutes</h3>
<br>
<blockquote>
    <div class="aims">
<h2><u>Segment 0 - Session Aims, Objectives, and Logisitics:</u></h3>
<h3>What you should know already?</h3>
<p>You should have learnt basic linux usage already in previous session with Dr Hans-Wolfgang Loidl <a href="http://www.macs.hw.ac.uk/~hwloidl/Courses/LinuxIntro/x224.html"> here</a>. </p> 
<br>
<h3>Session Aim:</h3>
<p>To allow students to understand the concept, purpose and importance of basic shell scripting using bash for a Unix based operating system. </p>
<br>
<h3>Session learning outcomes:</h3>
<p>1. What is a shell variable and how to define them,</p>
<p>2. How to use bash control structures effectively (if, for, conditionals, etc.), and how to define a function in your script</p>
<p>3. How to use text processing utility commands effectively (sed, awk, grep, etc),</p>
<p>4. How to create a simple game in a shell script.</p>
<p>5. How to output coloured output from a shell script</p>
<p>6. How to create a simple text based animation from a shell script</p>
<br>
<h3>Find a Partner:</h3>
<p>Ideally, do the exercises as paired programming exercises. Work in pairs will allow you to communicate understanding of fresh new knowledge. </p>
</div>
<br>
    <div class="intro">
<h2><u>Segment 1 - Rudimentary tasks:</u></h3>
<h3>Task 1 (laying the foundations: basic and intermediate shell scripting exercises):</h3>
<h4>Duration: 15 minutes (per levelled material) </h4>
<center>
<img src="bricks.png" alt="Paris" align="middle"> 
</center>
<br>
<br>
Select starting exercise based on your experience level.
<br>
<u><h4>No shell scripting experience:</u></h4>
<p>Click <a href="http://www.macs.hw.ac.uk/~hwloidl/Courses/LinuxIntro/x788.html"> here</a> for basic introductory shell scripting exercises for beginners (Credit: Hans-Wolfgang Loidl).</p>
<p> This will allow you to implement examples in bash of the following, hello world example, shell variable example, arithmetic expressions, regular expressions, overview of bash control structure and implementing shell functions.</p>
<h4><u>Some past shell scripting experience:</u></h4>
<p>Click <a href="http://www.macs.hw.ac.uk/~hwloidl/Courses/LinuxIntro/x957.html"> here</a> for intermediate shell scripting exercises for users with some experience of scripting (Credit: Hans-Wolfgang Loidl). </p>
<p> This section will allow you to create shell script arguments, using  text processing utility commands and continous development of line-counting shell script.</p>
    </div>
<br>
    <div class="int">
<h2><u>Segment 2 - Intermediate tasks:</u></h3>
<h3>Task 2 (let there be colour!: colourful shell script):</h3>
<h4>Duration: 15-20 minutes</h4>
<center>
<img src="color.jpg" alt="color" align="middle">
</center>
<br>
<br>
<p>Click <a href="http://www.macs.hw.ac.uk/~ls68/colour.sh"> here</a> to download the source code we will be using for task 2.</p>
<p>Save this file as colour.sh, set execute permission on that file by typing chmod a+x colour.sh and then execute the file like this: ./colour.sh. </p>
<br>
<p>This script outputs all the colours to the screen. Look at the code and try to understand it, then, try the following:</p>
<p>1. Try adding new colour coordinations of text and foreground to the program - the colour codes will be easy to find with a quick google search.</p>
<p>2. Modify one line of text so half is one colour and half is another.</p>
<br>
<br>
<h3>Task 3 (let it snow, let it snow, let it snow! creating a text-based snow animation using a shell script): </h3>
<h4>Duration: 15-20 minutes</h4>
<center>
<img src="snow.jpg" alt="Paris" align="middle">
</center>
<br>
<br>
<p>Click <a href="http://www.macs.hw.ac.uk/~ls68/colour.sh"> here</a> to download the source code we will be using for task 3.</p>
<p>Save this file as snow.sh, set execute permission on that file by typing chmod a+x colour.sh and then execute the file like this: ./snow.sh. </p>
<br>
<p>Read the code and try to understand it, then, try the following:</p>
<p>1. How are the assignment of snowflakes determined? Is it pre-defined or random?,</p>
<p>2. Try to increase the rate of flow of snowflake falling,</p>
<p>3. Modify the code so different shaped snowflake are falling with the '*' snowflake symbols. Try the '#' symbol.
<p>4. What is the purpose of the use of the sleep function towards the end of the bash program? </p>
    </div>
<br>
<br>
    <div class="adv">
<h2><u>Segment 3 - Advanced tasks:</u></h3>
<h3>Task 4 (3 in a row, we have a winner!: tic tac toe game using a shell script):</h3>
  <h4>Duration: 15-20 minutes</h4>
<center>
<img src="tictactoe.jpg" alt="Paris" align="middle">
</center>
<br>
<br>
<p>Click <a href="http://www.macs.hw.ac.uk/~ls68/game.sh"> here</a> to download the source code we will be using for task 4 (<a href="https://github.com/GDhllon">Credit</a>). </p>
<p>Save this file as game.sh, set execute permission on that file by typing chmod a+x game.sh and then execute the file like this: ./game.sh. </p>
<br>
<p>Read the code and try to understand it, then, try the following:</p>
<p>1. Try to increase the board size.</p>
<p>2. Could the board representation be improved? </p>
<p>3. Could the AI be improved? </p>
<p>4. What types of specific bash control structures have been used, and would you have coded it differently?</p>
<br>
<br>
<h3>Task 5 (change what you see for the better: modify your prompt on the command line): </h3>
<h4>Duration: 10 minutes</h4>
<img src="hostname.png" alt="Paris" align="middle">
<br>
<br>
<p>Click <a href="http://www.macs.hw.ac.uk/~hwloidl/Courses/LinuxIntro/x224.html#sec-useful"> here</a> to view task 5. (Credit: Hans-Wolfgang Loidl).</p>
<p>This is an advanced exercise, modify your prompt on the command line, so that it shows the user-name, the host-name, as well as the available disk space and disk utilisation on the current partition.</p>
</div>
<br>
  <div class="further">
<h2><u>Segment 4 -  Further Reading and Learning:</u></h2>
<p>Further Reading list available: <a href="http://www.macs.hw.ac.uk/~hwloidl/Courses/LinuxIntro/t1.html#Sobell">here</a> - detailed textbook on Linux, shell and much more. </p>
<h3>Where you might encounter shell scripting in future learning within your degree programme at Heriot-Watt University?</h3>
<a href="https://www.macs.hw.ac.uk/tel/resources/category/f27cx-main/" > F27CX/F27CS </a> - Introduction to Computer Systems, </p>
<a href="http://www.macs.hw.ac.uk/~hwloidl/Courses/F28HS/index.html" > F28HS </a> - Hardware-Software Interface, </p>
<a href="http://www.macs.hw.ac.uk/~hwloidl/Courses/F21DP/index.html" > F21DP </a> - Parallel and Distributed Technology, </p>
<a href="http://www.macs.hw.ac.uk/~hwloidl/Courses/F21CN/index.html" > F21CN </a> - Computer Network Security, </p>
<a href="http://www.macs.hw.ac.uk/~hwloidl/Courses/F28DA/index.html" > F28DA </a> - Data Structures and Algorithms. </p>
</div>
<br>
  <div class="outcomes">
<h2><u>Segment 5 - Learning Outcomes Checklist:</u></h2>
<h3>Finished tasks. Have you achieved the learning outcomes?</h3>
<p>1. What is a shell variable and how to define them. <input type="checkbox" name="vehicle" value="1."></p>  <br> 
<p>2. How to use bash control structures effectively (if, for, conditionals, etc.), and how to define a function in your script. <input type="checkbox" name="vehicle" value="1."> </p>  <br> 
<p>3. How to use text processing utility commands effectively (sed, awk, grep, etc).  <input type="checkbox" name="vehicle" value="3."> </p><br>
<p>4. How to create a simple game in a shell script. <input type="checkbox" name="vehicle" value="4."> </p> <br> 
<p>5. How output coloured output from a shell script. <input type="checkbox" name="vehicle" value="5."> </p> <br>
<p>6. How to create a simple text based animation from a shell script. <input type="checkbox" name="vehicle" value="6."> </p><br>
  </div>
<br> 
    <div class="warning"> 
<center><h2><u>IMPORTANT NOTE-</h2></u>          
<h3>COMPILING AND RUNNING THE EXAMPLE SHELL SCRIPT FILES:</h3></center>
<center>     <img src="images/linux.jpg" />    </center>
<center>
<p><b>1) download files: into an approriate directory space</b></p>
<p><b>2) to compile: chmod a+x (filename).sh</b></p>
<p><b>3) to execute: ./(filename).sh </b></p>
<p><b><u>(make sure the file is trying to compile and/or execute <br> is the directory space that you are currently in)</b></u>.</p>
</center>
</div>
</blockquote>

<?php
	$title = "teaching";
	include 'foot.php';
?>
