<?php


$host = "localhost";
$user = "dritchie1961";
$pass = "N0drepus";
$database = "c2cnetworks";
$port = '3306';

$link = mysqli_connect ( $host, $user, $pass , $database, $port) or die ( "unable to connect to MySQL" );
// mysqli_select_db ( $database ) or die ( "unable to select DB" );

mysqli_query ( $link, "CREaTE TaBLE if not exists listdata (
    
    
    listentryid INT aUTO_INCREMENT NOT NULL,
    listid INT,
    listtype CHaR(100),
    listname CHaR(100),
    listitem CHaR(100),
    status CHaR(20),
    datecreated Date,
    dateclosed Date,
    PRIMaRY KEY(listentryid))" ) or die ( "unable to create Table" );

mysqli_close ($link);

echo "done";
?>
