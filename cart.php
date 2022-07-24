<!DOCTYPE html>

<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
              integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <!-- import the icon -->
        <script src="https://kit.fontawesome.com/5c8303d895.js" crossorigin="anonymous"></script>
        <!--  jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
                integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
        crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <style>

            body{

                background-color:#242424;

            }

            thead{

                color:white;
                font-size:3vh

            }

            .summary{

                color:white;

            }

            tbody{

                color:white;


            }




        </style>
    </head>
    <body>
        <?php
        // put your code here



        include "navbar.php";
        ?>
        <!-- defines that the divisions values are 4px and  -->
        <div class="px-4 ">
            <!-- For demo purpose 
            py will add top and bottom padding
            -->
            <div class="container text-white py-5 text-center">
                <!--adjust size of header -->
                <h1 class="display-4">Shopping Cart</h1>



            </div>
            <!-- End 
            add padding to bottom
            -->

            <div class="pb-5">
                <!-- container required to use the grid system-->
                <div class="container">
                    <!-- row is wrapper for the columns -->
                    <div class="row">
                        <!-- col-lg will have a large break point add padding, add margin bottom-->
                        <div class="col-lg-12 p-5 mb-5" style="background-color:#303030">

                            <!-- Shopping cart table -->
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>

                                            <th scope="col" class="border-0 ">
                                                <div class="py-2 text-uppercase">Product</div>
                                            </th>
                                            <th scope="col" class="border-0 ">
                                                <div class="py-2 text-uppercase">Price</div>
                                            </th>
                                            <th scope="col" class="border-0">
                                                <div class="py-2 text-uppercase">Quantity</div>
                                            </th>
                                            <th scope="col" class="border-0 ">
                                                <div class="py-2 text-uppercase">Remove</div>
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody>


                                        <tr>
                                            <th scope="row" class="border-0">
                                                <div class="p-2">
                                                    <img src="images/keyb1.jpg" alt="" width="150" class="img-fluid rounded shadow-sm">
                                                    <div class="ml-3 d-inline-block align-middle">
                                                        <h5 class="mb-0"> <a href="P1 keyboard.php" class=" d-inline-block align-middle" style="color:white">P1 keyboard</a></h5><span class=" font-weight-normal font-italic d-block">Category:keyboard</span>
                                                    </div>
                                                </div>
                                            </th>
                                            <td class="border-0 align-middle"><strong style="font-size:2.5vh">$100.00</strong></td>
                                            <td class="border-0 align-middle"><strong>1</strong></td>
                                            <!-- make the trash can a link that will post to this page and then remove the item from cart-->



                                            <td class="border-0 align-middle" ><button  name="delete" class="text" style="color:white; background-color:#303030; border: none;" value="' . $rowz["product_id"] . '"><i class="fa fa-trash"></i></button></td>

                                        </tr>

                                        <tr>
                                            <th scope="row" class="border-0">
                                                <div class="p-2">
                                                    <img src="images/keyb2.jpg" alt="" width="150" class="img-fluid rounded shadow-sm">
                                                    <div class="ml-3 d-inline-block align-middle">
                                                        <h5 class="mb-0"> <a href="chron 1 keyboard.php" class=" d-inline-block align-middle" style="color:white">chron 1 keyboard</a></h5><span class=" font-weight-normal font-italic d-block">Category:keyboard</span>
                                                    </div>
                                                </div>
                                            </th>
                                            <td class="border-0 align-middle"><strong style="font-size:2.5vh">$90.00</strong></td>
                                            <td class="border-0 align-middle"><strong>1</strong></td>
                                            <!-- make the trash can a link that will post to this page and then remove the item from cart-->



                                            <td class="border-0 align-middle" ><button  name="delete" class="text" style="color:white; background-color:#303030; border: none;" value="' . $rowz["product_id"] . '"><i class="fa fa-trash"></i></button></td>

                                        </tr>

                                        <tr>
                                            <th scope="row" class="border-0">
                                                <div class="p-2">
                                                    <img src="images/keyb3.jpg" alt="" width="150" class="img-fluid rounded shadow-sm">
                                                    <div class="ml-3 d-inline-block align-middle">
                                                        <h5 class="mb-0"> <a href="starburst keyboard.php" class=" d-inline-block align-middle" style="color:white">starburst keyboard</a></h5><span class=" font-weight-normal font-italic d-block">Category:keyboard</span>
                                                    </div>
                                                </div>
                                            </th>
                                            <td class="border-0 align-middle"><strong style="font-size:2.5vh">$170.00</strong></td>
                                            <td class="border-0 align-middle"><strong>1</strong></td>
                                            <!-- make the trash can a link that will post to this page and then remove the item from cart-->



                                            <td class="border-0 align-middle" ><button  name="delete" class="text" style="color:white; background-color:#303030; border: none;" value="' . $rowz["product_id"] . '"><i class="fa fa-trash"></i></button></td>

                                        </tr>







                                    </tbody>
                                </table>
                            </div>
                            <!-- End -->
                        </div>

                    </div>
                  
                        <div class="row py-5 p-4 summary" style="background-color:#303030; font-size:3vh">

                            <div class="col-lg-6">
                                <!-- px padding left and right, py padding top and bottom-->
                                <div class=" rounded-pill px-4 py-3 text-uppercase font-weight-bold " >Order summary </div>
                                <div class="p-4">
                                    <p class="font-italic mb-4" style="font-size:2vh">Shipping and additional costs are calculated based on values you have entered.</p>
                                    <ul class="list-unstyled mb-4">



                                        <!-- enables flex, justify content-between will add space between the 2 elements-->
                                        <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text">Order Subtotal </strong><strong>$360.00</strong></li>


                                        <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text">Shipping and Handling</strong><strong>$10.00</strong></li>
                                        <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text">Tax</strong><strong>$0.00</strong></li>
                                        <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text">Total</strong>









                                            <h5 class="font-weight-bold" style="font-size:3vh">$370.00</h5>
                                           
                                    </ul><a  href="checkout.php" class="btn btn-dark rounded-pill py-2 btn-block "  style="font-size:3vh">Proceed to checkout</a>


                                </div>
                            </div>
                        </div>
                  
                </div>
            </div>
        </div>


    </body>
</html>
