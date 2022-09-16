<?php
include_once('link.php');
?>

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
            background-color: whitesmoke;
        }
        .reg_form
        {
            width:100%;
            float:left;
        }
        .items
        {
            width:50%;
            float:right;
            margin-top: 80px;
            background-image: url('images/reg.jpg');
            position:absolute;
            left:500px;
            border-radius: 30px;
        }
        .first{
            width:50%;
            float:left;
        }
        .first input{
            padding:10px 10px 10px 10px;
            border-radius: 10px;
        }
        .last{
            width:50%;
            float:right;
        }
        .last input{
            padding:10px 10px 10px 10px;
            border-radius: 10px;
        }
        .mail{
            width:50%;
            float:left;
        }
        .mail input{
            padding:10px 10px 10px 10px;
            border-radius: 10px;
        }
        .phone{
            width:50%;
            float:left;
        }
        .phone input{
            padding:10px 10px 10px 10px;
            border-radius: 10px;
        }
        .address{
            width:50%;
            float:left;
        }
        .address input{
            padding:10px 10px 10px 10px;
            border-radius: 10px;
        }
        .password{
            width:50%;
            float:left;
        }
        .password input{
            padding:10px 10px 10px 10px;
            border-radius: 10px;
        }
        .cnfrmpass{
            width:50%;
            float:left;
        }
        .cnfrmpass input{
            padding:10px 10px 10px 10px;
            border-radius: 10px;
        }
        .submit{
            width:50%;
            float:left;
            margin-top: 20px;
            position:relative;

        }
        .submit input{
            padding:10px 70px 10px 10px;
            border-radius: 7px;
        }
        .image{
            width:50%;
            float:left;
        }
        .center{
            text-align: center;
        }
        .image img{
           width:100%;
           float:left; 
           height:550px;
           border-radius: 30px;
        }
        h1{
            text-align: center;
        }
        .error
        {
            color:red;
        }

        </style>
</head>
<body>

  <?php

    $fnameerr= $lnameerr= $mailerr= $phoneerr= $passerr= $cnfrmpasserr= $addresserr="";
    $firstname= $lastname= $mail= $phone= $address= $password= $cnfrmpass= "";

    if(isset($_POST['sub-btn']))
    {
        
    if(empty($_POST["firstname"]))
    {
       $fnameerr="First Name is required";
    }
    else
    {
        $firstname=test_input($_POST["firstname"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$firstname)) {
            $fnameerr = "Only letters and white space allowed";
          }
    }
    if(empty($_POST["lastname"]))
    {
        $lnameerr="Last Name is required";
     }
    else
    {
        $lastname=test_input($_POST["lastname"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$lastname)) {
            $lnameerr = "Only letters and white space allowed";
          }
    }
    if(empty($_POST["mail"]))
    {
        $mailerr="";
     }
    else
    {
        $mail=test_input($_POST["mail"]);
        // if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //     $mailerr = "Invalid email format";
        //   }
        if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            $mailerr = "Invalid email format";
          }
    }
    if(empty($_POST["phone"]))
    {
        $phoneerr="number is required";
     }
    else
    {
        $phone=test_input($_POST["phone"]);
        if (!preg_match('/^[0-9]*$/', $phone)) {
            $phoneerr="Invalid number";
    }
}
if(empty($_POST["address"]))
    {
        $addresserr="address is required";
     }
    else
    {
        $address=test_input($_POST["address"]);
    }
    if(empty($_POST["password"]))
    {
        $passerr="password is required";
     }
    else
    {
        $pass=test_input($_POST["password"]);
    }
    if(empty($_POST["cnfrmpass"]))
    {
        $cnfrmpasserr="confirm password is required";
     }
    else
    {
        $cnfrmpass=test_input($_POST["cnfrmpass"]);
    }
    

    if(!empty($_POST["firstname"]) && !empty($_POST["lastname"]) && !empty($_POST["mail"]) && !empty($_POST["phone"])
    && !empty($_POST["address"]) && !empty($_POST["password"]) && !empty($_POST["cnfrmpass"]))
    {
    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $mail=$_POST['mail'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $pass=$_POST['password'];
    $cnfrmpass=$_POST['cnfrmpass'];
    


$sql="INSERT INTO user_detail values('','$fname','$lname','$mail','$phone'
,'$address','$pass','$cnfrmpass')";

if(mysqli_query($link,$sql))
{
    echo "new record created successfully";
    header("location:login.php");
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

    <div class="reg_form">
        <div class="image">
            <img src="images/reg.jpg">
        </div>
        <div class="items">
                <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <h1>REGISTER</h1>
            <div class="center">
                <div class="first">
           <b> First Name:</b><br>
           <input type="text" name="firstname" placeholder="firstname" >
            <div class="error"><?php echo $fnameerr; ?></div><br>
           </div>
            <div class="last">
            <b>Last Name:</b><br><input type="text" name="lastname" placeholder="lastname">
            <div class="error"><?php echo $lnameerr; ?></div><br>
            </div>
             <div class="mail">
           <b> E-mail:</b><br><input type="text" name="mail" placeholder="mailid">
            <div class="error"> <?php echo $mailerr; ?></div><br>
             </div>
             <div class="phone">
            <b>Phone No.:</b><br><input type="text" name="phone" placeholder="phone" >
            <div class="error"> <?php echo $phoneerr; ?></div><br>
             </div>
             <div class="address">
            <b> Address:</b><br><input type="text" name="address" placeholder="address">
            <div class="error"><?php echo $addresserr; ?></div><br>
             </div>
             <div class="password">
           <b> Password:</b><br><input type="password" name="password" placeholder="password">
            <div class="error"><?php echo $passerr; ?></div><br>
             </div>
            <div class="cnfrmpass">
           <b> Confirm password:</b><br><input type="password" name="cnfrmpass" placeholder="confirmpassword">
            <div class="error"><?php echo $cnfrmpasserr; ?></div><br>
            </div>
            <div class="submit">
            <input type="submit" name="sub-btn">
            </div>
            </div>
            </form>
      </div>

  </div>

  

</body>
</html>