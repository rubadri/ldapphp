<?php

//comentaritresS
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

    #submit.back{
        background-color: rgba(0,0,0,0.6);
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
    <h1>Cambiar contrasenya</h1>
    <form action="index.php" method="post">
        <label for="new">Contrasenya nova:</label>
        <input id="new" type="password" name="new">
        <br>
        <label for="repeat">Torna a introduir la contrasenya</label>
        <input id="repeat" type="password" name="repeat">
        <br>
        <input class="back" id="submit" type="submit" value="Tornar">
        <input id="submit" type="submit" value="Cambiar">
    </form>
</div>

</body>

</html>
