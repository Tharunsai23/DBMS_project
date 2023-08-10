<?php
include 'connection.php';
session_start();

if (isset($_SESSION['user']) or isset($_SESSION['admin'])) {

 
  if (isset($_POST['Add_To_Cart'])) { 
   
   
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
echo $pname
echo $quantity

?>

