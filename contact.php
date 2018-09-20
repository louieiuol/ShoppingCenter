<html>
    <head>
        <meta charset="UTF-8" />
        <title>Group Project </title>
        <link rel="stylesheet" href="terpShopping.css" />
    </head>

    <body background = "2.jpg">
    <img src="umcp.png" name="umcp" style='width: 10em'>
    <h1>Welcome to Terps Shopping </h1>
    <hr><hr>

    <input type="submit" name="about" value="About">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="submit" name="signIn" value="Signin">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="submit" name="newUser" value="New User">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="submit" name="contact" value="Contact">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <hr><hr>
    </body>
</html>

<?php

	require_once("support.php");

	session_start();

	$body=<<<EOBODY
        <p style='color:white;font-size:3em;position:relative;left:450px'>Contact Information</p>
        <p style='color:white;font-size:2em;position:relative;left:520px'>Name: Kaian Sitou</p>
        <p style='color:white;font-size:2em;position:relative;left:500px'>Email: Ksitou@umd.edu</p>        
EOBODY;

	echo generatePage($body);

?>