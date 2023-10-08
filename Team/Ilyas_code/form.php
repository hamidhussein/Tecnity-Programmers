<?php
include "connnection.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Information Form</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<?php
    $insert = true;

    if($insert){
        echo "<div id='success-alert' class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Success</strong> Your note is added successfully
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
    }
?>

    <script>
        // Automatically hide the success alert after 0.5 seconds (1000 milliseconds)
        setTimeout(function(){
            document.getElementById('success-alert').style.display = 'none';
        }, 1000);
    </script>
     
    <h2>Student Information Form</h2>
    <form method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>

        <label for="class">Class:</label>
        <input type="text" id="class" name="class"><br><br>

        <label for="rollNo">Roll Number:</label>
        <input type="text" id="rollNo" name="rollNo"><br><br>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age"><br><br>

        <label for="marks">Marks:</label>
        <input type="number" id="marks" name="marks"><br><br>

        <label for="city">City:</label>
        <input type="text" id="city" name="city"><br><br>

        <input type="submit" value="Submit">
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
