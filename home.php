<?php
// initialize session
session_start();


if(!isset($_SESSION['user'])) {
    // user is not logged in, do something like redirect to login.php
    header("Location: index.php");
    die();
}

/* if($_SESSION['access'] != 2) {
    // another example...
    // user is logged in but not a manager, let's stop him
    die("Access Denied");
}*/

/* FUNCTIONS */
$user = explode(",",$_SESSION['user']);


?>

<p>Hola <?php echo substr($user[0],3)?>, benvingut</p>


<?php echo $user[1];?>
<?php echo $user[2];?>