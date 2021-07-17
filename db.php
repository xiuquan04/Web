<?php
    $serverName ="localhost";
	$dbUsername ="root";
	$dbPassword="";
	$dbName="registersystem";
	
    $conn = mysqli_connect("localhost","root","","registersystem");
    // Check connection
    if(!$conn){
        echo 'Connection error' . mysqli_connect_error();
    }
?>