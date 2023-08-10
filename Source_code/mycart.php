<?php

session_start();
include 'connection.php';
if (isset($_SESSION['user']) or isset($_SESSION['admin'])) {
   $quantity = $_POST['quantity'];

      $id = $_SESSION['id'];
      
      $query = "SELECT * FROM product WHERE id = '$id' ";
      $result = mysqli_query($conn, $query);

      if (mysqli_num_rows($result) > 0) {
        
          while ($row = mysqli_fetch_assoc($result)) {
              $pname = $row['pname'];
              $price = $row['price'];
              $imglink = $row['imglink'];
              $category = $row['category'];
              $description = $row['description'];
              
          }

          $_SESSION['id'] = $id;
      }

      if (isset($_POST['one_day_del'])) {
          $one_day_del = $_POST['one_day_del'];
      } else {
          $one_day_del = "no";
      }
      $username = $_SESSION['user'];
      $count=0;
      if(isset($_SESSION['cart']))
      {
        $count = count($_SESSION['cart']);
      }


    


      $sub_total = $price * $quantity;
      $total=$sub_total+60;

      $_SESSION['pname'] = $pname;
      $_SESSION['imglink'] = $imglink;
      $_SESSION['one_day_del'] = $one_day_del;
      $_SESSION['quantity'] = $quantity;
      $_SESSION['sub_total'] = $sub_total;
      $_SESSION['total'] = $total;
      
      
    }   
    
 else {
  header('Location: login.php');
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>My cart</title>
 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">

    
    <link href="bootstrap.min.css" rel="stylesheet">
   
    <link href="mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
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
          $count=count($_SESSION['cart']) * 5 ;
        }
      ?>
      <a href="mycart.php" ><i class="fas fa-shopping-cart"></i> (<?php echo $count; ?>)</a>
    </div>


            </div>


        </nav>
        
    </header>
      </body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cart</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center border rounded bg-light my-5">
        <h1>MY CART</h1>
      </div>

      <div class="col-lg-9">
        <table class="table">
          <thead class="text-center">
            <tr>
              <th scope="col">Serial No.</th>
              <th scope="col">Item Name</th>
              <th scope="col">Item Price</th>
              <th scope="col">Quantity</th>
              <th scope="col">Total</th>              
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody class="text-center">
            <?php 
              if(isset($_SESSION['cart']))
              {$cars = array("");
                foreach($_SESSION['cart'] as $key => $value)
                {
                  $sr=$key+1;
                  echo"
                    <tr>
                      <td>$sr</td>
                      <td>$value[pname]</td>
                      <td>$value[price]<input type='hidden' class='price' value='$value[price]'></td>
                      <td>
                        <form action='manage_cart.php' method='POST'>
                          <input class='text-center iquantity' name='quantity' onchange='this.form.submit();' type='number' value='$value[quantity]' min='1' max='10'>
                          <input type='hidden' name='pname' value='$value[pname]'>
                        </form>
                      </td>
                      <td class='itotal'></td>
                      <td>
                      <form action='manage_cart.php' method='POST'>
                      <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
                        <input type='hidden' name='pname' value='$value[pname]'>
                      </form>
                      </td>
                    </tr>
                  ";
                }
              }
            ?>
          </tbody>
        </table>
      </div>
      <
      <div class="col-lg-3">
        <div class="border bg-light rounded p-4">
          <h4>Grand Total:</h4>
          <h5 class="text-right" id="gtotal"></h5>
          <h5 class="text-right" > - </h5>
          <h5 class="text-right" > Wallet amount : <?php echo $count; ?> </h5>
          <h5 class="text-right" id="ftotal"></h5>
          
          <br>
          <?php 
            if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
            {
          ?>
          <form action="purchase.php" method="POST">
            <div class="form-group">
              <label>Full Name </label>
              <input type="text" name="full_name" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Phone Number</label>
              <input type="number" name="phone_no" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Address</label>
              <input type="text" name="address" class="form-control" required>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="pay_mode" value="COD" id="flexRadioDefault2" checked>
              <label class="form-check-label" for="flexRadioDefault2">
                Cash On Delivery
              </label>
              <input type="text" name="username" value="<?php echo $_SESSION['user'] ?> " hidden >
            </div>
            <br>
           

            <button class="btn btn-rounded btn-lg pink-gradient" name="purchase">Make Purchase</button>
          </form>
        
          <?php
            }
          ?>
        </div>
      </div>

    </div>
  </div>

  <script>

var gt=0;
var iprice=document.getElementsByClassName('price');
var iquantity=document.getElementsByClassName('iquantity');
var itotal=document.getElementsByClassName('itotal');
var gtotal=document.getElementById('gtotal');
var ftotal=document.getElementById('ftotal');

function subTotal()
{
  gt=0;
  for(i=0;i<iprice.length;i++)
  {
    itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);

    gt=gt+(iprice[i].value)*(iquantity[i].value);

  }
  gtotal.innerText=gt;
  
}
var myVariable = gtotal;


subTotal();

</script>
</body>
</html>