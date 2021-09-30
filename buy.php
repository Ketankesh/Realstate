<?php

error_reporting(0);

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$city=$_POST['city'];
$state=$_POST['state'];
$text=$_POST['text'];
$price=$_POST['price'];

include("connect.php");

//creation of table

$c="create table buyproperties(id int NOT NULL auto_increment primary key,fname varchar(10) NOT NULL,lname varchar(10) NOT NULL,city varchar(10) NOT NULL,state varchar(10) NOT NULL,text varchar(100) NOT NULL,price varchar(10) NOT NULL)";
$res=mysqli_query($con,$c);

//Insertion
if(isset($_POST["submit"]))
{
   
  $ins="insert into buyproperties (fname,lname,city,state,text,price) values('$fname','$lname','$city','$state','$text','$price')";
  $res = mysqli_query($con,$ins);
   
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
 
 <link rel="stylesheet" href="./css/rentstyle.css">
 <link rel="stylesheet" href="./css/buy.css">
 <link rel="stylesheet" href="./css/footer1.css">


 <!--fontawesome-->
 <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.3.1/css/all.css'>

    <title>BUY HOUSE</title>
</head>
<body>
      <!--nav starts-->
      <header class="header">
        <nav class="navbar">
            <a href="index.php" class="nav-logo">RS</a>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="#" class="nav-link">Services</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Site View</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>

            <!---scripting tag-->
            <script>
                const hamburger = document.querySelector(".hamburger");
                const navMenu = document.querySelector(".nav-menu");

                hamburger.addEventListener("click", mobileMenu);

                function mobileMenu() {
                  hamburger.classList.toggle("active");
                  navMenu.classList.toggle("active");
                }
            </script>
            <script>
                const navLink = document.querySelectorAll(".nav-link");

                navLink.forEach(n => n.addEventListener("click", closeMenu));

               function closeMenu() {
                 hamburger.classList.remove("active");
                 navMenu.classList.remove("active");
                }
            </script>
        </nav>
</header>

   
    <!---ON   SALE --->

    <div class="container outer-wrapper">
       <div class="s-wrap s-type-2" role="slider">
         <ul class="s-content">
           <li class="s-item s-item-1"></li>
           <li class="s-item s-item-2"></li>
           <li class="s-item s-item-3"></li>
           <li class="s-item s-item-4"></li>
           <li class="s-item s-item-5"></li>
         </ul>
       </div>
    </div>
    
    <h1 class="text-center">DEALS YOU CAN'T RESIST.....</h1>


    <!---houses data on sale or rent-->

      <div class="container">
        <div class="row">

        </div>
       </div>



    <!--form-->
    <div class="container">
         <h2 class="text-center" style="margin:5% 0 0 0;">Tell Us More About What You Are Looking For:-</h2>      
        <div class="row" style="margin-top: 5%;">
            <div class="col">
                <form class="was-validated" action="" method="post">
                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label for="validationDefault01">First name</label>
                        <input type="text" class="form-control" name="fname" id="validationDefault01" value="" required>
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="validationDefault02">Last name</label>
                        <input type="text" class="form-control" name="lname" id="validationDefault02" value="" required>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label for="validationDefault03">City</label>
                        <input type="text" class="form-control" name="city" id="validationDefault03" required>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="validationDefault04">State</label>
                        <select class="custom-select" name="state" id="validationDefault04" required>
                          <option selected disabled value="">Choose...</option>
                          <option>California</option>
                          <option>Washington D.C</option>
                          <option>Texes</option>
                          <option>Nivada</option>
                          <option>Los Angles</option>
                          <option>any other</option>
                        </select>
                      </div>
                      </div>
                    <div class="mb-3">
                        <label for="validationTextarea">I'm Looking For.....</label>
                        <textarea class="form-control is-invalid" id="validationTextarea" name="text" placeholder="Required example textarea" required></textarea>
                        <div class="invalid-feedback">
                          Please enter details......
                        </div>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="customControlValidation1" name="price" value="20 Lakh or Below" required>
                        <label class="custom-control-label" for="customControlValidation1" >20 Lakh or Below</label>
                      </div><div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="customControlValidation2" name="price" value="50 Lakh To 20 Lakh" required>
                        <label class="custom-control-label" for="customControlValidation2" >50 Lakh To 20 Lakh</label>
                      </div><div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="customControlValidation3" name="price" value="1 Crore Or More" required>
                        <label class="custom-control-label" for="customControlValidation3" >1 Crore Or More</label>
                      </div>
                      <br>
                      
                      <button type="submit" class="btn btn-danger" name="submit" type="submit">Submit</button>
                  </form>
            </div>
        </div>
    </div>

<!---footer-->
<div class="fotter" style="margin-top: 5%;">
  <div class="container-fluid" style="height: 50vh;background-color: rgb(74, 86, 104);">
    <div class="row">
      <div class="col-4" style=" padding-top: 60px;padding-bottom: 40px;">
        <h3 style="font-size:20px;color:white; text-align:center;">We Care About Your Family <br> Like Our Own</h3>
      </div>
      <div class="col-4" style=" padding-top: 60px;padding-bottom: 40px;" >
        <h4 style="font-size: 20px; color: white; text-align: center;">CONNECT WITH US ON</h4><br><br>
        <div class="rounded-social-buttons">
          <a class="social-button facebook" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
          <a class="social-button twitter" href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
          <a class="social-button linkedin" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin"></i></a>
          <a class="social-button youtube" href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube"></i></a>
          <a class="social-button instagram" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
      </div>
      </div>
      <div class="col-4" style=" padding-top: 60px;padding-bottom: 40px;">
          <div class="container text-white">
            <div class="row">
              <div class="col">
               <h4 style="font-size:20px; text-align:center;"> 9871908614</h4><br>
               <span>
               <i class="fas fa-3x fa-mobile-alt" style=" margin-left:50%; margin-right:50%;"></i><span>
              </div>
              <div class="col">
              <h4 style="font-size:20px;">North California</h4><br>
              <span>
               <i class="fas fa-3x fa-map-marker-alt" style=" margin-left:50%; margin-right:50%;"></i><span>
              </div>
            </div>
          </div>

      </div>
    
  </div>
</div>


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="/js/buy.js"></script>
</body>
</html>