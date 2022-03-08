<?php
    include("DB_conn.php");

    function work_detail($conn){
        if(isset($_POST['submit'])){
            $name_project = $_POST['name_project'];
            $name_client = $_POST['name_client'];
            $task = $_POST['task'];
            $employee = $_POST['employee'];
            $description = $_POST['description'];
            $comm = $_POST['comm'];
        }
    }

    function show_work_base($conn){

    }

    function add_time($conn){

    }

    function show_work_mo($conn){

    }

    function show_work_te($conn){

    }

    function show_work_we($conn){

    }

    function show_work_th($conn){

    }

    function show_work_fr($conn){

    }


    function adduser($conn){
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $password = $_POST['password'];
            $work = $_POST['work_type'];
        }
    }

