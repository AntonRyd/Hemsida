<?php
session_start();
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'sqlXXX.epizy.com');
define('DB_USERNAME', 'epiz_28592891');
define('DB_PASSWORD', 'ja61Qq4P7w');
define('DB_NAME', 'cykeleliten');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Kollar connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
