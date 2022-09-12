
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .donatenow{
            width:100%;
            float:left;
            margin-top:15px;
            margin-bottom:70px;
        }
        .dn{
            width:50%;
            margin-left:530px;
        }
        .error
        {
            color:red;
        }
    </style>
</head>
<body>
    <?php
    error_reporting(0);
    $fnameerr= $ftypeerr= $afooderr= $oldfooderr= $addresserr= $noteerr="";
    $fooddonation= $foodtype= $approxfood= $food= $address= $note="";
    if(isset($_POST['sub-btn']))
    {
        if(empty($_POST["fname"]))
           {
               $fnameerr=" required";
           }
    else
    {
        $fooddonation=test_input($_POST["fname"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$fooddonation)) {
            $fnameerr = "Only letters and white space allowed";
          }
    }
    if(empty($_POST["foodtype"]))
    {
       $ftypeerr=" required";
    }
    else
    {
        $foodtype=test_input($_POST["foodtype"]);
    }
    if(empty($_POST["approxfood"]))
    {
       $afooderr=" required";
    }
    else
    {
        $approxfood=test_input($_POST["approxfood"]);
    }
    if(empty($_POST["food"]))
    {
       $fooderr=" required";
    }
    else
    {
        $food=test_input($_POST["food"]);
    }
    if(empty($_POST["address"]))
    {
       $addresserr=" required";
    }
    else
    {
        $address=test_input($_POST["address"]);
    }
    if(empty($_POST["note"]))
    {
       $noteerr=" required";
    }
    else
    {
        $note=test_input($_POST["note"]);
    }
    include_once('link.php');
    if(!empty($_POST["fname"]) &&!empty($_POST["foodtype"]) && !empty($_POST["approxfood"]) && !empty($_POST["food"])
    && !empty($_POST["address"]) && !empty($_POST["note"]))
    {
        $fooddonation=$_POST['fname'];
        $ftype=$_POST['foodtype'];
        $afood=$_POST['approxfood'];
        $food=$_POST['food'];
        $address=$_POST['address'];
        $note=$_POST['note'];

        $sql="INSERT INTO donate_name values( '','$fooddonation','$ftype','$afood','$food','$address','$note')";
    }
   

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
    function test_input($data)
    {
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return($data);
    }
    
    ?>


    <div class="Donate Now">
        <div class="dn">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"method="post">
                <h1>Donate Now</h1>
                <b>Donation Name</b><br>
                <input type="text" name="fname"  placeholder="food donation"> <br>
                <div class="error"><?php echo $fnameerr; ?></div><br>

                <b>Food Type</b><br>
                <input type="radio" name="foodtype" value="Non-Veg Food">Non-Veg Food
                <input type="radio" name="foodtype" value="veg-food">Veg-Food
                <input type="radio" name="foodtype" value="Both Food">Both Food<br>
                <div class="error"><?php echo $ftypeerr; ?></div><br>

                <b>Approx Food</b> <br>
                <input type="text" name="approxfood" placeholder="Quntity in kg or grm"><br>
                <div class="error"><?php echo $afooderr; ?></div><br>

                <b>How's old food is?</b><br>
                <input type="text" name="food" placeholder="Preparing Time (Today 12hour or 24hour old)" ><br>
                <div class="error"><?php echo $oldfooderr; ?></div><br>

                <b>Donation Collection Address</b><br>
                <input type="text" name="address" placeholder="Enter Address"><br>
                <div class="error"><?php echo $addresserr; ?></div><br>

                <b>Special Note</b><br>
                <input type="text" name="note" placeholder="Special note for donation"><br>
                <div class="error"><?php echo $noteerr; ?></div><br>
                <input type="submit" name="sub-btn">
                <b>By clicking register. I agree to your donation terms.</b>

             </form>
        </div>
    </div>
</body>
</html>