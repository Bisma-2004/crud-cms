<?php
require("connection.php");
if(isset($_POST['btn_submit'])){

    $id = $_POST['id'];
    $name = $_POST["name"];
    $fname = $_POST["fname"];
    $address = $_POST["address"];
    $age = $_POST["age"];
    $date = $_POST["dob"];
    $domi = $_POST["dom"];
    $religion = $_POST["rel"];
    $phone = $_POST["num"];
    $cnic = $_POST["cnic"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $hobby = $_POST["hoby"];
    $string = implode(",",$hobby);
    $country = $_POST["dropdown"];
    $course = $_POST["trade"];
    $image = $_FILES["img"]["name"];
    $path = $_FILES["img"]["tmp_name"];
    move_uploaded_file($path,"../assert/upload/".$image);
    $data = "../assert/upload/".$image;

    $update = "UPDATE `form` SET `Name`='$name',`Fname`='$fname',`Address`='$address',`Age`='$age',`DOB`='$data',`Domicile`='$domi',`Religion`='$religion',`Phone`='$phone',`Cnic`='$cnic',`Email`='$email',`Gender`='$gender',`Trade`='$course',`Image`='$data',`Hobby`='$hobby',`Country`='$country' WHERE ID = $id";
    mysqli_query($connect,$update);
    header("location: data.php?alert=Data Succesfully Updated.");
}

?>