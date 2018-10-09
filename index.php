<?php
$countryKey = filter_input(INPUT_POST, "countryKey");
$countyKey = filter_input(INPUT_POST,"countyKey");
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file,  choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Auto-complete Form</title>
        <link href="css/main.css" rel="stylesheet" type="text/css"/> 
        <link rel="icon" href="img/favIcon.png" type="image/x-icon"/>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="js/main_js.js" type="text/javascript"></script>
        <style>
            #county
            {
                margin-bottom: 20px;  
                margin-top: 20px;
            }
        </style>
    </head>
    <body class="ui-widget">
        <div id="form-main">
            <div id="form-div">
                <form class="form" id="form1" action="display.php" method="post">
                    <h1>Address Form</h1>
                    <hr>
                    <br>
                    <input name="firstname" type="text" placeholder="First Name" id="firstname" />
                    <br>
                    <br>
                    <input name="surname" type="text" placeholder="Surname" id="surname" />
                    <br>
                    <br>
                    <input name="street1" type="text" placeholder="Street Line 1" id="street1" />
                    <br>
                    <br>
                    <input name="street2" type="text" placeholder="Street Line 2" id="street2" />
                    <br>
                    <br>
                    <input name="country" type="text" placeholder="Country" id="country" />
                    
                    <input name="county" type="text" placeholder="County" id="county" />

                    <select name="town" id="town">
                        <option>Select Town</option>
                    </select>
                        
                    <br>
                    <br>
                    <br>
                    <div class="submit">
                        <button type="submit" value="Login" id="button-blue">Login</button>
                        <button type="reset" value="Reset" id="button-blue2">Reset</button>
                    </div>
                </form>
            </div>
            <br>
            <br>
        </div>
    </body>
</html>







