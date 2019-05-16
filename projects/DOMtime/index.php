<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DOM time clock</title>
    <link rel="stylesheet" href="css/DOMtime.css">
    <script src="js/DOMtime.js"></script>
</head>
<body onload='renderTime();'>
    <h1>DOM Start: Zachary S: April 2019</h1>
    <h4>Return to the <a href="../../index.php">main page</a></h4>
    <div id="clockDisplay" class="container"></div>
</body>
<script>
    let getBody = document.body;

    let newElement = document.createElement("h1");

    let date = new Date();
    let currentHour = date.getHours();
    let currentDay = date.getDay();

    let createTxtMsg;
    
   if (currentDay == 0 || currentDay == 6) {
        createTxtMsg = "There is no school today";
   } else {
    if (currentHour >= 0 && currentHour < 7) {
        createTxtMsg = "School is currently not in session";
    } else if (currentHour >= 7 && currentHour < 9) {
        createTxtMsg = "You're in first period";
    } else if (currentHour >= 9 && currentHour < 10) {
        createTxtMsg = "You're in second period";
    } else if (currentHour >= 10 && currentHour < 12) {
        createTxtMsg = "You're in the lunch hour";
    } else if (currentHour >= 12 && currentHour < 13) {
        createTxtMsg = "You're in third period";
    } else if (currentHour >= 13 && currentHour < 15) {
        createTxtMsg = "You're in fourth period";
    } else if (currentHour >= 15 && currentHour < 24) {
        createTxtMsg = "School is currently not in session";
    } else {
        createTxtMsg = "Time doesn't exist anymore";
    }
   }

    let createEleTxt = document.createTextNode(createTxtMsg);

    newElement.appendChild(createEleTxt);

    getBody.appendChild(newElement);

    newElement.setAttribute("class", "welcome");

    newElement.style.cssText = "text-align: center; font-size: 1.4em; font-family: arial;";

</script>
</html>
