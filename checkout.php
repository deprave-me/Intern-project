<!DOCTYPE html>
<html>
    <head>
        <title>Shipping Page</title>  
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.6.0.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/5c8303d895.js" crossorigin="anonymous"></script>
    </head>
    <body>      


        <?php
        include "navbar.php";

        // check if address and contact fields in database are filled in (yes = skip past this page, no =  need to fill up all the fields)
        ?>


        <style>

            body {
                background-color: #242424;
            }

            .title {
                color: white;
                text-align: left;
                margin-top: 3% ;
                border-color: white;
            }

            hr {
                border-color: white;
                border-style: solid;
            }

            .container {
                font-size: 30px;
                text-align: center;
            }

            .advertisement {
                background-color: yellow;
                font-size: 20pt;
            }

            .h4{

                color:white;

            }
            form{

                color:white
            }



            .col-50 {
                -ms-flex: 50%; /* IE10 */
                flex: 50%;
            }
        </style>



        <div class="title">
            <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Shipping</h3><hr>
        </div>

        <br/>	

        <div class="advertisement"> 



        </div>

        <br/>

        <div class="container">

            <form method="POST" action="checkout.php">







                <div class="row">
                    <div class="col-50">
                        <h3>shipping</h3>
                        <input type="text" name="name" placeholder="&nbsp;Name" size="30" style="font-size:20pt;" required/><br/><br/>
                        <input type="text" name="postal" placeholder="&nbsp;Postal Code" size="30" style="font-size:20pt;" required pattern="[0-9]{6}"/><br/><br/>
                        <input type="tel" name="contact" placeholder="&nbsp;Contact" size="30" style="font-size:20pt;" required pattern="[0-9]{10}|[0-9]{8}"/><br/><br/>

                    </div>


                    <div class="col-50">
                        <h3>payment</h3>
                        <input type="text" name="cardname" placeholder="&nbsp;Name on card" size="30" style="font-size:20pt;" required/><br/><br/>
                        <input type="int" name="cardNo" placeholder="&nbsp;credit card number" size="30" style="font-size:20pt;" required pattern="[0-9]{16}"/><br/><br/>
                        <input type="text" name="expDate" placeholder="&nbsp;expDate" size="30" style="font-size:20pt;" required"/><br/><br/>

                    </div>
                </div>

                <input type="hidden" name="token" value="h" />
                <input type="submit" name="checkout" class="confirm" style="font-size:5vh;" value="Continue to payment" onclick="check_form()"/> 

            </form>
            <?php
            if (isset($_POST["checkout"])) {

                $name = $_POST["name"];
                $postal = $_POST["postal"];
                $contact = $_POST["contact"];
                ?>
                <script>
                    function check_form() {
                        alert("Name: <?php echo $name; ?> \n Postal: <?php echo $postal; ?> \n contact: <?php echo $contact; ?>")
                    }
                </script>
                <?php
            }
            ?>
        </div>

        <br/>

    </body>
</html>
