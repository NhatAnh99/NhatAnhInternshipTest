<?php
include'connect.php';
if(isset($_GET['deleteid']))
{
    $hovsten = $_GET['deleteid'];
    $sql = "delete from demo where hovsten = '$hovsten'";
    $result = mysqli_query($con,$sql);

    if($result)
        {
       header('location:display.php');
         }
    else
    {
        die(mysqli_error($con));
    }
}
?>