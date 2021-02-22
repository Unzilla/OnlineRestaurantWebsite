<?php 
include ("header.php") ;
 
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
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>My Cart</h1>
            </div>
            <div class="col-lg-8">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Serial No</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Item Price</th>

                            <th scope="col">User</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
      $total=0;
      if(isset($_SESSION['cart'])){
    
        foreach($_SESSION['cart'] as $key=>$value){
            $total=$total+$value['Price'];
            
            $sr=$key+1;
            echo "
            <tr>
            <td>$sr</td>
            <td>$value[Item_name]</td>
            <td>$value[Price]</td>
           
          
           
            
            ";
            ?>
                        <?php
                if(isset($_SESSION['user'])){
                    echo "<td>$_SESSION[user]</td></tr>";
                }else{
                    echo "<td>Anonymous</td></tr>";
                
                }
             



           
        }


         echo "
                <tr>
                    <td>
                    <form action='managecart.php' method='POST'>
                    <button class='btn btn-danger' name='checkout' type='submit'>Check out</button>
                    </td>
                    </td>
                
                </tr>
            
            
            ";
    }
      ?>


                    </tbody>
                </table>
            </div>


            <div class="col-lg-4">
                <h3>Total</h3>
                <h3><?php echo $total ?></h3>
            </div>
        </div>
    </div>
</body>

</html>