<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "student_data";

$conn = new mysqli($servername, $username, $password, $database);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $class = $_POST["class"];
    $rollNo = $_POST["rollNo"];
    $age = $_POST["age"];
    $marks = $_POST["marks"];
    $city = $_POST["city"];

    $stmt = $conn->prepare("INSERT INTO student (name, class, rollNo, age, marks, city) VALUES (?, ?, ?, ?, ?, ?)");
    
    $stmt->bind_param("ssssss", $name, $class, $rollNo, $age, $marks, $city);

    if ($stmt->execute()) {
        $insert = false;
    } else {
        echo "Error: " . $stmt->error;
    }
    
    $stmt->close();
}
?>



<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "student_data";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
