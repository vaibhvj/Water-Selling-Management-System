<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Official Website of WBMS:The leading water supplier in all over india </title>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" href="css/index.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&display=swap" rel="stylesheet">
  
</head>

<body>
<?php include('loader.php') ?>
  <!-- start nav bar -->
  <nav class="navbar navbar-expand-sm fixed-top navbar-dark bg-info pl-5 " id="customnav" style="
font-family: 'Baloo Tammudu 2', cursive;">
    <div class="container-fluid">
      <a class="navbar-brand " href="index.php"><i class="fas fa-hand-holding-water fa-2x"></i></a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav pl-5">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#service">Our service</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact Us</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-user"></i>
            </a>
            <ul class="dropdown-menu mr-auto   bg-info" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="Requester/login.php">Log in</a></li>
              <li><a class="dropdown-item" href="signup.php">Sign Up</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- end nav bar -->
  <!-- Homepage -->
  <section id="home">
    <div class="m-4 p-5 myclass justify-content-center" id="homepage"style="font-family: 'Baloo Tammudu 2', cursive;" >
      <h1 class="text-uppercase text-warning font-weight-bold">Welcome to WBMS</h1>
      <p class="font-italic" style="color: floralwhite;"> To provide water to everyone is our Aim</p>
      <a href="Requester/login.php" class="btn btn-success mr-4">Log in</a>
      <a href="signup.php" class="btn btn-secondary mr-4">Sign Up</a>
    </div>
  </section>


  <!-- about us-->
  <div class="container about pb-4 " id="about" style="font-family: 'Baloo Bhai 2', cursive;">
    <div class="row">
      <h1 class="text-center mb-3">About us</h1>
      <hr>
      <div class=" mt-2 col-sm-6">
        <img src="img/bg3.jpg" alt="about" class="img-fluid">
      </div>
      <div class="col-sm-6  ">
        <p class="fs-5">
          WBMS is the India's leading chain of water suplying service we provide RO water, wate cans and water tanks. We offring wide area of
          service. we focus on echancing your user exprences by offering world class water providing services. <br> Our sole
          mission to "To Provide Water and care services to keep the aplliences clean and customer happy and smiling".
          <br>
          With well-equiped Electronic Applianes service and fully tranied man power , we provide quality services with
          excellent packages that are designed to offer you great saving.
        </p>
      </div>
    </div>
  </div>
  
  <!-- start service section -->
  <div class="container text-center mt-4 boder-bottom" id="service"style="">
    <h2>Our Services</h2>
    <div class="row mt-4">
      <div class="col-sm-4">
      <i class="fas fa-glass-whiskey fa-8x text-info"> </i>
        <h4 class="mt-4">Provied RO Water </h4>
      </div>
      <div class="col-sm-4">
        <a href="#"><i class="fas fa-wine-bottle fa-8x"></i></a>
        <h4 class="mt-4">Provied Water Cans </h4>
      </div>
      <div class="col-sm-4">
        <a href="#"> <i class="fas fa-faucet fa-8x"> </i></a>
        <h4 class="mt-4">Provied Water Tanks </h4>
      </div>
    </div>
  </div>
