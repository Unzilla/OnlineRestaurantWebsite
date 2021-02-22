<?php
session_start();


if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['add'])){
        if(isset($_SESSION['cart'])){
            $myitems=array_column($_SESSION['cart'],'Item_name');
            if(in_array($_POST['item_name'],$myitems)){
                echo "<script>
                alert('item already added');
                window.location.href='index.php';
                
                </script>";
               
            }
            else{
            $count=count($_SESSION['cart']);
            $_SESSION['cart'][$count]=array('Item_name'=>$_POST['item_name'],'Price'=>$_POST['item_price'],'Quantity'=>1);
           
            echo "<script>
            alert('item  added');
            window.location.href='index.php';
            
            
            </script>";
            }
        }
        else{
            $_SESSION['cart'][0]=array('Item_name'=>$_POST['item_name'],'Price'=>$_POST['item_price'],'Quantity'=>1);
            
            echo "<script>
            alert('item  added'); 
            window.location.href='index.php';
           
            
            </script>";
            
        }
    }
}



if(isset($_POST['checkout'])){
    session_destroy();
    echo "<script>
    
    window.location.href='index.php';
   
    
    </script>";
    

}


?>