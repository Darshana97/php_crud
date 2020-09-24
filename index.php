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
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Darshana</td>
                <td>Kandy</td>
                <td>
                    <a href="#">Edit</a>
                </td>
                <td>
                    <a href="#">Delete</a>
                </td>
            </tr>
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