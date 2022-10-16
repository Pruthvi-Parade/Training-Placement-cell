<?php
    // Enter your host name, database username, password, and database name.
    // If you have not set database password on localhost then set empty.
    $db= mysqli_connect("localhost","root","","tandp");
    // Check connection
    if (mysqli_connect_error()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
	
    }
	else
		//echo "connected successfully";
?>