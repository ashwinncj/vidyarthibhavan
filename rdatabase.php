<?php

class Rdatabase {

    function add($var, $db) {
        $query = mysqli_query($db, "SELECT * FROM bookings ORDER BY id DESC LIMIT 1");
        $row = mysqli_fetch_array($query);
        $id = $row['id'];
        $id = $id + 1;
        $bookingID = $id;
        $this->name = $var['name'];
        $this->seats = $var['seats'];
        $query_insert = mysqli_query($db, "INSERT INTO `bookings`(`id`, `bookingid`, `name`, `seats` ) VALUES ('$id','$bookingID','$this->name','$this->seats')")or die(mysql_error());
        $_SESSION['name'] = $this->name;
        $_SESSION['seats'] = $this->seats;
        $_SESSION['bookingID'] = $bookingID;
        $_SESSION['booked'] = 1;
    }

    function retrieve($db) {
        $query = mysqli_query($db, "SELECT * FROM bookings ORDER BY id ASC LIMIT 1");
        $row = mysqli_fetch_array($query);
        $firstID = $row['id'];
        $query = mysqli_query($db, "SELECT * FROM bookings ORDER BY id DESC LIMIT 1");
        $row = mysqli_fetch_array($query);
        $lastID = $row['id'];
        $j = 0;
        //echo "Stage 1";
        //echo $lastID;
        for ($i = $firstID; $i <= $lastID; $i++) {
            $j++;
            if ($j == 30) {
                break;
            }
        $query = mysqli_query($db, "SELECT * FROM bookings WHERE id=$i");
        $row = mysqli_fetch_array($query);
        echo '<h4 style="text-transform:uppercase">'.$row['name']."</h4>";
        }
    }

}

?>