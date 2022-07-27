<?php

use MicroBlog\Usuario;

require_once "inc/cabecalho.php";

if (isset($_GET['acesso_proibido'])) {
	$feedback = "Você deve logar primeiro!";
} elseif (isset($_GET['campos_obrigatorios'])) {
	$feedback = "Você deve digitar login e senha!";
} elseif (isset($_GET['nao_encontrado'])) {
	$feedback = "Usuário não encontrado";
}



?>


<div class="row">
    <div class="bg-white rounded shadow col-12 my-1 py-4">
        <h2 class="text-center fw-light">Acesso à área administrativa</h2>

        <form action="" method="post" id="form-login" name="form-login" class="mx-auto w-50">

                <?php if(isset($feedback)){?>
				<p class="my-2 alert alert-warning text-center">
					<?=$feedback?>
				</p>
                <?php } ?>

				<div class="mb-3">
					<label for="email" class="form-label">E-mail:</label>
					<input class="form-control" type="email" id="email" name="email">
				</div>
				<div class="mb-3">
					<label for="senha" class="form-label">Senha:</label>
					<input class="form-control" type="password" id="senha" name="senha">
				</div>

				<button class="btn btn-primary btn-lg" name="entrar" type="submit">Entrar</button>

			</form>
			<?php 
				if (isset($_POST['entrar'])) {
					if (empty($_POST['email'])|| empty($_POST['senha'])){
						header("location:login.php?campos_obrigatorios");
					}else {
						$usuario = new Usuario;
						$usuario->setEmail($_POST['email']);
						$dados = $usuario->buscar();
						if (!$dados) {
							echo "isto non ecxiste";
							header("location:login.php?nao_encontrado");
						} else {
							if (password_verify($_POST['senha'], $dados['senha'])) {
								echo "si";
							} else {
								echo "no";
							}
							
						}
						

					}
				} 

				?>

    </div>
    
    
</div>        
        
        
    



<?php 
require_once "inc/rodape.php";
?>

