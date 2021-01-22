<?php

      // INitialize the connection variables
      $server = 'localhost';
      $username = 'root';
      $password = '';
      $database = 'StudentsDb'; 
  
      // Connect to the database
      $connection = mysqli_connect($server, $username, $password, $database); 

      $id = $_GET["id"];

      $query = 'DELETE FROM Students WHERE Id = '.$id; 

      mysqli_query($connection, $query);
      header('Location: index.php');

?>
