<!DOCTYPE html>
<html>
<head>
    <title>Student Information Form</title>
</head>
<body>
    <h2>Student Information Form</h2>
    <form action="submit.php" method="POST">
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
</body>
</html>
