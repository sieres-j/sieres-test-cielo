###################
What is This?
###################

This application is a basic CRUD application written in PHP with the Codeigniter Framework.

The application allows the user to:

1. Create a new Account for a User with the following basic information:
	a. Name
	b. Email
	c. Date of Birth
	d. Favorite Color

2. View a list of all users
3. Edit existing users
4. Soft-Delete Existing users

While simple, it is a demonstration of my abilities to create a CRUD application in Codeigniter, while applying MVC
concepts.

Included with this is also:

1. An SQL dump of a MySQL Database
2. All Views and Controllers

*******************
Release Information
*******************

PLEASE NOTE:

1. Host this on a machine with internet connectivity, so the CDN assets can load. (These were included for speed of development, would not be used in production this way).

2. Go to the application/config/database.php file to configure the database. It is cuurrently configured for what the settings are on my machine, where the default user is root, and password is cielotest.

3. You must Modify /application/config/config.php to set your base_url to whatever the base_url is on your LAMP stack. 
	In my case, it is: 'http://localhost:80/sieres-test-cielo-master'.
	
	You can find this setting in /application/config/config.php on line 26: 
	$config['base_url'] = 'YOUR BASE URL HERE';


**************************
Changelog and New Features
**************************

This is the initial deployment.

*******************
Server Requirements
*******************

PHP version 5.6 or newer is recommended.

It should work on 5.3.7 as well, but it is strongly advised you NOT run
such old versions of PHP, because of potential security and performance
issues, as well as missing features.

************
Installation
************

1. Add this folder to your Lamp Stack's Document Root.
2. Turn on the Lamp Development Server.
3. Insert SQL Dump into your Preferred Database. (Found in Application root folder as /cielo_test.sql).
4. Modify application/config/database.php with your Database credentials.
5. Modify the application/config/config.php file on Line 26 with your base_url for the LAMP stack. (Refer to Release information for more details)
6. Access it through your browser.

Note: Please make sure the machine you are running this on is connected to the internet!



***************
Acknowledgement
***************

I'd like to thank you all for taking the time to interview me, and to review this code together.

