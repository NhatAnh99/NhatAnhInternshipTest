
<?php

include'connect.php';
if(isset($_POST['submit']))
{
  $hovsten=$_POST['hovsten'];
  $email=$_POST['email'];
  $sodienthoai=$_POST['sodienthoai'];
  $noidung=$_POST['noidung'];

  $sql="INSERT INTO  demo (hovsten,email,sodienthoai,noidung)
        VALUES('$hovsten','$email','$sodienthoai','$noidung')";
      $result = mysqli_query($con,$sql);

      if ($result)
      {
       // echo"Lưu Thành Công ";
       header('location:display.php');
      }
      else
      {
        die(mysqli_error($con));
      }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >

    <title>Le Nhat Anh fRM</title>
  </head>
  <body>
    <div class="contener">
    <form method = "post">
        <div class="form-group">
            <label>Họ Và Tên</label>
            <input type="text" class="form-control"  placeholder="Nhập họ và tên" name ="hovsten">
         </div>
         <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
         </div>

         <div class="form-group">
            <label>Số Điện Thoại</label>
            <input type="text" class="form-control"  placeholder="Nhập Số Điện Thoại" name ="sodienthoai">
         </div>

         <div class="form-group">
            <label>Nội Dung</label>
            <input type="text" class="form-control"  placeholder="Nội dung bạn cần nhập" name ="noidung">
         </div>
   
  <button type="submit" class="btn btn-primary" name ="submit"><a href="display.php"></a>submit</button>
</form>

    
  </body>
</html>