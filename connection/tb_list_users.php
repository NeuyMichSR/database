<?php require_once('connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Read list users</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <style>
        tr:hover{
            font-weight: bold;            
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center text-danger">List Users</h2>
        <table class="table table-white table-hover">
            <thead>
                <tr class="bg-info text-danger">
                    <th>ID</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Photo</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    try {                    
                        $stmt = $conn->prepare("SELECT user_id, first_name, last_name, email, password FROM tb_list");
                        $stmt->execute();
                        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                        foreach ($stmt->fetchAll() as $row){
                ?>
                    <tr class="color1">
                        <td><?php echo $row['user_id']; ?></td>
                        <td><?php echo $row['first_name']; ?></td>
                        <td><?php echo $row['last_name']; ?></td>
                        <td><a href="#"><?php echo $row['email']; ?></a></td>
                        <td><?php echo $row['password']; ?></td>
                        
                    </tr>
                <?php
                        }
                    }
                    catch(PDOException $e) {
                        echo "Error: " . $e->getMessage();
                    }
                ?>  
            </tbody>
        </table>
    </div>
</body>
</html>