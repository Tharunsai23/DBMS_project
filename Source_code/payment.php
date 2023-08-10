<?php
include "connection.php";

session_start();



if (isset($_SESSION['user']) or isset($_SESSION['admin'])) {
    

    if (isset($_SESSION['total'])) {
          
        if (isset($_POST['placeorder'])) {
           
            $username =  $_SESSION['user'];

            $query = "SELECT * FROM customer WHERE username = '$username' ";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $address = $row['address'];
                    $mobileNo =  $row['mobileno'];
                    $email =  $row['email'];
                    
                }

                $pname =  $_SESSION['pname'];
                $imglink = $_SESSION['imglink'];
                $one_day_del = $_SESSION['one_day_del'];
                $ord_id = $_SESSION['ord_id'];
                $quantity = $_SESSION['quantity'];
                
                $price = $_SESSION['price'];
                $sub_total = $_SESSION['sub_total'];
                $total = $_SESSION['total'];
                


                $query = "INSERT INTO orders ( username, pname, one_day_del, ord_id, quantity, imgurl, address, email, mobileno) VALUES ('$username', '$pname', '$one_day_del', '$ord_id', '$quantity', '$imglink', '$address', '$email', '$mobileNo')";
                mysqli_query($conn, $query);
               
                unset($_SESSION["id"]);
                unset($_SESSION["pname"]);
                unset($_SESSION["imglink"]);
                unset($_SESSION["one_day_del"]);
                unset($_SESSION["ord_id"]);
                unset($_SESSION["quantity"]);
                unset($_SESSION["price"]);
                unset($_SESSION["sub_total"]);
                unset($_SESSION["total"]);
               
               

                header('Location: projectsuccess.html');
            } 
            
            else {
                echo mysqli_error($conn);
            }
            
        }
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
        .light-black {
            color: gray !important;
            font-weight: 500;
            margin-bottom: 2px;
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
    </style>

</head>


<body class="">

 
    <header>

        
        <section class="view" style="background: linear-gradient(to right, #fdeff9, #ec38bc, #7303c0, #03001e);">
            <div class="h-100 d-flex justify-content-center">
                <div class="container">
                    <div class="row wraper mt-4">
                        <div class="col-md-12">
                            <div class="ml-4 mr-4">
                                <h3 class="text-center font-weight-bold mt-5 ml-4">Make Payment</h3>
                                <hr>

                                <div class="d-flex justify-content-center">
                                    <div class="mt-5 ml-2 ">

                                        <h1 class="font-weight-bold text-center"> ₹ <?php $total ?></h5></h1>

                                        <div class="md-form md-outline form-lg mt-5">
                                            <input id="form-lg" class="form-control form-control-lg" type="number">
                                            <label for="form-lg">Enter account number</label>
                                        </div>
                                    </div>

                                </div>

                                <div class="text-center mt-2">
                                    <form action="payment.php" method="post">
                                        <button class="btn btn-rounded btn-lg pink-gradient" name="placeorder" type="submit">Place Order</button>
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
    </script>
    <script>
  var gtotal = myVariable;
  console.log(gtotal); // Output the JavaScript variable value
  document.write(gtotal); // Display the JavaScript variable value on the webpage
</script>
</body>



</html>