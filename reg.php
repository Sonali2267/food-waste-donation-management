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
        body
        {
            background-image:url('images/sl3.jpg');
            background-size:cover;
            background-repeat:no-repeat;
        }
        .container{
            width:100%;
            float:left;
        }
        .reg_form
        {
            width:100%;
            float:left;
            margin-top:15px;
            margin-bottom:70px;
        }
        .items
        {
            width:58%;
            margin-left:542px;
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
        $mail="";
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
    header("location:event.php");
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
        <div class="items">
                <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <h1>REGISTER</h1>
           <b> First Name:</b><br>
           <input type="text" name="firstname" placeholder="firstname" >
            <div class="error"><?php echo $fnameerr; ?></div><br>

            <b>Last Name:</b><br><input type="text" name="lastname" placeholder="lastname">
            <div class="error"><?php echo $lnameerr; ?></div><br>

           <b> E-mail:</b><br><input type="text" name="mail" placeholder="mailid">
            <div class="error"> <?php echo $mailerr; ?></div><br>

            <b>Phone No.:</b><br><input type="text" name="phone" placeholder="phone" >
            <div class="error"> <?php echo $phoneerr; ?></div><br>

            <b> Address:</b><br><input type="text" name="address" placeholder="address">
            <div class="error"><?php echo $addresserr; ?></div><br>
            
           <b> Password:</b><br><input type="password" name="password" placeholder="password">
            <div class="error"><?php echo $passerr; ?></div><br>

           <b> Confirm password:</b><br><input type="password" name="cnfrmpass" placeholder="confirmpassword">
            <div class="error"><?php echo $cnfrmpasserr; ?></div><br>
            <input type="submit" name="sub-btn">
            </form>
      </div>

  </div>

  

</body>
</html>