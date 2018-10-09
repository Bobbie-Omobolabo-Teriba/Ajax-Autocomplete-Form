<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Form Display</title>
        <link href="css/main.css" rel="stylesheet" type="text/css"/> 
        <link rel="icon" href="img/favIcon.png" type="image/x-icon"/>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </head>
    <body class="ui-widget">
        <div id="form-main">
            <div id="form-div">
                <h1>Form Display</h1>
                    <hr>
                <h4>First Name:</h4>
                <p><?php echo $_POST["firstname"]; ?></p>
                <br>
                <h4>SurName:</h4>
                <p><?php echo $_POST["surname"]; ?></p>
                <br>
                <h4>Street 1:</h4>
                <p><?php echo $_POST["street1"]; ?></p>
                <br>
                <h4>Street 2:</h4>
                <p><?php echo $_POST["street2"]; ?></p>
                <br>
                <h4>Country:</h4>
                <p><?php echo $_POST["country"]; ?></p>
                <br>
                <h4>County:</h4>
                <p><?php echo $_POST["county"]; ?></p>
                <br>
                <h4>Town:</h4>
                <p><?php echo $_POST["town"]; ?></p>
                
                <button id="button-blue3" onclick="window.location.href='index.php'">Return</button>
            </div>
        </div>
    </body>
</html>
