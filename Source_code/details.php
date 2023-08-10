<?php
session_start();
include 'connection.php';
if (isset($_POST['id'])) {
 
    $id = $_POST['id'];

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
        </style>
</head>

<body >


    <header>

        <section class="view" style="background: linear-gradient(to right, #fdeff9, #ec38bc, #7303c0, #03001e);">
            <div class="h-100 d-flex justify-content-center">
                <div class="container">
                    <div class="row wraper mt-4">

                        <div class="col-md-4 col-sm-12 img-cover">
                        <img src="<?php echo $imglink ?>" alt="" style="width: 300px; height: 550px;"> 
                        </div>
                        <div class="col-md-8 " style="overflow: hidden; overflow-y: scroll; height:100%">

                            <h3 class="text-center font-weight-bold mt-5">Product Details</h3>
                            <hr>

                            <div class="d-flex justify-content-between">
                                <div class="mt-2 ml-2">
                                    <h6 class="pink-text font-weight-bold">Product Name</h6>
                                    <h5 class="" style="font-weight: 500;"><?php echo $pname ?></h5>

                                    <h6 class="pink-text font-weight-bold mt-5">Price per Kg</h6>
                                    <h4 class="black-text" style="font-weight: 500;"> ₹<?php echo $price ?></h4>
                                    <p>Product Weight : 500g</p>

                                </div>
                                <div class="mt-2 ml-2">
                                    <img src="<?php echo $imglink ?>" alt="" style="width: 150px; height: 150px;">
                                </div>
                            </div>

                            <form action="orderdetails.php" method="post">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="ml-4">
                                            <h6 class="pink-text font-weight-bold mt-4" style="margin-bottom: 1.9rem;">Select quantity</h6>
                                            <div class="def-number-input number-input safari_only">
                                                <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                                                <input class="quantity" min="1" name="quantity" value="1" max="5" type="number">
                                                <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-wrap"></div>
                                    <div class="col-md-12">
                                        <div>
                                            <h6 class="pink-text font-weight-bold mt-4">FAST DELVERY</h6>
                                          
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="eggless" value="yes" name="one_day_del">
                                                <label class="form-check-label" for="eggless">Make ONE-DAY DELIVERY FOR NO EXTRA CHARGES APPLY </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="text-center mt-5 mb-5">
                                            <button type="submit" name="buybtn" class="btn buybtn btn-lg mt-2">BUY NOW</button>
                                        </div>

                                    </div>
                                </div>
                            </form>

                            <div>
                                <h6 class="pink-text font-weight-bold mt-4">category Use</h6>
                                <p class="grey-text"><?php echo $category ?></p>
                            </div>

                            <div>
                                <h6 class="pink-text font-weight-bold mt-4">Product Description</h6>
                                <p class="grey-text"><?php echo $description ?></p>
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