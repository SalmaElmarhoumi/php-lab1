<?php
phpinfo();

define('WEBSITE_NAME', 'First PHP Lab <br>');
echo WEBSITE_NAME;
// Server name
$serverName = $_SERVER['SERVER_NAME'];

// Server address
$serverAddress = $_SERVER['SERVER_ADDR'];

// Server port
$serverPort = $_SERVER['SERVER_PORT'];

// Current filename
$filename = $_SERVER['SCRIPT_FILENAME'];

// Current script path
$scriptPath = $_SERVER['SCRIPT_NAME'];

// Display information
echo "Server Name: $serverName<br>";
echo "Server Address: $serverAddress<br>";
echo "Server Port: $serverPort<br>";
echo "Current Filename: $filename<br>";
echo "Current Script Path: $scriptPath<br>";


$brotherAge = 10;
switch (true) {
    case ($brotherAge < 5):
        echo "Stay at home.";
        break;

    case ($brotherAge == 5):
        echo "Go to kindergarten.";
        break;

    case ($brotherAge >= 6 && $brotherAge <= 12):
        echo "Go to grade: xxx";
        break;

    default:
        echo "Age is not within the specified ranges.";
        break;
}
?>