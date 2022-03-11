<?php
    include("DB_conn.php");

    function work_detail($conn){
        if(isset($_POST['submit'])){
            $name_project = $_POST['name_project'];
            $name_client = $_POST['name_client'];
            $task = $_POST['task'];
//            $employee = $_POST['employee'];
            $description = $_POST['description'];
            $comm = $_POST['comm'];


            $sql = "Insert into customer (name_project, name_client, task, description, comm)values(:name_project, :name_client, :task, :description, :comm)";
            $stmt = $conn->prepare($sql);
            if(!$stmt){
                header("Location: forum.php!");
                exit();
            } else {
                $stmt->execute(['name_project' => $name_project, 'name_client' => $name_client,'task' => $task, 'description' => $description,'comm' => $comm]);
                header("location: forum.php?add=project");
            }
        }
    }

    function show_work_base($conn){
        $sql = "SELECT * FROM customer";
        $result = $conn->query($sql);

        while ($row = $result->fetch(PDO::FETCH_ASSOC)){
            $id = $row['id'];
            $name_project = $row ['name_project'];
            $name_client = $row['name_client'];
            $task = $row['task'];
            $employee = $row['employee'];
            $description = $row['description'];
            $comm = $row['comm'];

            echo"<p id='id_wp'><a href='./insert_info.php?id=$id'>$name_project</a></p>"; // ../ of (/file.[html/php,ect])
            echo"<p id='nc_wp'>$name_client</p>";
            echo"<p id='ta_wp'>$task</p>";
            echo"<p id='em_wp'>$employee</p>";
            echo"<p id='de_wp'>$description</p>";
            echo"<p id='co_wp'>$comm</p>";
        }
    }

    function add_time($conn){
        $id = $_GET['id'];
        if(isset($_POST["submit"])) {
            $time = $_POST['time'];
            $day = $_POST['day'];


                echo "<p>$id</p>";

            $sql = "UPDATE customer SET :day = :day, :time = :customer WHERE id = '" .$id. "'";
            $stmt = $conn ->prepare($sql);
            if(!$stmt){
                header("Location: forum.php!");
                exit();
            } else {
                $stmt->execute(['time' => $time, 'day' => $day]);

            }
        }
    }
    function show_work_mo($conn){
        $sql = "SELECT * FROM customer where day = 'monday'";
        $result = $conn->query($sql);

        while ($row = $result->fetch(PDO::FETCH_ASSOC)){
            $name_project = $row ['name_project'];
            $name_client = $row['name_client'];
            $task = $row['task'];
            $employee = $row['employee'];
//            $description = $row['description'];
//            $comm = $row['comm'];
            $day = $row['day'];
            $time = $row['time'];

            echo"<div id='monday'>";
            echo"<p>$name_project</p>";
            echo"<p>$name_client</p>";
            echo"<p>$task</p>";
            echo"<p>$employee</p>";
//            echo"<p>$description</p>";
//            echo"<p>$comm</p>";
            echo"<p>$day</p>";
            echo"<p>$time</p>";
            echo"</div>";
        }
    }

    function show_work_te($conn){
        $sql = "SELECT * FROM customer where day = 'tuesday'";
        $result = $conn->query($sql);

        while ($row = $result->fetch(PDO::FETCH_ASSOC)){
            $name_project = $row ['name_project'];
            $name_client = $row['name_client'];
            $task = $row['task'];
            $employee = $row['employee'];
//            $description = $row['description'];
//            $comm = $row['comm'];
            $day = $row['day'];
            $time = $row['time'];

            echo"<div id='tuesday'>";
            echo"<p>$name_project</p>";
            echo"<p>$name_client</p>";
            echo"<p>$task</p>";
            echo"<p>$employee</p>";
//            echo"<p>$description</p>";
//            echo"<p>$comm</p>";
            echo"<p>$day</p>";
            echo"<p>$time</p>";
            echo"</div>";
        }
    }

    function show_work_we($conn){
        $sql = "SELECT * FROM customer where day = 'wednesday'";
        $result = $conn->query($sql);

        while ($row = $result->fetch(PDO::FETCH_ASSOC)){
            $name_project = $row ['name_project'];
            $name_client = $row['name_client'];
            $task = $row['task'];
            $employee = $row['employee'];
//            $description = $row['description'];
//            $comm = $row['comm'];
            $day = $row['day'];
            $time = $row['time'];
            echo"<div id='wednesday'>";
            echo"<p>$name_project</p>";
            echo"<p>$name_client</p>";
            echo"<p>$task</p>";
            echo"<p>$employee</p>";
//            echo"<p>$description</p>";
//            echo"<p>$comm</p>";
            echo"<p>$day</p>";
            echo"<p>$time</p>";
            echo"</div>";
        }
    }

    function show_work_th($conn){
        $sql = "SELECT * FROM customer where day = 'thursday'";
        $result = $conn->query($sql);

        while ($row = $result->fetch(PDO::FETCH_ASSOC)){
            $name_project = $row ['name_project'];
            $name_client = $row['name_client'];
            $task = $row['task'];
            $employee = $row['employee'];
//            $description = $row['description'];
//            $comm = $row['comm'];
            $day = $row['day'];
            $time = $row['time'];

            echo"<div id='thursday'>";
            echo"<p>$name_project</p>";
            echo"<p>$name_client</p>";
            echo"<p>$task</p>";
            echo"<p>$employee</p>";
//            echo"<p>$description</p>";
//            echo"<p>$comm</p>";
            echo"<p>$day</p>";
            echo"<p>$time</p>";
            echo"</div>";
        }
    }

    function show_work_fr($conn){
        $sql = "SELECT * FROM customer where day = 'friday'";
        $result = $conn->query($sql);

        while ($row = $result->fetch(PDO::FETCH_ASSOC)){
            $name_project = $row ['name_project'];
            $name_client = $row['name_client'];
            $task = $row['task'];
            $employee = $row['employee'];
//            $description = $row['description'];
//            $comm = $row['comm'];
            $day = $row['day'];
            $time = $row['time'];

            echo"<div id='friday'>";
            echo"<p>$name_project</p>";
            echo"<p>$name_client</p>";
            echo"<p>$task</p>";
            echo"<p>$employee</p>";
//            echo"<p>$description</p>";
//            echo"<p>$comm</p>";
            echo"<p>$day</p>";
            echo"<p>$time</p>";
            echo"</div>";
        }
    }


    function adduser($conn){

    }

    function times($conn){
        $query = "SELECT * FROM times";
        $result = $conn->query($query);

        foreach ($result as $time){
            echo "<option>";
            echo ($time['time']);
            echo "</option>";
        }
    }
    function days($conn){
        $query = "SELECT * FROM day";
        $result = $conn->query($query);

        foreach ($result as $day){
            echo "<option>";
            echo ($day['day']);
            echo "</option>";
        }
    }
    function work_type($conn){
        $query = "SELECT * FROM work_type";
        $result = $conn->query($query);

        foreach ($result as $work){
            echo "<option>";
            echo ($work['work']);
            echo "</option>";
        }
    }



