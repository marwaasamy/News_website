<?php
$page_title="Dailynewsegypt";
$css_file="home.css";
    include_once("includes/header.php");
    include_once("includes/nav.php");
    include_once("includes/footer.php");

    $host="localhost";
      $user="root";
      $pass="";
      $db="news";
      $conn = mysqli_connect($host,$user,$pass,$db); 
?>
<!-- <link rel="stylesheet"  href="img/finalpro.img"> -->



    

<div class="container" id="home">
    <div class="row" style="margin-bottom: 2%;">
 
    <?php
    $result=mysqli_query($conn,"select * from business order by id desc limit 1");

    while($row = mysqli_fetch_array($result)){
    echo "
        <div class='col-lg-4 d-flex align-items-stretch'>
            <div class='card cardd'>
                <img src='$row[image]' alt='' class='img-fluid'>
                <div class='card-body'>
                    <h5 class='card-title'>$row[title]</h5>
                    <caption>$row[description]</caption>
                </div>
            </div>
        </div>";
    }
        ?>
        
 
        <?php
    $result=mysqli_query($conn,"select * from politics order by id desc limit 2");

    while($row = mysqli_fetch_array($result)){
    echo "
        <div class='col-lg-4 d-flex align-items-stretch' style='margin-bottom:  20px;'>
            <div class='card cardd'>
                <img src='$row[image]' alt='' class='img-fluid'>
                <div class='card-body'>
                    <h5 class='card-title'>$row[title]</h5>
                    <caption>$row[description] </caption>
                </div>
            </div>
        </div>";
    }
        ?>

        <?php
    $result=mysqli_query($conn,"select * from sports order by id desc limit 1");

    while($row = mysqli_fetch_array($result)){
    echo "
        <div class='col-lg-4 d-flex align-items-stretch' style='margin-bottom:  20px;'>
            <div class='card cardd'>
                <img src='$row[image]' alt='' class='img-fluid'>
                <div class='card-body'>
                    <h5 class='card-title'>$row[title]</h5>
                    <caption>$row[description] </caption>
                </div>
            </div>
        </div>";
    }
        ?>
        <?php
    $result=mysqli_query($conn,"select * from interviews order by id desc limit 2");

    while($row = mysqli_fetch_array($result)){
    echo "
        <div class='col-lg-4 d-flex align-items-stretch' style='margin-bottom:  20px;'>
            <div class='card cardd'>
                <img src='$row[image]' alt='' class='img-fluid'>
                <div class='card-body'>
                    <h5 class='card-title'>$row[title]</h5>
                    <caption>$row[description] </caption>
                </div>
            </div>
        </div>";
    }
        ?>
    </div>
</div>
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa-solid fa-arrow-up"></i></button>
<!-- <button class="back-to-top hidden" id="myBtn">Back To Top</button> -->
<div class="container">
    <div class="item by-dark">
        <img src="img/adver.jpg" class="mx-auto d-block  img-fluid">
    </div>
</div>
<nav class="navbar navbar-expand-md" style="background-color:red;height:1px;margin:3%"></nav>
<h1 style="font-weight: bold; " class="h-2 d-flex align-items-center
justify-content-center">MUST READ</h1>
<h4 class="h-2 d-flex align-items-center justify-content-center">Most
    Popular in This Month</h4>

<!--new section-->

<<div class="container" id="home">
    <div class="row" style="margin-bottom: 2%;">
    <?php
    $result=mysqli_query($conn,"select * from business order by id desc limit 1");

    while($row = mysqli_fetch_array($result)){
    echo "
        <div class='col-lg-4 d-flex align-items-stretch'>
            <div class='card cardd'>
                <img src='$row[image]' alt='' class='img-fluid'>
                <div class='card-body'>
                    <h5 class='card-title'>$row[title]</h5>
                    <caption>$row[description]</caption>
                </div>
            </div>
        </div>";
    }
        ?>
        <?php
    $result=mysqli_query($conn,"select * from politics order by id desc limit 2");

    while($row = mysqli_fetch_array($result)){
    echo "
        <div class='col-lg-4 d-flex align-items-stretch' style='margin-bottom:  20px;'>
            <div class='card cardd'>
                <img src='$row[image]' alt='' class='img-fluid'>
                <div class='card-body'>
                    <h5 class='card-title'>$row[title]</h5>
                    <caption>$row[description] </caption>
                </div>
            </div>
        </div>";
    }
        ?>

        <?php
    $result=mysqli_query($conn,"select * from sports order by id desc limit 1");

    while($row = mysqli_fetch_array($result)){
    echo "
        <div class='col-lg-4 d-flex align-items-stretch' style='margin-bottom:  20px;'>
            <div class='card cardd'>
                <img src='$row[image]' alt='' class='img-fluid'>
                <div class='card-body'>
                    <h5 class='card-title'>$row[title]</h5>
                    <caption>$row[description] </caption>
                </div>
            </div>
        </div>";
    }
        ?>
        <?php
    $result=mysqli_query($conn,"select * from interviews order by id desc limit 2");

    while($row = mysqli_fetch_array($result)){
    echo "
        <div class='col-lg-4 d-flex align-items-stretch' style='margin-bottom:  20px;'>
            <div class='card cardd'>
                <img src='$row[image]' alt='' class='img-fluid'>
                <div class='card-body'>
                    <h5 class='card-title'>$row[title]</h5>
                    <caption>$row[description] </caption>
                </div>
            </div>
        </div>";
    }
        ?>
    </div>
