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
  <link rel="stylesheet" type="text/css" href="css/mongoose.css">
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
        <h1>How to use Mongoose</h1>
        <h2>This guide will include node.js and the mongo command prompt.<br><b>Click on the div headers to see instructions</b></h2>
      </div>
      <br>
    </div>
    <div id="AdvComp" class="projects">
      <h3 class="projectHead" id="mysqltop">Installing Mongoose</h3>
      <img class="MySQL" src="images/installMongoose.png" alt="MySQL1"></img>
      <h4 class="mysqltxt">In order to use Mongoose, you will need to install Mongo DB and node.js. Then with those installations completed do this command.</h4>
      <img class="MySQL" src="images/Mongonpminit.png" alt="MySql2"></img>
      <h4 class="mysqltxt">In order to use mongoose you will need to create a package.json in your folder.</h4>
    </div>
    <div id="AdvWeb" class="projects">
      <h3 class="projectHead" id="phpmyadmintop">Mongoose Schemas and models</h3>
      <!--<img class="phpmyadmin" src="images/basicMongoose.png" alt="phpmyadmin1"></img>-->
      <a target="_blank" href="images/basicMongoose.png"><img class="phpmyadmin" src="images/basicMongooseSm.png" alt="MySql2"></img></a>
      <h4 class="phpmyadmintxt"> <b>Click the image above to have a larger image.</b> <br class="phpmyadmin"> 
      This is a Mongoose schema and it functions as a template for values to placed into. These values can also be different types or have different properties
      , and that is why you see String, Date, and unique</h4>
      <img class="phpmyadmin" src="images/MongooseModelCm.png" alt="phpmyadmin1"></img>
      <h4 class="phpmyadmintxt">Then when ever you want to call the schema outside of this file, you use the model.exports command</h4>
    </div>
    <div id="classmates">
      <h3>Here are my other projects</h3>
      <h4>Return to the <a href="../../index.php">main page</a></h4>
    </div>
    <div id="about">
      <h3 class="projectHead" id="Workbenchtop">Pratical Application</h3>
      <img class="Workbench" src="images/MongooseModel.png" alt="ERD"></img>
      <h4 class="Workbenchtxt">This was the Schema that we created to use for the app.js</h4>
      <img class="Workbench" src="images/mongooseRequires.png" alt="Workbench1"></img>
      <h4 class="Workbenchtxt">These are all the requirements for app.js. These things include express and mongo DB.</h4>
      <img class="Workbench" src="images/mongooseResultCode.png" alt="Workbench2"></img>
      <h4 class="Workbenchtxt">This is how we ditermined whether the model worked or not on the express server</h4>
      <img class="Workbench" src="images/runExpress.png" alt="Workbench3"></img>
      <h4 class="Workbenchtxt">This is how we ran the app.js so that we could see the results.</h4>
      <img class="Workbench" src="images/ExpressResult.png" alt="Workbench4"></img>
      <h4 class="Workbenchtxt">This is the final result.</h4>
      <hr class="Workbenchtxt">
      <img class="Workbench" src="images/MongooseFind.png" alt="Workbench4"></img>
      <h4 class="Workbenchtxt">We used this code to find the books in our books collection.</h4>
      <img class="Workbench" src="images/MongooseFindResults.png" alt="Workbench4"></img>
      <h4 class="Workbenchtxt">This is the final result.</h4>
      <hr class="Workbenchtxt">
      <img class="Workbench" src="images/findBookId.png" alt="Workbench4"></img>
      <h4 class="Workbenchtxt">We used this code to use the url as a way to input a condition (in this case a id) for the find command to use</h4>
      <img class="Workbench" src="images/BookFoundOne.png" alt="Workbench4"></img>
      <h4 class="Workbenchtxt">This is the result of that command</h4>
      <hr class="Workbenchtxt">
      <img class="Workbench" src="images/AppPost.png" alt="Workbench4"></img>
      <img class="Workbench" src="images/appPostCreate.png" alt="Workbench4"></img>
      <h4 class="Workbenchtxt">These are the two methods we add books to the collection.</h4>
      <a target="_blank" href="images/Postman.png"><img class="Workbench" src="images/PostmanSm.png" alt="Workbench4"></img></a>
      <h4 class="Workbenchtxt"><b>Click the image above to have a larger image.</b> <br class="Workbench">We then used the Postman program in order to add the necessary inputs for the sets of code above.</h4>
      <img class="Workbench" src="images/PostmanResults.png" alt="Workbench4"></img>
      <h4 class="Workbenchtxt">These are the results.</h4>
    </div>
  </div>
</div>
</body>
</html>
