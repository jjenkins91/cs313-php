<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Jason's Homepage</title>
    <link rel="stylesheet" href="stylesheet.css">
  </head>
  <body>
    <div class="navigationBar">
      <div class="logoBox">
        <img id="jjlogo"src="jjlogo.png" alt="jjlogo">
      </div>
      <div class="navigationTabs">
        <a href="#">Home</a>
        <a href="assign02.html">Assignments Page</a>
        <!-- <a href="#">Resume</a> -->
        <!-- <a href="#">Contact</a> -->
      </div>
    </div>
    <div class="extraSpace">
    </div>
    <div class="bodyContent">
      <div class="sideNavigationBar">
        <img class="socialMediaIcons"src="linkedin.png" alt="linkedin">
        <img class="socialMediaIcons"src="facebook.png" alt="facebook">
        <img class="socialMediaIcons"src="gmail.png" alt="gmail">
      </div>
      <div class="titlePosition">
        <h4 id="title1">My name is</h4>
        <h1 id="title2">Jason Jenkins</h1>
        <h3 id="title3">Software Engineer</h3>
        <img class="socialMediaIcons"src="gmail.png" alt="gmailIcon">
      </div>
    </div>
    <div class="imagePosition">
      <img class="myImage"src="jason.jpg" alt="Image of Jason">
      <div class="paragraphBox">

        <p class="description">
          <?php
          $txt = "Jason Jenkins and I graduate from BYU-I in December 2020. I am excited to graduate and start working full time. I currently work in data
        using Microsoft SQL Server and performing some front end developing. I love to fish and play sports.";
        echo "My name is $txt";
        ?></p>
      </div>
    </div>
    <div class="footer">
      <h4 id="copyright">Copyright© September 2020 JasonJenkins</h4>
    </div>
  </body>
</html>
