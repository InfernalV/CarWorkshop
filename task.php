<?php
include("includes/Functions.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./css/workshop.css" type="text/css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">-->
    <title>Document</title>
    <div class="Logo"><img src="Images/J&B_Logo.png"></div>
</head>
<body>
<form method="post" action="forum.php">
    <div class="Nav_Task">
        <div class="Project">
            <label for="username" class="form-label">username:</label>
            <input type="username" class="form-control" id="username" placeholder="Enter username" name="username">
        </div>
        <div class="Client">
            <label for="pwd" class="form-label">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
        </div>
        <div class="Workload">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember"> Remember me
            </label>
        </div>
        <div class="Description">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
<div>
    <?php show_work_base($conn) ?>
</div>
<div class="mButton1">
    <a href="nav.php"<input type="submit"/>Nav
</div>
<div class="mButton2">
    <a href="forum.php"<input type="submit"/>Forum
</div>
<div class="mButton3">
    <a href="week.php"<input type="submit"/>Week
</div>
<div class="mButton4">
    <a href="insert_info.php"<input type="submit"/>Insert_Info
</div>
</body>
</html>