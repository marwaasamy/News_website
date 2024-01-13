<?php
$page_title="View Data";
$css_file="admin.css";
include_once("./adincludes/adheader.php");
include_once("./adincludes/adfooter.php");

   $host="localhost";
   $user="root";
   $pass="";
   $db="news";
   $con = mysqli_connect($host,$user,$pass,$db);
 
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<script type='text/javascript'src='http://code.jquery.com/jquery-1.10.1.js'></script>
<script type='text/javascript'src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script type='text/javascript'>
    $(window).load(function(){<!--from   w  w  w.  ja v a 2s.  c  om-->
$(function () {
    $("table#del").on("click", ".remove", function () {
        $(this).closest('tr').remove();
    });
});
$(function () {
    $(".show_tip").tooltip({
        container: 'body'
    });
});
$(document).click(function () {
    $('.tooltip').remove();
    $('[title]').tooltip();
});
});
</script>
<meta name="viewport" content="width=device-width,intial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="page d-flex">
 <div class="sidebar bg-white p-3 p-relative">
        <h3 class="p-relative text-center mt-0 ">Admin</h3>
        <ul class="navbar-nav">
            <li class="nav-item mb-3">
              <a class=" d-flex align-center  nav-link" href="./insert.php">
              <i class="fa-solid fa-file-arrow-down"></i>
                <span name='insert_page'>Insert News</span>
              </a>
            </li>
            <li class="nav-item mb-3">
              <a class=" d-flex align-center  nav-link" href="./update.php">
              <i class="fa-solid fa-pen-to-square"></i>
                <span name='update_page'>Update News</span>
              </a>
            </li>
            <li class="nav-item mb-3">
              <a class=" d-flex align-center  nav-link" href="./delete.php">
              <i class="fa-solid fa-trash"></i>
                <span name='delete_page'>Delete News</span>
              </a>
            </li>
            
            <li class="nav-item mb-3">
              <a class=" d-flex align-center  nav-link" href="./veiw.php">
              <i class="fa-solid fa-eye"></i>
                <span name='view_page'>Veiw News</span>
              </a>
            </li>
            
          </ul>
    </div>

    <div class="container px-4">
<h3 class="headerr1 pt-3 mb-5">View News</h3>

<form class="myform" method="POST" enctype="multipart/form-data">

        <div class="row mb-5">
            <label for="formFileMultiple" class="col-sm-3 col-form-label">Page</label>
               <div class="col-sm-9">
                 <select class="form-select" id="formFileMultiple" aria-label="Default select example" name="table">
                    <option value="business">business</option>
                    <option value="Politics">Politics</option>
                    <option value="Interviews">Interviews</option>
                    <option value="Sports">Sports</option>
                  </select>
                </div>
        </div>
  
    
  <button type="submit"  onclick="myFunction()" class="btn btn1 btn2"  style="background-color: #ff184e;color:white;margin-left:180px;margin-bottom:40px" name="btn_view">view</button>
</form>
    
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
          if(isset($_POST['btn_view'])){
            $table=$_POST['table'];
            $r=mysqli_query($con," SELECT * FROM $table");
        
            while($row=mysqli_fetch_array($r)){
                echo("<tr>");
                echo("<th scope='row'>".$row['id']."</th>");
                //echo("<td>".$row['id']."</td>");
                echo("<td>".$row['title']."</td>");
                echo("<td>".$row['description']."</td>");
                echo("<td>"."<img src='$row[image]' class='img-fluid img-thumbnail' style='width: 700px;' >". "</td>"); 
                echo("</tr>");
            }
           }
        
        ?>
        
        </tbody>
    </table>

    <!--<table class="table table-secondary table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table>-->

</body>
</html>