</div>
<hr>
<!-- end service section -->

  <!-- sign up -->
  
  <!-- end sign -->

  <!-- start happy customer -->
  <div class="jumbotron bg-info pb-4" style="font-family: 'Crimson Pro', serif;">
    <div class="container">
      <div class="container-fluid ">
        <h2 class="text-center fs-1 text-white pt-4 ">Our Customer Reviews</h2>
        <div class="row mt-5">
          <!-- first image -->
          <div class="col-lg-3 col-sm-6">
            <div class="card shadow-lg mb-2">
              <div class="card-body text_center">
                <img src="img/v1.jpg" class="img-fluid" style="border-radius:100px;" alt="avt1">
                <h4 class="card-title fw-bold">Chitra Tripathi</h4>
                <p class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque ipsum dolorem,
                  animi
                  beatae eaque necessitatibus sapiente at fuga? Expedita voluptatum assumenda maiores modi cum
                  distinctio
                  optio. Quo ad a delectus!</p>
              </div>
            </div>
          </div>
          <!-- end 1 customer -->
          <!-- second custome -->
          <div class="col-lg-3 col-sm-6">
            <div class="card shadow-lg mb-2">
              <div class="card-body text_center">
                <img src="img/v2.jpg" class="img-fluid" style="border-radius:100px;" alt="avt1">
                <h4 class="card-title fw-bold">Chitra Sharma</h4>
                <p class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque ipsum dolorem,
                  animi
                  beatae eaque necessitatibus sapiente at fuga? Expedita voluptatum assumenda maiores modi cum
                  distinctio
                  optio. Quo ad a delectus!</p>
                </div>
              </div>
            </div>
          <!-- end 2 customer -->
          <!-- third custome -->
          <div class="col-lg-3 col-sm-6">
            <div class="card shadow-lg mb-2">
              <div class="card-body text_center">
                <img src="img/v3.jpg" class="img-fluid" style="border-radius:100px;" alt="avt1">
                <h4 class="card-title fw-bold">Chitra Agarwal</h4>
                <p class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque ipsum dolorem,
                  animi
                  beatae eaque necessitatibus sapiente at fuga? Expedita voluptatum assumenda maiores modi cum
                  distinctio
                  optio. Quo ad a delectus!</p>
                </div>
            </div>
          </div>
          <!-- end 3rd custoemer -->
          <!--start 4th customer  -->
          <div class="col-lg-3 col-sm-6">
            <div class="card shadow-lg mb-2">
              <div class="card-body text_center">
                <img src="img/v1.jpg" class="img-fluid" style="border-radius:100px;" alt="avt1">
                <h4 class="card-title fw-bold">Chitra Jain</h4>
                <p class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque ipsum dolorem,
                  animi
                  beatae eaque necessitatibus sapiente at fuga? Expedita voluptatum assumenda maiores modi cum
                  distinctio
                  optio. Quo ad a delectus!</p>
                </div>
              </div>
          </div>
        </div>
        <!-- end 4th customer -->
        
      </div>
    </div>
  </div>
  <!-- happy customer -->
  <!-- Contact us -->
  <div class="container" id="contact" style="font-family: 'PT Sans Narrow', sans-serif;">
    <h2 class="text-center fs-1 mb-4 mt-4">Contact us</h2>
    <div class="row">
      <!-- start 1st column -->
      <?php include('contanct.php') ?>
      <!-- end 1st coloumn -->
      
      <!-- start 2nd coloumn -->
      <div class="col-md-4 text-center">
        <strong>Headquater:</strong><br>
        WBMS pvt Ltd,<br>
        Kala Kuan, Alwar <br>
        Rajasthan - 301001 <br>
        Phone: +91780000001
        <a href="#" target="_blank">www.wbms.com </a><br>
        <br><br>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3537.206407458308!2d76.60025881489793!3d27.556103882854856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3972998408ae468f%3A0xa553301e1e864adc!2sKCRI%20College!5e0!3m2!1sen!2sin!4v1612697090733!5m2!1sen!2sin" width="300" height="250" frameborder="0" style="border: 2px solid rgb(0, 174, 255);" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
      <!-- end 2nd column -->
    </div>
  </div>
  
  <footer class="container-fluid bg-dark mt-5 text-white">
    <div class="cotainer">
      <div class="row py-3">
        <div class="col-md-6">
          <span>Follow Us: </span>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i> </a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i> </a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"></i> </a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-google-plus"></i> </a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fas fa-rss"></i> </a>
        </div>
        
        <!-- end 1 col -->
        <!-- start 2nd col -->
        <div class="col-md-6 text-end">
          <small>Designed by Vaibhav Vijay &copy; 2021</small>
          <small class="ml-2"><a href="admin/adminlogin.php">Admin Login</a></small>
        </div>
      </div>
    </div>
  </footer>
  
  
  <script src="js/bootstrap.min.js"></script>
  <script src="js/all.js"></script>
  <script src="https://kit.fontawesome.com/fea99b3c70.js" crossorigin="anonymous"></script>

</body>

</html>