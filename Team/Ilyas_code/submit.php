<?php
    // print_r($_POST);

    $name = $_POST['name'];
    $class = $_POST['class'];
    $rollNo = $_POST['rollNo'];
    $age = $_POST['age'];
    $marks = $_POST['marks'];
    $city = $_POST['city'];

    //CONNECTION WITH DATABASE

    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'student';

    $conn = mysqli_connect($servername, $username, $password, $database);

    $sql = "INSERT INTO `student`(`name`, `class`, `rollNo`, `age`, `marks`, `city`) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ssiiis", $name, $class, $rollNo, $age, $marks, $city);

    echo $sql;


    
?>