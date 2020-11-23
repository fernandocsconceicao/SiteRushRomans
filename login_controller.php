
<?php

    
        if(isset($_POST["txtUsuario"]) && isset($_POST["txtSenha"])){
            $senha=$_POST["txtSenha"];
            $usuario=$_POST["txtUsuario"];
            
            include_once("conexao.php");
            $resposta=login($usuario,$senha);
            var_dump($resposta);
            if($_SESSION["logado"]==true){
                echo "Login Efetuado";
                $nome=$_SESSION["nome"];
                var_dump($nome);

               header("Location: index.php");

                
            }
            else{

                echo "Falha ao logar<br>";
                header("Location: login.php?credenciaisIncorretas=true");
                
                
               
            }
            
        }
        else{
            echo "campos nao vinculados";
        }
    

        
    
?>
 <?php
   if($_SESSION["logado"]=true && isset($_SESSION["nome"])){
       
     
       
    }
    else{
        header("Location: index.php");
    }
   ?>


</html>