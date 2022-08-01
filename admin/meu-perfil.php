<?php 
use MicroBlog\Usuario;
use MicroBlog\ControledeAcesso;

require_once "../inc/cabecalho-admin.php";

$sessao = new ControledeAcesso;
$sessao->verificaAcesso();

$usuario = new Usuario;
$usuario->setId($_SESSION['id']);
$dados = $usuario->listarUm();


if (isset($_POST['atualizar'])) {
	$usuario->setNome($_POST['nome']);
	$_SESSION['nome'] = $usuario->getNome();
	
	$usuario->setEmail($_POST['email']);
	$usuario->setTipo($_SESSION['tipo']);

	if (empty ($_POST['senha'])) {
		$usuario->setSenha($dados['senha']);
		
	} else {
		$usuario->setSenha($usuario->verificaSenha($_POST['senha'], $dados['senha']));
	}
	$usuario->atualizar();
	header("location:index.php?perfil_atualizado");
}
?>
<div class="row">
	<article class="col-12 bg-white rounded shadow my-1 py-4">
		
		<h2 class="text-center">
		Atualizar meus dados
		</h2>
				
		<form class="mx-auto w-75" action="" method="post" id="form-atualizar" name="form-atualizar">

			<div class="mb-3">
				<label class="form-label" for="nome">Nome:</label>
				<input class="form-control" type="text" id="nome" value="<?= $dados['nome']?>" name="nome" required>
			</div>

			<div class="mb-3">
				<label class="form-label" for="email">E-mail:</label>
				<input class="form-control" type="email" id="email" value="<?= $dados['email']?>" name="email" required>
			</div>

			<div class="mb-3">
				<label class="form-label" for="senha">Senha:</label>
				<input class="form-control" type="password" id="senha" name="senha" placeholder="Preencha apenas se for alterar">
			</div>

			<button class="btn btn-primary" name="atualizar"><i class="bi bi-arrow-clockwise"></i> Atualizar</button>
		</form>
		
	</article>
</div>


<?php 
require_once "../inc/rodape-admin.php";
?>

