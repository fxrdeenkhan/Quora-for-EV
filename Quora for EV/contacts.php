<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Contact us </title>
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/material.css">
        <link type="text/css" rel="stylesheet" href="fonts/font.css">
        <link rel="icon" href="images/icon1.png" >
        <style type="text/css">
            
  .contact-section{
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 15%;
  }
  
  .contact-info{
    color: #f8f4f4;
    min-width: 600px;
    line-height: 65px;
    padding-left: 50px;
    font-size: 18px;
  }
  
  .contact-info i{
    margin-right: 20px;
    font-size: 25px;
  }
  
  
  .contact-info{
    flex: 1;
  }
  
  
  .button{
      background-color: rgb(26, 226, 26);
      border-radius: 50px;
      width: 100px;
      height:40px;
      cursor: pointer;
  }
  h1{
      color: honeydew;
  }
        </style>
    </head>
    <body id="_4">
        <img id="logo_1" src="./images/logo.jpeg">
        <!-- navigation bar -->
        <a href="index.php">
            <div id="log">
                <div id="i">Compsoft Technologies</div>
            </div>
        </a>
        <ul id="nav-bar">
            <a href="index.php"><li>Home</li></a>
            <a href="contacts.php"><li id="home">Contact</li></a>
            <a href="ask.php"><li>Ask Question</li></a>
            <?php 
                if(! isset($_SESSION['user'])){
            ?>
            <a href="login.php"><li>Log In</li></a>
            <a href="signup.php"><li>Sign Up</li></a>
            <?php
                }
                else{
            ?>
            <a href="profile.php"><li>Hi, <?php echo $_SESSION["user"]; ?></li></a>
            <a href="logout.php"><li>Log Out</li></a>
            <?php
                }
            ?>
        </ul>
        <!-- content -->
        <div id="content" class="clearfix">
            
            <div id="box-1">
            </div>
            <div id="box-2">
             <div class="contact-section">
        <div class="contact-info">
            <h1 class="con_col"><u>Contact Us</u></h1>
          <div class="con_col"><i class="fas fa-envelope"></i>compsofttech@gmail.com</div>
          <div class="con_col"><i class="fas fa-map-marker-alt"></i>Bangalore, Karnataka, India</div>
          <div class="con_col"><i class="fas fa-phone"></i>+91 9380961440/+91 7760661553</div>
          <div class="con_col"><i class="fas fa-clock"></i>Mon - Fri 8:00 AM to 5:00 PM</div>
        </div>
      </div>
            </div>
            
        </div>

    </body>
    
</html>