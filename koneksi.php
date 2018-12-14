<?php

	$con = mysqli_connect("localhost" ,"root","pesut","db_dokter"); 
	if (!$con) {
	    die("Connection failed: " . mysqli_connect_error());
	}

?>