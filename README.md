# esp8266-radio-remote
This project makes a small remote control for an MPD music player.
It calls php scripts on the mpd server using mpc and displays music summaries and limited control via three pushbuttons 
and a 1" OLED screen.

Features
- Displays station and track playing information on the screen and scrolls if necessary
- 'Next" pushbutton loads the next track of slected playlist
- 'Stop' pushbutton stops the mpd player and puts remote to esp.deepsleep
- 'OTA' pushbutton to allow updates to the device via Arduino IDE
- Goes to esp.deepsleep after a 3 minute duty cycle.

![alt tag](https://cloud.githubusercontent.com/assets/25142892/24596836/42487880-1885-11e7-8862-dff2d4bf21eb.png)
