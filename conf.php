<?php
    //Configuration settings
    $mysqlhost = "localhost"; //Database host
    $mysqluser = "cisco-sipbook"; //Database username
    $mysqlpass = "cisco-sipbook"; //Database password
    $mysqldb = "cisco-sipbook"; //Database name
    $title = "Business"; //Title of your phonebook directory
    $filename = "phonebook"; //Name of the XML file

//Connect to host
	$mysqli = new mysqli($mysqlhost,$mysqluser,$mysqlpass, $mysqldb);
?>
