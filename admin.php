<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            width:100%;
            float:left;
        }
        .header{
            width:100%;
            float:left;
            background-color: antiquewhite;
        }
        .admin{
            width:45%;
            float:left;
            margin-left: 285px;
        }
        .back{
            width:10%;
            float:left;
            margin-left: 60px;
        }
        .signin{
            width:100%;
            float:left;
            text-align: center;
            background-color: beige;
        }
        .in{
            border: 1px solid #000;
    margin: 60px 406px 60px 423px;
    background-color: aliceblue;
}
form {
    margin: 49px 30px 49px 30px;
}
.waste{
    width:100%;
    float:left;
    height:145px;
    background-color: blanchedalmond;
}
.waste b{
    margin:98px;
}
.logo{
    float:right;
}
.logo img{
    width:98px;
    margin:20px 20px 20px 20px;
}
    </style>
</head>
<body>
    <?php
    include_once('link.php');
     $Usererr= $Passerr="";
     $Username=$Password="";
     if(isset($_POST['log_btn']))
     {
         
     if(empty($_POST["Username"]))
     {
        $Usererr="Username is required";
     }
     else
     {
         $Username=test_input($_POST["Username"]);
         if (!preg_match("/^[a-zA-Z-' ]*$/",$Username)) {
             $Usererr = "Only letters and white space allowed";
           }
     }
         if(empty($_POST["Password"]))
    {
        $Passerr="Password is required";
     }
    else
    {
        $Pass=test_input($_POST["Password"]);
    }
    if(!empty($_POST["Username"]) && !empty($_POST["Password"]) )
    {
        $Username=$_POST['Username'];
        $Password=$_POST['Password'];

        $sql="INSERT INTO admin_signin VALUES('','$Username','$Password')";
        if(mysqli_query($link,$sql))
{
    echo "new record created successfully";
}
else
{
    echo "database error in your query".$sql."-".mysqli_error($link);
}

 mysqli_close($link);
}
}

    function test_input($data)
    {
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return($data);
    }
?>
    <div class="container">
        <div class="header">
            <div class="admin"> 
             <b>Reuse Wastage of Needy Items | Admin</b>
            </div>
            <div class="back">
                <b>Back to portal</b>
            </div>
        </div>
        <div class="signin">
            <div class="in">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <h1>Sign In</h1><br>
                <input type="text" placeholder="Username" name="Username">
                <div class="error"><?php echo $Usererr; ?></div><br>
                <br>
                <input type="password" placeholder="Password" name="Password">
                <div class="error"><?php echo $Passerr; ?></div><br>
                <br>
                <input type="submit" name="log_btn">
            </form>
        </div>
        </div>
        <div class="waste">
            <b>2022 Reuse Wastage of Needy Items</b>  All rights reserved.
            <div class="logo">
                <img src="images/logo.jfif">
            </div>
        </div>

    </div>
</body>
</html>