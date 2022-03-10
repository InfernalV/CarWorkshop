<?php
include("includes/Functions.php");
add_time($conn);
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
</head>
<body>
<form class="" action="insert_info.php" method="post">
    <div class="day">
        <select class="form-select" id="sel1" name="sellist1">
        <option>-----select day-----</option>
        <?php days($conn) ?>
    </select>
    </div>
</form>
<form class="" action="insert_info.php" method="post">
    <div class="time">
        <select class="form-select" id="sel1" name="sellist1">
            <option>-----select time-----</option>
            <?php times($conn) ?>
        </select>
    </div>
</form>
<form class="" action="insert_info.php" method="post">
    <div class="SubmitInf">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>


<a href="nav.php"<input type="submit"/>Nav
<a href="week.php"<input type="submit"/>Week
</body>
</html>