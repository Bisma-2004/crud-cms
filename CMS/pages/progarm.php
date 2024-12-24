<?php
require("connect.php");
if(isset($_POST["btn_submit"]))
{
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

    // $insert ="INSERT INTO `form`( `Name`, `Fname`, `Address`, `Age`, `DOB`, `Domicile`, `Religion`, `Phone`, `Cnic`, `Email`, `Gender`, `Trade`, `Image`) VALUES ('$name','$fnmae','$address,'$age','$date','$domi','$religion','$phone','$cnic','$email','$gene','$course','$data')";
    $insert = "INSERT INTO `form`( `Name`, `Fname`, `Address`, `Age`, `DOB`, `Domicile`, `Religion`, `Phone`, `Cnic`, `Email`, `Gender`, `Trade`, `Image`, `Hobby`, `Country`) VALUES ('$name','$fname','$address','$age','$date','$domi','$religion','$phone','$cnic','$email','$gender','$course','$data','$string','$country')";
    mysqli_query($connect,$insert);
    header("location: welcome.php?Success=Data Successfullty Submit");
    exit();  
}
?>
