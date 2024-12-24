<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>update</title>
</head>
<body>
<?php 
require("connection.php");
if(isset($_GET["id"])){
    $id = $_GET["id"];
    $select = "SELECT * FROM `data` WHERE ID = $id";
    $result = mysqli_query($connect,$select);
    $row = mysqli_fetch_assoc($result);
}
?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="alert alert-warning">
                <h1 class="text-center">Update</h1>
            </div>
            <form action="update.php" method="post">
                <input type="hidden" name="id" value="<?php echo $row["ID"];?>" class="form-control">
                <label for="name">Name</label>
                <input type="text" name="name" value="<?php echo $row["Name"]; ?>" class="form-control mt-2">
                <label for="email">Email</label>
                <input type="email" name="email" value="<?php echo $row["Email"]; ?>" class="form-control mt-2">
                <input type="submit" name="btn" class="btn btn-warning mt-3">
            </form>
        </div>
    </div>
</div>
<?php 
if(isset($_POST["btn"])){
    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $update = "UPDATE `data` SET `ID`='$id',`Name`='$name',`Email`='$email' WHERE ID = $id";
    mysqli_query($connect,$update);
    header("location: read.php");
}
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>