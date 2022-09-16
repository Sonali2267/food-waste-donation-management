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
                <th>First Name</th>
                <th>Last Name</th>
                <th>Mail</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Password</th>
                <th>Confirm Password</th>
                <th colspan="2">Action</th>
            </tr>
            <tr>
                <?php 
                include('link.php');
                $sql = "SELECT * FROM user_detail";
                $run = mysqli_query($link,$sql);
                if($run)
                {
                   while( $row = mysqli_fetch_assoc($run))
                   {
                    
                    ?>

                    <tr>
                    <td><?php echo $row['firstname']; ?></td>
                    <td><?php echo $row['lastname']; ?></td>
                    <td><?php echo $row['mail']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                     <td><?php echo $row['address']; ?></td>
                     <td><?php echo $row['password']; ?></td>
                     <td><?php echo $row['cnfrmpass']; ?></td> 
                     <td><a href="update.php?id=<?php echo $row['id'];?>">Update</a></td>
                     <td><a href="delete.php?id=<?php echo $row['id'];?>">Delete</a></td>
                    </tr>
                    <?php
                   }
                }
                ?>
        </table>
    </div>
</body>
</html>