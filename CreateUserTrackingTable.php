<?php
$host = "localhost";
$user = "dritchie1961";
$pass = "N0drepus";
$database = "c2cnetworks";

$port = '3306';

$link = mysqli_connect ( $host, $user, $pass , $database, $port) or die ( "unable to connect to MySQL" );
// mysqli_select_db ( $database ) or die ( "unable to select DB" );

mysqli_query ( $link, "CREATE TABLE if not exists usertracking (
		loginid  INT AUTO_INCREMENT NOT NULL, 
   		peopleuserid CHAR(45),
    	logindate DateTime,
		status CHAR(45),
		PRIMARY KEY(loginid))" ) or die ( "unable to create Table" );
mysqli_close ($link);
echo "done";
?>