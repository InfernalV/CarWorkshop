<?php
include("includes/Functions.php");
work_detail($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">-->
    <title>Document</title>
</head>
<body>
<form method="post" action="forum.php">
    <div class="">
        <label for="name_project" class="form-label">project name:</label>
        <input type="name_project" class="form-control" id="name_project" placeholder="Enter name of the project" name="name_project">
    </div>
    <div class="mb-3">
        <label for="name_client" class="form-label">Client:</label>
        <input type="name_client" class="form-control" id="name_client" placeholder="Enter Client name" name="name_client">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<a href="nav.php"<input type="submit"/>Nav
<a href="task.php"<input type="submit"/>Task
</body>
</html>