<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "StudentsDb";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!doctype html>
    <html lang="en">

    <head>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
        <title>Welcome to Students Management System</title>
    </head>

<body>
    <h1>Welcome to New Horizons!</h1>
    <?php
        $connection = mysqli_connect($server, $username, $password, $databaseName);
        if($connection)
            {
                echo ('<div class="alert alert-success">Connected Successfully!</div>');
            }
            else
            {
                echo ('<div class="alert alert-danger">Failed to Connect</div>');
            }
    ?>
   
    <h3>Students Info</h3>
    <div class="row">
        <div class="offset-2 col-6">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Birthdate</th>
                        <th>Actions</th>
                    </tr>
                </thead>
              <tbody>
              <?php
                $query = "SELECT * FROM Students"; 
                $result = mysqli_query($connection, $query); 
                $resultsCount = mysqli_num_rows($result);
                if($resultsCount > 0)
                {
                    // echo '<tr><td colspan="5">'.$resultsCount.' have been found</td></tr>';
                    while ($row = mysqli_fetch_assoc($result)) {
                        $deleteCell = '<td><a href="delete-student.php?id='.$row["Id"].'" class="btn btn-danger">Remove</a></td>';
                        echo ('<tr><td>'.$row["Id"].'</td><td>'.$row["firstName"].'</td><td>'.$row["lastName"].'</td><td>'.$row["email"].'</td><td>'.$row["birthDate"].'</td>'.$deleteCell.'</tr>');
                    }
                }
                else
                {
                    echo '<tr><td colspan="5">No Data Found</td></tr>';
                }

              ?>
        </tbody>
              
            </table>
            
                <a class="btn btn-success" href="register.php">Add Students</a>
        </div>
    </div>
  

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
        integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj"
        crossorigin="anonymous"></script>

        <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>


        <script>
            $(document).ready(function() {
                $('table').DataTable(); 
            });
        </script>
</body>
