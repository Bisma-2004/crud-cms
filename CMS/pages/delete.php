<?php
require("connect.php");
if(isset($_GET['id']))
{
    $id =$_GET['id'];
    $delete = "DELETE FROM `form` WHERE ID = $id";
    mysqli_query($connect,$delete);
    header("location: data.php?Alert=Data Succesfully Deleted.");
}


?>