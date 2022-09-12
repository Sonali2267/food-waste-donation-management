<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container
        {
            width:100%;
            float: left;
            height:auto;
        }
        .header
        {
            width:100%;
            float:left;
            background-image: url(images/bg.jpg); 
            background-repeat: no-repeat;
            background-size: cover;
        }
        .h1
        {
            width:97%;
            float:left;
            margin-left: 40px; 
            height:105px;
        }
        .h1 h2
        {
            color:cornsilk;
            font-size: 45px;
            margin-top: 0px;
        }
        .h1 marquee
        {
            height:58px;
        }
        .h1 h1
        {
            margin: 0;
        }
        .h2
        {
            width:100%;
            float:left;
            background-color: aqua;
        }
        .left
        {
            width:50%;
            float:left;
        }
        .left h2
        {
            margin-left: 40px;
        }
        .right
        {
            width:50%;
            float:left;
        }
        .text
        {
            width:18%;
            float:left;
            margin-left: 380px;
        }
        .image
        {
            width:25%;
            float:left;

        }
        .image img
        {
            width:45px;
            float:left;
        }
        .all
        {
            width:100%;
            float:left;
            background-image: url(images/bg.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }
        .list
        {
            width:20%;
            float:left;
        }
        .list h3
        {
            background-color: cadetblue;
            border-right:1px solid #000;
            border-bottom:1px solid #000;
            margin-left: 40px;
            height: 45px;
            text-align: center;
            padding-top: 20px;
        }
        .listitems
        {
            width:100%;
            float:left;
        }
        .listitems .i1  li
        {
            list-style-type: none;
        }
        .i1
        {
            width:100%;
            float:left;
            border-right:1px solid #000;
            border-bottom:1px solid #000;
        }
        .img
        {
            width:35%;
            float:left;
        }
        .img img
        {
            width:45px;
            float: left;
        }
        .data
        {
            width:50%;
            float:left;
            font-size: 25px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="h1">
                <marquee position="left"><h2>Medica Hospital</h2></marquee>
                <h1>ADMIN DASHBOARD</h1>
                
            </div>
        </div>
            <div class="h2">
                <div class="left">
                    <h2>HMS</h2>
                </div>
                <div class="right">
                    <div class="text">
                       <h2> MEDICA</h2>
                    </div>
                    <div class="image">
                        <img src="images/user.png">
                    </div>
                </div>
            </div>  
            <div class="clear"></div> 
        <div class="all">
            <div class="list">
                <h3>MAIN NAVIGATION</h3>
            <div class="listitems">
                <ul>
                    <div class="i1">
                        <li><div class="img">
                            <img src="images/dblogo.png">
                        </div>
                            <div class="data">
                            <b>Dashboard</b>
                        </div>
                    </li>
                    </div>
                    <div class="i1">
                    <li>
                        <div class="img">
                        <img src="images/doclogo.png">
                    </div>
                    <div class="data">
                    <b>Doctors</b>
                </div>
            </li>
                    </div>
                   
                    <div class="i1">
                    <li><div class="img"><img src="images/patlogo.png">
                        </div>
                        <div class="data">
                        <b>Patients</b>
                    </div>
                </li>
                    </div>
                    <div class="i1">
                    <li><div class="img"><img src="images/pg.png">
                        </div>
                        <div class="data">
                        <b>Appointment</b>
                    </div>
                </li>
                    </div>
                    
                </ul>
            </div>
            </div>
        </div>            
    </div>
</body>
</html>