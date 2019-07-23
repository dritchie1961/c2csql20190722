<?php

$host = "localhost";
$user = "dritchie1961";
$pass = "N0drepus";
$database = "c2cnetworks";

$port = '3306';

$link = mysqli_connect ( $host, $user, $pass , $database, $port) or die ( "unable to connect to MySQL" );
// mysqli_select_db ( $database ) or die ( "unable to select DB" );

mysqli_query ( $link, "CREaTE TaBLE if not exists lppasset (


    lppassetid INT aUTO_INCREMENT NOT NULL, 
    peopleid INT NOT NULL,
    type char(45),
    region CHaR(45),
    country CHaR(45),
    federation CHaR(45),
    series CHaR(45),
    subseries CHaR(45),
    description  TEXT(1000),
    assetyear CHaR(4),
    denomination CHaR(45),
    reversepic CHaR(45),
    obversepic CHaR(45),
    dateadded Date,
    status CHaR(45),
    bprice int,
    comments  TEXT(1000),
    aname CHaR(45),
    anumber CHaR(45),
    agrade CHaR(45),
    key (peopleid),
    PRIMaRY KEY(lppassetid))" ) or die ( "unable to create Table" );

mysqli_close ($link);

echo "done";
?>