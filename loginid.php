<?php
$hostname = "localhost";
    $username = "root";
    $dbname = "Fitness";
$password = "";
$usertable = "User_info";
$yourfield = "Uid";
$height=$_GET['height'];
$weight=$_GET['weight'];
    $connection = mysql_connect($hostname, $username, $password,$dbname) OR DIE ("Unable to 
connect to database! Please try again later.");
    mysql_select_db($dbname);
$query = "SELECT * FROM $usertable WHERE $yourfield = '".$_GET['email']."'";
    $result = mysql_query($query);
    if ($result) {
        while($row = mysql_fetch_array($result)) 
		{
                
                echo "<div style='color:#ff0000'>Login Successfull<br></div>";
			    include 'bmi.php';
				
         }
    }
    else {
        echo "User dosen't exit!";
    }
	
   mysql_close($connection);
?>