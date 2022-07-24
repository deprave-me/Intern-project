<!DOCTYPE html>

<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
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

        <style>
            body {
                background-color: #242424;
            }




            #quantity{

                width:10vh;
                margin-left:5vh;
                heigth:10vh
            }



        </style>

    </head>
    <body>
        <?php
        include "navbar.php";
        ?>
        <div class="container-fluid" style=" display: flex; flex-wrap: wrap; ">
            <div class="flex-item-left" style="margin-top:12px; flex:35%">  
                </br></br>

                <img class="product-image " src="./images/keyb4.jpg" alt="Card image" style=" height: 40vh;
                     width: 65vh; align-self:left">
                </br></br>

            </div>
            <div class="flex-item-right" style="flex:65%; ">
                </br></br>
                <div class="row">
                    <h2 id="name" style="margin-left:7vh; color:white;">alice keyboard</h2>  

                </div>
                <hr style="background-color:white; opacity: 0.5; width:50%; margin-left:5vh">


                <h3 id="name" style="margin-left:5vh; color:white; margin-top:1vh; ">$150</h3>
                </br>    
                <h3 id="name" style="margin-left:5vh; color:white;">A new layout type that has improved ergonomics for improved typing.</h3>
                </br>
                <h4 id="quantity" style="margin-left:5vh; color:white;font-size:20px">quantity:&nbsp;100</h4>
                <form action="" method="POST">



                    <div class="row" style="margin-left:0.25vh">
                        <input type="number" id="quantity" name="quantity" max="99" min="1" value="1" style="width:10vh; margin-left:5vh;heigth:5vh ;background-color:#C4C4C4;">
                        <input type="submit" name="add_to_cart" 
                               style="margin-left:5vh; margin-top:5px; width:25vh; heigth:10vh; background-color:black; border-color:black" 
                               class="btn btn-success form-control add_to_cart btn-lg " value="Add to Cart" onclick="myFunction()"/>
                    </div>



    </form>

            </div>
        </div>





</div>
</div>
</form>







</body>


</html>
