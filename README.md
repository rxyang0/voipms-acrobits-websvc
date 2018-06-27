# VoIP.ms Web Service API for Acrobits
A web service API for Acrobits Groundwire SIP app that works with VoIP.ms API.

## Currently supported functions
- getBalance.php

## Usage
Append https://voipms-acrobits-websvc.herokuapp.com/ with your desired function, along with ?api_username=USER&api_password=PASS, replacing USER and PASS with your VoIP.ms API credentials. *USER and PASS need to be URL-encoded if there are special characters.*

Enable your VoIP.ms API at https://voip.ms/m/api.php. Ensure that 0.0.0.0 is added to enabled IPs to disable IP whitelist.

## Example
https://voipms-acrobits-websvc.herokuapp.com/getBalance.php?api_username=USER&api_password=PASS
