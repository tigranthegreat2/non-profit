<?php

if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
    // since the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to index
    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
}

?>
<HTML>
<HEAD>
<TITLE>Welcome</TITLE>
<link href="website/css/login.css" type="text/css"
	rel="stylesheet" />
<link href="assets/css/user-registration.css" type="text/css"
	rel="stylesheet" />
</HEAD>
<BODY>
<div class="layoutcontainer" style="background-color:white;">
	<div class="phppot-container">
		<div class="page-header">
        <a href="/website/user-registration/logout.php"><button  class="loginbutton" style="float: right;">Logout</button></a>
		</div>
		<div class="usercontent"><b><?php echo $username;?></b></div>
	</div>
</BODY>
</HTML>
