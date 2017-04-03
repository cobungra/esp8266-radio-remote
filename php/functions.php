<?php
//$action="";
$action = $_GET['action'];
//Extract minimal for OLED ESP8266
if ($action == "start" ) {
exec('mpc load oled');  // Substitute your own playlist
    exec ('mpc play');
}
if ($action == "next") { //Also adjust the playing time to 40 minutes

    exec('mpc next');
    exec ('mpc play');
    }

if ($action == "stop") {
    exec('mpc clear');
    echo "Stopped and Cleared";
    exec('mpc stop');
    }

sleep(3); //Wait until station is available
$playing = exec('mpc current');
$title = shell_exec('mpc --format "%title%" current');
$playinfo = shell_exec('mpc --format "[[%artist%  - ]%title%]" current');
echo $playing;


?>
