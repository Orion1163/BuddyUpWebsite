<html>
<head>
    <title>my first website</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Jossefin+Sans&display=swap" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index1.php">BuddyUp</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index1.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutus.php">About Us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="categories.php">Categories</a>
          </li>
        <li class="nav-item">
          <a class="nav-link" href="contactus.php">Contact Us</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="Type to Search...."  aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


<h1 class="h1">How to run PHP code in XAMPP</h1>
<p>Generally, a PHP file contains HTML tags and some PHP scripting code. It is very easy to create a simple PHP example. To do so, create a file and write HTML tags + PHP code and save this file with .php extension. </p>
<h4 class="n">Note: PHP statements ends with semicolon (;).</h4>
<p>All PHP code goes between the php tag. It starts with &lt;?php and ends with ?&gt;. The syntax of PHP tag is given below:</p>
<div class="codeblock"><textarea name="code" class="xml">
&lt;?php 
//your code here
?&gt;
</textarea></div>
<p>Let's see a simple PHP example where we are writing some text using PHP echo command.</p>
<p><span class="filename">File: first.php</span></p>
<div class="codeblock"><textarea name="code" class="xml">
&lt;!DOCTYPE&gt;
&lt;html&gt;
&lt;body&gt;
&lt;?php
echo "&lt;h2&gt;Hello First PHP&lt;/h2&gt;";
?&gt;
&lt;/body&gt;
&lt;/html&gt;
</textarea></div>
<p><strong>Output:</strong></p>
<div class="codeblock3"><pre><h2>Hello First PHP</h2></pre></div>
<h2 class="h2">How to run PHP programs in XAMPP</h2>
<p>How to run PHP programs in XAMPP
PHP is a popular backend programming language. PHP programs can be written on any editor, such as - Notepad, Notepad++, Dreamweaver, etc. These programs save with <strong>.php</strong> extension, i.e., filename.php inside the htdocs folder.</p>
<p><strong>For example</strong> - p1.php. </p>
<p>As I'm using window, and my XAMPP server is installed in D drive. So, the path for the htdocs directory will be "D:\xampp\htdocs".</p>
<p>PHP program runs on a web browser such as - Chrome, Internet Explorer, Firefox, etc. Below some steps are given to run the PHP programs.</p>
<p><strong>Step 1:</strong> Create a simple PHP program like hello world.</p>
<div class="codeblock"><textarea name="code" class="xml">
&lt;?php	
	echo "Hello World!";
?&gt;
</textarea></div>
<p><strong>Step 2:</strong> Save the file with <strong>hello.php</strong> name in the htdocs folder, which resides inside the xampp folder.</p>
<h4 class="n">Note: PHP program must be saved in the htdocs folder, which resides inside the xampp folder, where you installed the XAMPP. Otherwise it will generate an error - Object not found.</h4>
<p><strong>Step 3:</strong> Run the XAMPP server and start the Apache and MySQL.</p>
<p><strong>Step 4:</strong> Now, open the web browser and type localhost <em>http://localhost/hello.php</em> on your browser window.</p>
<p><strong>Step 5:</strong> The output for the above <strong>hello.php</strong> program will be shown as the screenshot below:</p>
<img src="images/phpimg/code1.jpg" alt="run PHP code in XAMPP" />
<p>Most of the time, PHP programs run as a web server module. However, PHP can also be run on CLI (Command Line Interface).</p>
<h2 class="h2">PHP Case Sensitivity</h2>
<p>In PHP, keyword (e.g., echo, if, else, while), functions, user-defined functions, classes are not case-sensitive. However, all variable names are case-sensitive. </p>
<p>In the below example, you can see that all three echo statements are equal and valid: </p>
<div class="codeblock"><textarea name="code" class="xml bg-dark text-white text-center" >
&lt;!DOCTYPE&gt;
&lt;html&gt;
	&lt;body&gt;
		&lt;?php
			echo "Hello world using echo &lt;/br&gt;";
			ECHO "Hello world using ECHO &lt;/br&gt;";
			EcHo "Hello world using EcHo &lt;/br&gt;";
		?&gt;
	&lt;/body&gt;
&lt;/html&gt;
</textarea></div>
<p><strong>Output:</strong></p>
<div class="codeblock3"><pre>Hello world using echo
Hello world using ECHO
Hello world using EcHo
</pre></div>
<p>Look at the below example that the variable names are case sensitive. You can see the example below that only the second statement will display the value of the $color variable. Because it treats $color, $ColoR, and $COLOR as three different variables:</p>
<div class="codeblock"><textarea name="code" class="xml">
&lt;html&gt;
	&lt;body&gt;
		&lt;?php
			$color = "black";
			echo "My car is ". $ColoR ."&lt;/br&gt;";
			echo "My dog is ". $color ."&lt;/br&gt;";
			echo "My Phone is ". $COLOR ."&lt;/br&gt;";
		?&gt;
	&lt;/body&gt;
&lt;/html&gt;
</textarea></div>
<p><strong>Output:</strong></p>
<div class="codeblock3"><pre><strong>Notice:</strong> Undefined variable: ColoR in <strong>D:\xampp\htdocs\program\p2.php</strong> on line <strong>8</strong>
My car is
My dog is black

<strong>Notice:</strong> Undefined variable: COLOR in <strong>D:\xampp\htdocs\program\p2.php</strong> on line <strong>10</strong>
My Phone is
</pre></div>
<p>Only $color variable has printed its value, and other variables $ColoR and $COLOR are declared as undefined variables. An error has occurred in line 5 and line 7.</p>
<hr />
<div class="nexttopicdiv">
<span class="nexttopictext">Next Topic</span><span class="nexttopiclink"><a href="echo.php">PHP Echo</a></span>
</div>

<br /><br />



<section class="social">
    <div class="container text-center">
                <a href="#"><img src="images/fb.png"/></a>
                <a href="#"><img src="images/insta.png"/></a>
                <a href="#"><img src="images/twitter.png"/></a>
    </div>
  </section>
  
  <footer>
      <p class="p-3 bg-dark text-white text-center" >BuddyUp <br>
          BuddyUp is optimized for learning and training. Examples might be simplified to improve reading and learning.
          Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content.
          While using BuddyUp, you agree to have read and accepted our terms of use,
          
         <a href="/about/about_privacy.asp">cookie and privacy policy</a>.<br>
         All rights reserved. Designed By <a href="Rohan.html">Rohan Chaudhari</a> 
      </p>
  </footer>
  
  
  
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
  </html>