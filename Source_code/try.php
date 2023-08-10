<?php
include 'connection.php';
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>HOME PAGE</title>
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
 

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">


  <link href="bootstrap.min.css" rel="stylesheet">
 
  <link href="mdb.min.css" rel="stylesheet">
  <style type="text/css">
    .pink-gradient{

background: linear-gradient(40deg,#FF5858,#ee4392);
color: white;
}
.pink-gradient:hover{
color: white;
}
.mask.rgba-gradient7 {
background: linear-gradient(98deg,rgba(22,91,231,.5),rgba(255,32,32,.5));
}
    html,
    body,
    header,
    .view {
      height: 100%;
    }
    
    #about_us{
    height: 850px;
    width: 100%;
    background: url('https://i.pinimg.com/originals/0e/b4/c2/0eb4c25fb70ae3f291d9d5523fda1269.jpg') center center no-repeat;
    background-size: cover;
    border: 10px solid white;
    font-family: 'Brush Script MT', cursive;
    
}
#about_us h1{
    margin: 33px 0px 0px 724px;
    font-size: 5rem;
    display: block;
    color: black;
}
#about_us h2{
    margin: 50px 0px 25px 800px;
    font-size: 2rem;
    display: block;
    color: gray;
    font-family: 'Baloo 2, cursive';
}
#about_us h3{
    margin: 5px 0px 0px 730px;
    font-size: 3rem;
    display: block;
    color: black;
    font-family: Georgia, serif;
}

    @media (min-width: 600px) {

      .navbar.scrolling-navbar.top-nav-collapse {
        padding-top: 5 px;
        padding-bottom: 5 px;
        background-color: #880e4f !important;
      }

      .dip-pink {
        color: #880e4f !important;
      }

      .c-tittle {
        color: #880e4f !important;
        font-family: 'Great Vibes', cursive !important;
        font-size: 2rem !important;
        font-weight: 600 !important;
      }

    }
  </style>
</head>

