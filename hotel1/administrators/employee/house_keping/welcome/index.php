<?php

    session_start();

    if (isset($_SESSION["house_keeping"]) != 'house_keeping') {
    	header('location: access_denied.php');
    }

?>










<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="logout.php"><button>Logout</button></a>
</body>
</html>