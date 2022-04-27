<?php
include'connect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Nhat Anh fRM</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >
</head>
<body>
<div class="contener">
    <button class="btn btn-primary  my-5" > <a href="user.php" class = "text-light"> Add User </a> </button>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Họ Và Tên</th>
      <th scope="col">Email</th>
      <th scope="col">Số Điện Thoại</th>
      <th scope="col">Nội Dung</th>
    </tr>
  </thead>

 <?php
 $sql=" SELECT * FROM demo ";
 $result=mysqli_query($con,$sql);
 if($result)
 {
   
     while($row=mysqli_fetch_assoc($result))
     {
         $hovsten=$row['hovsten'];
         $email=$row['email'];
         $sodienthoai=$row['sodienthoai'];
         $noidung=$row['noidung'];
         echo'<tr>
         <th scope = "row">'.$hovsten.'</th>
         <td>'.$email.'</td>
         <td>'.$sodienthoai.'</td>
         <td>'.$noidung.'</td>
          
         <td>
            <button class="btn btn-primary">
            <a href="delete.php?deleteid='.$hovsten.'" class="text-light"> Clear</a>
             </burton>
         </td>
         </tr>';
     }
 }
 ?> 
</table>
</body>
</html>