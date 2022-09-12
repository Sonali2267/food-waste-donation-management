<?php
    session_start();
    

    if(isset($_SESSION['username']))
    {
        header("location:dash.php");
    }
    $username = $password = "";
    $nameerr = $passerr = "";

    if (isset($_POST['btn']))
     {
        $valid= true;
        if (empty($_POST["username"])) 
        {
            $nameerr = "required";
            $valid = false;
        }
         else 
         {
            $username = test($_POST["username"]);
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
            $username = $_POST['username'];
            $password = $_POST['password'];
            $query = "select * from user_detail WHERE mail = '$username' and password = '$password'";
            $results = mysqli_query($link, $query);
            $num = mysqli_num_rows($results);
            if($num == 1)
            {
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;    
                header("location:dash.php");
            }
            else
            {
                echo "incorrect email or password";
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
    <link rel="stylesheet" href="css/style1.css">
</head>

<body>
  
    <div class="container">

        <div class="header">
            <div class="si">
                <div class="t">
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                        <h1>REGISTER IN</h1>
                </div>
                <div class="t1">
                    <b>USERNAME</b>
                    <input type="text" name="username" placeholder="username">
                    <div class="error"><?php echo "$nameerr" ?></div>
                </div>
                <div class="t2">
                    <b>PASSWORD</b>
                    <input type="password" name="password" placeholder="password">
                    <div class="error"><?php echo "$passerr" ?></div>
                </div>
                <div class="t3">
                    <input type="submit" name="btn">
                </div>
                <div class="t4">
                    <b>OR</b>
                    <div class="t5">
                        <b>Do you have an account?</b>
                    </div>
                    <div class="t6">
                        <a href="reg.php">
                            <h2>Create account</h2>
                        </a>
                    </div>
                </div>
                </form>

            </div>
        </div>
    </div>
</body>

</html>