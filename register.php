<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>New Horizons: Registration Form</title>
</head>

<body>
    <h1>Welcome to New Horizons!</h1>
    <form action="register-submit.php" method="POST">
        <div class="container">
            <h2>Register</h2>
            <p>Please fill in this form to create an account.</p>
            <hr>
            
            <div class="form-group">
                <label for="email"><b>First Name</b></label>
                <input type="text" placeholder="Enter First Name" class="form-control" name="firstName" id="firstname" required>
            </div>
            
            <div class="form-group">
                <label for="lastname"><b>Last Name</b></label>
                <input type="text" placeholder="Enter Last Name" class="form-control" name="lastName" id="lastname" required>
            </div>
            
            <div class="form-group">
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" class="form-control" name="email" id="email" required>
            </div>
            
            <div class="form-group">
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" class="form-control" name="password" id="psw" required>
            </div>
            
            <div class="form-group">
                <label for="psw-repeat"><b>Repeat Password</b></label>
                <input type="password" placeholder="Repeat Password" class="form-control" name="passwordConfirm" id="psw-repeat" required>
            </div>
            
            <hr>

            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
            <button type="submit" class="btn btn-success">Register</button>

        </div>

        <div class="container signin">
            <p>Already have an account? <a href="#">Sign in</a>.</p>
        </div>
    </form>
</body>

</html>