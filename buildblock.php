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
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav><br>

<h1 class="h1">Building blocks of HTML</h1>
<p>An HTML document consist of its basic building blocks which are:</p>
<ul class="points">
<li><strong>Tags:</strong> An HTML tag surrounds the content and apply meaning to it. It is written between &lt; and &gt; brackets.</li>
<li><strong>Attribute:</strong> An attribute in HTML provides extra information about the element, and it is applied within the start tag. An HTML attribute contains two fields: name & value.</li>
</ul>
<h2 class="h2">Syntax</h2>
<div class="codeblock"><textarea name="code" class="form-control bg-dark text-white" rows="1" >
&lt;tag name  attribute_name= " attr_value"&gt; content &lt;/ tag name&gt; 
</textarea></div><br>
<ul class="points">
<li><strong>Elements:</strong> An HTML element is an individual component of an HTML file. In an HTML file, everything written within tags are termed as HTML elements.</li>
</ul>
<img src="images/img6.jpg" alt="HTML Building blocks " />
<h2 class="h2">Example:</h2>
<div class="codeblock"><textarea name="code" class="form-control" rows="12">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
	&lt;title&gt;The basic building blocks of HTML&lt;/title&gt;
 &lt;/head&gt;
  &lt;body&gt;
       &lt;h2&gt;The building blocks&lt;/h2&gt;
       &lt;p&gt;This is a paragraph tag&lt;/p&gt;
       &lt;p style="color: red"&gt;The style is attribute of paragraph tag&lt;/p&gt;
       &lt;span&gt;The element contains tag, attribute and content&lt;/span&gt;
  &lt;/body&gt;
&lt;/html&gt;	
</textarea></div>
<span class="testit"><a href="https://www.javatpoint.com/oprweb/test.jsp?filename=htmlBuildingblocks" target="_blank">Test it Now</a></span>
<p><strong><br>Output:</strong></p>
<div class="codeblock3">
<!DOCTYPE html>
<html>
<head>
<title>The basic building blocks of HTML</title>
</head>
<body>
<h2>The building blocks</h2>
<p>This is a paragraph tag</p>
<p style="color: red">The style is attribute of paragraph tag</p>
<span>The element contains tag, attribute and content</span>
</div>
</body>
</html>
</div><br>
<div class="nexttopicdiv">
<span class="nexttopictext">Next Topic : </span><span class="nexttopiclink"><a href="htmltag.html">HTML Tags</a></span>
</div>
<br /><br />





<a href="basehtml.php">What is Html</a><br>
<a href="texted.php">HTML text Editors</a><br>
<a href="buildblock.php">Building blocks of HTML</a><br>
<a href="htmltag.php">HTML Tags</a><br>


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