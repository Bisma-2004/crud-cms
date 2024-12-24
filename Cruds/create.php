<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
        <form action="create.php" method="post">
            <h1> Cruds </h1>
            <div class="input-box">
                <input type="text" name="name" id="uname" placeholder="UserName" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="email" name="email" id="uname" placeholder="abc@gmail.com" required>
                <i class='bx bxs-envelope'></i>
            </div>

            <?php if(isset($_GET["alert"])) { ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>Error</strong> <?php echo $_GET["alert"];?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
          <?php } ?>
            <!-- <button class="btn" type="submit" name="btn">  </button> -->
             <input type="submit" value="submit" class="btn" name="btn">
        </form>
    </div>
    <?php
    require("connection.php");
    if(isset($_POST['btn'])){
        if(empty($_POST["name"]) || empty($_POST["email"])){
            header("location: create.php");
            exit();
        }
        $name = $_POST['name'];
        $email = $_POST['email'];

        $modify = "SELECT * FROM `data` WHERE `Email` = '$email'";
        $query = mysqli_query($connect,$modify);
        if(mysqli_num_rows($query) >0){
            header("location: create.php?alert='Email already registred'");
        }
        else{
            $insert = "INSERT INTO `data`(`Name`, `Email`) VALUES ('$name','$email')";
            mysqli_query($connect,$insert);
            header("location: read.php");
            exit();
        }

      

    }

    ?>
</body>
</html>