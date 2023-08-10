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
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  if(isset($_POST['purchase']))
  {
    $query1="INSERT INTO `order_manager`(`Full_Name`, `Phone_No`, `Address`, `Pay_Mode`) VALUES ('$_POST[full_name]','$_POST[phone_no]','$_POST[address]','$_POST[pay_mode]')";
    if(mysqli_query($con,$query1))
    {
      $Order_Id=mysqli_insert_id($con);
      $query2="INSERT INTO `user_orders`(`Order_Id`, `Item_Name`, `Price`, `Quantity`) VALUES (?,?,?,?)";
      $stmt=mysqli_prepare($con,$query2);
      if($stmt)
      {
        mysqli_stmt_bind_param($stmt,"isii",$Order_Id,$Item_Name,$Price,$Quantity);
        foreach($_SESSION['cart'] as $key => $values)
        {
          $Item_Name=$values['pname'];
          $Price=$values['price'];
          $Quantity=$values['quantity'];
          mysqli_stmt_execute($stmt);
        }
        unset($_SESSION['cart']);
        echo"<script>
          alert('Order Placed');
          window.location.href='store.php';
        </script>";
      }
      else
      {
        echo"<script>
          alert('SQL Query Prepare Error');
          window.location.href='mycart.php';
        </script>";
      }
    }
    else
    {
      echo"<script>
        alert('SQL Error');
        window.location.href='mycart.php';
      </script>";
    }
  }
}


$error  = null;

if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
} else {

    if (isset($_POST['completebtn'])) {
        $ord_id = $_POST['cid'];
        $query = "DELETE FROM orders WHERE ord_id='$ord_id'";
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
                        <li class="list"><a href="#" class="waves-effect "> <i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="list"><a href="products.php" class="waves-effect"> <i class="fas fa-shopping-bag"></i> Products</a>
                        </li>
                        <li class="list"><a href="customers.php" class="waves-effect"> <i class="fas fa-shopping-bag"></i> Customers</a>
                        </li>
                        <li class="list"><a href="logout.php" class="waves-effect grey-text"> <i class="fas fa-sign-out-alt"></i> Logout</a>
                        </li>
                    </ul>




                    
                </div>



                <div class="col-md-10">

                   
                    <div class="card card-cascade narrower mt-5">

                        
                        <div class="view view-cascade gradient-card-header  pink-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-center align-items-center">


                            <h4>Single Orders</h4>


                        </div>
                        

                        <div class="px-4">

                            <div class="table-wrapper">
                                
                                <table class="table table-hover mb-0 th-sm">

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
                                                <a href="">Product Name

                                                </a>
                                            </th>

                                            
                                            <th class=" th-lg font-weight-bold">
                                                <a href="">Quantity

                                                </a>
                                            </th>
                                            <th class=" th-lg font-weight-bold">
                                                <a href="">One_day_del

                                                </a>
                                            </th>
                                            <th class=" th-lg font-weight-bold">
                                                <a href="">Address

                                                </a>
                                            </th>

                                            <th class=" th-lg font-weight-bold">
                                                <a href="">Mobile No

                                                </a>
                                            </th>
                                            <th class=" th-lg font-weight-bold">
                                                <a href="">Completed

                                                </a>
                                            </th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php
                                        $query = "SELECT * FROM orders";
                                        $result = mysqli_query($conn, $query) or die("query fail");

                                        if (mysqli_num_rows($result) > 0) {
                                            $increment = 1;
                                            
                                            while ($row = mysqli_fetch_assoc($result)) {

                                        ?>

                                                <tr>
                                                    <td><?php echo $increment ?></td>
                                                    <td><?php echo $row['username'] ?></td>
                                                    <td><?php echo $row['pname'] ?></td>
                                                    <td><?php echo $row['quantity'] ?></td>
                                                    <td><?php echo $row['one_day_del'] ?></td>
                                                    <td><?php echo $row['address'] ?></td>
                                                    <td><?php echo $row['mobileno'] ?></td>
                                                    <td>
                                                        <form action="" method="post">
                                                            <input type="text" name="cid" value="<?php echo $row['ord_id'] ?> " hidden >
                                                            <button type="submit" name="completebtn" class="btn btn-success btn-rounded btn-sm">Complete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                        <?php
                                                $increment++;
                                            }
                                        }
                                        ?>
                                    </tbody>
                                    
                                </table>
                                
                            </div>

                        </div>

                    </div>
                    
                </div>

            </div>
        </div>

    </section>
    <div class="col-md-10" >

                   
                    <div class="card card-cascade narrower mt-5">

                        
                        <div class="view view-cascade gradient-card-header  pink-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-center align-items-center">


                            <h4>Bulk Orders</h4>


                        </div>
                                     
    <div class="container mt-5" style="background-color: white;">
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
            <th scope="col">Orders</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            $query="SELECT * FROM `order_manager`";
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
                  <td>
                  
                    <table class='table text-center table'>
                      <thead style='background-color: white;'>
                        <tr >
                          <th scope='col'>Item Name</th>
                          <th scope='col'>Price</th>
                          <th scope='col'>Quantity</th>
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
                        <td>$order_fetch[Item_Name]</td>
                        <td>$order_fetch[Price]</td>
                        <td>$order_fetch[Quantity]</td>
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