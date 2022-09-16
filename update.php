<?php
include('link.php');
$id = $_GET['id'];
$sql = "select * from user_detail  where id='$id'";
$run = mysqli_query($link, $sql);
$row = mysqli_fetch_array($run);
$fnameerr= $lnameerr= $mailerr= $phoneerr= $passerr= $cnfrmpasserr= $addresserr="";
$firstname = $lastname = $mail = $phone = $address = $password = $cnfrmpass = "";

if (isset($_POST['update_btn'])) {

    /*       echo $update="UPDATE user_detail * set  where fname='$firstname' and mail='$mail'";
    
        }
     */


    if (empty($_POST["firstname"])) {
        $fnameerr = "First Name is required";
    } else {
        $firstname = test_input($_POST["firstname"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $firstname)) {
            $fnameerr = "Only letters and white space allowed";
        }
    }
    if (empty($_POST["lastname"])) {
        $lnameerr = "Last Name is required";
    } else {
        $lastname = test_input($_POST["lastname"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $lastname)) {
            $lnameerr = "Only letters and white space allowed";
        }
    }
    if (empty($_POST["mail"])) {
        $mail = "";
    } else {
        $mail = test_input($_POST["mail"]);
        // if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //     $mailerr = "Invalid email format";
        //   }
        if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            $mailerr = "Invalid email format";
        }
    }
    if (empty($_POST["phone"])) {
        $phoneerr = "number is required";
    } else {
        $phone = test_input($_POST["phone"]);
        if (!preg_match('/^[0-9]*$/', $phone)) {
            $phoneerr = "Invalid number";
        }
    }
    if (empty($_POST["address"])) {
        $addresserr = "address is required";
    } else {
        $address = test_input($_POST["address"]);
    }
    if (empty($_POST["password"])) {
        $passerr = "password is required";
    } else {
        $pass = test_input($_POST["password"]);
    }
    if (empty($_POST["cnfrmpass"])) {
        $cnfrmpasserr = "confirm password is required";
    } else {
        $cnfrmpass = test_input($_POST["cnfrmpass"]);
    }





    if (
        !empty($_POST["firstname"]) && !empty($_POST["lastname"]) && !empty($_POST["mail"]) && !empty($_POST["phone"])
        && !empty($_POST["address"]) && !empty($_POST["password"]) && !empty($_POST["cnfrmpass"])
    ) {
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $mail = $_POST['mail'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $pass = $_POST['password'];
        $cnfrmpass = $_POST['cnfrmpass'];


        $update = "UPDATE user_detail SET firstname='$fname',lastname='$lname',mail='$mail',phone='$phone',address='$address',
      password='$pass',cnfrmpass='$cnfrmpass'WHERE id='$id'";
        $data = mysqli_query($link,$update);
            
        header("location:event.php");
    }

    }
function test_input($data)
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
</head>

<body>
    <div class="reg_form">
        <div class="items">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] . '?id=' . $id); ?>" method="post">
                <h1>REGISTER</h1>
                <b> First Name:</b><br>
                <input type="text" name="firstname" placeholder="firstname" value="<?php echo @$row['firstname']; ?>">
                <div class="error"><?php echo @$fnameerr; ?></div><br>

                <b>Last Name:</b><br><input type="text" name="lastname" placeholder="lastname" value="<?php echo @$row['lastname']; ?>">
                <div class="error"><?php echo @$lnameerr; ?></div><br>

                <b> E-mail:</b><br><input type="text" name="mail" placeholder="mailid" value="<?php echo @$row['mail']; ?>">
                <div class="error"> <?php echo @$mailerr; ?></div><br>

                <b>Phone No.:</b><br><input type="text" name="phone" placeholder="phone"value="<?php echo @$row['phone']; ?>">
                <div class="error"> <?php echo @$phoneerr; ?></div><br>

                <b> Address:</b><br><input type="text" name="address" placeholder="address" value="<?php echo @$row['address'];?>">
                <div class="error"><?php echo @$addresserr; ?></div><br>

                <b> Password:</b><br><input type="password" name="password" placeholder="password"value="<?php echo @$row['password'];?>">
                <div class="error"><?php echo @$passerr; ?></div><br>

                <b> Confirm password:</b><br><input type="password" name="cnfrmpass" placeholder="confirmpassword" value="<?php echo @$row['cnfrmpass'];?>">
                <div class="error"><?php echo @$cnfrmpasserr; ?></div><br>

              <a href="event.php">  <input type="submit" value="update" name="update_btn"></a>
            </form>
        </div>
</body>

</html>