</div>
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa-solid fa-arrow-up"></i></button>
<!-- <button class="back-to-top hidden" id="myBtn">Back To Top</button> -->
<div class="container">
    <div class="item by-dark">
        <img src="img/adver.jpg" class="mx-auto d-block  img-fluid">
    </div>
</div>

<!--business-->
<div class="container mt-5  " style="margin-bottom:150px;" id="business">
        <div class="info">
        <p class="mt-3 mb-3 font">Dailynewsegypt>Blog> <span class="text-black-50">Business</span> </p>
        <h2 class="mt-3 mb-3 fw-bold">Business</h2>
        <p class="mt-3 mb-5  text-black-50">Find the latest business news on Egypt’s stock market, banking, investments tourism, automotive, 
            international business, technology, interest rates, currencies and funds.</p>
        </div>
        <div class="row" style="margin-bottom: 2%;">
    <?php
    $result=mysqli_query($conn,"select * from business order by id limit 3");

    while($row = mysqli_fetch_array($result)){
    echo "
        <div class='col-lg-4 d-flex align-items-stretch'>
            <div class='card cardd'>
            <div class='photo1' data-parent='business' >
                <img src='$row[image]' alt='' class='img-fluid'>
                </div>
                <div class='card-body'>
                    <h5 class='card-title'>$row[title]</h5>
                    <caption>$row[description]</caption>
                </div>
                <div class='foot d-flex text-black-50 font mb-3' >
               
          <img src='./img/c623853936b56e1ef2e0086daced059a.png' alt='' class='mx-2 photo2'>
       
          <span class='mx-2'>sami hegazi</span>
          <span class='mx-2'>|   December 28, 2023</span>
        </div>
            </div>
        </div>";
    }
        ?>
  </div>    
</div>
<!-- politics -->
        <div class="container mt-5 "style="margin-bottom:150px;" id="politics">
        <div class="info">
        <p class="mt-3 mb-3 font">Dailynewsegypt>Blog> <span class="text-black-50">Politics</span> </p>
        <h2 class="mt-3 mb-3 fw-bold">Politics</h2>
        <p class="mt-3 mb-5 text-black-50">Political news headlines, in-depth politics coverage 
          and political opinion, plus breaking news on Egypt, Africa, MENA region, and world affairs.</p>
        </div>
        <div class="row" style="margin-bottom: 2%;">
        <?php
    $result=mysqli_query($conn,"select * from politics order by id limit 3");

    while($row = mysqli_fetch_array($result)){
    echo "
        <div class='col-lg-4 d-flex align-items-stretch'>
            <div class='card cardd'>
            <div class='photo1' data-parent='politics' >
                <img src='$row[image]' alt='' class='img-fluid'>
                </div>
                <div class='card-body'>
                    <h5 class='card-title'>$row[title]</h5>
                    <caption>$row[description]</caption>
                </div>
                <div class='foot d-flex text-black-50 font mb-3' >
               
          <img src='./img/c623853936b56e1ef2e0086daced059a.png' alt='' class='mx-2 photo2'>
       
          <span class='mx-2'>sami hegazi</span>
          <span class='mx-2'>|   December 28, 2023</span>
        </div>
        </div>
        </div>";
    }
        ?>
        </div>
        </div>
