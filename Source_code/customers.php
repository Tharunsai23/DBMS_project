<?php

session_start();
include "connection.php";

$error  = null;

if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
} else {

    if (isset($_POST['AddCustBtn'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $username = $_POST['username'];
        $mobileno = $_POST['mobileno'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $pincode = $_POST['pincode'];
        $rating = $_POST['rating'];
        $feedback= $_POST['feedback'];

        $query = "INSERT INTO customer(fname, lname, username, mobileno, email ,address, picode, rating, feedback ) VALUES ('$fname', '$lname', '$username','$mobileno', '$email', '$address', '$pincode',5,'good')";
        $result =  mysqli_query($conn, $query) or die(mysqli_error($conn));
    }

    if (isset($_POST['deletebtn'])) {
        $username = $_POST['did'];
        $query = "DELETE FROM customer WHERE username='$username'";
        mysqli_query($conn, $query) or die(mysqli_error($conn));
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Products</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
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

<body class="bg">
    <section id="dashboard">
        <div class="container-fluid">
            <div class="row" style="height:100vh">
                <div class="col-md-2" style="background-color: white;">

                    <h5 class="text-center mt-5" style="font-weight: 400;">Admin Menue</h5>
                    <ul>
                        <li class="list"><a href="adminview.php" class="waves-effect grey-text"> <i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="list"><a href="products.php" class="waves-effect"> <i class="fas fa-shopping-bag"></i> Products</a>
                        </li>
                        <li class="list"><a href="logout.php" class="waves-effect grey-text"> <i class="fas fa-sign-out-alt"></i> Logout</a>
                        </li>
                    </ul>
                </div>


                <div class="col-md-10">

                    <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
                        <a class="btn pink-gradient btn-lg btn-rounded " role="button" data-toggle="modal" data-target="#ModalAddProduct">
                            <i class="fas fa-plus"></i> Add New Customer
                        </a>


                    </div>

                    <!-- Table with panel -->
                    <div class="card card-cascade narrower mt-5">

                        <!--Card image-->
                        <div class="view view-cascade gradient-card-header  pink-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-center align-items-center">


                            <h4>Happy Customers</h4>


                        </div>
                        <!--/Card image-->

                        <div class="px-4">

                            <div class="table-wrapper">
                                <!--Table-->
                                <table class="table table-hover mb-0 th-sm">

                                    <!--Table head-->
                                    <thead>
                                        <tr>
                                            <th class=" th-lg font-weight-bold">
                                                <a>Sr No

                                                </a>
                                            </th>
                                            <th class=" th-lg font-weight-bold">
                                                <a>Username

                                                </a>
                                            </th>
                                            <th class=" th-lg font-weight-bold">
                                                <a href="">E-mail

                                                </a>
                                            </th>
                                            <th class=" th-lg font-weight-bold">
                                                <a href="">Mobile NO

                                                </a>
                                            </th>
                                            <th class=" th-lg font-weight-bold">
                                                <a href="">View

                                                </a>
                                            </th>
                                            <th class=" th-lg font-weight-bold">
                                                <a href="">Edit

                                                </a>
                                            </th>
                                            <th class=" th-lg font-weight-bold">
                                                <a href="">Delete

                                                </a>
                                            </th>
                                        </tr>
                                    </thead>
                                    <!--Table head-->

                                    <!--Table body-->
                                    <tbody>
                                        <?php
                                        $query = "SELECT * FROM customer";
                                        $result = mysqli_query($conn, $query) or die("query fail");

                                        if (mysqli_num_rows($result) > 0) {
                                            $increment = 1;
                                            while ($row = mysqli_fetch_assoc($result)) {

                                        ?>

                                                <tr>
                                                    <td><?php echo $increment ?></td>
                                                    <td><?php echo $row['username'] ?></td>
                                                    <td><?php echo $row['email'] ?> </td>
                                                    <td><?php echo $row['mobileno'] ?> </td>
                                                    <td>
                                                        <form action="cusdetails.php" method="post">
                                                            <input type="text" name="username" value="<?php echo $row['username'] ?>" hidden>
                                                            <button type="submit" name="vbtn" class="btn btn-success btn-rounded btn-sm">view</button>
                                                        </form>
                                                    </td>
                                                    <td>
                                                        <form action="editcust.php" method="post">
                                                            <input type="text" name="eid" value="<?php echo $row['username'] ?>" hidden>
                                                            <button type="submit" name="editbtn" class="btn btn-success btn-rounded btn-sm">edit</button>
                                                        </form>
                                                    </td>
                                                    <td>
                                                        <form action="" method="post">
                                                            <input type="text" name="did" value="<?php echo $row['username'] ?>" hidden>
                                                            <button type="submit" name="deletebtn" class="btn btn-danger btn-rounded btn-sm">delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                        <?php
                                                $increment++;
                                            }
                                        }
                                        ?>
                                    </tbody>
                                    <!--Table body-->
                                </table>
                                <!--Table-->
                            </div>

                        </div>

                    </div>
                    <!-- Table with panel -->

                </div>
            </div>
        </div>
    </section>

    <!-- Add Product Modal -->

    <div class="modal fade" id="ModalAddProduct" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog cascading-modal modal-lg" role="document">
            <!-- Content -->
            <div class="modal-content">

                <!-- Header -->
                <div class="modal-header  pink-gradient darken-3 white-text">
                    <h4 class=""><i class="fas fa-plus"></i> Add New Customer</h4>
                    <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="row mt-0">
                    
                    <div class="col-12 pl-5 pr-5">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                            <p class="red-text"><?php echo $error ?> </p>
                            
                            <div class="row">

                                
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="fname" name="fname" class="form-control" required>
                                        <label for="fname" class="">Enter First Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="lname" name="lname" class="form-control" required>
                                        <label for="lname" class="">Enter Last Name</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="username" name="username" class="form-control" required>
                                        <label for="username" class="">Enter Username</label>
                                    </div>
                                </div>

                            </div>
                          

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="number" id="mobileno" name="mobileno" class="form-control" required>
                                        <label for="mobileno">Enter Mobile NO</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="md-form mb-0">
                                        <input type="text" id="email" name="email" class="form-control" required>
                                        <label for="email">Enter email use</label>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-8">
                                    <div class="md-form">
                                        <textarea type="text" id="address" name="address" class="form-control md-textarea" required></textarea>
                                        <label for="address">Enter customer address</label>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="md-form">
                                        <textarea type="number" id="pincode" name="pincode" class="form-control md-textarea" required></textarea>
                                        <label for="pincode">Enter pincode</label>
                                    </div>
                                </div>

                            </div>

                            <div class="text-center">
                                <button class="btn pink-gradient btn-rounded mt-3" name="AddCustBtn">Add Custpmer</button>
                            </div>

                        </form>
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
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>

</body>

</html>