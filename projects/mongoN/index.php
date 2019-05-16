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
  <link rel="stylesheet" type="text/css" href="css/mongo.css">
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
        <h1>How to use MongoDB</h1>
        <h2>This guide will include node.js and the mongo command prompt.<br><b>Click on the div headers to see instructions</b></h2>
      </div>
      <br>
    </div>
    <div id="AdvComp" class="projects">
      <h3 class="projectHead" id="mysqltop">Installing Mongo DB and creating a database/collection</h3>
      <img class="MySQL" src="images/installMongo.png" alt="MySQL1"></img>
      <h4 class="mysqltxt">In order to use Mongo DB, you will need to install Mongo DB using the above command.</h4>
      <img class="MySQL" src="images/npmInstallMongo.png" alt="MySql2"></img>
      <h4 class="mysqltxt">In order to use node with Mongo DB, you will need the node Mongodb driver.</h4>
      <img class="MySQL" src="images/createdatabaseMongo.png" alt="database"></img>
      <h4 class="mysqltxt">This is how node creates databases. The way you name databases here is you change the end of var url to your db name.
       Then to create the database, enter the command line and type node filename.js</h4>
      <img class="MySQL" src="images/createCollection.png" alt="collection"></img>
      <h4 class="mysqltxt">This is how node creates collections, table equivalant. You can change the name by changing the quoted string in the createCollection function</h4>
    </div>
    <div id="AdvWeb" class="projects">
      <h3 class="projectHead" id="phpmyadmintop">Inserting into a collection and the find()</h3>
      <img class="phpmyadmin" src="images/insertManySm.png" alt="phpmyadmin1"></img>
      <h4 class="phpmyadmintxt"> In order to insert into a collection in node, you need this code above. This is also worth noting that if you are doing one
      entry, you need to the use the insertOne command.</h4>
      <a target="_blank" href="images/findOne.png"><img class="phpmyadmin" src="images/findOneSm.png" alt="MySql2"></img></a><br class="phpmyadmin"><br class="phpmyadmin">
      <a target="_blank" href="images/findMany.png"><img class="phpmyadmin" src="images/findManySm.png" alt="Workbench1"></img></a><br class="phpmyadmin"><br class="phpmyadmin">
      <a target="_blank" href="images/findFields.png"><img class="phpmyadmin" src="images/findFieldsSm.png" alt="Workbench1"></img></a>
      <h4 class="phpmyadmintxt"><b>Click the images above to have a larger image.</b> <br class="phpmyadmin">These images are how you find entries. The first command
      is the generic find one command that gives you everything in the first entry. The second image is the generic find command that gives you everything in all
      of the entries. The third one is how you specify fields with 0 being hidden and 1 being shown. There also can't be a mix of 1s and 0s excluding _id.</h4>
    </div>
    <div id="classmates">
      <h3>Here are my other projects</h3>
      <h4>Return to the <a href="../../index.php">main page</a></h4>
    </div>
    <div id="about">
      <h3 class="projectHead" id="Workbenchtop">How to use the Mongodb command prompts</h3>
      <img class="Workbench" src="images/cmpMongo.png" alt="ERD"></img>
      <h4 class="Workbenchtxt">This is how you open the mongo command line.</h4>
      <img class="Workbench" src="images/cmpShowDbs.png" alt="Workbench1"></img>
      <h4 class="Workbenchtxt">This is how you see databases, but if a database has nothing in it, it will not appear.</h4>
      <img class="Workbench" src="images/cmpCreateCollection.png" alt="Workbench2"></img>
      <h4 class="Workbenchtxt">This is how you use a database. If a database has been created it will automatically create it.</h4>
      <img class="Workbench" src="images/cmpInsertSm.png" alt="Workbench3"></img>
      <h4 class="Workbenchtxt">This is how you insert into a table. If you are inserting into a collection that hasn't been created, it will be created.</h4>
      <img class="Workbench" src="images/cmpCollection.png" alt="Workbench4"></img>
      <h4 class="Workbenchtxt">This is how you show collections.</h4>
      <img class="Workbench" src="images/cmpFindSm.png" alt="Workbench5"></img>
      <h4 class="Workbenchtxt">This is how you use the find command. You can also use the commands show in the node insert section.</h4>
      <img class="Workbench" src="images/cmpUpdate.png" alt="Workbench6"></img>
      <h4 class="Workbenchtxt">This is the general update command that also lets you add fields.</h4>
      <img class="Workbench" src="images/cmpColUpdate.png"></img>
      <h4 class="Workbenchtxt">This is how you update a entry in a specific field.</h4>
      <img class="Workbench" src="images/cmpColname.png"></img>
      <h4 class="Workbenchtxt">This is how you change field names.</h4>
      <img class="Workbench" src="images/cmpUnset.png"></img>
      <h4 class="Workbenchtxt">This is how you remove a fields from an entry.</h4>
      <hr class="Workbenchtxt">
      <h4 class="Workbenchtxt">Here is some example code that I used with these commands</h4>
      <img class="Workbench" src="images/exampleInsert.png"></img>
      <h4 class="Workbenchtxt">This is how I added entries into the collection</h4>
      <img class="Workbench" src="images/command.png"></img>
      <img class="Workbench" src="images/find.png"></img>
      <img class="Workbench" src="images/selective.png"></img>
      <h4 class="Workbenchtxt">These are all of the commands that I used to find display entries both selectivly and generally.</h4>
      <hr class="Workbenchtxt">
      <a target="_blank" href="images/commandArray.png"><img class="Workbench" src="images/commandArraySm.png"></img></a>
      <h4 class="Workbenchtxt"><b>Click the image above to have a larger image.</b> <br class="Workbenchtxt">This is how we used an array to allow a customer to have multiple animals</h4>
      <img class="Workbench" src="images/arrayFind.png"></img>
      <h4 class="Workbenchtxt">This is what it looks like</h4>
      <hr class="Workbenchtxt">
      <h4 class="Workbenchtxt"><b>Special Uses</b></h4>
      <img class="Workbench" src="images/mongoAnd.png"></img>
      <h4 class="Workbenchtxt">This is how you do an "and" statement in mongo DB. ("or" works in the same way). This works by the and statement being in the 
      filter part of find(). Then the different requirements are shown via the curly brackets that are in the square brackets.</h4>
      <img class="Workbench" src="images/mongoRegex.png"></img>
      <h4 class="Workbenchtxt">This is how you use regular expressions in mongo DB. This show results for dogs with names that have a "ac" in their name.
      This works by having the forward slashes indictating the use of regular expressions. the ".*" means that anything or nothing could be in those spaces,
       and the "ac" are literal characters.</h4>
    </div>
  </div>
</div>
</body>
</html>
