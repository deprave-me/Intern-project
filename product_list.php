<!DOCTYPE html>
<?php

include "navbar.php";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <style>
            body {
                background-color: #242424;
                color:white
            }
            
            #header{
                
                 text-align: center;
               
            }
            
            #card-row{
                
                margin-left:1vh;
                
            }
            
            .card-img-top{
                width:55vh;
                height:35vh
            }
            a{
                color:white;
            }
           
        </style>
        <title></title>
    </head>
    <body>
        </br>
        <h2 id="header" >Keyboards</h2>
        </br></br>
        <div  id="card-row" class="cards row row-cols-md-3" > 
            
            <a href="alice keyboard.php" >
                <div class="col " >
                    <div class="card h-100" style="border:none; width:50vh  ">
                        <img src="images/keyb4.jpg" class="card-img-top"  >
                        <div class="card-body" style="background-color:#242424">
                            <h4 class="card-namee">Alice keyboard</h4>
                            
                            <h5 class="card-price">$150</h5>
                        </div>
                    </div>
                </div>
                    </a>
            
             <a href="chron 1 keyboard.php" >
                <div class="col" >
                    <div class="card h-100" style="border:none; width:50vh  ">
                        <img src="images/keyb2.jpg" class="card-img-top" >
                        <div class="card-body" style="background-color:#242424">
                            <h4 class="card-namee">chron 1 keyboard</h4>
                            <h5 class="card-price">$90</h5>
                        </div>
                    </div>
                </div>
                    </a>
            
             <a href="gaming keyboard.php">
                <div class="col" >
                    <div class="card h-100" style="border:none; width:50vh  ">
                        <img src="images/keyb5.jpg" class="card-img-top" >
                        <div class="card-body" style="background-color:#242424">
                            <h4 class="card-namee">gaming keyboard</h4>
                            <h5 class="card-price">$70</h5>
                        </div>
                    </div>
                </div>
                    </a>
            
             <a href="P1 keyboard.php" >
                <div class="col" >
                    <div class="card h-100" style="border:none; width:50vh  ">
                        <img src="images/keyb1.jpg" class="card-img-top" >
                        <div class="card-body" style="background-color:#242424">
                            <h4 class="card-namee">P1 keyboard</h4>
                            <h5 class="card-price">$100</h5>
                        </div>
                    </div>
                </div>
                    </a>
            
             <a href="starburst keyboard.php" >
                <div class="col " >
                    <div class="card h-100" style="border:none; width:50vh  ">
                        <img src="images/keyb3.jpg" class="card-img-top" >
                        <div class="card-body" style="background-color:#242424">
                            <h4 class="card-namee">starburst keyboard</h4>
                            <h5 class="card-price">$170</h5>
                        </div>
                    </div>
                </div>
                    </a>
            
             <a href="membrane keyboard.php" >
                <div class="col" >
                    <div class="card h-100" style="border:none; width:50vh  ">
                        <img src="images/keyb6.jpg" class="card-img-top" >
                        <div class="card-body" style="background-color:#242424">
                            <h4 class="card-namee">membrane keyboard</h4>
                            <h5 class="card-price">$20</h5>
                        </div>
                    </div>
                </div>
                    </a>
               
        </div>

    </body>
</html>

