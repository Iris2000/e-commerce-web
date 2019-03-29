<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>GadgetFlow</title>
<link rel="stylesheet" href="style.css"/>
<link rel="shortcut icon" type="image/jpg" href="logo.jpg"/>
<style>
	.sign_out {
	padding: 5px;
	font-size: 19px;
	border-radius: 5px;
	border: 1px solid gray;
	cursor: pointer;
	opacity: 0.6;
	transition: 0.3s;
	margin-top: 15px;
	margin-left: 65px;
	}
	
	.sign_out:hover {
	border-color: black;
	color: black;
	opacity: 1;
	}
</style>
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
<script>var __adobewebfontsappname__="dreamweaver"</script>
<script src="http://use.edgefonts.net/alfa-slab-one:n4:default.js" type="text/javascript"></script>
</head>

<body>
<?php
session_start();
if($_SESSION["user"]=="")
{
	header("Location:login.html");
}
echo "Welcome,  ".$_SESSION["user"]."<br>";
header("Location:Home page.html");
?>
	
<a href="logout.php"><button class="sign_out">Sign Out</button></a>
</body>
</html>