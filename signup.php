<?php
    
    $firstname = $lastname = $mail = $password ="";
    $fnameerr = $lnameerr = $mailerr = $passerr = "";

    if (isset($_POST['btn']))
     {
        $valid= true;
        if (empty($_POST["firstname"])) 
        {
            $fnameerr = "required";
            $valid = false;
        }
         else 
         {
            $firstname = test($_POST["firstname"]);
        }
        if (empty($_POST["lastname"])) 
        {
            $lnameerr = "required";
            $valid = false;
        }
         else 
         {
            $lastname = test($_POST["lastname"]);
        }
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
            if(!empty($_POST["firstname"]) && !empty($_POST["lastname"]) && !empty($_POST["mail"])  && !empty($_POST["password"]))
    {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $mail = $_POST['mail'];
            $password = $_POST['password'];
            $sql="INSERT INTO user_detail values('','$firstname','$lastname','$mail'
,'$password')";

            @$query = "select * from sign_up WHERE 
             mail = '$mail' and password = '$password'";
             if(mysqli_query($link,$sql))
{
    echo "new record created successfully";
   // header("location:login.php");
//}
           // $results = mysqli_query($link,$query);
           // $num = mysqli_num_rows($results);
          //  if($num == 1)
           // { 
               // $_SESSION['firstname'] = $firstname;
                //$_SESSION['lastname'] = $lastname; 
                //$_SESSION['mail'] = $mail;
               // $_SESSION['password'] = $password; 
                header("location:donateevent.php");
            }
            else
            {
                echo "record successfully";
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
    height:450px;
    background-image: url('images/sin.jpg');
    position:absolute;
    margin: 40px;
    border-radius: 40px;
    margin-left: 292px;
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
    
            
            
            <div class="si">
                <div class="t">
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                        <h1>SIGNUP</h1>
                </div>
                <div class="t1">
                    <b>Firstname</b>
                    <div class="user">
                    <input type="text" name="firstname" placeholder="firstname">
                    <div class="error"><?php echo "$fnameerr" ?></div></div>
                </div>
                <div class="t1">
                    <b>Lastname</b>
                    <div class="user">
                    <input type="text" name="lastname" placeholder="lastname">
                    <div class="error"><?php echo "$lnameerr" ?></div></div>
                </div>
                <div class="t1">
                    <b>E-Mail</b>
                    <div class="user">
                    <input type="text" name="mail" placeholder="mailid">
                    <div class="error"><?php echo "$mailerr" ?></div></div>
                </div>
                <br>
                <div class="t1">
                    <b>PASSWORD</b>
                    <div class="user">
                    <input type="password" name="password" placeholder="password">
                    <div class="error"><?php echo "$passerr" ?></div></div>
                </div>
                <br>
                <br>
                <div class="t3">
                    <input type="submit" name="btn" value="Signup">
                </div>
    
                </form>
</div>
  
    </div>
</body>

</html>