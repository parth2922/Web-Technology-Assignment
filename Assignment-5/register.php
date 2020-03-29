<?php

$con = mysqli_connect("localhost","root", "", "first");

if(!$con){
	echo "Database Connection Failed";
	echo "Error: Unable to connect to MySQL." . PHP_EOL;
}

$name=$lastname=$femail=$fphone=$fgender=$fpart='';

$name = $_POST['fname'];
$lastname = $_POST['lname'];
$femail = $_POST['email'];
$fphone = $_POST['phone'];
$fgender = $_POST['gen'];
$fpart = $_POST['prof'];

$sql = "INSERT INTO data (fname, lname, email, phone, gen, prof) VALUES ('$name','$lastname','$femail','$fphone','$fgender','$fpart')";
$result = mysqli_query($con,$sql);

echo $con->error;

if($result){
		echo "<script>alert(\"Registration Successfull\");</script>";
}
else{
		echo "<script>alert(\"Registration Failed\");</script>";
}
header("Location: index.php");

?>
