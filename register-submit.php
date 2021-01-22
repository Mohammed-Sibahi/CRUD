<?php 

    // INitialize the connection variables
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'StudentsDb'; 

    // Connect to the database
    $connection = mysqli_connect($server, $username, $password, $database); 

    if(!$connection)
        {
            echo ('failed to connect');
        }

        else
        {
            // Insert the data 
            // Get the data 
            $firstName = $_POST["firstName"];
            $lastName = $_POST["lastName"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $passwordConfirm = $_POST["passwordConfirm"]; 

            if($password != $passwordConfirm)
                echo ('Passowords do not mathc'); 
            else
            {
                $query = "INSERT INTO Students(FirstName, LastName, Email, Password, Birthdate) VALUES('".$firstName."','".$lastName."','".$email."','".$password."','2000-06-01')";

                mysqli_query($connection, $query); 

                header('Location: index.php');
            }

        }

?>