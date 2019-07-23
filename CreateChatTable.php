<?php


$host = "localhost";
$user = "dritchie1961";
$pass = "N0drepus";
$database = "c2cnetworks";
$port = '3306';

$link = mysqli_connect ( $host, $user, $pass , $database, $port) or die ( "unable to connect to MySQL" );
// mysqli_select_db ( $database ) or die ( "unable to select DB" );

mysqli_query ( $link, "CREaTE TaBLE if not exists c2cchat (
	chatid INT AUTO_INCREMENT NOT NULL,
    fromid int not null,
    toid int not null,
    lppassetid int not null,
    subject CHaR(100),
    datetime Date,
    description TEXT(1000),
    PRIMaRY KEY(chatid))" ) or die ( "unable to create Table" );

mysqli_close ($link);

echo "done";
?>
