<?php
include('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="header.css">
    <style>
        .main{
            width:100%;
            float:left;
        }
        .image{
            width:50%;
            float:left;
            }
            .image img{
            width:100%;
            float:left;
            height:500px;
            }
        .dn{
            width:50%;
            float:right;
            text-align: center;
            height:500px;
            background-color: whitesmoke;
        }
        .error
        {
            color:red;
        }
        .name{
            width: 50%;
            float:left;
            text-align: center;
        }
        .name input{
            padding:10px 10px 10px 10px;
            width:180px;
            border-radius: 10px;
            margin:8px;
        }
        .dn1{
            width:100%;
            float:left;
            background-color: whitesmoke;
        }
        .type{
            width:44%;
            float:right;
            text-align: center;
        }
        .type ul{
            width:122px;
        }
    </style>
</head>
<body>
    <?php
    error_reporting(0);
    $nameerr= $fnameerr= $ftypeerr= $afooderr= $oldfooderr= $addresserr="";
    $yourname= $fooddonation= $foodtype= $approxfood= $food= $address="";
    if(isset($_POST['sub-btn']))
    {
        if(empty($_POST["name"]))
    {
       $nameerr=" required";
    }
    else
    {
        $yourname=test_input($_POST["name"]);
    }
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
    
    include_once('link.php');
    if(!empty($_POST["name"]) &&!empty($_POST["fname"]) &&!empty($_POST["foodtype"]) && !empty($_POST["approxfood"]) && !empty($_POST["food"])
    && !empty($_POST["address"]))
    {
        $yourname=$_POST['name'];
        $fooddonation=$_POST['fname'];
        $ftype=$_POST['foodtype'];
        $afood=$_POST['approxfood'];
        $food=$_POST['food'];
        $address=$_POST['address'];

        $sql="INSERT INTO donate_name values( '','$yourname','$fooddonation','$ftype','$afood','$food','$address')";
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

<div class="main">
    <div class="image">
        <img src="images/s3.jpg">
    </div>
        <div class="dn">
            <div class="dn1">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"method="post">
                <h1>Donate Now</h1>
                <div class="name">
                <b>Your Good Name</b><br>
                <input type="text" name="name" placeholder="Your Name"><br>
                <div class="error"><?php echo $nameerr; ?></div><br></div>
                <div class="name">
                <b>Food Name</b><br>
                <input type="text" name="fname"  placeholder="food donation"> <br>
                <div class="error"><?php echo $fnameerr; ?></div><br></div>
                
                <div class="name">
                <b>Approx Food</b> <br>
                <input type="text" name="approxfood" placeholder="Quntity in kg or grm"><br>
                <div class="error"><?php echo $afooderr; ?></div><br></div>
                <div class="name">
                <b>How's old food is?</b><br>
                <input type="text" name="food" placeholder="Preparing Time (Today 12hour or 24hour old)" ><br>
                <div class="error"><?php echo $oldfooderr; ?></div><br></div>
                <div class="name">
                <b>Donation Collection Address</b><br>
                <input type="text" name="address" placeholder="Enter Address"><br>
                <div class="error"><?php echo $addresserr; ?></div><br></div>
                
                <div class="type">
                <b>Food Type</b><br><ul>
                <li><input type="radio" name="foodtype" value="Non-Veg Food">Non-Veg Food<br></li>
                <li><input type="radio" name="foodtype" value="veg-food">Veg-Food<br></li>
                <li><input type="radio" name="foodtype" value="Both Food">Both Food<br></li>
                <div class="error"><?php echo $ftypeerr; ?></div><br></div></ul>
                <div class="name">
                <input type="submit" name="sub-btn"></div>
                

             </form>
            </div>
        </div>
    </div>
</body>
</html>