<?php

$host = "localhost";
$user = "dritchie1961";
$pass = "N0drepus";
$database = "c2cnetworks";

$port = '3306';

$link = mysqli_connect ( $host, $user, $pass , $database, $port) or die ( "unable to connect to MySQL" );
// mysqli_select_db ( $database ) or die ( "unable to select DB" );

$res = mysqli_query ($link, "CREATE TABLE if not exists c2cprovenance (
        provenanceid INT AUTO_INCREMENT NOT NULL,
        prvpeopleid INT,
        newpeopleid INT,
        lppassetid INT,
        type char(45),
        changedate DateTime,
        key (lppassetid),
		PRIMARY KEY(provenanceid))" ) or die ( "unable to create Table" );

mysqli_close ($link);
echo "done";

?>