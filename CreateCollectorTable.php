<?php

// godaddy settings
// $host = "pEVM.db.11021264.hostedresource.com";
// $user = "pevmadmin";
// $pass = "N0drepus?";

//  aLTER Table people add ProjectID int after PortfolioID;



$host = "localhost";
$user = "dritchie1961";
$pass = "N0drepus";
$database = "c2cnetworks";

$port = '3306';

$link = mysqli_connect ( $host, $user, $pass , $database, $port) or die ( "unable to connect to MySQL" );
// mysqli_select_db ( $database ) or die ( "unable to select DB" );

$res = mysqli_query ($link, "CREATE TABLE if not exists collector (
		peopleid INT AUTO_INCREMENT NOT NULL,
		peopleuserid CHAR(45),
		peoplepassword CHAR(45),
		peoplefirstname CHAR(45),
		peoplelastname CHAR(45),
		peoplestatus CHAR(45),
        peopleregion CHAR(50),
        peoplecountry CHAR(50),
        peopleprovstate CHAR(50),
		peoplecity CHAR(45),
		peopleaddress1 CHAR(45),
		peopleaddress2 CHAR(45),
		peoplepostalcodezip CHAR(45),
		peoplephonenumber1 CHAR(20),
		peopleemailaddress1 CHAR(45),
		PRIMARY KEY(peopleid))" ) or die ( "unable to create Table" );

mysqli_close ($link);
echo "done";

?>