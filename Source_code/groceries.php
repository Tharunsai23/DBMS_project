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
    <title>Groceries</title>
    
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
.categories {margin: 7px;
}    
.col-3{flex-basis: 30%;
min-width: 250px;
margin-bottom: 30px;
transition: transform 0.75s;
}
.row{display:flex;
    align-items:center;
    flex-wrap:wrap;
    justify-content:space-around;
    }

    .categories {margin: 7px;
    }    
.col-3:hover{
transform: translateY(-3px);
}     
        html,
        body,
        header,
        .view {
            height: 50%;
        }


        @media (min-width: 600px) {

.navbar.scrolling-navbar.top-nav-collapse {
    padding-top: 5 px;
    padding-bottom: 5 px;
    background: linear-gradient(40deg, #FF5858, #ee4392) !important;
}

.dip-pink {
    color: #880e4f !important;
}

.c-tittle {
    
    font-family: 'Great Vibes', cursive !important;
    font-size: 2rem !important;
    font-weight: 600 !important;
}

}

.navbar {
background: linear-gradient(40deg, #FF5858, #ee4392) !important;
}


.navbar a {
float: left;
font-size: 16px;
color: white;
text-align: center;
padding: 14px 16px;
text-decoration: none;
}
.subnav {
float: left;
overflow: hidden;
}


.subnav .subnavbtn {
font-size: 16px;
border: none;
outline: none;
color: white;
padding: 14px 16px;
background-color: inherit;
font-family: inherit;
margin: 0;
}


.navbar a:hover, .subnav:hover .subnavbtn {
background-color: linear-gradient(40deg, #FF5858, #ee4392)
}


.subnav-content {
display: none;
position: absolute;
left: 0;
background-color:  #ee4392;
width: 100%;
z-index: 1;
}


.subnav-content a {
float: left;
color: black;
text-decoration: none;
}

.subnav-content a:hover {
background-color: #eee;
color: black;
}


.subnav:hover .subnav-content {
display: block;
}
        html,
        body,
        header,
        .view {
            height: 50%;
        }


        @media (min-width: 600px) {

            .navbar.scrolling-navbar.top-nav-collapse {
                padding-top: 5 px;
                padding-bottom: 5 px;
                background: linear-gradient(40deg, #FF5858, #ee4392) !important;
            }

            .dip-pink {
                color: #880e4f !important;
            }

            .c-tittle {
                
                font-family: 'Great Vibes', cursive !important;
                font-size: 2rem !important;
                font-weight: 600 !important;
            }

        }

        .navbar {
            background: linear-gradient(40deg, #FF5858, #ee4392) !important;
        }

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
  .subnav {
  float: left;
  overflow: hidden;
}


.subnav .subnavbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}


.navbar a:hover, .subnav:hover .subnavbtn {
  background-color: linear-gradient(40deg, #FF5858, #ee4392)
}

.subnav-content {
  display: none;
  position: absolute;
  left: 0;
  background-color:  #ee4392;
  width: 100%;
  z-index: 1;
}


.subnav-content a {
  float: left;
  color: black;
  text-decoration: none;
}


.subnav-content a:hover {
  background-color: #eee;
  color: black;
}


.subnav:hover .subnav-content {
  display: block;
}
    </style>
</head>

<body class="medical-lp">

   
    <header>

      
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">

            <a class="navbar-brand" href="#" style="font-family: 'Great Vibes';"><strong>Super
                    Market</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               
                <ul class="navbar-nav mr-auto smooth-scroll">
                    <li class="nav-item">
                        <a class="nav-link" href="../#home">Home <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                       
                        <div class="subnav">
                            <button class="subnavbtn">Store <i class="fa fa-caret-down"></i></button>
                            <div class="subnav-content">
                             <a href="fandv.php"> FRUITS AND VEGETABLES </a>
                              <a href="dairy.php" target="_blank">DAIRY PRODUCTS</a>
                               <a href="groceries.php" target="_blank">GROCERIES</a>
                              <a href="candh.php">CLEAN AND HYGENE</a>
                              <a href="health_sup.php">HEALTH ESSENTIALS</a>
                            <a href="beverages.php" target="_blank">BEVERAGES</a>
                            </div>
                          </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../#features" data-offset="80">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../#services" data-offset="20">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../#aboutus" data-offset="80">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../#contactus" data-offset="80">Contact Us</a>
                    </li>
                </ul>


                <?php

if (isset($_SESSION['admin'])) { ?>

    <div>
        <p class="white-text mt-3 mr-2"> <i class="fas fa-user"></i> <?php echo $_SESSION['admin'] ?></p>
    </div>

    <div>
        <a type="button" role="button" href="../logout.php" class="btn btn-outline-light btn-sm btn-rounded waves-effect">Logout</a>
    </div>

<?php } else if (isset($_SESSION['user'])) { ?>

    <div>
        <p class="white-text mt-3 mr-2"><i class="fas fa-user"></i> <?php echo $_SESSION['user'] ?></p>
    </div>

    <div>
        <a type="button" role="button" href="../logout.php" class="btn btn-outline-light btn-sm btn-rounded waves-effect">Logout</a>
    </div>

<?php } else { ?>

    <a type="button" role="button" href="login.php" class="btn btn-outline-light btn-sm btn-rounded waves-effect">Login</a>
<?php } ?>




            </div>


        </nav>
      
    </header>

    <section>
        <div class="container">

            <div class="row">

                <?php

                $query = "SELECT * FROM product where category='groceries' ";
                $result = mysqli_query($conn, $query) or die("query fail");

                if (mysqli_num_rows($result) > 0) {

                    while ($row = mysqli_fetch_assoc($result)) {

                ?>

                        <div class="col-md-4">
                            <div class="card mt-5">

                               
                                <div class="view overlay">
                                    <img class="card-img-top" src="<?php echo $row['imglink'] ?>" alt="Card image cap" style="height: 300px; width:350px; ">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>

                                <div class="card-body">
                            
                                    <h3 class="card-title text-center c-tittle pink-text"><?php echo $row['pname'] ?></h3>
                                    <h4 class="text-center font-weight-bold"> ₹ <?php echo $row['price'] ?> </h4>
                                    <hr>
                                 
                                    <p class="card-text text-center"><?php echo $row['description'] ?></p>
                                    <p class="card-text text-center" style="color:black;"> <b>  PRODUCT AISLE : <?php echo $row['pro_aisle'] ?> </b></p>
                                   
                                    <div class="text-center">
                                        <form action="details.php" method="post">
                                            <input type="text" name="id" value="<?php echo $row['id'] ?>" hidden>
                                            <button type="submit" name="buynowbtn" class="btn pink-gradient btn-rounded">Buy Now</button>
                                        </form>
                                    </div>

                                </div>

                            </div>
                        </div>

                <?php
                    }
                }

                ?>
            </div>
        </div>

    </section>


    <a href="store.php" style="margin-left : 600px;" class="btn btn-unique btn-rounded font-weight-bold"
                  >Go Back To Store</a>
      <footer class="page-footer text-center text-md-left stylish-color-dark pt-0">
       
        <div class="container mt-5 mb-4 text-center text-md-left">
            <div class="row mt-3">

                <div class="col-md-3 col-lg-4 col-xl-3 mb-4 mt-5">
                    <h6 class="text-uppercase font-weight-bold"><strong>Super Market</strong></h6>
                    <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>Here you can use rows and columns here to organize your footer content. </p>
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



