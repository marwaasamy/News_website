<?php
$page_title="Login";
$css_file="admin.css";
    include_once("./adincludes/adheader.php");
    include_once("./adincludes/adfooter.php");

      $host="localhost";
      $user="root";
      $pass="";
      $db="news";
      $conn = mysqli_connect($host,$user,$pass,$db);

    if(isset($_POST['btn_ins'])){
          $title=$_POST['title'];
          $disc=$_POST['disc'];
          $table=$_POST['table'];
          $image_name=$_FILES["image"]["name"];
          $image_up="./img/" . $image_name;
          $image_location=$_FILES['image']['tmp_name'];
          
          
          $insert="insert into $table(title , description , image) values ('$title','$disc','$image_up')";
          $insert_res=mysqli_query($conn, $insert); 
          move_uploaded_file($image_location,$image_up);  
          
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
              <a class=" d-flex align-center  nav-link" href="./view.php">
              <i class="fa-solid fa-eye"></i>
                <span name='view_page'>Veiw News</span>
              </a>
            </li>
            
          </ul>
    </div>

    <div class="container px-4">
      <h3 class="headerr1 pt-3 mb-5">Insert News</h3>
      <form class="myform" method="POST" enctype="multipart/form-data" id='userForm'>
        <div class="row mb-4 ">
          <label for="inputEmail3" class="col-sm-3 col-form-label">Title</label>
          <div class="col-sm-9">
          <input type="text" class="form-control" id="inputEmail3" name='title'>
        </div>
    </div>
      <div class="row mb-4">
        <label for="inputPassword3" class="col-sm-3 col-form-label">Description</label>
         <div class="col-sm-9">
           <input type="text" class="form-control" id="inputPassword3" name='disc'> 
         </div>
      </div>

      <div class="row mb-4">
        <label for="formFileMultiple" class="col-sm-3 col-form-label">Photo</label>
          <div class="col-sm-9">
            <input  type="file" class="form-control" id="formFileMultiple" name='image'>
          </div>
      </div>


      <div class="row mb-5">
        <label for="formFileMultiple" class="col-sm-3 col-form-label">Page</label>
          <div class="col-sm-9">
            <select class="form-select" id="formFileMultiple" aria-label="Default select example" name='table'>
              <option value="business">business</option>
              <option value="politics">politics</option>
              <option value="interviews">interviews</option>
              <option value="sports">sports</option>
            </select>
        </div>
      </div>

        <button type="submit" class="btn btn1 btn2"  style="background-color: #ff184e;color:white;" name='btn_ins'>Insert</button>
      </form>

        </div>
      </div>\
      <!-- <script>
           let form = document.querySelector('#userForm');
                form.addEventListener('submit',(event)=>{
                   // Prevent submit
                   event.preventDefault();
                   // find inputs, textareas, and selects within the parent
                  let children = event.target.querySelectorAll('input, select');
                   // find if any of them are empty
                   let findEmpty = Array.from(children).find((element)=>{
                      if(element.value.length < 1){return true}
                        return false
                    });
                    // check if found an empty child
                     if(findEmpty){
                         // if so alert
                                 Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'all feilds are requird!'
        });
                   }
                    else{
                        Swal.fire({
          icon: 'success',
         title: 'Your news has been inserted successfully',
          showConfirmButton: false,
          timer: 2000
        }).then(function(result){
          console.log('mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm');
         form.submit();
       });
                        
                     
                    }
             });
          
       
       
       
               </script> -->
   
 </body>
 </html>