<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DOM time clock</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/DOMinator.css">
</head>
<body>
    <div class="grid-container">
    <div id="header">
    <h1>DOM-inator</h1>
    <h2>Created by Zachary Scherer</h2>
    </div>
    <div id="classmates">
      <h3><b><i>Here are my other projects</i></b></h3>
      <h4>Return to the <u><a href="../../index.php">main page</a></u></h4>
    </div>
    <div id="content">
        <div id="page"></div>
        <hr class="my-4">
        <div id="wrap">
        <div class="card bg-dark m-auto w-75">
            <h5 class="card-header text-light">
                <span class="h1 text-success font-italic">JavaScript</span> DOM-inator
                <span class="btn btn-sm btn-danger float-right" onclick="hideElement();">X</span>
            </h5>
            <div class="card-body row">
                <div class="input-group">
                    <input type="text" class="col-2" placeholder="tagName">
                    <input type="text" class="col-10" placeholder="className">
                    <input type="text" class="col-2" placeholder="id">
                    <input type="text" class="col-8" placeholder="innerHTML">
                    <input type="text" class="col-2" placeholder="parent id">
                </div>
                <div class="btn-group mt-2">
                    <span class="btn btn-warning" onclick="CreateElement();">Create New Element</span>
                    <span class="btn btn-danger" onclick="RemoveElement();">Remove Last Element</span>
                    <span class="btn btn-outline-secondary" onclick="reset()">Reset</span>
                </div>
            </div>
        </div>
        </div>
        <hr class="my-4">
        <div class="explain">
            <h1>explain</h1>
        </div>
    </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>
