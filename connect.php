<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'radelvidyarthibhavan');
define('DB_USER', 'ashwin');
define('DB_PASSWORD', 'ashwin');
$con = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db = mysql_select_db(DB_NAME, $con) or die("Failed to connect to MySQL: " . mysql_error());
/* $ID = $_POST['username']; 
  $Password = $_POST['password']; */

function SignIn() {
    session_set_cookie_params(0);
    session_start();

    if (!empty($_POST['username'])) {
        $query = mysql_query("SELECT * FROM usertable where username = '$_POST[username]' AND password = '$_POST[password]'") or die(mysql_error());
        $row = mysql_fetch_array($query);
        if (!empty($row['username']) AND ! empty($row['password'])) {
            $_SESSION['username'] = $row['username'];
            echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE...";
            header("location:index.php");
        } else {
            echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...";
            $_SESSION['display'] = 6;
            header('Location:login.php');
        }
    }
}

if (isset($_POST['submit'])) {

    SignIn();
}
?>

