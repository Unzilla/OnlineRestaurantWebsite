<?php
include ('header.php'); 
 ?>

<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>
 <center>
 <?php 
        
        
        
        include ('header.php');
        ?>

 <div class="container m-5 p-5">
 <form action="loginForm.php" method="POST">
 <h1 class="display-4">Sign Up</h1><hr>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>

  
  <button type="submit" class="btn btn-danger mt-3">Sign Up</button>
</form>
</div>
</center>
  
 </body>
 </html>