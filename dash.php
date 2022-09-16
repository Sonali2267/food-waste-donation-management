<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-image: url('images/dbg.jpg');

        }
        .container{
            width:100%;
            float:left;
            
        }
        .header{
            width:100%;
            float:left;
            background-color:darkslategray;
            height:80px;
        }
        .admin{
            width:27%;
            float:left;
            background-color: brown;
            height: 81px;
        }
        .admin b{
            font-size: 30px;
            margin-top: 20px;
            margin-left: 105px;
        }
        .back{
            width:13%;
            float:left;
            margin-left: 720px;
            margin-top: 25px;
        }
        .back b{
            font-size: 20px;
        }
        .dash{
            width:27%;
            float:left;
            border:1px solid black;
            background-color: darkcyan;
        }
       .dm img{
            width:9%;
            float:left;
       }
       .change{
        width:69%;
        float:right;
        border:1px solid black;
        margin:22px;
       }
       .state{
        width:225px;
        height: 90px;
        float:left;
        background-color: red;
        margin:30px 30px ;
       }
       .state b{
        margin: 20px 20px 20px 83px;
       }
       .city{
        width:225px;
        height: 90px;
        float:left;
        background-color: green;
        margin:30px 30px ;
       }
       .city b{
        margin: 20px 20px 20px 83px;
       }
       .donar{
        width:225px;
        height: 90px;
        float:left;
        background-color: blueviolet;
        margin:30px 30px ;
       }
       .donar b{
        margin: 20px 20px 20px 83px;
       }
       .listedfood{
        width:225px;
        height: 90px;
        float:left;
        background-color: green;
        margin:30px 30px ;
       }
       .listedfood b{
        margin: 20px 20px 20px 83px;
       }
       .request{
        width:225px;
        height: 90px;
        float:left;
        background-color: red;
        margin:30px 30px ;
       }
       .request b{
        margin: 20px 20px 20px 83px;
       }
       .rejected{
        width:225px;
        height: 90px;
        float:left;
        background-color: gray;
        margin:30px 30px ;
       }
       .rejected b{
        margin: 20px 20px 20px 83px;
       }
       .completed{
        width:225px;
        height: 90px;
        float:left;
        background-color: blanchedalmond;
        margin:30px 30px ;
       }
       .completed b{
        margin: 20px 20px 20px 83px;
       }
            </style>
            </head>
<body>
<div class="container">
        <div class="header">
            <div class="admin"> 
             <b>| Admin |</b>
            </div>
            <div class="back">
                <b>Back to portal</b>
            </div>
    </div>
        <div class="dash">
        <div class="dm">     
            </div>
        <div class="md">  
        <h1>Dashboard</h1></div>
        <div class="donation area"><h1>State</h1></div>
        <div class="volunteers"><h1>City</h1></div>
        <div class="gallery"><a href="event.php"><h1>Register Food Donars</h1></a></div>
        <div class="listed"><a href="donate.php"><h1>Donate Food</h1></a></div>
        <div class="requested"><h1>Food Requests</h1>
    </div>
        <div class="gallery"><h1>Enquiry</h1></div>
        <div class="pages"><h1>Pages</h1></div>
        <div class="report"><h1>Report</h1></div>
        <div class="search"><h1>Search Listed Food</h1></div>
        <input type="submit" name="logout" value="Logout">
        </div>
        <div class="state">
            <b>Total State</b><br>9
        </div>
        <div class="city">
            <b>Total City</b><br>13
        </div>
        <div class="donar"><a href="event.php"><b>Total Food Donar</b></a></div>
        <div class="listedfood">
            <a href="donate.php"><b>Total Donate Food</b></a>
        </div>
        <div class="request">
            <b>Total Requested</b>
        </div>
        <div class="new request">
            <b>New Requested</b>
        </div>
        <div class="rejected">
            <b>Rejected Request</b>
        </div>
        <div class="completed">
            <b>Food Take Away/ Requested Completed</b>
        </div>
</div>

</body>
</html>