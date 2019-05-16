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
  <link rel="stylesheet" type="text/css" href="css/Tania.css">
  <script src="https://unpkg.com/react@16/umd/react.production.min.js" crossorigin></script>
  <script src="https://unpkg.com/react-dom@16/umd/react-dom.production.min.js" crossorigin></script>
  <script src="https://unpkg.com/babel-standalone@6.26.0/babel.js"></script>
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
        <h1>How we made our React pages from Tania Rascia's instructions</h1>
        <h2>This guide will include the codesandbox IDE and React.js.<br><b>Click on the div headers to see instructions</b></h2>
      </div>
      <br>
    </div>
    <div id="AdvComp" class="projects">
      <h3 class="projectHead" id="mysqltop">The codesandbox IDE</h3>
      <a target="_blank" href="images/randomDadJokeConsole.png"><img class="MySQL" src="images/randomDadJokeConsoleSm.png" alt="MySQL1"></img></a>
      <h4 class="mysqltxt"> <b>Click the image above to have a larger image.</b> <br class="mysqltxt">
      This is the codesandbox IDE it has a window for code and a live feed of what your site looks like.</h4>
      <img class="MySQL" src="images/debug.png" alt="MySql2"></img>
      <h4 class="mysqltxt">Codesandbox has a strong error dection and responce system that is built in to the live feed.</h4>
    </div>
    <div id="AdvWeb" class="projects">
      <h3 class="projectHead" id="phpmyadmintop">React.js</h3>
      <img class="phpmyadmin" src="images/Reactoriginal.png" alt="phpmyadmin1"></img>
      <h4 class="phpmyadmintxt">This is how we started React.js as a whole. This uses a preinstalled JSX converter that came with codesandbox</h4>
      <img class="phpmyadmin" src="images/ReactGoogle.png" alt="phpmyadmin1"></img>
      <h4 class="phpmyadmintxt">This is how we started the dad jokes project before we had the random dad jokes IDE implemented</h4>
      <img class="phpmyadmin" src="images/onClickConsole.png" alt="phpmyadmin1"></img>
      <h4 class="phpmyadmintxt">This is how we first used the console to see how the button would work in React.js</h4>
      <img class="phpmyadmin" src="images/setState.png" alt="phpmyadmin1"></img>
      <h4 class="phpmyadmintxt">After getting the console to work we used states so that we could have the webpage adjust so that the paragraph would display a joke.</h4>
    </div>
    <div id="classmates">
      <h3>Here are my other projects</h3>
      <h4>Return to the <a href="../../index.php">main page</a></h4>
    </div>
    <div id="about">
      <h3 class="projectHead" id="Workbenchtop">Pratical Application</h3>
        <div id="root"></div>

        <script type="text/babel">
            class App extends React.Component {
                render() {
                    return <h1>Hello World</h1>
                }
            }
            ReactDOM.render(<App />, document.getElementById('root'))
        </script>
    </div>
  </div>
</div>
<script type="text/babel" src="js/dadJoke.js"></script>
</body>
</html>