   <?php    
        if(isset($_POST["txtUsuario"]) && isset($_POST["txtSenha"])){
            
            
            $nome=$_POST["txtNome"];
            $senha=$_POST["txtSenha"];
            $usuario=$_POST["txtUsuario"];
            $email=$_POST["txtEmail"];
            $cidade=$_POST["txtCidade"];
            $estado=$_POST["txtEstado"];
            
            include_once("conexao.php");
          
            registro($nome,$usuario,$senha,$email,$cidade,$estado);
  
            header("index.php");
        }
?>
    
