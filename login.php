<?php
$page_title="Login";
$css_file="admin.css";
    include_once("./adincludes/adheader.php");
    include_once("./adincludes/adfooter.php");

    $con=mysqli_connect("localhost","root","","news");

    if(isset($_POST['login']))
    {
      $email=$_POST['user'];
      $pass=$_POST['pass'];
      $res="select * from admin";
      $data=mysqli_query($con,$res);
      while($row=mysqli_fetch_array($data))
      {
        if($row['Email']==$email && $row['pass']==$pass)
        {
          header('location:insert.php');
        }
      }
      echo "invalid email or password";
     
    }

   
?>
<div class="container text-center">

<form action="" method="post" style=" max-width:500px; margin:200px auto 0 auto;" >
<h2 class="headerr2 mb-5 fw-bold ">Sign In</h2>
<div class="form-floating mt-5 mb-4 ">
  <input  type="email" class="form-control" id="floatingInput" name='user' placeholder="name@example.com" >
  <label for="floatingInput">Email address</label>
</div>
<div class="form-floating mb-5">
  <input type="password" class="form-control" id="floatingPassword" name='pass' placeholder="Password">
  <label for="floatingPassword">Password</label>
 
</div>
<div class="form-floating">
<button type="submit" class="btn btn1" style="background-color: #ff184e;color:white;" name='login'>Submit</button>
  </div>
</form>
</div>