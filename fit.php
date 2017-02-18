<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "Fitness");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['Name']);
$age = mysqli_real_escape_string($link, $_REQUEST['Age']);
$email = mysqli_real_escape_string($link, $_REQUEST['Email']);
$height=mysqli_real_escape_string($link, $_REQUEST['Height']);
$weight=mysqli_real_escape_string($link, $_REQUEST['Weight']);
// attempt insert query execution
$sql = "INSERT INTO User_info(Uname, Uage,Uid,Uheight,Uweight) VALUES ('$name', '$age', '$email','$height','$weight')";
if(mysqli_query($link, $sql)){
    echo "<div style='color:#ff0000'>Your signup has completed</div>";
	include 'bmi.php';
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>