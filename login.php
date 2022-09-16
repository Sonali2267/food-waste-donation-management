<?php
    session_start();
    

    if(isset($_SESSION['mail']))
    {
       
    }
    $mail = $password = "";
    $mailerr = $passerr = "";

    if (isset($_POST['btn']))
     {
        $valid= true;
        if (empty($_POST["mail"])) 
        {
            $mailerr = "required";
            $valid = false;
        }
         else 
         {
            $mail = test($_POST["mail"]);
        }
        if (empty($_POST["password"]))
         {
            $passerr = "required";
            $valid = false;

        } 
        else 
        {
            $password = test($_POST["password"]);
        }

        if($valid)
        {
            include("link.php");
            $mail = $_POST['mail'];
            $password = $_POST['password'];
            @$query = "select * from user_detail WHERE mail = '$mail' and password = '$password'";
            $results = mysqli_query($link, $query);
            $num = mysqli_num_rows($results);
            if($num == 1)
            {
                $_SESSION['mail'] = $mail;
                $_SESSION['password'] = $password; 
                header("location:dash.php");
            }
            else
            {
                echo "incorrect mail or password";
            }

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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600&display=swap" rel="stylesheet">
     <style>
        /* body {
    background-image: url('images/fd1.jpg');
    font-family: 'Montserrat', sans-serif;
    background-size: cover;
    background-repeat: no-repeat;
} */

.container 
{
    width: 100%;
    float: left;
    background-repeat: no-repeat;
    background-size: cover;
    background-color: whitesmoke;
} 
/* 
.header {
    width: 51%;
    float: left;
    margin-top: -60px;
} */

.si {
    width:50%;
    float: left;
    text-align: center;
    height:400px;
    background-image: url('images/sin.jpg');
    position:absolute;
    margin: 60px;
    border-radius: 40px;
}

.t 
{
    width: 100%;
    float: left;
    margin-top: 80px;
}


.t1 {
    margin-top: 20px;
    color: black;
}

.t2 {
    margin-top: 30px;
    color: black;
}

.t3 {
    margin-top: 30px;
}

.t3 input {
    width:22%;
    cursor: pointer;
    border-radius: 10px;
    padding:10px 10px 10px 10px;
}

.t4, .t5 {
    margin-top: 25px;
}

.t6 input {
    margin-top: 30px;
    cursor: pointer;
   
}

.error {
    color: red;
} 
.signup{
    width:50%;
    float:right;
    height:528px;
    text-align: center;
    background-image: url('images/sgup.jpg');
    position:relative;
    border-radius: 30px;
}
.user{
    width:100%;
            float:left;
        }
        .user input{
            padding:10px 10px 10px 10px;
            width:215px;
            border-radius: 10px;
        }
h2{
    margin-top: 160px;
}
h1{
    margin-top: -20px;
}
</style>
    
</head>

<body>
    <div class="container">
    
            
            <div class="signup">
                <h2>WELCOME!</h2>
                <p>Enter Your Detail And Start Journey With Us</p><br>
                <br>
                <b>Do you have an account?</b>
                <div class="t6">
                        <a href="reg.php">
                            <h2>Create account</h2>
                        </a>
                    </div>
            </div>
            <div class="si">
                <div class="t">
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                        <h1>LOGIN</h1>
                </div>
                <div class="t1">
                    <b>E-Mail</b>
                    <div class="user">
                    <input type="text" name="mail" placeholder="mailid">
                    <div class="error"><?php echo "$mailerr" ?></div></div>
                </div>
                <br>
                <div class="t2">
                    <b>PASSWORD</b>
                    <div class="user">
                    <input type="password" name="password" placeholder="password">
                    <div class="error"><?php echo "$passerr" ?></div></div>
                </div>
                <br>
                <br>
                <div class="t3">
                    <input type="submit" name="btn" value="Login">
                </div>
                <div class="t4">
                    <div class="t5">
                    </div>
                    
                </div>
                </form>
</div>
  
    </div>
</body>

</html>