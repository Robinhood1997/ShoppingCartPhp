<?php
    include("mysqli_connection.php");
    session_start();
    //session_destroy();
function displayCart()
{
    include("mysqli_connection.php");
    $q="SELECT `id`, `name`, `image`, `desc`, `price`, `quantity`, `shipping` FROM `kart` WHERE quantity > 0 ";
    $query=mysqli_query($db_conx,$q);
    if (!$query) {
      printf("Error: %s\n", mysqli_error($db_conx));
      exit();

      
  }
   
  while($res=mysqli_fetch_array($query))
    {
        echo '<br/>';
        echo '<img src="images/'.$res['image'].'" width="120" height="120"/>'.'<br/>';
        echo $res['name'].'<br/>';
        echo $res['desc'].'<br/>';
        echo '$'.$res['price'].'<br/>';
        echo '<a href="cart.php?add='.$res['id'].'">Add To Cart</a><br/>';

    }
  
   }

   if(isset($_GET['add']) && !empty($_GET['add']))
   {
     $id=$_GET['add'];
     $q="SELECT `id`,`quantity` FROM `kart` WHERE id=$id ";
      $query=mysqli_query($db_conx,$q);
      if (!$query) {
      printf("Error: %s\n", mysqli_error($db_conx));
      exit();
      }
      while($quantity = $query->fetch_assoc())
      {
       if($quantity['quantity'] != @$_SESSION['cart_'.$id])
       {
          @$_SESSION['cart_'.$id]+=1;
          header('Location:index.php');
       }
       if($quantity['quantity'] == @$_SESSION['cart_'.$id])
       {
         header('Location:index.php');
       }
     }
   }

   if(isset($_GET['remove']))
   {
     $_SESSION['cart_'.$_GET['remove']]--;
     header('Location:index.php');

   }

   if(isset($_GET['delete']))
   {
     $_SESSION['cart_'.$_GET['delete']]=0;
     header('Location:index.php');

   }

   function product()
   {
    include("mysqli_connection.php");
    $net_payment=0;

     foreach($_SESSION as $name => $value)
     {
        if($value >0)
        {
          if(substr($name,0,5) =='cart_')
          {
            $id=substr($name,5,(strlen($name-5)));
            //echo $id;
            $q="SELECT `id`, `name`, `price`, `quantity`, `shipping` FROM `kart` WHERE id=$id";
            $query=mysqli_query($db_conx,$q);
            if (!$query) {
            printf("Error: %s\n", mysqli_error($db_conx));
            exit();
            }
            while($get = $query->fetch_assoc())
            {
              $total=$value * $get['price'];
              echo $get['name'].' X '.$value.' @ '.$get['price'].' =$'.$total.' <a href="cart.php?add='.$id.'">[+] </a><a href="cart.php?remove='.$id.'"> [-] </a><a href="cart.php?delete='.$id.'"> [Delete]</a><br/>';
            }
            $net_payment+=$total;

          }
        }
   }
   if($net_payment == 0)
   {
     echo "Your Cart is Empty";
   }
   else{
     echo "<br/>";
     echo "Total =$".$net_payment.'<br/><br/>paypal checkout';
   }
  }

?>