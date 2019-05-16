<!DOCTYPE html>
<html>
<head>
  <title>Zachary S portfilio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=PT+Sans|Slabo+27px" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Merriweather|Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" type="text/css" href="css/w3.css">
  <link rel="stylesheet" type="text/css" href="css/portfilo.css">
  <style>
    h4 {
      font-family: 'Montserrat', sans-serif;
    }
    h3 {
      font-family: 'Merriweather', serif;
    }
  </style>
  <script>
    $(document).ready(function(){
      $(".VMpro").hide();
      $(".Bashpro").hide();
      $(".MySQLpro").hide();
      $(".nodepro").hide();
      $(".mysqlNodePro").hide();
      $(".regpro").hide();
      $(".djangopro").hide();
      $(".mongoPro").hide();
      $(".mongoosePro").hide();
      $(".reactUnoPro").hide();
      $(".reactTaniaPro").hide();
      $(".raspberrypiPro").hide();
      $(".DOMinatorPro").hide();

      $("#AdvWeb").mouseenter(function(){
        $("#AdvWeb").animate({fontSize: '1.2em'}, 500);
      });
      $("#AdvWeb").mouseleave(function(){
        $("#AdvWeb").animate({fontSize: '1em'}, 500);
      });

      $("#AdvComp").mouseenter(function(){
        $("#AdvComp").animate({fontSize: '1.2em'}, 500);
      });
      $("#AdvComp").mouseleave(function(){
        $("#AdvComp").animate({fontSize: '1em'}, 500);
      });

      $("#about").mouseenter(function(){
        $("#about").animate({fontSize: '1.2em'}, "slow");
      });
      $("#about").mouseleave(function(){
        $("#about").animate({fontSize: '1em'}, "slow");
      });

      $("#VMhead").click(function(){
        $(".VMpro").slideToggle();
      });

      $("#BashHead").click(function(){
        $(".Bashpro").slideToggle();
      });

      $("#MySQLhead").click(function(){
        $(".MySQLpro").slideToggle();
      });

      $("#Nodehead").click(function(){
        $(".nodepro").slideToggle();
      });

      $("#mysqlNodeHead").click(function(){
        $(".mysqlNodePro").slideToggle();
      });

      $("#RegHead").click(function(){
        $(".regpro").slideToggle();
      });

      $("#DjangoHead").click(function(){
        $(".djangopro").slideToggle();
      });

      $("#mongoHead").click(function(){
        $(".mongoPro").slideToggle();
      });

      $("#mongooseHead").click(function() {
        $(".mongoosePro").slideToggle();
      });

      $("#reactUnoHead").click(function() {
        $(".reactUnoPro").slideToggle();
      });

      $("#reactTaniaHead").click(function() {
        $(".reactTaniaPro").slideToggle();
      });

      $("#raspberrypiHead").click(function() {
        $(".raspberrypiPro").slideToggle();
      });

      $("#DOMinatorHead").click(function() {
        $(".DOMinatorPro").slideToggle();
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
    <a href="http://www.westada.tech/b2/ethana" class="w3-bar-item w3-button">Ethan A</a>
    <a href="http://www.westada.tech/b2/joesphm" class="w3-bar-item w3-button">Joesph M</a>
    <a href="http://westada.tech/b2/abdulazizk/" class="w3-bar-item w3-button">Abdulaziz K</a>
    <a href="#" class="w3-bar-item w3-button">Here are other important web sites</a>
    <a href="https://www.taniarascia.com/getting-started-with-react" class="w3-bar-item w3-button">Tania Rascia's React Page</a>
  </div>

  <div id="main">

<div class="w3-light_blue">
  <button id="openNav" class="w3-button w3-blue w3-xlarge" onclick="w3_open()">&#9776;</button>
</div>

  <div class="grid-container">
    <div id="header">
      <img id="Westada" class="schoolImg" src="images/WestAdaThumb.png" alt="Westada"></img>
      <img id="Centennial" class="schoolImg" src="images/logo_centennial-thumb.png" alt="Centennial"></img>
      <div id="headText">
        <h1>Welcome to Zachary Scherer's portfilio</h1>
        <h2> Below are my projects in both Advance Web Design and Advance Computer Science</h2>
      </div>
      <br>
    </div>
    <div id="AdvComp" class="projects">
      <h3 class="projectHead">Advanced Computer Science projects</h3>
      <h4 id="BashHead" class="ProjectList">BASH Scripting (click here)</h4>
      <h4 class="Bashpro"><a href="bash/auto_update.sh">auto_updater program</a></h4>
      <h4 class="Bashpro"><a href="bash/makechoices.sh">Better auto_updater program</a></h4>
      <h4 class="Bashpro"><a href="bash/makeBackups.sh">Backup creator program</a></h4>
      <h4 class="Bashpro"><a href="bash/checkspace.sh">Disk Usage and delete program</a></h4>
      <h4 id="RegHead" class="ProjectList">Regular Expression (click here)</h4>
      <h4 class="regpro"><a href="bash/SSvalidator.sh">Social Security and email Validator program</a> || <a href="bash/ssnumber.txt">SS/email text file
         (pass parameter)</a></h4>
      <h4 class="regpro"><a href="bash/SEDchange.sh">SED SSN redaction program</a></h4>
      <h4 class="regpro"><a href="projects/regex/index.php">How to use regular expressiones site (click here)</a></h4>
      <h4 id="DjangoHead" class="ProjectList">Django (click here)</h4>
      <h4 class="djangopro"><a href="https://nameless-hollows-68794.herokuapp.com">message board app using heroku: </a></h4>
      <h4 class="djangopro"><a href="projects/django/index.php">My Django installation site (in devolpement)</a></h4>
      <h4 id="raspberrypiHead" class="ProjectList">RaspberryPi (click here) (in devolpement)</h4>
      <h4 class="raspberrypiPro"><a href="projects/raspberrypi/index.php">My RaspberryPi site (click here)</a></h4>
    </div>
    <div id="AdvWeb" class="projects">
      <h3 class="projectHead">Advanced Web Design projects</h3>
      <h4 id="VMhead" class="ProjectList">How to use a VM (click here)</h4>
      <h4 class="VMpro"><a href="projects/vmexp/index.php">My VM site</a></h4>
      <h4 class="VMpro"><a href="http://www.westada.tech/b2/ethana">Ethan A's VM site</a></h4>
      <h4 class="VMpro"><a href="http://www.westada.tech/b2/joesphm">Joesph M's VM site</a></h4>
      <h4 id="MySQLhead" class="ProjectList">How to install MySQL (click here)</h4>
      <h4 class="MySQLpro"><a href="projects/MySQLexp/index.php">My MySQL site (click here)</a></h4>
      <h4 id="Nodehead" class="ProjectList">How to install node.js (click here)</h4>
      <h4 class="nodepro"><a href="projects/nodeExp/index.php">My node site (click here)</a></h4>
      <h4 id="mysqlNodeHead" class="ProjectList">How to use MySQL with node.js (click here)</h4>
      <h4 class="mysqlNodePro"><a href="projects/mysqlNodeExp/index.php">My MySQL with node site (click here)</a></h4>
      <h4 id="mongoHead" class="ProjectList">How to use Mongo DB (click here)</h4>
      <h4 class="mongoPro"><a href="projects/mongoN/index.php">My Mongo DB site (click here)</a></h4>
      <h4 id="mongooseHead" class="ProjectList">How to use Mongoose with express (click here)</h4>
      <h4 class="mongoosePro"><a href="projects/Mongoose/index.php">My Mongoose site (click here)</a></h4>
      <h4 id="reactUnoHead" class="ProjectList">My first react school project (click here)</h4>
      <h4 class="reactUnoPro"><a href="projects/ReactUno/index.php">My React site (click here)</a></h4>
      <h4 id="reactTaniaHead" class="ProjectList">My JavaScript DOM clock (click here) (in devoplment)</h4>
      <h4 class="reactTaniaPro"><a href="projects/DOMtime/index.php">My DOM clock site (click here)</a></h4>
      <h4 id="DOMinatorHead" class="ProjectList">The DOM-inator (JS DOM) (click here)</h4>
      <h4 class="DOMinatorPro"><a href="projects/DOMinator/index.php">DOM-inator (click here)</a></h4>
    </div>
    <div id="classmates">
      <h3>Here are my other projects</h3>
      <hr>
      <h4 class="otherlinks"><b>Here is my old github:</b> <a href="https://github.com/ZSlongtalk" target="_blank">GitHub</a></h4>
      <hr>
      <h4 class="otherlinks"><b>Here is my BitBucket:</b> <a href="https://bitbucket.org/SchererZachary/" target="_blank">BitBucket</a></h4>
      <hr>
      <h4 class="otherlinks"><b>Here is my computer model from 2018's Business Professionals of America National Conference:</b>
      <br><a href="images/RenderedNat_Front.png" target="_blank">Computer Model Train (Front view)</a>
      <br><a href="images/RenderedNat_Backleft.png" target="_blank">Computer Model Train (Back view)</a>
      <br><a href="images/RenderedNat_Frontleft.png" target="_blank">Computer Model Train (Front-Left view)</a></h4>
      <hr>
      <h4 class="otherlinks"><b>2019 Business Professionals of America Web Design Team Website <br> (created by Zachary Scherer, Elena Yang, Katie Tidwell, and Anna Shuiee): </b><a href="http://www.westada.tech/WDTDC2018" target="_blank">Web Design Team Site</a></h4>
    </div>
    <div id="about">
      <h3>My name is Zachary Scherer and I am a student at Centennial High School. I am a part of the Westada school district Computer Science CTE program, and
      in this program I build websites using HTML, CSS, Javascript family, PHP, and SQL. I also develop other programs using bash, java, and python.</h3>
    </div>
  </div>
</div>
</body>
</html>
