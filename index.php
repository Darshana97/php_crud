<?php 
    include('server.php'); 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Todo App</title>
</head>
<body>

    <?php if(isset($_SESSION['msg'])): ?>
        <div class="msg">
            <?php 
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
             ?>
        </div>
   

    <?php endif ?>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php

                while ($row = mysqli_fetch_array($results)) { ?>
                    <tr>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td>
                            <a href="#">Edit</a>
                        </td>
                        <td>
                            <a href="#">Delete</a>
                        </td>
                    </tr>
               <?php }

            ?>
        </tbody>
    </table>
    <form method="post" action="server.php">
        <div class="input-group">
            <label>Name</label>
            <input type="text" name="name">
        </div>
        <div class="input-group">
            <label>Address</label>
            <input type="text" name="address">
        </div>
        <div class="input-group">
            <button type="submit" name="save" class="btn">Save</button>
        </div>
    </form>
</body>
</html>