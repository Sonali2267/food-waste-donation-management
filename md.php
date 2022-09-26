<?php
error_reporting(0);
include("link.php");
session_start();
$amounterr = $noteerr = "";
$amount =  $note= "";
if (isset($_POST['btn'])) 
{
    if (empty($_POST["amount"])) 
    {
        $amounterr = "required";
    } else
    {
        $amount = test($_POST["amount"]);
    }
    if (empty($_POST["username"])) 
    {
        $usererr = "required";
    } else
    {
        $username = test($_POST["username"]);
    }
    if (empty($_POST["address"])) 
    {
        $addresserr = "required";
    } else
    {
        $address = test($_POST["address"]);
    }
    if (empty($_POST["number"])) 
    {
        $numbererr = "required";
    } else
    {
        $number = test($_POST["number"]);
    }
        if (empty($_POST["note"])) 
        {
            $noteerr = "";
        } else 
        {
            $note = test($_POST["note"]);
        }
        if(!empty($_POST["amount"]) && !empty($_POST["note"]) && !empty($_POST["address"]) 
        && !empty($_POST["number"]) && !empty($_POST["username"]))
{
$amount=$_POST['amount'];
$note=$_POST['note'];
$address=$_POST['address'];
$number=$_POST['number'];
$username=$_POST['username'];
$query = "INSERT INTO donate_money VALUES('', '$username','$number
','$address','$amount','$note',')";
$results = mysqli_query($link, $query);
if(mysqli_query($link,$query))
{
    echo "new record created successfully";
}
else
{
    echo "database error in your query".$query."-".mysqli_error($link);
}

 mysqli_close($link);
}
}
function test($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return ($data);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body 
{
            font-family: 'Montserrat', sans-serif;
        }

        .container 
        {
            width: 100%;
            float: left;
        }
        .header 
        {
            width: 100%;
            float: left;    
            background-repeat: no-repeat;
            background-size: cover;
            background-color: whitesmoke;
            background-image: url('images/mm.jpg');
        }
       .demo 
           {
            width: 960px;
            margin: 0 auto;
        }

        .left 
        {
            width: 60%;
            float: left;
        }

        .phn 
        {
            width: 25%;
            float: left;
        }

        .pimg 
        {
            width: 20%;
            float: left;
            margin-top: 10px;
            display: inline-block;
        }

        .pimg img 
        {
            width: 100%;
            float: left;
        }

        .phn p 
        {
            margin-left: 30px;
        }

        .mail 
        {
            width: 25%;
            float: left;
        }

        .mimg 
        {
            width: 20%;
            float: left;
        }

        .mimg img 
        {
            width: 100%;
            float: left;
        }

        .mail p 
        {
            margin-left: 30px;
        }

        .right 
        {
            width: 40%;
            float: left;
        }

        .right a 
        {
            margin: 120px;
        }

        .logos 
        {
            width: 25%;
            float: right;
            margin-top: 10px;
        }

        .logoimg1 
        {
            width: 25%;
            float: left;
        }

        .logoimg1 img 
        {
            width: 100%;
            float: right;
            margin: -31px;
        }

        .logoimg2 
        {
            width: 25%;
            margin: 0px 30px;
        }

        .logoimg2 img 
        {
            width: 100%;
            float: right;
            margin: -31px;
        }

        .sin 
        {
            margin-top: 18px;

        }

        .clear 
        {
            clear: both;
        }

        .line 
        {
            width: 960px;
            margin: 0 auto;
        }

        .line div 
        {
            background-color: #000;
            width: 100%;
            height: 1px;

        }

        .demo1 
        {
            width: 960px;
            margin: 0 auto;
        }

        .left1 
        {
            width: 25%;
            float: left;
        }

        .limg 
        {
            width: 30%;
            float: left;
        }

        .limg img 
        {
            width: 100%;
            float: left;
        }

        .left1 h2 
        {
            margin-left: 50px;
            font-size: 20px;
        }

        .right1 
        {
            width: 70%;
            float: left;
        }

        .list 
        {
            width: 100%;
            float: left;
        }

        .list ul 
        {
            width: 100%;
            float: left;
        }

        .list ul li 
        {
            text-decoration: none;
            display: inline-block;
            margin-left: 60px;
        }

        .list ul li b 
        {
            margin-left: -18px;

        }

        .md 
        {
            margin: -34px 310px;
            width: 115%;
            text-decoration: none;
        }

        .dn 
        {
            width: 100%;
            height:259px;
        }

        .dn img 
        {
            margin-left: 22px;
            height: 227px;
        }

        .form 
        {
            width:100%;
            text-align: center;
        }
        .error
        {
            color:red;
        }
        .note
        {
            color:black;
        }
        a{
            text-decoration: none;
        }
        .user{
            width: 50%;
            float:left;
            text-align: center;
        }
        .user input{
            padding:10px 10px 10px 10px;
            width:215px;
            border-radius: 10px;
        }
        .main{
            width:50%;
            float:left;
            margin-left: 310px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="demo">
                <div class="left">
                    <div class="phn">
                        <div class="pimg">
                            <img src="images/contact.jpg">
                        </div>
                        <b>
                            <p>8580475455</p>
                        </b>
                    </div>
                    <div class="mail">
                        <div class="mimg">
                            <img src="images/mail.jpg">
                        </div>
                        <b>
                            <p>shanumehra988@gmail.com</p>
                        </b>
                        <div class="md">
                            <?php
                            if (isset($_SESSION['username'])) { 
                            ?>
                        
                        <?php
                            }else{?>
                                <a href="md.php"><b>Money Donation<b></a>
                                <?php
                            }
                        ?>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <div class="sin">
                        <?php
                        if (isset($_SESSION['username'])) { ?>
                            <b><a href="logout.php">Logout</a></b>
                        <?php
                        } else {
                        ?>
                            <b><a href="login.php">Login</a></b>
                        <?php
                        }


                        ?>


                    </div>

                    <div class="logos">

                        <div class="logoimg1">
                            <img src="images/f.png">
                        </div>
                        <div class="logoimg2">
                            <img src="images/t.jpg">
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
                    <a href="home.php"> <div class="limg">
                        <img src="images/feed.jpg">
                    </div></a>
                   
                </div>
                <div class="right1">
                    <div class="list">
                        <ul>
                            <b>
                                <li><a href="home.php">Home</a></li>
                                <li>About us</li>
                                
                                    <li><a href="donate.php">Donate </a></li>
                               
                                <li>Activity</li>
                                <li>Contactus</li>
                            </b>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="dn">
                <img src="images/dn.jpg">
            </div>
            <div class="form">
                <div class="main">
                <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                    <h1>Donate Money Now</h1>
                
                    <div class="user">
                    Username<br><input type="text" name="username" placeholder="username">
                    <div class="error"><?php echo "$usererr" ?></div><br>
                    </div>
                    <div class="user">
                        Mobile No.<br><input type="text" name="number" placeholder="number">
                        <div class="error"><?php echo "$numbererr" ?>
                        </div><br>
                    </div>
                    <div class="user">
                        Address<br><input type="text" name="address" placeholder="address">
                        <div class="error"><?php echo "$addresserr" ?>
                        </div><br>
                    </div>
                    <div class="user">
                    Enter Amount<br><input type="text" name="amount" placeholder="amount">
                    <div class="error"><?php echo "$amounterr" ?></div><br>
                    </div>
                    <div class="user">
                        Special Note<br><textarea name="note" rows="5" cols="40"></textarea>
                        <div class="error"><?php echo "$noteerr" ?></div><br>
                    </div>
                        <div class="user">
                        <input type="submit" name="btn"  value="Donate Happiness" >
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>