<body class="medical-lp">


  <header>

    
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
      
        <a class="navbar-brand" href="#" style="font-family: 'Great Vibes', cursive;"><strong>Super
            Market</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!--Links-->
          <ul class="navbar-nav mr-auto smooth-scroll">
            <li class="nav-item">
              <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="store.php" data-offset="80">Store</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#features" data-offset="80">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services" data-offset="20">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#aboutus" data-offset="80">About us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contactus" data-offset="80">Contact Us</a>
            </li>
          </ul>

            <?php

                if (isset($_SESSION['admin'])) { ?>

                    <div>
                        <p class="white-text mt-3 mr-2"> <i class="fas fa-user"></i> <?php echo $_SESSION['admin'] ?></p>
                    </div>

                    <div>
                        <a type="button" role="button" href="logout.php" class="btn btn-outline-light btn-sm btn-rounded waves-effect">Logout</a>
                    </div>

                <?php } else if (isset($_SESSION['user'])) { ?>

                    <div>
                        <p class="white-text mt-3 mr-2"><i class="fas fa-user"></i> <?php echo $_SESSION['user'] ?></p>
                    </div>

                    <div>
                        <a type="button" role="button" href="logout.php" class="btn btn-outline-light btn-sm btn-rounded waves-effect">Logout</a>
                    </div>

                <?php } else { ?>

                    <a type="button" role="button" href="login.php" class="btn btn-outline-light btn-sm btn-rounded waves-effect">Login</a>
                <?php } ?>
                
        </div>
     
    </nav>
    
    <section id="home" class="view"
      style="background-image: url('https://images.unsplash.com/photo-1542838132-92c53300491e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
      <div class="mask rgba-black-light">
        <div class="container h-100 d-flex justify-content-center align-items-center">
          <div class="row pt-5 mt-3">
            <div class="col-12 col-md-6 text-center text-md-left">
              <div class="white-text">
                <h1 class="h1-responsive font-weight-bold mt-md-5 mt-0 wow fadeInLeft" data-wow-delay="0.3s"> <span
                    style="font-family: 'Great Vibes', cursive; font-size: 140px;">Hygenic</span>
                  Fresh Vegetables For You</h1>
                <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
                <p class="wow fadeInLeft mb-3" data-wow-delay="0.3s">
                  Our Super Market offers the best
                  vegetables and groceries for you.
                  We guarantee the quality of all the provisions we
                  provide as they are  freshely picked.
                  
                </p>
                <br>
                <a href="store.php" class="btn btn-unique btn-rounded font-weight-bold ml-lg-0 wow fadeInLeft"
                  data-wow-delay="0.3s">Shop
                  Now</a>
                <a href="login.php" class="btn btn-outline-white btn-rounded font-weight-bold wow fadeInLeft"
                  data-wow-delay="0.3s">Login
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </header>

  <main>

    <div class="container">

     
      <section id="features" class="mt-4 mb-5 pb-5">

       
        <h1 class="text-center mb-5 mt-5 pt-5 font-weight-bold dark-grey-text wow fadeIn" data-wow-delay="0.2s">
          WHAT WE OFFER</h1>
      
        <p class="text-center grey-text w-responsive mx-auto mb-5 wow fadeIn" data-wow-delay="0.2s">
        Our supermarket typically has places for fresh meat, fresh produce, dairy, deli items, baked goods, etc. Shelf space is also reserved for canned and packaged goods and for various non-food items such as kitchenware, household cleaners, pharmacy products and pet supplies..</p>

      
        <div class="card-deck">

        
          <div class="card">

           
            <div class="view overlay">
              <img class="card-img-top"   src="https://cflare.shop.bigbazaar.com/cdn-cgi/image/width=450/media/simple/17/411/1-zoom.jpg" alt="Card image cap">
              <a>
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>

        
            <div class="card-body">
           
              <h4 class="card-title text-center c-tittle">Liquid Multi-Purpose Cleaner Lime Fresh</h4>
              <hr>
           
              <p class="card-text text-center">Dettol Multi-Use Hygiene Disinfectant Liquid - Lime Fresh leaves behind a fresh fragrance once it's used to kill germs and bacteria. Moreover, you can use the Disinfectant Liquid for cleaning soft and hard surfaces..</p>
         
              <a href="#!" class="black-text d-flex justify-content-center">
                <h5>Read more <i class="fas fa-angle-double-right"></i></h5>
              </a>

            </div>

          </div>
      

         
          <div class="card">

           
            <div class="view overlay">
              <img class="card-img-top" src="https://cflare.shop.bigbazaar.com/cdn-cgi/image/width=450/media/simple/70/3/1-zoom.jpg" alt="Card image cap">
              <a>
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>

         
            <div class="card-body">
          
              <h4 class="card-title text-center c-tittle">Miniature Chocolates(Snickers)</h4>
              <hr>
             
              <p class="card-text text-center">Snickers Miniatures is something your children would love when it's time for something very delicious. Moreover, you can offer the chocolate as a gift to someone you love</p>
            
              <a href="#!" class="black-text d-flex justify-content-center">
                <h5>Read more <i class="fas fa-angle-double-right"></i></h5>
              </a>

            </div>

          </div>
         
          <div class="card">

            
            <div class="view overlay">
              <img class="card-img-top" src="https://cflare.shop.bigbazaar.com/cdn-cgi/image/width=450/media/product/51/151/8-wide_zoom.jpg" alt="Card image cap">
              <a>
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>

           
            <div class="card-body">
             
              <h4 class="card-title text-center c-tittle">Amul Chocolate Brownie Ice Cream</h4>
              <hr>
             
              <p class="card-text text-center">Chocolate ice cream is a flavour of ice cream which is the second most common flavour of ice cream, after vanilla. Chocolate ice cream is made by blending in cocoa powder in along with the eggs (optional), cream, vanilla and sugar used to make ice cream. The cocoa powder gives the ice cream a brown colou</p>
          
              <a href="#!" class="black-text d-flex justify-content-center">
                <h5>Read more <i class="fas fa-angle-double-right"></i></h5>
              </a>

            </div>

          </div>
        

        </div>
        
      </section>
     
    </div>


    <div class="container">

    
      <section id="services" class="info-section mb-5 mt-5 pt-4">

       
        <div class="row pt-5">

         
          <div class="col-md-7 mb-2 smooth-scroll wow fadeIn" data-wow-delay="0.2s">

            
            <h2 class="mb-3 font-weight-bold">We Provide High Quality services</h2>
            
            <h4 class="mb-5 dark-grey-text">Once Visit Our New Store.</h4>
            
            <ul style="list-style: none; font-size: 20px;">
              <li><i class="far fa-check-circle dip-pink" style="font-size: 20px;"></i> Quality Provisions</li>
              <li><i class="far fa-check-circle dip-pink" style="font-size: 20px;"></i> Fresh Products</li>
              <li><i class="far fa-check-circle dip-pink" style="font-size: 20px;"></i> Free Delivery</li>
              <li><i class="far fa-check-circle dip-pink" style="font-size: 20px;"></i> 24/7 Customer Support</li>

            </ul>
            <br>
           
            <a href="#home" class="btn btn-rounded btn-unique mb-4">Contact Us Now</a>

          </div>
        
          <div class="col-lg-4 flex-center ml-lg-auto col-md-5 mb-5 wow fadeIn" data-wow-delay="0.3s">

         
            <img src="https://images.unsplash.com/photo-1578916171728-46686eac8d58?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8c3VwZXJtYXJrZXR8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" class="img-fluid z-depth-1">

          </div>
         

        </div>
      

      </section>
    

    </div>

  
    <section id="about_us">
        <h1 class="mainheading">About Us</h1>
        <h2>Developed By</h2>
        <h3>Sandesh Kumar Reddy (CSE20124)</h3>
        <h3>Shiva Pranav (CSE20125)</h3>
        <h3>Subramanyam Reddy (CSE20131)</h3>
        <h3>Saiteza (CSE20072)</h3>
    </section>

    <hr>

   
    <div class="container">

     
      <section id="contactus" class="contact-section my-5">

        <h1 class="text-center mb-5 mt-5 pt-4 font-weight-bold dark-grey-text wow fadeIn" data-wow-delay="0.2s">Contact
          Us
        </h1>

        
        <div class="card">

        
          <div class="row">

          
            <div class="col-lg-12">

              <div class="card-body contact text-center h-100 white-text light-blue darken-2">

                <h3 class="my-4 pb-2">Contact information</h3>

                <ul class="text-lg-center list-unstyled ml-4">
                  <li>
                    <p><i class="fas fa-map-marker-alt pr-2 white-text"></i>Amrita Vishwa Vidya Peetham,Banglore, India</p>
                  </li>
                  <li>
                    <p><i class="fas fa-phone pr-2 white-text"></i>+ 91  70324 50308</p>
                  </li>
                  <li>
                    <p><i class="fas fa-envelope pr-2 white-text"></i>supermarket@amrita.com</p>
                  </li>
                </ul>
                <hr class="hr-light my-4">

              </div>

            </div>
         
          </div>
         

        </div>
      
      </section>
      



    </div>

  </main>
 
  <footer class="page-footer text-center text-md-left stylish-color-dark pt-0">
        
        <div class="container mt-5 mb-4 text-center text-md-left">
            <div class="row mt-3">

                
                <div class="col-md-3 col-lg-4 col-xl-3 mb-4 mt-5">
                    <h6 class="text-uppercase font-weight-bold"><strong>Super Market</strong></h6>
                    <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>All Types Of Products Available. </p>
                </div>
                

                
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 mt-5">
                    <h6 class="text-uppercase font-weight-bold"><strong>Products</strong></h6>
                    <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p><a href="bevarages.html">Beverages</a></p>
                    <p><a href="groceries.html">Groceries</a></p>
                    <p><a href="fandv.html">Fruits and Vegetables</a></p>
                    <p><a href="clandhy.html">HYGENE</a></p>
                    <p><a href="dairy.html">Dairy Products</a></p>
                    <p><a href="healthsup.html">Health Essentials</a></p>
                </div>
                
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 mt-5">
                    <h6 class="text-uppercase font-weight-bold"><strong>Useful links</strong></h6>
                    <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p><a href="#!">Your Account</a></p>
                    <p><a href="#!">Become an Affiliate</a></p>
                    <p><a href="#!">Shipping Rates</a></p>
                    <p><a href="#!">Help</a></p>
                </div>
                
                <div class="col-md-4 col-lg-3 col-xl-3 mt-5">
                    <h6 class="text-uppercase font-weight-bold"><strong>Contact</strong></h6>
                    <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p><i class="fas fa-home mr-3"></i> Banglore,Amrita Viswa VidyaPeetham, India</p>
                    <p><i class="fas fa-envelope mr-3"></i> supermarket@amrita.com</p>
                    <p><i class="fas fa-phone mr-3"></i> + 91 70324 50308</p>
                    <p><i class="fas fa-print mr-3"></i> + 91 70937 25525</p>
                    <p><i class="fas fa-print mr-3"></i> + 91 79896 23681</p>
                </div>

            </div>
        </div>
        
    </footer>
    
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
  <script type="text/javascript" src="popper.min.js"></script>

  <script type="text/javascript" src="bootstrap.min.js"></script>

  <script type="text/javascript" src="mdb.min.js"></script>


  <script>

    
    new WOW().init();

  </script>

</body>

</html>