<?php
include('link.php');
@$id = $_GET['id'];
$sql = "select * from donate_name  where id='$id'";
$run = mysqli_query($link, $sql);
$row = mysqli_fetch_array($run);
$fnameerr= $ftypeerr= $afooderr= $oldfooderr= $addresserr= $noteerr="";
$fooddonation= $foodtype= $approxfood= $food= $address= $note="";

if (isset($_POST['update_btn'])) {
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
if(!empty($_POST["fname"]) &&!empty($_POST["foodtype"]) && !empty($_POST["approxfood"]) && !empty($_POST["food"])
&& !empty($_POST["address"]) && !empty($_POST["note"]))
{
 $fooddonation=$_POST['fname'];
 $ftype=$_POST['foodtype'];
 $afood=$_POST['approxfood'];
 $food=$_POST['food'];
 $address=$_POST['address'];
 $note=$_POST['note'];

 $update = "UPDATE user_detail SET fname='$fooddonation',foodtype='$ftype',approxfood='$afood',food='$food',address='$address',
      note='$note'WHERE id='$id'";
        $data = mysqli_query($link,$update);
            
        header("location:donateevent.php");
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
<div class="main">
    <div class="image">
        <img src="images/s3.jpg">
    </div>
        <div class="dn">
            <div class="dn1">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] . '?id=' . $id);?>"method="post">
                <h1>Donate Now</h1>
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
                <div class="name">
                <b>Special Note</b><br>
                <input type="text" name="note" placeholder="Special note for donation"><br>
                <div class="error"><?php echo $noteerr; ?></div><br></div>
                <div class="type">
                <b>Food Type</b><br><ul>
                <li><input type="radio" name="foodtype" value="Non-Veg Food">Non-Veg Food<br></li>
                <li><input type="radio" name="foodtype" value="veg-food">Veg-Food<br></li>
                <li><input type="radio" name="foodtype" value="Both Food">Both Food<br></li>
                <div class="error"><?php echo $ftypeerr; ?></div><br></div></ul>
                <div class="name">
                <a href="donateevent.php"><input type="submit" name="sub-btn"></a></div>
                

             </form>
            </div>
        </div>
    </div>
</body>
</html>