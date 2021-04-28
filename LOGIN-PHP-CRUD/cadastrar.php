<?php
require_once'CLASSES/usuarios.php';
$u = new Usuario;
?>


<html lang="pt-br">
<head>
   <meta charset="utf-8">
   <title> Projeto </title>
   <link rel="stylesheet" href="CSS/estilo.css">
</head>
<body>

<div id="corpo-form">
<h1> Cadastrar </h1> 
<form method="POST" >
   <input type="text" name="nome" placeholder="Nome Completo" maxlength="30">
   <input type="text"  name="telefone"placeholder="Telefone" maxlength="30">
   <input type="text" name="email" placeholder="Usuario" maxlength="40">
   <input type="password" name="senha" placeholder="Senha" maxlength="15">
   <input type="password" name="confSenha" placeholder="Confirmar Senha" maxlength="15">
   <input type="submit" value="Cadastrar">
   
</form>
</div>
<?php
if (isset($_POST['nome']))
//verificar se clicou no botao
{
	$nome = addslashes($_POST['nome']);
	$telefone = addslashes($_POST['telefone']);
	$email = addslashes($_POST['email']);
	$senha = addslashes($_POST['senha']);
	$confirmarSenha = addslashes($_POST['confSenha']);
	//verificar se esta preenchido
	if(!empty ($nome) && !empty($telefone) && !empty($email) && !empty(
	$senha) && !empty($confirmarSenha))
	{
		$u->conectar("projeto_login","localhost","root","");
		if($u->msgErro == "")// se esta td ok
		{
			if($senha == $confirmarSenha)
			{
				if($u->cadastrar($nome,$telefone,$email,$senha))
				{
					 header('Location:index.php');
				}
				else
				{
					
				    ?>
					<div id="msg-erro">
				     Email ja cadastado!
					</div>
					<?php
					
				}
			}
			else
			{
				?>
					<div id="msg-erro">
				     senha e confirma senha nao correspondem";
					</div>
					<?php
				
			}
		
		}
		else
		{
			?>
			<div class="msg-erro">
			<?php echo "Erro:" .$u->msgErro; ?>
			</div>
			<?php
		}
	}else
	{
		echo "Prencha todos os campos";
	}
	
	
	
	
	
}


?>

</body>
</html>