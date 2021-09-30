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

    <title>RENT A HOUSE</title>
</head>
<body>
      <!--nav starts-->
      <header class="header">
        <nav class="navbar">
            <a href="index.php" class="nav-logo">RS</a>
            <ul class="nav-menu">
                
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



<!--coursel-->
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
      
      
        <h1 class="text-center">Some Premium Home For You.....</h1>


    <!---details-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-7">
                

            </div>
            <div class="col-5 ">
                   <!--Google map-->
<div id="map-container-google-1" class="z-depth-1-half map-container" >
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6509164.138130225!2d-123.7986047141304!3d37.19303670010993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb9fe5f285e3d%3A0x8b5109a227086f55!2sCalifornia%2C%20USA!5e0!3m2!1sen!2sin!4v1631601148654!5m2!1sen!2sin" width="400" height="600" style="border-radius:20px;" allowfullscreen="" loading="lazy"></iframe>
  </div>
  
  <!--Google Maps-->
                </div>
               

            </div>
        </div>
    </div>


    <!--form-->
    <div class="container">
             <h2 class="text-center" style="margin:5% 0 0 0;">Want Us To Get You A Beautyfull Offer:-<br>
              <span style="float: right; text-align: right; font-size: 10px; ">(Note:-These Details Will Be Displyed)</span></h2> 
             
        <div class="row" style="margin-top: 5%;">
            <div class="col">
                <form class="was-validated">
                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label for="validationDefault01">First name</label>
                        <input type="text" class="form-control" id="validationDefault01" value="" required>
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="validationDefault02">Last name</label>
                        <input type="text" class="form-control" id="validationDefault02" value="" required>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label for="validationDefault03">City</label>
                        <input type="text" class="form-control" id="validationDefault03" required>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="validationDefault04">State</label>
                        <select class="custom-select" id="validationDefault04" required>
                          <option selected disabled value="">Choose...</option>
                          <option>...</option>
                        </select>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="validationDefault05">Zip</label>
                        <input type="text" class="form-control" id="validationDefault05" required>
                      </div>
                    </div>
                   
                    
                    <div class="mb-3">
                        <label for="validationTextarea">THINGS ONE OR TWO ABOUT YOUR PROPERTY</label>
                        <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" required></textarea>
                        <div class="invalid-feedback">
                          Please enter details......
                        </div>
                      </div>
                    
                      <!--<div class="custom-control custom-checkbox mb-3">
                       <input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
                       <label class="custom-control-label" for="customControlValidation1">Save This Information For Display</label>
                       <div class="invalid-feedback">Example invalid feedback text</div>
                      </div>-->
                    
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required>
                        <label class="custom-control-label" for="customControlValidation2">Fixed Rate</label>
                      </div>
                      <div class="custom-control custom-radio mb-3">
                        <input type="radio" class="custom-control-input" id="customControlValidation3" name="radio-stacked" required>
                        <label class="custom-control-label" for="customControlValidation3">Nigotiable</label>
                      </div>
                      <!---uplod photos-->
                      <div class="input-group is-invalid">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="validatedInputGroupCustomFile" required>
                          <label class="custom-file-label" for="validatedInputGroupCustomFile">Choose file...</label>
                        </div>
                        <div class="input-group-append">
                           <button class="btn btn-outline-secondary" type="button">UPLOAD</button>
                        </div>
                      </div>
                      <br>
                      <div class="input-group is-invalid">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="validatedInputGroupCustomFile" required>
                          <label class="custom-file-label" for="validatedInputGroupCustomFile">Choose file...</label>
                        </div>
                        <div class="input-group-append">
                           <button class="btn btn-outline-secondary" type="button">UPLOAD</button>
                        </div>
                      </div>
                      <br>
                      <div class="input-group is-invalid">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="validatedInputGroupCustomFile" required>
                          <label class="custom-file-label" for="validatedInputGroupCustomFile">Choose file...</label>
                        </div>
                        <div class="input-group-append">
                           <button class="btn btn-outline-secondary" type="button">UPLOAD</button>
                        </div>
                      </div>
                      <br>
                      <div class="input-group is-invalid">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="validatedInputGroupCustomFile" required>
                          <label class="custom-file-label" for="validatedInputGroupCustomFile">Choose file...</label>
                        </div>
                        <div class="input-group-append">
                           <button class="btn btn-outline-secondary" type="button">UPLOAD</button>
                        </div>
                      </div>
                      <!---uplod ends-->
                      <br>
                      <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                          <label class="form-check-label" for="invalidCheck2">
                            Agree to <a href="#">terms and conditions</a>
                          </label>
                        </div>
                      </div>
                      
                      <button class="btn btn-danger" type="submit">Submit</button>
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

</body>
</html>