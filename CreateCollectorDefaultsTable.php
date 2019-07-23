<?php

$host = "localhost";
$user = "dritchie1961";
$pass = "N0drepus";
$database = "c2cnetworks";

$port = '3306';

$link = mysqli_connect ( $host, $user, $pass , $database, $port) or die ( "unable to connect to MySQL" );
// mysqli_select_db ( $database ) or die ( "unable to select DB" );

mysqli_query ( $link, "CREATE TABLE if not exists collectordefaults (
    
    peopleid INT,    
    dcode char(5), 
    did char(50),
    type char(45),
    region Char(45),
    country Char(45),
    federation Char(45),
    series Char(45),
    subseries Char(45),
    key (peopleid),
    PRIMARY KEY(did))" ) or die ( "unable to create Table" );

mysqli_close ($link);

echo "done";

/*

mysqli_query ( $link, "CREATE TABLE if not exists collectordefaults (
    
    
    collectordefaultid INT AUTO_INCREMENT NOT NULL,
    peopleid INT,
    defaultnum INT, 
    type char(45),
    region CHaR(45),
    country CHaR(45),
    federation CHaR(45),
    series CHaR(45),
    subseries CHaR(45),
    key (peopleid),
    PRIMaRY KEY(collectordefaultid))" ) or die ( "unable to create Table" );




*/





?>