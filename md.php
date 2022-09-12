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
        if (empty($_POST["note"])) 
        {
            $noteerr = "";
        } else 
        {
            $note = test($_POST["note"]);
        }
        if(!empty($_POST["amount"]) && !empty($_POST["note"]))
{
$amount=$_POST['amount'];
$note=$_POST['note'];
$query = "INSERT INTO donate_money VALUES('', '$amount','$note')";
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
        body {
            background-image: url('images/bg.jfif');
            background-repeat: no-repeat;
            background-size: cover;
            font-family: 'Montserrat', sans-serif;
        }

        .container {
            width: 100%;
            float: left;
            border: 1px solid aquamarine;
        }

        .header {
            width: 100%;
            float: left;
            border: 1px solid aquamarine;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .demo {
            width: 960px;
            margin: 0 auto;
        }

        .left {
            width: 50%;
            float: left;
        }

        .phn {
            width: 25%;
            float: left;
        }

        .pimg {
            width: 20%;
            float: left;
            margin-top: 10px;
            display: inline-block;
        }

        .pimg img {
            width: 100%;
            float: left;
        }

        .phn p {
            margin-left: 30px;
        }

        .mail {
            width: 25%;
            float: left;
        }

        .mimg {
            width: 20%;
            float: left;
        }

        .mimg img {
            width: 100%;
            float: left;
        }

        .mail p {
            margin-left: 30px;
        }

        .right {
            width: 50%;
            float: left;
        }

        .right a {
            margin: 120px;
        }

        .logos {
            width: 25%;
            float: right;
            margin-top: 10px;
        }

        .logoimg1 {
            width: 25%;
            float: left;
        }

        .logoimg1 img {
            width: 100%;
            float: right;
            margin: -31px;
        }

        .logoimg2 {
            width: 25%;
            margin: 0px 30px;
        }

        .logoimg2 img {
            width: 100%;
            float: right;
            margin: -31px;
        }

        .sin {
            margin-top: 18px;

        }

        .clear {
            clear: both;
        }

        .line {
            width: 960px;
            margin: 0 auto;
        }

        .line div {
            background-color: #000;
            width: 100%;
            height: 1px;

        }

        .demo1 {
            width: 960px;
            margin: 0 auto;
        }

        .left1 {
            width: 30%;
            float: left;
        }

        .limg {
            width: 30%;
            float: left;
        }

        .limg img {
            width: 100%;
            float: left;
        }

        .left1 h2 {
            margin-left: 50px;
            font-size: 20px;
        }

        .right1 {
            width: 70%;
            float: left;
        }

        .list {
            width: 100%;
            float: left;
        }

        .list ul {
            width: 100%;
            float: left;
        }

        .list ul li {
            text-decoration: none;
            display: inline-block;
            margin-left: 60px;
        }

        .list ul li b {
            margin-left: -18px;

        }

        .md {
            margin: -34px 240px;
            width: 115%;
            text-decoration: none;
        }

        .dn {
            width: 100%;
            height:259px;
        }

        .dn img {
            margin-left: -26px;
            height: 227px;
        }

        .form {
            text-align: center;
        }
        .error{
            color:red;
        }
        .note{
            color:black;
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
                            <img src="images/phn.jpg">
                        </div>
                        <b>
                            <p>9876455621</p>
                        </b>
                    </div>
                    <div class="mail">
                        <div class="mimg">
                            <img src="images/mail.png">
                        </div>
                        <b>
                            <p>info@food.com</p>
                        </b>
                        <div class="md">
                            <b>Money Donation<b>
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
                            <b><a href="regin.php">Login</a></b>
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
                    <div class="limg">
                        <img src="images/fw.png">
                    </div>
                </div>
                <div class="right1">
                    <div class="list">
                        <ul>
                            <b>
                                <li>Home</li>
                                <li>About us</li>
                                <a href="donate.php">
                                    <li>Donate</li>
                                </a>
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
                <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                    <h1>Donate Money Now</h1>
                    Enter Amount<br><input type="text" name="amount" placeholder="amount">
                    <div class="error"><?php echo "$amounterr" ?>
                    <br>
                    <div class="note">
                        Special Note<br><textarea name="note" rows="5" cols="40"></textarea>
                        <div class="error"><?php echo "$noteerr" ?><br></div>
                        <input type="submit" name="btn"  value="Donate Happiness" >
                </form>
            </div>
        </div>
    </div>
</body>

</html>