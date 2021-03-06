<?php

require __DIR__ . '/config_wsu.php';

/*

==============================================================================================================
*
* Settings for handling bounces
*
* This section is OPTIONAL, and not necessary to send out mailings, but it is highly recommended to correctly
* set up bounce processing. Without processing of bounces your system will end up sending large amounts of
* unnecessary messages, which overloads your own server, the receiving servers and internet traffic as a whole
*
==============================================================================================================

*/

// Message envelope.

// This is the address that most bounces will be delivered to
// Your should make this an address that no PERSON reads
// but a mailbox that phpList can empty every so often, to process the bounces

// $message_envelope = 'listbounces@yourdomain';

// Handling bounces. Check README.bounces for more info
// This can be 'pop' or 'mbox'
$bounce_protocol = 'pop';

// set this to 0, if you set up a cron to download bounces regularly by using the
// commandline option. If this is 0, users cannot run the page from the web
// frontend. Read README.commandline to find out how to set it up on the
// commandline
define('MANUALLY_PROCESS_BOUNCES', 1);

// when the protocol is pop, specify these three
$bounce_mailbox_host = 'localhost';
$bounce_mailbox_user = 'popuser';
$bounce_mailbox_password = 'password';

// the "port" is the remote port of the connection to retrieve the emails
// the default should be fine but if it doesn't work, you can try the second
// one. To do that, add a # before the first line and take off the one before the
// second line
$bounce_mailbox_port = '110/pop3/notls';
//$bounce_mailbox_port = "110/pop3";

// it's getting more common to have secure connections, in which case you probably want to use
//$bounce_mailbox_port = "995/pop3/ssl/novalidate-cert";

// when the protocol is mbox specify this one
// it needs to be a local file in mbox format, accessible to your webserver user
$bounce_mailbox = '/var/mail/listbounces';

// set this to 0 if you want to keep your messages in the mailbox. this is potentially
// a problem, because bounces will be counted multiple times, so only do this if you are
// testing things.
$bounce_mailbox_purge = 1;

// set this to 0 if you want to keep unprocessed messages in the mailbox. Unprocessed
// messages are messages that could not be matched with a user in the system
// messages are still downloaded into phpList, so it is safe to delete them from
// the mailbox and view them in phpList
$bounce_mailbox_purge_unprocessed = 1;

// how many bounces in a row need to have occurred for a user to be marked unconfirmed
$bounce_unsubscribe_threshold = 5;

// choose the hash method for password
// check the extended config for more info
// in most cases, it is fine to leave this as it is
define('HASH_ALGO', 'sha256');

// define the amount of emails you want to send per period. If 0, batch processing
// is disabled and messages are sent out as fast as possible
define('MAILQUEUE_BATCH_SIZE', 14);

// define the length of one batch processing period, in seconds (3600 is an hour)
define('MAILQUEUE_BATCH_PERIOD', 2);

// If you set up your system to send the message automatically (from commandline),
// you can set this value to 0, so "Process Queue" will disappear from the site
// this will also stop users from loading the page on the web frontend, so you will
// have to make sure that you run the queue from the commandline
// check README.commandline how to do this
define('MANUALLY_PROCESS_QUEUE', 1);
