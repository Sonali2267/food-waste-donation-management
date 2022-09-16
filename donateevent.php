<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,th,td
        {
           border: 1px solid black;
           
        }
    </style>
</head>
<body>
    <div class="table">
        <table cellpadding="10px" cellspacing="0">
            <tr>
                <th>Food Name</th>
                <th>Approx food</th>
                <th>Old Food</th>
                <th>Donation Address</th>
                <th>Special Note</th>
                <th>Food Type</th>
                <th colspan="2">Action</th>
            </tr>
            <tr>
                <?php 
                include('link.php');
                $sql = "SELECT * FROM donate_name";
                $run = mysqli_query($link,$sql);
                if($run)
                {
                   while( $row = mysqli_fetch_assoc($run))
                   {
                    
                    ?>

                    <tr>
                    <td><?php echo $row['foodname']; ?></td>
                    <td><?php echo $row['approx_food']; ?></td>
                    <td><?php echo $row['old_food']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                     <td><?php echo $row['special_note']; ?></td>
                     <td><?php echo $row['food_type']; ?></td> 
                     <td><a href="update1.php?id=<?php echo $row['id'];?>">Update</a></td>
                     <td><a href="delete1.php?id=<?php echo $row['id'];?>">Delete</a></td>
                    </tr>
                    <?php
                   }
                }
                ?>
        </table>
    </div>
</body>
</html>