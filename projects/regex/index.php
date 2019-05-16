<!DOCTYPE html>
<html>
<head>
  <title>Zachary S Regular Expression</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=PT+Sans|Slabo+27px" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="https://fonts.googleapis.com/css?family=Merriweather|Montserrat" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/reg.css">
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
    .tables {
      text-align: center;
      border: .5em solid #333333;
      background-color: #4da6ff;
    }
    td {
      border: .2em solid #333333;
      padding: .5em;
      text-align: center;
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
        <h1>How to use Regular Expressiones</h1>
        <h2>This guide will include jargon and use cases.<br><b>Click on the div headers to see instructions</b></h2>
      </div>
      <br>
    </div>
    <div id="AdvComp" class="projects">
      <h3 class="projectHead" id="mysqltop">Literal characters</h3>
      <h4 class="mysqltxt">Literal characters are the literal letters that are being searched for.</h4>
      <h4 class="mysqltxt">Some characters need to be escaped (\ placed in front) in order to be considered literal. Here are some examples</h4>
      <table class="mysqltxt tables">
        <tr><td>^</td><td>[</td><td>.</td></tr>
        <tr><td>$</td><td>*</td><td>+</td></tr>
      </table>
    </div>
    <div id="AdvWeb" class="projects">
      <h3 class="projectHead" id="phpmyadmintop">Meta characters</h3>
      <h4 class="phpmyadmintxt">These are the meta characters<br>Meta characters are special characters that perform specific functions when included</h4>
      <table class="phpmyadmintxt tables">
        <tr><td>^ (Begining of a string)</td><td>$ (end of a string)</td><td>\b (word boundary)</td></tr>
        <tr><td>\s (white space)</td><td>\d (digit)</td><td>\w (word)</td></tr>
        <tr><td>* (0 or more)</td><td>+ (1 or more)</td><td>? (0 or 1)</td></tr>
        <tr><td>[AC] (can have either A or C)</td><td>(AC) (must have AC)</td><td>{2} (exactly 2)</td></tr>
      </table>
    </div>
    <div id="classmates">
      <h3>Here are my other projects</h3>
      <h4>Return to the <a href="../../index.php">main page</a></h4>
    </div>
    <div id="about">
      <h3 class="projectHead" id="Workbenchtop">Practical Uses (crossword)</h3>
      <img class="Workbench" src="images/nosferatu.png" alt="ERD"></img>
      <h4 class="Workbenchtxt">This is a crossword puzzle. The top left grid will be shown as (1,1)</h4>
      <h4 class="Workbenchtxt">(1,1) is N because the character set on the left included N, and the regex statements to the right and above can have anything.</h4>
      <h4 class="Workbenchtxt">(1,2) is O since one of the options in the left character set is O and it has a 0 or more. The statement above works since O is one
       of the options, and the statement to the right has O as an option.</h4>
       <h4 class="Workbenchtxt">(1,3) is S since S is an option in the character set to the left, S is an option in the character set above, and S is one of the 
       literals in the statement to the right.</h4>
       <h4 class="Workbenchtxt">(2,1) is F since it can be anything on the left statement, F is one of the options in the statement above, NF is one of the options
        in the statement below, and F is not G, O, or A in the right statement.</h4>
      <h4 class="Workbenchtxt">(2,2) is E since it can be ER from the left statement, E is one of the options in the statement below, ET is one of the options 
      in the statement above, and E is not G, O, or A in the right statement.</h4>
      <h4 class="Workbenchtxt">(2,3) is R since it can be ER from the left statement, R is one of the options in the statements above and below, and R is 
      not G, O, or A in the right statement.</h4>
      <h4 class="Workbenchtxt">(3,1) is A since the left statements start with a literal A, A is one of the options in the statments above and below, and A is 
      one of the options in the right statement.</h4>
      <h4 class="Workbenchtxt">(3,2) is T since T is one of the options in the left statement, T can be anything in the statement below, ET is one of the options in
      the statement above, and T is one of the options in the statement to the right.</h4>
      <h4 class="Workbenchtxt">(3,3) is U since U is one of the options in the left, right, above, and below statements.</h4>
    </div>
  </div>
</div>
</body>
</html>
