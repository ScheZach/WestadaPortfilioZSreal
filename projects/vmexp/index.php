<!DOCTYPE html>
<html>
<head>
  <title>Zachary S VM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/vm.css">
  <script>
    $(document).ready(function(){
      $("#basescreen").hide();
      $("#downloadVM").hide();
      $("#VMBasics").hide();
      $("#Vmbasic").click(function(){
        $("#basescreen").slideToggle();
        $("#downloadVM").slideToggle();
        $("#VMBasics").slideToggle();
      });

      $("#newScreen").hide();
      $("#NewSize").hide();
      $("#newDisk").hide();
      $(".newText").hide();
      $("#NewVm").click(function(){
        $("#newScreen").slideToggle();
        $("#NewSize").slideToggle();
        $("#newDisk").slideToggle();
        $(".newText").slideToggle();
      });

      $("#importScreen").hide();
      $("#importText").hide();
      $("#ImportHead").click(function(){
        $("#importScreen").slideToggle();
        $("#importText").slideToggle();
      });

      $(".exportText").hide();
      $("#Exportmain").hide();
      $("#exportFormat").hide();
      $("#offsite").hide();
      $("#exportHead").click(function(){
        $(".exportText").slideToggle();
        $("#Exportmain").slideToggle();
        $("#exportFormat").slideToggle();
        $("#offsite").slideToggle();
      });

      $(".cloneText").hide();
      $("#clone1").hide();
      $("#clone2").hide();
      $("#clone3").hide();
      $("#cloneHead").click(function(){
        $(".cloneText").slideToggle();
        $("#clone1").slideToggle();
        $("#clone2").slideToggle();
        $("#clone3").slideToggle();
      });

    });
  </script>
</head>
<body>
  <div class="grid-container">
    <div id="header">
      <img id="Westada" class="schoolImg" src="../../images/WestAdaThumb.png" alt="Westada"></img>
      <img id="Centennial" class="schoolImg" src="../../images/logo_centennial-thumb.png" alt="Centennial"></img>
      <div id="headText">
        <h1>Welcome to a VM how-to site</h1>
        <h2> Below are the steps to do many things with VMs. Please click on the headers of the divs to show the instructions.</h2>
      </div>
      <br>
    </div>
    <div id="Software" class="projects">
      <h3 id="Vmbasic" class="projectHead">How to install software</h3>
      <img src="images/baseScreen.png" id="basescreen" class="schoolImg" alt="basescreen"></img><br>
      <img src="images/downloadVM.png" id="downloadVM" class="schoolImg" alt="downloadVM"></img><br>
      <h4 id="VMBasics">For installing the VM software, you need to go to oracle's websites and go to the main VirtualBox home page. From there you can download the software.
      When you open the program you can do 4 main things with the first being hitting the start button to start your VM. When downloading software inside the
      VM, you can either use the command "sudo apt install program_name" (this doesn't work on Windows) or you go to the programs website and download it from
       there.</h4>
    </div>
    <div id="AdvComp" class="projects">
      <h3 id="NewVm" class="projectHead">How to create a new VM</h3>
      <br><img src="images/newScreen.png" id="newScreen" class="schoolImg" alt="newScreen"></img><br>
      <h4 class="newText">To create a new VM you first need to click the new icon. Clicking that will bring you to this screen, and you will name the VM and select what kind of
        OS you are running.</h4><br>
      <img src="images/NewSize.png" id="NewSize" class="schoolImg" alt="NewSize"></img><br>
      <h4 class="newText">Use the slider to allocate your amount of memory.</h4><br>
      <img src="images/newDisk.png" id="newDisk" class="schoolImg" alt="newdisk"></img><br>
      <h4 class="newText">From here you create a new disk. Each kind of disk has different advantages and disadvantages.</h4>
    </div>
    <div id="AdvWeb" class="projects">
      <h3 id="ImportHead" class="projectHead">How to Import</h3>
      <br><img src="images/snapshotMain.png" id="importScreen" class="schoolImg" alt="importScreen"></img><br>
      <h4 id="importText">In order to take a snapshot, you need to switch to the snapshot tab. Then hit the take button and name your new snapshot.</h4><br>
    </div>
    <div id="export" class="projects">
      <h3 id="exportHead" class="projectHead">How to export</h3>
      <br><img src="images/Exportmain.png" id="Exportmain" class="schoolImg" alt="Exportmain"></img><br>
      <h4 class="exportText">This is how you select which VM you want to export.</h4>
      <br><img src="images/exportFormat.png" id="exportFormat" class="schoolImg" alt="exportFormat"></img><br>
      <h4 class="exportText">Here you can select the type of ova and start the export</h4>
      <br><img src="images/offsite.png" id="offsite" class="schoolImg" alt="offsite"></img><br>
      <h4 class="exportText">After exporting save your ova to an offsite place. (like Google Drive, Microsoft OneDrive, GitHub, etc.)</h4>
    </div>
    <div id="classmates">
      <h3>Click here to <a href="../../index.php">return</a> to the main page.</h3><br>
      <h3>Here are other classmates I worked with on this project</h3>
      <h4><a href="http://www.westada.tech/b2/ethana">Ethan A</a></h4>
      <h4><a href="http://www.westada.tech/b2/joesphm">Joesph M</a></h4>
    </div>
    <div id="about">
      <h3 id="cloneHead" class="projectHead">How to clone a vm</h3>
      <br><img src="images/clone1.png" id="clone1" class="schoolImg" alt="clone1"></img><br>
      <h4 class="cloneText">Right click on vm and select clone.</h4>
      <br><img src="images/clone2.png" id="clone2" class="schoolImg" alt="clone2"></img><br>
      <h4 class="cloneText">Here you can select the type of vm</h4>
      <br><img src="images/clone3.png" id="clone3" class="schoolImg" alt="clone3"></img><br>
      <h4 class="cloneText">Here you can select how much you want to clone. Then hit clone to start cloning</h4>
    </div>
  </div>
</body>
</html>
