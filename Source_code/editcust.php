<?php


include 'connection.php';
if (isset($_POST['editbtn'])) {

    $username = $_POST['eid'];

    $query = "SELECT * FROM customer WHERE username='$username'";
    $result = mysqli_query($conn, $query) or die("query fail");

    if (mysqli_num_rows($result) > 0) {
        $increment = 1;
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
    }
   
} else {
    // header('Location: products.php');
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Register</title>
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
        </style>

</head>

<body class="register-page">

    <!-- Main Navigation -->
    <header>

        <!-- Intro Section -->
        <section class="view">
            <div>
                <div class="container">

                    <!-- Grid row -->
                    <div class="row mt-5  ">

                        <div class="container">

                            <div class="col-md-12">

                                <div class="card">
                                    <div class="card-body">

                                        <h2 class="text-center mb-5 mt-4 font-weight-bold">
                                            <strong>Edit Customer Details</strong>
                                        </h2>
                                        <hr>
                                        <div class="row mt-2">
                                            <div class="col-12 pl-5 pr-5">

                                                <form action="cuscode.php" method="post">
                                                    <!--Grid row-->
                                                    <div class="row">

                                                        <!--Grid column-->
                                                        <div class="col-md-6">
                                                            <div class="md-form mb-0">
                                                                <input type="text" id="fname" name="fname" value="<?php echo $fname ?>" class="form-control" required>
                                                                <label for="pname" class="">Enter firdt Name</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="md-form mb-0">
                                                                <input type="text" id="lname" name="lname" value="<?php echo $lname ?>" class="form-control" required>
                                                                <label for="pname" class="">Enter last Name</label>
                                                            </div>
                                                        </div>

                                                        

                                                    </div>
                                                    <!--Grid row-->

                                                    <div class="row">

                                                        <div class="col-md-6">
                                                            <div class="md-form mb-0">
                                                                <input type="number" id="mobileno" name="mobileno" value="<?php echo $mobileno ?>" class="form-control" required>
                                                                <label for="mobileno">Enter Mobile No</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="md-form mb-0">
                                                                <input type="number" id="picode" name="picode" value="<?php echo $picode ?>" class="form-control" required>
                                                                <label for="picode">Pincode</label>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row">

                                                        <div class="col-md-6">
                                                            <div class="md-form mb-0">
                                                                <input type="text" id="email" name="email" value="<?php echo $email ?>" class="form-control" required>
                                                                <label for="email">Enter Email</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="md-form mb-0">
                                                                <input type="text" id="address" name="address" value="<?php echo $address ?>" class="form-control" required>
                                                                <label for="address">Address</label>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row">

<div class="col-md-6">
    <div class="md-form mb-0">
        <input type="number" id="rating" name="rating" value="<?php echo $rating ?>" class="form-control" required>
        <label for="rating">Enter rating</label>
    </div>
</div>

<div class="col-md-6">
    <div class="md-form mb-0">
        <input type="text" id="feedback" name="feedback" value="<?php echo $feedback ?>" class="form-control" required>
        <label for="feedback">Feedback</label>
    </div>
</div>

</div>


                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <div class="md-form">
                                                                <textarea type="text" id="username" name="username" class="form-control md-textarea" required><?php echo $username ?></textarea>
                                                                <label for="username">Enter username</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="text-center">
                                                        <input type="text" name="username" value="<?php echo $_POST['eid'] ?>" hidden>
                                                        <button class="btn pink-gradient btn-rounded mt-3" name="UpdateBtn">Save Changes</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </header>
    <!-- Main Navigation -->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="mdb.min.js"></script>

</body>

</html>