<!-- interviews -->
<div class="container mt-5" style="margin-bottom:150px;" id="interviews">
        <div class="info">
        <p class="mt-3 mb-3 font">Dailynewsegypt>Blog> <span class="text-black-50">Interviews</span> </p>
        <h2 class="mt-3 mb-3 fw-bold">Interviews</h2>
        <p class="mt-3 mb-5 w-75 text-black-50">Daily News Egypt interviews with leading political, cultural, and business figures from Egypt, MENA, Africa and across the globe. 
             Focusing on latest events and news happening in Egypt today.</p>
        </div>
        <div class="row" style="margin-bottom: 2%;">
        <?php
    $result=mysqli_query($conn,"select * from interviews order by id limit 3");

    while($row = mysqli_fetch_array($result)){
    echo "
        <div class='col-lg-4 d-flex align-items-stretch'>
            <div class='card cardd'>
            <div class='photo1' data-parent='interviews' >
                <img src='$row[image]' alt='' class='img-fluid'>
                </div>
                <div class='card-body'>
                    <h5 class='card-title'>$row[title]</h5>
                    <caption>$row[description]</caption>
                </div>
                <div class='foot d-flex text-black-50 font mb-3' >
               
          <img src='./img/c623853936b56e1ef2e0086daced059a.png' alt='' class='mx-2 photo2'>
       
          <span class='mx-2'>sami hegazi</span>
          <span class='mx-2'>|   December 28, 2023</span>
        </div>
        </div>
        </div>";
    }
        ?>
        </div>
        </div>
      <!-- sports   -->
      <div class="container mt-5"style="margin-bottom:150px;" id="sports">
        <div class="info">
        <p class="mt-3 mb-3 font">Dailynewsegypt>Blog> <span class="text-black-50" >Sports</span> </p>
        <h2 class="mt-3 mb-3 fw-bold">Sports</h2>
        <p class="mt-3 mb-5 w-75 text-black-50">Latest sports news, results, fixtures,
             blogs and comments on Egypt’s and global sport from the Daily News Egypt, 
             the only independent English daily newspaper in Egypt.</p>
        </div>
        <div class="row" style="margin-bottom: 2%;">
        <?php
    $result=mysqli_query($conn,"select * from sports order by id limit 3");

    while($row = mysqli_fetch_array($result)){
    echo "
        <div class='col-lg-4 d-flex align-items-stretch'>
            <div class='card cardd'>
            <div class='photo1' data-parent='sports' >
                <img src='$row[image]' alt='' class='img-fluid'>
                </div>
                <div class='card-body'>
                    <h5 class='card-title'>$row[title]</h5>
                    <caption>$row[description]</caption>
                </div>
                <div class='foot d-flex text-black-50 font mb-3' >
               
          <img src='./img/c623853936b56e1ef2e0086daced059a.png' alt='' class='mx-2 photo2'>
       
          <span class='mx-2'>sami hegazi</span>
          <span class='mx-2'>|   December 28, 2023</span>
        </div>
        </div>
        </div>";
    }
        ?>
        </div>
        </div>


<!--footer
<footer class="footer" id="bord"  >
    <div class="container" style="border: red;">
      <div class="row" style="padding-top:0%;">
         <div class="col-lg-3 d-flex align-items-stretch"
style="margin-bottom:4%;margin-right:5%; ">
           <span style="font-weight: bold;">
            <h1 style="font-weight: bold;"></h1>
            Egypt’s only independent daily newspaper in English.
            And seven other languages, including French and
German,Discuss the country’s
            latest with the paper’s reporters,
            editors, and other readers.
           </span>
        </div>
      <div class="col-lg-4 d-flex align-items-stretch
"style="margin-bottom:4%;">
        <div>
        <h5 style="font-weight: bold;">Quick Link</h5>
        <ul  style="padding-left: 0%;">
         <li><a href="">HOME</a></li>
         <li><a href="">POLITICS</a></li>
         <li><a href="">BUSINESS</a></li>
         <li><a href="">SPORTS</a></li>
         <li><a href="">INTERVIEWS</a></li>
        </ul>
      </div>
     </div>
     <div class="col-lg-4 d-flex align-items-stretch"style="margin-bottom:4%;" >
      <div >
        <h5 style="font-weight: bold;">Site Awards</h5>
        <ul  style="padding-left: 0%;">
            <li><a
href="https://en.wikipedia.org/wiki/Taco_Kuiper#Taco_Kuiper_Awards">Taco_Kuiper_Award_for_Investigative_Journalism</a></li>
            <li><a
href="https://en.wikipedia.org/wiki/Gordon_Sinclair_Award">Gordon_Sinclair_Award</a></li>
            <li><a
href="https://en.wikipedia.org/wiki/Nigerian_Academy_of_Science_Media_Awards">Nigerian_Academy_of_Science_Media_Awards</a></li>
        </ul>

      </div>
     </div>
    </div>
   </div>
   </footer> -->   <!--footer-->
<footer class="footer" style="background-color: rgb(248, 247, 247) ;padding-top:3%">
    <div class="container">
      <div class="row">
         <div class="col-lg-4 d-flex align-items-stretch"
style="margin-bottom:2%;">
           <h4>
            Egypt’s only independent daily newspaper in English.
            And seven other languages, including French and German
            </h4>
        </div>
      <div class="col-lg-4 d-flex align-items-stretch
"style="margin-bottom:2%;">
        <ul> 
         <h4>Quick Link</h4>
         <li><a href="" >HOME</a></li>
         <li><a href="">POLITICS</a></li>
         <li><a href="">BUSINESS</a></li>
         <li><a href="">SPORTS</a></li>
         <li><a href="">INTERVIEWS</a></li>
        </ul>
     </div>
     <div class="col-lg-4 d-flex align-items-stretch"style="margin-bottom:2%;">
      <div>
       <h4>Sign Up for Our Newsletter</h4>
       <caption>Subscribe to our newsletter to get our newest articles
instantly!</caption>
       <h6>Email address:</h6>
       <input type="email"  placeholder="Your Email Address">
       <br>
       <input type="submit" value="sign up"
style="background-color:rgb(221, 85, 85);color:white">
      </div>
     </div>
    </div>
   </div>
   </footer>