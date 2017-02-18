<?php
$bmi=$weight/( $height*$height);
echo "<div style='color:#ff0000'><br>YOUR BODY MASS INDEX IS $bmi<br></div>";
if($bmi<18.5)
{
	echo "<div style='color:#ff0000'>YOU ARE UNDERWEIGHT<br></div>";
    include 'under.html';
}	
elseif($bmi>=18.5&&$bmi<=24.9)
{
    echo "<div style='color:#ff0000'>YOU ARE NORMALWEIGHT<br></div>";
	include 'normal.html';
}
else
{
	echo "<div style='color:#ff0000'>YOU ARE OVERWEIGHT</div>";
	include 'over.html';
}		
?>