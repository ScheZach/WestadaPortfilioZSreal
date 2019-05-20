<!DOCTYPE html>
<html>
<head>
  <title>Zachary S MongoDB</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=PT+Sans|Slabo+27px" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="https://fonts.googleapis.com/css?family=Merriweather|Montserrat" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/github.css">
  <style>
    img {
      margin: .3em;
      border: .5em ridge #555555;
    }
    h3, h2 {
      font-family: 'Merriweather', serif;
    }
    h4 {
      font-family: 'Montserrat', sans-serif;
    }
  </style>
  <script>
    $(document).ready(function(){
      $(".MySQL").hide();
      $(".mysqltxt").hide();
      $("#mysqltop").click(function(){
        $(".MySQL").slideToggle();
        $(".mysqltxt").slideToggle();
      });

      $(".phpmyadmin").hide();
      $(".phpmyadmintxt").hide();
      $("#phpmyadmintop").click(function() {
        $(".phpmyadmin").slideToggle();
        $(".phpmyadmintxt").slideToggle();
      });

      $(".Workbench").hide();
      $(".Workbenchtxt").hide();
      $("#Workbenchtop").click(function(){
        $(".Workbench").slideToggle();
        $(".Workbenchtxt").slideToggle();
      });

    });

    function w3_open() {
      document.getElementById("main").style.marginLeft = "15%";
      document.getElementById("mySidebar").style.width = "15%";
      document.getElementById("mySidebar").style.display = "block";
      document.getElementById("openNav").style.display = 'none';
    }
    function w3_close() {
      document.getElementById("main").style.marginLeft = "0%";
      document.getElementById("mySidebar").style.display = "none";
      document.getElementById("openNav").style.display = "inline-block";
    }
  </script>
</head>
<body>

  <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
    <button class="w3-bar-item w3-button w3-large" onclick="w3_close()">Close &times;</button>
    <a href="#" class="w3-bar-item w3-button">Here are my other classmates that I worked with</a>
    <a href="http://192.168.1.153/b2/ethana" class="w3-bar-item w3-button">Ethan A</a>
    <a href="http://192.168.1.153/b2/joesphm" class="w3-bar-item w3-button">Joesph M</a>
    <a href="http://westada.tech/b2/abdulazizk/" class="w3-bar-item w3-button">Abdulaziz K</a>
  </div>

  <div id="main">

<div class="w3-light_blue">
  <button id="openNav" class="w3-button w3-blue w3-xlarge" onclick="w3_open()">&#9776;</button>
</div>

  <div class="grid-container">
    <div id="header">
      <img id="Westada" class="schoolImg" src="../../images/WestAdaThumb.png" alt="Westada"></img>
      <img id="Centennial" class="schoolImg" src="../../images/logo_centennial-thumb.png" alt="Centennial"></img>
      <div id="headText">
        <h1>How to use Github</h1>
        <h2>This guide will include git and Github.<br><b>Click on the div headers to see instructions</b></h2>
      </div>
      <br>
    </div>
    <div id="AdvComp" class="projects">
      <h3 class="projectHead" id="mysqltop">Installing and setting up git</h3>
      <img class="MySQL" src="images/gitInstall.png" alt="MySQL1"></img>
      <h4 class="mysqltxt">In order to use git, you will need to install git using the above command.</h4>
      <img class="MySQL" src="images/gitInit.png" alt="MySql2"></img>
      <h4 class="mysqltxt">This create a .git folder that keeps track of changes and new files.</h4>
      <img class="MySQL" src="images/gitStatus.png" alt="database"></img>
      <h4 class="mysqltxt">This shows what files are new, not being kept track of, or changed.</h4>
    </div>
    <div id="AdvWeb" class="projects">
      <h3 class="projectHead" id="phpmyadmintop">Commiting</h3>
      <img class="phpmyadmin" src="images/gitAdd.png" alt="phpmyadmin1"></img>
      <h4 class="phpmyadmintxt"> The add command selects files to be commited.</h4>
      <img class="phpmyadmin" src="images/gitIgnore.png" alt="MySql2"></img>
      <h4 class="phpmyadmintxt"> This file can be changed so that certain files aren't included in a commit.</h4>
      <img class="phpmyadmin" src="images/gitCommit.png" alt="Workbench1"></img>
      <h4 class="phpmyadmintxt">This is how you commit files to be uploaded</h4>
    </div>
    <div id="classmates">
      <h3>Here are my other projects</h3>
      <h4>Return to the <a href="../../index.php">main page</a></h4>
    </div>
    <div id="about">
      <h3 class="projectHead" id="Workbenchtop">Uploading</h3>
      <img class="Workbench" src="images/gitAddRemote.png" alt="ERD"></img>
      <h4 class="Workbenchtxt">This is how you create a remote (a place for the files to be held in GitHub).</h4>
      <img class="Workbench" src="images/gitCheckout.png" alt="Workbench1"></img>
      <h4 class="Workbenchtxt">This creates branches so that code can be worked on seperatly and be merged later on.</h4>
      <img class="Workbench" src="images/gitPush.png" alt="Workbench2"></img>
      <h4 class="Workbenchtxt">This is how you push your commit.</h4>
      <img class="Workbench" src="images/gitPull.png" alt="Workbench3"></img>
      <h4 class="Workbenchtxt">This is how you pull files from a GitHub remote.</h4>
      <img class="Workbench" src="images/gitHub.png" alt="Workbench4"></img>
      <h4 class="Workbenchtxt">This is what you see on GitHub.</h4>
    </div>
  </div>
</div>
</body>
</html>
