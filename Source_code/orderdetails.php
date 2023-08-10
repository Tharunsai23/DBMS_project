<?php

session_start();
include 'connection.php';


if (isset($_SESSION['user']) or isset($_SESSION['admin'])) {

    if (isset($_POST['buybtn'])) {
         
     
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

        $sub_total = $price * $quantity;
        $total=$sub_total+60;

        $_SESSION['pname'] = $pname;
        $_SESSION['imglink'] = $imglink;
        $_SESSION['one_day_del'] = $one_day_del;
        $_SESSION['quantity'] = $quantity;
        $_SESSION['sub_total'] = $sub_total;
        $_SESSION['total'] = $total;
        
    }
} else {
    header('Location: login.php');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Product Details</title>
   
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    
    <link href="bootstrap.min.css" rel="stylesheet">
    
    <link href="mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="details.css">
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
        .light-black {
            color: gray !important;
            font-weight: 500;
            margin-bottom: 2px;
        }
    </style>

</head>


<body class="">

   
    <header>

       
        <section class="view" style="background: linear-gradient(to right, #fdeff9, #ec38bc, #7303c0, #03001e);">
            <div class="h-100 d-flex justify-content-center">
                <div class="container">
                    <div class="row wraper mt-4">

                        <div class="col-md-4 col-sm-12 img-cover">
                        <img src="<?php echo $imglink ?>" alt="" style="width: 300px; height: 550px;">
                        </div>
                        <div class="col-md-8">
                            <div class="ml-4 mr-4">
                                <h3 class="text-center font-weight-bold mt-5 ml-4">Product Details</h3>
                                <hr>

                                <h5 class="pink-text" style="font-weight: 400;">Product Summary</h5>
                                <div class="d-flex justify-content-between">
                                    <div class="mt-2 ml-2 ">
                                        <p class="grey-text light-black">Product Name</p>
                                        <p class="grey-text light-black">One-day Delivery</p>
                                        <p class="grey-text light-black">Category</p>
                                        <p class="grey-text light-black">Quantity</p>


                                    </div>
                                    <div class="mt-2 ml-2">
                                        <p class="grey-text text-right light-black"><?php echo $pname ?></p>
                                        <p class="grey-text text-right light-black"><?php echo $one_day_del ?></p>
                                        <p class="grey-text text-right light-black"><?php echo $category ?> </p>
                                        <p class="grey-text text-right light-black"><?php echo $quantity ?></p>
                                    </div>
                                </div>

                                <h5 class="pink-text mt-4" style="font-weight: 400;">Price Details</h5>
                                <div class="d-flex justify-content-between">
                                    <div class="mt-2 ml-2 ">
                                        <p class="grey-text light-black">Product Price</p>
                                        <p class="grey-text light-black">Price x <?php echo $quantity ?> item</p>
                                        <p class="grey-text light-black">Shipping Charge</p>
                                        <p class="grey-text light-black">Total (Price + Shipping Charges)</p>


                                    </div>
                                    <div class="mt-2 ml-2">
                                        <p class="grey-text text-right light-black">₹ <?php echo $price ?></p>
                                        <p class="grey-text text-right light-black">₹ <?php echo $sub_total ?></p>
                                        <p class="grey-text text-right light-black">₹ 60.0</p>
                                        <p class="grey-text text-right light-black">₹ <?php echo $total ?></p>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <form action="payment.php" method="post">
                                        <button  class="btn btn-rounded btn-lg pink-gradient" name="orderContinue" type="submit">Buy This Product</button>
                                       
                                    </form>
                                    <form action="manage_cart.php" method="POST">
                                    <form action="manage_cart.php" method="POST">
                                    <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                                    <?php echo " <input type='hidden'  name='pname' value= '$pname'  >
                                    <input type='hidden' name='price' value='$price'>           "  ; ?>                  
                                 </form>
                                </form>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </header>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <script type="text/javascript" src="popper.min.js"></script>
    
    <script type="text/javascript" src="bootstrap.min.js"></script>
    
    <script type="text/javascript" src="mdb.min.js"></script>

    <script>
        
        $(document).ready(function() {
            $('.mdb-select').materialSelect();
        });
    </script>

</body>



</html>