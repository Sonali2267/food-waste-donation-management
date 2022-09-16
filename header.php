<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <title>Document</title>
</head>
<body>
<div class="header">
        
        
        <div class="demo">
            <div class="left">
                <div class="phn">
                    <div class="pimg">
                        <img src="images/contact.jpg">
                          </div>
                        <b><p>8580475455</p></b>
                     </div>
                <div class="mail">
            <div class="mimg">
                        <img src="images/mail.jpg">
                    </div>
                    <b><p>shanumehra988@gmail.com</p></b>
                    <div class="md">
                        <a href="md.php"><b>Money Donation<b></a>
                      </div>
                  </div>
            </div>
            <div class="right">
                <div class="sin">
                <?php 
                if(isset($_SESSION['username']))
                { ?>
                    <b><a href="logout.php">Logout</a></b>
         <?php
                }
                else
                {
                    ?>
                    <b><a href="reg.php">Login</a></b>
                    <?php
                }
                          ?>
                </div>
                   <div class="logos">
                     <div class="logoimg1">
                        <img src="images/f.png">
                    </div>
                    <div class="logoimg2">
                        <img src="images/ig.jpg">
                    </div>
                </div>
            </div>
            <div class="clear"></div>
            <div class="line">
                <div></div>
            </div>
        </div>
        <div class="demo1">
            <div class="left1">
                <div class="limg">
                <img src="images/feed.jpg">
            </div>
            </div>
            <div class="right1">
                <div class="list">
                    <ul>
                       <b> <a href="home.php"><li>Home</li></a>
                        <li>About us</li>
                        <a href="donate.php"><li>Donate</li></a>
                        <li>Activity</li>
                        <li>Contactus</li>
                        </b>
                    </ul>
                </div>
            </div>
        </div>
        </div>
</body>
</html>