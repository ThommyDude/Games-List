<?php
    include "./db_connect.php";
    if ($_SERVER['REQUEST_METHOD'] !== "POST")
    {
        header("HTTP/1.0 405 Method Not Allowed");
        header("Allow: POST");
        exit();
    }

    if(!isset($_POST["select"]))
    {
        $_POST["select"] = "all";
    }
    $what = $_POST["select"];

    switch ($what) {
        case 'steam':
            $query = 'SELECT * FROM games WHERE platform = "Steam";';
            break;
        
        case 'uplay':
            $query = 'SELECT * FROM games WHERE platform = "Uplay";';
            break;

        case 'installed':
            $query = 'SELECT * FROM games WHERE installed = "Installed";';
            break;

        case 'playing':
            $query = 'SELECT * FROM games WHERE playing = "Playing";';
            break;
        
        default:
            $query = 'SELECT * FROM games;';
            break;
    }
    
    $games = $conn->query($query);

    if($games->num_rows > 0)
    {
        while($row = $games->fetch_assoc())
        {
            echo "<tr><td>" . $row["id"] . "</td><td>" . $row["title"] . "</td><td>" . $row["platform"] . "</td><td>" . $row["done"] . "</td><td>" . $row["installed"] . "</td><td>" . $row["playing"] . "</td></tr>";
        }
    }
?>