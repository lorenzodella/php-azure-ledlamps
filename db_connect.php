<?php
	# ----------- variabili Globali --------
	//ini_set('display_errors','On'); error_reporting(E_ALL); // set errori php

	$host = "mysql-lorenzodellamatera.mysql.database.azure.com";
	$dbUser = "lorenzodellamatera";
	$dbPwd  = "D_ellamateral_0";
	$dbName	  = "ledlamps";

	mysqli_ssl_set($conn,NULL,NULL, "/var/www/html/DigiCertGlobalRootCA.crt.pem", NULL, NULL);
	$con=mysqli_connect($host, $dbUser, $dbPwd, $dbName);
    if(!$con)
    {
        die("Connection falied".mysqli_connect_error());
    }
	//echo "Connected successfully";
?>