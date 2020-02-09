<?php
    require_once('connection.php');    

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="./img/logo.jpg" alt="" width="100%">
            </div>
            <div class="col-md-6">
                <h2>Input User Name</h2>
                <form action="testing.php" method="get">
                    <div class="form-group">
                        <label for="email">First Name:</label>
                        <input type="text" class="form-control" name="first_name" placeholder="Enter first name" id="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Last Name:</label>
                        <input type="text" class="form-control" name="last_name" placeholder="Enter last name" id="pwd">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter password" id="pwd">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>