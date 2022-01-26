<html>
<head>
    <title>my first website</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
</nav>


<br><Br><br><br>
<?php
$con = mysqli_connect('localhost', 'root');

if($con){
    echo "Thank You for your Feedback :)";
}
else{
    echo "No Connection";
}
mysqli_select_db($con, 'data_base_buddyup');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$query = " insert into userinfo (user, email, mobile, comment )
values ('$user', '$email', '$mobile', '$comment' )";

mysqli_query($con, $query);

?>
<br><Br><br><br>
<a href="index1.php" clas ="btn btn-outline-success">Bact To Home</a>

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



