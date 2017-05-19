# esp8266-radio-remote
This project makes a small remote control for an MPD music player.
It calls php scripts on the mpd server using mpc and displays music summaries and limited control via three pushbuttons 
and a 1" OLED screen.

Features
- Displays station and track playing information on the screen and scrolls if necessary
- 'Next" pushbutton loads the next track of slected playlist
- 'Stop' pushbutton stops the mpd player and puts remote to esp.deepsleep
- Each button has short/medium/ long press to give many options
- DIP switches to seect different music servers
- 'OTA' pushbutton to allow updates to the device via Arduino IDE
- Goes to esp.deepsleep after a 3 minute duty cycle.


![screen shot 2017-05-19 at 3 08 16 pm](https://cloud.githubusercontent.com/assets/25142892/26234072/3c4f98ac-3ca5-11e7-855a-f958f2c49b4b.png)
