<!DOCTYPE html>
<html>
<head>
  <title>Zachary S Node Install</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=PT+Sans|Slabo+27px" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" type="text/css" href="css/django.css">
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
        <h1>How to use MySQL in Node.js</h1>
        <h2>This guide will include node.js and MySQL.<br><b>Click on the div headers to see instructions</b></h2>
      </div>
      <br>
    </div>
    <div id="AdvComp" class="projects">
      <h3 class="projectHead" id="mysqltop">Creating a database/connecting</h3>
      <img class="MySQL" src="images/nodemysqlConnect1.png" alt="MySQL1"></img>
      <h4 class="mysqltxt">To install node.js through the website, you need to click on the download button on the <a href="https://nodejs.org/en/">Node.js
       site</a>. Then you need to double click on the download file and it will unpackage it.</h4>
      <img class="MySQL" src="images/nodemysqlConnect2.png" alt="MySql2"></img>
      <h4 class="mysqltxt">To then confirm the install, create a generic js file with this code. Then enter the command line and type "
        node filename.js" and hit enter. Then open a browser and type localhost:8080 and you should see the site.</h4>
      <img class="MySQL" src="images/websiteNode.png" alt="Mysql3"></img>
      <h4 class="mysqltxt">This is what the site should look like.</h4>
    </div>
    <div id="AdvWeb" class="projects">
      <h3 class="projectHead" id="phpmyadmintop">Creating a table</h3>
      <img class="phpmyadmin" src="images/nodemysqlTable1.png" alt="phpmyadmin1"></img>
      <h4 class="phpmyadmintxt"> To install node.js through the command line, you must run the command above and follow the following prompts</h4>
      <img class="phpmyadmin" src="images/nodemysqlTable2.png" alt="MySql2"></img>
      <h4 class="phpmyadmintxt">To then confirm the install, create a generic js file with this code. Then enter the command line and type "
        node filename.js" and hit enter. Then open a browser and type localhost:8080 and you should see the site.</h4>
      <img class="phpmyadmin" src="images/websiteNode.png" alt="Mysql3"></img>
      <h4 class="phpmyadmintxt">This is what the site should look like.</h4>
    </div>
    <div id="classmates">
      <h3>Here are my other projects</h3>
      <h4>Return to the <a href="../../index.php">main page</a></h4>
    </div>
    <div id="about">
      <h3 class="projectHead" id="Workbenchtop">How to insert into tables</h3>
      <img class="Workbench" src="images/nodemysqlInsert.png" alt="Workbench1"></img>
      <h4 class="Workbenchtxt">To install npm, you must run the command above and follow the following prompts</h4>
      <img class="Workbench" src="images/nodemysqlInsert2.png" alt="Workbench1"></img>
      <img class="Workbench" src="images/nodemysqlInsert3.png" alt="Workbench1"></img>
    </div>
  </div>
</div>
</body>
</html>
