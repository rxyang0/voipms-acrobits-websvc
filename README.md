# VoIP.ms Web Service API for Acrobits
A web service API for Acrobits Groundwire to interface with the VoIP.ms API

## Currently supported functions
- getBalance.php

## Usage

1. Enable your VoIP.ms API [here](https://voip.ms/m/api.php). Ensure that `0.0.0.0` is added to enabled IPs to disable IP whitelist.

2. Append `https://voipms-acrobits-websvc.herokuapp.com/` with your desired function, along with `?api_username=USER&api_password=PASS`, replacing USER and PASS with your VoIP.ms API credentials.  
   *USER and PASS need to be URL-encoded. Do so at this link: https://www.urlencoder.org/*

3. Add the URL to the "Web services custom balance checker box" under "Advanced settings" in your Groundwire SIP account.
   ![Groundwire web services custom balance checker box](https://github.com/premiumrich/voipms-acrobits-websvc/raw/master/images/groundwire-web-services-custom-balance-checker.jpg)

## Example
https://voipms-acrobits-websvc.herokuapp.com/getBalance.php?api_username=USER&api_password=PASS

## Screenshots
![Groundwire keypad showing balance at the top](https://github.com/premiumrich/voipms-acrobits-websvc/raw/master/images/groundwire-keypad.jpg)
