<?php 
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST")
{
  if(isset($_POST['Add_To_Cart']))
  {
    if(isset($_SESSION['cart']))
    {
      $myitems=array_column($_SESSION['cart'],'pname');
      if(in_array($_POST['pname'],$myitems))
      {
        echo"<script>
          alert('Item Already Added');
          window.location.href='store.php';
        </script>";
      }
      else
      {
        $count=count($_SESSION['cart']);
        $_SESSION['cart'][$count]=array('pname'=>$_POST['pname'],'price'=>$_POST['price'],'quantity'=>1);
        echo"<script>
          alert('Item Added');
          window.location.href='mycart.php';
        </script>";
      }
    }
    else
    {
      $_SESSION['cart'][0]=array('pname'=>$_POST['pname'],'price'=>$_POST['price'],'quantity'=>1);
      echo"<script>
        alert('Item Added');
        window.location.href='store.php';
      </script>";
    }
  }
  if(isset($_POST['Remove_Item']))
  {
    foreach($_SESSION['cart'] as $key => $value)
    {
      if($value['pname']==$_POST['pname'])
      {
        unset($_SESSION['cart'][$key]);
        $_SESSION['cart']=array_values($_SESSION['cart']);
        echo"<script>
          alert('Item Removed');
          window.location.href='mycart.php';
        </script>";
      }
    }
    
  }
  if(isset($_POST['quantity']))
  {
    foreach($_SESSION['cart'] as $key => $value)
    {
      if($value['pname']==$_POST['pname'])
      {
        $_SESSION['cart'][$key]['quantity']=$_POST['quantity'];
        echo"<script>
          window.location.href='mycart.php';
        </script>";
      }
    }
  }
}

?>