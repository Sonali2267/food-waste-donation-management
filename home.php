<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="slider/css/flexslider.css" type="text/css" media="screen" />

    <style>
        body
        {
            font-family: 'Montserrat', sans-serif;
        }
        .container
        {
            width:100%;
            float:left;
        }
        .header
        {
            width: 100%;
            float:left;
            background-repeat: no-repeat;
            background-size: cover;
            background-color: whitesmoke;
            background-image: url('images/mm.jpg');
        }
        .demo
        {
            width:960px;
            margin:0 auto;
        }
        .left
        {
            width:60%;
            float:left;
        }
        .phn
        {
            width:25%;
            float:left;
        }
        .pimg
        {
            width:20%;
            float: left;
            margin-top: 10px;
            display:inline-block;
        }
        .pimg img
        {
            width:100%;
            float:left;
        }
        .phn p
        {
            margin-left: 30px;
        }
        .mail
        {
            width:25%;
            float:left;
        }
        .mimg
        {
            width:20%;
            float:left;
        }
        .mimg img
        {
            width:100%;
            float:left;
        }
        .mail p
        {
            margin-left: 30px;
        }
        .right
        {
            width:40%;
            float:left;
        }
        .right a{
            margin: 120px;
        }
        .logos
        {
            width:25%;
            float:right;
            margin-top: 10px;
        }
        .logoimg1 
        {
            width:25%;
            float:left;
        }
        .logoimg1 img
        {
            width:100%;
            float:right;
            margin:-31px ;
        }
        .logoimg2 
        {
            width:25%;
            margin:0px 30px;
        }
        .logoimg2 img
        {
            width:100%;
            float:right;
            margin:-31px;
        }
        .sin{
            margin-top:18px;
            margin-left: 88px;
            
        }
        .clear
        {
            clear:both;
        }
        .line
        {
            width:960px;
            margin:0 auto;
        }
        .line div
        {
            background-color:#000;
            width:100%;
            height: 1px;

        }
        .demo1
        {
            width:960px;
            margin:0 auto;
        }
        .left1
        {
            width:25%;
            float:left;
        }
        .limg
        {
            width:40%;
            float:left;
        }
        .limg img
        {
            width:100%;
            float:left;
        }
        .left1 h2
        {
            margin-left: 50px;
            font-size: 20px;
        }
        .right1
        {
            width:70%;
            float:left;
        }
        .list
        {
            width:100%;
            float:left;
        }
        .list ul
        {
            width:100%;
            float:left;
        }
        .list ul li
        {
            text-decoration: none;
            display: inline-block;
            margin-left: 60px;
        }
        .list ul li b
        {
            margin-left: -18px;

        }
        .about
        {
            width:100%;
            float:left;
        }
        .a1
        {
            width:50%;
            float:left;
        }
        .a1 h5
        {
            margin-top: 100px;
            margin-left: 150px;
        }
        .a1 h1
        {
            margin-left: 150px;
        }
        .a1 p
        {
            margin-left: 150px;
        }
        .a1 input
        {
            margin-left: 150px;
            background-color: cyan;
        }
        .a2
        {
            width:50%;
            float:left;
        }
        .a2  img
        {
            width:100%;
            height: 350px;
        }
        .ab1
        {
            width:100%;
            float:left;
        }
        .a3
        {
            width:50%;
            float:left;
            margin-top: 100px;
        }
        .a3 b
        {
            margin-top: 100px;
            margin-left: 150px;
        }
        .a3 h1
        {
            margin-left: 150px;
        }
        .a3 p
        {
            margin-left: 150px; 
        }
        .a4
        {
            width:50%;
            float:left;
        }
        .a4  img
        {
            width:100%;
            height: 350px;
        }
        .md 
        {
         margin: -34px 310px;
         width: 115%;
          text-decoration:none;
      }
    </style>
</head>
<body>
    <div class="container">
        <?php include('header.php') ?>

     <div class="flexslider">
          <ul class="slides">
            <li>
  	    	    <img src="images/s2.jpg" />
  	    		</li>
  	    		<li>
  	    	    <img src="images/s3.jpg" />
  	    		</li>
  	    		<li>
  	    	    <img src="images/s1.jpg" />
  	    		</li>
  	    		<li>
  	    	    <img src="images/s4.jpg" />
  	    		</li>
          </ul>
                
                </div>
        <div class="about">
            <div class="a2">
                <img src="images/abc.jpg ">
                </div>
            <div class="a1">
                <h5>FEED THE HUNGRY</h5>
                <h1>WELCOME!</h1>
                <p>IF YOU CANNOT FEED A HUNDRED PEOPLE,<br> THEN FEED JUST ONCE.</p>
            </div>
            
            <div class="clear"></div>
        </div>
        
        <div class="ab1">
            <div class="a3">
                <b>ABOUT US</b>
                <h1>Our Qualified Team Is Ready To Help You!</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non mauris nulla tincidunt fermantum.Sagittis pallentesque.</p>
            </div>
        
        <div class="a4">
            <img src="images/mm.jpg">
        </div>
        </div>
            </div>
    </div>
    </div>
<!-- jQuery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>

  <!-- FlexSlider -->
  <script defer src="slider/js/jquery.flexslider.js"></script>

  <script type="text/javascript">
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>

</body>
</html>