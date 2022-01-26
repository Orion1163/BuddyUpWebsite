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

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/php.jpg" alt="php" width="1100" height="500">
      <div class="carousel-caption">
        <h3><a href="php.php">PHP</h3></a>
        <p>PHP is a general-purpose scripting language geared towards web development.</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/html.jpg" alt="html" width="1100" height="500">
      <div class="carousel-caption">
        <h3><a href="html.php">HTML</h3></a>
        <p>HTML is the standard markup language for documents designed to be displayed in a web browser.</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/cpp.jpg" alt="cpp" width="1100" height="500">
      <div class="carousel-caption">
        <h3><a href="cpp.php">C++</h3></a>
        <p>C++ is a general-purpose programming language created by Bjarne Stroustrup as an extension of the C programming language.</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
 
<section class = "my-5">
<div class ="py-5">
  <h2 class = "text-center">About US</h2>
  </div>
<div class ="container-fluid">
  <div class = "row">
    <div class="col-lg-6 col-md-6 col-12">
      <img src="logos/4.JPG" class ="img-fluid aboutimg" >
    </div>
      <div class="col-lg-6 col-md-6 col-12">
      <h2 class ="display-4">BuddyUp</h2>
      <p class ="py-3">BuddyUp is optimized for learning and training. Examples might be simplified to improve reading and learning. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content.
      </p>
      <a href="aboutus.php" clas ="btn btn-outline-success">Check More</a>
      </div>
  </div>
  </div>
</section>

<section class ="my-5">
  <div class ="py-5">
    <h2 class="text-center">
        <a href="categories.php">Explore Languages</h2></a>
  </div>
<div class ="container-fluid">
  <div class="row">
    <div class ="col-lg-4 col-md-4 col-12">
      <img src="images/php.jpg" class="img-fluid pb-4">
    </div>
    <div class ="col-lg-4 col-md-4 col-12">
      <img src="images/cpp.jpg" class="img-fluid pb-4">
    </div>
    <div class ="col-lg-4 col-md-4 col-12">
      <img src="images/html.jpg" class="img-fluid pb-4">
    </div>

  </div>
</div>
</section> 

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