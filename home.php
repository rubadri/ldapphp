<?php
// initialize session
session_start();
session_destroy();


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
//holaquease

?>

<html>
<head>
</head>
<title>Rubadri</title>

<script>

</script>

<style type="text/css">

    body{
        margin: 0px;
        background: #2980B9;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to top, #FFFFFF, #6DD5FA, #2980B9);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to top, #FFFFFF, #6DD5FA, #2980B9); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background-repeat: no-repeat;
        background-size: cover;
        height: 100%;

    }

    .title{
        margin: 0 auto;
        width: 100%;
        border-bottom: 1px solid black;
        text-align: center;
        padding: 5px 0px;
        background-color: lightblue;
    }

    .data{
        width: 40%;
        background-color: white;
        border-radius: 6px;
        padding: 10px;
        border: 4px double #2980B9;
        padding-bottom: 40px;
        margin: 9% auto 0px;
    }

    h3{
        text-align: center;
        margin: 10px 0;
    }

    .row{
        border-bottom: 1px solid darkgray;
        margin: 0px;
        padding: 0px;
    }

    .row:last-child{
        border: none;
    }

    .row > p {
        width: 50%;
        text-align: center;
    }

    .actions{
        position: relative;
        top: -13px;
        text-align: center;
        margin: 0 auto;
        width: 45%;
    }

    a{
        margin: 0 5%;
        background-color: #2980B9;
        border-radius: 50px;
        width: 30%;
        border: 1px solid midnightblue;
        padding: 10px;
        cursor: pointer;
        font-weight: bold;
        text-decoration: none;
        color: unset;
    }

    a:hover{
        background-color: lightblue;

    }

</style>

<h1 class="title">Hola <?php echo substr($user[0],3)?>, benvingut</h1>

<div class="data">
    <h3>Dades del usuari LDAP</h3>
    <div class="row">
        <p>User:</p>
        <p><?php echo $user[1];?></p>
    </div>
    <div class="row">
        <p>Cn:</p>
        <?php echo $user[2];?>
    </div>
    <div class="row">
        <p>Ou:</p>
        <?php echo $user[3];?>
    </div>
    <div class="row">
        <p>Dc:</p>
        <?php echo $user[4];?>
    </div>
</div>
<div class="actions">
    <a href="index.php">Sortir</a>
    <a href="canviar_pass.php">Cambiar contraseña</a>
</div>

</html>


