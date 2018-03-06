<?php
session_start();
$msg = "";
if (isset($_SESSION['display'])) {
    $display = $_SESSION['display'];
    unset($_SESSION['display']);
    if ($display == 6) {
        $msg = "<h4>Invalid username or password. Please try again.</h4>";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            RADEL Login
        </title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootsrap.min.css">
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            .footer {
            }
            @media(max-width:600px){
                .radel-footer{   
                    position:relative;
                    top: 300px;
                    color: white
                }}
            @media(min-width:600px){
                .radel-footer{   
                    position: absolute;
                    right: 0;
                    bottom: 0;
                    left: 0;
                    padding: 1rem;
                    color:white;
                    text-align: center;
                    height: 40px;
                }}
            h4
            {
                color: white;
                font-family:century gothic;
            }
            .login{

                height:30px;
                border-radius:3px;
                border:1px solid;
                text-align: center;
            }

        </style>
    </head>
    <body style="background-image: url('img/bck.jpg')"> 
        <div class="container">
            <div class="row text-center" style="position: relative;top:150px;padding: 0px">

                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <?php echo $msg; ?>
                    <form action="connect.php" method="post"><br>
                        <input type="text" name="username" required maxlength="12" minlength="6" placeholder="USERNAME" style="width: 250px;height: 40px;text-align: center;font-family: century gothic;font-size:15px">          
                        <br><br>
                        <input type="password" name="password" maxlength="12" minlength="6" required placeholder="PASSWORD" style="width: 250px;height: 40px;text-align: center;font-family: century gothic;font-size:15px">
                        <br>
                        <br>
                        <input class="login btn btn-default" type="submit" name="submit" value="LOGIN" style="width: 150px;height: 30px;border-color: white">
                    </form>
                </div>
            </div>

            <div class="radel-footer col-lg-12 text-center">
                Copyright &copy; RADEL Corp 2016
            </div>
        </div>
    </body>
</html>
