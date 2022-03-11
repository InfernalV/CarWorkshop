<?php
include("includes/Functions.php");
work_detail($conn);
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
<form method="post" action="forum.php">
    <div class="">
        <label for="name_project" class="form-label">project name:</label>
        <input type="text" class="form-control" id="name_project" placeholder="Enter name of the project" name="name_project">
    </div>
    <div class="mb-3">
        <label for="name_client" class="form-label">Client:</label>
        <input type="text" class="form-control" id="name_client" placeholder="Enter Client name" name="name_client">
    </div>

        <div>
            <label for="sel1"></label><select class="form-select" id="sel1" name="task">
                <option>-----select work type-----</option>
                <?php work_type($conn) ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">description:</label>
            <input type="text" class="form-control" id="description" placeholder="Enter the description" name="description">
        </div>


        <div class="mb-3">
            <label for="comm" class="form-label">comment:</label>
            <input type="text" class="form-control" id="comm" placeholder="Enter client comment" name="comm">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>



<a href="nav.php"<input type="submit"/>Nav
<a href="task.php"<input type="submit"/>Task
</body>
</html>