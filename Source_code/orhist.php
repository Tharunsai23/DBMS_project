<?php

session_start();
include "connection.php";
$con=mysqli_connect("localhost","root","","testing");

if(mysqli_connect_error()){
  echo"<script>
    alert('cannot connect to database');
    window.location.href='mycart.php';
  </script>";
  exit();
}

     
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard</title>
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    
    <link href="bootstrap.min.css" rel="stylesheet">
    
    <link href="mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <style>
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
        .card {
            background-color: rgb(236 235 249) !important;
        }

        .bg {
            background-color: #bdbdbd;
        }

        .list {
            list-style: none;
        }


        tbody {
            display: block;
            max-height: 490px;
            overflow-y: scroll;
        }

        thead,
        tbody tr {
            display: table;
            width: 100%;
            table-layout: fixed;
        }

        thead {
            width: 100%;
        }

        table {
            width: 200px;
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
                        <a class="nav-link" href="try.php">Home <span class="sr-only"></span></a>
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
                            <a href="bevarages.php" target="_blank">BEVERAGES</a>
                            </div>
                          </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="try.php" data-offset="80">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="try.php" data-offset="20">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="try.php" data-offset="80">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="try.php" data-offset="80">Contact Us</a>
                    </li>
                </ul>


                <?php

if (isset($_SESSION['admin'])) { ?>

    <div>
        <p class="white-text mt-3 mr-2"> <i class="fas fa-user"></i> <?php echo $_SESSION['admin'] ?></p>
    </div>

    <div>
        <a type="button" role="button" href="/logout.php" class="btn btn-outline-light btn-sm btn-rounded waves-effect">Logout</a>
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

                   
      <?php
        $count=0;
        if(isset($_SESSION['cart']))
        {
          $count=count($_SESSION['cart']);
        }
      ?>
      <a href="mycart.php" ><i class="fas fa-shopping-cart"></i> (<?php echo $count; ?>)</a>
    </div>


            </div>


        </nav>
        
    </header>
      </body>

    <div class="col-md-10" style='width: 100%;'>

                   
                    <div class="card card-cascade narrower mt-5" style='width: 100%;'>

                        
                        <div class="view view-cascade gradient-card-header  pink-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-center align-items-center" style='width: 100%;'>


                            <h4 '>User Order History</h4>


                        </div>
                                     
    <div class="container mt-5" style="background-color: white;" >
  <div class="row" style="background-color: white;">
    <div class="col-lg-12" style="background-color: white;">
      <table class="table text-center table">
        <thead>
          <tr >
            <th scope="col">Order ID</th>
            <th scope="col">Customer Name</th>
            <th scope="col">Phone No</th>
            <th scope="col">Address</th>
            <th scope="col">Pay Mode</th>
            <th scope="col">Username</th>
            <th scope="col" >Orders</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            $username = $_SESSION['user'];
            $query="SELECT * FROM `order_manager` WHERE `username`= '$username' ";
            $user_result=mysqli_query($con,$query);
            
            while($user_fetch=mysqli_fetch_assoc($user_result))
            {
              echo"
                <tr>
                  <td>$user_fetch[Order_Id]</td>
                  <td>$user_fetch[Full_Name]</td>
                  <td>$user_fetch[Phone_No]</td>
                  <td>$user_fetch[Address]</td>
                  <td>$user_fetch[Pay_Mode]</td>
                  <td>$user_fetch[username]<?td>
                  <td>
                  
                    <table class='table text-center table'>
                      <thead style='background-color: white;'>
                        <tr  >
                          <th scope='col' style='width: 50%;' >Item Name</th>
                          <th scope='col' >Price</th>
                          <th scope='col' '>Quantity</th>
                        </tr>
                      </thead>
                      <tbody>
                  ";
                    $order_query="SELECT * FROM `user_orders` WHERE `Order_Id`='$user_fetch[Order_Id]'";
                    $order_result=mysqli_query($con,$order_query);
                    while($order_fetch=mysqli_fetch_assoc($order_result))
                    {
                      echo"
                        <tr style='background-color: white;'>
                        <td style='width: 50%;'>$order_fetch[Item_Name]</td>
                        <td style='width: 50%;'>$order_fetch[Price]</td>
                        <td style='width: 50%;'>$order_fetch[Quantity]</td>
                        </tr>
                      ";
                    }
              echo"
                      </tbody>
                    </table>
                  </td>
                </tr>
              ";
            }
          ?>

        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
 </div>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script type="text/javascript" src="popper.min.js"></script>
 
    <script type="text/javascript" src="bootstrap.min.js"></script>
   
    <script type="text/javascript" src="mdb.min.js"></script>

    <script>
        new WOW().init();
    </script>

</body>

</html>