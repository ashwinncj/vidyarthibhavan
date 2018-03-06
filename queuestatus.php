<?php
include('session.php');
include('rdatabase.php');
$x=new Rdatabase();
$x->retrieve($db);

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Vidyarthi Bhavan</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>
    <body>
        <div class="container">
            <div class="">
                <div class="row">
                    <div class="col-lg-4">
                        <h2>First person</h2>
                        <h2>Second person</h2>
                        <h2>Third person</h2>
                        <h2>Fourth person</h2>
                        <h3>Fifth person</h3>
                        <h3>Sixth Person</h3>
                        <h3>Seventh Person</h3>
                        <h3>Eighth Person</h3>
                        <h3>Ninth Person</h3>
                        <h3>Tenth Person</h3>
                        <h3>Eleventh Person</h3>
                        <h3>Twelfth Person</h3>
                        <h3>Thirteenth Person</h3>
                        <h3>Fourteenth Person</h3>
                        <h3>Fifteenth Person</h3>                        
                    </div>
                    <div class="col-lg-4">
                        <h4>Second row 1</h4>
                        <h4>Second row 2</h4>
                        <h4>Second row 3</h4>
                        <h4>Second row 4</h4>
                        <h4>Second row 5</h4>
                        <h4>Second row 6</h4>
                    </div>
                    <div class="col-lg-4">
                        <h4>Third row 1</h4>
                        <h4>Third row 2</h4>
                        <h4>Third row 3</h4>
                        <h4>Third row 4</h4>
                        <h4>Third row 5</h4>
                        <h4>Third row 6</h4>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
