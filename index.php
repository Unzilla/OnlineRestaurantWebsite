<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">    <title>Document</title>
</head>

<body>

    <div>
        <?php 
        
        
        
        include ('header.php');
        ?>





        <div id="carouselExampleCaptions" class="carousel slide " data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/pic1.jpg" class="d-block w-100 img-fluid bg-transparent " alt="...">
                    <div class="carousel-caption d-none d-md-block   ">

                        <h1 class="display-1 h-100 text-lg-end ">Taste Of Togetherness</h1>
                        <p class="text-end">Family Festival</p>

                    </div>
                </div>
                <div class=" carousel-item ">
                    <img src="images/pic2.jpg " class="d-block w-100 img-fluid  " alt="... ">
                    <div class="carousel-caption d-none d-md-block ">
                        <h5>Second slide label</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="carousel-item ">
                    <img src="images/pic1.jpg" class="d-block w-100 " alt="... ">
                    <div class="carousel-caption d-none d-md-block ">
                        <h5>Taste Of Togetherness</h5>
                        <p>.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev " href="#carouselExampleCaptions " role="button " data-slide="prev ">
                <span class="carousel-control-prev-icon " aria-hidden="true "></span>
                <span class="sr-only ">Previous</span>
            </a>
            <a class="carousel-control-next " href="#carouselExampleCaptions " role="button " data-slide="next ">
                <span class="carousel-control-next-icon " aria-hidden="true "></span>
                <span class="sr-only ">Next</span>
            </a>
        </div>



        <h1 class="text-danger text-center  pt-5">Deals</h1>
        <div class="container pt-5">
            <div class="row">
                <div class="col">
                    <form action="managecart.php" method="POST">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="images/menu1.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Family Festival 1</h5>
                            <p class="card-text">Price:Rs 1000

                            </p>
                            <button class="btn btn-danger" type="submit" name="add">Add to Cart</button>
                            <input type="hidden" name="item_name" value="family Festival 1">
                            <input type="hidden" name="item_price" value="1000">
                        
                    </div>
                </div>
</form>
</div>
                <div class="col">
                    <form action="managecart.php" method="POST">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="images/menu3.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Zinger</h5>
                            <p class="card-text">Price:Rs 500</p>
                            <button class="btn btn-danger" type="submit" name="add">Add to Cart</button>
                            <input type="hidden" name="item_name" value="Zinger">
                            <input type="hidden" name="item_price" value="500">
                        </div>
                    </div>
</form>
                </div>
                <div class="col">
                    <form action="managecart.php" method="POST">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="images/menu2.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"> Stacky Zinger </h5>
                            <p class="card-text">Price:Rs 300</p>
                            <button class="btn btn-danger" type="submit" name="add">Add to Cart</button>
                            <input type="hidden" name="item_name" value="Stacky Zinger">
                            <input type="hidden" name="item_price" value="300">
                        </div>
                    </div>
</form>
                </div>
            </div>
        </div>



        <div class="container pt-5 mb-5">
            <div class="card  bg-danger">
                <img class=" loc card-img-top img-fluid" src="images/loc1.jpg" alt="Card image cap">
                <div class=" card-body text-center ">
                    <h5 class="card-title text-white ">Find your local branch</h5>
                    <p class="card-text  text-white ">Get one step closer to a great Wimpy meal below!.</p>
                    <button class="btn btn-outline-warning text-white ">Enter town/postcode</button>
                </div>
            </div>

        </div>

        <div class="container-fluid menu text-white ">
            <h1 class="text-center pt-5">Menu</h1>
            <div class="row">

                <div class="col">
                    <img src="images/menu-burger.jpg" alt="">

                </div>
                <div class="col">

                    <p> From our famous hamburgers to breakfast muffins and thick shakes, check out our delicious menu! Due to the new tiering system some restaurants may be operating a reduced menu, or have restrictions in place. Please check with your local
                        Wimpy to avoid disappointment.</p>
                    <button class="btn btn-danger">See our menu</button>
                </div>
            </div>

        </div>


        <div class=" text-white text-center bg-danger container-fluid">
            <div class="container-fluid">
                <div class="row mx-auto">
                    <div class="col">
                        <img src="images/logo5-removebg-preview.png" alt="">
                    </div>
                </div>
                <div class="row mx-auto ">
                    <div class="col-md-4 col-sm-6">
                        <h5 class="pt-5 fw-bold">Information</h5>
                        <ul class="list-unstyled ">
                            <li class="text-white">About Us </li>
                            <li class="text-white">Mitao Bhook</li>
                            <li class="text-white">Privacy Policy</li>

                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <h5 class="pt-5 fw-bold">Food</h4>
                            <ul class="list-unstyled ">
                                <li class="text-white">Our Secret Recipe</li>

                            </ul>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <h5 class="pt-5 fw-bold">Get in touch</h4>
                            <ul class="list-unstyled ">
                                <li class="text-white">Contact </li>
                                <li class="text-white">Join Us</li>

                            </ul>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 mt-2">
                            <p>Copyright © 17SW29 Unzilla</p>
                        </div>
                    </div>
                </div>



            </div>



            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>

</html>