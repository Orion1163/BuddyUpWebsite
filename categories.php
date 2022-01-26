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
</nav>

<section class = "my-5">
    <div class ="py-5">
      <h2 class = "text-center">Programming Languages</h2>
      </div>
    <div class ="container-fluid">
      <div class = "row">
        <div class="col-lg-6 col-md-6 col-12">
          <img src="images/proglang.jpg" class ="img-fluid progimg" >
        </div>
          <div class="col-lg-6 col-md-6 col-12">
          <h2 class ="display-4"></h2>
          <p class ="py-3">A programming language is a formal language comprising a set of strings that produce various kinds of machine code output. Programming languages are one kind of computer language, and are used in computer programming to implement algorithms. Most programming languages consist of instructions for computers.
        </p>
          </div>
      </div>
      </div>
    </section>

    <section class = "my-5">
        <div class ="py-5">
          <h2 class = "text-center">HTML</h2>
          </div>
        <div class ="container-fluid">
          <div class = "row">
            <div class="col-lg-6 col-md-6 col-12">
              <img src="images/html.jpg" class ="img-fluid progimg" >
            </div>
              <div class="col-lg-6 col-md-6 col-12">
              <p class ="py-3">The HyperText Markup Language, or HTML is the standard markup language for documents designed to be displayed in a web browser. It can be assisted by technologies such as Cascading Style Sheets (CSS) and scripting languages such as JavaScript.
                Web browsers receive HTML documents from a web server or from local storage and render the documents into multimedia web pages. HTML describes the structure of a web page semantically and originally included cues for the appearance of the document.
              </p>
              <a href="html.php" clas ="btn btn-outline-success">Check More</a>
              </div>
          </div>
          </div>
        </section>

        <section class = "my-5">
            <div class ="py-5">
              <h2 class = "text-center">PHP</h2>
              </div>
            <div class ="container-fluid">
              <div class = "row">
                <div class="col-lg-6 col-md-6 col-12">
                  <img src="images/php.jpg" class ="img-fluid progimg" >
                </div>
                  <div class="col-lg-6 col-md-6 col-12">
                  <p class ="py-3">PHP is a general-purpose scripting language geared towards web development.It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1994.The PHP reference implementation is now produced by The PHP Group.PHP originally stood for Personal Home Page,but it now stands for the recursive initialism PHP: Hypertext Preprocessor.
                    PHP code is usually processed on a web server by a PHP interpreter implemented as a module, a daemon or as a Common Gateway Interface (CGI) executable.
                  </p>
                  <a href="php.php" clas ="btn btn-outline-success">Check More</a>
                  </div>
              </div>
              </div>
            </section>

            <section class = "my-5">
                <div class ="py-5">
                  <h2 class = "text-center">C++</h2>
                  </div>
                <div class ="container-fluid">
                  <div class = "row">
                    <div class="col-lg-6 col-md-6 col-12">
                      <img src="images/cpp.jpg" class ="img-fluid progimg" >
                    </div>
                      <div class="col-lg-6 col-md-6 col-12">
                      <p class ="py-3">C++ is a general-purpose programming language created by Bjarne Stroustrup as an extension of the C programming language, or "C with Classes". The language has expanded significantly over time, and modern C++ now has object-oriented, generic, and functional features in addition to facilities for low-level memory manipulation. It is almost always implemented as a compiled language, and many vendors provide C++ compilers, including the Free Software Foundation, LLVM, Microsoft, Intel, Oracle, and IBM, so it is available on many platforms.
                      </p>
                      <a href="cpp.php" clas ="btn btn-outline-success">Check More</a>
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