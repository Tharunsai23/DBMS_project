<?php
session_start();
include 'connection.php';
if (isset($_POST['username'])) {
 
    $username = $_POST['username'];

    $query = "SELECT * FROM customer WHERE username = '$username'";
    $result = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $fname = $row['fname'];
            $lname = $row['lname'];
            $username = $row['username'];
            $mobileno = $row['mobileno'];
            $email = $row['email'];
            $address = $row['address'];
            $picode = $row['picode'];
            $rating = $row['rating'];
            $feedback= $row['feedback'];
        }
       

        $_SESSION['username'] = $username;
        
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
                
                </div>
                <div class="col-md-8 " style="overflow: hidden; overflow-y: scroll; height:100%">

                    <h3 class="text-center font-weight-bold mt-5">Customer Details</h3>
                    <hr>

                    <div class="d-flex justify-content-between">
                        <div class="mt-2 ml-2">
                            <h6 class="pink-text font-weight-bold">Customer UserName</h6>
                            <h5 class="" style="font-weight: 500;"><?php echo $username ?></h5>

                            <h6 class="pink-text font-weight-bold mt-5">Mobile No</h6>
                            <h4 class="black-text" style="font-weight: 500;"> <?php echo $mobileno ?></h4>
                            

                        </div>
                        
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="mt-2 ml-2">
                            <h6 class="pink-text font-weight-bold">Customer Email</h6>
                            <h5 class="" style="font-weight: 500;"><?php echo $email ?></h5>

                            <h6 class="pink-text font-weight-bold mt-5">Pincode</h6>
                            <h4 class="black-text" style="font-weight: 500;"> <?php echo $picode ?></h4>

                            

                        </div>
                        
                        
                    </div>
                
                    <div class="d-flex justify-content-between">
                        <div class="mt-2 ml-2">
                            <h6 class="pink-text font-weight-bold">Customer Rating</h6>
                            <h5 class="" style="font-weight: 500;"><?php echo $rating ?></h5>

                            <h6 class="pink-text font-weight-bold mt-5">Feedback</h6>
                            <h4 class="black-text" style="font-weight: 500;"> <?php echo $feedback ?></h4>
                            

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