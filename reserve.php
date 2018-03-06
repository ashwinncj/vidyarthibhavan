<?php
include('session.php');
include('radelbody.php');
function checkbooking() {
    if (isset($_SESSION['booked'])) {
        $name = $_SESSION['name'];unset($_SESSION['name']);
        $seats = $_SESSION['seats'];unset($_SESSION['seats']);
        $bookingID = $_SESSION['bookingID'];unset($_SESSION['bookingID']);
        $_SESSION['booked'] = 1;unset($_SESSION['booked']);
        echo '<h2 style="line-height:10px;">Seats booked !</h2><h3>No.'.$bookingID.'<br></h3><h4><span style="text-transform:uppercase;">'.$name.'</span>  '.$seats.' Seat(s)</h4>';
    }
}
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
        <style>
            @media(max-width:500px)
            {
                .radel-input
                {
                    width: 80%;
                    font-size: 20px;
                }
            }

            @media(min-width:501px)
            {
                .radel-input
                {
                    width: 300px;
                    font-size: 20px;
                }
            }
        </style>

    </head>
    <body>
        <div class="container">
            <div class="text-center"><?php checkbooking(); ?></div>
            <div class="text-center">
                <h2>RESERVATION BOOKING</h2>
                <form name="reserve" action="reserveseats.php" method="get">
                    <input required class="text-center radel-input" type="text" placeholder="N  A  M  E" style="text-transform: uppercase" name="name"><br><br>
                    <input required class="text-center radel-input" type="number" placeholder="S  E  A  T  S" style="" name="seats"><br><br>
                    <input class="text-center btn" type="submit" name="submit" value="BOOK">
                </form>

            </div>
        </div>
    </body>
</html>
