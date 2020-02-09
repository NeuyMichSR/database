<?php
require_once('connection.php');
try {
    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO tb_list(first_name, last_name, email, password)
    VALUES (:first_name, :last_name, :email, :password)");
    $stmt->bindParam(':first_name', $firstname);
    $stmt->bindParam(':last_name', $lastname);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);

    // insert a row
    $firstname = $_GET['first_name'];
    $lastname = $_GET['last_name'];
    $email = $_GET['email'];
    $password = $_GET['password'];
    $stmt->execute();

    //echo "New records created successfully";

    //handle the rest action here

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
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
                <img src="./img/ja1.png" alt="" width="100%">
            </div>
            <div class="col-md-6">
                <h2>Input User Name</h2>
                <form action="testing.php" method="GET" class="needs-validation" novalidate>
                    <div class="form-group">
                        <label for="email">First Name:</label>
                        <input type="text" class="form-control" name="first_name" placeholder="Enter first name" id="email" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please input fist name.</div>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Last Name:</label>
                        <input type="text" class="form-control" name="last_name" placeholder="Enter last name" id="pwd" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please input last name.</div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter email" id="email" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please input email.</div>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter password" id="pwd" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please input password.</div>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Disable form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Get the forms we want to add validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
</body>

</html>