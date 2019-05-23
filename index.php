<?php
// initialize session
session_start();

include("pass.php");

// check to see if user is logging out
if(isset($_GET['out'])) {
    // destroy session
    session_unset();
    $_SESSION = array();
    unset($_SESSION['user'],$_SESSION['access']);
    session_destroy();
}

// check to see if login form has been submitted
if(isset($_POST['user'])){
    // run information through authenticator
    // DISCOMMENT THIS if(authenticate($_POST['user'],$_POST['password']))
    if(true)
    {
        // authentication passed
        $_SESSION['user']  = $_POST['user'];
        header("Location: home.php");
    } else {
        // authentication failed
        $error = 1;
    }
}
//comentaridos
// output error to user
if(isset($error)) echo "Login failed: Incorrect user name, password, or rights<br />";

?>

<html>
<head>
</head>
<title>Rubadri</title>
<style type="text/css">

    h1{
        margin: 0 auto;
    }

    #formulari{
        text-align: center;
        margin: 0 auto;
        width: 450px;
        background-color: lightblue;
        padding: 20px;
        margin-top: 13%;
        border-radius: 4px;
        box-shadow: 0px 0px 15px -8px black;
    }

    label{
        display: block;
        width: 100%;
        margin: 0 auto;
        margin: 10px 0px 0px;
    }

    input{
        width: 80%;
        margin: 0 auto;
        border: none;
        border-bottom: 4px solid #2792e5;
        height: 35px;
        text-align: center;
    }

    #submit{
        display: inline-block;
        border: none;
        margin: 20px;
        background-color: #00398e;
        color: white;
        width: 40%;
        height: 45px;
        font-size: 18px;
        cursor: pointer;
    }

    #submit:hover{
        background-color: rgba(0,0,0,0.8);
    }

</style>

<body>

<div id="formulari">
    <h1>Benvingut a Rubadri</h1>
    <form action="index.php" method="post">
    <label for="user">Usuari:</label>
    <input id="user" type="text" name="user">
    <br>
    <label for="password">Contrasenya:</label>
    <input id="password" type="password" name="password">
    <br>
    <input id="submit" type="submit" value="Iniciar Sessió">
    </form>
</div>

</body>

</html>
