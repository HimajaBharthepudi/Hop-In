<?php
	include("configure.php");
	$connection = mysql_connect($host, $username, $password) or die ("Unable to connect");

	$sql = 'CREATE TABLE `airplane` ('
          .'(id int(20) AUTO_INCREMENT,'
          .'type varchar(10) NOT NULL,'
          .'company varchar(20) NOT NULL,'
          .'PRIMARY KEY (`ID`)) ENGINE=InnoDB DEFAULT CHARSET=latin1';
/*!40101 SET character_set_client = @saved_cs_client */;
	mysql_query($sql);
	$sql = 'CREATE TABLE `airport` ('
           .'`code` varchar(10) NOT NULL,'
           .'`name` varchar(50) NOT NULL,'
           .'`city` varchar(20) NOT NULL,'
           .'`state` varchar(20) NOT NULL,'
           .'`country` varchar(20) NOT NULL',
           .'PRIMARY KEY (`code`)) ENGINE=InnoDB DEFAULT CHARSET=latin1';
	mysql_query($sql);
   
?>