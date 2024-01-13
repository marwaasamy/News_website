<?php
$page_title="Update";
$css_file="admin.css";
    include_once("./adincludes/adheader.php");
    include_once("./adincludes/adfooter.php");

    $host="localhost";
    $user="root";
    $pass="";
    $db="news";
    
    $con = mysqli_connect($host,$user,$pass,$db); 
    
    $id="";
    $title="";
    $desc="";
    $image="";
    $search="";
    $page="";
    if(isset($_POST['id'])){
      $id=$_POST['id'];
    }
    if(isset($_POST['page'])){
    $page=$_POST['page'];
    }
    $page1=$page;

    if(isset($_POST['title'])){
      $title=$_POST['title'];
    }
    if(isset($_POST['desc'])){
      $desc=$_POST['desc'];
    }

    if(isset($_POST['update'])){
         $image_name=$_FILES['image']['name'];
          $image_location=$_FILES['image']['tmp_name'];
          $image_up="./img/".$image_name;
          if($title!="" and $desc!="" and $image_up!="./img/"){
            $up="update $page1 set title='$title' , description='$desc' , image='$image_up' where id=$id";
            mysqli_query($con,$up);
            move_uploaded_file($image_location,$image_up);
          }
          elseif($title=="" and $desc!="" and $image_up!="./img/"){
            $up="update $page1 set description='$desc' , image='$image_up' where id=$id";
            mysqli_query($con,$up);
            move_uploaded_file($image_location,$image_up);
          }
          elseif($title=="" and $desc=="" and $image_up!="./img/"){
            $up="update $page1 set image='$image_up' where id=$id";
            mysqli_query($con,$up);
            move_uploaded_file($image_location,$image_up);
          }
          elseif($title=="" and $desc!="" and $image_up=="./img/"){
            $up="update $page1 set description='$desc' where id=$id";
            mysqli_query($con,$up);
          }
          elseif($title!="" and $desc=="" and $image_up!="./img/"){
            $up="update $page1 set title='$title' ,image='$image_up'  where id=$id";
            mysqli_query($con,$up);
            move_uploaded_file($image_location,$image_up);
          }
          elseif($title!="" and $desc=="" and $image_up=="./img/"){
            $up="update $page1 set title='$title' where id=$id";
            mysqli_query($con,$up);
          }
          elseif($title!="" and $desc!="" and $image_up=="./img/"){
            $up="update $page1 set title='$title' , description='$desc' where id=$id";
            mysqli_query($con,$up);
          }
          header("location:update.php"); 
    }
    
?>

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
       <h3 class="headerr1 pt-3 mb-5">Update News</h3>
          <form class="myform" method="post" enctype="multipart/form-data">
            <div class="row mb-4 ">
               <label for="id1" class="col-sm-3 col-form-label">ID</label>
               <div class="col-sm-9">
               <input type="text" class="form-control" id="id1" name="id" value=<?php echo $id;?>>
            </div>
    </div>
            <div class="row mb-4 ">
              <label for="inputEmail3" class="col-sm-3 col-form-label" >Title</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="inputEmail3" name="title" >
              </div>
            </div>
            <div class="row mb-4">
              <label for="inputPassword3" class="col-sm-3 col-form-label">Description</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="inputPassword3" name="desc">
                </div>
            </div>

            <div class="row mb-4">
              <label for="formFileMultiple" class="col-sm-3 col-form-label">Photo</label>
                <div class="col-sm-9">
                  <input  type="file" class="form-control" id="formFileMultiple" name="image" >
                </div>
            </div>


      <div class="row mb-5">
        <label for="formFileMultiple" class="col-sm-3 col-form-label">Page</label>
          <div class="col-sm-9">
            <select class="form-select" id="formFileMultiple" aria-label="Default select example" name="page" value=<?php echo $page;?>>
              <option selected value="business">business</option>
              <option value="politics">politics</option>
              <option value="interviews">interviews</option>
              <option value="sports">sports</option>
            </select>
           </div>
      </div>


      <button  class="btn btn1 mx-3 " style="background-color: #ff184e;color:white; width:70px" name="find">Find</button>
      <button type="submit" class="btn btn1" style="background-color: #ff184e;color:white; width:70px" name="update">Update</button>
      </form>
      <br><br>
      <table class="table table-secondary table-striped">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Image</th>
      </tr>
    </thead>
        <tbody>   
                <?php
                $found=0;
                if(isset($_POST['find'])){

                  $search="select * from $page where id=$id";
                  $ch="select * from $page";
                  $check=mysqli_query($con,$ch);
                  while($row=mysqli_fetch_array($check))
                  {
                    if($row['id']==$id)
                    {
                      $find = mysqli_query($con,$search);
                      while($row=mysqli_fetch_array($find)){
                    
                        echo("<tr>");
                        echo("<th scope='row'>".$row['id']."</th>");
                        //echo("<td>".$row['id']."</td>");
                        echo("<td>".$row['title']."</td>");
                        echo("<td>".$row['description']."</td>");
                        echo("<td>"."<img src='$row[image]' class='img-fluid img-thumbnail' style='width: 200px;' >". "</td>"); 
                        echo("</tr>");
                        $found=1;
                      }
                      break;
                     
                    }
                  }
                  if($found==0)
                  {
                    echo "This Id Not Found";
                  }
                }
                ?>        
          </tbody>
        
      </div>
      </div>