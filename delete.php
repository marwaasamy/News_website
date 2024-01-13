<?php
$page_title="Delete";
$css_file="admin.css";
    include_once("./adincludes/adheader.php");
    include_once("./adincludes/adfooter.php");

    $host="localhost";
    $user="root";
    $pass="";
    $db="news";
    
    $con = mysqli_connect($host,$user,$pass,$db);

      $id="";
      $page="";
    

        if(isset($_POST['btndelete'])){
          // delete from database

            if(isset($_POST['id'])){
                $id=$_POST['id'];
            }
        
            if(isset($_POST['page'])){
                $page=$_POST['page'];
            }
        $q="select * from $page where id=$id";
        $res=mysqli_query($con,$q);
        $data=mysqli_fetch_array($res);
        $del="delete from $page where id=$id";

        // delete photo from folder
        
        $image=$data['image'];
        unlink(($image));

        mysqli_query($con,$del);

      
      }
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
<div class="page d-flex">
 <div class="sidebar bg-white p-3 p-relative">
        <h3 class="p-relative text-center mt-0 ">Admin</h3>
        <ul class="navbar-nav">
            <li class="nav-item mb-3">
              <a class=" d-flex align-center  nav-link" href="./insert.php">
              <i class="fa-solid fa-file-arrow-down"></i>
                <span>Insert News</span>
              </a>
            </li>
            <li class="nav-item mb-3">
              <a class=" d-flex align-center  nav-link" href="./update.php">
              <i class="fa-solid fa-pen-to-square"></i>
                <span>Update News</span>
              </a>
            </li>
            <li class="nav-item mb-3">
              <a class=" d-flex align-center  nav-link" href="./delete.php">
              <i class="fa-solid fa-trash"></i>
                <span>Delete News</span>
              </a>
            </li>
            
            <li class="nav-item mb-3">
              <a class=" d-flex align-center  nav-link" href="./view.php">
              <i class="fa-solid fa-eye"></i>
                <span>Veiw News</span>
              </a>
            </li>
            
          </ul>
    </div>

    <div class="container px-4">
  <h3 class="headerr1 pt-3 mb-5">Delete News</h3>

<form class="myform" method="POST" enctype="multipart/form-data">
<div class="row mb-4 ">
    <label for="id1" class="col-sm-3 col-form-label">ID</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="id1" name="id">
    </div>
    </div>


  <div class="row mb-5">
    <label for="formFileMultiple" class="col-sm-3 col-form-label">Page</label>
    <div class="col-sm-9">
     <select class="form-select" id="formFileMultiple" aria-label="Default select example" name="page">
        <option value="business">business</option>
        <option value="politics">politics</option>
        <option value="interviews">interviews</option>
        <option value="sports">sports</option>
     </select>
    </div>
 </div>

  <button type="submit"  class="btn btn1 btn2" style="background-color: #ff184e;color:white; width:70px" name="btndelete">Delete</button>
  </form>
    </div>
    </div>

    </body>
    </html>