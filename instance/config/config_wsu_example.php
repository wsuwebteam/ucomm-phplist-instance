<?php

// what is your Mysql database server hostname
$database_host = 'localhost';

// what is the name of the database we are using
$database_name = 'phplistdb';

// what user has access to this database
$database_user = 'phplist';

// and what is the password to login to control the database
$database_password = 'phplist';

// if you have an SMTP server, set it here. Otherwise it will use the normal php mail() function
//# if your SMTP server is called "smtp.mydomain.com" you enter this below like this:
//#
//#     define("PHPMAILERHOST",'smtp.mydomain.com');

define('PHPMAILERHOST', 'localhost');
define('PHPMAILERPORT',2500);
define('PHPMAILER_SECURE',false);


// if TEST is set to 1 (not 0) it will not actually send ANY messages, but display what it would have sent
// this is here, to make sure you edited the config file and mails are not sent "accidentally"
// on unmanaged systems

define('TEST', 0);