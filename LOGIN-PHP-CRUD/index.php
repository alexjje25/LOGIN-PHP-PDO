<?php
require_once'CLASSES/usuarios.php';
$u = new Usuario;
?>

<html lang="pt-br">
<head>
   <meta charset="utf-8">
   <title> Projeto </title>
   <link rel="shortcut icon" href="Tommy_Hilfiger_logo.gif">

   <link rel="stylesheet" href="CSS/estilo.css">
</head>
<body>

<div id="corpo-form">
<h1>LOGAR</h1>
<form method="POST" >

   <input type="email" placeholder="Usuario" name="email">
   <input type="password"  placeholder="Senha" name="senha">
   <input type="submit"  value="ACESSAR">
   
   <a href="cadastrar.php">ainda nao é escrito <strong>cadastre-se </strong></a>

</form>
</div>


<?php
if (isset($_POST['email']))
//verificar se clicou no botao
 {
	 
	$email = addslashes($_POST['email']);
	$senha = addslashes($_POST['senha']);

	//verificar se esta preenchido
	if( !empty($email) && !empty($senha))
	{
		
	  $u->conectar("projeto_login","localhost","root","");
    if($u->msgErro == "")
	{
	  if($u-> logar($email,$senha))
	  {
		  header('Location:menu_inicial.php');
	  }
	  else
	  {
		?>
         <div class="msg-erro">		
		Email e/ou senha  estao incorreto!
		</div>
		<?php
	  }
	
	}
	else
	{
		
		echo "Erro: " .$u-> msgErro;
	}
   }else
	{
		?>
         <div class="msg-erro">		
         Preencha todos os campos!		
         </div>
		<?php
		
	}
	
 }
 

?>



</body>
</html>