<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">    <link rel="stylesheet" href="style.css">
</head>

<body>

<?php 
        
        
        
        include ('header.php');
        ?>

    <section>
        <div class="container-fluid  mt-5 ">
            <h1 class="display-4 text-center text-danger">Contact Us</h1>
            <div class=" row mb-5 ">
                <div class="col-sm-12  d-flex justify-content-center w-100">
                    <form>
                        <div class="form-group ">
                            <label for="name ">Name</label>
                            <input type="text " class="form-control " id="name ">

                        </div>

                        <div class="form-group ">
                            <label for="phone ">Phone</label>
                            <input type="number " class="form-control " id="phone ">

                        </div>
                        <div class="form-group ">
                            <label for="exampleInputEmail1 ">Email address</label>
                            <input type="email " class="form-control " id="exampleInputEmail1 " aria-describedby="emailHelp ">
                            <small id="emailHelp " class="form-text text-muted ">We'll never share your email with anyone
                    else.</small>
                        </div>

                        <div class="form-group ">
                            <label for="exampleFormControlTextarea1 ">Any query or question</label>
                            <textarea class="form-control " id="exampleFormControlTextarea1 " rows="3 "></textarea>
                        </div><br><br>
                        <button type="submit " class="btn btn-danger ">Submit</button>
                    </form>
                </div>
            </div>
            <div class="row mt-5 inquiry pt-5">
                <h1 class="display-4 text-center text-white">For inquiries</h1>

                <div class=" col-sm-12 text-center ">

                    <p class="text-white ">Our customer service team is available to entertain queries 24/7</p>
                    <h6 class=" text-white display-6 ">Call Us At:</h6>
                    <p class=" text-white fw-bold ">
                        +64 (6) 378 8924</p>
                    <p class="text-white fw-bold ">+92-321-7040999</p>
                    <h6 class="text-white display-6 ">Mail Us At:</h6>
                    <p class=" text-white fw-bold ">customercare@burgerinc.com</p>


                </div>
            </div>


        </div>
    </section>



    <div class=" text-white text-center bg-danger container-fluid ">
        <div class="container ">
            <div class="row mx-auto ">
                <div class="col ">
                    <img src="images/logo5-removebg-preview.png " alt=" ">
                </div>
            </div>
            <div class="row mx-auto ">
                <div class="col-md-4 col-sm-6 ">
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
                <div class="row ">
                    <div class="col-sm-12 mt-2 ">
                        <p>Copyright © 17SW29 Unzilla</p>
                    </div>
                </div>
            </div>



        </div>






        <script src=" https://code.jquery.com/jquery-3.4.1.slim.min.js " integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n " crossorigin="anonymous "></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js " integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo " crossorigin="anonymous "></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js " integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6 " crossorigin="anonymous "></script>
</body>

</html>