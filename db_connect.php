<?php
	# ----------- variabili Globali --------
	//ini_set('display_errors','On'); error_reporting(E_ALL); // set errori php

	$host = "lorenzodellamatera.northeurope.cloudapp.azure.com";
	$dbUser = "root";
	$dbPwd  = "D_ellamateral_0";
	$dbName	  = "ledlamps";

	$con=mysqli_connect($host, $dbUser, $dbPwd, $dbName);
    if(!$con)
    {
        die("Connection falied".mysqli_connect_error());
    }
	//echo "Connected successfully";
?>