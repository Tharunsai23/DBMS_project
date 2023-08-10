<?php
include 'connection.php';

if (isset($_POST['UpdateBtn'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $mobileno = $_POST['mobileno'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $picode = $_POST['picode'];
    $rating = $_POST['rating'];
    $feedback= $_POST['feedback'];
    $query = "UPDATE customer SET fname = '$fname',lname = '$lname', username = '$username' , mobileno = '$mobileno' ,   email='$email',  address='$address', picode='$picode', rating='$rating', feedback='$feedback' WHERE username = '$username' ";
    $result =  mysqli_query($conn, $query);

    if ($result) {
        header('Location: customers.php');
    } else {

        echo mysqli_error($conn);
    }
} else {
    header('Location: customers.php');
}
