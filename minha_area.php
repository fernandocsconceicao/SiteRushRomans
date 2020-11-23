<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Rush Romans</title>
    
</head>
<body>
    <header>
        <ul>
            <li><button class="menuButton" onclick="index()"><a href="index.php" target="blank">Rush Romans</a></button></li>
            <li><button class="menuButton" onclick="multimidia()"><a href="multimidia.php">Multimídia</a></button></li>
            <?php
            //Botao Inscrever-se aparecendo ou não
            if(isset($_SESSION['logado'])){
                if($_SESSION['logado']==false){

                    echo "<li><button class='menuButton' onclick='inscricao()'><a href='inscricao.php'>Inscreva-se </a></button></li>";
                }
            }
            else{
                echo "<li><button class='menuButton' onclick='inscricao()'><a href='inscricao.php'>Inscreva-se </a></button></li>";

            }
            //Botao Logar aparecendo ou nao
            session_start();
            if(isset($_SESSION['logado'])){
                if($_SESSION['logado']==false){

                    echo"<li><button class='menuButton' onclick='login()''><a href='login.php'>Login </a></button></li>";
                }
            }
            else{
                echo"<li><button class='menuButton' onclick='login()''><a href='login.php'>Login </a></button></li>";

            }
            //Botao de Minha Area
            if(isset($_SESSION['logado'])){
                if($_SESSION['logado']==true && isset($_SESSION['nome'])){
                    echo "<li><button class='menuButton' onclick='minhaArea()'><a href='minha_area.php'>Minha Área </a></button></li>";
                }
                
            }

            //Botao de Logout
            if(isset($_SESSION['logado'])){
                if($_SESSION['logado']==true && isset($_SESSION['nome'])){
                    echo "<li><button class='menuButton' onclick='logout()'><a href='logout.php'>Logout </a></button></li>";
                }
            }

            ?>

        </ul>
    </header>
    <main>
  <h1> Minha Area</h1>
  <br>
  <br><br>
Seu nome: 
<?php

    if ($_SESSION['logado']==true && isset($_SESSION['nome'])){
    echo $_SESSION['nome'];    
    }
?>

</main>

</body>
<!--Funcionalidade do menu-->
<script lang="javascript">
    function inscricao(){
       location.replace("inscricao.php")
        
    }
    function multimidia(){
       location.replace("multimidia.php")
        
    }
    function index(){
       location.replace("index.php")
        
    }
    function login(){
       location.replace("login.php")
        
    }
    function logout(){
       location.replace("logout.php")
        
    }
    function minhaArea(){
       location.replace("minha_area.php")
        
    }
</script>
</html>