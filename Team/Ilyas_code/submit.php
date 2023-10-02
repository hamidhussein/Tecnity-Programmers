<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$database = "student_data";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $database);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $class = $_POST["class"];
    $rollNo = $_POST["rollNo"];
    $age = $_POST["age"];
    $marks = $_POST["marks"];
    $city = $_POST["city"];

    // Create a prepared statement
    $stmt = $conn->prepare("INSERT INTO student (name, class, rollNo, age, marks, city) VALUES (?, ?, ?, ?, ?, ?)");
    
    // Bind parameters
    $stmt->bind_param("ssssss", $name, $class, $rollNo, $age, $marks, $city);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Record added successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}
?>
