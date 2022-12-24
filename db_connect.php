<?php
	# ----------- variabili Globali --------
	//ini_set('display_errors','On'); error_reporting(E_ALL); // set errori php

	$host = "mysql-lorenzodellamatera.mysql.database.azure.com";
	$dbUser = "lorenzodellamatera";
	$dbPwd  = "D_ellamateral_0";
	$dbName	  = "ledlamps";

	$con = mysqli_init();
	mysqli_ssl_set($con,NULL,NULL, "ssl/DigiCertGlobalRootCA.crt.pem", NULL, NULL);
	mysqli_real_connect($host, $dbUser, $dbPwd, $dbName, 3306, MYSQLI_CLIENT_SSL);
    if(!$con)
    {
        die("Connection falied".mysqli_connect_error());
    }
	echo "Connected successfully";
?>