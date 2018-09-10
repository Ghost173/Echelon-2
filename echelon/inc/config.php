<?php
if (!empty($_SERVER["SCRIPT_FILENAME"]) && "config.php" == basename($_SERVER["SCRIPT_FILENAME"]))
		die ("Please do not load this page directly. Thanks!"); // do not edit

##### Start Editing From below here #####
define("DB_CON_ERROR_SHOW", TRUE); // show DB connection error if any (values: TRUE/FALSE)
define("GRAVATAR", TRUE); // show gravatars image in header (values: TRUE/FALSE)
define("DB_B3_ERROR_ON", TRUE); // show detailed error messages on B3 DB query failure (values TRUE/FALSE)
#############
## General ##
$path = "/echelon-v2/"; // path to echelon from root of web directory. include starting and trailing (eg. "/echelon/" )
define("PATH", $path);

## Connection info to connect to the database containing the echelon tables
define("DBL_HOSTNAME", "localhost"); // hostname of where the server is located
define("DBL_USERNAME", "echelon"); // username that can connect to that DB
define("DBL_PASSWORD", "echelonb3"); // Password for that user
define("DBL_DB", "echelon-v2"); // Password for that user

#############################
///// IGNORE BELOW HERE /////
## Echelon Version ##
define("ECH_VER", "v.2.0b");

define("SALT", 'oDNF6hEzQUB%e*IW'); // do not change ever, this is salt for hashes

$supported_games = array( // supported games
	"q3a" => "Quake 3 Arena", 
	"cod" => "Call of Duty", 
	"cod2" => "Call of Duty 2", 
	"cod4" => "Call of Duty 4 MW", 
	"cod5" => "Call of Duty: World at War", 
	"iourt41" => "Urban Terror", 
	"wop" => "World of Padman"
);

// URL to check for updates with
define("VER_CHECK_URL", "http://echelon.bigbrotherbot.net/version.txt");

// Do not touch this varible
define("INSTALLED", 'yes');

// Do not touch this varible either
define("SES_SALT", 'zIoq%P');

$ech_log_path = getenv("DOCUMENT_ROOT").PATH."lib/log.txt";
define("ECH_LOG", $ech_log_path); // location of the Echelon Log file
unset($ech_log_path);