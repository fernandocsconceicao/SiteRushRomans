<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Rush Romans</title>
    
</head>
<body>
<?php
  // Se estiver logado, redireciona para index
  if(isset($_SESSION['logado'])){
    if($_SESSION['logado']==true){
        header("Location: index.php");

         }
        }


  ?>
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
    <form action="login_controller.php" method="POST">
            Usuário:<input type="text" id="txtUsuario" name="txtUsuario" size="50"placeholder="digite seu usuario" required /><br/>
            Senha:<input type="password" id="txtSenha" name="txtSenha" size="60" placeholder="digite sua senha" required /><br/>
            
           
            
            <button type="submit" >Login</button><br/>
            Nao tem uma conta? Então <a href="inscricao.php"> REGISTRE-SE</a>
        </form> 
    </main>
</body>
<script lang="javascript">
    function enviar(){
      
        if(txtNome.value=="" || txtEmail.value==""  || txtEstado.value=="" || txtCidade.value==""){
            alert("Dados Invalidos");
           
            return false;
        }
        else{
         
            location.replace("index.html")
        }
        
    }

</script>
<!--Funcionalidade do menu-->
<script lang="javascript">
    function inscricao(){
       location.replace("inscricao.php");
        
    }
    function multimidia(){
       location.replace("multimidia.php");
        
    }
    function index(){
       location.replace("index.php");
        
    }
</script>
<?php
    function registrar(){
        if(isset($_POST["usuario"]) && isset($_POST["senha"])){

            $senha=$_POST["senha"];
            $usuario=$_POST["usuario"];
            
            include_once("conexao.php");
            $res=registro($senha,$usuario,);
            if($res){
                echo "Registrado com sucesso";
                
            }
            else{

                echo "Falha ao registrar";
                var_dump($res);
            }
            
        }
    }

        
    
?>


</html>