<?php
function registro($_nome,$_usuario,$_senha,$_email,$_cidade,$_estado){


    	
    
    $con=	new mysqli("localhost","root","","rrweb");
     
	$sql="insert into tb_login values(null,'$_nome','$_usuario', '$_senha','$_email','$_cidade','$_estado');";
 
    $res= mysqli_query($con, $sql);
    mysqli_close($con);
    return $res;

   
}

function login($_usuario,$_senha){

    
    $con	=	new mysqli("localhost","root","","rrweb");
    //  Recuperar senha do banco de dados e comparar com o fornecido
    //  pelo usuario
    $senhaDoBanco="";
    
    
    
    
    
	$sql	=	"SELECT senha,nome FROM tb_login WHERE usuario='$_usuario'";
    $resultado = mysqli_query($con, $sql);
    session_start();
    $_SESSION['logado']= false;
	if($reg = mysqli_fetch_array($resultado)){
        $senhaDoBanco	=$reg["senha"];
        
        if($senhaDoBanco==$_senha){
            
            $_SESSION['logado']= true;
            $_SESSION['nome']=$reg["nome"];
            
          
            mysqli_close($con);
            return $reg;
        }
	} else {
        mysqli_close($con);
        
		
        return false;
    }	
    
	mysqli_close($con);
}

function alterar(){
	$id	=	$_POST["id"];
	$nome	=	$_POST["nome"];
	$email	=	$_POST["email"];	
	$senha	=	$_POST["senha"];
	$con	=	new mysqli("localhost","root","","fwj");
	$sql	=	"update usuario set nome='$nome', senha=md5('$senha'), email='$email'  where id=$id";
	if(mysqli_query($con, $sql)){
		echo "<h3>Registro alterado com sucesso !";
	} else {
		echo "<h3>Ocorreu um erro, tente mais tarde !</h3>";
	}		
	mysqli_close($con);
}


function excluir(){
	$id	=	$_POST["id"];
	$con	=	new mysqli("localhost","root","","fwj");
	$sql	=	"delete from usuario where id=$id";
	if(mysqli_query($con, $sql)){
		echo "<h3>Registro removido com sucesso !";
	} else {
		echo "<h3>Ocorreu um erro, tente mais tarde !</h3>";
	}		
	mysqli_close($con);
}

?>
