# ttnwebhooktophp
This repository provides a webhook integration to mysql storage from thethingsstack v3 using PHP. You can be able to store data directly to your MySQL database 
from TheThingsStack once your sensors have transmitted data to the TTS (formerly TTN). The code demonstrates storage of GPS information from your sensor node to your database.
An ltracker.sql is a mysql dump file of the database I have used for this demonstration. More information can be stored based on your needs as per the TTS log by editing the insert_gps.php
file. In this case, I have only selected the decoded_payload of the GPS information transmitted. The DBconfig.php is your configuration file for your host and database.
