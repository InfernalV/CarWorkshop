<?php
include("includes/Functions.php");
adduser($conn);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<form class="" action="add_employee.php" method="post">
    <form action="/">
        <div class="mb-3 mt-3">
            <label for="username" class="form-label">username:</label>
            <input type="username" class="form-control" id="username" placeholder="Enter username" name="username">
        </div>
        <div class="mb-3">
            <label for="pwd" class="form-label">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
        </div>
        <div class="form-check mb-3">
            <label class="form-check-label"></label>
        </div>
        <button type="submit" class="btn btn-primary">add</button>
    </form>
    <a href="employee.php"<input type="submit"/>Employee
</body>
</html>