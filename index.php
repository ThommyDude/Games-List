<?php
    include "./incl/db_connect.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="./css/main.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="./js/script.js"></script>
        <title>Games List</title>
    </head>
    <body>
        <div id="menuHolder">
            <select id="selector">
                <option value="all" selected="selected">All Games</option>
                <option value="steam">Games on Steam</option>
                <option value="uplay">Games on Uplay</option>
                <option value="installed">Games Currently Installed</option>
                <option value="playing">Games Currently Being Played</option>
            </select>
        </div>
        <div id="listHolder">
            <table id="games">
            </table>
        </div>
    </body>
</html>