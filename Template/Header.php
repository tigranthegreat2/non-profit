<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        
        <meta name="viewpoint" content="width=device-width, initial-scale=1">

        <title>CVRA-Home</title>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <meta name="keywords" content="footer, address, phone, icons" />
        
        <link href="/website/css/bod.css" rel="stylesheet" type="text/css">

        <link href="/website/css/home.css" rel="stylesheet" type="text/css">

        <link href="/website/css/login.css" rel="stylesheet" type="text/css">

        <link href="/website/css/style.css" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    </head>
    <body>
    <div>
<?php
    session_start();
 
    if (isset($_SESSION["username"])) {
        include 'C:\xampp\htdocs\Website\user-registration\home.php';
    }else{
        include __DIR__ . '/loginbutton.php';
    }

?>
</div>
        <div class="layoutcontainer" style="background-color:white;">

        <!-- Button to open the modal login form -->
        

        <!-- Navigation Bar -->
        <div class="navbar">
            <img src="/website/Images/logo.png" alt="" title="" border="0" style="width:150px;height:150px;">
            <a href="/website/Contact.php"><b>Contact Us</b></a>
            <div class="dropdown">
                <button class="dropbtn" onclick="window.location.href='/website/Events.php';"><b>Events</b>
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="/website/Past.php"><b>Past Events</b></a>
                    <a href="/website/bodaction.php"><b>Recent Board Actions</b></a>
                </div>
            </div>      
            <div class="dropdown">
                <button class="dropbtn" onclick="window.location.href='/website/Involved.php';"><b>Get Involved</b>
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href='/website/JoinBoard.php'><b>Join The Board</b></a>
                    <a href="/website/JoinCommittee.php"><b>Join A Committee</b></a>
                    <a href="/website/JoinSponsor.php"><b>Become A Sponsors</b></a>
                </div>
            </div>       
            <div class="dropdown">
                <button class="dropbtn" onclick="window.location.href='/website/user-registration/user-registration.php';"><b>Membership</b>
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="/website/benefits.php"><b>Membership Benefits</b></a>
                    
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn" onclick="window.location.href='/website/About.php';"><b>About Us</b>
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="/website/Board.php"><b>Board Of Directors</b></a>
                    <a href="/website/Sponsors.php"><b>Our Sponsors</b></a>
                </div>
            </div>
            <a href="/website/index.php"><b>Home</b></a>
        </div>