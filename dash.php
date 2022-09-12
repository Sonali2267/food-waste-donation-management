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
            background-color:darkslategray;
            height:80px;
        }
        .admin{
            width:45%;
            float:left;
            margin-left: 165px;
            margin-top: 20px;
        }
        .admin b{
            font-size: 30px;
        }
        .back{
            width:10%;
            float:left;
            margin-left: 60px;
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
            </style>
            </head>
<body>
<div class="container">
        <div class="header">
            <div class="admin"> 
             <b>Reuse Wastage of Needy Items | Admin</b>
            </div>
            <div class="back">
                <b>Back to portal</b>
            </div>
    </div>
        <div class="dash">
        <div class="dm">      
        <img src="images/dm.jfif"> 
            <select name="Donation Management">
                <option value=""> <h1>Donation Management</h1></option>
                <option value="today donation"> today donation</option>
                <option value="donation delevered">donation  delevered</option>
                <option vallue="All Allocated Donation List"> all allocated donation list</option>
    </select>
        </div>
        <div class="md">  
        <h1>Manage Donators</h1></div>
        <div class="donation area"><h1>Create Donation Areas</h1></div>
        <div class="volunteers"><h1>Volunteers List</h1></div>
        <div class="gallery"><h1>Manage Gallery</h1></div>
        <div class="gallery"><h1>Money Donation</h1></div>
        </div>
        <form action="change password">
        <div class="change">
            <h1>Admin Change Password</h1>
        Current Password:<input type="text" name="current password" value=""><br>
        <br>
        New Password:<input type="text" name="new password" value=""><br>
        <br>
        Current Password:<input type="text" name="current password" value=""><br>
        </div>
        </form>
</div>

</body>
</html>