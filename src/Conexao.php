<?php
	//Sample Database Connection Syntax for PHP and MySQL.
	
	//Connect To Database
	
	$hostname="localhost";
	$username="root";
	$password="";
	$dbname="mandalas";
	
	mysqli_connect($hostname,$username, $password) or die ("html>script language='JavaScript'>alert('Unable to connect to database! Please try again later.'),history.go(-1)/script>/html>");
	mysqli_select_db($dbname);
	
	# Check If Record Exists
    $usertable="your_tablename";
	$yourfield = "your_field";

	$query = "SELECT * FROM $usertable";
	$result = mysqli_query($query);
	
	if($result){
		while($row = mysqli_fetch_array($result)){
			$name = $row["$yourfield"];
			echo "Name: ".$name."br/>";
		}
	}
?>