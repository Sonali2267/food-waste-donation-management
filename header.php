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
        <div class="left1">
            <div class="limg">
                <img src="images/feed.jpg">
            </div>
        </div>

        <div class="md">
            <a href="md.php"><b>Money Donation<b></a>
        </div>
        <div class="logos">
        </div>
        <div class="clear"></div>


        <div class="demo1">

            <div class="right1">
                <div class="list">
                    <ul>
                        <b> <a href="home.php">
                                <li>Home</li>
                            </a>
                            <li>About us</li>
                            <a href="donate.php">
                                <li>Donate</li>
                            </a>
                            <li>Activity</li>
                            <li>Contactus</li>
                            <li>

                                <?php
                                if (isset($_SESSION['username'])) { ?>
                                    <b><a href="logout.php">Logout</a></b>
                                <?php
                                } else {
                                ?>
                                    <b><a href="reg.php">Login</a></b>
                                <?php
                                }
                                ?>
                            </li>
                        </b>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>

</html>