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
            <a class="nav-link" href="categories.html">Categories</a>
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

<h1 class="h1">What is HTML</h1>
<p>HTML is an acronym which stands for <strong>Hyper Text Markup Language</strong> which is used for creating web pages and web applications. Let's see what is meant by Hypertext Markup Language, and Web page.</p>
<p><strong>Hyper Text:</strong> HyperText simply means "Text within Text." A text has a link within it, is a hypertext. Whenever you click on a link which brings you to a new webpage, you have clicked on a hypertext. HyperText is a way to link two or more web pages (HTML documents) with each other. </p>
<p><strong>Markup language:</strong> A markup language is a computer language that is used to apply layout and formatting conventions to a text document. Markup language makes text more interactive and dynamic. It can turn text into images, tables, links, etc.</p>
<p><strong>Web Page:</strong> A web page is a document which is commonly written in HTML and translated by a web browser. A web page can be identified by entering an URL. A Web page can be of the static or dynamic type. <strong>With the help of HTML only, we can create static web pages</strong>. </p>
<p>Hence, HTML is a markup language which is used for creating attractive web pages with the help of styling, and which looks in a nice format on a web browser. An HTML document is made of many HTML tags and each HTML tag contains different content.</p>
<p><strong>Let's see a simple example of HTML.</strong></p>
<div class="codeblock"><textarea name="code" class="form-control"  rows="10">
&lt;!DOCTYPE&gt;
&lt;html&gt;
&lt;head&gt;
&lt;title&gt;Web page title&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;h1&gt;Write Your First Heading&lt;/h1&gt;
&lt;p&gt;Write Your First Paragraph.&lt;/p&gt;
&lt;/body&gt;
&lt;/html&gt;
</textarea></div>
<span class="testit"><a href="https://www.javatpoint.com/oprweb/test.jsp?filename=htmlhtml1" target="_blank">Test it Now</a></span>
<hr />
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<h2 class="h2">Description of HTML Example</h2>
<p><strong>&lt;!DOCTYPE&gt;:</strong> It defines the document type or it instruct the browser about the version of HTML.</p>
<p><strong>&lt;html &gt;</strong> :This tag informs the browser that it is an HTML document. Text between html tag describes the web document. It is a container for all other elements of HTML except &lt;!DOCTYPE&gt; </p>
<p><strong>&lt;head&gt;:</strong> It should be the first element inside the &lt;html&gt; element, which contains the metadata(information about the document). It must be closed before the body tag opens.</p>
<p><strong>&lt;title&gt;:</strong> As its name suggested, it is used to add title of that HTML page which appears at the top of the browser window. It must be placed inside the head tag and should close immediately. (Optional)</p>
<p><strong>&lt;body&gt; </strong> : Text between body tag describes the body content of the page that is visible to the end user. This tag contains the main content of the HTML document.</p>
<p><strong>&lt;h1&gt;</strong> : Text between &lt;h1&gt; tag describes the first level heading of the webpage.</p>
<p><strong>&lt;p&gt; </strong> : Text between &lt;p&gt; tag describes the paragraph of the webpage.</p>
<hr />
<h2 class="h2">Brief History of HTML</h2>
<p>In the late 1980's , a physicist, Tim Berners-Lee who was a contractor at CERN, proposed a system for CERN researchers. In 1989, he wrote a memo proposing an internet based hypertext system.</p>
<p><strong>Tim Berners-Lee</strong> is known as the father of HTML. The first available description of HTML was a document called "HTML Tags" proposed by Tim in late 1991. The latest version of HTML is HTML5, which we will learn later in this tutorial.</p>
<hr />
<h2 class="h2">HTML Versions</h2>
<p>Since the time HTML was invented there are lots of HTML versions in market, the brief introduction about the HTML version is given below: </p>
<p><strong>HTML 1.0:</strong> The first version of HTML was 1.0, which was the barebones version of HTML language, and it was released in1991. </p>
<p><strong>HTML 2.0:</strong> This was the next version which was released in 1995, and it was standard language version for website design. HTML 2.0 was able to support extra features such as form-based file upload, form elements such as text box, option button, etc. </p>
<p><strong>HTML 3.2:</strong> HTML 3.2 version was published by W3C in early 1997. This version was capable of creating tables and providing support for extra options for form elements. It can also support a web page with complex mathematical equations. It became an official standard for any browser till January 1997. Today it is practically supported by most of the browsers. </p>
<p><strong>HTML 4.01:</strong> HTML 4.01 version was released on December 1999, and it is a very stable version of HTML language. This version is the current official standard, and it provides added support for stylesheets (CSS) and scripting ability for various multimedia elements. </p>
<p><strong>HTML5 :</strong> HTML5 is the newest version of HyperText Markup language. The first draft of this version was announced in January 2008. There are two major organizations one is W3C (World Wide Web Consortium), and another one is WHATWG( Web Hypertext Application Technology Working Group) which are involved in the development of HTML 5 version, and still, it is under development.</p>
<hr />
<h2 class="h2">Features of HTML</h2>
<p>1) It is a very <strong>easy and simple language</strong>. It can be easily understood and modified.</p>
<p>2) It is very easy to make an <strong>effective presentation</strong> with HTML because it has a lot of formatting tags.</p>
<p>3) It is a <strong>markup language</strong>, so it provides a flexible way to design web pages along with the text.</p>
<p>4) It facilitates programmers to add a <strong>link</strong> on the web pages (by html anchor tag), so it enhances the interest of browsing of the user.</p>
<p>5) It is <strong>platform-independent</strong> because it can be displayed on any platform like Windows, Linux, and Macintosh, etc.</p>
<p>6) It facilitates the programmer to add <strong>Graphics, Videos, and Sound</strong> to the web pages which makes it more attractive and interactive.</p>
<p>7) HTML is a case-insensitive language, which means we can use tags either in lower-case or upper-case.</p>
<h4 class="n">NOTE: It is recommended to write all tags in lower-case for consistency, readability, etc.</h4>
<div class="nexttopicdiv">
<span class="nexttopictext">Next Topic : </span><span class="nexttopiclink"><a href="texted.html">HTML text Editors</a></span>
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