

<?php
$css_file="nav.css";
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
     <!-- fonts -->
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500&display=swap"
    rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Prata&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/<?php echo $css_file;?>">
  
<!-- <link rel="stylesheet"  href="img/finalpro.img">
<link rel="stylesheet"  href="img/fire.svg"> -->
  <title><?php echo $page_title ;?></title>
</head>
  <body>
    
 
<div class="container">
<nav class="navbar navbar-expand-lg ">
  <div class="container-fluid" >
    <a class="navbar-brand " style="font-size: 12px;" href="#"><img src="./img/Dailynews-logo.png" style="max-width:120px" alt="">
    <p >December 6,2023</p></a>
    
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item navl active mx-2 .links" >
          <a class="nav-link navl1 " aria-current="page" href="#home">Home</a>
        </li>
        <li class="nav-item navl mx-2 .links">
          <a class="nav-link navl1 " href="#business">business</a>
        </li>
        <li class="nav-item navl mx-2">
          <a class="nav-link navl1" href="#politics">Politics</a>
        </li>
        <li class="nav-item navl mx-2">
          <a class="nav-link navl1" href="#interviews">interviews</a>
        </li>
        <li class="nav-item navl mx-2">
          <a class="nav-link navl1" href="#sports">sports</a>
        </li>
      </ul>
      <ul class="navbar-nav mb-2 mb-lg-0" >
        <li class="nav-item navi px-2  mx-2" data-content="Sign">
          <a class="nav-link active" aria-current="page" href="./login.php"><i class="fa-regular fa-user"></i></a>
        </li>
        <li class="nav-item navi  px-2 mx-2" data-content="Facebook">
          <a class="nav-link" href="#"><i class="fa-brands fa-facebook-f"></i></a>
        </li>
        <li class="nav-item navi  px-2 mx-2" data-content="Twitter">
          <a class="nav-link" href="#"><i class="fa-brands fa-x-twitter"></i></a>
        </li>
        <li class="nav-item navi  px-2 mx-2" data-content="youtube">
          <a class="nav-link" href="#"><i class="fa-brands fa-youtube"></i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>

</body>
</html>