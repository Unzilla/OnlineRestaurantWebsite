<?php

session_start();

   
   if( isset( $_SESSION['user'] ) ) {
      $_SESSION['user'] =$_POST['email'];
      echo "<script>
      alert('Successfully signed up');
      window.location.href='index.php';
      
      </script>";
   }else {
    $_SESSION['user'] =$_POST['email'];
    echo "<script>
     
      window.location.href='index.php';
      
      </script>";
   }


 
?>