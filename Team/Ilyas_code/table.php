<?php
include "connnection.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    
    <script>
        $(document).ready(function (){
            $('#myTable').dataTable();
        } )
    </script>

    <title>Student Data</title>
  </head>
  <body>
    
    <div class="container">
        <table class="table" id="myTable">
            <thead>
                <tr>
                    <td scope="col">S.No</td>
                    <td scope="col">Name</td>
                    <td scope="col">Class</td>
                    <td scope="col">Roll no</td>
                    <td scope="col">Age</td>
                    <td scope="col">Marks</td>
                    <td scope="col">City</td>
                    <td scope="col">action</td>
                </tr>
            </thead>
            <tbody>
            <?php
                $sql = "SELECT * FROM `student`";
                $result = mysqli_query($conn, $sql);
                $sNo = 0;

                while($row = mysqli_fetch_assoc($result)){
                    $sNo = $sNo + 1;
                    echo "
                    <tr>
                        <td>" . $sNo . "</td>
                        <td>" . $row['name'] . "</td>
                        <td>" . $row['class'] . "</td>
                        <td>" . $row['rollNo'] . "</td>
                        <td>" . $row['age'] . "</td>
                        <td>" . $row['marks'] . "</td>
                        <td>" . $row['city'] . "</td>
                        <td><button class='edit btn btn-sm btn-warning'>Edit</button>
                        <button class='edit btn btn-sm btn-warning'>Edit</button></td>
                    </tr>";
                }
                ?>

            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>