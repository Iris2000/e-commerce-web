<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>GadgetFLow</title>
<link rel="shortcut icon" type="image/jpg" href="logo.jpg"/>
<link rel="stylesheet" href="style.css">
</head>

<body>
<?php
$name=$_POST["user"];
$pas_1=$_POST["password_1"];
$pas_2=$_POST["password_2"];

if($name=="dani123" AND $pas_1=="123abc" AND $pas_2=="123abc"){
	session_start();
	$_SESSION["user"]=$_POST[user];
	$_SESSION["password_1"]=$_POST[password_1];

	$_SESSION["password_2"]=$_POST[password_2];
	header("Location:home page.html");
}
else if($name=="hello234" AND $pas_1=="234bcd" AND $pas_2=="234bcd"){
	session_start();
	$_SESSION["user"]=$_POST[user];
	$_SESSION["password_1"]=$_POST[password_1];

	$_SESSION["password_2"]=$_POST[password_2];
	header("Location:home page.html");
}
else if($name=="user345" AND $pas_1=="345cde" AND $pas_2=="345cde"){
	session_start();
	$_SESSION["user"]=$_POST[user];
	$_SESSION["password_1"]=$_POST[password_1];
	
	$_SESSION["password_2"]=$_POST[password_2];
	header("Location:home page.html");
}
else{
	echo "id not valid";
	header("refresh:3; url=login.html");
}
?>
</body>
</html>
